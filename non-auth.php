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
	<title>EICC 2013-Registration for Non Author Attendee</title> 
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

<b style="font-size:13pt;font-weight:bold" class=underline02>Registration For Non Author Attendee</b><br>
<br>
<br>
<form name="memberjoin" method="post" action="post-non-auth.php">
	<input type="hidden" name="D_YEAR" value="2013">
	<input type="hidden" name="N_CONFERENCE" value="EICC">

	<font color=red>Registration must be required  for Non Author Attendee.<br />* Required field</font><br><br>
	<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-width:0px;width:525">
    <tr>
			<td style='font-weight:bold;' valign=top>Full Name <font color=red>*</font></td>
			<td><input type="text" name="name" required placeholder="Enter Your Name" style="width:300px;">
				<br></td>
		</tr>
		<tr>
			<td width=250 style='font-weight:bold;'>Email ID<font color=red>*</font></td>
			<td><input type="email" name="email" required placeholder="Enter a valid Email ID"  title="Enter your Email ID" required style="width:300px;">
</td>
		</tr>
		<tr>
			<td style='font-weight:bold;'>Mobile Number<font color=red>*</font></td>
			<td><input type="text" name="password" style='width:300px;' required placeholder="Enter your 10 digit Mobile Number" pattern=".{10,}" title="10 digit Mobile Number" required ><br>
				</td>
</td>
		</tr>
			<tr>
			<td style='font-weight:bold;'>Address<font color=red>*</font></td>
			<td><textarea name="address" id="address" cols="45" rows="5" required placeholder="Enter Your address" ></textarea></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign="top">Affiliation<font color=red>*</font></td>
			<td><input name="affiliation" type="text" required id="affiliation" placeholder="Enter your College/University" style="width:300px;">
			<br></td>
		</tr>
        <tr>
			<td style='font-weight:bold;'>Position<font color=red>*</font></td>
			<td><select name="degree" style="width:300px;font-size:8pt;"><option value="">Select</option>
<option value="Student">Student</option>
<option value="Acadmician">Acadmician</option>
<option value="Professional">Professional</option>

</select></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Registration Fee<font color=red></font></td>
			<td><input name="fee" type="text" disabled required id="fee" style="width:300px;" value="Rs. 200 /-" readonly>
				<br></td>
		</tr>
        
        <tr>
			<td style='font-weight:bold;'>Pay By <font color=red>*</font></td>
			<td><select name="major" style="width:300px;font-size:8pt;" onclick="toggle_visibility('ddc','sel');" id="sel">
<option value="dd">Demand Draft</option>
<option value="cash">Cash</option>

</select></td>
		</tr><tr>
			<td style='font-weight:bold;' colspan="2"><br>
        <table border="0" id="ddc">
  <tr>
    <td style='font-weight:bold;'>Demand Draft Number</td>
    <td><input name="ddn" type="text" id="ddn" placeholder="Enter Demand Draft Number" style="width:300px;"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-weight:bold;'>Issuing Bank/Branch</td>
    <td><input name="ddb" type="text" id="ddn" placeholder="Enter Issuing Bank/Branch " style="width:300px;"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-weight:bold;'>Issuing Date</td>
    <td><input name="ddd" type="date" id="ddn" placeholder="Enter Issuing Date" style="width:300px;" ><span style='color:darkgreen;'>(mm/dd/yyyy)</span></td>
    <td>&nbsp;</td>
  </tr>
</table>

        </td></tr>
		<tr>
			<td colspan="2" align=center><br>
				<input type="hidden" value="false" name="checkvalue">
				<input type="hidden" value="memberjoin" name="AccessCheck">
				<input type="hidden" value="Pendancy" name="group">
				<input type="submit" name="join" id="join" value="SUBMIT" class="btn01" style="font-size:9pt;font-family:Verdana">
				
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
    function toggle_visibility(id,df) {
		var e = document.getElementById(id);
		var f= document.getElementById(df);
	    if(f.value == 'dd')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
//-->
</script>