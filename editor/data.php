<?php include('db.php');

// load library
require 'php-excel.class.php';
$up=mysql_query("SELECT paperno,title,author,affiliation,coauth1,coauth2,coauth3,coauth4,upload.email,degree FROM upload,register WHERE register.email=upload.email");
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
$xls = new Excel_XML('UTF-8', false, 'Required Data');
$xls->addArray($data);
$xls->generateXML('Required data');


?>