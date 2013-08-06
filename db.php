<?php
 
//*********Server Information to establish a connection ******
 
$host = 'localhost'; // Server Host Name
$user = 'eiccitorg'; // Server User Name
$password = ''; // Server Password
$db = 'eiccitorg'; // Your Database
 
//=======following function to establish a connection with server========================
$link = mysql_connect($host,$user,$password) or die('Error in Server information');
//=============================Select Your Database=======================================
mysql_select_db($db,$link) or die('Can not Select Databasse');
 
//***************End Connection Establishment***************************************
?>
