<?php

function getDB()
{
    $connexion = new PDO('mysql:host=localhost; dbname=mydb', 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}
?>