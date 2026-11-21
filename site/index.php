<?php session_start();

  // One-time data set by contact.php: read it, then delete it
  $flash  = $_SESSION['flash']  ?? null;
  $errors = $_SESSION['errors'] ?? [];
  $old    = $_SESSION['old']    ?? [];
  unset($_SESSION['flash'], $_SESSION['errors'], $_SESSION['old']);

  // Short helper to print user data safely in HTML
  function e($value) {
      return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Test Site</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main class="card">
      <h1>🐳 Docker Test Site with Compose</h1>
      <p>This page is served by <strong>nginx</strong> running inside a Docker container.</p>
      <ul>
        <li>Image: built from this repo's Dockerfile</li>
        <li>Web server: nginx</li>
        <li>Port inside container: 80</li>
      </ul>
      <p class="note">Edit <code>site/index.php</code>, rebuild, and refresh to see changes.</p>

       <section class="contact" id="contact">
        <h2>Contact Us</h2>

        <?php if ($flash): ?>
          <p class="alert alert-<?= e($flash['type']) ?>"><?= e($flash['message']) ?></p>
        <?php endif; ?>

        <form action="contact.php" method="post">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" maxlength="100" required
                 value="<?= e($old['name'] ?? '') ?>"
                 class="<?= isset($errors['name']) ? 'input-error' : '' ?>">
          <?php if (isset($errors['name'])): ?>
            <small class="field-error"><?= e($errors['name']) ?></small>
          <?php endif; ?>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" maxlength="150" required
                 value="<?= e($old['email'] ?? '') ?>"
                 class="<?= isset($errors['email']) ? 'input-error' : '' ?>">
          <?php if (isset($errors['email'])): ?>
            <small class="field-error"><?= e($errors['email']) ?></small>
          <?php endif; ?>

          <label for="mobile">Mobile number</label>
          <input type="tel" id="mobile" name="mobile" maxlength="10"
                 pattern="[6-9][0-9]{9}" inputmode="numeric"
                 placeholder="10-digit mobile number" required
                 value="<?= e($old['mobile'] ?? '') ?>"
                 class="<?= isset($errors['mobile']) ? 'input-error' : '' ?>">
          <?php if (isset($errors['mobile'])): ?>
            <small class="field-error"><?= e($errors['mobile']) ?></small>
          <?php endif; ?>

          <button type="submit">Send</button>
        </form>
      </section>

    </main>
  </body>
  </html>