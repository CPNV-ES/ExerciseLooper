<?php

require_once "model/question.php";
require_once "model/response.php";

class responseController{

    function displayResults($idExercise){
        $modelQu = question::getByIdExercises($idExercise);
        $modelEx = new exercise();
        $modelEx->getById($idExercise);
        require "view/showResultsView.php";
    }
}
?>