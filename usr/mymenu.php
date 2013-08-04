<?php include('header.php');
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
			<div id="main" class=maincontent style='width:680'><style>
.mymenu01 {height:40px;border-width:1px;border-style:solid;border-color:#f0f0f0;font-size:9pt;font-family:Verdana;background-color:#800000 ;color:white;font-weight:bold;cursor:pointer}
</style>
<h4><a href="#">My Menu</a></h4><br>
<script language="javascript">
function winOpen(url,winname,winhow) {
window.open(url,winname,winhow)
} 
</script>
<table width=500 style="border-style:solid;border-width:1px;border-color:black;border-collapse:collapse;font-size:9pt;" align=center>
	<tr>
		<td>
<b>Paper Format</b>: Papers submitted for review must be in the <a href="../img/MSW_USltr_format.doc">Format</a>.<br>
** Please kindly follow the 'Formatting and Layout Instructions'<br>
		</td>
	</tr>
</table>
<table border=0 align=center style="border-width:0px;" width="500" cellspacing=1>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
	<td align=center class=mymenu01 colspan=2 onClick="javascript:location.href='news.php'">Find my Conference News</td>
</tr>
<tr><td align=center colspan=2><b style="font-size:12pt;">&nbsp;</td></tr>
<tr>
	<td align=center class=mymenu01 colspan=2 onClick="javascript:location.href='usr.php'">Find / Revise My Personal Information</td>
</tr>
<tr>
	<td colspan=2>
		- Find my personal information<br>
		- Revise my personal information<br>
	</td>
</tr>

<tr>
	<td align=center class=mymenu01 colspan=2 onClick="javascript:location.href='upload.php'">Submit (Upload) New<b style="color:#FF0000"> Paper(s)</b></td>
</tr>
<tr>
	<td colspan=2>
		- Submit (Upload) new papers<br>
		- Revise my paper information<br>
	</td>
</tr>
<tr>
	<td align=center class=mymenu01 colspan=2 onClick="javascript:location.href='http://eiccit.org/finalupload.php'">Upload Final Camera Ready <b style="color:#FF0000">Paper</b></td>
</tr>
<tr><td align=center colspan=2><b style="font-size:12pt;">&nbsp;</td></tr>

<tr>
	<td align=center class=mymenu01 colspan=2 onClick="javascript:location.href='http://eiccit.org/img/sch.pdf'"><b>Download Paper Schedule</b></td>
</tr>
</table>
			</div>

			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

