<?php include('header.php');
$rs=mysql_query("SELECT paperno,title,filename from upload where email='$email'");
if(! $rs )
{
  die('Could not get data: ' . mysql_error());
}

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
<table width="600" border="0">
  <tr>
    <th width="117" scope="col"><div align="justify">Paper ID</div></th>
    <th width="169" scope="col"><div align="justify">Title</div></th>
    <th width="163" scope="col"><div align="justify">File Name</div></th>
    <th width="62" scope="col"><div align="justify"></div></th>
    <th width="67" scope="col"><div align="justify"></div></th>
  </tr>
  <?php
  while($rc = mysql_fetch_array($rs))
{
	 ?>
  <tr>
    <th scope="row"><?php echo 'EICCPPR'.$rc[0]; ?></th>
    <td><?php echo $rc[1]; ?></td>
    <td><?php echo $rc[2]; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php } ?>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
			</div>

			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

