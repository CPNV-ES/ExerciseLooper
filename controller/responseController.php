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

    function addResponse()
    {        
        require "view/test.php";
        //response::createResponse($_POST);
    }
}
?>