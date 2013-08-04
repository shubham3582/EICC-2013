<!DOCTYPE html>
<!-- saved from url=(0027)http://joelb.me/scrollpath/ -->
<html lang="en" class=" -webkit-"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		 
		<style media="" data-href="style/style.css">/* === CSS RESET === */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* === End of CSS RESET === */

body {
	background: url("http://joelb.me/scrollpath/assets/classy_fabric.png");
	color: white;
	font-size: 20px;
	font-family: "Terminal Dosis", sans-serif;
	text-shadow: 
		1px 1px 0 transparent,
		2px 2px 0 #101010;
	overflow: hidden;
}
h1 {
	font-size: 75px;
	font-weight: bold;
	line-height: 1.5em;
	text-shadow: 
		2px 2px 0 transparent,
		4px 4px 0 #101010;
}

a, a:visited {
	color: white;
	text-decoration: none;
	border-bottom: 2px dotted;
	-webkit-transition: color 0.2s;
}

a:hover {
	color: #AAA;
}

a:active {
	color: lightblue;
}

.big {
	display: block;
	font-size: 45px;
	font-weight: bold;
	line-height: 1.3em;
	margin-bottom: 10px;
	text-shadow: 
		2px 2px 0 transparent,
		4px 4px 0 #101010;
}

.wrapper div {
	position: absolute;
}

.setting, nav {
	position: fixed;
	z-index: 9999999;
	bottom: 0;
	background: rgba(10,10,10, 0.5);
	font-family: Helvetica, Arial, sans-serif;
	font-weight: normal;
	font-size: 20px;
}

.setting {
	right: 0;
	padding: 10px 20px;
	border-radius: 10px 0 0 0;
}

.setting a {
	border: none;
}

nav {
	left: 0;
	border-radius: 0 10px 0 0;
}

nav li {
	float: left;
}

nav a {
	display: block;
	width: 40px;
	height: 40px;
	line-height: 40px;
	border: none;
	text-align: center;
	-webkit-transition: 0.25s;
}

nav li:last-child a {
	border-radius: 0 10px 0 0;
}

nav a:hover {
	background: rgba(15,15,15, 0.5);
}

.sp-canvas {
	display: none;
}

.arrow {
	position: relative;
	display: inline-block;
}

.demo { 
	width: 800px;
	font-size: 30px;
	text-align: center;
	font-weight: bold;
}

.demo .arrow {
	font-size: 20px;
	-webkit-animation: point-down 0.5s alternate infinite;
}

.description {
	top: 740px;
	left: 180px;
	width: 440px;
}

.syntax {
	top: 1510px;
	left: 430px;
	width: 400px;
}

.scrollbar {
	top: 1540px;
	left: 1600px;
	width: 400px;
}

.rotations {
	left: 2185px;
	top: 660px;
	width: 460px;
	-webkit-transform: rotate(-90deg) translateY(2.5em);
}

.rotations .upside-down {
	font-size: 42px;
	text-align: right;
	-webkit-transform: rotate(180deg) translateY(3em);
}

.source {
	left: 2200px;
	top: -800px;
	width: 400px;
	-webkit-transform: rotate(90deg) translateX(50px);
}

.follow {
	width: 475px;
	left: 1100px;
	top: -950px;
	-webkit-transform: rotate(90deg) translateX(50px);
}

.follow .big {
	font-size: 40px;
}

.highlight {
	-webkit-animation: highlight 0.2s alternate 6 ;
}

@-webkit-keyframes point-down {
	from {
		top: 0;
	}
	to {
		top: 5px;
	}
}

@-webkit-keyframes highlight {
	to {
		background: lightblue;
	}
}
</style> 
		<style media="" data-href="style/scrollpath.css">/* =========================================
  	Scroll bar styles for jQuery Scroll Path
  	      (http://joelb.me/scrollpath)
   ========================================= */

.sp-scroll-bar {
	position: fixed;
	z-index: 9999;
	right: 0;
	top: 5%;
	width: 10px;
	height: 90%;
	border-radius: 5px;
}

.sp-scroll-bar:hover {
	background: white;
	background: rgba(255,255,255, 0.1);
}

.sp-scroll-bar .sp-scroll-handle {
	position: absolute;
	width: 100%;
	height: 50px;
	border-radius: inherit;
	background: gray;
	background: rgba(0,0,0,0.7);
}

