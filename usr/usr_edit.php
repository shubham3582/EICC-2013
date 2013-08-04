<?php include('header.php');
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
				
			<td valign="top" align="center" style="text-align:justify;">
			<div id="main" class=maincontent style='.'width:680'.'>
<!-- start content -->

<b style="font-size:13pt;font-weight:bold" class=underline02>Modify Your Account</b><br>
<br>
<br>
<form name="memberjoin" method="post" action="post_update.php">
	<input type="hidden" name="D_YEAR" value="2013">
	<input type="hidden" name="N_CONFERENCE" value="EICC">

	<font color=red>* Required field</font><br><br>
	<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-width:0px;width:400">
		<tr>
			<td width=130 style='.'font-weight:bold;'.'>Email ID<font color=red>*</font></td>
			<td><label>';
			$sql = "SELECT email,name,address,affiliation,major,degree,comment FROM register where email='$email'";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval))
{
    echo $row[0].'</label></td>
		</tr>
		<tr>
			<td style='.'font-weight:bold;'.'>Password<font color=red>*</font></td>
			<td><input type="password" name="password" style='.'width:170px; required placeholder="Enter a Password"'.'></td>
		</tr>
		<tr>
			<td style='.'font-weight:bold;'.'valign=top>Confirm Password<font color=red>*</font></td>
			<td><input type="password" name="password1" style='.'width:170px;'.'required placeholder="Again Enter Password">
				<br>
				<span style='.'color:darkgreen;'.'>Please write your password again.</span></td>
		</tr>
		<tr>
			<td style='.'font-weight:bold;'.' valign=top>Full Name <font color=red>*</font></td>
			<td><input type="text" name="name" style='.'width:170px;'.' value="'.$row[1].'">
				<br>
				</td>
		</tr>
		
		<tr>
			<td style='.'font-weight:bold;'.'>Address<font color=red>*</font></td>
			<td><textarea name="address" id="address" cols="45" rows="5" value="'.$row[2].'">'.$row[2].'</textarea></td></tr>
		<tr>
			<td style='.'font-weight:bold;' .'valign="top">Affiliation<font color=red>*</font></td>
			<td><input type="text" name="affiliation" style="width:400px;" value="'.$row[3].'"><br>
			<span style='.'color:darkgreen;'.'>Please use only English.</span></td>
		</tr>
		<tr>
			<td style='.'font-weight:bold;'.' valign=top>Major<font color=red>*</font></td>
			<td><input type="text" name="major" style="width:400px;" value="'.$row[4].'"><br>
				<span style='.'color:darkgreen;'.'>Reserch Interests, over 3 major fields</span></td>
		</tr>
		<tr>
			<td></td>
			<td style='.'line-height:160%;'.'><font color=blue> Please complete your full research interests. For example:<br>
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
			<td style='.'font-weight:bold;'.'>Degree/Position<font color=red>*</font></td>
			<td><select name="degree" style="width:170px;font-size:8pt;" value="'.$row[5].'"><option value="'.$row[5].'">'.$row[5].'</option>
<option value="Researcher">Researcher</option>
<option value="Professor">Professor</option>
<option value="Researcher(Doctor)">Researcher(Doctor)</option>
<option value="Researcher(Master)">Researcher(Master)</option>
<option value="Doctor">Doctor</option>
<option value="Master">Master</option>
<option value="in Post-Doctor">in Post-Doctor</option>
<option value="Student(in Doctor Course)">Student(in Doctor Course)</option>
<option value="Student(in master Course)">Student(in master Course)</option>
<option value="Student(in Bachelor Course)">Student(in Bachelor Course)</option>
<option value="Bachelor">Bachelor</option>
</select></td>
		</tr>
		<tr>
			<td style='.'font-weight:bold;'.' colspan="2">Comment<br>
				<textarea name="comment" rows="6" style="width:100%;" value="'.$row[6].'">'.$row[6].'</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align=center><br>
				<input type="hidden" value="false" name="checkvalue">
				<input type="hidden" value="memberjoin" name="AccessCheck">
				<input type="hidden" value="Pendancy" name="group">
				<input type="submit" value="SUBMIT" style="font-size:9pt;font-family:Verdana" name="join">
				&nbsp;&nbsp;
			  <input type="reset" value="RESET" style="font-size:9pt;font-family:Verdana"></td>
		</tr>
	</table>
</form>



			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>';
}
include('footer.php');
?>
