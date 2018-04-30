<?php

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/16
 * Time: 21:21
 */
session_start();
require_once 'main.php';

$main     = new main();
$route_arr = $main->run();