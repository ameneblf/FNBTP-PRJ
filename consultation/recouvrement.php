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

    <title>Recouvrement</title>

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
                                <a href="../demande_encou.php " class="menu-link">
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
                            <li class="menu-item ">
                                <a href="../consultation/searchad_quali.php" class="menu-link">
                                    <div data-i18n="Connections">Adhésion et Qualification</div>
                                </a>
                            </li>
                            <li class="menu-item active">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" card-body">
                                            <label class="form-label" for="basic-icon-default-map">Etat</label>
                                            <div class="input-group input-group-phone">
                                                <span id="basic-icon-map" class="input-group-text">
                                                    <i class='bx bxs-calendar-check'></i></span>
                                                <select id="Etat" required name="Etat" class="form-select">
                                                    <option value="0">Sélection par défaut</option>
                                                    <option value="1">à jour</option>
                                                    <option value="2">une année à régler</option>
                                                    <option value="3">plus d'une année à régler</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" card-body">
                                            <label class="form-label" for="basic-icon-default-map-alt">Qualite de
                                                membre</label>
                                            <div class="input-group input-group-phone">
                                                <span id="basic-icon-map-alt" class="input-group-text"><i
                                                        class='bx bxs-star-half'></i></span>
                                                <select id="qualite_membre" required name="qualite_membre"
                                                    class="form-select">
                                                    <option value="0">Sélection par défaut</option>
                                                    <option value="1">Membres du Bureau FNBTP RSK</option>
                                                    <option value="2">Entreprises ayant des demandes de QC en cours
                                                        auprès du M. Equipement</option>
                                                    <option value="3">Entreprises dont probabilité de recouvrement
                                                        forte</option>
                                                    <option value="4">Entreprises dont probabilité de recouvrement
                                                        faible</option>
                                                    <option value="5">Entreprises règlement au bureau national
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Entreprises</th>
                                        <th>année</th>
                                        <th>Montant</th>
                                        <th>regler</th>
                                        <th>reste a regler</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" id="tabledata">

                                </tbody>
                            </table>
                            <div class="center" id="listpage">


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
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <script>
        var page = 1;
        var quality;
        $(document).ready(function () {
            $("#qualite_membre").change(function () {
                var Etat = $("#Etat").val();
                quality = $(this).val();
                if (Etat == 1) {
                    load_listajou(quality);
                    $.get(
                        "paginastionreco.php", {
                        page: page,
                        quality: quality,
                        page: 1
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                } if (Etat == 2) {
                    load_listnonjou(quality);
                    $.post(
                        "paginastionreco.php", {
                        page1: page,
                        quality: quality,
                        page1: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                }
            });
            $(document).on('click', '.pagination_link', function () {
                page = $(this).attr("id");
                var Etat = $("#Etat").val();
                quality = $("#qualite_membre").val();
                console.log(page + " " + Etat + " " + quality);
                if (Etat == 1) {
                    $.get(
                        "paginastionreco.php", {
                        page: page,
                        quality: quality,
                        page: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listajou(quality);
                } if (Etat == 2) {
                    $.post(
                        "paginastionreco.php", {
                        page1: page,
                        quality: quality,
                        page1: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listnonjou(quality);
                }

            });
            $(document).on('click', '.next', function () {
                page = $(this).attr("id");
                var Etat = $("#Etat").val();
                quality = $("#qualite_membre").val();
                if (Etat == 1) {
                    $.get(
                        "paginastionreco.php", {
                        page: page,
                        quality: quality,
                        page: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listajou(quality);
                } if (Etat == 2) {
                    $.post(
                        "paginastionreco.php", {
                        page1: page,
                        quality: quality,
                        page1: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listnonjou(quality);
                }

            });
            $(document).on('click', '.prev', function () {
                page = 1;
                var Etat = $("#Etat").val();
                quality = $("#qualite_membre").val();
                if (Etat == 1) {
                    $.get(
                        "paginastionreco.php", {
                        page: page,
                        quality: quality,
                        page: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listajou(quality);
                } if (Etat == 2) {
                    $.post(
                        "paginastionreco.php", {
                        page1: page,
                        quality: quality,
                        page1: page
                    },
                        function (data) {
                            $('#tabledata').html(data);
                        }
                    );
                    load_listnonjou(quality);
                }

            });
        });
        function load_data(page) {
            $.get(
                "paginastionreco.php", {
                page: page,
                quality: quality,
                page: page
            },
                function (data) {
                    $('#tabledata').html(data);
                }
            );
        }
        function load_listajou() {
            $.ajax({
                url: "pagenationlist.php",
                method: "GET",
                data: {
                    "ajour": "",
                    quality: quality
                },
                success: function (data) {
                    $('#listpage').html(data);
                }
            });
        }
        function load_data1(page) {
            $.post(
                "paginastionreco.php", {
                page1: page,
                quality: quality,
                page1: page
            },
                function (data) {
                    $('#tabledata').html(data);
                }
            );
        }
        function load_listnonjou() {
            $.ajax({
                url: "pagenationlist.php",
                method: "GET",
                data: {
                    "nonjour": "",
                    quality: quality
                },
                success: function (data) {
                    $('#listpage').html(data);
                }
            });
        }
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

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>