<?php

include_once "db/db.php";
class fullfilments{

    public $id;
    public $date;
    public $FK_idExercises;
    public $FK_idResponses;

    public  function __construct($id,$date,$fk_ex,$fk_resp)
    {
        $this->id = $id;
        $this->date = $date;
        $this->FK_idExercises = $fk_ex;
        $this->FK_idResponses = $fk_resp;
    }

    public static function create($idExercise,$idResponses)
    {
        $db = db::connect();
        $date = date("Y.m.d","hh.mm.ss");
        $req = "INSERT INTO `fullfilments` VALUES(`idExercises`,?,?,?)";
        $stmt = $db->prepare($req);
        $stmt->execute(array($date,$idExercise,$idResponses));
    }

    public static function getAll()
    {
        $db = db::connect();
        $req = "SELECT `idFullfilments`,`date`,`FK_idExercises`,`FK_idResponses` FROM `fullfilments`";
        $stmt = $db->prepare($req);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $ex = new fullfilments($Key['idFullfilments'],$Key['date'],$Key['FK_idExercises'],$Key['FK_idResponses']);
            $array[] = clone $ex;
        }
        return $array;
    }


}







?>