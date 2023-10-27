<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<script src="https://kit.fontawesome.com/3d16415f2c.js" crossorigin="anonymous"></script>

<link rel="stylesheet"
href="css/topo.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
   integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
   integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
   crossorigin=""></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<title>AtiTour</title>
</head>
<body>

<script>
    
</script>


<?php
    include("CardInfo.php");
    $item = $_GET["cod"];
?>
  
  <div class="bg-navbar">
    <nav class="navbar navbar-expand navbar-dark ">
        <div class="navbar-collapse collapse w-25">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                    <img class="img" src="img/Atitour.png" width="60" height="60" class="d-inline-block align-top" alt="">
                    </a>
                </li>
    
            </ul>

        </div>

        <div class="mx-auto">
                <center>
                    <h2 class="titulo" href="#" ><?php echo utf8_encode($locais[$item]["titulo"]);?></h2> 
                </center>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
    
        </div>

        <div class="navbar-collapse collapse w-25 order-3 dual-collapse2">

            <ul class="navbar-nav ml-auto">
    
                <li class="nav-item dropdown active">
            <a class="nav-link img" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="fa-sharp fa-solid fa-bars"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="Card.php?cod=0">Pontos Turísticos</a>
              <a class="dropdown-item" href="festividades.php?cod=0">Festividades</a>
            </div>

          </li>
            </ul>

        </div>

    </nav>
    
</div>





