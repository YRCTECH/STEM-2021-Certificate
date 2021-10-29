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
        $sql = "SELECT * FROM yrc_certificate WHERE c_id = '$id'";
        $query = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_assoc($query);
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            if ($fetch['c_awards'] == '') {
                if ($fetch['c_status'] == 'ครู') {
                    $pdf = new PDF('L', 'mm', array(928, 656));
                    $pdf->AddPage('L');
                    $pdf->Image('assets/images/form_cer.png', 0, 0, 928, 656);

                    $pdf->AddFont('Noto', '', 'THSarabunNew.php');
                    $pdf->AddFont('NotoB', '', 'THSarabunNew-Bold.php');

                    $pdf->SetFont('Noto', '', 40);
                    $pdf->SetXY(790, 20);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_ref_code'] . '-2564'), 0, 1, 'C');

                    $pdf->SetFont('NotoB', '', 110);
                    $pdf->SetXY(210, 265);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_name']), 0, 1, 'C');

                    $pdf->SetFont('Noto', '', 110);
                    $pdf->SetXY(210, 305);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'ครูผู้ฝึกสอนได้เข้าร่วม'), 0, 1, 'C');
                    $pdf->SetXY(210, 330);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_type']), 0, 1, 'C');
                    $pdf->SetXY(210, 355);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'สาขา' . $fetch['c_subject'] . ' ระดับ' . $fetch['c_grade']), 0, 1, 'C');

                    $pdf->SetTitle($fetch['c_name'],[true]);

                    $pdf->Output();
                } else {
                    $pdf = new PDF('L', 'mm', array(928, 656));
                    $pdf->AddPage('L');
                    $pdf->Image('assets/images/form_cer.png', 0, 0, 928, 656);

                    $pdf->AddFont('Noto', '', 'THSarabunNew.php');
                    $pdf->AddFont('NotoB', '', 'THSarabunNew-Bold.php');

                    $pdf->SetFont('Noto', '', 40);
                    $pdf->SetXY(790, 20);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_ref_code'] . '-2564'), 0, 1, 'C');

                    $pdf->SetFont('NotoB', '', 110);
                    $pdf->SetXY(210, 265);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_name']), 0, 1, 'C');

                    $pdf->SetFont('Noto', '', 80);
                    $pdf->SetXY(210, 305);
                    $pdf->SetTextColor(33, 60, 130);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'ได้เข้าร่วม'), 0, 1, 'C');
                    $pdf->SetXY(210, 330);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_type']), 0, 1, 'C');
                    $pdf->SetXY(210, 355);
                    $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'สาขา' . $fetch['c_subject'] . ' ระดับ' . $fetch['c_grade']), 0, 1, 'C');
                    $pdf->SetTitle($fetch['c_name'],[true]);

                    $pdf->Output();
                }
            }
            if ($fetch['c_status'] == 'ครู') {
                $pdf = new PDF('L', 'mm', array(928, 656));
                $pdf->AddPage('L');
                $pdf->Image('assets/images/form_cer.png', 0, 0, 928, 656);

                $pdf->AddFont('Noto', '', 'THSarabunNew.php');
                $pdf->AddFont('NotoB', '', 'THSarabunNew-Bold.php');

                $pdf->SetFont('Noto', '', 40);
                $pdf->SetXY(790, 20);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_ref_code'] . '-2564'), 0, 1, 'C');

                $pdf->SetFont('NotoB', '', 110);
                $pdf->SetXY(210, 265);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_name']), 0, 1, 'C');

                $pdf->SetFont('Noto', '', 80);
                $pdf->SetXY(210, 305);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'ครูผู้ฝึกสอนนักเรียนได้รับรางวัล ' . $fetch['c_awards_detail'] . 'ระดับ' . $fetch['c_awards']), 0, 1, 'C');
                $pdf->SetXY(210, 330);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_type']), 0, 1, 'C');
                $pdf->SetXY(210, 355);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'สาขา' . $fetch['c_subject'] . ' ระดับ' . $fetch['c_grade']), 0, 1, 'C');
                $pdf->SetTitle($fetch['c_name'],[true]);

                $pdf->Output();
            } else {
                $pdf = new PDF('L', 'mm', array(928, 656));
                $pdf->AddPage('L');
                $pdf->Image('assets/images/form_cer.png', 0, 0, 928, 656);

                $pdf->AddFont('Noto', '', 'THSarabunNew.php');
                $pdf->AddFont('NotoB', '', 'THSarabunNew-Bold.php');

                $pdf->SetFont('Noto', '', 40);
                $pdf->SetXY(790, 20);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_ref_code'] . '-2564'), 0, 1, 'C');

                $pdf->SetFont('NotoB', '', 110);
                $pdf->SetXY(210, 265);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_name']), 0, 1, 'C');

                $pdf->SetFont('Noto', '', 80);
                $pdf->SetXY(210, 305);
                $pdf->SetTextColor(33, 60, 130);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'ได้รับรางวัล ' . $fetch['c_awards_detail'] . 'ระดับ' . $fetch['c_awards']), 0, 1, 'C');
                $pdf->SetXY(210, 330);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', $fetch['c_type']), 0, 1, 'C');
                $pdf->SetXY(210, 355);
                $pdf->Cell(0, 15, iconv('utf-8', 'cp874', 'สาขา' . $fetch['c_subject'] . ' ระดับ' . $fetch['c_grade']), 0, 1, 'C');

                $pdf->SetTitle($fetch['c_name'],[true]);
                $pdf->Output();
            }
        } else {
            header('location:index.php');
        }
    }
} else {
    header('location:index.php');
}
