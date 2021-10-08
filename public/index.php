<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/test'){
    require('../controller/TestController.php');
    $test_controller = new TestController();
    $test_controller->viewTest();

} else {
    return require_once('../view/not_found.php');
}