<?php
session_start();
include_once('db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
echo $_SESSION['name'];
echo $_SESSION['id'] ;
}else{
echo "echec";
}*/
if (!isset($_SESSION['loggedin'])) {
    header('refresh:0;url=/404.php'); //2 s
    exit();
}
?>
<!DOCTYPE html>

<html lang="fr" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Cotisation</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/Asset 1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="dashboard.php" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">bienvenue</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Tableau de bord</div>
                        </a>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="Entreprises.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-buildings"></i>
                            <div data-i18n="Basic">Gestion d'Entreprises</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">OPERATIONS</span>
                    </li>
                    <li class="menu-item active">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Account Settings">Operation</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="adhesion.php" class="menu-link">
                                    <div data-i18n="Account">Adhésion</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="cotisation.php" class="menu-link">
                                    <div data-i18n="Notifications">Cotisation</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="Qualification.php" class="menu-link">
                                    <div data-i18n="Notifications">Saisie des QC</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="mise_certif.php" class="menu-link">
                                    <div data-i18n="Notifications">Certificats de QC</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="demande_encou.php " class="menu-link">
                                    <div data-i18n="Notifications">Certificats encours</div>
                                </a>
                            </li>
                            <!-- <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Notifications">Formation</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Notifications">Reclamations</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Notifications">Journee Etude semminiare</div>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de
                            Consultation</span></li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-file-find"></i>
                            <div data-i18n="Account Settings">Recherche et Statistique</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="consultation/searchad_quali.php" class="menu-link">
                                    <div data-i18n="Connections">Adhésion et Qualification</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="consultation/recouvrement.php" class="menu-link">
                                    <div data-i18n="Connections">Recouvrement</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de
                            setting</span></li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-key"></i>
                            <div data-i18n="Account Settings">Paramétres</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="class/region.php" class="menu-link">
                                    <div data-i18n="Account">Région</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="class/ville.php" class="menu-link">
                                    <div data-i18n="Notifications">Ville</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="class/secteurs.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des secteurs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="class/GesClasses.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des Classes</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="class/GesQulif.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des Qualifications</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search 
                                <div class="navbar-nav align-items-center">
                                    <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input
                                        type="text"
                                        class="form-control border-0 shadow-none"
                                        placeholder="Search..."
                                        aria-label="Search..."
                                    />
                                    </div>
                                </div>
                            /Search -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="assets/img/avatars/55.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="assets/img/avatars/55.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">
                                                        <?php echo $_COOKIE['nom']; ?>
                                                    </span>
                                                    <small class="text-muted">
                                                        <?php
                                                        if ($_COOKIE['type_user'] == 1) {
                                                            echo "admin";
                                                        }
                                                        if ($_COOKIE['type_user'] == 2) {
                                                            echo "emp";
                                                        }
                                                        if ($_COOKIE['type_user'] == 3) {
                                                            echo "xxx";
                                                        }

                                                        ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="profile.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Mon profil</span>
                                        </a>
                                    </li>
                                    <?php
                                    if ($_COOKIE['type_user'] == 1) {
                                        echo "<li>
                                                <a class=\"dropdown-item\" href=\"setting.php\">
                                                <i class=\"bx bx-cog me-2\"></i>
                                                <span class=\"align-middle\"> Paramètres</span>
                                                </a>
                                            </li>";
                                    }
                                    ?>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-merge">
                                        <h5 class="input-group card-header input-group-merge">
                                            <strong>Cotisation</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class=" card-header ">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text input-group-merge"
                                                id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                            <input type="text" id="search" class="form-control" placeholder="Search..."
                                                aria-label="Search..." aria-describedby="basic-addon-search31">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="input-group card-header" style="justify-content: right;">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary bx bx-message-square-add"
                                            data-bs-toggle="modal" data-bs-target="#modaladd">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <?php include 'updatecotis.php'; ?>

                            <div class="modal fade " id="modaladd" tabindex="-1" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered"
                                    style="max-width: 30rem !important; display: block;" role="document">
                                    <form action="./cotisation.php" method="post">
                                        <div class="modal-content container-xxl">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Add Cotisation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="card-body">

                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-map">Ville</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-map" class="input-group-text"><i
                                                                class="bx bx-map"></i></span>
                                                        <select id="ville" name="ville" class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                            <?php
                                                            $sql1 = "SELECT * FROM `ville` where region=4";
                                                            $region = mysqli_query($conn, $sql1);
                                                            if (mysqli_num_rows($region) > 0) {
                                                                while ($row = mysqli_fetch_assoc($region)) {
                                                                    echo "<option value=" . $row["nom"] . ">" . $row["nom"] . "</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-phone">Taux de
                                                        cotisation</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-dollar" class="input-group-text"><i
                                                                class="bx bx-dollar"></i></span>
                                                        <select id="taux" required name="taux" class="form-select">
                                                            <option value="">Sélection par défaut</option>
                                                            <?php
                                                            $querytaux = "SELECT MONTANT_COTISATION FROM societe GROUP BY MONTANT_COTISATION;";
                                                            $restaux = mysqli_query($conn, $querytaux);
                                                            if (mysqli_num_rows($restaux) > 0) {
                                                                while ($row = mysqli_fetch_assoc($restaux)) {
                                                                    echo "<option value=" . $row["MONTANT_COTISATION"] . ">" . $row["MONTANT_COTISATION"] . "</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label" for="basic-icon-default-phone">Nom
                                                        d'Entreprise</label>
                                                    <div class="input-group input-group-phone">
                                                        <span id="basic-icon-rename" class="input-group-text"><i
                                                                class="bx bx-rename"></i></span>
                                                        <select id="Entreprise" required name="Entreprise"
                                                            class="form-select">
                                                            <option value="0">Sélection par défaut</option>
                                                            <!-- <option id="registers" ></option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label" for="basic-icon-default-phone">Année
                                                            de Cotisation</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bx-calendar"></i></span>

                                                            <input type="text" name="annee_pai" id="basic-icon-code"
                                                                value="<?php echo date("Y"); ?>" class="form-control"
                                                                placeholder="XXXXX" aria-label="date"
                                                                aria-describedby="basic-icon-default-date">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Ref</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-objects-horizontal-left"
                                                                class="input-group-text"><i
                                                                    class="bx bx-code"></i></span>
                                                            <input type="text" id="reff" name="ref" value="<?php $ref = date("Y");

                                                            $societe = "SELECT count(*) FROM `cotis`";
                                                            $querys = mysqli_query($conn, $societe);
                                                            $count = mysqli_fetch_row($querys);
                                                            $ref = $count[0] + 1 . "/" . $ref;
                                                            echo $ref;
                                                            ?>" id="basic-icon-code" class="form-control"
                                                                placeholder="XXXXX" aria-label="ref"
                                                                aria-describedby="basic-icon-default-ref">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-phone">Date</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bx-calendar"></i></span>
                                                            <input type="date" name="date" id="basic-icon-code"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="date"
                                                                aria-describedby="basic-icon-default-date">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Lieu</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-map" class="input-group-text"><i
                                                                    class="bx bx-map"></i></span>
                                                            <input type="text" name="Lieu" id="basic-icon-map"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="map"
                                                                aria-describedby="basic-icon-default-lieu">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label class="form-label" for="basic-icon-default-phone">type de
                                                            paiement</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-money-withdraw"
                                                                class="input-group-text"><i
                                                                    class="bx bx-money-withdraw"></i></span>
                                                            <select id="type_pai" required name="type_pai"
                                                                class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                                <option value="cheque">Cheque</option>
                                                                <option value="lcn">LCN</option>
                                                                <option value="virement">Virement</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0" id="bq">
                                                        <label class="form-label"
                                                            for="basic-icon-default-bank">Banque</label>
                                                        <div class="input-group input-group-phone">
                                                            <span id="basic-icon-calendar" class="input-group-text"><i
                                                                    class="bx bxs-bank"></i></span>
                                                            <select id="banque" name="banque" class="form-select">
                                                                <option value="0">Sélection par défaut</option>
                                                                <?php
                                                                $sqlq = "SELECT * FROM `banque`";
                                                                $resul = mysqli_query($conn, $sqlq);
                                                                if (mysqli_num_rows($resul) > 0) {
                                                                    while ($i = mysqli_fetch_assoc($resul)) {
                                                                        echo "<option value=" . $i["code"] . ">" . $i["Nom"] . "</option>";
                                                                    }
                                                                } else {
                                                                    echo "Error: " . $conn->$error;
                                                                }
                                                                ;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0" id="nbch">
                                                        <label class="form-label" id="labelcheq"
                                                            for="basic-icon-default-note">N Cheque</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-dollar" class="input-group-text"><i
                                                                    class="bx bx-code"></i></span>
                                                            <input type="text" name="nb_cheque" id="nb_cheq"
                                                                class="form-control" placeholder="XXXXX"
                                                                aria-label="code"
                                                                aria-describedby="basic-icon-default-code">
                                                        </div>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label class="form-label"
                                                            for="basic-icon-default-note">Montant</label>
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-dollar" class="input-group-text"><i
                                                                    class="bx bx-dollar"></i></span>
                                                            <input type="number" min="0" name="montant" required
                                                                id="basic-icon-map" class="form-control"
                                                                placeholder="XXXXX" aria-label="dollar"
                                                                aria-describedby="basic-icon-default-montant">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col mb-0" style="margin-top: 9px;">
                                                    <div class="input-group input-group-merge">
                                                        <button type="submit" name="addcotis"
                                                            class="btn btn-primary">ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET["modifierco"])) {
                                $ref = $_GET["ref"];
                                $date = $_GET["date"];
                                $Lieu = $_GET["Lieu"];
                                $type_pai = $_GET["type_pai"];
                                $banque = $_GET["banque_up"];
                                $nb_cheque = $_GET["nb_cheque"];
                                $montant = $_GET["montant"];
                                $queryup = "UPDATE `cotis` SET `date_paim`='$date',`type_paiement`='$type_pai',`Num_cheque`='$nb_cheque',`banque`='$banque',`montant`=$montant,`lieu`='$Lieu' WHERE `id`=$ref";
                                $conn->query($queryup);
                            }
                            if (isset($_GET["cotisation_del"])) {
                                $id = $_GET["cotisation_del"];
                                $query = "DELETE FROM `cotis` WHERE `id`='$id'";
                                $conn->query($query);
                                if ($conn->query($query) === TRUE) {
                                } else {
                                    echo "Error: " . $query . "<br>" . $conn->$error;
                                }
                                ;
                            }
                            if (isset($_POST["addcotis"])) {
                                $id_entre = $_POST["Entreprise"];
                                $ANNEE = $_POST["annee_pai"];
                                $date = $_POST["date"];
                                $ref = date("Y");
                                $nbsoci_cotis = "SELECT count(*) FROM `cotis`";
                                $querys = mysqli_query($conn, $nbsoci_cotis);
                                $count_cotis = mysqli_fetch_row($querys);
                                $ref = $count_cotis[0] + 1 . "/" . $ref;
                                $aueryentre = "SELECT ENTREPRISE FROM `societe` where Id=$id_entre";
                                $query_ent = mysqli_query($conn, $aueryentre);
                                $Entreprise = mysqli_fetch_row($query_ent);
                                $Entreprise[0] = str_replace("'", "\'", $Entreprise[0]);
                                $Lieu = $_POST["Lieu"];
                                $type_pai = $_POST["type_pai"];
                                $banque = $_POST["banque"];
                                if (isset($_POST["nb_cheque"])) {
                                    $nb_cheque = $_POST["nb_cheque"];
                                } else
                                    $nb_cheque = 0;
                                $montant = $_POST["montant"];
                                $insertcotis = "INSERT INTO `cotis`(`ENTREPRISE`, `banque`, `date_paim`, `type_paiement`, `num_recu_cotis`, `Num_cheque`, `montant`, `lieu`, `ANNEE`, `id_entre`) 
                                                                VALUES ('$Entreprise[0]','$banque','$date','$type_pai',$ref,'$nb_cheque',$montant,'$Lieu',$ANNEE,$id_entre)";

                                $conn->query($insertcotis);
                            }
                            ?>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover" id="table_cotis">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Raison social</th>
                                            <th>Date</th>
                                            <th>annee</th>
                                            <th>Banque</th>
                                            <th>type de paiement</th>
                                            <th>Numero de cheque</th>
                                            <th>Montant</th>
                                            <th>Lieu</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0" id="tabcotisser">
                                        <?php
                                        $sql = "SELECT * FROM `cotis`";
                                        $query = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($query) > 0) {
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
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            $record_per_page = 25;
                            echo "<br /><div align=\"center\"> <nav aria-label=\"Page navigation\">
              <ul class=\"pagination pagination-sm justify-content-center\">
                <li class=\"page-item\">
                  <a class=\"page-link prev\" href=\"javascript:void(0);\"><i class=\"tf-icon bx bx-chevrons-left\"></i></a>
                </li>";
                            $page_query = "SELECT * FROM cotis ORDER BY Id ASC";
                            $page_result = mysqli_query($conn, $page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records / $record_per_page);
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "
                <li class=\"page-item \">
                  <a class=\"page-link pagination_link\" id='" . $i . "'>" . $i . "</a>
                </li>
                ";
                            }
                            echo "<li class=\"page-item \">
                  <a class=\"page-link next\" id=" . $total_pages . " href=\"javascript:void(0);\">
                    <i class=\"tf-icon bx bx-chevrons-right\" ></i>
                  </a>
                </li>
              </ul>
            </nav><br /><br />";

                            ?>
                        </div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle">

            </div>
        </div>
        <!-- / Layout wrapper -->
        <!-- Core JS -->
        <script>
            $(document).ready(function () {
                load_data();
                $('#ville').change(function () {
                    $('#taux').val("");
                });
                $('#taux').change(function () {
                    var ville = $('#ville').val();
                    var taux = $('#taux').val();
                    $.get(
                        "cotis.php", {
                        ville: ville,
                        taux: taux
                    },
                        function (data) {
                            $('#Entreprise').html(data);
                        }
                    );
                });

                $("[name='type_pai']").change(function () {
                    var selected = $(this).val();
                    var nb_chaq = $('#nb_cheq').val();
                    if (selected == "virement") {
                        $('#nb_cheq').prop("disabled", true);
                        $('#nb_cheq').prop("required", false);
                    } else {
                        $('#nb_cheq').prop("disabled", false);
                        $('#nb_cheq').prop("required", true);
                        if (selected == "lcn") {
                            $('#labelcheq').text("Numero");
                        } else {
                            $('#labelcheq').text("N CHEQUE");
                        }
                    }
                });

                $(document).on("click", "a.editcotis", function () {
                    var ucid = $(this).closest("tr");
                    var uid = ucid.find("td:eq(0)").text();
                    var regi = ucid.find("td:eq(1)").text();
                    var date = ucid.find("td:eq(2)").text();
                    var baq = ucid.find("td:eq(4)").text();
                    var numero_che = ucid.find("td:eq(6)").text();
                    var montant = ucid.find("td:eq(7)").text();
                    var lieu = ucid.find("td:eq(8)").text();
                    $('#dateup').attr('value', date);
                    $('#lieuup').attr('value', lieu);
                    $('#banque_up').val(baq)
                    $('#ref').attr('value', uid);
                    $('#nb_cheque').attr('value', numero_che);
                    $('#montant').attr('value', montant.replace("DH", ""));
                });
                $("#search").keyup(function () {
                    var search = $("#search").val()
                    $.ajax({
                        url: 'aax.php',
                        method: 'post',
                        data: {
                            enrech: search,
                        },
                        success: function (response) {
                            $('#tabcotisser').html(response);
                        }
                    });
                });
                function load_data(page) {
                    $.ajax({
                        url: "paginationcotisation.php",
                        method: "POST",
                        data: {
                            page: page
                        },
                        success: function (data) {
                            $('#tabcotisser').html(data);
                        }
                    });
                }
                $(document).on('click', '.pagination_link', function () {
                    var page = $(this).attr("id");
                    load_data(page);
                });
                $(document).on('click', '.next', function () {
                    var page = $(this).attr("id");
                    load_data(page);
                });
                $(document).on('click', '.prev', function () {
                    var page = 1;
                    load_data(page);
                });
            });
        </script>
        <!-- build:js assets/vendor/js/core.js -->
        <script src="assets/vendor/libs/jquery/jquery.js"></script>
        <script src="assets/vendor/libs/popper/popper.js"></script>
        <script src="assets/vendor/js/bootstrap.js"></script>
        <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="assets/vendor/js/menu.js"></script>
        <!-- endbuild -->
        <!-- Vendors JS -->
        <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <!-- Page JS -->
        <script src="assets/js/dashboards-analytics.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </div>
</body>

</html>