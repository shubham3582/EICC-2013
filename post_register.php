<?php include('db.php');
//=============Starting Registration Script==========
$email    = $_POST['email']; 
$password    = $_POST['password'];
$name    =$_POST['name'];
$address    = $_POST['address'];
$affiliation  = $_POST['affiliation'];
$major    = $_POST['major'];
$degree   = $_POST['degree'];
$comment  = $_POST['comment'];


if(!$email || !$password || !$name)
{ echo " All * Fields Should Be fulfilled properly <br> <a href='register.php'> Click Here to Back and Fill The Form </a>";

}
else {
//=============To Encrypt Password===================
//$pw    =    md5($pw);
//============New Variable of Password is Now with an Encrypted Value========
 
if(isset($_POST['join'])) //===When I will Set the Button to 1 or Press Button to register
{
$que = "select email from register where email='$email'";
$re = mysql_query($que);
$ro = mysql_num_rows($re);	
if($ro==1) {
	include('header.php');
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
	echo '<div align="justify"><font color="#FF0000" size="3"><br/><hr><hr>Email ID Already Registered<br/>Please Use a different Email Id.</font><hr></div>';
	echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
		include('footer.php');

}
/*	
$query = "select id from register where id='$id'";
$res = mysql_query($query);
$rows = mysql_num_rows($res);
if($rows==1) {
	include('header.php');
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
	echo '<div align="justify"><font color="#FF0000" size="3"><br/><hr><hr> ID Already Registered<br/>Please Choose a different Id.</font><hr></div>';
	echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
		include('footer.php');

}
*/
else {
	


$query    =    "insert into register(email,password,name,address,affiliation,major,degree,comment)values('$email','$password','$name','$address','$affiliation','$major','$degree','$comment')";
$res    =    mysql_query($query);
   $to=$email;
   $subject = "Registration Details for EICC 2013";
   $message = '<br><font size="3" color="#000033">You are successfully Registered. Please Continue to upload your Paper .</font><br> <br/><h3>Login Details :</h3><hr><br>Email ID : '.$email.'<br>PW : '.$password.'<hr><br/>Please Use this for further Login';
   $header = "From: noreply@eiccit.org \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      //
   }
   else
   {
      echo "Message could not be sent...";
   }


include('header.php');
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
echo '<div align="justify"><font color="#FF0000" size="3">Successfully Registered.Please Login to Continue .</font></div>';
echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
		include('footer.php');
}

//header('location:success_register.php');
}
}
?>