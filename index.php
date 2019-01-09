<?php
/*
 * Amanda Williams
 * January 9, 2019
 * 328/howdy/index.php
 */

#Error Reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

#Require autoload
require_once ('vendor/autoload.php');

#create an instance of the Base class
$f3 = Base::instance();

#Turn on Fat-Free error reporting/debugging
$f3->set('DEBUG', 3);

#define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello World!</h1>';
    $view = new View;
    echo $view->render('views/home.html');
});

#run fat free | has to be the last thing in the index page.
$f3->run();