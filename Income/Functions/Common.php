<?php
function getConfig(){
	$file = 	file_get_contents("Income.config.xml");
	return new SimpleXMLElement($file);
}
?>