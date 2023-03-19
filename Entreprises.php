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

  <title>Getion d'Entreprises</title>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
          <li class="menu-item ">
            <a href="dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Tableau de bord</div>
            </a>
          </li>
          <!-- Cards -->
          <li class="menu-item active">
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
                                <span class=\"align-middle\">Settings</span>
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
                <div class="col-md-6">
                  <h5 class="card-header"> <strong>Tableaux des sociétés</strong></h5>
                </div>
                <div class="col-md-4 " style="margin-left: auto;text-align-last: right; align-self: center; padding-right: calc(var(--bs-gutter-x) * 0.9);">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary bx bx-message-square-add" data-bs-toggle="modal" data-bs-target="#modaladd">
                  </button>
                </div>
              </div>
            </div>
            <br>
            <?php
            if (isset($_POST["nom"])) {
              //SELECT max(nb_regional) FROM `societe`;
              $querynbreg = "SELECT max(nb_regional) FROM `societe` ;";
              $resnbs = mysqli_query($conn, $querynbreg);
              $nbregio = mysqli_fetch_row($resnbs);
              $nom = $_POST["nom"];
              $nb_regional = $nbregio[0] + 1;
              $nb_national = $_POST["nb_national"];
              $adh = $_POST["adh"];
              $tel = $_POST["tel"];
              $MONTANT_COTISATION=$_POST["MONTANT_COTISATION"];
              $secteur = $_POST["secteur"];
              $ville = $_POST["ville"];
              $adresse = $_POST["adresse"];
              $respo = $_POST["respo"];
              $mail = $_POST["mail"];
              $gsm = $_POST["gsm"];
              $fax = $_POST["fax"];
              $query = "INSERT INTO `societe`(`nb_national`, `nb_regional`, `ENTREPRISE`, `secteur`, `adher`,`MONTANT_COTISATION`, `Responsable`, `Adress`, `Téléphone`, `Fax`, `GSM`, `VILLE`, `E-MAIL`)
                                      VALUES ('$nb_national','$nb_regional','$nom','$secteur','$adh',$MONTANT_COTISATION,'$respo','$adresse','$tel','$fax','$gsm','$ville','$mail')";
              $conn->query($query);
            }
            if (isset($_POST["updateclient"])) {
              $id = $_POST["id"];
              $nom = $_POST["nom"];
              $Adresse = $_POST["Adresse"];
              $telephone = $_POST["tele"];
              $note = $_POST["note"];
              $queryup = "UPDATE `client` SET `nom_prenom_client`='$nom',`adresse_client`='$Adresse',`tele_client`='$telephone',`note_client`='$note' WHERE `id_client`='$id'";
              $conn->query($queryup);
            }
            if (isset($_GET["id_del"])) {
              $id = $_GET["id_del"];
              $query = "DELETE FROM `societe` WHERE `id`='$id'";
              $conn->query($query);
            }
            ?>
            <div class="card">
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ENTREPRISE</th>
                      <th>Adress</th>
                      <th>Téléphone</th>
                      <th>Fax</th>
                      <th>E-MAIL</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0" id="tabledata">
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
              $page_query = "SELECT * FROM societe ORDER BY Id ASC";
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
            <!-- Content wrapper -->

          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
    </div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script>
    $(document).ready(function() {
      load_data();

      function load_data(page) {
        $.ajax({
          url: "pagenation.php",
          method: "POST",
          data: {
            page: page
          },
          success: function(data) {
            $('#tabledata').html(data);
          }
        });
      }
      $(document).on('click', '.pagination_link', function() {
        var page = $(this).attr("id");
        load_data(page);
      });
      $(document).on('click', '.next', function() {
        var page = $(this).attr("id");
        load_data(page);
      });
      $(document).on('click', '.prev', function() {
        var page = 1;
        load_data(page);
      });

      $(document).on("click", "a.update_entre", function() {
        var enrow = $(this).closest("tr");
        var nameup = enrow.find("td:eq(0)").text();
        var adressup = enrow.find("td:eq(1)").text();
        var teleup = enrow.find("td:eq(2)").text();
        var faxup = enrow.find("td:eq(3)").text();
        var emailfax = enrow.find("td:eq(4)").text();
        // $('#dateup').attr('value', date);
        // $('#lieuup').attr('value', lieu);
        // $('#ref').attr('value', uid);
        // $('#nb_cheque').attr('value', numero_che);
        // $('#montant').attr('value', montant.replace("DH", ""));
        console.log(enrow+" "+nameup);
      });

      var toastPlacementExample = document.querySelector('.toast-placement-ex');

      $(document).on('click', '#addsociete', function() {
        var nom = $("#nom").val();
        var adh = 0;
        var tel = $("#tel").val();
        var MONTANT_COTISATION=$("#MONTANT_COTISATION").val();
        var nb_regional = $("#nb_regional").val();
        var nb_national = $("#nb_national").val();
        var secteur = $("#secteur").val();
        var ville = $("#ville").val();
        var adresse = $("#adresse").val();
        var respo = $("#respo").val();
        var mail = $("#mail").val();
        var gsm = $("#gsm").val();
        var fax = $("#fax").val();
        toastPlacement = new bootstrap.Toast(toastPlacementExample);
        if (nom == "" || secteur == "" || ville == "" || adresse == "" || mail == "" || fax == "") {
          toastPlacement.show();
        } else {
          $.post(
            "Entreprises.php", {
              nom: nom,
              nb_regional: nb_regional,
              nb_national: nb_national,
              adh: adh,
              MONTANT_COTISATION:MONTANT_COTISATION,
              tel: tel,
              secteur: secteur,
              ville: ville,
              adresse: adresse,
              respo: respo,
              mail: mail,
              gsm: gsm,
              fax: fax
            },
            function(data) {
              location.reload(true);
            }
          );
        }
      });

    });
  </script>
  <?php
  include_once "entrecrud.php";
  ?>
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
  <script src="assets/js/ui-toasts.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>