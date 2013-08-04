<?php include('db.php');

// load library
require 'php-excel.class.php';
$up=mysql_query("SELECT email,name,address,affiliation,major,degree,comment from register");
if(!$up )
{
  die('Could not get data: ' . mysql_error());
  
}
while($rs = mysql_fetch_array($up))
{
// create a simple 2-dimensional array 
$data[] = $rs;
//$data = array( 
  //      1 => array ($rs[1], $rs[3],$rs[4],$rs[5],$rs[6],$rs[7],$rs[8]));
	//	$rs .= +1;
}


// generate file (constructor parameters are optional)
$xls = new Excel_XML('UTF-8', false, 'Registeration Details');
$xls->addArray($data);
$xls->generateXML('Register Data');


?>