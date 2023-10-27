<?php 
include("topo.php"); 

include("CardInfo.php");
$item = $_GET["cod"];

$sqlimg = "SELECT * FROM imagens JOIN tipo_img ON ima_tipo = timg_id 
WHERE ima_id_local = ".$locais[$item]["codigo"]." AND ima_tipo = 2";

$resultimg = $conecta->query($sqlimg);

if ($resultimg->num_rows > 0) {
  $imgL = array();
  

  while($row = $resultimg->fetch_assoc()) {
    

    array_push($imgL,
    array(
      "codigo" => $row['ima_id'],
      "desc" => $row['ima_desc'],
      "foto" => $row['ima_imagem'],
      )
    );
  }
} else {
  echo "0 results for images";
}

?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
   integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
   integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
   crossorigin=""></script>

<link rel="stylesheet"
href="css/pagina.css"/>

<br>

<div class="conteiner">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">

<?php
$i;

$slide = 0;
foreach($imgL as $key => $i){
  
  if($key == 0){
  ?>
    <div class="carousel-item active">
      <?php


        echo "<img class='d-block w-100' src='data: image/jpeg; base64, "  .base64_encode($imgL[$key]["foto"]). " '/>";

        $slide++;
      ?>
    </div>
    <?php
  }
  else{
    ?>
    <div class="carousel-item">
      <?php

        echo "<img class='d-block w-100' src='data: image/jpeg; base64, "  .base64_encode($imgL[$key]["foto"]). " '/>";

        $slide++;
      ?>
    </div>
    <?php
  }
  }
?>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

</div>
<br>
<div class="texto">
  
    <p class="desc"><?php echo utf8_encode($locais[$item]["descricao"]); ?></p>

    <div id="map"> </div>
  </div>
  <br>  
</div>


<script>
  
var redIcon = L.icon({
    iconUrl: 'img/redIcon.png',

    iconSize:     [38, 45], // size of the icon 
    iconAnchor:   [20, 55], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


var long = <?php echo $locais[$item]['long']?>

var lat = <?php echo $locais[$item]['lat']?>

//long, lat

var map = L.map('map').setView([long, lat],  17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([long, lat]).addTo(map)
    .bindPopup("<?php echo utf8_encode($locais[$item]['titulo'])?>")
    .openPopup();
    </script>

<?php
  foreach($coords as $key => $a){
    if($coords[$key]['lat'] != $locais[$item]['lat'] && $coords[$key]['tipo'] == 1 && $coords[$key]['long'] != $locais[$item]['long']){
    if($coords[$key]['id']>0){
    ?>

   <script>
    var longi = <?php echo $coords[$key]['long']?>;
    var lati =  <?php echo $coords[$key]['lat']?>;
    var nome = '<?php echo utf8_encode($coords[$key]['nome'])?>'

     L.marker([longi, lati], {icon: redIcon}).addTo(map).bindPopup(nome);
   </script>
    
    <?php
  }
}
}
?>