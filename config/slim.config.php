<?php

/**
 * Create a Slim object in order to manage the slim framework properly.
 * 
 * Set the default header to json 
 * 
 */

$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');