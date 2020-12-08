<?php

class response
{

    public $id;
    public $content;
    public $FK_idQuestions;

    public  function __construct()
    {
    }
    public static function createResponse($content, $fullfilment)
    {
        echo($fullfilment);
        $db = db::connect();
        $req = "INSERT INTO `responses` (`FK_idQuestions`, `FK_idFullfilments`, `content`)VALUES(?,?,?)";
        $stmt = $db->prepare($req);
        foreach ($content as $key => $value) {
            $stmt->execute(array($key, $fullfilment, $value));
        }
    }
    
    /*public static function getByIdQuestion($id)
    {
        $db = db::connect();
        $req = "SELECT `idResponses`,`content`,`FK_idQuestions` FROM `responses` WHERE FK_idQuestions = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $que = new response();
            $que->id = $Key['idResponses'];
            $que->content = $Key['content'];
            $array[] = clone $que;
        }
        return $array;
    }*/

    public static function getByIdFullfilment($id)
    {
        $db = db::connect();
        $req = "SELECT `idResponses`,`content` FROM `responses` WHERE FK_idFullfilments = ?";
        $stmt = $db->prepare($req);
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $Key) {

            $que = new response();
            $que->id = $Key['idResponses'];
            $que->content = $Key['content'];
            $array[] = clone $que;
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
