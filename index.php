<?php
$studentId = getenv("STUDENT_ID") ?: "BRAK";

$path = $_GET['path'] ?? '/';
if ($path === '' ) $path = '/';

if ($path === '/' ) {
  ?>
  <!doctype html>
  <html>
  <head><meta charset="utf-8"><title>WebApp 50255</title></head>
  <body>
    <h1>Hello World!</h1>
    <p>Unikalny komunikat: student 50255</p>
    <p>STUDENT_ID (z Azure): <strong><?php echo htmlspecialchars($studentId); ?></strong></p>
    <p>Test 404: <a href="/index.php?path=/abc">kliknij tutaj</a></p>
  </body>
  </html>
  <?php
  exit;
}

http_response_code(404);
readfile(__DIR__ . "/404.html");

