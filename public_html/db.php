<?php 
$db=mysql_connect("mysql.hostinger.com.ua","u192235433_rndp","123789456");
mysql_select_db("u192235433_rndp", $db) or die('<p align="center"> Error! Нет подключения к БД MySQL</p>');
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
?>