.sp-scroll-bar .sp-scroll-handle:hover {
	background: black;
}</style> 
		<link href="css/css" rel="stylesheet" type="text/css">
		<script type="text/javascript" async src="js/ga.js"></script><script type="text/javascript" src="js/prefixfree.min.js"></script>
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta name="description" content="The plugin that lets you define custom scroll paths"> 
		<title>Student Team-www.eiccit.org</title>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25206568-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body><div class="sp-scroll-bar"><div class="sp-scroll-handle" style="top: 331.7551020408163px;"></div></div>
		<!--<nav>
			<ul>
				<li><a href="http://joelb.me/scrollpath/#start">1</a></li>
				<li><a href="http://joelb.me/scrollpath/#description">2</a></li>
				<li><a href="http://joelb.me/scrollpath/#syntax">3</a></li>
				<li><a href="http://joelb.me/scrollpath/#scrollbar">4</a></li>
				<li><a href="http://joelb.me/scrollpath/#rotations">5</a></li>
				<li><a href="http://joelb.me/scrollpath/#rotations-rotated">6</a></li>
				<li><a href="http://joelb.me/scrollpath/#source">7</a></li>
				<li><a href="http://joelb.me/scrollpath/#follow">8</a></li>
			</ul>
		</nav>-->
		<div class="setting">
			<a href="" class="show-path">Show Path</a>
		</div>
		<div class="wrapper" style="position: relative; -webkit-transform-origin: 2400px 150px; -webkit-transform: translate(-1717px, 162px) rotate(4.71238898038469rad);"><canvas class="sp-canvas" style="position: absolute; z-index: 9998; left: -220px; top: -870px; pointer-events: none; -webkit-user-select: none; -webkit-user-drag: none;" width="2640" height="2490"></canvas>
			<div class="demo">
				<h1>Student Team</h1>
				<span class="arrow">↓</span> Credits <span class="arrow">↓</span>
			</div>
			
			<div class="description">
				<p class="big"><u>Web Team</u></p>
				<p class="big">Shubham Srivastava</p>
				<p class="big">Manmohan Yadav</p>
				<p class="big">Anjali Pahuja</p>
			</div>

			<div class="syntax">
				<p class="big"><u>Design Team</u></p>
				<p class="big">Abhay Raj</p>
				<p class="big">Ashwani Agarwal</p>
				<p class="big">Neha Agarwal</p>
			</div>

			<div class="scrollbar">
				<span class="big"><u>Editorial Team</u></span>
                <p class="big">Aditya Varshney</p>
				<p class="big">Abhineet Singh</p>
				<p class="big">Divya Jaisawal</p>
				<p class="big">Mukul Gavri</p>
                <p class="big">Sachin Gupta</p>
				<p class="big">Prabhav Tandon</p>
				<p class="big">Manish Mishra</p>
	</div>

			<div class="rotations">
				<span class="big"><u>Co-ordination Team</u></span>
                <p class="big">Ankur Mani Tripathi</p>
                <p class="big">Anurag Mishra</p>
				<p class="big">Kanishk Dubey</p>
				<p class="big">Kapil Kaushik</p>
				<p class="big">Kshitij Tyagi</p>
                <p class="big">Devanash Pandey</p>
				<p class="big">Aastha Mahedru</p>
				<p class="big">Mayank Mittal</p>
				<p class="big">Prerna Chandrakar</p>
                <p class="big">Smartha Sharma</p>
                
				<!--<span class="upside-down big">in <a href="http://caniuse.com/#feat=transforms2d">supported</a> browsers.</span>
			</div>

			<div class="source">
				<span class="big">It's available with documentation on <a href="https://github.com/JoelBesada/scrollpath">GitHub</a>.<span>
			</span></span></div>

			<div class="follow">
				<span class="big">Feel free to <a href="https://twitter.com/JoelBesada">follow me</a> on Twitter. You can also be <span class="count">the 3473rd kind person to</span> <a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Ftwitter.com%2Fabout%2Fresources%2Fbuttons&source=tweetbutton&text=jQuery%20Scroll%20Path%20Plugin&url=http%3A%2F%2Fjoelb.me%2Fscrollpath%2F&via=JoelBesada" class="tweet">tweet</a> this.</span>
			</div>-->
	</div>
	<script type="text/javascript" src="js/jquery-latest.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/jquery.scrollpath.js"></script>
	<script type="text/javascript" src="js/demo.js"></script>
	
</body></html>