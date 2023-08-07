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
if (isset($_GET["secteur"])) {
    $secteur = $_GET["secteur"];
    $ministere = $_GET["ministere"];
    $query = "select * FROM `classe` where ministere = '$ministere' and secteur = '$secteur'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}

if (isset($_GET["sec"])) {
    $secteur = $_GET["sec"];
    $query = "select * FROM `classe` where secteur = '$secteur'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}
if (isset($_GET["secquali"])) {
    $secteur = $_GET["secquali"];
    $query = "select * FROM `qualificationsec` where Codesec = '$secteur'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=" . $row["Code"] . ">" . $row["nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}
if (isset($_GET["secC"])) {
    $secteur = $_GET["secC"];
    $commis = $_GET["commis"];
    $query;
    if ($commis == 'Nationale') {
        $query = "select * FROM `classe` where secteur = '$secteur' and type_direction='N'";
    } else {
        $query = "select * FROM `classe` where secteur = '$secteur' and type_direction='R'";
    }

    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
        }
    } else {
        echo "<option value=\" 0 \">Sélection par défaut</option>";
    }
}

if (isset($_GET["valid_id"])) {
    $id = $_GET["valid_id"];
    $query = "UPDATE `qualid_demand` SET `validation`=1 WHERE `id_demand`='$id'";
    $res = mysqli_query($conn, $query);
}
if (isset($_GET["valid_up"])) {
    $id = $_GET["valid_up"];
    $clas = $_GET["clas"];
    $note = $_GET["note"];
    $query = "UPDATE `qualid_demand` SET `codeclass`='$clas',`validation`=1,`note`='$note ' WHERE `id_demand`='$id'";
    $res = mysqli_query($conn, $query);
}
if (isset($_GET["idtitreup"])) {
    $id = $_GET["idtitreup"];
    $titre = $_GET["titreup"];
    $note = $_GET["note"];
    $query = "UPDATE `qualid_demand` SET `titre`=$titre,`note`='$note ' WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
}
if (isset($_GET["refusede"])) {
    $id = $_GET["refusede"];
    $note = "refuse";
    $query = "UPDATE `qualid_demand` SET `note`='$note' WHERE `id_demand`='$id'";
    $res = mysqli_query($conn, $query);
}
if (isset($_GET["Entreprise"])) {
    $id = $_GET["Entreprise"];
    $ministere = $_GET["ministere"];
    $query = "SELECT numcertif FROM dossiersociete WHERE registre=$id AND mini='$ministere'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            echo $row["numcertif"] ;
        }
    } else {
        
    }
}
if (isset($_GET["upEntreprise"])) {
    $id = $_GET["upEntreprise"];
    $ministere = $_GET["ministere"];
    $nb_certif=$_GET["nb_certif"];
    $query = "SELECT numcertif FROM dossiersociete WHERE registre=$id AND mini='$ministere'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $query = "UPDATE `dossiersociete` SET `numcertif`='$nb_certif' WHERE registre=$id AND mini='$ministere'";
        $res = mysqli_query($conn, $query);
    } else {
        $query = "INSERT INTO `dossiersociete`(`registre`, `numcertif`, `mini`) VALUES ('$id','$nb_certif','$ministere')";
        $res = mysqli_query($conn, $query);
    }
    
}
else{
    header('refresh:0;url=404.php'); //2 s
  exit();
}