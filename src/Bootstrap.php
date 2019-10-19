<?php declare(strict_types = 1);

namespace no_framework_app;

require  __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run;
if ($environment !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e) {
        echo "Todo: Friendly error page and send email to developer";
    });
}
$whoops->register();
$request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
$response = new \Http\HttpResponse;

$content = '<h1>Hello World</h1>';
$response->setContent($content);

foreach ($response->getHeaders() as $header) {
    header($header, false);
}

echo $response->getContent();