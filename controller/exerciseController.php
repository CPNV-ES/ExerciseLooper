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
        $modelEx = new exercise();
        require "view/takeExerciseView.php";
    }

    function createExercise()
    {
        require "view/createExerciseView.php";
    }

    function manageExercise()
    {
        $modelEx = new exercise();
        require "view/showExerciseView.php";
    }

    function updateStateExercise()
    {
        $editedvalue = $_GET['editedState'];
        $value = $_GET['id'];
        exercise::updateStateById($editedvalue,$value);
        header("Location: /?controller=exercise&action=manageExercise");
    }
    function errorPage404()
    {
        require "view/errorPage404.php";
    }
    function destroyExercise()
    {
        $value = $_GET['id'];
        exercise::deleteById($value);
        header("Location: /?controller=exercise&action=manageExercise");
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
        $_SESSION['exId'] = $id;
        require "view/fieldExerciseView.php";
    }
}
?>