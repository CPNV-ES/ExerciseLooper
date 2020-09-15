<?php
require_once "model/model.php";

// Affichage de la page de l'accueil
function homePage()
{
    require "view/homeView.php";
}

function takeExercise()
{
    require "view/takeExerciseView.php";
}

function createExercise()
{
    require "view/takeExerciseView.php";
}

function manageExercise()
{
    require "view/takeExerciseView.php";
}

function errorPage404()
{
    require "view/errorPage404.php";
}


?>