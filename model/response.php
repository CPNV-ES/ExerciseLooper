<?php

class response
{

    public $id;
    public $content;
    public $FK_idQuestions;
    public $title;
    public $type;

    public  function __construct()
    {
    }
    public static function createResponse($content)
    {
        $db = db::connect();
        $req = "INSERT INTO `responses` VALUES(`idResponses`,?)";
        $stmt = $db->prepare($req);
        $stmt->execute(array($content));
    }

    public static function getByIdQuestion($id)
    {
        $array = [];
        $db = db::connect();
        $req = "SELECT `idResponses`,`content`,`FK_idQuestions`, `title`, `type`, FROM `responses` INNER JOIN `questions` WHERE responses.FK_idQuestions = 1 AND responses.FK_idQuestions = questions.idQuestions";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $que = new response();
            $que->id = $Key['idResponses'];
            $que->content = $Key['content'];
            $que->FK_idQuestions = $Key['FK_idQuestions'];
            $que->title = $Key['title'];
            $que->type = $Key['type'];
            $array = clone $que;
        }
        return $array;
    }

    public static function updateById($id, $editedContent)
    {
        $db = db::connect();
        $req = "UPDATE `responses` SET content=?, WHERE idResponses = ? ";
        $stmt = $db->prepare($req);
        $stmt->execute(array($editedContent, $id));
    }

    private static function deleteResponseById($id)
    {
        $db = db::connect();
        $req = "DELETE FROM `responses` WHERE idResponses = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
    }
}
