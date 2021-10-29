<?php
require('./fpdf/fpdf_thai.php');
require('./connect/connect.php');

class PDF extends FPDF_Thai
{
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id == '') {
        header('location:index.php');
    } else {
        $sql = "SELECT * FROM custom_certificate WHERE c_id = '$id'";
        $query = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_assoc($query);
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $pdf = new PDF('L', 'mm', array(928, 656));
            $pdf->AddPage('L');
            $pdf->Image('assets/images/form_cer.png', 0, 0, 928, 656);

            $pdf->AddFont('Noto', '', 'THSarabunNew.php');
            $pdf->AddFont('NotoB', '', 'THSarabunNew-Bold.php');

            $pdf->SetFont('Noto', '', 40);
            $pdf->SetXY(790,20);
            $pdf->SetTextColor(33, 60, 130);
            $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_ref_code']. '-2564'), 0, 1, 'C');

            $pdf->SetFont('NotoB', '', 110);
            $pdf->SetXY(210, 280);
            $pdf->SetTextColor(33, 60, 130);
            $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_name']), 0, 1, 'C');

            $pdf->SetFont('Noto', '', 80);
            $pdf->SetXY(210, 325);
            $pdf->SetTextColor(33, 60, 130);
            $pdf->Cell(0, 15, iconv('utf-8', 'cp874',$fetch['c_type1']), 0, 1, 'C');
            $pdf->SetXY(210, 350);
            $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_type2'] ), 0, 1, 'C');

                $pdf->SetTitle($fetch['c_name'],[true]);
                $pdf->Output();
            
           
        } else {
            header('location:index.php');
        }
    }
} else {
    header('location:index.php');
}
