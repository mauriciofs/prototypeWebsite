<?php

require dirname(__DIR__) . "/../vendor/autoload.php";

use Application\Config\Config;

$config = array(
    'display_errors' => true
);

// Create and configure Slim app
$app = new \Slim\App(["settings" => $config]);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    $this->logger->addInfo("Something interesting happened");
    return $response->write("Hello " . $args['name']);
});

//DI
$container = $app->getContainer();
$container['logger'] = function($c) {
    //Check if directory exists first
    if (!is_dir(dirname(__FILE__) . '/../logs')){
        mkdir(dirname(__FILE__) . '/../logs');
    }
    
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};

// Run app
$app->run();