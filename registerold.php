<?php session_start();

//check logged in or not!
if(!isset($_SESSION['email'])){

include('header.php');
}
else {
include('usr/header.php');
}
?><head><!-- start: Meta -->
	<meta charset="utf-8">
	<title>EICC 2013-Register</title> 
	<meta name="description" content="Register - EICC 2013">
	<meta name="keywords" content="EICC, EICC 2013, 2nd National Confrence, Galgotia, IT Department, Greater Noida, Confrence">
	<meta name="author" content="Shubham Srivastava(Final Year Student @ Galgotia">
	<!-- end: Meta -->
    </head>

<tr>
			<td>&nbsp;</td>
			<td valign="top" align="center">
				<table width="100%" bgcolor="#e7e7e7" style="border-top:1px solid #BBC5C6;border-left:1px solid #BBC5C6;border-right:1px solid #BBC5C6;border-bottom:1px solid #BBC5C6;margin-top:0px;margin-left:0px;">
					<tbody><tr>
                    <?php include('menu.php'); ?>
					</tbody></table>
				<br>
				<center></center>
				<br>
			</td>
			<td>&nbsp;</td>
				
			<td valign="top" align="center" style="text-align:justify;">
			<div id="main" class=maincontent style='width:680'>
<!-- start content -->

<b style="font-size:13pt;font-weight:bold" class=underline02> New Registration</b><br>
<br>
<br>
<form name="memberjoin" method="post" action="post_register.php" onsubmit="return(pass(this));">
	<input type="hidden" name="D_YEAR" value="2013">
	<input type="hidden" name="N_CONFERENCE" value="EICC">

	<font color=red>Registered User may upload multiple papers using Single Account.<br />* Required field</font><br><br>
	<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-width:0px;width:400">
		<tr>
			<td width=130 style='font-weight:bold;'>Email ID<font color=red>*</font></td>
			<td><input type="email" name="email" style='width:170px;'required placeholder="Enter a valid Email ID"  title="Enter your Email ID" required>
</td>
		</tr>
		<tr>
			<td style='font-weight:bold;'>Password<font color=red>*</font></td>
			<td><input type="password" name="password" style='width:170px;' required placeholder="Enter a Password" pattern=".{8,}" title="Minmimum 8 letters or numbers." required ><br>
				<span style='color:darkgreen;'>Please write your password again.</span></td>
</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Confirm Password<font color=red>*</font></td>
			<td><input type="password" name="password1" style='width:170px;' required placeholder="Enter a Password" pattern=".{8,}" title="Minmimum 8 letters or numbers." required >
				
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Full Name <font color=red>*</font></td>
			<td><input type="text" name="name" style='width:170px;' required placeholder="Enter Your Name">
				<br></td>
		</tr>
		
		<tr>
			<td style='font-weight:bold;'>Address<font color=red>*</font></td>
			<td><textarea name="address" id="address" cols="45" rows="5" required placeholder="Enter Your address" ></textarea></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign="top">Affiliation<font color=red>*</font></td>
			<td><input name="affiliation" type="text" required id="affiliation" placeholder="Enter your College/University" style="width:400px;">
			<br></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Major<font color=red>*</font></td>
			<td><input type="text" name="major" style="width:400px;" required placeholder="Enter your Branch/Department">
				<br>
				<span style='color:darkgreen;'>Reserch Interests, over 3 major fields</span></td>
		</tr>
		<tr>
			<td></td>
			<td style='line-height:160%;'><font color=blue> Please complete your full research interests. For example:<br>
				- IT Management, Software Engineering <br>
				- Digital Signal/Image Processing,Multimedia Information Processing, and Neural Networks <br>
				- Software Eng. and Distributed Computing <br>
				- Multicriteria Decision Analysis, intelligent decision support systems <br>
				- Accounting Information System <br>
				- Computer education/instructional technology <br>
				- Semantic Web, Information Extraction <br>
				- Civil Engineering, ITS, Intelligent Vehicle Sytem</font><br><br>
			</td>
		</tr>
		<tr>
			<td style='font-weight:bold;'>Degree/Position<font color=red>*</font></td>
			<td><select name="degree" style="width:170px;font-size:8pt;"><option value="">Select</option>
<option value="Researcher">Researcher</option>
<option value="Professor">Professor</option>
<option value="Researcher(Doctor)">Researcher(Doctor)</option>
<option value="Researcher(Master)">Researcher(Master)</option>
<option value="in Post-Doctor">in Post-Doctor</option>
<option value="Student(in Doctor Course)">Student(in Doctor Course)</option>
<option value="Student(in master Course)">Student(in master Course)</option>
<option value="Student(in Bachelor Course)">Student(in Bachelor Course)</option>
<option value="Bachelor">Bachelor</option>
<option value="Professional">Professional</option>
</select></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' colspan="2">Comment<br>
				<textarea name="comment" rows="6" style="width:100%;"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align=center><br>
				<input type="hidden" value="false" name="checkvalue">
				<input type="hidden" value="memberjoin" name="AccessCheck">
				<input type="hidden" value="Pendancy" name="group">
				<input name="join" type="submit" class="btn01" style="font-size:9pt;font-family:Verdana" value="SUBMIT">
				&nbsp;&nbsp;
		  <input type="reset" class="btn01" style="font-size:9pt;font-family:Verdana" value="RESET"></td>
		</tr>
	</table>
</form>



			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>
<script type="text/javascript">
<!--
// Form validation code will come here.

function pass()
{
   if( document.memberjoin.password.value != document.memberjoin.password1.value )
   {
     alert( "Passwords Mismatch!" );
	 document.memberjoin.password1.focus();
     return false;
   }
}
</script>