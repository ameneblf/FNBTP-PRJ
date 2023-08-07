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
if (isset($_GET["region_id"])) {
  $region_id = $_GET["region_id"];
  $query = "select * FROM `ville` where region = $region_id ";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
    }
  } else {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
  }
}
if (isset($_GET["addrespon"])) {
  $fonction = $_GET["fonction"];
  $register = $_GET["register"];
  $emailfonction = $_GET["emailfonction"];
  $telefon2 = $_GET["telefon2"];
  $telefon = $_GET["telefon"];
  $nom_prenom = $_GET["nom_prenom"];
  $query = "INSERT INTO `responsable`( `nom_prenom`, `fonction`, `tele_responsqble`, `tele_resp`, `mail`, `registre_societe`) VALUES ('$nom_prenom','$fonction','$telefon','$telefon','$emailfonction','$register') ";
  $res = mysqli_query($conn, $query);
  $conn->query($res);
}
if (isset($_GET["valid"])) {
  $date = $_GET["date"];
  $reg = $_GET["id"];
  $id = $_GET["commend"];
  $numcertif = $_GET["numcertif"];
  $valide = 'VD';
  $queryup = "UPDATE `demand` SET `date`='$date' , `etat_demande`='$valide'  WHERE `id_demand`='$id'";
  $res = mysqli_query($conn, $queryup);
  $query = "select * FROM `dossiersociete` where registre = $reg ";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $queryup = "UPDATE `dossiersociete` SET `numcertif`='$numcertif'   WHERE `registre`='$reg'";
    $res = mysqli_query($conn, $queryup);
  } else {
    $queryinsert = "INSERT INTO `dossiersociete`(`registre`, `numcertif`) VALUES ('$reg','$numcertif')";
    $res = mysqli_query($conn, $queryinsert);
  }
  $queryselect = "SELECT  * FROM qualid_demand WHERE  id_demand = $id and validation=0 and note='' GROUP BY id_demand; ";
  $res = mysqli_query($conn, $queryselect);
  $queryqualif = "SELECT  * FROM qualid_demand WHERE  id_demand = $id and validation=0 and note='' ";
  $qulif = mysqli_query($conn, $queryqualif);
  $tab;
  $tabprf = array();
  $tabdef = array();
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr id = " . $row["id_demand"] . ">
            <td> " . $row["codesec"] . "</td>
            <td>" . $row["codeclass"] . "</td>";
      if (mysqli_num_rows($qulif) > 0) {
        while ($row1 = mysqli_fetch_array($qulif)) {
          $tab[$row1['Qualif']] = $row1['titre'];
        }
      }
      foreach ($tab as $qualiff => $titre) {
        if ($titre == 1) {
          array_push($tabprf, $qualiff);
        }
        if ($titre == 2) {
          array_push($tabdef, $qualiff);
        }
      }
      echo "<td>";
      foreach ($tabprf as $value) {
        echo $value . ",";
      }
      echo "</td>";
      echo "<td>";
      foreach ($tabdef as $value) {
        echo $value . ",";
      }
      echo "</td>";
      echo "<td>
                    <div class=\"dropdown\">
                      <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                      </button>
                      <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"upqualif\"  data-id=" . $row["id_demand"] . " data-sec=" . $row["codesec"] . " data-bs-target=\"#upqualif\" href=\"#\"><i class=\"bx bx-message-alt-edit me-1\"></i> Edit</a>
                        <a class=\"dropdown-item\" data-role=\"valid\" data-id=" . $row["id_demand"] . " ><i class=\"bx bx-check me-1\"></i> Valid</a>
                        <a class=\"dropdown-item\" data-role=\"refuse\" data-id=" . $row["id_demand"] . "><i class=\"bx bx-trash me-1\"></i> refuse</a>
                      </div>
                    </div>
                  </td>
                </tr>";
    }
  }
}

else{
  header('refresh:0;url=404.php'); //2 s
  exit();
}
?>