<?php include('db.php');
include('header.php');
echo '<tr>
			<td>&nbsp;</td>
			<td valign="top" align="center">
				<table width="100%" bgcolor="#e7e7e7" style="border-top:1px solid #BBC5C6;border-left:1px solid #BBC5C6;border-right:1px solid #BBC5C6;border-bottom:1px solid #BBC5C6;margin-top:0px;margin-left:0px;">
					<tbody><tr>';
					include('../menu.php');
					echo '</tbody></table>
				<br>
				<center></center>
				<br>
			</td>
			<td>&nbsp;</td>
		<td valign="top" align="center" style="text-align:justify;">			<div id="main" class=maincontent style='.'width:680>';
//=============Starting Registration Script==========

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
 if ($_FILES["file"]["error"] > 0)
  {
  echo '<font color="#FF0000" size="4">Error: ' . $_FILES["file"]["error"] .'<br/><br/>File Not Uploaded ! Please Try Again!</font>';
  }
else
  {  $query = "select * from upload where email='$email' and title='$title'";
 
$res = mysql_query($query); //Executing query and saving result in Result Set
 
//************mysql_num_rows is counting num of rows************
 
$rows = mysql_num_rows($res);
 
//**********if $userName and $password will match database, The above function will return 1 row
 
if($rows==1)
  { echo "Already Uploaded Paper";
  }
  else {
  
   $paperid='';
   $backlist = array('php', 'php3', 'php4', 'phtml','exe'); 
  $whitelist = array('doc', 'docx', 'pdf', 'jpeg');
  $filename=$_FILES["file"]["tmp_name"];
  if(in_array(end(explode('.', $filename)), $backlist)) { 
       echo 'Invalid file type';
	   exit(0);
  }
  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .basename($email."-". $_FILES["file"]["name"]."_safe")); 
  //$filename= strtolower($_FILES["file"]["name"]);
  $filename=$email."-". $_FILES["file"]["name"]."_safe";
  $filetype=$_FILES["file"]["type"];
  $filesize= ($_FILES["file"]["size"] / 1024);
  
  
  echo '<div align="justify">
  <table width="670" height="330" border="0">
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">Upload</th>
      <th scope="row">'.$filename.'</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">File Type</th>
      <th scope="row">'.$filetype.'</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th class="tdmenutable" scope="row">File Size</th>
      <th scope="row">'.$filesize.'KB</th>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="3" class="tdmenutable" scope="row">Your  Papers</th>
    </tr>';
    
    
 // rename($filename,$email.$filename);
  
if(isset($_POST['upload'])) //===When I will Set the Button to 1 or Press Button to register
{
$query    =    "insert into upload(email,title,abstract,keyword,author,affilation,coauth1,affilation1,coauth2,affilation2,coauth3,affilation3,coauth4,affilation4,filename)values('$email','$title','$abstract','$keyword','$author','$affilation','$coauth1','$affilation1','$coauth2','$affilation2','$coauth3','$affilation3','$coauth4','$affilation4','$filename')";
$res    =    mysql_query($query);




$result = mysql_query("SELECT * FROM upload WHERE email='$email'");

while($row = mysql_fetch_array($result))
  { 
  echo '<tr>
      <th scope="row"><span style='.'color:darkgreen;'.'>EICCPPR';
	  echo $row['paperno'];
	  echo '</span></th><th scope="row">'.$row['filename'].'</th>
      <td>&nbsp;</td>
    </tr>';
  $paperid="EICCPPR".$row['paperno'];
  }
  
  $read_extension = explode(".", $filename);
$ext = $read_extension[2];
if($ext =='docx_safe')
{ $ext='docx';
} 
elseif($ext=='doc_safe') {
	$ext='doc';}
	elseif($ext='pdf_safe'){
	$ext='pdf';
	}

$new_name = $paperid.'.'.$ext;
rename("upload/".$filename, "upload/".$new_name);
  
  

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
  
mysql_query('UPDATE upload paperid = '.$paperid.' WHERE title ='.$title);

   $to = $email;
   $subject = "Paper Submitted in EICC 2013";
   $message = '<br>Paper Details: <br>Paper ID: '.$paperid.'<br/>Paper Title: '.$title.'<br/>Abstract: '.$abstract.'<br/>Keywords: '.$keyword.'<br/>Authors:'.$author.', '.$coauth1.', '.$coauth2.', '.$coauth3.', '.$coauth4.'<br/><br/>You can upload latest paper for final submission<br><span style='.'color:darkgreen;'.'>Please Use Paperid for furthur refrence<br>Thank You<br>EICC 2013</span>';
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