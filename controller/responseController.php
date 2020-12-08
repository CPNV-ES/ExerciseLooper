<?php
require_once "model/response.php";
require_once "model/question.php";
require_once "model/fullfilment.php";

class responseController
{
    function getResponse()
    {
        $value = $_GET['id'];
        $question = question::getQuestionExName($value);
        require "view/responseView.php";
    }

    function displayResults($idExercise)
    {
        $modelQu = question::getByIdExercises($idExercise);
        $modelFu = fullfilments::getByIdExercise($idExercise);
        $modelEx = new exercise();
        $modelEx->getById($idExercise);
        require "view/showResultsView.php";
    }
    function addResponse()
    {
        $id = fullfilments::create($_POST['fullfilmentId']);
        response::createResponse($_POST['question'],$id);
        header("Location: /index");
    }
}
?>