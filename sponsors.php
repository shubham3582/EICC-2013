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
	<title>EICC 2013-Sponsors</title> 
	<meta name="description" content="Sponsors - EICC 2013">
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
            <b style="font-size:13pt;font-weight:bold" class=underline02>Sponsorship</b>
<br><br>
<div class="post-description">
								<p>
								The conference organizers are seeking sponsors and industrial support for awarding

exceptional contributions and offer the best stage for the event in terms of additional

activities, such as invited speaker, invited panelists, best paper awards, gala dinner, and other

social events.<hr>

The organize offer a large spectrum of sponsorship and associated benefits:<br><br>
<b>Sponsor benefits:</b>

                    <ul class="star_list"><li>Logo at conference web site and link to the sponsor site</li></ul>
					<ul class="star_list"><li>Logo appearance on cover page of conference proceedings</li></ul>
                    <ul class="star_list"><li>Company information,brochures, or other materials distributed to attendees</li></ul>
					<ul class="star_list"><li>Company banner will be placed inside the auditorium</li></ul>
					<ul class="star_list"><li>One waived conference registration fees for sponsor's representatives</li></ul>

<b>Diamond Sponsorship</b><hr><br>
<b>Sponsor benefits:</b>
                    <ul class="star_list"><li>Logo at conference web site </li></ul>
					<ul class="star_list"><li>Company banner will be placed outside the auditorium</li></ul>
                    <ul class="star_list"><li>Company information, brochures, or other materials distributed to attendees</li></ul>
<b>Gold Sponsorship</b><hr><br>
<b>Sponsor benefits:</b>
                    <ul class="star_list"><li>Logo at conference web site </li></ul>
					<ul class="star_list"><li>Company information, brochures, or other materials distributed to attendees</li></ul>
<b>Silver Sponsorship</b><hr><br>

								<br>
</p>
							</div>



			</div>
			<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<?php include('footer.php'); ?>

