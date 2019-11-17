<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>KLHS</title>
    <link rel="icon" href="nointernetimg2.gif" type="image/x-icon">
    <script>
        if(navigator.onLine == false) {
        location.href = 'file:///android_asset/nointernet.html';
        }
    </script>
    <style>
        .main {
        margin-top: 40px;
        }
        .images {
        width: 100%;
        height: auto;
        margin-top: -90px;
        }
        .imagesalone {
        width: 100%;
        height: auto;
        }
        #title {
        position: sticky;
        top: 0px;
        border: solid;
        border-width: 2px;
        color: #000000;
        background-color: #ffffff;
        border-top-color: #ffffff;
        border-left-color: #ffffff;
        border-right-color: #ffffff;
        border-bottom-color: #000000;
        z-index: 10;
        }
    </style>
</head>
<body>
<h1 id="title"><center>Live Streams</center></h1>
    <div class="main">
    <div class="klhsradio">
    <button id="playiconbutton" onclick="klhsPlay()" type="button"><img id="playicon" src="play.png"></button>
    <button id="pauseiconbutton" onclick="klhsPause()" type="button"><img id="pauseicon" src="pause.png"></button>
</div>
<img class="images" id="img1" src="klhslive.png"><br><br><br><br><br>
    <div class="klpsradio">
    <button id="playiconbutton2" onclick="klpsPlay()" type="button"><img id="playicon2" src="play.png"></button>
    <button id="pauseiconbutton2" onclick="klpsPause()" type="button"><img id="pauseicon2" src="pause.png"></button>
</div>
<img class="images" id="img2" src="klpslive.png">
<audio id="klhsaudio">
    <source src="https://ice10.securenetsystems.net/KLHS?playSessionID=ECE0C2F5-FBA6-7E28-D207B2E33E125379" type="audio/ogg">
</audio>
<br><br><br><br>
<img class="imagesalone" id="img3" src="klhsappimg.gif"><br><br><br><br><br><br><br><br><br>
</div>
<script>
    var klhsaudio = document.getElementById("klhsaudio");

    function klhsPlay() {
    klhsaudio.play();
    }

    function klhsPause() {
    klhsaudio.pause();
    }

</script>
<audio id="klhsaudio2">
    <source src="https:\/\/klps.out.airtime.pro\/klps_a" type="audio/ogg">
</audio>
<script>
    var klpsaudio = document.getElementById("klhsaudio2");

    function klpsPlay() {
    klpsaudio.play();
    }

    function klpsPause() {
    klpsaudio.pause();
    }
</script>

<style>
    #playicon {
    width: 65px;
    height: auto;
    background-color: none;
    }
    #pauseicon {
    width: 65px;
    height: auto;
    background-color: none;
    }
    #playicon2 {
    width: 65px;
    height: auto;
    background-color: none;
    }
    #pauseicon2 {
    width: 65px;
    height: auto;
    background-color: none;
    }
    button {
    background-color: #ffffff;
    clip-path: circle(37%);
    z-index: 7;
    }
    .klhsradio {
    float: right;
    }
    .klpsradio {
    float: right;
    }
</style>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
