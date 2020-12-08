<?php

include_once "db.php";

class fullfilments{

    public $id;
    public $date;
    public $FK_idExercises;

    public  function __construct($id,$date,$fk_ex)
    {
        $this->id = $id;
        $this->date = $date;
        $this->FK_idExercises = $fk_ex;
    }

    public static function create($idExercise)
    {
        $db = db::connect();
        $date = date("Y.m.d","hh.mm.ss");
        $req = "INSERT INTO `fullfilments` VALUES(`idExercises`,?,?)";
        $stmt = $db->prepare($req);
        $stmt->execute(array($date,$idExercise));
    }

    public static function getByIdExercise($id){
        $db = db::connect();
        $req = "SELECT `idFullfilment`, `date`,`FK_idExercises` FROM `fullfilments` WHERE FK_idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $ex = new fullfilments($Key['idFullfilment'],$Key['date'],$Key['FK_idExercises']);
            $array[] = clone $ex;
        }
        return $array;
    }


}







?>