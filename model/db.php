<?php

class db
{
    static function connect()
    {
        $connexion = new PDO('mysql:host=localhost; dbname=ExerciseLooper', 'loop', '1234');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
}
