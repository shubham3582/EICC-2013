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
	<title>EICC 2013-Organizing Comittee</title> 
	<meta name="description" content="Scope - EICC 2013">
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
<b style="font-size:13pt;font-weight:bold" class=underline02>Organizing Comittee</B><BR><br>
<table width="348" border="0">
  <tr>
    <td width="40">1.</td>
    <td width="298">Mr. Javed Miya</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Mr. Arvind Dagur</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Mr. Sandeep Raj</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Mr. Ranjit Kumar</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Ms. Tanu Solanki</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Ms. Sadhna Tiwari</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Mr. Gagan Gupta</td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Mr. Pawan Singh Mehra</td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Ms. Amreen Khan</td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Ms. Rekha Beghal</td>
  </tr>
  <tr>
    <td>11.</td>
    <td>Ms. Richa Kathuria</td>
  </tr>
  <tr>
    <td>12.</td>
    <td>Mr. Harivans Pratap Singh</td>
  </tr>
  <tr>
    <td>13.</td>
    <td>Ms. Swasti Singhal</td>
  </tr>
  <tr>
    <td>14.</td>
    <td>Ms. Neha Malik</td>
  </tr>
  <tr>
    <td>15.</td>
    <td>Mr. Safique</td>
  </tr>
</table>
<br>
<p>&nbsp;</p>
</div>

			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

