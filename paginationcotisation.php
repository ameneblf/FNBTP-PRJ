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
$sql = "SELECT * FROM `cotis`ORDER BY ENTREPRISE ASC LIMIT $start_from, $record_per_page;";
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {
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