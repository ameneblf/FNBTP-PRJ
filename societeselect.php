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

if (isset($_GET["city"])) {
  $region_id = $_GET["region"];
  $city = $_GET["city"];
  $query = "select * FROM `societe` where region = '$region_id' and ville = '$city'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value=" . $row["registre"] . ">" . $row["Nom"] . "</option>";
    }
  } else {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
  }
}

if (isset($_GET["Secteur"])) {
  $Secteur = $_GET["Secteur"];
  $query = "SELECT * FROM `qualificationsec`  where Codesec = '$Secteur'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr id=" . $row["Code"] . ">
          <td><input id=\"checkbox1\" class=\"form-check-input\"   type=\"checkbox\" value=" . $row["Code"] . " name=\"qualif[]\"> </td>
          <td>" . $row["nom"] . "</td>
          <td>";
      $query1 = "select * FROM `titre`";
      $res1 = mysqli_query($conn, $query1);
      if (mysqli_num_rows($res1) > 0) {
        while ($row1 = mysqli_fetch_array($res1)) {
          echo "
                <div class=\"form-check form-check-inline mt-3\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"titrev[" . $row["Code"] . "]\" id=\"inlineRadio1\"
                      value=" . $row1["Code"] . ">
                  <label class=\"form-check-label\" for=\"inlineRadio1\">" . $row1["nom"] . "</label>
                </div>";
        }
      }
      echo "</td></tr>";
    }
  } else {

  }
}
if (isset($_GET["Secteurcheck"])) {
  $Secteurcheck = $_GET["Secteurcheck"];
  $query = "SELECT * FROM `secteur`  where code = '$Secteurcheck'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $check = mysqli_fetch_row($res);
    if ($check[4]==1) {
      echo "<label class=\"form-label\" for=\"Fonction\">En Fonction du</label><br>
      <div class=\"form-check form-check-inline mt-3\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio1\"
              value=\"0\">
          <label class=\"form-check-label\" for=\"inlineRadio1\">Chiffre d'affaire</label>
      </div>
      <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio2\"
              value=\"1\">
          <label class=\"form-check-label\" for=\"inlineRadio2\">Capital social et du Chiffre
              d'affaire</label>
      </div>";
    }
  } else {

  }
}
if (isset($_GET["nat_d"])) {
  $nat_d = $_GET["nat_d"];
  $societe = $_GET["societe"];
  $Comand = "SELECT * FROM demand where register ='$societe' and nature_demande = '$nat_d' and (etat_demande = 'EN' OR etat_demande = 'VD') and  ministere = 'E' and id_demand=(SELECT max(id_demand) FROM demand);";
  $res = mysqli_query($conn, $Comand);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $id = $row["id_demand"];
      echo "<tr data-target=\"date\" id=" . $row["id_demand"] . ">
        <td>" . $row["date"] . "</td>";

      $etat = $row["etat_demande"];
      $etat_demande = "select type_demande FROM `etat_demande` where code='$etat'";
      $resretat = mysqli_query($conn, $etat_demande);
      if (mysqli_num_rows($resretat) > 0) {
        while ($row1 = mysqli_fetch_array($resretat)) {
          if ($etat == 'EN') {
            echo "<td><span class=\"badge bg-label-warning me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'RF') {
            echo "<td><span class=\"badge bg-label-danger me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'VD') {
            echo "<td><span class=\"badge bg-label-success me-1\">" . $row1["type_demande"] . "</span></td>";
          }

        }
      }
      $cat = $row["categ"];
      $qcat = "select nom FROM `categ` where code='$cat'";
      $rescat = mysqli_query($conn, $qcat);
      if (mysqli_num_rows($rescat) > 0) {
        while ($row1 = mysqli_fetch_array($rescat)) {
          echo "<td>" . $row1["nom"] . "</td>";
        }
      }
      if ($row["Fonction"]==0) {
        echo "<td>Chiffre d'affaire</td>";
      }if ($row["Fonction"]==1) {
        echo "<td>Capital social et du Chiffre d'affaire</td>";
      }
      
      // echo "<td>";
      // $query1 = "select * FROM `qualid_demand` where id_demand=$id";
      // $res1 = mysqli_query($conn, $query1);
      // if (mysqli_num_rows($res1) > 0) {
      //   while ($row1 = mysqli_fetch_array($res1)) {
      //     if ($row1["titre"] == 1) {
      //       echo $row1["Qualif"] . " : Provisoire <br>";
      //     }
      //     if ($row1["titre"] == 2) {
      //       echo $row1["Qualif"] . " : Définitive <br>";
      //     }
      //   }
      // }
      //  "</td>
      echo "<td><div class=\"dropdown\">
            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
              <i class=\"bx bx-dots-vertical-rounded\"></i>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-date=" . $row["date"] . " data-id=" . $row["register"] . " data-com=" . $row["id_demand"] . "  data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
            </div>
        </div> </td>";
    echo "</tr>";
    }
  } else {
  }
}
if (isset($_GET["Secteurcheck"])) {
  $Secteurcheck = $_GET["Secteurcheck"];
  $query = "SELECT * FROM `secteur`  where code = '$Secteurcheck'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $check = mysqli_fetch_row($res);
    if ($check[4]==1) {
      echo "<label class=\"form-label\" for=\"Fonction\">En Fonction du</label><br>
      <div class=\"form-check form-check-inline mt-3\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio1\"
              value=\"0\">
          <label class=\"form-check-label\" for=\"inlineRadio1\">Chiffre d'affaire</label>
      </div>
      <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"Fonction\" id=\"inlineRadio2\"
              value=\"1\">
          <label class=\"form-check-label\" for=\"inlineRadio2\">Capital social et du Chiffre
              d'affaire</label>
      </div>";
    }
  } else {

  }
}
if (isset($_GET["nat_dh"])) {
  $nat_d = $_GET["nat_dh"];
  $societe = $_GET["societe"];
  $Comand = "SELECT * FROM demand where register ='$societe' and nature_demande = '$nat_d' and (etat_demande = 'EN' OR etat_demande = 'VD') and ministere = 'H' and id_demand=(SELECT max(id_demand) FROM demand);";
  $res = mysqli_query($conn, $Comand);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $id = $row["id_demand"];
      echo "<tr data-target=\"date\" id=" . $row["id_demand"] . ">
        <td>" . $row["date"] . "</td>";

      $etat = $row["etat_demande"];
      $etat_demande = "select type_demande FROM `etat_demande` where code='$etat'";
      $resretat = mysqli_query($conn, $etat_demande);
      if (mysqli_num_rows($resretat) > 0) {
        while ($row1 = mysqli_fetch_array($resretat)) {
          if ($etat == 'EN') {
            echo "<td><span class=\"badge bg-label-warning me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'RF') {
            echo "<td><span class=\"badge bg-label-danger me-1\">" . $row1["type_demande"] . "</span></td>";
          }
          if ($etat == 'VD') {
            echo "<td><span class=\"badge bg-label-success me-1\">" . $row1["type_demande"] . "</span></td>";
          }

        }
      }
      $cat = $row["categ"];
      $qcat = "select nom FROM `categ` where code='$cat'";
      $rescat = mysqli_query($conn, $qcat);
      if (mysqli_num_rows($rescat) > 0) {
        while ($row1 = mysqli_fetch_array($rescat)) {
          echo "<td>" . $row1["nom"] . "</td>";
        }
      }
      if ($row["Fonction"]==0) {
        echo "<td>Chiffre d'affaire</td>";
      }if ($row["Fonction"]==1) {
        echo "<td>Capital social et du Chiffre d'affaire</td>";
      }
      
      // echo "<td>";
      // $query1 = "select * FROM `qualid_demand` where id_demand=$id";
      // $res1 = mysqli_query($conn, $query1);
      // if (mysqli_num_rows($res1) > 0) {
      //   while ($row1 = mysqli_fetch_array($res1)) {
      //     if ($row1["titre"] == 1) {
      //       echo $row1["Qualif"] . " : Provisoire <br>";
      //     }
      //     if ($row1["titre"] == 2) {
      //       echo $row1["Qualif"] . " : Définitive <br>";
      //     }
      //   }
      // }
      //  "</td>
      echo "<td><div class=\"dropdown\">
            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
              <i class=\"bx bx-dots-vertical-rounded\"></i>
            </button>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-date=" . $row["date"] . " data-id=" . $row["register"] . " data-com=" . $row["id_demand"] . "  data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
            </div>
        </div> </td>";
    echo "</tr>";
    }
  } else {
  }
} 
if (isset($_GET["numcertif"])) {
  $numcertif=$_GET["numcertif"];
  $query = "SELECT numcertif FROM `dossiersociete`  where registre = '$numcertif'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo $row["numcertif"];
    }
  }
}
if (isset($_GET["societedem"])) {
  $societe = $_GET["societedem"];
  $query = "SELECT max(d.id_demand) as id_demand,codesec,codeclass,Commission FROM demand d,qualid_demand qd 
  WHERE d.register=$societe and d.ministere='E' and qd.id_demand=d.id_demand and etat_demande='VD'";
  $query2 = "SELECT max(d.id_demand) as id_demand,codesec,codeclass,Qualif,titre,id FROM demand d,qualid_demand qd 
  WHERE d.register=$societe and d.ministere='E' and qd.id_demand=d.id_demand and etat_demande='VD' GROUP by qd.id;";
  $res = mysqli_query($conn, $query);
  $res2 = mysqli_query($conn, $query2);
  $tab=array();
  $tabprf=array();
  $tabdef=array();
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr id=\"".$row["id_demand"]."\">";
      echo "<td>".$row["codesec"]."</td>
            <td>".$row["codeclass"]."</td>";
            if (mysqli_num_rows($res2) > 0) {
              while ($row1 = mysqli_fetch_array($res2)) {
                $tab[$row1['Qualif']] = $row1['titre'];
              }
            }
            foreach($tab as $qualiff => $titre) {
              if($titre==1){
                array_push($tabprf, $qualiff);
              }
              if($titre==2){
                array_push($tabdef, $qualiff);
              }
            }
            echo "<td>";
            foreach ($tabprf as $value){
              echo $value.",";
            }
            echo "</td>";
            echo "<td>";
            foreach ($tabdef as $value){
              echo $value.",";
            }
            echo "</td>";
            echo "<td>
                    <div class=\"dropdown\">
                      <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                      </button>
                      <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"upqualif\"  data-id=" . $row["id_demand"] . " data-com=".$row["Commission"]." data-sec=" . $row["codesec"] . " data-bs-target=\"#upqualif\" href=\"#\"><i class=\"bx bx-message-alt-edit me-1\"></i> Edit</a>
                      </div>
                    </div>
                  </td>
                </tr>";

    }
  }
}
if (isset($_GET["qualifdem"])) {
  $societe = $_GET["qualifdem"];
  $query = "SELECT id,codesec,codeclass,Qualif,titre FROM demand d,qualid_demand qd 
  WHERE d.register=$societe and qd.id_demand=d.id_demand and etat_demande='VD' and d.ministere='E' and qd.validation=1 and qd.note='' GROUP by qd.id;";

  $res = mysqli_query($conn, $query);

  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr id=\"".$row["id"]."\">";
      echo "<td>".$row["codeclass"]."</td>
            <td>".$row["Qualif"]."</td>3";

            if ($row["titre"]==2) {
              echo "<td>DÉFINITIVE</td>";
            }else{
              echo "<td>PROVISOIRE</td>";
            }
            
            
            echo "</td>";
            echo "<td>
                    <div class=\"dropdown\">
                      <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                      </button>
                      <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"upqualifdem\" data-titre=" . $row["titre"] . "  data-id=" . $row["id"] . " data-sect=".$row["codesec"]."  data-bs-target=\"#upqualifdem\" href=\"#\"><i class=\"bx bx-message-alt-edit me-1\"></i> Edit</a>
                        <a class=\"dropdown-item\" data-role=\"valid\" data-id=" . $row["id"] . " ><i class=\"bx bx-check me-1\"></i> Valid</a>
                        <a class=\"dropdown-item\" data-role=\"refuse\" data-id=" . $row["id"] . "><i class=\"bx bx-trash me-1\"></i> refuse</a>
                      </div>
                    </div>
                  </td>
                </tr>";

    }
  }
}
else {
  
}