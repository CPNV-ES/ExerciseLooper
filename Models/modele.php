<?php

function getDB()
{
    $connexion = new PDO('mysql:host=localhost; dbname=mydb', 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}

function checkpass($login, $password)
{
    $connexion = getDB();

    $requetelog = "SELECT Password,Admin FROM users where Username = ?";

    $prepare = $connexion->prepare($requetelog);
    $prepare->execute(array($login));
    $resultatslog= $prepare->fetchAll();


    foreach ($resultatslog as $loguser) {
        if (password_verify($password, $loguser['Password'])) {
            if ($loguser['Admin'] == 1) {
                $_SESSION['Admin'] = true;
            }
            return true;
        } else {
            return false;
        }
    }
}

function EncryptPassword($password)
{
    $EncryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    return $EncryptedPassword;
}

//fonction pour se s'inscrire
function ToRegister($prenom, $nom, $username, $mail, $EncryptedPassword)
{
    $connexion = getDB();
    $erreurinscription = "RAS";

    $requetelog = "SELECT Username,Mail FROM users";

    $prepare = $connexion->prepare($requetelog);
    $prepare->execute();
    $resultats1 = $prepare->fetchAll();


    foreach ($resultats1 as $useremail) {
        if (strtoupper($mail) == strtoupper($useremail['Mail'])) {
            $erreurinscription = "email";
            return $erreurinscription;
        }
        if ($username == $useremail['Username']) {
            $erreurinscription = "user";
            return $erreurinscription;
        }
    }

    //Insertion des données de l'user
    $requetelog2 = "INSERT into users (Username,Password,Nom,Prenom,Mail,Admin) VALUES(?,?,?,?,?,0);";
    $prepare = $connexion->prepare($requetelog2);
    $prepare->execute(array($username,$EncryptedPassword,$nom,$prenom,$mail));


    return $erreurinscription;

}

?>