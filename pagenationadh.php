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
$sql = "SELECT * FROM `adhesion`ORDER BY Id ASC LIMIT $start_from, $record_per_page;";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
                          <tr id=" . $row["id"] . ">
                            <td>" . $row["nb_national"] . "</td>
                            <td>" . $row["ENTREPRISE"] . "</td>";
                            if ($row["qualite_membre"]==0) {
                                echo "<td>imexistamtes</td>";
                            }if ($row["qualite_membre"]==1) {
                                echo "<td>Membres du Bureau FNBTP RSK</td>";
                            }
                            if ($row["qualite_membre"]==2) {
                                echo "<td>Entreprises ayant des demandes de QC en cours auprès du M. Equipement</td>";
                            }
                            if ($row["qualite_membre"]==3) {
                                echo "<td>Entreprises dont probabilité de recouvrement forte</td>";
                            }
                            if ($row["qualite_membre"]==4) {
                                echo "<td>Entreprises dont probabilité de recouvrement faible</td>";
                            }
                            if ($row["qualite_membre"]==5) {
                                echo "<td>Entreprises règlement au bureau national</td>";
                            }
                         
                        echo "<td>" . $row["date_ad"] . "</td>";
        if ($_COOKIE['type_user'] == 1) {
            echo "<td>
                              <div class=\"dropdown\">
                                <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                  <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\">
                                  <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#modal" . $row["id"] . "\" href=adhesion.php?id_edhesion=" . $row["id"] . "><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                                  <a class=\"dropdown-item\" href=adhesion.php?id_del=" . $row["id"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
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
        echo "<div class=\"modal fade\" id=\"modal" . $row["id"] . "\" tabindex=\"-1\" style=\"display: none;\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
              <form action=\"\" method=\"POST\">
              <div class=\"modal-content container-xxl\">
                      <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"modalCenterTitle\">Edite l'adhésion de " . $row["ENTREPRISE"] . "</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                        <div class=\"card-body\">
                          <div class=\"col mb-0\" style=\" display:none\">
                            <label class=\"form-label\" for=\"basic-icon-default-company\">id</label>
                            <div class=\"input-group input-code\">
                              <span id=\"basic-icon-code\" class=\"input-group-text\"></span>
                              <input type=\"number\"  value=" . $row["id"] . " required name=\"id\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                          <div class=\"col mb-0\">
                            <label class=\"form-label\" for=\"basic-icon-default-company\">Numéro régional</label>
                            <div class=\"input-group input-code\">
                              <span id=\"basic-icon-code\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                              <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["nb_regional"] . " required name=\"numreg\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                          <div class=\"col mb-0\">
                            <label class=\"form-label\" for=\"basic-icon-default-note\">Numéro national</label>
                            <div class=\"input-group input-group-merge\">
                              <span id=\"basic-icon-default-objects-horizontal-left\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                              <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["nb_national"] . " name=\"numnat\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                            </div>
                          </div>
                        
                        <div class=\"mb-3\">
                          <label class=\"form-label\" for=\"basic-icon-default-note\">date d'adhésion</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-note\" class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                            <input class=\"form-control\" name=\"date_ad\" value=" . $row["date_ad"] . " required type=\"date\" value=\"\" id=\"html5-datetime-local-input\">
                          </div>
                        </div>
                        <button type=\"submit\" name=\"upadhesion\" class=\"btn btn-primary\">éditer</button>
                        </div>
                      </form>
                     
                    </div>
                  </div>";
    }
}
