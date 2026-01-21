<?php
$studentId = getenv("STUDENT_ID") ?: "BRAK";

// текущий путь (/abc, /, /something)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// если путь "/" или пустой — главная страница
if ($path === '/' || $path === '' ) {
    ?>
    <!doctype html>
    <html>
    <head><meta charset="utf-8"><title>WebApp 50255</title></head>
    <body>
      <h1>Hello World!</h1>
      <p>Unikalny komunikat: student 50255</p>
      <p>STUDENT_ID (z Azure): <strong><?php echo htmlspecialchars($studentId); ?></strong></p>
    </body>
    </html>
    <?php
    exit;
}

// для любых других путей пробуем отдать файл, если он существует
$filePath = __DIR__ . $path;
if (is_file($filePath)) {
    // отдаем статический файл
    $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    if ($ext === 'html') header('Content-Type: text/html; charset=utf-8');
    readfile($filePath);
    exit;
}

// иначе — 404 и показываем 404.html
http_response_code(404);
readfile(__DIR__ . "/404.html");
