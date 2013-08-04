<?php
$host="182.50.133.55"; // Host name 
$username="eiccitorg"; // Mysql username 
$password="Galgotia@54321"; // Mysql password 
$db_name="eiccitorg"; // Database name 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>