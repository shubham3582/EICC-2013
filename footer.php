<br>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="3" align="center" style="font-size:8pt;line-height:120%;border-top:1px solid #600000 ;">
				<br><b style="font-size:9pt">Galgotias College Of Engineering And Technology, Greater Noida,</b><br>
				Copyright (c) 2012. Galgotias College Of Engineering And Technology. All rights reserved.<br>
                Best Experience with Google Chrome,Mozilla Firefox,Opera<br>
           
			
				Contact: EICC Galgotia <a href="mailto:eicc.galgotias@gmail.com">eicc.galgotias@gmail.com</a><br>or
                <a href='mailto:eicc2013@galgotiacollege.edu'>eicc2013@galgotiacollege.edu</a><br>
		  </td>
			<td>&nbsp;</td>
		</tr>
<tr>
			<td>&nbsp;</td>
			<td colspan="3" align="center" style="font-size:8pt;line-height:120%;border-top:1px solid #600000 ;">
	Site Developed By : <a href="http://www.facebook.com/shubham3582/" target="_blank">Shubham Srivastava</a>	
		  </td>
			<td>&nbsp;</td>
		</tr>

	</tbody></table>

<!-- code of quick menu -->

<script> 
if (!document.layers)
document.write('<div id="divStayTopLeft" style="position:absolute">')
</script>

<layer id="divStayTopLeft">
<style type='text/css'>
<!--

/* title of sidemenu(top) */
.v1 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #0F3D7C; text-decoration:none;}

.sidemenuQuick
{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #646464;
	text-decoration: none;
	text-align:left;
	border: solid 1px gray;
	padding: 0 0 0 0;
	margin: 0 0 5 0;
/*	background-color: ;
	/*width: 93px;*/
}

.styleqck
{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}

.newtag
{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: blue;
	text-decoration: none;
}

.hottag
{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: red;
	text-decoration: none;
}

.a1:link {  color: #666666; text-decoration: none}
.a1:visited { color: #666666; text-decoration: none }
.a1:hover {  color: #0099FF; text-decoration: none}


-->
</style>

<table class="sidemenuQuick" cellspacing=0>
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u>Publication Partner</u></b></td>
  </tr>
 
  <tr>
    <td class="styleqck" align=center colspan=2><a href='http://www.galgotias.in' target='_blank'><img src="img/gp.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.galgotias.in')"></a></td>
  </tr>
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1">Galgotia Publication</b></td>
  </tr> 
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><br /></b></td>
  </tr>
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u>Technical Partner</u></b></td>
  </tr>
  <tr>
    <td class="styleqck" align=center colspan=2><a href='http://nlss.org.in/' target='_blank'><img src="http://nlss.org.in/wp-content/themes/nlss/images/jpst.png" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://nlss.org.in')" border=0></a></td>
  </tr>
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><br /></b></td>
  </tr>
   <tr>
    <td class="styleqck" align=center colspan=2><a href='http://ijrrest.org' target='_blank'><img src="http://ijrrest.org/images/logo.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://ijrrest.org')" border=0></a></td>
  </tr>
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><br /></b></td>
  </tr>
 
  <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u>Sponsors</u></b></td>
  </tr>
  <tr>
    <td class="styleqck" align=center><img src="img/srikesar logo1.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.srikesar.com')"></td>
    </tr>
  
</table>
</layer>
 
 
 
<script type="text/javascript"> 
 

 
if (!document.layers)
document.write('</div>')


var verticalpos="fromtop"

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}
 
function JSFX_FloatTopDiv()
{
	var startX = 905;
	var startY = 30;
	var ns = (navigator.appName.indexOf("Netscape") != -1) || window.opera;
	var d = document;
	var plusWidth = 0;
	var numTimeout = 15;
	var clientW = 0;

	function initPos() {
		clientW = iecompattest().clientWidth;
		if(clientW > 885) {
		 plusWidth = (clientW - 885)/2;
		 startX += plusWidth;
		}
	}

	initPos();

	function ml(id)
	{
		var el=d.getElementById(id);
		if(d.layers)el.style=el;
			el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
			el.x = startX;
		if (verticalpos=="fromtop")
			el.y = startY;
		else{
			el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
			el.y -= startY;
		}
		return el;
	}

	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
			var pY = ns ? pageYOffset : document.body.scrollTop;
			//iecompattest().documentElement.scrollTop;
			ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
			var pY = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
			ftlObj.y += (pY - startY - ftlObj.y)/8;
		}

		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", numTimeout);
	}

	ftlObj = ml("divStayTopLeft");
	stayTopLeft();

}

