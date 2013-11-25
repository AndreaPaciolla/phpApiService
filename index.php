<?php

require "vendor/autoload.php";


$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

$app->get('/books/:id', function ($id) {
    //Show book identified by $id
});