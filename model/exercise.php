<?php
include_once "db.php";
class exercise
{

    private $db;
    public $id;
    public $title;
    public $state;


    public function getById($id)
    {
        $db = db::connect();
        $req = "SELECT `idExercises`,`title`,`state` FROM `exercises` WHERE idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $key => $value) {
            $this->title = $value['title'];
            $this->id = $value['idExercises'];
            $this->state = $value['state'];
        }
    }


    public static function deleteById($id)
    {
        $db = db::connect();
        $req = "DELETE FROM `exercises` WHERE idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
    }

    public static function createExercise($title)
    {
        $db = db::connect();
        $req = "INSERT INTO `exercises` VALUES(`idExercises`,?,?)";
        $stmt = $db->prepare($req);
        $stmt->execute(array($title,1));
        return $db->lastInsertId();
    }

    public static function updateById($id, $editedTitle, $editedState)
    {
        $db = db::connect();
        $req = "UPDATE `exercises` SET title=?,state=?  WHERE idExercises = ? ";
        $stmt = $db->prepare($req);
        $stmt->execute(array($editedTitle, $editedState, $id));
    }

    public static function updateStateById($editedState,$id)
    {
        $db = db::connect();
        $req = "UPDATE `exercises` SET state=?  WHERE idExercises = ? ";
        $stmt = $db->prepare($req);
        $stmt->execute(array($editedState,$id));
    }


    public static function getAll()
    {

        $db = db::connect();
        $req = "SELECT `idExercises`,`title`,`state` FROM `exercises`";
        $stmt = $db->prepare($req);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $ex = new exercise();
            $ex->id = $Key['idExercises'];
            $ex->title = $Key['title'];
            $ex->state = $Key['state'];
            $array[] = clone $ex;
        }
        return $array;
    }

    public static function getByState($state)
    {
        $db = db::connect();
        $stmt =$db->prepare("SELECT `idExercises`,`title`,`state` FROM `exercises` WHERE `state` = ?");
        $stmt->execute(array($state));
        $result = $stmt->fetchAll();
        return $result;
    }
}
