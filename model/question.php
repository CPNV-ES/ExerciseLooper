<?php 

include "db.php";

class question{
    
    public $id;
    public $title;
    public $type;
    public $FK_idExercises;

    public static function getByIdExercises($id)
    {
        $db = db::connect();
        $req = "SELECT `idQuestions`,`title`,`type` FROM `questions` WHERE FK_idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $que = new question();
            $que->id = $Key['idExercises'];
            $que->title = $Key['title'];
            $que->type= $Key['type'];
            $array[] = clone $que;
        }
        return $array;
    }

    public static function updateById($id,$editedTitle,$editedType)
    {
        $db = db::connect();
        $req = "UPDATE `questions` SET title=?,type=?  WHERE idQuestions = ? ";
        $stmt = $db->prepare($req);
        $stmt->execute(array($editedTitle,$editedType,$id));
    }

}
