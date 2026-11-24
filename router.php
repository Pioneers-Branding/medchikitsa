<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = __DIR__ . $uri;

// If existing static file, serve it directly
if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    return false;
}

// If file exists with .php extension, serve it
if ($uri !== '/' && file_exists($path . '.php')) {
    include $path . '.php';
    return true;
}

// Default index.php
if ($uri === '/' || $uri === '/index' || $uri === '/index.php') {
    include __DIR__ . '/index.php';
    return true;
}

// Otherwise let php handle it or return 404
return false;
?>