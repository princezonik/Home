<?php require_once("constant.php"); ?>
<?php 

 #1 to create a database connection
	$connection =  mysql_connect(DB_SERVER,DB_USER,DB_PASS) || die("Cannot connect to database");

	$db_select = mysql_select_db(DB_NAME) || die(mysql_error());
?>