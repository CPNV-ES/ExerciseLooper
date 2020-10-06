<?php


define('SITE_PATH', realpath(dirname(__FILE__)));
$site_url = str_replace('\\', '/', str_replace(realpath( $_SERVER['DOCUMENT_ROOT']), '', SITE_PATH));
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST']. $site_url);

require_once SITE_PATH . "/controller/controller.php";

ob_start();

$request = explode("?", $_SERVER['REQUEST_URI'], 2);
$next = isset($_GET['next']) ? $_GET['next'] : false;


switch ($request[0]) {
    default:
        http_response_code(404);
        errorPage404();
        break;
    case '':
    case '/' :
        homePage();
        break;
    case '/create' :
        createExercise();
        break;
    case '/take' :
        takeExercise();
        break;
    case '/manage' :
        manageExercise();
        break;
    case '/newExercise' :
        newExercise();
        break;
}

$content = ob_get_clean();
require "view/template.php";