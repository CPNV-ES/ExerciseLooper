<?php
require_once "model/exercise.php";

class exerciseController
{
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
    function destroyExercise()
    {

        
    }

    function newExercise()
    {
        $value = $_POST['exercise']['title'];
        $idExercise = exercise::createExercise($value);
        $_SESSION['exId'] = $idExercise;
        require "view/fieldExerciseView.php";
    }

    function displayExercise($id)
    {
        $ex = new exercise();
        $ex->getById($id);
        $questions = question::getByIdExercises($ex->id);
        $_SESSION['questions'] =  $questions;
        $_SESSION['exId'] = $id;
        require "view/fieldExerciseView.php";
    }
}
?>