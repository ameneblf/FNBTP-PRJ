<?php
session_start();
include('../db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
echo $_SESSION['name'];
echo $_SESSION['id'] ;
}else{
echo "echec";
}*/
if (!isset($_SESSION['loggedin'])) {
    header('refresh:0;url=../404.php'); //2 s
    exit();
}
$record_per_page = 25;
$page = '';
$quality = 0;

if (isset($_GET["page"])) {
    
    $page = $_GET["page"];
    $quality = $_GET["quality"];
    $start_from = ($page - 1) * $record_per_page;
    $sql = "SELECT s.ENTREPRISE,c.ANNEE,c.montant,s.MONTANT_COTISATION ,a.qualite_membre FROM societe s, cotis c ,adhesion a WHERE c.id_entre=s.Id and a.id_entre=c.id_entre and a.qualite_membre=$quality LIMIT $start_from, $record_per_page;";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
            <td>" . $row["ENTREPRISE"] . "</td>
            <td>" . $row["ANNEE"] . "</td>
            <td>" . $row["MONTANT_COTISATION"] . "Dhs</td>
            <td>" . $row["montant"] . "Dhs</td>
            <td>" . $row["MONTANT_COTISATION"] - $row["montant"] . "Dhs</td>
        </tr>";

        }
    }
} 
if (isset($_POST["page1"])) {
    $page = $_POST["page1"];
    $quality = $_POST["quality"];
    $start_from = ($page - 1) * $record_per_page;
    $sql = "SELECT s.Id,s.ENTREPRISE,YEAR(CURRENT_DATE()) as yearact,0 as montant,s.MONTANT_COTISATION ,a.qualite_membre FROM societe s, cotis c ,adhesion a WHERE  NOT EXISTS(SELECT NULL FROM cotis WHERE cotis.id_entre=s.Id) and s.adher=1 and s.Id=a.id_entre and a.qualite_membre=$quality GROUP BY s.Id LIMIT $start_from, $record_per_page;";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
            <td>" . $row["ENTREPRISE"] . "</td>
            <td>" . $row["yearact"] . "</td>
            <td>" . $row["MONTANT_COTISATION"] . "Dhs</td>
            <td>" . $row["montant"] . "Dhs</td>
            <td>" .   $row["montant"]-$row["MONTANT_COTISATION"] . "Dhs</td>
        </tr>";

        }
    }
}else{

}