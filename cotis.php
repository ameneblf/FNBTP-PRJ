<?php
session_start();
include('db/connexion.php');
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
if (isset($_GET["ville"])) {
    $ville = $_GET["ville"];
    $taux = $_GET["taux"];
    $query = "select a.* FROM `adhesion` a,`societe` s where (s.VILLE LIKE '$ville') AND s.MONTANT_COTISATION='$taux' AND a.id_entre=s.id AND a.id_entre NOT in (select c.id_entre from cotis c) ORDER BY s.`ENTREPRISE` ASC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=\"" . $row["id_entre"] ."\">" . $row["ENTREPRISE"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}
else{
    header('refresh:0;url=404.php'); //2 s
  exit();
}