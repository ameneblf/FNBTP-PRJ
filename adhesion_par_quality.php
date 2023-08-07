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
if (isset($_GET["pagenation_par_quality"])) {
  $record_per_page = 25;
  $quality = $_GET["quality"];
  echo "<br /> <nav aria-label=\"Page navigation\">
            <ul class=\"pagination pagination-sm justify-content-center\">
              <li class=\"page-item\">
                <a class=\"page-link prev\" href=\"javascript:void(0);\"><i class=\"tf-icon bx bx-chevrons-left\"></i></a>
              </li>";
  $page_query = "SELECT * FROM `adhesion` WHERE qualite_membre=$quality";
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
}else{
  header('refresh:0;url=404.php'); //2 s
  exit();
}
?>