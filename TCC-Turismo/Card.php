<?php
include ("topo.php");
include("CardInfo.php");



?>

<link rel="stylesheet"
href="css/index.css" />



</br></br></br>
<div class="container">

  <center> 
<div class="row row-cols-md-3">

    <?php
    foreach($locais as $key => $item) {
      if($key > 0 ){
        ?>
<div class="col mb-4">
  <a href="PaginaLocal.php?cod=<?php echo $key; ?>">
<div class="card" >
  <?php
echo "<img class='card-img-top' src='data: image/jpeg; base64, "  .base64_encode($item["foto"]). " '/>";
?>
  <div class="card-body">
    <h5 class="card-title" ><?php echo utf8_encode( $item["titulo"]); ?></h5>
    <p class="card-text"><?php echo utf8_encode($item["mini_desc"]);?> </p>
    <br>
    <br>
      <a class="btn" href="PaginaLocal.php?cod=<?php echo $key; ?>">Saiba mais...</a>
  </div>
</div>
      </a>
</div>








<?php
    }
  }
  ?>
</div>
</center>
</div>

</div>
</br></br></br>

