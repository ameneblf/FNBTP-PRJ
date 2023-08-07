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
if (isset($_POST["adr"])) {
  $search = str_replace("'", "\'", $_POST["adr"]);
  $stmt = $conn->prepare("select * FROM `adhesion` where id LIKE CONCAT('%','" . $search . "','%') OR ENTREPRISE Like CONCAT('%','" . $search . "','%')");
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "
          <tr id=" . $row["id"] . ">
            <td>" . $row["id_entre"] . "</td>
            <td>" . $row["ENTREPRISE"] . "</td>";
      if ($row["qualite_membre"] == 0) {
        echo "<td id=\"" . $row["qualite_membre"] . "\">imexistamtes</td>";
      }
      if ($row["qualite_membre"] == 1) {
        echo "<td id=\"" . $row["qualite_membre"] . "\">Membres du Bureau FNBTP RSK</td>";
      }
      if ($row["qualite_membre"] == 2) {
        echo "<td id=\"" . $row["qualite_membre"] . "\">Entreprises ayant des demandes de QC en cours auprès du M. Equipement</td>";
      }
      if ($row["qualite_membre"] == 3) {
        echo "<td id=\"" . $row["qualite_membre"] . " \">Entreprises dont probabilité de recouvrement forte</td>";
      }
      if ($row["qualite_membre"] == 4) {
        echo "<td id=\"" . $row["qualite_membre"] . "\">Entreprises dont probabilité de recouvrement faible</td>";
      }
      if ($row["qualite_membre"] == 5) {
        echo "<td id=\"" . $row["qualite_membre"] . "\">Entreprises règlement au bureau national</td>";
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
}
if (isset($_POST["entre_ser"])) {
  $search = str_replace("'", "\'", $_POST["entre_ser"]);

  $stmt = $conn->prepare("select * FROM `societe` where nb_regional LIKE CONCAT('%','" . $search . "','%') OR ENTREPRISE Like CONCAT('%','" . $search . "','%')");
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "
                              <tr id=" . $row["Id"] . ">
                                <td data-target=\"ENTREPRISE\">" . $row["ENTREPRISE"] . "</td>
                                <td data-target=\"Adress\">" . $row["Adress"] . "</td>
                                <td data-target=\"Téléphone\">" . $row["Téléphone"] . "</td>
                                <td data-target=\"Fax\">" . $row["Fax"] . "</td>
                                <td data-target=\"E-MAIL\">" . $row["E-MAIL"] . "</td>
                                <td data-target=\"Responsable\">" . $row["Responsable"] . "</td>
                                <td data-target=\"GSM\">" . $row["GSM"] . "</td>";
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
                                  <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                      <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                      <a style=\"color: burlywood;\" class=\"dropdown-item update_entre\" data-bs-toggle=\"modal\" data-role=\"update_entre\" data-bs-target=\"#modalupdate\" data-id=" . $row["Id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                      <a style=\"color: forestgreen;\" class=\"dropdown-item\" href=Entreprise.php?id=" . $row["Id"] . "><i class=\"bx bx-file me-1\"></i> affiche</a>
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
                                    <a style=\"color: burlywood;\" class=\"dropdown-item update_entre\" data-bs-toggle=\"modal\" data-role=\"update_entre\" data-bs-target=\"#modalupdate\" data-id=" . $row["Id"] . " href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Éditer</a>
                                    <a style=\"color: forestgreen;\" class=\"dropdown-item\" href=Entreprise.php?id=" . $row["Id"] . "><i class=\"bx bx-file me-1\"></i> affiche</a>

                                    </div>
                                  </div>
                                </td>
                            </tr>";
      }
    }
  }
}
if (isset($_POST["classserc"])) {
  $search = $_POST["classserc"];
  $stmt = $conn->prepare("select * FROM `classe` where code LIKE CONCAT('%',?,'%') OR nom Like CONCAT('%',?,'%')");
  $stmt->bind_param("ss", $search, $search);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo "
      <tr id=" . $row["code"] . ">
          <td><strong>" . $row["code"] . "</strong></td>
          <td data-target=\"name\">" . $row["nom"] . "</td>
          <td id=\"" . $row["ministere"] . "\" data-target=\"minister\">";
      $var = $row["ministere"];
      $qministere = "SELECT * FROM `data_r`.`ministere` WHERE `code` = '$var'";
      $ministere = mysqli_query($conn, $qministere);
      if (mysqli_num_rows($ministere) > 0) {
        while ($row1 = mysqli_fetch_array($ministere)) {
          echo $row1[1] . "</td>";
        }
      }
      ;
      echo "<td id=\"" . $row["type_direction"] . "\" data-target=\"type_direction\">";
      $var = $row["type_direction"];
      $qdirection = "SELECT * FROM `data_r`.`direction` WHERE `code` = '$var'";
      $direction = mysqli_query($conn, $qdirection);
      if (mysqli_num_rows($direction) > 0) {
        while ($row1 = mysqli_fetch_array($direction)) {
          echo $row1[1] . "</td>";
        }
      }
      ;
      echo "<td id=\"" . $row["secteur"] . "\" data-target=\"secteur\">";
      $var = $row["secteur"];
      $qsecteur = "SELECT * FROM `data_r`.`secteur` WHERE `code` = '$var'";
      $secteur = mysqli_query($conn, $qsecteur);
      if (mysqli_num_rows($secteur) > 0) {
        while ($row1 = mysqli_fetch_array($secteur)) {
          echo $row1[1] . "</td>";
        }
      }
      ;
      if ($_COOKIE['type_user'] == 1) {
        echo "<td>
          <div class=\"dropdown\">
              <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
              <i class=\"bx bx-dots-vertical-rounded\"></i>
              </button>
              <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
              <a class=\"dropdown-item\" href=GesClasses.php?id_del=" . $row["code"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
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
              <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
              </div>
          </div>
      </td>
  </tr>";
      }
    }
  }
}
if (isset($_GET["update_ent"])) {
  $ville = $_GET["ville"];
  $nom = $_GET["nom"];
  $nom = str_replace("'", "\'", $nom);
  $registre = $_GET["registre"];
  $adress = $_GET["adress"];
  $mont = $_GET["mont"];
  $tel = $_GET["tel"];
  $respo = $_GET["respo"];
  $email = $_GET["email"];
  $gsm = $_GET["gsm"];
  $fax = $_GET["fax"];
  $id = $_GET["id"];
  $sect = $_GET["sect"];
  $queryup = "UPDATE `societe` SET `ENTREPRISE`='$nom',`registre`='$registre',`secteur`='$sect',`MONTANT_COTISATION`=$mont,`Responsable`='$respo',`Adress`='$adress',`Téléphone`='$tel',`Fax`='$fax',`GSM`='$gsm',`VILLE`='$ville',`E-MAIL`='$email' WHERE `societe`.`Id`=$id";
  $conn->query($queryup);

}
if (isset($_POST["upadhesion"])) {
  $id = $_POST["registre"];
  $qualite_membre = $_POST["qualite_membre"];
  $res = $conn->query("SELECT ENTREPRISE FROM `societe` WHERE `Id`=$id");
  $row = mysqli_fetch_row($res);
  $entreprise = str_replace("'", "\'", $row[0]);
  $numnat = $_POST["numnat"];
  $date_ad = $_POST["date_ad"];
  $queryup = "UPDATE `adhesion` SET `qualite_membre`=$qualite_membre,`nb_national`=$numnat,`date_ad`='$date_ad',ENTREPRISE='$entreprise' WHERE `id`=$id";
  $conn->query($queryup);
} else {
  $stmt = $conn->prepare("select * FROM `adhesion`");
}