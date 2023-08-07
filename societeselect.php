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
  $city = $_GET["city"];
  $query = "select * FROM `societe` where VILLE = '$city' ORDER BY `societe`.`ENTREPRISE` ASC";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    echo "<option value=\" 0 \">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value=" . $row["Id"] . ">" . $row["ENTREPRISE"] . "</option>";
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
          <td><input class=\"form-check-input mt-0\" name=\"qualifcheck\" onchange=\"document.getElementById('inlineRadio1" . $row["Code"]."1').disabled = !this.checked;
                                                                                    document.getElementById('inlineRadio1" . $row["Code"]."2').disabled = !this.checked;
                                                                                    document.getElementById('inlineRadio1" . $row["Code"]."2').checked = this.checked;
                                                                                    document.getElementById('inlineRadio1" . $row["Code"]."1').checked = this.checked;\" 
                                                                                    type=\"checkbox\" value=\"" . $row["Code"] . "\" aria-label=\"Checkbox for following text input\"></td>
          <td>" . $row["Code"] . ":" . $row["nom"] . "</td>
          <td>";
      $query1 = "select * FROM `titre`";
      $res1 = mysqli_query($conn, $query1);
      if (mysqli_num_rows($res1) > 0) {
        while ($row1 = mysqli_fetch_array($res1)) {
          echo "
                <div class=\"form-check form-check-inline mt-3\" >
                  <input class=\"form-check-input\" type=\"radio\" name=\"" . $row["Code"] . "\" id=\"inlineRadio1" . $row["Code"].$row1["Code"] . "\"
                      value=" . $row1["Code"] . " disabled>
                  <label class=\"form-check-label\" for=\"inlineRadio1\">" . $row1["nom"] . "</label>
                </div>";
        }
      }
      echo "</td></tr>";
    }
  } else {
  }
}
if (isset($_GET["certif"])) {
  $mini=$_GET["ministere"];
  $id_Entreprise=$_GET["Entreprise"];
  $sql = "SELECT * FROM `qualification` where ministere='$mini' and id_Entreprise=$id_Entreprise";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($query)) {
    echo "
                          <tr id=" . $row["id"] . ">
                            <td data-target=\"secteur\">" . $row["secteur"] . "</td>
                            <td data-target=\"class\">" . $row["class"] . "</td>
                            <td data-target=\"Provisoire\">" . $row["Provisoire"] . "</td>
                            <td data-target=\"Définitive\">" . $row["Définitive"] . "</td>";
    if ($_COOKIE['type_user'] == 1) {
      echo "<td>
                              <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                  <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                  <a style=\"color: burlywood;\" class=\"dropdown-item update_certi\" data-bs-toggle=\"modal\" data-role=\"update_certif\" data-bs-target=\"#modalupdate\" data-id=" . $row["id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> modifier</a>
                                  <a style=\"color: brown;\" class=\"dropdown-item\" href=mise_certif.php?id_del=" . $row["id"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
                                </div>
                              </div>
                            </td>
                        </tr>
                    ";
    }
    if ($_COOKIE['type_user'] == 2) {
      echo "<td>
                              <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                  <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                  <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                </div>
                              </div>
                            </td>
                        </tr>";
    }
  }
}
if (isset($_GET["ville_id_doss"])) {
  $ville = $_GET["ville_id_doss"];
  $minister=$_GET["minister"];
  $query = "SELECT s.Id,s.ENTREPRISE FROM `societe` s WHERE s.`VILLE` like '$ville' and s.Id NOT IN(SELECT ID_ENTREPRISE FROM certiftmp_tab where MINISTER = '$minister');";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res)>0) {
    echo "<option value=\"0\">Sélection par défaut</option>";
    while ($row = mysqli_fetch_array($res)) {
      echo "<option value= " . $row["Id"] . " >" . $row["ENTREPRISE"] . "</option>";
    }
  } else {
    echo "<option value=\"0\">Sélection par défaut</option>";
  }
}
else{
  header('refresh:0;url=404.php'); //2 s
  exit();
}
