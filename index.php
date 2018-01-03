<?php
//Errors
//error_reporting(0);

require_once 'database/connect.php';
require_once 'config.php';
if (isset($_REQUEST['c']) and isset($_REQUEST['a'])) 
{
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    call_user_func(array($controller, $accion));
} else if (isset($_REQUEST['c']))
{
    $controller = strtolower($_REQUEST['c']);
    require_once "controller/$controller.controller.php";
    $controller = 'UserController';
    $controller = new $controller;
    $controller->Index();
} else 
{
    require_once "controller/index.controller.php";
    $controller = 'IndexController';
    $controller = new $controller;
    $controller->Index();
}