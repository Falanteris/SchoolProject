<?php

class user{
	public static $username = "abc";
	private $password = "1234234234";
	
	public static $job = "cashier";
	
}
class secondCashier extends user{
	public static $job = "Bartender";
	
}
	
	$data = new user();
	echo $data::$username;
	
	echo user::$job;
	echo secondCashier::$job;
	
	$loadThis = new DOMDocument();
	$fileload = "WaifuTrivia.html";
	libxml_use_internal_errors(true);
	$loadThis->loadHTMLFile($fileload);
	libxml_use_internal_errors(false);
	echo htmlspecialchars($loadThis->saveHTML());

?>