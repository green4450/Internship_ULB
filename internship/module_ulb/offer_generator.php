<?php
include './include/auth.php';
include '../src/php/dbh.php';
require('../assets/fpdf181/fpdf.php');
$duration=" ";
$id = $_SESSION['id'];
$logo = " ";
$sql = "Select ulb_logo From ubl_register Where ulb_company_id = '$id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
    $logo = $row['ulb_logo'];
}
$student_id=$_GET['uid'];  
$name = $_SESSION['organisation'];
$date = date("d/m/y");
$sql = "SELECT r.student_first_name,r.student_last_name,duration,r.student_uid,g.title,g.internship_type,l.starting_date,l.ending_date,l.contact_info,g.department,g.stiphen FROM `post_internship_government` g inner join government_internship_apply a on g.company_id = a.company_id inner join student_register r on a.student_uid = r.student_uid inner join letter_format l on l.internship_id = g.uid where r.student_uid='$student_id'and a.company_id='$id'";
$res = mysqli_query($conn,$sql);
$student_id = $student_id.$name;
while($row = mysqli_fetch_assoc($res))
{
$duration = $row['duration'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('./Offer.png',-2,-2,215,300);
$pdf->SetFont('Arial','B',15);
$pdf->Image('../uploads/logo/'.$logo.'',10,10,30,30);
// Move to the right
$pdf->Ln(52);
$pdf->Cell(79);
// Framed title
$pdf->Cell(55,5,'Offer Letter',0,'C');
$pdf->Cell(10);
// Line break
$pdf->Ln(5);  
$pdf->SetFont('Arial', '', 10);
$pdf->Ln(5);//Line break
$pdf->Cell(110, 5, 'Dear Mr/Ms. '.$row['student_first_name'].' '.$row['student_last_name'].'', 2,1);
$pdf->Ln(2);
$pdf->Cell(55, 5, 'We would like to congratulate you on being selected for The Urban Learning Internship Program as an intern  to work ', 2, 1);
$pdf->Ln(2);
$pdf->Cell(55, 5,'and assist in the Department of '.$row['department'].' in '.$_SESSION['organisation'].'. We are pleased to offer you an internship',2, 1);
$pdf->Ln(2);
$pdf->Cell(55, 5,'for the period of '.$row['duration'].' beginning from '.$row['starting_date'].' to '.$row['ending_date'].'.',2, 1);
$pdf->Ln(2);
$pdf->Cell(55, 5,'During the internship you will be required to discharge the responsibilities allocated by the ULB in furtherance of your role. ',2, 1);
$pdf->Ln(2);
$pdf->Cell(55,5,'The Urban Local Body may also assign additional responsibilities as needed to promote effective learning. The offer is ',2,1);
$pdf->Ln(2);
$pdf->Cell(55,5,'subject to the acceptance of the following terms:',2,1);
$pdf->Ln(3);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Deliverables:',2,1);
$pdf->Ln(2);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55,5,'In the course of the internship, you will be required to meet reporting requirements as directed by the reporting officer.',2,1);//Line break
$pdf->ln(2);
$pdf->SetFont('Arial','BU', 10);
$pdf->Cell(55,5,'Stipend and Allowances:',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55,5,'You will be paid a stipend of Rs.'.$row['stiphen'].' on a monthly basis',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'You may be reimbursed for expenses incurred in completion of the assignments at the ULBs discretion with prior',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,' approval.',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Workplace Conduct:',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55,5,'You will be required to adhere to professional standards of workplace conduct.',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Confidentiality and Deliverable Ownership',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55,5,'During the course of the internship, you may be given access to sensitive and priveleged information in furtherance ',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'of the work.You will be required to maintain confidentiality of such information failing which the ',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'internship would stand terminated and you may be liable to legal action.',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'The final ownership & responsibility of the reports, designs, tools and other intellectual property generated ',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'during the the course of the internship will lie with the Urban Local Body. The ULB may allow use of such',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,' property for academic purposes on a case-to-case basis.',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Disputes:',2,1);
$pdf->ln(2);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(55,5,'During the course of the internship, any dispute arising between you and the Urban Local Body will be settled',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'amicably in accordance with the law of the land.',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'If you agree to the above terms of the offer of internship, please send a countersigned copy of the offer let-',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'-ter to '.$_SESSION['user'].' indicating your acceptance. ',2,1);
$pdf->ln(2);
$pdf->Cell(55,5,'Sincerely, ',2,1);
$pdf->ln(2);
$pdf->Cell(13,5,'Date :',0,0);
$pdf->Cell(150,5,$date,2,0);
$pdf->Ln(1);
$pdf->Cell(150,5,' ',2,0);
$pdf->Cell(10,1,$_SESSION['user'],2,0);
$pdf->Output('../uploads/offer/'.$student_id.'.pdf','F');  
}
header("location:./interview_management.php?task=offer_generated"); 
?>