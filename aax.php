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

if (isset($_POST["numero_recher"])) {
  $numero_recher = $_POST["numero_recher"];
  $ville_recher = $_POST["ville_recher"];
  $stmt = $conn->prepare("select * FROM `societe` where VILLE Like CONCAT('%','" . $ville_recher . "','%') and registre Like CONCAT('%','" . $numero_recher . "','%')");
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr id=" . $row["Id"] . ">
                                <td data-target=\"ENTREPRISE\">" . $row["ENTREPRISE"] . "</td>
                                <td data-target=\"Adress\">" . $row["Adress"] . "</td>
                                <td data-target=\"Téléphone\">" . $row["Téléphone"] . "</td>
                                <td data-target=\"Fax\">" . $row["Fax"] . "</td>
                                <td data-target=\"E-MAIL\">" . $row["E-MAIL"] . "</td>";
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
                                  <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                      <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                      <a style=\"color: burlywood;\" class=\"dropdown-item update_entre\" data-bs-toggle=\"modal\" data-role=\"update_entre\" data-bs-target=\"#modalupdate\" data-id=" . $row["Id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                      <a style=\"color: brown;\" class=\"dropdown-item\" href=Entreprises.php?id_del=" . $row["Id"] . "><i class=\"bx bx-trash me-1\"></i> supprimer</a>
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
                                      <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-bs-target=\"#modalupdate\" data-id=" . $row["Id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                    </div>
                                  </div>
                                </td>
                            </tr>";
      }
    }
  } else
    echo 0;
}
if (isset($_GET["ministere"])) {
  $ministere = $_GET["ministere"];
  $entre_id = $_GET["entre_id"];
  $query = "SELECT * FROM `secteur` where type_minister='$ministere' and code not in(select secteur from qualification where id_Entreprise = $entre_id)";
  $secteur = mysqli_query($conn, $query);
  if (mysqli_num_rows($secteur) > 0) {
    echo "<option value=\"0\">Sélection par défaut</option>";
    while ($row = mysqli_fetch_assoc($secteur)) {
      echo "<option value=" . $row["code"] . ">" . $row["code"] . " :" . $row["nom"] . "</option>";
    }
  } else {
    echo "<option value=\"0\">Sélection par défaut</option>";
  }
}if (isset($_GET["minis"])) {
  $ministere = $_GET["minis"];
  $query = "SELECT * FROM `secteur` where type_minister='$ministere'";
  $secteur = mysqli_query($conn, $query);
  if (mysqli_num_rows($secteur) > 0) {
    echo "<option value=\"0\">Sélection par défaut</option>";
    while ($row = mysqli_fetch_assoc($secteur)) {
      echo "<option value=" . $row["code"] . ">" . $row["code"] . " :" . $row["nom"] . "</option>";
    }
  } else {
    echo "<option value=\"0\">Sélection par défaut</option>";
  }
}
if (isset($_POST["enrech"])) {
  $entrecotis = $_POST["enrech"];
  $stmt = $conn->prepare("select * FROM `cotis` where id_entre LIKE CONCAT('%',?,'%') OR ENTREPRISE Like CONCAT('%',?,'%') ");
  $stmt->bind_param("ss", $entrecotis, $entrecotis);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $ide = $row["id"];
      echo "
        <tr>
          <td><strong>" . $row["id"] . "</strong></td>
          <td>" . $row["ENTREPRISE"] . "</td>
          <td>" . $row["date_paim"] . "</td>
                                                        <td>" . $row["ANNEE"] . "</td>
                                                        <td>";
      if ($row["banque"] == '0') {
        echo "XXX";
      } else {
        echo $row["banque"];
      }
      echo "</td>
                                                        <td>" . $row["type_paiement"] . "</td>
                                                        <td>" . $row["Num_cheque"] . "</td>
                                                        <td>" . $row["montant"] . "<strong>DH</strong></td>
                                                        <td>" . $row["lieu"] . "</td>";
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
                                                                <div class=\"dropdown\">
                                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                                    </button>
                                                                    <div class=\"dropdown-menu\">
                                                                        <a class=\"dropdown-item editcotis\"  data-bs-toggle=\"modal\" data-bs-target=\"#cotisationup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\" data-id=" . $ide . "></i> Edit</a>
                                                                        <a class=\"dropdown-item\" href=cotisation.php?cotisation_del=" . $row["id"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>";
      } else {
        echo "<td>
                                                    <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#cotisationup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                                    </div>
                                                </div>
                                                        </td>
                                                    </tr>";
      }
    }
  }
}
if (isset($_POST["id_enter"])) {
  $id = $_POST["id_enter"];
  $societe = "SELECT * FROM `societe` where Id =$id";
  $querys = mysqli_query($conn, $societe);
  $count = mysqli_fetch_row($querys);
  echo json_encode($count);
}
if (isset($_POST["update_qualif"])) {
  $id = $_POST["id"];
  $classe = $_POST["classe"];
  $PROVISOIRE = $_POST["PROVISOIRE"];
  $DÉFINITIVE = $_POST["DÉFINITIVE"];
  $query = "UPDATE `qualification` SET `class`='$classe',`Provisoire`='$PROVISOIRE',`Définitive`='$DÉFINITIVE' WHERE `id`=$id";
  $conn->query($query);
}
if (isset($_GET["allsect"])) {
  $sqlministere = "SELECT * FROM `secteur`";
  $ministere = mysqli_query($conn, $sqlministere);
  if (mysqli_num_rows($ministere) > 0) {
    echo "<option value=\"0\">Sélection par défaut</option>";
    while ($row = mysqli_fetch_assoc($ministere)) {
      echo "<option value=" . $row["code"] . ">" .$row["code"] .":".$row["nom"] . "</option>";
    }
  }
}

else {
  header('refresh:0;url=404.php'); //2 s
  exit();
}