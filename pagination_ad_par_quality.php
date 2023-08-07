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
$record_per_page = 25;
$page = '';
$quality;

if (isset($_POST["page"])) {
  $page = $_POST["page"];
  $quality=$_POST["quality"];
} else {
  $page = 1;
  
}
$start_from = ($page - 1) * $record_per_page;
$sql = "SELECT * FROM `adhesion` where qualite_membre=$quality ORDER BY ENTREPRISE ASC LIMIT $start_from, $record_per_page;";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_assoc($query)) {
    echo "
                          <tr id=" . $row["id"] . ">
                            <td>" . $row["id_entre"] . "</td>
                            <td>" . $row["ENTREPRISE"] . "</td>";
    if ($row["qualite_membre"] == 0) {
      echo "<td id=\"".$row["qualite_membre"]."\">imexistamtes</td>";
    }
    if ($row["qualite_membre"] == 1) {
      echo "<td id=\"".$row["qualite_membre"]."\">Membres du Bureau FNBTP RSK</td>";
    }
    if ($row["qualite_membre"] == 2) {
      echo "<td id=\"".$row["qualite_membre"]."\">Entreprises ayant des demandes de QC en cours auprès du M. Equipement</td>";
    }
    if ($row["qualite_membre"] == 3) {
      echo "<td id=\"".$row["qualite_membre"]." \">Entreprises dont probabilité de recouvrement forte</td>";
    }
    if ($row["qualite_membre"] == 4) {
      echo "<td id=\"".$row["qualite_membre"]."\">Entreprises dont probabilité de recouvrement faible</td>";
    }
    if ($row["qualite_membre"] == 5) {
      echo "<td id=\"".$row["qualite_membre"]."\">Entreprises règlement au bureau national</td>";
    }

    echo "<td>" . $row["date_ad"] . "</td>";
    if ($_COOKIE['type_user'] == 1) {
      echo "<td>
                              <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                  <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                  <a style=\"color: burlywood;\" class=\"dropdown-item update_adher\" data-bs-toggle=\"modal\" data-role=\"update_adher\" data-bs-target=\"#modalupdate\" data-id=" . $row["id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                  <a style=\"color: brown;\" class=\"dropdown-item\" href=adhesion.php?id_del=" . $row["id"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
                                </div>
                              </div>
                            </td>
                          </tr>";
    } else {
      echo "<td>
                              NULL
                            </td>
                          </tr>";
    }
  }
}
