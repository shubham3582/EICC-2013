<?php include('db.php');
//*******Form Information********
 
$email = mysql_real_escape_string($_POST['email']); //User Name sent from Form
$password = mysql_real_escape_string($_POST['password']); // Password sent from Form
//if($id || $pw == '')
//{ echo " Id And Pw Should Be fulfilled properly <br> <a href='index.php'> Click Here to Back and Fill The Form </a>"; }

//else {
//*********retrieving data from Database**********
 
$query = "select * from register where email='$email' and password='$password'";
 
$res = mysql_query($query); //Executing query and saving result in Result Set
 
//************mysql_num_rows is counting num of rows************
 
$rows = mysql_num_rows($res);
 
//**********if $userName and $password will match database, The above function will return 1 row
 
if($rows==1)
 
//***if the userName and password matches then register a session and redrect user to the Successfull.php
{ session_start();
  session_register("email");
  session_register("password");
 
header("location:usr/mymenu.php");
}
else
{
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
echo '<div align="justify"><font color="#FF0000" size="3"> Invalid Id Or Pw<br/>Please Re Enter Id and Pw.</font></div>';
echo '</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
		include('footer.php');
}
 
  
//}
?>