<?php include('usr/header.php');
?>

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

<b style="font-size:13pt;font-weight:bold" class=underline02>Final Upload</b><br>
<br>
<br>
<form name="upload" method="post" action="post-finalupload.php" enctype="multipart/form-data">
	<input type="hidden" name="D_YEAR" value="2013">
	<input type="hidden" name="N_CONFERENCE" value="EICC">

	<font color=red>* Required field</font><br><br>
	<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" style="border-width:0px;width:550">
<tr>
		  <td style='font-weight:bold;'>Paper ID<font color=red>*</font></td>
		  <td><input type="text" name="paperid" id="paperid" style='width:300px;' required placeholder="Enter PaperID of Paper" ></td><td><span style='color:darkgreen;'>Format(EICCPPRxxx)</span></td>
		  </tr>
		<tr>
			<td width=130 style='font-weight:bold;'>Title<font color=red>*</font></td>
			<td width="306"><input type="text" name="title" style='width:300px;' required placeholder="Enter Title of Paper" id="title"			>
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;'>Abstract<font color=red>*</font></td>
			<td><textarea rows="6" style="width:100%;" name="abstract" style='width:170px;' required placeholder="Enter Abstract of Paper"></textarea></td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Keyword<font color=red>*</font></td>
			<td><input type="text" name="keyword" style='width:300px;' required placeholder="Enter Keywords of Paper">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Author <font color=red>*</font></td>
			<td><input type="text" name="author" style='width:300px;' required placeholder="Enter Author Name">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Affiliation<font color=red>*</font></td>
			<td><input type="text" name="affilation" style='width:300px;' required placeholder="Enter Affiliation of Author"></td>
		</tr>
		<tr>
		  <td colspan="2" valign=top style='font-weight:bold;'><span style='color:darkgreen;'>If you dont want to add Co-Authors Just leave the textboxs blank.</span></td>
		  </tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Co-Author 1.</td>
			<td><input type="text" name="coauth1" style='width:300px;' id="coauth1">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Affiliation</td>
			<td><input type="text" name="affilation1" style='width:300px;' id="aff1">
				</td>
		</tr><tr>
			<td style='font-weight:bold;' valign=top>Co-Author 2.</td>
			<td><input type="text" name="coauth2" style='width:300px;' id="coauth2">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Affiliation</td>
			<td><input type="text" name="affilation2" style='width:300px;' id="aff2">
				</td>
		</tr><tr>
			<td style='font-weight:bold;' valign=top>Co-Author 3.</td>
			<td><input type="text" name="coauth3" style='width:300px;' id="coauth3">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Affiliation</td>
			<td><input type="text" name="affilation3" style='width:300px;' id="aff3">
				</td>
		</tr><tr>
			<td style='font-weight:bold;' valign=top>Co-Author 4.</td>
			<td><input type="text" name="coauth4" style='width:300px;' id="coauth4">
				</td>
		</tr>
		<tr>
			<td style='font-weight:bold;' valign=top>Affiliation</td>
			<td><input type="text" name="affilation4" style='width:300px;' id="aff4">
				</td>
		</tr>
 <tr>
			<td colspan="2" valign=top style='font-weight:bold;'><span style='color:darkgreen;'>Please Upload your Final Camera Ready Paper as per the instruciton given it the Acceptence Latter and Review Report.Your filename must be in format: <strong>both in form of <em>PaperID_PaperTitle.doc</em> and <em>PaperID_PaperTitle.pdf</em> format</strong>.</span>			</td>
		  </tr>
        
        
        
		<tr>
			<td style='font-weight:bold;width:170px;' valign=top>Upload Paper(in doc)<font color=red>*</font></td>
			<td><input type="file" name="filedoc" style='width:170px;' class="btn01" id="filedoc"><br/><span style='color:darkgreen;'>Maximum Upload Size 2 MB.</span>
				</td>
		</tr><tr>
   <td style='font-weight:bold;width:170px;' valign=top>Upload Paper(in pdf)<font color=red>*</font></td>
			<td><input type="file" name="filepdf" style='width:170px;' class="btn01" id="filepdf"><br/><span style='color:darkgreen;'>Maximum Upload Size 2 MB.</span>
				</td></tr>
				<tr><td style='font-weight:bold;width:170px;' valign=top>Upload Copyright(in pdf/jpg)<font color=red>*</font></td>
			<td><input type="file" name="filecpr" style='width:170px;' class="btn01" id="filecpr"><br/><span style='color:darkgreen;'>Maximum Upload Size 2 MB.</span>
				</td></tr>
     


<tr>
			<td style='font-weight:bold;' valign=top></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align=center><br>
				<input type="hidden" value="false" name="checkvalue">
				<input type="hidden" value="memberjoin" name="AccessCheck">
				<input type="hidden" value="Pendancy" name="group">
				<input type="submit" value="SUBMIT" style="font-size:9pt;font-family:Verdana" name="upload" class="btn01">
				&nbsp;&nbsp;
			  <input type="reset" value="RESET" style="font-size:9pt;font-family:Verdana" class="btn01"></td>
		</tr>
	</table>
</form>



			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
        
		<?php include('footer.php'); ?>
		


