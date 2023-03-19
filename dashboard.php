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

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>tableau de bord</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/Asset 1.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Account Settings">Qualifications et Classifications</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <div data-i18n="Notifications">Ministere de l'Habitat</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="Demandehabitat.php" class="menu-link">
                          <div data-i18n="Account">Demande des Qualification et Classes</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="table_comhabitat.php" class="menu-link">
                          <div data-i18n="Account">Etude de la Comande</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="habita_comm.php" class="menu-link">
                          <div data-i18n="Account">Commission</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <div data-i18n="Notifications">Ministere de l'Equipement</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item ">
                        <a href="Demande.php" class="menu-link">
                          <div data-i18n="Account">Demande des Qualification et Classes</div>
                        </a>
                      </li>
                      <li class="menu-item ">
                        <a href="table_com.php" class="menu-link">
                          <div data-i18n="Account">Etude de la Comande</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="equipement_comm.php" class="menu-link">
                          <div data-i18n="Account">Commission</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
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
              </li>
            </ul>
          </li>
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Tableaux de Consultation</span></li>
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

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">Mon profil</span>
                    </a>
                  </li>
                  <?php
                  if ($_COOKIE['type_user'] == 1) {
                    echo "<li>
                                <a class=\"dropdown-item\" href=\"setting.php\">
                                <i class=\"bx bx-cog me-2\"></i>
                                <span class=\"align-middle\"> Settings</span>
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
                  <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="Entreprises.php">Voir plus</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">les entreprises</span>
                        <h3 class="card-title mb-2">
                          <?php
                          $societe = "SELECT count(*) FROM `societe`";
                          $querys = mysqli_query($conn, $societe);
                          $count = mysqli_fetch_row($querys);
                          echo $count[0];
                          ?>
                        </h3>
                        <small class="text-success fw-semibold">100%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/adhere.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="adhesion.php">Voir plus</a>
                            </div>
                          </div>
                        </div>
                        <span>les adhésions</span>
                        <h3 class="card-title text-nowrap mb-1">
                          <?php
                          $adhesion = "SELECT count(*) FROM `adhesion`";
                          $queryad = mysqli_query($conn, $adhesion);
                          $countad = mysqli_fetch_row($queryad);
                          echo $countad[0];
                          ?>
                        </h3>
                        <small class="text-success fw-semibold">
                          <?php
                          $resad = ($countad[0] * 100) / $count[0];
                          echo $resad . '%';
                          ?>
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="./assets/img/icons/unicons/cotis.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="cotisation.php">Voir plus</a>
                            </div>
                          </div>
                        </div>
                        <span class="d-block mb-1">les cotisations</span>
                        <h3 class="card-title text-nowrap mb-2">
                          <?php
                          $cotis = "SELECT sum(montant) from cotis WHERE year(dat)=" . date('m') . "";
                          $querycotis = mysqli_query($conn, $cotis);
                          $countcotis = mysqli_fetch_row($querycotis);
                          if ($countcotis[0] == 0) {
                            echo 0;
                          } else
                            echo $countcotis[0];
                          ?>
                        </h3>
                        <small class="text-secondary fw-semibold">Dhs/annee</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-12 order-1 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Regions</th>
                          <th colspan="2">Entreprises</th>
                          <th colspan="3">ADHERENTS</th>
                          <th>COTISATIONS</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>Nbrs</td>
                          <td>%</td>
                          <td>Nbrs</td>
                          <td>%(Regional)</td>
                          <td>%(National)</td>
                          <td>HDs</td>
                        </tr>
                        <?php

                        $queryreg = "select * FROM `region`";
                        $resreg = mysqli_query($conn, $queryreg);
                        if (mysqli_num_rows($resreg) > 0) {

                          while ($row = mysqli_fetch_array($resreg)) {
                            echo "<tr>
                                <td>" . $row["nom"] . "</td>";
                            $querynbs = "SELECT COUNT(*) FROM societe s WHERE s.region=".$row["code"]." ;";
                            $resnbs = mysqli_query($conn, $querynbs);
                            $nbsoc=mysqli_fetch_row($resnbs);
                            echo "
                                <td>".$nbsoc[0]."</td>
                                <td>".($nbsoc[0]*100)/$count[0]."</td>";
                                
                                $querynbsad = "SELECT COUNT(*) FROM societe s,adhesion a WHERE s.registre=a.registre and s.region=".$row["code"]." ;";
                                $resnbsad = mysqli_query($conn, $querynbsad);
                                $nbsocad=mysqli_fetch_row($resnbsad);
                                echo "
                                    <td>".$nbsocad[0]."</td>";
                                    if ($nbsoc[0]==0) {
                                      echo"<td>0</td>";
                                    }else
                                    echo"<td>".($nbsocad[0]*100)/$nbsoc[0]."</td>";

                                    echo"<td>".($nbsocad[0]*100)/$count[0]."</td>";
                                    $querymont = "SELECT SUM(c.montant) FROM societe s,cotis c WHERE s.registre=c.registre and s.region=".$row["code"]." ;";
                                    $resmon = mysqli_query($conn, $querymont);
                                    $mont=mysqli_fetch_row($resmon);
                                    if ($mont[0]==0) {
                                      echo "<td>0</td>
                                    </tr>";
                                    }else {
                                      echo "<td>".$mont[0]."</td>
                              </tr>";
                                    }
                                    
                          }
                        }



                        ?>
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
  <script src="assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>