<?php include('db.php');
?>
<head>
  <title></title>
  <style type="text/css">
  body {
  background-image: url("test.jpg");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-position:center; 
  
  }
 
  </style>
</head>

<body >
  <table width="100%" border="0">
  <tr>
  <td colspan="3" style="background-color:#FFA500;">
  <img src="img/header.jpg" align="center">
  </td>
  </tr>
  <tr>
  <td colspan="3">
  </td></tr>
  <tr>
  <td colspan="3">
  <h3><center>Index</center></h3>
  </td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr>
  <td width = 10% ><center>S.No</center> </td>
  <td width = 60%><center> Title </center></td>
  <td width = 30%> <center>Author </center></td>
  </tr>

<tr>
<td width = 10% ><center> </center> </td>
<td width = 60% ><a href="./Proceedings/Preface.pdf">Preface </td>
<td width = 30% >Team EICC
 </td>
</tr>
<?php 
$retval=mysql_query("SELECT * from upload-1");
while($row = mysql_fetch_array($retval,MYSQL_NUM))
  { 
?>
<tr>
<td width = 10% ><center><?php echo $row[0]; ?></center> </td>
<td width = 60% ><?php echo'<a href="'.$row[1].'pdf">'.$row[1].' </td>'; ?>
<td width = 30% ><?php echo $row[2]; ?>
 </td>
</tr>
<?php } ?>

