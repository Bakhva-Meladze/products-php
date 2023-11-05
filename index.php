<?php

use model\Database;
use model\Route;

spl_autoload_register(function ($className) {
    include_once($className . ".php");
    echo     $className . ".php";
    echo "<br>";
});
$path = $_SERVER['REQUEST_URI'];
$url = '/scandiweb';

require('Router/Route.php');
(new model\Route)->run($path);
