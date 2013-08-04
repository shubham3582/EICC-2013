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
<style>
	.tdsty01 { font-size:9pt; font-family:Verdana}
	a.asty { font-size:9pt;text-decoration:none;color:black}
</style>
<b style="font-size:13pt;font-weight:bold" class=underline02>Personal Information</b><br><br><br>

<table align=center valign=center border=0 style="font-size:9pt;font-family:Verdana;; width:500px;">
	<tr>
		<td>
			<table style="font-size:9pt;width:500px;border-width:0px;background-color:#f5f5f5" cellpadding=1 cellspacing=1>
				<tr> 
					<td bgcolor="#600000 " style="width:130px;color:white">Email ID</td><td>';
					
$sql = "SELECT email,name,affiliation,major,degree,address,comment FROM register where email='$email'";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo $row[0].'</td>  '.'</tr>
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Name</td><td>'.$row[1].'</tr>
				
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Affiliation</td><td>'.$row[2].'</tr>
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Major</td><td>'.$row[3].'</tr>
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Degree/Position</td><td>'.$row[4].'</tr>
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Address</td><td>'.$row[5].'</tr>
				<tr>
					<td bgcolor="#600000 " style="width:130px;color:white">Comment</td><td>'.$row[6].'</tr>
			</table>
		</td>
	</tr>
</table><p>
<div align=center>';
}

?>

				
				
	<input type="button" style="width:250px;text-align:center;height:40px;border-width:1px;border-style:solid;border-color:#f0f0f0;font-size:9pt;font-family:Verdana;background-color:#600000 ;color:white;font-weight:bold" value="Modify Personal Information" onClick=javascript:location.href='usr_edit.php'>
	<input type="button" style="width:250px;text-align:center;height:40px;border-width:1px;border-style:solid;border-color:#f0f0f0;font-size:9pt;font-family:Verdana;background-color:#600000 ;color:white;font-weight:bold" value="Go to My Menu" onClick=javascript:location.href='mymenu.php'>
</div>
			</div>


			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php  
		include('footer.php'); ?>

