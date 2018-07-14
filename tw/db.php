<?php
	/* Database connection settings */
	$server = 'mysql.hostinger.ro';
	$username = 'u188286844_admin';
	$password = 'admin4253';
	$database = 'u188286844_tw';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>