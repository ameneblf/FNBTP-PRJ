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

if (isset($_POST["adhes"])) {
    $adhes = $_POST["adhes"];
    $query = "select ENTREPRISE,id FROM `societe` where adher = $adhes ";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}

if (isset($_GET["cityadher"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $queryaf = "select ENTREPRISE,id FROM `societe` where adher = $adhes and VILLE ='" . $city . "'";
    $resaf = mysqli_query($conn, $queryaf);
    while ($row = mysqli_fetch_assoc($resaf)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}

if (isset($_GET["bycity"])) {
    $city = $_GET["city"];
    $query = "select ENTREPRISE,id FROM `societe` where VILLE='" . $city . "'";
    $resbycity = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($resbycity)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["categcityadher"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $categ = $_GET["categ"];
    $query = "select ENTREPRISE,id FROM `societe` where adher =$adhes and VILLE ='" . $city . "' and secteur='" . $categ . "'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["categcity"])) {
    $city = $_GET["city"];
    $categ = $_GET["categ"];
    $query = "select ENTREPRISE,id FROM `societe` where VILLE ='" . $city . "' and secteur='" . $categ . "'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["categadher"])) {
    $adhes = $_GET["adhes"];
    $categ = $_GET["categ"];
    $query = "select ENTREPRISE,id FROM `societe` where adher =" . $adhes . " and secteur Like '" . $categ . "'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["bycateg"])) {
    $categ = $_GET["categ"];
    $query = "select ENTREPRISE,id FROM `societe` where secteur='" . $categ . "'";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "
            </td>
            <td><span onclick=\"copy(" . $row["id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
//minister select
if (isset($_GET["miniscityadher"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $minis = $_GET["minis"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE ministere='" . $minis . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes and VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["miniscity"])) {
    $city = $_GET["city"];
    $minis = $_GET["minis"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE ministere='" . $minis . "' and id_Entreprise IN(SELECT id from societe where VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["minisadher"])) {
    $adhes = $_GET["adhes"];
    $minis = $_GET["minis"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE ministere='" . $minis . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["byminis"])) {
    $minis = $_GET["minis"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE ministere='" . $minis . "' and id_Entreprise=societe.Id GROUP BY id_Entreprise";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminiscityadher"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes and VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectcityadher"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes and VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectadher"])) {
    $adhes = $_GET["adhes"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminiscity"])) {
    $city = $_GET["city"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminisadher"])) {
    $adhes = $_GET["adhes"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectcity"])) {
    $city = $_GET["city"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.secteur='" . $sect . "' and id_Entreprise IN(SELECT id from societe where VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminis"])) {
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminiscityadherclass"])) {
    $city = $_GET["city"];
    $adhes = $_GET["adhes"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "' and id_Entreprise IN(SELECT id from societe where adher = $adhes and VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminiscityclass"])) {
    $city = $_GET["city"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "' and id_Entreprise IN(SELECT id from societe where VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminisadherclass"])) {
    $adher = $_GET["adhes"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "' and id_Entreprise IN(SELECT id from societe where adher = $adher) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["sectminisclass"])) {
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $query = "SELECT societe.Id,societe.ENTREPRISE FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "'  and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["all"])) {
    $adher = $_GET["adher"];
    $city = $_GET["city"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "' and qualification.class='" . $classe . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe where adher = $adher and VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutadh"])) {
    $city = $_GET["city"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and qualification.class='" . $classe . "' and qualification.class='" . $classe . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe where VILLE ='" . $city . "') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutcity"])) {
    $adher = $_GET["adher"];
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "'  and qualification.class='" . $classe . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe where adher = $adher) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutcityandadher"])) {
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $classe = $_GET["classe"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and  qualification.class='" . $classe . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutcityandadherandclass"])) {
    $minis = $_GET["minis"];
    $sect = $_GET["sect"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and  (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutadherandclass"])) {
    $minis = $_GET["minis"];
    $city = $_GET["city"];
    $sect = $_GET["sect"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe where VILLE ='".$city."') and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
if (isset($_GET["allwhitoutcityandclass"])) {
    $minis = $_GET["minis"];
    $adher = $_GET["adher"];
    $sect = $_GET["sect"];
    $qualiif = $_GET["qualiif"];
    $query = "SELECT societe.Id,societe.ENTREPRISE  FROM qualification,societe WHERE qualification.ministere='" . $minis . "' and qualification.secteur='" . $sect . "' and (qualification.Provisoire LIKE '%".$qualiif."%' or qualification.Définitive LIKE '%".$qualiif."%') and id_Entreprise IN(SELECT id from societe) and id_Entreprise=societe.Id GROUP BY id_Entreprise;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["Id"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["Id"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}if (isset($_GET["demandes_encoursandminister"])) {
    $minis = $_GET["minis"];
    $query = "SELECT ID_ENTREPRISE,ENTREPRISE FROM certiftmp_tab where MINISTER='$minis' GROUP BY ID_ENTREPRISE;";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr id=\"" . $row["ID_ENTREPRISE"] . "\" >
            <td>" . $row["ENTREPRISE"] . "</td>
            <td><span onclick=\"copy(" . $row["ID_ENTREPRISE"] . ")\" class=\"badge bg-label-info me-1\">copy</span></td>
        </tr>";
    }
}
else {
    header('refresh:0;url=404.php'); //2 s
    exit();
}