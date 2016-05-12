<?php

require dirname(__DIR__) . "/../vendor/autoload.php";

$config = array(
    'display_errors' => true
);

// Create and configure Slim app
$app = new \Slim\App(["settings" => $config]);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();