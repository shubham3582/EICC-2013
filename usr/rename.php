<?php session_start();
include('db.php');
$filename=$_SESSION['filename'];
$email=$_SESSION['email'];
$query= mysql_query("SELECT paperno FROM upload where email='$email' AND filename='$filename'");

if(! $query )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($query, MYSQL_NUM))
{
	$paperno=$row[0];
$rename = 'EICCPPR'.$paperno;
$old_name = $email."-". $filename."_safe";
$read_extension = explode(".", $old_name);
$ext = $read_extension[2];
if($ext =='docx_safe')
{ $ext='docx';
} 
elseif($ext=='doc_safe') {
	$ext='doc';}
	elseif($ext='pdf_safe'){
	$ext='pdf';
	}
$new_name = $rename.".".$ext;
copy("upload/".$old_name, "upload/rename/".$new_name) or die("Unable to copy $old to $new.");
//rename("upload/".$old_name, "upload/rename/".$new_name);
}
header('Location: http://eiccit.org/usr/mymenu.php');
?>