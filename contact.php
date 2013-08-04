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
	<title>EICC Contact Us</title> 
	<meta name="description" content="Contact Us - EICC 2013">
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
  <p><b style="font-size:13pt;font-weight:bold" class=underline02>Contact Information</B><BR>
  <br><br>
    
    Contact E-mail: <a href='mailto:eicc.galgotias@gmail.com'>eicc.galgotias@gmail.com</a><br />
  </p>
  <p><span class="maincontent" style="width:680"><b style="color:#800000">Coordinator<br />
  </b><font color="#333333"> Mr. Rudra Pratap Ojha (+91- 9718503625) </font></span></p>
  <p><br>
    <span class="maincontent" style="width:680"><b style="color:#800000">Conference Secretary<br />
      </b><font color="#333333"> Mr. Rahul Singh   (+91- 9910269136)  <br />
        Ms. Sandhya Katiyar   (+91- 9891068677)</font></span><br>
  </p>
  <div align="justify">
    <table width="500" border="0">
      <tr>
        <th colspan="3" scope="col"><div align="justify">The Secretary , EICC-2013</div></th>
        </tr>
      <tr>
        <th colspan="3" scope="row"><div align="justify">Department Of Information Technology</div></th>
        </tr>
      <tr>
        <th colspan="3" scope="row"><div align="justify">Galgotias College Of Engineering &amp; Technology</div></th>
        </tr>
      <tr>
        <th colspan="3" scope="row"><div align="justify">1, Knowledge Park 2, Greater Noida, U.P , Pin-201306</div></th>
        </tr>
      <tr>
        <th colspan="3" scope="row"><div align="justify">Phone: +91-120-4513800 Extn. - 926</div></th>
        </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </table>
</div>
  <p> <br>
</p>


			</div>



			</div>

<p></p>


			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

