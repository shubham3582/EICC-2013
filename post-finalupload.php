<?php include('db.php');
session_start();

//check logged in or not!
if(!isset($_SESSION['email'])){

include('header.php');
}
else {
include('usr/header.php');
}
echo '<tr>
			<td>&nbsp;</td>
			<td valign="top" align="center">
				<table width="100%" bgcolor="#e7e7e7" style="border-top:1px solid #BBC5C6;border-left:1px solid #BBC5C6;border-right:1px solid #BBC5C6;border-bottom:1px solid #BBC5C6;margin-top:0px;margin-left:0px;">
					<tbody><tr>';
					include('menu.php');
					echo '</tbody></table>
				<br>
				<center></center>
				<br>
			</td>
			<td>&nbsp;</td>
		<td valign="top" align="center" style="text-align:justify;">			<div id="main" class=maincontent style='.'width:680>';
//=============Starting Registration Script==========
$paperid    = $_POST['paperid'];
$title    = $_POST['title'];
$abstract    = $_POST['abstract'];
$keyword    =$_POST['keyword'];
$author    = $_POST['author'];
$affilation    = $_POST['affilation'];

$coauth1    =$_POST['coauth1'];
$affilation1    = $_POST['affilation1'];
$coauth2   = $_POST['coauth2'];
$affilation2    =$_POST['affilation2'];
$coauth3    =$_POST['coauth3'];
$affilation3    = $_POST['affilation3'];
$coauth4   = $_POST['coauth4'];
$affilation4    =$_POST['affilation4'];





//$paper = $_POST['paper']; 
//=============To Encrypt Password===================
//$pw    =    md5($pw);
//============New Variable of Password is Now with an Encrypted Value========
 if ($_FILES["filedoc"]["error"] > 0)
  {
  echo '<font color="#FF0000" size="4">Error: ' . $_FILES["filedoc"]["error"] .'<br/><br/>File Not Uploaded ! Please Try Again!</font>';
  }
  
