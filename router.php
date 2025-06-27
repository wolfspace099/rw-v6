<?php
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = trim($requestUri, '/');
if ($requestUri === '') {
    $targetFile = 'index.php';
} else {
    if (file_exists($requestUri) && !is_dir($requestUri)) {
        $mimeType = mime_content_type($requestUri);
        if (str_ends_with($requestUri, '.css')) {
            $mimeType = 'text/css';
        }
        header("Content-Type: $mimeType");
        readfile($requestUri);
        exit;
    }
    $addPhpPages = ['index', 'login', 'wordt-lid', 'dashboard', 'admindashboard', '403', 'logout'];
    $segments = explode('/', $requestUri);
    $targetFile = $segments[0];
    if (!str_ends_with($targetFile, '.php') && in_array($targetFile, $addPhpPages)) {
        $targetFile .= '.php';
    }
}
if (file_exists($targetFile)) {
    include $targetFile;
} else {
    include '404.php';
}
?>