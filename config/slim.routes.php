<?php

$app->get('/users/:id', 'UserController::getUser');
$app->put('/users/:id', 'UserController::editUser');
$app->delete('/users/:id', 'UserController::delUser');
$app->get('/users', 	'UserController::getUsers');
$app->post('/users', 	'UserController::addUser');

