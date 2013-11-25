<?php

/**
 *
 * Include all the main vendor's files
 * 
 * Load
 *  > PHPactiveRecord
 *  > Slim Framework
 */
require_once "vendor/autoload.php";


/**
 *
 * Load the main logic files. 
 * 
 * Load
 *  > Controllers with callable functions
 *  
 */
foreach ( glob("controllers/*.php") as $filename ) 
    require_once $filename;

/**
 *
 * Load the main configuration files. 
 * 
 * Load
 *  > activerecord config
 *  > slim config
 *  > slim routes
 *  
 */
foreach ( glob("config/*.php") as $filename ) 
    require_once $filename;


/**
 *
 * Bootstrap the application!
 * 
 */
$app->run();