else
  {  $query = "select * from finalupload where paperid='$paperid' and title='$title'";
 
$res = mysql_query($query); //Executing query and saving result in Result Set
 
//************mysql_num_rows is counting num of rows************
 
$rows = mysql_num_rows($res);
 
//**********if $userName and $password will match database, The above function will return 1 row
 
if($rows==1)
  { echo "Already Uploaded Paper";
  }
  
  else {
  
  move_uploaded_file($_FILES["filedoc"]["tmp_name"], "final/doc/" .basename($_FILES["filedoc"]["name"]."_safe")); 
  //$filename= strtolower($_FILES["file"]["name"]);
  $filenamedoc=$_FILES["filedoc"]["name"]."_safe";
  
  $filetypedoc=$_FILES["filedoc"]["type"];
  $filesizedoc= ($_FILES["filedoc"]["size"] / 1024);
  $read_extension = explode(".", $filenamedoc);
$ext = $read_extension[2];
if($ext =='docx_safe')
{ $ext='docx';
} 
elseif($ext=='doc_safe') {
	$ext='doc';}
else { $ext='doc'; }
$new_namedoc = $paperid."_".$title.".".$ext;
rename("final/doc/".$filenamedoc, "final/doc/".$new_namedoc);
  
  
  
   move_uploaded_file($_FILES["filepdf"]["tmp_name"], "final/pdf/" .basename($_FILES["filepdf"]["name"]."_safe")); 
  //$filename= strtolower($_FILES["file"]["name"]);
  $filenamepdf=$_FILES["filepdf"]["name"]."_safe";
  
  $filetypepdf=$_FILES["filepdf"]["type"];
  $filesizepdf= ($_FILES["filepdf"]["size"] / 1024);
  
  $read_extension = explode(".", $filenamepdf);
$ext = $read_extension[2];
if($ext='pdf_safe'){
	$ext='pdf';
	}
	else
	$ext='pdf';
$new_namepdf = $paperid."_".$title.".".$ext;
rename("final/pdf/".$filenamepdf, "final/pdf/".$new_namepdf);
  
  
  move_uploaded_file($_FILES["filecpr"]["tmp_name"], "final/cpr/" .basename($_FILES["filecpr"]["name"]."_safe")); 
  //$filename= strtolower($_FILES["file"]["name"]);
  $filenamecpr=$_FILES["filecpr"]["name"]."_safe";
  
  $filetypecpr=$_FILES["filecpr"]["type"];
  $filesizecpr= ($_FILES["filecpr"]["size"] / 1024);
  
  $read_extension = explode(".", $filenamecpr);
$ext = $read_extension[2];
if($ext='pdf_safe'){
	$ext='pdf';
	}
	else
	$ext='jpg';
$new_namecpr = $paperid."_".$title.".".$ext;
rename("final/cpr/".$filenamecpr, "final/cpr/".$new_namecpr);
  
  echo '<div align="justify">
  <table width="670" height="330" border="0">
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">Upload</th>
      <th scope="row">'.$filenamedoc.' And '.$filenamepdf.'</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">File Type</th>
      <th scope="row">'.$filetypedoc.' And '.$filetypepdf.'</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">File Size</th>
      <th scope="row">'.$filesizedoc.' And '.$filesizepdf.'KB</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="3" class="tdmenutable" scope="row">Your  Papers</th>
    </tr>';
    
    
 // rename($filename,$email.$filename);
  
if(isset($_POST['upload'])) //===When I will Set the Button to 1 or Press Button to register
{
$query    =    "insert into finalupload(paperid,title,abstract,keyword,author,affilation,coauth1,affilation1,coauth2,affilation2,coauth3,affilation3,coauth4,affilation4,filenamedoc,filenamepdf,filenamecpr)values('$paperid','$title','$abstract','$keyword','$author','$affilation','$coauth1','$affilation1','$coauth2','$affilation2','$coauth3','$affilation3','$coauth4','$affilation4','$filenamedoc','$filenamepdf','$filenamecpr')";
$res    =    mysql_query($query);




$result = mysql_query("SELECT * FROM finalupload WHERE paperid='$paperid'");

while($row = mysql_fetch_array($result))
  { 
  echo '<tr>
      <th scope="row"><span style='.'color:darkgreen;'.'>EICCPPR';
	  echo $row['paperno'];
	  echo '</span></th><th scope="row">'.$row['filename'].'</th>
      <td>&nbsp;</td>
    </tr>';
 
  }

echo '<tr>
      <th colspan="2" scope="row">&nbsp;</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">Uploaded Paper ID</th>
      <th scope="row"><b><font color="Green">'.$paperid.'</font></b></th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>';
  
//mysql_query('UPDATE upload paperid = '.$paperid.' WHERE title ='.$title);

   $to = $email;
   $subject = "Final Paper Submission in EICC 2013";
   $message = '<br>Uploaded Paper Details: <br>Paper ID: '.$paperid.'<br/>Paper Title: '.$title.'<br/>Abstract: '.$abstract.'<br/>Keywords: '.$keyword.'<br/>Authors:'.$author.', '.$coauth1.', '.$coauth2.', '.$coauth3.', '.$coauth4.'<br/><br/>You uploaded your final paper for EICC 2013<br><span style='.'color:darkgreen;'.'>Please Use Paperid for furthur refrence<br>Thank You<br>EICC 2013</span>';
   $header = "From:noreply@eiccit.org \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail($to,$subject,$message,$header);
   if( $retval == true )  
   {
     
   }
   else
   {
      
   }
}
//header('location:success_upload.php');

	
	echo '<div align="justify"><font color="#FF0000" size="3"><br/>Thank You! <br/>Successfully Uploaded Your Paper</font></div>';
	echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
}
		include('footer.php');

//}

 }
?>