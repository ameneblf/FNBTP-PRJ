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
  header('refresh:0;url=404.php'); //2 s
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

  <title>tableau de bord</title>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
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

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
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
          <li class="menu-item">
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
              <li class="menu-item">
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
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de Consultation</span>
          </li>
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

          <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de setting</span></li>
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

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/55.png" alt class="w-px-40 h-auto rounded-circle" />
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
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="Entreprises.php">Voir plus</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Entreprises Région RSK</span>
                        <h3 class="card-title mb-3">
                          <?php
                          $societe = "SELECT count(*) FROM `societe`";
                          $querys = mysqli_query($conn, $societe);
                          $count = mysqli_fetch_row($querys);
                          echo $count[0];
                          ?>
                        </h3>
                        <small class="text-success fw-semibold" style="display: none;">100%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/adhere.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="adhesion.php">Voir plus</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold">Entreprises adhérentes FNBTP RSK</span>
                        <h3 class="card-title text-nowrap mb-3">
                          <?php
                          $adhesion = "SELECT count(*) FROM `adhesion`";
                          $queryad = mysqli_query($conn, $adhesion);
                          $countad = mysqli_fetch_row($queryad);
                          echo $countad[0];
                          ?>
                        </h3>
                        <small class="text-success fw-semibold" style="display: none;">
                          <?php
                          $resad = ($countad[0] * 100) / $count[0];
                          echo number_format($resad, 2) . '%';
                          ?>
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/block-user.png" alt="block-user" class="rounded">
                          </div>
                        </div>
                        <span class="fw-semibold d-block">Entreprises non adhérentes</span>
                        <h3 class="card-title mb-4">
                          <?php
                          $querynonad = "SELECT COUNT(Id) from societe where adher=0";
                          $resquery = mysqli_query($conn, $querynonad);
                          $totalnonad = mysqli_fetch_row($resquery);
                          if ($totalnonad[0] == 0) {
                            echo 0;
                          } else
                            echo $totalnonad[0];
                          ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-12 order-1 order-md-3">
                <dir class="row" style="margin-left: calc(-2 * var(--bs-gutter-x));">
                  <div class="col-md-3 col-lg-3 col-xl-3 order-0">
                    <div class="row">
                      <div class="col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="./assets/img/icons/unicons/money.png" alt="money" class="rounded">
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total cotisations non Réglées</span>
                            <h3 class="card-title mb-3">
                              <?php
                              $querynoncotis = "SELECT sum(MONTANT_COTISATION) from societe where id not in(select id_entre from cotis)";
                              $resquery = mysqli_query($conn, $querynoncotis);
                              $totalnoncotis = mysqli_fetch_row($resquery);
                              if ($totalnoncotis[0] == 0) {
                                echo 0;
                              } else
                                echo number_format($totalnoncotis[0], 2, ",", ".");
                              ?>
                            </h3>
                            <small class="text-p fw-semibold"><strong>Dhs</strong></small>

                          </div>
                        </div>
                      </div>
                      <div class="col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="assets/img/icons/unicons/cotis.png" alt="Credit Card" class="rounded">
                              </div>
                              <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="cotisation.php">Voir plus</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Cotisation Réglées</span>
                            <h3 class="card-title text-nowrap mb-3">
                              <?php
                              $cotis = "SELECT sum(montant) from cotis WHERE ANNEE=" . date('Y') . "";
                              $querycotis = mysqli_query($conn, $cotis);
                              $countcotis = mysqli_fetch_row($querycotis);
                              if ($countcotis[0] == 0) {
                                echo 0;
                              } else
                                echo number_format($countcotis[0], 2, ",", ".");
                              ?>
                            </h3>
                            <small class="text-secondary fw-semibold"><strong>Dhs</strong></small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-xl-4 order-0">
                    <div class="card ">
                      <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                          <h5>Nombre Entreprises adhérentes/qualité de membre</h5>
                        </div>
                      </div>
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between align-items-center" style="position: relative;">
                          <div id="StatisticsChartradialBar">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-5 col-lg-5 col-xl-5 order-0">
                    <div class="card h-100">
                      <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                          <h5>Cotisation Réglées/Qualité de membre</h5>
                        </div>
                      </div>
                      <div class="card-body pt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                          <div id="">
                            <ul class="p-3 m-3">
                              <?php
                              $list = array();
                              $listnbcotis = array();
                              for ($i = 0; $i < 6; $i++) {
                                $query = "SELECT Sum(c.montant)as mantont , a.qualite_membre FROM cotis c ,adhesion a WHERE c.id_entre=a.id_entre and a.qualite_membre=" . $i . " GROUP by a.qualite_membre;";
                                $querycotis = "SELECT count(c.ID)as id , a.qualite_membre FROM cotis c ,adhesion a WHERE c.id_entre=a.id_entre and a.qualite_membre=" . $i . " GROUP by a.qualite_membre";
                                $res = mysqli_query($conn, $query);
                                $resnbcotis = mysqli_query($conn, $querycotis);
                                if (mysqli_num_rows($res) > 0) {
                                  while ($row = mysqli_fetch_array($res)) {
                                    array_push($list, number_format($row["mantont"], 2, ",", "."));
                                  }
                                } else {
                                  array_push($list, 0);
                                }
                                if (mysqli_num_rows($resnbcotis) > 0) {
                                  while ($row = mysqli_fetch_array($resnbcotis)) {
                                    array_push($listnbcotis, $row["id"]);
                                  }
                                } else {
                                  array_push($listnbcotis, 0);
                                }
                              }

                              ?>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bxs-circle' style="color: #1982c4;"></i>
                                </div>
                                <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Membres du Bureau</small>
                                    <h6 class="mb-0">
                                      <?php echo $listnbcotis[1] ?>
                                    </h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">
                                      <?php echo "/ " . $list[1] ?>
                                    </h6>
                                    <span class="text-muted">Dhs</span>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bxs-circle' style="color: #8ac926;"></i>
                                </div>
                                <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">ayant des demandes de QC en cours</small>
                                    <h6 class="mb-0">
                                      <?php echo $listnbcotis[2] ?>
                                    </h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">
                                      <?php echo "/" . $list[2] ?>
                                    </h6>
                                    <span class="text-muted">Dhs</span>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bxs-circle' style="color: #ffca3a;"></i>
                                </div>
                                <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Membres AD % recouvrement fort</small>
                                    <h6 class="mb-0">
                                      <?php echo $listnbcotis[3] ?>
                                    </h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">
                                      <?php echo "/" . $list[3] ?>
                                    </h6>
                                    <span class="text-muted">Dhs</span>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bxs-circle' style="color: #ff924c;"></i>
                                </div>
                                <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Membres AD % recouvrement faible</small>
                                    <h6 class="mb-0">
                                      <?php echo $listnbcotis[4] ?>
                                    </h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">
                                      <?php echo "/" . $list[4] ?>
                                    </h6>
                                    <span class="text-muted">Dhs</span>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0">
                                  <i class='bx bxs-circle' style="color: #ff595e;"></i>
                                </div>
                                <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Membres AD % recouvrement au BN</small>
                                    <h6 class="mb-0">
                                      <?php echo $listnbcotis[5] ?>
                                    </h6>
                                  </div>
                                  <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">
                                      <?php echo "/" . $list[5] ?>
                                    </h6>
                                    <span class="text-muted">Dhs</span>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </dir>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-12 order-1 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr style="text-align: center;">
                          <th>Villes</th>
                          <th colspan="2">Entreprises</th>
                          <th colspan="2">ADHESION</th>
                          <th>MONTANT EN DHS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>Nombres</td>
                          <td>%</td>
                          <td>Nombres</td>
                          <td>%</td>
                          <td>Dhs</td>
                        </tr>
                        <?php

                        $queryreg = "select * FROM `ville` where region=4";
                        $resreg = mysqli_query($conn, $queryreg);
                        if (mysqli_num_rows($resreg) > 0) {

                          while ($row = mysqli_fetch_array($resreg)) {
                            echo "<tr>
                                <td>" . $row["nom"] . "</td>";
                            $querynbs = "SELECT COUNT(*) FROM societe s WHERE s.VILLE='" . $row["nom"] . "' ;";
                            $resnbs = mysqli_query($conn, $querynbs);
                            $nbsoc = mysqli_fetch_row($resnbs);
                            echo "
                                <td>" . $nbsoc[0] . "</td>
                                <td>" . number_format(($nbsoc[0] * 100) / $count[0], 2) . "</td>";

                            $querynbsad = "SELECT COUNT(*) FROM societe s,adhesion a WHERE s.Id=a.id_entre and  s.VILLE='" . $row["nom"] . "' ;";
                            $resnbsad = mysqli_query($conn, $querynbsad);
                            $nbsocad = mysqli_fetch_row($resnbsad);
                            echo "
                                    <td>" . $nbsocad[0] . "</td>";
                            if ($nbsoc[0] == 0) {
                              echo "<td>0</td>";
                            } else
                              echo "<td>" . number_format(($nbsocad[0] * 100) / $countad[0], 2) . "</td>";

                            $querymont = "SELECT SUM(c.montant) FROM societe s,cotis c WHERE s.Id=c.id_entre and s.VILLE='" . $row["nom"] . "'  ;";
                            $resmon = mysqli_query($conn, $querymont);
                            $mont = mysqli_fetch_row($resmon);
                            if ($mont[0] == 0) {
                              echo "<td>0</td>
                                    </tr>";
                            } else {
                              echo "<td>" . number_format($mont[0], 2, ",", ".") . "</td>
                              </tr>";
                            }
                          }
                        }
                        ?>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
            </div>
            <dir class="row" style="margin-left: calc(-2 * var(--bs-gutter-x));">
              <div class="col-md-4 col-lg-4 col-xl-4 order-0 mb-3">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                      <h5>Statistiques recouvrement la Qualité de membre</h5>
                    </div>
                  </div>
                  <div class="card-body mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                      <div id="orderStatisticsChart">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--total non regle par quality nb-->
              <div class="col-md-8 col-lg-8 col-xl-8 order-0 mb-3">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                      <h5>Total de cotisation non réglée <br> par qualité de membre</h5>
                    </div>
                  </div>
                  <div class="card-body pt-4">
                    <div class="justify-content-between align-items-center mb-3" style="position: relative;">
                      <div id="">
                        <ul class="p-0 m-0">
                          <?php
                          $list2 = array();
                          $listnbnoncotis = array();

                          for ($i = 0; $i < 6; $i++) {
                            $query = "SELECT sum(s.MONTANT_COTISATION) as total,a.qualite_membre FROM adhesion a,societe s where a.id_entre=s.id and s.id not in(SELECT cc.id_entre FROM cotis cc) and a.qualite_membre=" . $i . " GROUP BY a.qualite_membre;";
                            $querynoncoutis = "SELECT count(s.MONTANT_COTISATION) as nbnoncotis,a.qualite_membre FROM adhesion a,societe s where a.id_entre=s.id and s.id not in(SELECT cc.id_entre FROM cotis cc) and a.qualite_membre=" . $i . " GROUP BY a.qualite_membre;";
                            $res = mysqli_query($conn, $query);
                            $resnoncotis = mysqli_query($conn, $querynoncoutis);
                            if (mysqli_num_rows($res) > 0) {
                              while ($row = mysqli_fetch_array($res)) {
                                array_push($list2, number_format($row["total"], 2, ",", "."));
                              }
                            }
                            if (mysqli_num_rows($resnoncotis) > 0) {
                              while ($row = mysqli_fetch_array($resnoncotis)) {
                                array_push($listnbnoncotis, $row["nbnoncotis"]);
                              }
                            } else {
                              array_push($list2, 0);
                              array_push($listnbnoncotis, 0);
                            }
                          }

                          ?>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-circle' style="color: #1982c4;"></i>
                            </div>
                            <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Membres du Bureau</small>
                                <h6 class="mb-0">
                                  <?php echo $listnbnoncotis[1] ?>
                                </h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">
                                  <?php echo "/" . $list2[1] ?>
                                </h6>
                                <span class="text-muted">Dhs</span>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-circle' style="color: #8ac926;"></i>
                            </div>
                            <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">ayant des demandes de QC en cours</small>
                                <h6 class="mb-0">
                                  <?php echo $listnbnoncotis[2] ?>
                                </h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">
                                  <?php echo "/" . $list2[2] ?>
                                </h6>
                                <span class="text-muted">Dhs</span>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-circle' style="color: #ffca3a;"></i>
                            </div>
                            <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Membres AD % recouvrement fort</small>
                                <h6 class="mb-0">
                                  <?php echo $listnbnoncotis[3] ?>
                                </h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">
                                  <?php echo "/" . $list2[3] ?>
                                </h6>
                                <span class="text-muted">Dhs</span>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-circle' style="color: #ff924c;"></i>
                            </div>
                            <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Membres AD % recouvrement faible</small>
                                <h6 class="mb-0">
                                  <?php echo $listnbnoncotis[4] ?>
                                </h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">
                                  <?php echo "/" . $list2[4] ?>
                                </h6>
                                <span class="text-muted">Dhs</span>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bxs-circle' style="color: #ff595e;"></i>
                            </div>
                            <div class=" d-flex w-100 flex-wrap align-items-center justify-content-between">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Membres AD % recouvrement au BN</small>
                                <h6 class="mb-0">
                                  <?php echo $listnbnoncotis[5] ?>
                                </h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">
                                  <?php echo "/" . $list2[5] ?>
                                </h6>
                                <span class="text-muted">Dhs</span>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </dir>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
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
  <script>
    var tabqualt = [];
    var tabcov = [];
    var total = 0;
    (function () {
      let cardColor, headingColor, axisColor, borderColor;
      cardColor = config.colors.white;
      headingColor = config.colors.headingColor;
      axisColor = config.colors.axisColor;
      borderColor = config.colors.borderColor;
      $.ajax({
        url: 'societeparregion.php',
        method: 'post',
        data: {
          Qulity_mem: ''
        },
        success: function (response) {
          tabqualt = JSON.parse(response);
          for (let index = 0; index < tabqualt.length; index++) {
            total = total + parseInt(tabqualt[index]);
          }
          for (let index = 0; index < tabqualt.length; index++) {
            tabcov.push(((parseInt(tabqualt[index]) * 100) / total).toFixed(2));
          }
          const chartOrderStatistics = document.getElementById('orderStatisticsChart'),
            orderChartConfig = {
              chart: {
                height: 250,
                width: '100%',
                type: 'donut'
              },
              labels: ['Membres du Bureau', 'ayant des demandes de QC en cours', 'qui doivent régler une seule année', "qui doivent régler plus qu'une année", 'à jour de leurs cotisations'],
              series: [parseFloat(tabcov[1]), parseFloat(tabcov[2]), parseFloat(tabcov[3]), parseFloat(tabcov[4]), parseFloat(tabcov[5])],
              colors: ['#1982c4', '#8ac926', '#ffca3a', '#ff924c', '#ff595e'],
              dataLabels: {
                enabled: false,
                formatter: function (val, opt) {
                  return parseInt(val) + '%';
                }
              },
              legend: {
                show: false,
                fontSize: '14%',
                offsetX: 0,
                offsetY: 0,

              },
              grid: {
                padding: {
                  top: 0,
                  bottom: 0,
                  right: 0,
                  left: 0
                }
              },
              plotOptions: {
                pie: {
                  donut: {
                    size: '75%',
                    labels: {
                      show: true,
                      value: {
                        fontSize: '1.5rem',
                        fontFamily: 'Public Sans',
                        color: headingColor,
                        offsetY: -15,
                        formatter: function (val) {
                          return parseInt(val) + '%';
                        }
                      },
                      name: {
                        offsetY: 20,
                        fontFamily: 'Public Sans'
                      },
                      total: {
                        show: true,
                        fontSize: '0.8125rem',
                        color: axisColor,
                        label: 'Total',
                        formatter: function (w) {
                          return '100%';
                        }
                      }
                    }
                  }
                }
              }

            };
          const chartOrderStatistics1 = document.getElementById('StatisticsChartradialBar'), orderChartConfig2 = {
            chart: {
              height: 350,
              type: 'radialBar'
            },
            labels: [' ', ' ', ' ', " ", ' '],
            series: [parseFloat(tabqualt[1]), parseFloat(tabqualt[2]), parseFloat(tabqualt[3]), parseFloat(tabqualt[4]), parseFloat(tabqualt[5])],
            colors: ['#1982c4', '#8ac926', '#ffca3a', '#ff924c', '#ff595e'],
            dataLabels: {
              enabled: false,
              formatter: function (val) {
                return parseInt(val);
              }
            },
            legend: {
              show: true,
              floating: true,
              fontSize: '15px',
              position: 'left',
              offsetX: 10,
              offsetY: 0,
              labels: {

                useSeriesColors: true,
              },
              markers: {
                size: 0
              },
              formatter: function (seriesName, opts) {
                return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
              },
              itemMargin: {
                vertical: 3
              },
              responsive: [{
                breakpoint: 480,
                options: {
                  legend: {
                    show: false
                  }
                }
              }]
            },

            plotOptions: {
              radialBar: {
                offsetY: 0,
                startAngle: 0,
                endAngle: 270,
                hollow: {
                  margin: 5,
                  size: '30%',
                  background: 'transparent',
                  image: undefined,
                },
                dataLabels: {
                  name: {
                    show: false,
                  },
                  value: {
                    show: false,
                  }
                }
              }
            }
          };
          if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
            const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
            const statisticsChart2 = new ApexCharts(chartOrderStatistics1, orderChartConfig2);
            statisticsChart.render();
            statisticsChart2.render();
          }
        }
      });
      // Order Statistics Chart
      // --------------------------------------------------------------------

    })();
  </script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>