<?php
include('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>

<?php include('db.php');
session_start();
//check logged in or not!
if(!isset($_SESSION['email'])){

include('header.php');
}
else {
include('usr/header.php');
}
$pprid    = $_POST['pprid'];

if(isset($_POST['GetData'])) //===When I will Set the Button to 1 or Press Button to register
{ 
  $retval=mysql_query("SELECT title,author,affilation,email FROM upload where paperid='$pprid';");
   if(!$retval) {
  die('Could not get data: ' . mysql_error());
}
session_register("pprid");

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
<?php  while($row = mysql_fetch_array($retval, MYSQL_NUM))
{ ?>
<table width="708" height="238" border="0">
<tr>
  <td><table width="708" height="238" border="0">
    <tr>
      <td width="242" style='font-weight:bold;width:170px;'>PaperID</td>
      <td width="456"><label><span style='color:darkgreen;'><font size="3"><b><?php echo $pprid; ?></b></font></span></label></td>
    </tr>
    <tr>
      <td style='font-weight:bold;'>Paper Title</td>
      <td><label><?php echo $row[0]; ?></label></td>
    </tr>
    <tr>
      <td style='font-weight:bold;'>Author</td>
      <td><label><?php echo $row[1]; ?></label></td>
    </tr>
    <tr>
      <td style='font-weight:bold;'>Affiliation</td>
      <td><label><?php echo $row[2]; ?></label></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>Email ID</td>
      <td><?php echo $row[3]; ?></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>Street Address </td>
      <td><span style="font-weight:bold;">
        <input name="element_5_4" type="text" class="element text large" id="element_5_4" value="" maxlength="100" />
      </span></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>City</td>
      <td><span class="left">
        <input id="element_5_3" name="element_5_3" class="element text medium" value="" type="text" />
      </span></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>State / Province / Region</td>
      <td><span class="right">
        <select class="element select medium" id="element_5_6" name="element_5_6">
          <option value="" selected="selected"></option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Orissa">Orissa</option>
          <option value="Pondicherry">Pondicherry</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttaranchal">Uttaranchal</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="West Bengal">West Bengal</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>Postal / Zip Code</td>
      <td><span class="left">
        <input id="element_5_5" name="element_5_5" class="element text medium" maxlength="15" value="" type="text" />
      </span></td>
    </tr>
    <tr>
      <td height="23" style='font-weight:bold;'>Country</td>
      <td><span class="left">
        <input id="element_5_2" name="element_5_2" class="element text medium" maxlength="15" value="INDIA" type="text" />
      </span></td>
    </tr>
  </table>    <span class="left"></span></td>
</tr>
</table>
<p>
  <?php } }?>
</p>
<form action="part.php" "img/Registration%20Copy%20Right%20Form%20EICC-2013.pdf"name="accept" method="post" id="accept" title="Registration Form">
  <table width="713" border="0">
  <tr>
    <td style='font-weight:bold;'>Position</td>
    <td><select name="degree" style="width:200px;font-size:8pt;" id="position">
      <option value="">Select</option>
      <option value="Student">Student</option>
      <option value="Acadmician">Acadmician</option>
      <option value="Professional">Professional</option>
    </select></td>
    </tr>
  <tr>
    <td width="246" style='font-weight:bold;'>Mobile Number</td>
    <td><label for="mobileno"></label>
      <input type="text" name="mobileno" id="mobileno"  required="required" placeholder="Enter your 10 digit Mobile Number" style="width:200px;"/></td>
    </tr>
  <tr>
    <td style='font-weight:bold;'>Want to Add Co-Authors Click Here</td>
    <td style='font-weight:bold;'><input type="button" name="add" id="button" value="Add Co-Authors" class="btn01" style='width:100px;' onclick="show('add1')"></td>
    </tr>
  <tr>
   <td colspan="2"><table width="400" border="0" id="add1" style="display:none">
  <tr>
    <td><b>Co-Author 1.</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Name</td>
    <td colspan="2">
      <input type="text" name="coauth1" id="coauth1" placeholder="Enter co-author name" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Affiliation</td>
    <td colspan="2">
      <input type="text" name="aff1" id="aff1" placeholder="Enter Affiliation" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Email</td>
    <td colspan="2">
      <input type="email" name="email1" id="email1" placeholder="Enter email" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <<td width="202" style='font-weight:bold;'>Position</td>
    <td colspan="2">
      <select name="position1" style="width:300px;font-size:8pt;"><option value="">Select</option>
<option value="Student">Student</option>
<option value="Acadmician">Acadmician</option>
<option value="Professional">Professional</option>

</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Contact Number</td>
    <td colspan="2">
      <input type="text" name="mobileno1" id="mobileno1" placeholder="Enter Mobile Number" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-weight:bold;'>Want to Add Co-Authors Click Here</td>
    <td style='font-weight:bold;'><input type="button" name="add" id="button" value="Add Co-Authors" class="btn01" style='width:100px;' onclick="show('add2')"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  
   <tr>
   <td colspan="2"><table width="400" border="0" id="add2" style="display:none">
  <tr>
    <td><b>Co-Author 2.</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Name</td>
    <td colspan="2">
      <input type="text" name="coauth2" id="coauth2" placeholder="Enter co-author name" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Affiliation</td>
    <td colspan="2">
      <input type="text" name="aff2" id="aff2" placeholder="Enter Affiliation" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Email</td>
    <td colspan="2">
      <input type="email" name="email2" id="email2" placeholder="Enter email" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <<td width="202" style='font-weight:bold;'>Position</td>
    <td colspan="2">
      <select name="position2" style="width:300px;font-size:8pt;"><option value="">Select</option>
<option value="Student">Student</option>
<option value="Acadmician">Acadmician</option>
<option value="Professional">Professional</option>

</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Contact Number</td>
    <td colspan="2">
      <input type="text" name="mobileno2" id="mobileno2" placeholder="Enter Mobile Number" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-weight:bold;'>Want to Add Co-Authors Click Here</td>
    <td style='font-weight:bold;'><input type="button" name="add" id="button" value="Add Co-Authors" class="btn01" style='width:100px;' onclick="show('add3');"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  
   <tr>
   <td colspan="2"><table width="400" border="0" id="add3" style="display:none">
  <tr>
    <td><b>Co-Author 3.</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Name</td>
    <td colspan="2">
      <input type="text" name="coauth3" id="coauth3" placeholder="Enter co-author name" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Affiliation</td>
    <td colspan="2">
      <input type="text" name="aff3" id="aff3" placeholder="Enter Affiliation" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Email</td>
    <td colspan="2">
      <input type="email" name="email3" id="email3" placeholder="Enter email" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <<td width="202" style='font-weight:bold;'>Position</td>
    <td colspan="2">
      <select name="position3" style="width:300px;font-size:8pt;"><option value="">Select</option>
<option value="Student">Student</option>
<option value="Acadmician">Acadmician</option>
<option value="Professional">Professional</option>

</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Contact Number</td>
    <td colspan="2">
      <input type="text" name="mobileno3" id="mobileno3" placeholder="Enter Mobile Number" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-weight:bold;'>Want to Add Co-Authors Click Here</td>
    <td style='font-weight:bold;'><input type="button" name="add" id="button" value="Add Co-Authors" class="btn01" style='width:100px;' onclick="show('add4')"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
</tr>
  
   <tr>
   <td colspan="2"><table width="400" border="0" id="add4" style="display:none">
  <tr>
    <td><b>Co-Author 4.</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Name</td>
    <td colspan="2">
      <input type="text" name="coauth4" id="coauth4" placeholder="Enter co-author name" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Affiliation</td>
    <td colspan="2">
      <input type="text" name="aff4" id="aff4" placeholder="Enter Affiliation" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Email</td>
    <td colspan="2">
      <input type="email" name="email4" id="email4" placeholder="Enter email" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <<td width="202" style='font-weight:bold;'>Position</td>
    <td colspan="2">
      <select name="position4" style="width:300px;font-size:8pt;"><option value="">Select</option>
<option value="Student">Student</option>
<option value="Acadmician">Acadmician</option>
<option value="Professional">Professional</option>

</select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="202" style='font-weight:bold;'>Contact Number</td>
    <td colspan="2">
      <input type="text" name="mobileno4" id="mobileno4" placeholder="Enter Mobile Number" style="width:200px;"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td  colspan="3" style='font-weight:bold;'>Maximum Five Authors Allow for a Paper.</td>
    
  </tr>
</table>
</td>
  </tr>
  
  
  <tr>
    <td style='font-weight:bold;'>Registration Fees</td>
    <td><label for="fees"></label>
      <input name="fees" type="text"  id="fees" /></td>
    </tr>
   <tr>
	<td style='font-weight:bold;'>Pay By <font color=red>*</font></td>
			<td><select name="major" style="width:200px;font-size:8pt;" onclick="toggle_visibility('ddc','sel');" id="sel">
<option value="dd">Demand Draft</option>
<option value="cash">Cash</option>

</select></td>
		</tr><tr>
			<td style='font-weight:bold;' colspan="2"><br>
        <table width="574" border="0" id="ddc">
  <tr>
    <td width="238" style='font-weight:bold;'>Demand Draft Number</td>
    <td width="326"><input name="ddn" type="text" id="ddn" placeholder="Enter Demand Draft Number" style="width:200px;"></td>
    </tr>
  <tr>
    <td style='font-weight:bold;'>Issuing Bank/Branch</td>
    <td><input name="ddb" type="text" id="ddn" placeholder="Enter Issuing Bank/Branch " style="width:200px;"></td>
    </tr>
  <tr>
    <td style='font-weight:bold;'>Issuing Date</td>
    <td><input name="ddd" type="date" id="ddn" placeholder="Enter Issuing Date" style="width:200px;" ><span style='color:darkgreen;'>(mm/dd/yyyy)</span></td>
    </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2"><span style='color:darkgreen;'><b><li>Lodging will be arranged by organizers on paid basis.</li></b></span></td>
    </tr>
  <tr>
    <td><span style='color:darkgreen;'><b><li>Would you like to stay ?</li></b></span></td>
    <td width="434"><p>
      <label>
        <input type="radio" name="stay" value="yes" id="stay_0" />
        Yes</label>
    </td>
    </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="join" id="join" value="Submit" class="btn01" /><a href="img/Registration%20Copy%20Right%20Form%20EICC-2013.pdf"> </a>
    </div></td>
    <td><input type="reset" name="join2" id="join2" value="Reset" class="btn01" /></td>
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
	var p1=document.getElementById(id1);
	var p2=document.getElementById(id2);
	var p3=document.getElementById(id3);
	var p4=document.getElementById(id4);
	var p=document.getElementById(id);
	if( p.value=='Student') { 
	exp=exp+500; }
	else { 
	exp=exp+1000;
	}
	if(p1.value=='Student') {
		exp=exp+500 }
		else if(p1.value=='Acadmician' || p1.value=='Professional') {
		exp=exp+1000;
		}
	if(p2.value=='Student') {
		exp=exp+500 }
		else if(p2.value=='Acadmician' || p2.value=='Professional') {
		exp=exp+1000;
		}
	if(p3.value=='Student') {
		exp=exp+500 }
		else if(p3.value=='Acadmician' || p3.value=='Professional') {
		exp=exp+1000;
		}
	if(p4.value=='Student') {
		exp=exp+500 }
		else if(p4.value=='Acadmician' || p4.value=='Professional') {
		exp=exp+1000;
		}
		document.getElementById("fees").value = exp;
		return exp;
	}
//--> 
function test() {
	var exp=0;

if(document.getElementById("position").value == 'Student')
exp+=500;
else if(document.getElementById("position").value == 'Acadmician' || document.getElementById("position").value == 'Professional')
exp+=1000;
document.getElementById("fees").value = exp;
}
function t1() {
	var exp=0;

if(document.getElementById("position1").value == 'Student')
exp+=500;
else if(document.getElementById("position1").value == 'Acadmician' || document.getElementById("position1").value == 'Professional')
exp+=1000;
document.getElementById("fees").value += exp;
}


    function ChangeCase(elem)
    {
        elem.value = elem.value.toUpperCase();
    }

</script>