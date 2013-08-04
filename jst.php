<?php include('db.php');
$retval=mysql_query("SELECT paperno from upload");
$i=0;
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{ $paperid[]='EICCPPR'.$row[0];
 
 echo $paperid[$i];$i++;
 echo '<br>';
 $a=$row[0];
 
 mysql_query("UPDATE upload SET id ='$i' WHERE paperno ='$a'");
}

?>