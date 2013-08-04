<?php include('db.php');
include('header.php');
//=============Starting Registration Script==========

$password   = $_POST['password'];
$name    = $_POST['name'];
$address    = $_POST['address'];
$affiliation    =$_POST['affiliation'];
$major    = $_POST['major'];
$degree   = $_POST['degree'];
$comment    =$_POST['comment'];


//if($id || $pw || $name || $email || $address || $affilation || $major || $degree =='')
//{ echo " All * Fields Should Be fulfilled properly <br> <a href='register.php'> Click Here to Back and Fill The Form </a>";

//}
//else {
//=============To Encrypt Password===================
//$pw    =    md5($pw);
//============New Variable of Password is Now with an Encrypted Value========
 
if(isset($_POST['join'])) //===When I will Set the Button to 1 or Press Button to register
{
	$query= "UPDATE register ".
       "SET password = '$password',name='$name',address='$address',affiliation='$affiliation',major='$major',degree='$degree',comment='$comment' ".
       "WHERE email = $email" ;
//$query  =  'UPDATE register SET password='.$password.',name='.$name.',address='.$address.',affiliation='.$affiliation.',major='.$major.',degree='.$degree.',comment='.$comment.'WHERE email='.$email;
 $res    =    mysql_query($query);
   $to = $email ;
   $subject = "Account Details Changed";
   $message = "Your Account Details has been changed if this is unauthorized .Please Login to continue.<br/><br/> http://eiccit.org<br><hr><h3>Login Details:</h3><hr>ID: ".$email."<br>PW: ".$password."<hr>";
   $header = "From:noreply@eiccit.org \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
   }
   else
   {
      echo "Message could not be sent...";
   }


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
echo '<div align="justify"><font color="#FF0000" size="3"><br><br/>Your Modification Saved !<br/> Please Continue to<br><br/>  <a href="upload.php">Upload Your Paper Here</a></font></div>';
echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
		include('footer.php');
}

//header('location:success_register.php');

?>