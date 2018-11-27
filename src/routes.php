<?php

use Slim\Http\Request;
use Slim\Http\Response;

use Slimvc\Controller as Controller;
use Slimvc\Model as Model;

// Routes

$app->get('/', Controller\Home::class . ':home');

/*
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slimvc '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

*/