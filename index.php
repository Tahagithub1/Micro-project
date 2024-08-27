<?php
// front controller
//echo $_SERVER['REQUEST_URI'];

include "vendor/autoload.php";

new App\Services\Request();
new App\Middleware\Request2();