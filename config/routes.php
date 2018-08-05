<?php
// We can use static in format Class:method
$app->any("/", function($request, $response, $args) use ($container) {
    $controller = new \Controller\HelloController($container);
    $controller->sayHi();
});
