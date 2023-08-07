<?php
session_start();
include_once('../db/connexion.php');
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
?>
<!DOCTYPE html>

<html lang="fr" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Consultation</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/Asset 1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="../dashboard.php" class="app-brand-link">
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
                        <a href="../dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Tableau de bord</div>
                        </a>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="../Entreprises.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-buildings"></i>
                            <div data-i18n="Basic">Gestion d'Entreprises</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">OPERATIONS</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Account Settings">Operation</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="../adhesion.php" class="menu-link">
                                    <div data-i18n="Account">Adhésion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../cotisation.php" class="menu-link">
                                    <div data-i18n="Notifications">Cotisation</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../Qualification.php" class="menu-link">
                                    <div data-i18n="Notifications">Saisie des QC</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="../mise_certif.php" class="menu-link">
                                    <div data-i18n="Notifications">Certificats de QC</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../demande_encou.php" class="menu-link">
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
                    <li class="menu-item active">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-file-find"></i>
                            <div data-i18n="Account Settings">Recherche et Statistique</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="../consultation/searchad_quali.php" class="menu-link">
                                    <div data-i18n="Connections">Adhésion et Qualification</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../consultation/recouvrement.php" class="menu-link">
                                    <div data-i18n="Connections">Recouvrement</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Forms & Tables -->
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
                                <a href="../class/region.php" class="menu-link">
                                    <div data-i18n="Account">Région</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/ville.php" class="menu-link">
                                    <div data-i18n="Notifications">Ville</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Connections">Forme juridique</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/secteurs.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des secteurs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../class/GesClasses.php" class="menu-link">
                                    <div data-i18n="Connections">Gestion des Classes</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="../class/GesQulif.php" class="menu-link">
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

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/55.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/55.png" alt
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
                                        <a class="dropdown-item" href="../logout.php">
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
                    <div class="container-xxl container-p-y">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <form>
                                    <div class="card-body">



                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Nombre d'entreprises</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkadhesion">
                                                                <label class="form-check-label"
                                                                    for="checkadhesion">Adhésion</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline"
                                                                id="adhesionselect" style="display: none;">
                                                                <select class="form-select" id="adhes"
                                                                    aria-label="Default select example">
                                                                    <option value="no">Sélection par défaut</option>
                                                                    <option value="1">Adhérente</option>
                                                                    <option value="0">Non Adhérente</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_adh">
                                                            <?php
                                                            $societe = "SELECT count(*) FROM `societe`";
                                                            $querys = mysqli_query($conn, $societe);
                                                            $count = mysqli_fetch_row($querys);
                                                            echo $count[0];
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkville">
                                                                <label class="form-check-label"
                                                                    for="checkville">Ville</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="ville"
                                                                style="display: none;">
                                                                <select id="city" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="0" selected>Sélection par défaut
                                                                    </option>
                                                                    <?php
                                                                    $sqlcateg = "SELECT * FROM `ville` where region=4";
                                                                    $categ = mysqli_query($conn, $sqlcateg);
                                                                    if (mysqli_num_rows($categ) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($categ)) {
                                                                            echo "<option value=" . $row["nom"] . ">" . $row["nom"] . "</option>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_ville">
                                                            <?php
                                                            $societe = "SELECT count(*) FROM `societe`";
                                                            $querys = mysqli_query($conn, $societe);
                                                            $count = mysqli_fetch_row($querys);
                                                            echo $count[0];
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkcat">
                                                                <label class="form-check-label"
                                                                    for="checkcat">Categorie</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="categ"
                                                                style="display: none;">
                                                                <select id="categorie" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="0">Sélection par défaut</option>
                                                                    <?php
                                                                    $sqlcateg = "SELECT * FROM `categ`";
                                                                    $categ = mysqli_query($conn, $sqlcateg);
                                                                    if (mysqli_num_rows($categ) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($categ)) {
                                                                            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_categ">
                                                            <?php
                                                            $societe = "SELECT count(*) FROM `societe`";
                                                            $querys = mysqli_query($conn, $societe);
                                                            $count = mysqli_fetch_row($querys);
                                                            echo $count[0];
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3"
                                                                id="ministdiv">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkminis">
                                                                <label class="form-check-label"
                                                                    for="checkminis">Ministère</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="minis"
                                                                style="display: none;">
                                                                <select class="form-select" id="ministere"
                                                                    aria-label="Default select example">
                                                                    <option value="0">Sélection par défaut</option>
                                                                    <?php
                                                                    $sqlministere = "SELECT * FROM `ministere`";
                                                                    $ministere = mysqli_query($conn, $sqlministere);
                                                                    if (mysqli_num_rows($ministere) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($ministere)) {
                                                                            echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_minis">
                                                            <?php
                                                            $querysec = "SELECT COUNT(ministere) FROM qualification GROUP BY id_Entreprise;";
                                                            $res = mysqli_query($conn, $querysec);
                                                            $count1 = mysqli_num_rows($res);
                                                            if ($count1 > 0) {
                                                                echo $count1;
                                                            } else
                                                                echo 0;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3"
                                                                id="sectdiv">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checksect">
                                                                <label class="form-check-label"
                                                                    for="checksect">Secteur</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="secteur"
                                                                style="display: none;">
                                                                <select class="form-select" id="sect"
                                                                    aria-label="Default select example">
                                                                    <option value="0">Sélection par défaut</option>
                                                                    <?php
                                                                    $sqlministere = "SELECT * FROM `secteur`";
                                                                    $ministere = mysqli_query($conn, $sqlministere);
                                                                    if (mysqli_num_rows($ministere) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($ministere)) {
                                                                            echo "<option value=" . $row["code"] . ">" . $row["code"] . ":" . $row["nom"] . "</option>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_secteur">
                                                            <?php
                                                            $querysec = "SELECT COUNT(secteur) FROM qualification GROUP BY id_Entreprise;";
                                                            $res = mysqli_query($conn, $querysec);
                                                            $count1 = mysqli_num_rows($res);
                                                            if ($count1 > 0) {
                                                                echo $count1;
                                                            } else
                                                                echo 0;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3"
                                                                id="classdiv">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checkclass">
                                                                <label class="form-check-label"
                                                                    for="checkclass">Classe</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="classe"
                                                                style="display: none;">
                                                                <select class="form-select" id="class"
                                                                    aria-label="Default select example">
                                                                    <option selected>Sélection par défaut</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_class">
                                                            <?php
                                                            $querysec = "SELECT COUNT(secteur) FROM qualification GROUP BY id_Entreprise;";
                                                            $res = mysqli_query($conn, $querysec);
                                                            $count1 = mysqli_num_rows($res);
                                                            if ($count1 > 0) {
                                                                echo $count1;
                                                            } else
                                                                echo 0;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-switch form-check-inline mb-3"
                                                                id="soussdiv">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="checksoussec">
                                                                <label class="form-check-label"
                                                                    for="checksoussec">Sous-secteur</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline" id="sosect"
                                                                style="display: none;">
                                                                <select class="form-select" id="qualiif"
                                                                    aria-label="Default select example">
                                                                    <option selected>Sélection par défaut</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td id="nb_par_qualif">
                                                            <?php
                                                            $querysec = "SELECT COUNT(secteur) FROM qualification GROUP BY id_Entreprise;";
                                                            $res = mysqli_query($conn, $querysec);
                                                            $count1 = mysqli_num_rows($res);
                                                            if ($count1 > 0) {
                                                                echo $count1;
                                                            } else
                                                                echo 0;
                                                            ?>
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <div class="demo-inline-spacing">
                                            <button type="button" class="btn btn-outline-secondary" id="affiche"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalScrollable">affiche</button>
                                            <button type="reset" id="reset"
                                                class="btn btn-outline-secondary">Annuler</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLongTitle">table d'Entreprises</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Entreprises</th>
                                                    <th>Copy le nom</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0" id="data_select">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                </div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <div class="bs-toast toast toast-placement-ex m-2 fade bg-danger bottom-0 end-0 hide" role="alert"
        aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Erreur</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Veuillez selectionner les champs !</div>
    </div>
    <div class="bs-toast toast toast-copy toast-placement-ex m-2 fade bg-success bottom-0 end-0 hide" role="alert"
        aria-live="assertive" aria-atomic="true" data-delay="1000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">succès</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Copie terminée avec succès!</div>
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <script>
        var toastPlacementsucce = document.querySelector('.toast-copy');
        $(document).ready(function () {
            var toastPlacementExample = document.querySelector('.toast-placement-ex');
            const nb_entre = $("#nb_adh").text();
            const nb_par_ville = $("#nb_par_ville").text();
            const nb_par_categ = $("#nb_par_categ").text();
            const nb_par_minis = $("#nb_par_minis").text();
            const nb_par_secteur = $("#nb_par_secteur").text();
            const nb_par_class = $("#nb_par_class").text();
            const nb_par_qualif = $("#nb_par_qualif").text();
            const nb_par_doss_encou = $("#nb_par_doss_encou").text();
            $("#checkadhesion").click(function () {
                if ($(this).is(":checked")) {
                    $("#adhesionselect").show();
                    $("#nb_adh").text("0");
                } else {
                    $("#adhesionselect").hide();
                    $("#nb_adh").text(nb_entre);
                    $("#adhes").val("no")
                }
            });
            $("#reset").click(function () {
                $("#adhesionselect").hide();
                $("#ville").hide();
                $("#minis").hide();
                $("#categ").hide();
                $("#minis").hide();
                $("#secteur").hide();
                $("#classe").hide();
                $("#sosect").hide();
                $("#checkminis").attr("disabled", false);
                $("#checksect").attr("disabled", false);
                $("#checkclass").attr("disabled", false);
                $("#checksoussec").attr("disabled", false);
                $("#nb_adh").text(nb_entre);
                $("#nb_par_ville").text(nb_par_ville);
                $("#nb_par_minis").text(nb_par_minis);
                $("#nb_par_categ").text(nb_par_categ);
                $("#nb_par_secteur").text(nb_par_secteur);
                $("#nb_par_class").text(nb_par_class);
                $("#nb_par_qualif").text(nb_par_qualif);
                $("#nb_par_doss_encou").text(nb_par_doss_encou);
            }

            )
            $("#checkville").click(function () {
                if ($(this).is(":checked")) {
                    $("#ville").show();
                    $("#nb_par_ville").text("0");
                } else {
                    $("#ville").hide();
                    $("#nb_par_ville").text(nb_par_ville);
                    $("#city").val(0);
                }
            });
            $("#checkminis").click(function () {
                if ($(this).is(":checked")) {
                    $("#minis").show();
                    $("#nb_par_minis").text("0");

                } else {
                    $("#minis").hide();
                    $("#nb_par_minis").text(nb_par_minis);
                    $("#ministere").val(0);
                }
            });
            $("#checkcat").click(function () {
                if ($(this).is(":checked")) {
                    $("#desactivcat").hide();
                    $("#categorie").show();
                    $("#checkminis").attr("disabled", true);
                    $("#checkminis").prop('checked', false);
                    $("#minis").hide();
                    $("#checksect").attr("disabled", true);
                    $("#checksect").prop('checked', false);
                    $("#secteur").hide();
                    $("#checkclass").attr("disabled", true);
                    $("#checkclass").prop('checked', false);
                    $("#classe").hide();
                    $("#checksoussec").attr("disabled", true);
                    $("#checksoussec").prop('checked', false);
                    $("#sosect").hide();
                    $("#nb_par_categ").text("0");
                    $("#ministere").val(0);
                } else {

                    $("#nb_par_categ").text(nb_par_categ);
                    $("#categorie").hide();
                    $("#desactivcat").show();
                    $("#checkminis").attr("disabled", false);
                    $("#checksect").attr("disabled", false);
                    $("#checkclass").attr("disabled", false);
                    $("#checksoussec").attr("disabled", false);
                }
            });
            $("#checkcat").click(function () {
                if ($(this).is(":checked")) {
                    $("#categ").show();
                } else {
                    $("#categ").hide();
                }
            });
            $("#checksect").click(function () {
                if ($(this).is(":checked")) {
                    $("#secteur").show();
                    $("#nb_par_secteur").text("0");
                    $.get(
                        "../aax.php", {
                        allsect: ""
                    },
                        function (data) {
                            $('#sect').html(data);
                        }
                    );
                } else {
                    $("#secteur").hide();
                    $("#nb_par_secteur").text(nb_par_secteur);
                }
            });
            $("#checkclass").click(function () {
                if ($(this).is(":checked")) {
                    $("#classe").show();
                    $("#nb_par_class").text("0");
                } else {
                    $("#classe").hide();
                    $("#nb_par_class").text(nb_par_class);
                }
            });
            $("#checksoussec").click(function () {
                if ($(this).is(":checked")) {
                    $("#sosect").show();
                    $("#nb_par_qualif").text("0");
                } else {
                    $("#sosect").hide();
                    $("#nb_par_qualif").text(nb_par_qualif);
                }
            });
            $("#adhes").change(function () {
                var adhes = $(this).val();
                toastPlacement = new bootstrap.Toast(toastPlacementExample);

                if (adhes == 0 || adhes == 1) {

                    $.post(
                        "static.php", {
                        adhes: adhes,
                    },
                        function (data) {
                            //console.log(data);
                            $('#data_select').html(data);
                            $('#nb_adh').text($("#data_select tr").length);
                        }
                    );
                } else {
                    toastPlacement.show();

                }
            });

            $("#city").change(function () {
                var city = $(this).val();
                var adher = $("#adhes").val();
                toastPlacement = new bootstrap.Toast(toastPlacementExample);
                if ($("#checkadhesion").is(":checked")) {
                    if ((adher == 0) || (adher == 1)) {


                        $.get(
                            "static.php", {
                            'cityadher': "",
                            'city': city,
                            'adhes': adher
                        },
                            function (data1) {
                                //console.log(data);
                                $('#data_select').html(data1);
                                $('#nb_par_ville').text($("#data_select tr").length);
                            }
                        );

                    } else {
                        toastPlacement.show();
                        $(this).val(0);
                    }
                } else {
                    $.get(
                        "static.php", {
                        bycity: '',
                        city: city,
                    },
                        function (data) {
                            $('#data_select').html(data);
                            $('#nb_par_ville').text($("#data_select tr").length);
                        }
                    );
                }
            });
            //categorie
            $("#categorie").change(function () {
                var categ = $(this).val();
                var city = $("#city").val();
                var adher = $("#adhes").val();
                toastPlacement = new bootstrap.Toast(toastPlacementExample);
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city != 0 && categ != 0) {
                        $.get(
                            "static.php", {
                            'categcityadher': "",
                            'city': city,
                            'adhes': adher,
                            'categ': categ
                        },
                            function (data) {
                                $('#data_select').html(data);
                                $('#nb_par_categ').text($("#data_select tr").length);
                            }
                        );
                    } else {
                        toastPlacement.show();
                        //$(this).val(0);
                    }
                }
                if ($("#checkadhesion").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && categ != 0 && !$("#checkville").is(":checked")) {
                        $.get(
                            "static.php", {
                            'categadher': "",
                            'adhes': adher,
                            'categ': categ
                        },
                            function (data) {
                                $('#data_select').html(data);
                                $('#nb_par_categ').text($("#data_select tr").length);
                            }
                        );
                    } else {
                    }
                }
                if ($("#checkville").is(":checked")) {
                    if (city != 0 && categ != 0 && !$("#checkadhesion").is(":checked")) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'categcity': "",
                                'city': city,
                                'categ': categ
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_categ').text($("#data_select tr").length);
                            }
                        });
                    } else {
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked")) {
                    $.get(
                        "static.php", {
                        bycateg: '',
                        categ: categ,
                    },
                        function (data) {
                            $('#data_select').html(data);
                            $('#nb_par_categ').text($("#data_select tr").length);
                        }
                    );
                }
            });
            //minister
            $("#ministere").change(function () {
                var minis = $(this).val();
                var city = $("#city").val();
                var adher = $("#adhes").val();
                if (minis != 0) {
                    $.get(
                        "../aax.php", {
                        minis: minis
                    },
                        function (data) {
                            $('#sect').html(data);
                        }
                    );
                }
                toastPlacement = new bootstrap.Toast(toastPlacementExample);
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city != 0 && minis != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'miniscityadher': "",
                                'city': city,
                                'adhes': adher,
                                'minis': minis
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_minis').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && minis != 0 && !$("#checkville").is(":checked")) {

                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'minisadher': "",
                                'adhes': adher,
                                'minis': minis
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_minis').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                        $(this).val(0);
                    }
                }
                if ($("#checkville").is(":checked") && !$("#checkadhesion").is(":checked")) {
                    if (city != 0 && minis != 0 && !$("#checkadhesion").is(":checked")) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'miniscity': "",
                                'city': city,
                                'minis': minis
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_minis').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                        $(this).val(0);
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked")) {
                    $.get(
                        "static.php", {
                        byminis: '',
                        minis: minis,
                    },
                        function (data) {
                            $('#data_select').html(data);
                            $('#nb_par_minis').text($("#data_select tr").length);
                        }
                    );
                }
            });
            //secteur******************************************
            $("#sect").change(function () {
                var sect = $(this).val();
                var city = $("#city").val();
                var minis = $("#ministere").val();
                var adher = $("#adhes").val();

                toastPlacement = new bootstrap.Toast(toastPlacementExample);
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminiscityadher': "",
                                'city': city,
                                'adhes': adher,
                                'minis': minis,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && !$("#checkminis").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city != 0 && minis == 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectcityadher': "",
                                'city': city,
                                'adhes': adher,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminisadher': "",
                                'minis': minis,
                                'adhes': adher,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && !$("#checkminis").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city == 0 && minis == 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectadher': "",
                                'adhes': adher,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked")) {
                    if (!((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminiscity': "",
                                'city': city,
                                'minis': minis,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && !$("#checkminis").is(":checked")) {
                    if (!((adher == 0) || (adher == 1)) && city != 0 && minis == 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectcity': "",
                                'city': city,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked")) {
                    if (!((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminis': "",
                                'minis': minis,
                                'sect': sect
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_secteur').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
            });
            //class**********************
            $("#class").change(function () {
                var classe = $(this).val();
                var sect = $("#sect").val();
                var city = $("#city").val();
                var minis = $("#ministere").val();
                var adher = $("#adhes").val();
                toastPlacement = new bootstrap.Toast(toastPlacementExample);
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminiscityadherclass': "",
                                'city': city,
                                'adhes': adher,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_class').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked")) {
                    if (!((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminiscityclass': "",
                                'city': city,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_class').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked")) {
                    if (((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminisadherclass': "",
                                'adhes': adher,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_class').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked")) {
                    if (!((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'sectminisclass': "",
                                'minis': minis,
                                'sect': sect,
                                'classe': classe
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_class').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
            });

            $('#sect').change(function () {
                var secteuur = $(this).val();
                if (secteuur != 0) {
                    $.get(
                        "../Gclass.php", {
                        sec: secteuur,
                    },
                        function (data) {
                            //console.log(data);
                            $('#class').html(data);
                        }
                    );
                    $.get(
                        "../Gclass.php", {
                        secquali: secteuur,
                    },
                        function (data) {
                            //console.log(data);
                            $('#qualiif').html(data);
                        }
                    );
                }
            });
            $("#qualiif").change(function () {
                var qualiif = $(this).val();
                var classe = $("#class").val();
                var sect = $("#sect").val();
                var city = $("#city").val();
                var minis = $("#ministere").val();
                var adher = $("#adhes").val();
                if ($("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && $("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'all': "",
                                'adher': adher,
                                'city': city,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && $("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (!((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutadh': "",
                                'city': city,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && $("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutcity': "",
                                'adher': adher,
                                'minis': minis,
                                'sect': sect,
                                'classe': classe,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && $("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (!((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe != 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutcityandadher': "",
                                'minis': minis,
                                'sect': sect,
                                'classe': classe,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && !$("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (!((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe == 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutcityandadherandclass': "",
                                'minis': minis,
                                'sect': sect,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if (!$("#checkadhesion").is(":checked") && $("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && !$("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (!((adher == 0) || (adher == 1)) && city != 0 && minis != 0 && sect != 0 && classe == 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutadherandclass': "",
                                'minis': minis,
                                'sect': sect,
                                'city': city,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
                if ($("#checkadhesion").is(":checked") && !$("#checkville").is(":checked") && $("#checkminis").is(":checked") && $("#checksect").is(":checked") && !$("#checkclass").is(":checked")) {
                    //console.log(qualiif +" "+ classe +" "+ sect +" "+ city +" "+minis+" "+adher);
                    if (((adher == 0) || (adher == 1)) && city == 0 && minis != 0 && sect != 0 && classe == 0) {
                        $.ajax({
                            url: "static.php",
                            method: "get",
                            data: {
                                'allwhitoutcityandclass': "",
                                'minis': minis,
                                'sect': sect,
                                'adher': adher,
                                'qualiif': qualiif
                            },
                            success: function (response) {
                                $('#data_select').html(response);
                                $('#nb_par_qualif').text($("#data_select tr").length);
                            }
                        });
                    } else {
                        toastPlacement.show();
                    }
                }
            });
            $("#affiche").click(function () {
                $("#reset").trigger("click");

            });

        });
        function copy(id) {
            var name = $("#" + id).find("td:eq(0)").text();
            //var id = enrow.attr('id');
            navigator.clipboard.writeText(name);
            toastPlacement = new bootstrap.Toast(toastPlacementsucce);
            toastPlacement.show();

        };
    </script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/ui-toasts.js"></script>
    <!--<script src="../assets/js/ui-modals.js"></script>-->

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>