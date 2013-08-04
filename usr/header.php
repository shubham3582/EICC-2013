<?php include('db.php');
 session_start();

//check logged in or not!
if(!isset($_SESSION['email'])){
header('Location:../index.php?pagename='.basename($_SERVER['PHP_SELF'], ".php"));
}
$email=$_SESSION['email'];
$sql = "SELECT name FROM register where email ='$email'";
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo '<HTML>
	<HEAD>
	<TITLE>EICC 2013</TITLE>
	<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css" />
	<link rel="shortcut icon" href="../img/favicon.png" type="image/png"/>
	</HEAD>
	<BODY bgcolor="#dce1e5">
	<!--table-layout:fixed;-->
	<table border=0 cellspacing=0 cellpadding=0 align=center bgcolor="white" style='.'table-layout:fixed;border:1px outset silver;'.'
		<tr>
			<td width=8></td>
			<td width=180></td>
			<td width=8></td>
			<td width=680></td>
			<td width=8></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan=3>
				<A href="http://www.eiccit.org/usr/mymenu.php"> <IMG width=871 height=170 style="border:0px;margin-top:5px;margin-bottom:5px;" alt="EICC2013" src="../img/header.jpg"></a>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan=3 style='.'background:#800000 ;'.'>
				<table border=0 cellpadding=0 cellspacing=0 style='.'border:0px solid gray;table-layout:fixed;'.' width=871>
					<tr>
					<td width=645 height=100 align=center><span style="color:#009900;font-weight:bold;font-size:12pt;">EICC 2013, April 26-27, 2013, Greater Noida,India</span><br><span style='.'color:#F0F0F0;font-weight:bold;font-size:10pt;'.'><p style='.'margin-top:4px;'.'>2<sup>nd</sup> National Conference on Information Technology                    
					</span></td>
					<td style='.'border-left:5px solid white;'.'>
<div style="text-align:center;">
<font color="#F0F0F0">Welcome to EICC 2013<br>Researcher <b>:'.' '.$row[0];
         
}
?> 

</b><br></font>
<input type="button" value=" MY MENU " class=btn01 onClick="location.href='http://eiccit.org/usr/mymenu.php'">&nbsp;
<input type="button" value=" LOGOUT " class=btn01 onClick="location.href='logout.php'">&nbsp;
</div>

</form>
</td><h1>
					</tr>
				</table>
			</td>

			<td>&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td colspan=3><div style='margin-top:5px;'></div></td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
            <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38614680-1']);
  _gaq.push(['_setDomainName', 'eiccit.org']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setCampNameKey', 'eicc']);
  _gaq.push(['_setCampSourceKey', '2013']);
  _gaq.push(['_setCampMediumKey', 'set']);
  _gaq.push(['_setCampTermKey', 'confrence']);
  _gaq.push(['_setCampContentKey', 'year']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>