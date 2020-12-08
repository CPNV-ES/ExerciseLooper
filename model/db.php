<?php

class db
{
    static function connect()
    {
        $ini_array = parse_ini_file("dbconfig.ini");
        $dsn= "mysql:host=$ini_array[dbhost];dbname=$ini_array[dbname]";
        return new PDO($dsn, $ini_array['dbuser'], $ini_array['dbpass']);
    }
}