JSFX_FloatTopDiv();

</script>


<script>
//Resize the window to that time execute this code
window.onresize = function() {
	JSFX_FloatTopDiv();
}
</script> 
<div id="DivMovingLayer" style="width: 145px; position: absolute; left: 120px; top: 30px;display: block;border: solid 1px gray;">
<table width="140px" border="0" cellspacing="0" cellpadding="0"> 
<tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u>Media Partners</u></b></td>
  </tr>
   <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u><br></u></b></td>
  </tr>
  <tr>
    <td class="styleqck" align=center><img src="img/radio__2.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.radionoida.fm/')"></td>
    </tr>
					 <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u><br></u></b></td>
  </tr>
  <tr>
    <td class="styleqck" align=center><img src="img/h.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.hindustantimes.com/')"></td>
    </tr>
					<tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u><br></u></b></td>
  </tr>
  <tr>
    <td class="styleqck" align=center><img src="img/d.gif" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.jagran.com/')"></td>
    </tr>
    <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u><br></u></b></td>
  </tr>
    <tr>
	<td align="center" bgcolor="#DDDDDD" colspan=2><b class="v1"><u>Sponsors</u></b></td>
  </tr>
  
  <tr>
    <td class="styleqck" align=center><img src="img/heart.jpg" width=130 height=100 onmouseover="this.style.cursor='hand'" onclick="javascript:window.open('http://www.heartplus.in/')"></td>
    </tr>
				</tbody></table>
				
			</td>
		</tr>
	</tbody></table>
</td>
</tr> 

</tbody></table> 
</div>
<script language="javascript"> 
//???? ??? 
function ResetRemocon(){ 
  
  var DivMovingLayerYFrom, DivMovingLayerYTo, OffsetY, ResetTime; 

  ResetTime = 100; 

  if (DivMovingLayerRule == 'center'){ 
    //??? ??, ??? ?? x?? ??? ?? ?? 

    if (document.body.clientWidth < parseInt ((ContentsWidth + 2 * DivMovingLayerX + 2 * LayerWidth) / 2, 10) - DivMovingLayerX - LayerWidth) { 

      DivMovingLayer.style.left = parseInt (ContentsWidth / 2, 10) + DivMovingLayerX + "px"; 
    } 
    else { 

      DivMovingLayer.style.left = (DivMovingLayerX + (document.body.clientWidth / 2)) + "px"; 
    } 
  } 
  else if (DivMovingLayerRule == 'left'){ 
    //???? ??, ?? ?? x?? ??? ?? ?? 

    DivMovingLayer.style.left = (DivMovingLayerX) + "px"; 
  } 

  DivMovingLayerYFrom = parseInt (DivMovingLayer.style.top, 10); 
  DivMovingLayerYTo = DivMovingLayerY + document.body.scrollTop + 1; 

  if ( DivMovingLayerYFrom != DivMovingLayerYTo ) { 

    OffsetY = Math.ceil( Math.abs( DivMovingLayerYTo - DivMovingLayerYFrom ) / 20 ); 

    if ( DivMovingLayerYTo < DivMovingLayerYFrom ) 
      OffsetY = -OffsetY; 

    DivMovingLayer.style.top = (DivMovingLayerYFrom + OffsetY) + "px"; 

    ResetTime = 10; 
  } 

  setTimeout ("ResetRemocon()", ResetTime); 
} 

function SetRemocon() { 

  DivMovingLayer.style.display = "block"; 

  DivMovingLayer.style.top = (DivMovingLayerY + document.body.scrollTop + 1) + "px"; 

  ResetRemocon(); 
  return true; 
} 

function NoneRemocon() { 

  DivMovingLayer.style.display = "none"; 
} 



if (typeof document.body == "undefined") 
  document.body = document.getElementsByTagName("BODY")[0]; 

var DivMovingLayer = document.getElementById("DivMovingLayer"); 

//???? 
var ContentsWidth = 1024;//???? ???? ??? ??? ??, ??? ???? ?? 
var LayerWidth = 175;//???? ??? ??, ??? ???? ?? 
var DivMovingLayerX = -610;//??? ??? ??? ?(?? 900? ??) 
var DivMovingLayerY = 30;//??? ??? ? ? 

var DivMovingLayerRule = 'center';//center ??? ??? ???? x??, left  ??? ??? ???? x?? 

//??? ??? 
SetRemocon(); 
</script>

<!-- end of quick menu -->
