<?php include('db.php');
//=============Starting Registration Script==========
$email    = $_POST['email']; 
$password    = $_POST['password'];//mobileno
$name    =$_POST['name'];
$address    = $_POST['address'];
$affiliation  = $_POST['affiliation'];
$major    = $_POST['major'];//mode
$degree   = $_POST['degree'];//position

$ddn  = $_POST['ddn'];
$ddb   = $_POST['ddb'];
$ddd  = $_POST['ddd'];

if(!$email || !$password || !$name)
{ echo " All * Fields Should Be fulfilled properly <br> ";

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
	echo 'Already Registered!';
}
else {
	$query    =    "insert into nonauthor(name,email,mobileno,address,affiliation,mode,position,ddn,ddb,ddd)values('$name','$email','$password','$address','$affiliation','$major','$degree','$ddn','$ddb','$ddd')";
$res    =    mysql_query($query);
   $to=$email;
   $subject = "Non Author Attendee Registration Details for EICC 2013";
   $message = 'You are Successfully Registered For Non Author Attendee.<br>Thank You<br>EICC Team';
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
echo '<div align="justify"><font color="#FF0000" size="3">Successfully Registered as a Non Author Attendee .</font></div>';
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