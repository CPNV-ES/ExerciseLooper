<?php
<<<<<<< HEAD
require_once "model/response.php";

class responseController
{
    function getResponse()
    {
        $value = $_GET['id'];
        $response = response::getByIdQuestion($value);
        require "view/responseView.php";
=======

require_once "model/question.php";
require_once "model/response.php";

class responseController{

    function displayResults($idExercise){
        $modelQu = question::getByIdExercises($idExercise);
        $modelEx = new exercise();
        $modelEx->getById($idExercise);
        require "view/showResultsView.php";
>>>>>>> Dev
    }
}
?>