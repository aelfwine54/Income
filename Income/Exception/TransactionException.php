<?php
/**
 * Summary of TransactionException
 * Custom class to throw Database type exceptions
 */
class TransactionException extends Exception{
	public function TransactionException(String $message){
		throw new Exception($message);
	}
	
	public function TransactionException(PDOException $message){
		throw new Exception($message);
	}
}
?>