<?php

session_start();
require_once "controller/exerciseController.php";
require_once "controller/questionController.php";
require_once "controller/responseController.php";

$controller = $_GET['controller'] . "Controller";
$action = $_GET['action'];

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
}
if (empty($controller) || empty($action)) {
    require_once "view/homeView.php";
} else {
    if (class_exists($controller)) {
        $ctr = new $controller();
        if (method_exists($ctr, $action)) {
            if (isset($id)) {
                $ctr->$action($id);
            } else {
                $ctr->$action();
            }
        } else {
            require_once "view/errorPage404.php";
        }
    } else {
        require_once "view/errorPage404.php";
    }
}

require "view/template.php";
?>