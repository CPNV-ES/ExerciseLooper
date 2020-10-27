<?php 

require_once "model/question.php";

function createQuestion()
{
    
    $ExId = $_POST['exercise']['id'];
    $questionTitle = $_POST['field']['label'];
    $typeString = $_POST['field']['value_kind'];
    $typeInt = 0;
    switch($typeString){

        case 'single_line':
            $typeInt = 1;
            break;
        case 'single_line_list':
            $typeInt = 2;
            break;
        case 'multi_line':
            $typeInt = 3;
            break;
    }
    question::createQuestion($questionTitle,$typeInt,$ExId);
    header("Location: /displayExercise?id=".$ExId);

    unset($_POST);      
}

function getQuestion()
{
    $q = question::getByIdExercises($_POST['exercise']['id']);
     
}

function deleteQuestion()
{
    question::deleteQuestionById($_GET['id']);
    header("Location: /displayExercise?id=".$_SESSION['exId']);
}


?>