<?php
/**
 * Summary of IncomeException
 * Home class for custom exceptions in the Income app
 */
class IncomeException extends Exception{
	
	/**
	 * Throws a new Exception with the specified string
	 * @param String $message
	 */
	public function IncomeException(String $message){
		throw new Exception($message);
	}
}
?>