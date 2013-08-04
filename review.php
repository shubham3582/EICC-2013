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
	<title>EICC 2013-Review</title> 
	<meta name="description" content="Review - EICC 2013">
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
			<div id="main" class="maincontent" style="width:680">
<p><b style="font-size:13pt;font-weight:bold" class="underline02">How to Upload Your Paper</b></p>
<p><br>
  <br>
</p>
<div style="text-align:center;">
	<img src="img/upload.jpg" border="0" width="300">
</div>
<p></p>


			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

