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
	<title>EICC 2013-Help And FAQ's</title> 
	<meta name="description" content="Help And FAQ's - EICC 2013">
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
  <p><b style="font-size:13pt;font-weight:bold" class=underline02>Help and FAQ's</B><BR><br>
    
  <br>
    Q. When is the deadline for paper submission?<br>
    A.As mentioned in important dates the submission deadline is 15<sup>th</sup> March 2013.<br><br>
    
    Q. How can I get my acceptance letter?<br>
    A. After completion of paper review process only accepted paper will receive an official acceptance letter from the conference website. you can also check the status of your paper by using your login id and password.<br><br>
    
    Q. How can I get my invitation letter for presenting the paper?<br>
    A. After completion of paper registration process authors will receive invitation letter by email.<br><br>
    
    
    Q. Is there any specific format/template for conference paper?<br>
    A. Yes, authors should strictly follow conference paper template. <a href="img/MSW_USltr_format.doc">Format</a><br><br>
    
    Q. How much is the registration charge?<br>
    A.<table width="500" border="0">
	  <tr>
	    <th width="311" scope="col"><div align="justify">For Students</div></th>
	    <th width="179" scope="col"><div align="justify" ><span style="color:red">Rs. 500/-</div></th></span>
	    </tr>
	  <tr>
	    <th scope="row"><div align="justify"><span style="margin-top:8px;">For Academicians/ Industry Professionals </span></div></th>
	    <th width="179" scope="col"><div align="justify"><span style="color:red">Rs. 1000/-</div></th></span>
	    </tr>
        <tr>
	    <th scope="row"><div align="justify"><span style="margin-top:8px;">For Non Author Attendee </span></div></th>
	    <th width="179" scope="col"><div align="justify"><span style="color:red">Rs. 200/-</div></th></span>
	    </tr>
	  
	  </table><br>
    
    <p>Q. I cannot upload my paper/final ready paper/registration form?<br>
      A. We recommended to use only English when you submit paper/final ready paper/registration form. If still something is wrong, please send email and tell us what happened.<br><br>
      
      If you cannot find your question's answer in the list please contact <a href="mailto:eicc.galgotias@gmail.com">eicc.galgotias@gmail.com</a>
      <br><br><br>
    </p>
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

