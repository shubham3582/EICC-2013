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
	<title>EICC 2013-How to Reach</title> 
	<meta name="description" content="How to Reach - EICC 2013">
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

<p><b style="font-size:13pt;font-weight:bold" class=underline02>Venue : Galgotias College of Engineering &amp; Technology, Greater Noida</b></p>
<p>&nbsp;</p>
<p align="justify">Greater Noida city is situated in the National Capital Region of India in the outer region of state of Uttar Pradesh. It is well connected with flights, rail and road transport (through New Delhi) to other parts of India. Daily trains, buses and flights are available from major cities in India. Galgotias College of Engineering &amp; Technology campus is located on the 8-lane expressway connecting Greater Noida with Noida and New Delhi. It is a part of Knowledge Park II which has a very large concentration of educational Institutes. The College is opposite to India Expo Mart.</p>
<p align="justify">Greater Noida has well developed markets with shops, banks, post offices, restaurants and other facilities needed for recreation. The Knowledge Park has among the best residential colonies on its periphery and is rapidly emerging as a major satellite township of New Delhi.</p>
<p></p>
<p></p>


			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

