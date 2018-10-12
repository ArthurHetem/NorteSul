<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<form>
<div class="form-group">
  <label for="metar1">METAR 1</label>
  <input type="text" name="metar1" class="form-control" id="metar1" maxlength="4">
  </div>
  <div class="form-group">
<label for="metar2">METAR 2</label>
  <input type="text" name="metar2" class="form-control" id="metar2" maxlength="4">
  </div>
    <button class="btn btn-primary" style="width:100%;" onclick="buscarmetar()">Buscar</button>
</form>
<?php
$url = "http://metar.vatsim.net/SBGR";
$page = file_get_contents($url);
echo $page;
?>
<script>
$.get( "http://metar.vatsim.net/SBGR" function( data ) {
$.post('http://metar.vatsim.net/SBGR', { url: url }, function(data) {
    document.getElementById('somediv').innerHTML = data;        
});
</script>