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
	<title>EICC 2013-Core Comittee</title> 
	<meta name="description" content="Core Comittee - EICC 2013">
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
<div id="title_border"><b style="font-size:13pt;font-weight:bold" class=underline02>Core Conference Committee</b><br></div>
<br><br>

<b style="color:#990033"><i>Chief Patron</i><br></b>
Mr. Suneel Galgotia, Chairman GEI
<br><br>

<b style="color:#990033"><i>Patron</i><br></b>
Mr. Dhruv Galgotia, CEO, Galgotias Group
<br><br>

<b style="color:#990033"><i>General Chair</i><br>
</b>
Dr. R. Sundarsen, Director, GCET
<br><br>

<b style="color:#990033"><i>Convener</i><br></b>
Dr. Sweta Verma
<br><br>

<b style="color:#990033"><i>Co-Convener</i><br></b>
Mr. Amit Gaurav
<br><br>

<b style="color:#990033"><i>Coordinator</i><br></b>
Mr. Rudra Pratap Ojha
<br><br>

<b style="color:#990033"><i>Chief Editor</i><br></b>
Mr. Dharm Raj<br>
Ms.  Bhawna Singh
<p><b style="color:#990033"><i>Conference Secretary</i><br>
    </b>
  Mr. Rahul Singh<br>
  Ms. Sandhya Katiyar
  <br><br>
  
  <b style="color:#990033"><i>Program Manager</i><br>
  </b>
  Mr. Ravi Shankar Pathak
  <br><br>
</p>
			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

