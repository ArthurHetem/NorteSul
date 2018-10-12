<head>
  <title>EFBv</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
<section class="base">
<div class="botaocima"><button onclick="ligar()" class="botaopower" id="botaopower"><i class="fas fa-power-off"></i></div></div>
<section class="tela">
<div class="bootando" id="bootando">AA</div>
</section>
<div class="botaobaixo"><button class="botaohome" onclick="home()"> </div></div>
</section>
</body>
<script>
function ligar() {
    document.getElementById("bootando").innerHTML = '<img src="img/Boot.png"></img>';
	setTimeout(bootanim, 5000);
}
function bootanim() {
    document.getElementById("bootando").innerHTML = '<img src="img/Booting.gif"></img>';
	setTimeout(startou, 8000);
}
function startou() {
    document.getElementById("bootando").innerHTML = '<p class="esph"><button onclick="echart()" class="botaom"><i class="fas fa-file"></i> Electronic Charts</button> <button class="botaom esp"><i class="fas fa-book"></i> E-Docs</button></p><p class="esph espv"><button class="botaom"><i class="far fa-check-square"></i> Checklists</button> <button class="botaom esp"><i class="fas fa-cloud"></i> Weather</button></p><p class="esph espv"><button class="botaom" onclick="desligar()"><i class="fas fa-power-off"></i> Shutdown</button> <button class="botaom esp"><i class="fas fa-times"></i> Not Installed APP 6</button></p>'
	document.getElementById("botaopower").disabled = true;
}
function home() {
    document.getElementById("bootando").innerHTML = '<p class="esph"><button onclick="echart()" class="botaom"><i class="fas fa-file"></i> Electronic Charts</button> <button class="botaom esp"><i class="fas fa-book"></i> E-Docs</button></p><p class="esph espv"><button class="botaom"><i class="far fa-check-square"></i> Checklists</button> <button class="botaom esp"><i class="fas fa-cloud"></i> Weather</button></p><p class="esph espv"><button class="botaom"onclick="desligar()"><i class="fas fa-power-off"></i> Shutdown</button> <button class="botaom esp"><i class="fas fa-times"></i> Not Installed APP 6</button></p>'
}
function echart() {
    document.getElementById("bootando").innerHTML = '<iframe src="https://goo.gl/2xIoAm" width="420" height="550" scrolling="yes" frameborder="1px" align="center"></iframe>'
}
function desligar() {
    document.getElementById("bootando").innerHTML = ' '
	document.getElementById("botaopower").disabled = false;
}
</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>