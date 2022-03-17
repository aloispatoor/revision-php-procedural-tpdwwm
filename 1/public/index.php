<?php
// VARIABLES D'ENVIRONNEMENT
    declare(strict_types=1); 

    $root = dirname(__DIR__).DIRECTORY_SEPARATOR; 
    define('APP_PATH', $root.'app'.DIRECTORY_SEPARATOR);
    define('INCLUDES_PATH', $root.'app/includes'.DIRECTORY_SEPARATOR);
    define('VIEWS_PATH', $root.'views'.DIRECTORY_SEPARATOR);


    require APP_PATH . "App.php";
    require INCLUDES_PATH . "config.php";
