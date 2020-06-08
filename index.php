
<?php 
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/fibonacci' :
        require __DIR__ . '/views/fibonacci.php';
        break;
    case '/port' :
        require __DIR__ . '/views/port.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/home.php';
        break;
}

?>