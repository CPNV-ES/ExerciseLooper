<?php 

require_once "model/question.php";
require_once "controller/exerciseController.php";
class questionController{

    
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
    header("Location: /?controller=exercise&action=displayExercise&id=".$ExId);

    unset($_POST);      
}

function getQuestion()
{
    
    
    $q = question::getQuestion($_GET['id']);
    require "view/editQuestion.php"; 
}

function editQuestion($id)
{
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
    question::updateById($id,$_POST['question']['title'],$typeInt);
    $exController = new exerciseController();
    header("Location: /?controller=exercise&action=displayExercise&id=".$_SESSION['exId']);
}

function deleteQuestion()
{
    question::deleteQuestionById($_GET['id']);
    header("Location: /?controller=exercise&action=displayExercise&id=".$_SESSION['exId']);
}
}
?>