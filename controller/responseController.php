<?php
require_once "model/response.php";

class responseController
{
    function getResponse()
    {
        $value = $_GET['id'];
        $response = response::getByIdQuestion($value);
        require "view/responseView.php";
    }
}
?>