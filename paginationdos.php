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
$sql = "SELECT * FROM `certiftmp_tab`ORDER BY ENTREPRISE ASC LIMIT $start_from, $record_per_page;";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr id=" . $row["ID"] . ">
            <td data-target=\"ENTREPRISE\">" . $row["ENTREPRISE"] . "</td>
            <td data-target=\"MINISTER\">"; if ($row["MINISTER"]=='E') {
                echo 'Equipement';
            }if ($row["MINISTER"]=='H') {
                echo 'Habitat';
            }if ($row["MINISTER"]=='A') {
                echo 'Agriculture';
            }  echo "</td>";
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