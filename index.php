<?php
$studentId = getenv("STUDENT_ID") ?: "BRAK";
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>WebApp 50255</title>
</head>
<body>
  <h1>Hello World!</h1>
  <p>Unikalny komunikat: student 50255</p>
  <p>STUDENT_ID (z Azure): <strong><?php echo htmlspecialchars($studentId); ?></strong></p>
</body>
</html>
