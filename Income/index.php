<?php
require_once 'Orm/idiorm.php';
require_once 'Orm/paris.php';
require_once 'Data/Personne.php';

ORM::configure('mysql:host=localhost;dbname=income');
ORM::configure('username', 'income');
ORM::configure('password', 'gestion');
ORM::configure('logging', true);

include('Functions/Common.php');
include('./Connection/Connection.php');

//$connection = Connection::getInstance();
//echo "sdasf";
//$re = $connection->query("SELECT * FROM personnes");
//echo "sdasf";
//$rep = $re->fetchAll();

echo '<pre>';
print_r(Personne::getAll());
echo '</pre>';
echo "sdasf";

?>