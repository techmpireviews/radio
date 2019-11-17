<!DOCTYPE html>
<html>
<head>
	<title>Mobile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/goldicon.png">
    <script>
	setTimeout(function() {
  document.getElementById('intro').style.display='none'
}, 2000);
</script>
    <style type="text/css">
    	#introimg {
    		position: absolute;
    		top: 40%;
    		left: 50%;
    		right: 50%;
    		transform: translate(-50%, -50%);
    		width: 200px;
    		height: auto;
    	}

    	#intro {
    		width: 100%;
    		height: 100%;
    	}

    	#bg {
    		position: absolute;
    		top: 0px;
    		left: 0px;
    		width: 100%;
    		height: 100%;
    	}

    	#introfooter {
    		position: absolute;
    		bottom: 20px;
    		left: 50%;
    		right: 50%;
    		transform: translate(-50%, -50%);
    		width: 200px;
    		font-family: sans-serif;
    		font-size: 30px;
    		text-align: center;
    	}

    </style>
</head>
<body>
<iframe frameborder="0px" style="border: none; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" src="https://lintonradio.herokuapp.com"></iframe>
<div id="intro">
<img id="bg" src="colors/white.png">
<img id="introimg" src="images/circlelogo.png">
<b id="introfooter">Linton Radio</b>
</div>
</body>
</html>