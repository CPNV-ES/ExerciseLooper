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
    require "view/createExerciseView.php";
}

function manageExercise()
{
    require "view/showExerciseView.php";
}

function errorPage404()
{
    require "view/errorPage404.php";
}

function newExercise()
{
    require "view/fieldExerciseView.php";
}
?>