<?php
define('SITE_PATH', realpath(dirname(__FILE__)));
$site_url = str_replace('\\', '/', str_replace(realpath( $_SERVER['DOCUMENT_ROOT']), '', SITE_PATH));
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST']. $site_url);

require_once SITE_PATH . "\controller\controller.php";

try {
    
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            
            case 'homeView' :
                homePage();
                break;
           /*
            case 'vue_observation' :
                observation();
                break;
            
            case 'vue_inscription' :
                inscription(@$_POST['fisrt_name'], @$_POST['last_name'], @$_POST['email'], @$_POST['username'], @$_POST['password'], @$_POST['conf_password']);
                break;*/
            default :
                throw new Exception("Action non valide");
        }
    } else
        
        homePage();
} catch (Exception $e) {
    erreur($e->getMessage());
}