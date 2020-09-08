<?php

require "modele/modele.php";

// Affichage de la page de l'accueil
function accueil()
{
    require "vue/vue_accueil.php";
}

//quand on se login
function login($login, $password)
{
    if (!($login == "") && !($password == "")) {
        $resultat = checkPass($login, $password);
        if ($resultat) {
            $_SESSION['login'] = $login;
            require "vue/vue_success.php";
        } else {
            $erreurmdp = 1;
            require 'vue/vue_login.php';
        }
    } else {
        $erreurmdp = 0;
        require 'vue/vue_login.php';
    }

}

function inscription($prenom, $nom, $username, $email, $password, $confpassword)
{
    if (!($prenom == "") && !($nom == "") && !($username == "") && !($email == "") && !($password == "") && !($confpassword == "")) {
        if ($password == $confpassword) {
            $EncryptedPassword = EncryptPassword($password);
            $res = ToRegister($prenom, $nom, $username, $email, $EncryptedPassword);
            if ($res == "email") {
                $erreurinscription = 3;
                require 'vue/vue_login.php';
            } else if ($res == "user") {
                $erreurinscription = 4;
                require 'vue/vue_login.php';

            } else {
                require 'vue/vue_successregister.php';
            }
        } else {
            $erreurinscription = 2;
            require 'vue/vue_login.php';
        }

    } else {
        $erreurinscription = 0;
        require 'vue/vue_login.php';
    }

}

?>