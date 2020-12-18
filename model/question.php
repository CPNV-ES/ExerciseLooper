<?php 

include_once "db.php";

class question{
    
    public $id;
    public $title;
    public $type;
    public $typeName;
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
            $que->fetchTypeByName();
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
        $que->fetchTypeByName();
        return $que;
    }

    public static function getQuestionExName($id)
    {
        $array = [];
        $db = db::connect();
        $req = "SELECT `idQuestions`, questions.title AS `Qtitle`, `type`, `Fk_idExercises`, exercises.title AS `Etitle` FROM `questions` INNER JOIN `exercises` WHERE questions.FK_idExercises = exercises.idExercises AND exercises.idExercises = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        
        return $result = $stmt->fetchAll();
    }
    
    private function fetchTypeByName()
    {
        switch($this->type){

            case 1:
                $this->typeName = "Single line";
                break;
            case 2:
                $this->typeName = "Single line list";
                break;
            case 3:
                $this->typeName = "Multi line";
                break;
        }
    }

}
