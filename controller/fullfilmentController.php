<?php
class fullfilmentController{

function showFullfilment($id){

    $modelFu = fullfilments::getById($id);
    $modelEx = new exercise();
    $modelEx->getById($modelFu['FK_idExercises']);
    $modelQu = question::getByIdExercises($modelEx->id);
    require "view/showFullfilmentView.php";
}

function showResponses($id){
    $modelFu = fullfilments::getByIdQuestion($id);
    $modelEx = exercise::getTitleByIdQuestion($id);
    require "view/showResponseView.php";
}

}
?>