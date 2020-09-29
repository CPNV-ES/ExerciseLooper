<?php
class Db{
    private static $_connect;
    public static function connect()
    {
        try
        {
            if(!isset(self::$_connect))
            {
                $config = parse_ini_file(SITE_PATH . '/includes/config.ini');
                $dsn = "mysql:host=".$config['dbhost']."dbname=".$config['dbname'];
                self::$_connect = new \PDO($dsn, $config["dbuser"], $config['dbpass']);
            }
            return self::$_connect;
        }
        catch(PDOException $e)
        {
            echo "Connection failed ". $e->getMessage();
        }
    }
}
?>