<?php
  // Returns one shared database connection (created on first use)
  function db(): PDO
  {
      static $pdo = null;

      if ($pdo === null) {
          $dsn = sprintf(
              'mysql:host=%s;dbname=%s;charset=utf8mb4',
              getenv('DB_HOST'),
              getenv('DB_NAME')
          );

          $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASS'), [
              PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES => false,
          ]);
      }

      return $pdo;
  }