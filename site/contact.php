<?php
  session_start();
  require __DIR__ . '/db.php';
  // Only accept form submissions (POST)
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header('Location: /');
      exit;
  }

  // 1. Read the fields
  $name   = trim($_POST['name'] ?? '');
  $email  = trim($_POST['email'] ?? '');
  $mobile = trim($_POST['mobile'] ?? '');

  // 2. Clean the mobile number: remove spaces and dashes,
  //    then remove a leading +91, 91 or 0 (e.g. "+91 98765-43210" -> "9876543210")
  $mobile = preg_replace('/[\s-]+/', '', $mobile);
  $mobile = preg_replace('/^(\+91|91|0)(?=\d{10}$)/', '', $mobile);

  // 3. Validate
  $errors = [];

  if ($name === '') {
      $errors['name'] = 'Please enter your name.';
  } elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
      $errors['name'] = 'Name must be 2 to 100 characters.';
  } elseif (!preg_match("/^[\p{L}\p{M} .'-]+$/u", $name)) {
      $errors['name'] = 'Name can contain only letters, spaces, dots, apostrophes and hyphens.';
  }

  if ($email === '') {
      $errors['email'] = 'Please enter your email.';
  } elseif (strlen($email) > 150 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Please enter a valid email address.';
  }

  if ($mobile === '') {
      $errors['mobile'] = 'Please enter your mobile number.';
  } elseif (!preg_match('/^[6-9]\d{9}$/', $mobile)) {
      $errors['mobile'] = 'Please enter a valid 10-digit Indian mobile number (starting with 6, 7, 8 or 9).';
  }

  // 4. If there are errors: go back to the form with the messages and the typed values
  if ($errors) {
      $_SESSION['errors'] = $errors;
      $_SESSION['old']    = ['name' => $name, 'email' => $email, 'mobile' => $mobile];
      $_SESSION['flash']  = ['type' => 'error', 'message' => 'Please correct the errors below.'];
      header('Location: /#contact');
      exit;
  }

  // 5. All good
  try {
      $stmt = db()->prepare(
          'INSERT INTO contacts (name, email, mobile) VALUES (:name, :email, :mobile)'
      );
      $stmt->execute([
          'name'   => $name,
          'email'  => $email,
          'mobile' => $mobile,
      ]);
  } catch (PDOException $e) {
      // Real error goes to the log (docker compose logs php), never to the visitor
      error_log('Contact form DB error: ' . $e->getMessage());

      $_SESSION['old']   = ['name' => $name, 'email' => $email, 'mobile' => $mobile];
      $_SESSION['flash'] = ['type' => 'error', 'message' => 'Sorry, something went wrong. Please try again later.'];
      header('Location: /#contact');
      exit;
  }

  $_SESSION['flash'] = [
      'type'    => 'success',
      'message' => "Thank you, $name! We received your details.",
  ];

  header('Location: /#contact');
  exit;