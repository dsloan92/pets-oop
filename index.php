<?php
//This is our controller!

//Turn on error reporting
ini_set("display_errors",1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
//require('classes/pet.php');



//Create an instance of the base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){

    $pet1 = new Pet();
    $pet1->eat();
    $pet1->talk();
    /*
    $view = new Template();
    echo $view->render('views/my-pets.php');
    */

    //echo "<h1>Hello World</h1>";
});

//Run fat free
$f3->run();
