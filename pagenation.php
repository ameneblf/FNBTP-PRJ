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

if (isset($_POST["page"])) {
  $page = $_POST["page"];

} else {
  $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$sql = "SELECT * FROM `societe`ORDER BY ENTREPRISE ASC LIMIT $start_from, $record_per_page;";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
  echo "
                          <tr id=" . $row["Id"] . ">
                            <td data-target=\"ENTREPRISE\">" . $row["ENTREPRISE"] . "</td>
                            <td data-target=\"Adress\">" . $row["Adress"] . "</td>
                            <td data-target=\"Fax\">" . $row["Fax"] . "</td>
                            <td data-target=\"Téléphone\">" . $row["Téléphone"] . "</td>
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