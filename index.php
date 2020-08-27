<?php

session_start();
require "Controller/controller.php";
/*if (@$_GET['logout']) {
    session_destroy();
    header("location:index.php");
}*/

try {
    //pour passer d'une page a une autre
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            //page d'accueil
            case 'vue_accueil' :
                accueil();
                break;
            //page pour visualiser toutes les observations
            case 'vue_observation' :
                observation();
                break;
            //pour se login
            case 'vue_login' :
                login(@$_POST['username'], @$_POST['password']);
                break;
            //pour s'inscrire
            case 'vue_inscription' :
                inscription(@$_POST['fisrt_name'], @$_POST['last_name'], @$_POST['email'], @$_POST['username'], @$_POST['password'], @$_POST['conf_password']);
                break;
            default :
                throw new Exception("Action non valide");
        }
    } else
        //aller sur la page d'accueil
        accueil();
} catch (Exception $e) {
    erreur($e->getMessage());
}