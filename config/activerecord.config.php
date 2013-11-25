<?php

/**
 * Create an Active Record object  
 * 
 */

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory('models');
$cfg->set_connections(
  array(
    'development' => 'mysql://root@localhost/test',
    #'development' => 'mysql://root:root@localhost/test',
    #'test' => 'mysql://username:password@localhost/test_database_name',
    #'production' => 'mysql://username:password@localhost/production_database_name'
  )
);

$cfg->set_default_connection('development');