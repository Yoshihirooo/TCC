
<?php
include("conexao.php");

$conecta = mysqli_connect($host, $user, $senha, $banco);

$sql = "SELECT * FROM locais JOIN imagens ON loc_id = ima_id_local JOIN tipo_img ON ima_tipo = timg_id
WHERE loc_id_tipo = 1 and ima_tipo = 1;";


$sql2 = "SELECT * FROM locais JOIN imagens ON loc_id = ima_id_local JOIN tipo_img ON ima_tipo = timg_id
WHERE loc_id_tipo = 2 and ima_tipo = 1;";

$result = $conecta->query($sql);
$result2 = $conecta->query($sql2);

if ($result->num_rows > 0) {
  $locais = array();
  

  while($row = $result->fetch_assoc()) {
    

    array_push($locais,
    array(
    "codigo" => $row['loc_id'],
    "titulo" => $row['loc_nome'],
    "descricao" => $row['loc_desc'],
    "mini_desc" => $row['loc_mini_desc'],
    "foto" => $row['ima_imagem'],
    "long" => $row['loc_long'],
    "lat" => $row['loc_lat'],
    )
    );
  }
} else {
  echo "0 results for locais";
}



if ($result2->num_rows > 0) {
  $festividades = array();
  

  while($row = $result2->fetch_assoc()) {
    

    array_push($festividades,
    array(
      "codigo" => $row['loc_id'],
      "titulo" => $row['loc_nome'],
      "descricao" => $row['loc_desc'],
      "mini_desc" => $row['loc_mini_desc'],
      "foto" => $row['ima_imagem'],
      "long" => $row['loc_long'],
      "lat" => $row['loc_lat'],
      )
    );
  }
} else {
  echo "0 results for locais";
}










$sqlCoords = "SELECT loc_nome, loc_lat, loc_long, loc_id_tipo, loc_id FROM locais";

$resultCoords = $conecta->query($sqlCoords);

if ($resultCoords->num_rows > 0) {
  $coords = array();
  

  while($row = $resultCoords->fetch_assoc()) {
    

    array_push($coords,
    array(
      "id" => $row['loc_id'],
      "tipo" => $row['loc_id_tipo'],
      "nome" => $row['loc_nome'],
      "lat" => $row['loc_lat'],
      "long" => $row['loc_long'],
      )
    );
  }
} else {
  echo "0 results for coordenadas";
}
  
?>