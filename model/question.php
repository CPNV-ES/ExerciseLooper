<?php 

include_once "db.php";

class question{
    
    public $id;
    public $title;
    public $type;
    public $FK_idExercises;

    public function __construct($id,$title,$type,$fk_ex)
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->FK_idExercises = $fk_ex;
    }

    public static function getByIdExercises($id)
    {
        $db = db::connect();
        $req = "SELECT `idQuestions`,`title`,`type`,`FK_idExercises` FROM `questions` WHERE FK_idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $que = new question($Key['idQuestions'],$Key['title'],$Key['type'],$Key['FK_idExercises']);
            $array[] = clone $que;
        }
        return $array;
    }

    public static function updateById($id,$editedTitle,$editedType)
    {
        $db = db::connect();
        $req = "UPDATE `questions` SET title=?,`type`=?  WHERE idQuestions = ? ";
        
        $stmt = $db->prepare($req);
        
        $stmt->execute(array($editedTitle,$editedType,$id));
        var_dump($stmt->debugDumpParams());
    }

    
    public static function createQuestion($title,$type,$FK_idExercises)
    {
        $db = db::connect();
        $req = "INSERT INTO `questions` VALUES(`idQuestions`,?,?,?)";
        $stmt = $db->prepare($req);
        $stmt->execute(array($title,$type,$FK_idExercises));
    }

    public static function deleteQuestionById($id)
    {
        $db = db::connect();
        $req = "DELETE FROM `questions` WHERE idQuestions = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
    }

    public static function getQuestion($id)
    {
        
        $db = db::connect();
        $req = "SELECT * FROM `questions` WHERE idQuestions = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetch();
        $que = new question($result['idQuestions'],$result['title'],$result['type'],$result['FK_idExercises']);
        return $que;
    }

}
