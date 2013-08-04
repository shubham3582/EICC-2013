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
	<title>EICC 2013-Registration Fee</title> 
	<meta name="description" content="Registration Fee - EICC 2013">
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

<b style="font-size:13pt;font-weight:bold" class=underline02>Registration FEE</b>
<br><br>

<div class="line">
  <p style="margin-top:8px;">  
  <table width="500" border="0">
	  <tr>
	    <th scope="col">&nbsp;</th>
	    <th scope="col">&nbsp;</th>
	    </tr>
	  <tr>
	    <th width="311" scope="col"><div align="justify">For Students</div></th>
	    <th width="179" scope="col"><div align="justify" ><span style="color:red">Rs. 500/-</div></th></span>
	    </tr>
	  <tr>
	    <th scope="row"><div align="justify"><span style="margin-top:8px;">For Academicians/ Industry Professionals </span></div></th>
	    <th width="179" scope="col"><div align="justify"><span style="color:red">Rs. 1000/-</div></th></span>
	    </tr>
	  <tr>
	    <th scope="row"><div align="left">Non Author Attendee</div></th>
	    <th width="179" scope="col"><div align="justify"> <span style="color:red">Rs. 200/-</span></div></th>
	    </tr>
	  <tr>
	    <th colspan="2" scope="row">&nbsp;</th>
	    </tr>
	  <tr>
	    <th colspan="2" scope="row"><div align="justify"></div></th>
	    </tr>
	  </table>
	<p style="margin-top:8px;"><br>
	  </div>


			</div>

<p></p>


			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

