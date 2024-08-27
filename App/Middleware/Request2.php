<?php

namespace App\Middleware;

class Request2{
    public function __construct()
    {
        echo '<br>' . $_SERVER['SERVER_PORT'];
    }
}