<?php declare(strict_types = 1);

return [
    ['GET', '/', ['no_framework_app\Controllers\Homepage', 'show']],
    ['GET', '/hello-world', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];