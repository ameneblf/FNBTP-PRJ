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
if (isset($_GET["ville_id"])) {
  $ville_id = $_GET["ville_id"];
  $query = "SELECT * FROM `societe` WHERE `adher`=0 and `VILLE` like '$ville_id';";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value= " . $row["Id"] . " >" . $row["ENTREPRISE"] . "</option>";
    }
  } else {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
  }
}
if (isset($_POST["Qulity_mem"])) {
  $list = array();
  for ($i = 0; $i < 6; $i++) {
    $query = "SELECT COUNT(*) as quantity,qualite_membre FROM adhesion where qualite_membre=" . $i . " GROUP BY qualite_membre";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_array($res)) {
        array_push($list, $row["quantity"]);
      }
    } else
      array_push($list, 0);
  }
  echo json_encode($list);
}
if (isset($_POST["total_non_regle"])) {
  $list = array();
  for ($i = 0; $i < 6; $i++) {
    $query = "SELECT COUNT(*) as quantity,qualite_membre FROM adhesion where qualite_membre=" . $i . " GROUP BY qualite_membre";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_array($res)) {
        array_push($list, $row["quantity"]);
      }
    } else
      array_push($list, 0);
  }
  echo json_encode($list);
}
if (isset($_GET["recherche"])) {
  $ville = $_GET["villeID"];
  $minister = $_GET["minister"];
  $adhesrecher=$_GET["adhesrecher"];
  $sql = "SELECT * FROM `certiftmp_tab` WHERE MINISTER='$minister' and ID_ENTREPRISE in(select Id from societe where VILLE='$ville' and adher=$adhesrecher) ORDER BY ENTREPRISE ASC";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr id=" . $row["ID"] . ">
            <td data-target=\"ENTREPRISE\">" . $row["ENTREPRISE"] . "</td>
            <td data-target=\"MINISTER\">";
    if ($row["MINISTER"] == 'E') {
      echo 'Equipement';
    }
    if ($row["MINISTER"] == 'H') {
      echo 'Habitat';
    }
    if ($row["MINISTER"] == 'A') {
      echo 'Agriculture';
    }
    echo "</td>";
    if ($_COOKIE['type_user'] == 1) {
      echo "<td>
                <div class=\"dropdown\">
                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a style=\"color: brown;\" class=\"dropdown-item\" href=demande_encou.php?id_doss=" . $row["ID"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
                    </div>
                </div>
            </td>
        </tr>";
    }
    if ($_COOKIE['type_user'] == 2) {
      echo "<td>
                <div class=\"dropdown\">
                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["ID"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                    </div>
                </div>
            </td>
        </tr>";
    }

  }
} else {
  header('refresh:0;url=404.php'); //2 s
  exit();
}