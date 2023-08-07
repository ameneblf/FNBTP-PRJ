<?php
session_start();
include_once('db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
echo $_SESSION['name'];
echo $_SESSION['id'] ;
}else{
echo "echec";
}*/
if (!isset($_SESSION['loggedin'])) {
  header('refresh:0;url=404.php'); //2 s
  exit();
}
if (isset($_GET["DemandeN"])) {
  $qualif = $_GET["qualif"];
  $titr = $_GET["titrev"];
  foreach ($titr as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
}
$Provisoireval = "";
$Definitiveval = "";
if (isset($_GET["text"])) {
  $text = $_GET["text"];
  $Secteur = $_GET["Secteur"];
  $classe = $_GET["classe"];
  $Entreprise = $_GET["Entreprise"];
  $ministere = $_GET["ministere"];
  $Provisoire = array();
  $Definitive = array();
  foreach ($text as $x => $x_value) {
    $qualif = explode(";", $x_value);
    if ($qualif[1] == 1) {
      
      array_push($Provisoire, $qualif[0]);
    }
    if ($qualif[1] == 2) {
      
      array_push($Definitive, $qualif[0]);
    }
    //print_r($Provisoire);
    //print_r($Definitive);
  }
  echo "<tr>
      <td>$Secteur</td>
      <td>$classe</td><td>";
  foreach ($Definitive as $x => $x_value) {
    echo $x_value . ";";
    $Definitiveval = $Definitiveval . $x_value . ";";
  }

  echo "</td>
      <td>";
  foreach ($Provisoire as $x => $x_value) {
    echo $x_value . ";";
    $Provisoireval = $Provisoireval . $x_value . ";";
  }
  echo "</td>
   </tr>";
}
if ($_GET["tt"]) {
  $p=$_GET["tt"]["provisoire"];
  $d=$_GET["tt"]["definitive"];
  $addtmp = "INSERT INTO `qualification`(`ministere`, `secteur`, `class`, `Provisoire`, `Définitive`, `id_Entreprise`) 
      VALUES ('" . $_GET["tt"]["minister"] . "','" . $_GET["tt"]["secteur"] . "','" . $_GET["tt"]["classe"] . "','$p','$d','" . $_GET["tt"]["id_entre"] . "')";
  if ($conn->query($addtmp) === TRUE) {
  } else {
    echo "Error: " . $addtmp . "<br>" . $conn->$error;
  };
}
else{
  header('refresh:0;url=404.php'); //2 s
  exit();
}