<?php session_start();

//check logged in or not!
if(!isset($_SESSION['email']))
{
  include('header.php');
}
else {
 include('usr/header.php');
}
?><head><!-- start: Meta -->
	<meta charset="utf-8">
	<title>EICC 2013-Registration</title> 
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

<b style="font-size:13pt;font-weight:bold" class=underline02>REGISTRATION</b><br>
<br>
<form action="data.php" name="getid" method="post">
<table width="586" border="0">
  <tr>
    <td style='font-weight:bold;width:170px;'>Download Registration and Copyright Form</td>
    <td width="115"><a href="img/Registration and Copy%20Right%20Form%20EICC-2013.doc">MS-Word</a></td>
    <td width="116"> <a href="img/Registration and Copy%20Right%20Form%20EICC-2013.pdf"> PDF </a></td>
    </tr>
  <tr>
    <td style='font-weight:bold;width:170px;'>Download Registration Form For Non author Atendee</td>
    <td><a href="img/Registration%20Form%20EICC-2013.doc">MS-Word </a></td>
    <td><a href="img/Registration%20Form%20EICC-2013.pdf">PDF</a></td>
    </tr>
  <tr>
  <td width="343" style='font-weight:bold;width:170px;'>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td style='font-weight:bold;width:170px;'>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
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
	function show(id) {
	var a=document.getElementById(id);
	 a.style.display='block';
	 
	}
	function cal(id1,id2,id3,id4,id) { 
	var exp=0;
	var coauth1=document.getElementById(id1);
	var coauth2=document.getElementById(id2);
	var coauth3=document.getElementById(id3);
	var coauth4=document.getElementById(id4);
	var degree=document.getElementById(id);
	if( degree.value=='Student') { 
	exp=exp+500; }
	else { 
	exp=exp+1000;
	}
	if(coauth1 && coauth2 && coauth3 && coauth4 == '') {
	window.alert("No Co-Author Added!");
	}
	else { 
	    
	 
	}
	
	}
//-->

    function ChangeCase(elem)
    {
        elem.value = elem.value.toUpperCase();
    }

</script>