<?php
class Personne extends Model{
	public static $_table = 'personnes';
	public static $_id_column = 'id';
	
	public static function getAll(){
		return Model::factory('Personne')->find_many();	
	}
}
?>