<?php
// Routeur pour le serveur local : php -S localhost:8000 router.php
// Reproduit les réécritures du .htaccess (ignoré par le serveur intégré de PHP).
if (php_sapi_name() !== 'cli-server') {
    http_response_code(404);
    exit;
}

$root = __DIR__;
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Fichiers réels (css, js, images, .php appelés directement)
if ($path !== '/' && is_file($root . $path)) {
    return false;
}

// Enlever les slashs finaux
if ($path !== '/' && str_ends_with($path, '/') && !is_dir($root . $path)) {
    header('Location: ' . rtrim($path, '/'), true, 301);
    exit;
}

if ($path === '/') {
    $file = $root . '/index.php';
} elseif (preg_match('#^/([a-zA-Z0-9_-]+)$#', $path, $m)) {
    foreach (['pages/blog', 'pages/tuto', 'pages/legal', 'pages'] as $dir) {
        if (is_file("$root/$dir/{$m[1]}.php")) {
            $file = "$root/$dir/{$m[1]}.php";
            break;
        }
    }
}

if (empty($file)) {
    http_response_code(404);
    $file = $root . '/404.php';
}

$_SERVER['SCRIPT_FILENAME'] = $file;
$_SERVER['SCRIPT_NAME'] = $_SERVER['PHP_SELF'] = substr($file, strlen($root));
chdir(dirname($file));
require $file;
