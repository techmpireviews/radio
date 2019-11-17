<!DOCTYPE html>
<html>
<head>
	</script>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/package.json">
    <link rel="apple-touch-icon" sizes="512x512" href="images/goldicon.png">
    <link rel="icon" href="images/goldicon.png">	
    <title>Linton Radio App</title>
    <style type="text/css">

    	body {
    		background-color: #000000;
    	}

		#footer {
			position: absolute;
			top: 7px;
			right: 28px;
			width: 50px;
			height: 50px;
			transition: 0.45s ease-in-out;
			z-index: -1;
		}

		button:hover {
			outline: none;
		}

		#open {
			background-color: #ffffff;
			font-size: 40px;
			box-shadow: none;
			border: 0px;
			border-color: transparent;
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 5px;
			-webkit-clip-path: circle();
			color: #000000;
			transition: 0.1s ease-in-out;
			cursor: pointer;
		}

		#open:active {
			background-color: #000000;
			color: #ffffff;
			transform: rotate(360deg);
		}
		header {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			-webkit-clip-path: circle(20px at right 47px top 30px);
			transition: 0.5s;
			z-index: -1;
		}

		#closeul {
			text-decoration: none;
			list-style-type: none;
			text-align: center;
			display: inline;
		}

		li {
			color: #000000;
			font-size: 35px;
			padding-top: 20px;
		}

		li > a {text-decoration: none; color: #000000;}

		li > a:active {text-decoration: none; color: #000000;}

		#closediv {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 75%;
			transform: translate(-50%, -50%);
		}

		#close {
			background-color: #ffffff;
			font-size: 55px;
			border: 0px;
			border-color: #000000;
			color: #000000;
			padding: 17px;
			-webkit-clip-path: circle(30px at 31px 53px);
			cursor: pointer;
			transition: 0.1s ease-in-out;
		}

		#close:active {
			background-color: #000000;
			color: #ffffff;
		}

		#menubg {
			position: absolute;
			background-image: linear-gradient(to bottom right, #FFF414, #FFFA86);
			width: 100%;
			height: 100%;
			z-index: -10;
		}

		input, button, textarea, select, a {
		-webkit-tap-highlight-color: rgba(0,0,0,0);
		}

		.font {
			font-family: sans-serif;
			font-size: 35px;
		}

		main {
			position: absolute;
			width: 100%;
			height: 70%;
			top: 50%;
        	left: 50%;
        	transform: translate(-50%, -45%);
			background-color: #000000;
			z-index: 50;
		}

		#main {
			transition: 0s;
		}

	</style>
    <title>Mobile</title>
</head>
<body>
<h1 style="color: #000000; margin-top: 4px;
position: absolute; left: 50%; transform: translate(-50%); font-size: 38px; font-family: sans-serif; z-index: -5; width: 120px; border: solid 1.5px; border-color: transparent; border-bottom-color: #000000; text-align: center;">Home</h1>
<div style="width: 100%; height: 70px; position: absolute; top: 0px; left: 0px; background-color: #ffffff; z-index: -30;" id="topbg"></div>
<header id="header">
    <div id="menubg"></div>
    <div id="closediv">
	<span>
		<ul id="closeul">
			<li class="font"><a href="index.php">Home</a></li>
			<li class="font"><a href="radio.php">Radio</a></li>
			<li class="font"><a href="podcasts.php">Podcasts</a></li>
			<li class="font"><button id="close" href="void(0)" onclick="close2()">x</button></li>
		</ul>
	</span>
    </div>
</header>
<footer id="footer">
    <div id="buttondiv">
	<span id="buttonspan">
		<button href="void(0)" id="open" onclick="open1()">☰</button>
	</span>
    </div>
</footer>
<script type="text/javascript">
		function open1() {
			document.getElementById("header").style.webkitClipPath = "circle(100%)";
			document.getElementById("footer").style.zIndex = "-20";
			document.getElementById("main").style.zIndex = "-50";
			document.getElementById("main").style.transition = "0s";
			document.getElementById("footer").style.visibility = "hidden";
		}

		function close2() {
			document.getElementById("header").style.webkitClipPath = "circle(20px at right 44px top 35px)";
			document.getElementById("main").style.zIndex = "50";
			document.getElementById("footer").style.zIndex = "-1";
			document.getElementById("main").style.transition = "1s";
			document.getElementById("footer").style.visibility = "visible";
		}
</script>
<style>
        #frame {
        width: 100%;
        height: 100%;
        position: relative;
        border: 0px;
        background-color: none;
        z-index: 1;
        }

        #image {
        width: 70%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: auto;
        z-index: -1;
        }
    </style>
<main id="main">
</main>
</body>
</html>