<?php
class Connection{
	
	private static $_instance;
	private static $bdd;
	
	private function __construct(){
		$config = getConfig();

		try
		{
			self::$bdd = new PDO('mysql:host=localhost;dbname='.$config->connection->database, $config->connection->username, $config->connection->password);
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}
	
	private function __clone(){}

	public static function getInstance () {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
		
        return self::$bdd;
    }

}

?>