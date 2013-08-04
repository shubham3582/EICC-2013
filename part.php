<?php include('db.php');
session_start();
$position   = $_POST['degree'];
$mobileno   = $_POST['mobileno'];
$fee   = $_POST['fees'];
$mode   = $_POST['major'];
$coauth1=$_POST['coauth1'];
$aff1=$_POST['aff1'];
$email1=$_POST['email1'];
$position1=$_POST['position1'];
$mobileno1=$_POST['mobileno1'];

$coauth2=$_POST['coauth2'];
$aff2=$_POST['aff2'];
$email2=$_POST['email2'];
$position2=$_POST['position2'];
$mobileno2=$_POST['mobileno2'];

$coauth3=$_POST['coauth3'];
$aff3=$_POST['aff3'];
$email3=$_POST['email3'];
$position3=$_POST['position3'];
$mobileno3=$_POST['mobileno3'];

$coauth4=$_POST['coauth4'];
$aff4=$_POST['aff4'];
$email4=$_POST['email4'];
$position4=$_POST['position4'];
$mobileno4=$_POST['mobileno4'];

$ddn   = $_POST['ddn'];
$ddb   = $_POST['ddb'];
$ddd   = $_POST['ddd'];
$stay   = $_POST['stay'];
$pprid=$_SESSION['pprid'];
$title='';$auth='';
$aff='';$email='';
if(isset($_POST['join'])) //===When I will Set the Button to 1 or Press Button to register
{ 
$retval=mysql_query("SELECT title,author,affilation,email FROM upload where paperid='$pprid';");
    if(!$retval) {
    die('Could not get data: ' . mysql_error());
    }
	while($row = mysql_fetch_array($retval, MYSQL_NUM))
    { $title=$row[0];
	   $auth=$row[1];
	   $aff=$row[2];
	   $email=$row[3];
	}
	$query    =    "insert into registration(paperid,title,auth,aff,email,position,mobileno,coauth1,aff1,email1,position1,mobileno1,coauth2,aff2,email2,position2,mobileno2,coauth3,aff3,email3,position3,mobileno3,coauth4,aff4,email4,position4,mobileno4,fee,mode,ddn,ddb,ddd)values('$pprid','$title','$auth','$aff','$email','$position','$mobileno','$coauth1','$aff1','$email1','$position1','$mobileno1','$coauth2','$aff2','$email2','$position2','$mobileno2','$coauth3','$aff3','$email3','$position3','$mobileno3','$coauth4','$aff4','$email4','$position4','$mobileno4','$fee','$mode','$ddn','$ddb','$ddd')";
$res    =    mysql_query($query);
if(!$res) {
    die('Already Registered ' . mysql_error());
    }
else echo 'Success';


}
?>