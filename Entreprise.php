<?php
require('fpdf/fpdf.php');
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
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);

        //dummy cell to put logo
        //$this->Cell(12,0,'',0,0);
        //is equivalent to:
        $this->Cell(12);

        //put logo
        $this->Image('assets/img/favicon/Asset 1.png', 170, 5, 30);


        //dummy cell to give line spacing
        //$this->Cell(0,5,'',0,1);
        //is equivalent to:
        $this->Cell(0, 20, '', 0, 0);
        $this->Ln(20);

    }
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM societe WHERE Id=$id";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($res);
    $pdf->Cell(60, 10, 'ENTREPRISE ', 0, 0);
    if ($row[1] == '') {
        $pdf->Cell(135, 10, ":" . $row[4] . '/00000', 0, 1);
    } else
        $pdf->Cell(135, 10, ":" . $row[4] . '/' . $row[1], 0, 1);
    $pdf->Cell(60, 10, 'MONTANT DE COTISATION ', 0, 0);
    $pdf->Cell(60, 10, ":" . $row[7], 0, 0);
    $pdf->Cell(25, 10, 'SECTEUR ', 0, 0);
    if ($row[5] == "") {
        $pdf->Cell(25, 10, ":NULL", 0, 1);
    } else
        $pdf->Cell(25, 10, ":" . $row[5], 0, 1);


    $pdf->Cell(25, 10, 'FAX ', 0, 0);
    $pdf->Cell(52, 10, ":" . $row[11], 0, 1);

    $pdf->Line(80, 80, 120, 80);


    $pdf->Cell(55, 8, 'ADRESS ', 0, 0);
    $pdf->Cell(58, 8, ":" . $row[9] . ', ' . $row[13] . ".", 0, 1);
    $pdf->Ln(20);
    $pdf->Cell(55, 8, 'RESPONSABLE', 0, 0);
    $pdf->Cell(70, 8, ': Mr. ' . $row[8], 0, 1);

    $pdf->Cell(55, 8, 'GSM', 0, 0);
    $pdf->Cell(70, 8, ': ' . $row[12], 0, 1);

    $pdf->Cell(55, 8, 'FAX', 0, 0);
    $pdf->Cell(70, 8, ': ' . $row[10], 0, 1);


    $mails = explode(";", $row[14]);
    if (count($mails) > 0) {
        $pdf->Cell(55, 8, 'MAILS :', 0, 1);
        for ($i = 0; $i < count($mails); $i++) {
            $pdf->Cell(55, 8, '', 0, 0);
            $pdf->Cell(113, 8, '' . $mails[$i], 0, 1);
        }

    } else {
        $pdf->Cell(55, 8, 'MAIL', 0, 0);
        $pdf->Cell(70, 8, ': ' . $row[14], 0, 1);
    }



    //$pdf->Line(155, 75, 195, 75);
    $pdf->Ln(100); //Line break
    $pdf->Cell(140, 5, '', 0, 0);
    $pdf->Cell(50, 5, ': Signature', 0, 1, 'C');

}

$pdf->Output();
?>
