<?php

$app->get('/users/:id', 'UserController::getUser');
$app->get('/users', 	'UserController::getUsers');
$app->post('/users', 	'UserController::addUser');