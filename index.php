<?php

require "vendor/autoload.php";


$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory('models');
$cfg->set_connections(
  array(
    'development' => 'mysql://root:root@localhost/test',
    #'test' => 'mysql://username:password@localhost/test_database_name',
    #'production' => 'mysql://username:password@localhost/production_database_name'
  )
);

$cfg->set_default_connection('development');

#var_dump( User::find_by_id(1) );

$app->get('/users/:id', 'getUser');




function getUser($id) {
    //Show book identified by $id
    
    echo json_encode(  User::all()  ); 
}

$app->run();