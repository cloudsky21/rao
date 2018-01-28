<?PHP
session_start();

include("cfg.php");
include("functions_mooe_mao.php");
require_once 'Classes/PHPExcel.php';

$yy = $_SESSION['budget'];	

$rao = "RAOMAOMOOE".$yy;



header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$rao.xls");
header("Pragma: no-cache");
header("Expires: 0");


$sqlExcel = "SELECT * FROM maomooe WHERE yearm = ?";
$result = $db->prepare($sqlExcel);
$result->execute([$yy]);



$objPHPExcel = new PHPExcel();
$BStyle = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
 
 
 
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('MOOEMAO');
$objPHPExcel->getActiveSheet()->mergeCells('A1:J1'); 
$objPHPExcel->getActiveSheet()->mergeCells('A3:J3'); 
$objPHPExcel->getActiveSheet()->mergeCells('A5:J5');
$objPHPExcel->getActiveSheet()->mergeCells('A7:B7');
$objPHPExcel->getActiveSheet()->mergeCells('F12:J12');
$objPHPExcel->getActiveSheet()->getStyle('A1:J1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A3:J3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A5:J5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A12:A9999')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B12:J14')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('F12')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'REGISTRY OF ALLOTMENT AND OBLIGATION');
$objPHPExcel->getActiveSheet()->SetCellValue('A3', 'Maintenance and Other Operating Expenses');
$objPHPExcel->getActiveSheet()->SetCellValue('A5', 'LGU-Tolosa, Leyte');
$objPHPExcel->getActiveSheet()->getStyle("A7")->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->SetCellValue('A9', 'Fund');
$objPHPExcel->getActiveSheet()->SetCellValue('A7', $yy);
$objPHPExcel->getActiveSheet()->SetCellValue('B9', 'Mayors Office');
$objPHPExcel->getActiveSheet()->SetCellValue('A10','Function/Program/Project');
$objPHPExcel->getActiveSheet()->SetCellValue('A13','Date');
$objPHPExcel->getActiveSheet()->SetCellValue('B12','Ref.');
$objPHPExcel->getActiveSheet()->SetCellValue('B13','AO/AA/');
$objPHPExcel->getActiveSheet()->SetCellValue('B14','ALOBS');
$objPHPExcel->getActiveSheet()->SetCellValue('C13','Claimant');
$objPHPExcel->getActiveSheet()->SetCellValue('D13','Description');
$objPHPExcel->getActiveSheet()->SetCellValue('E12','Total');
$objPHPExcel->getActiveSheet()->SetCellValue('E13','Obligation');
$objPHPExcel->getActiveSheet()->SetCellValue('F12','OBLIGATIONS INCURRED');

$objPHPExcel->getActiveSheet()->SetCellValue('F13','Travelling Expenses');
$objPHPExcel->getActiveSheet()->SetCellValue('F14','05   02   01  010');

$objPHPExcel->getActiveSheet()->SetCellValue('G13','Training & Seminar Expenses');
$objPHPExcel->getActiveSheet()->SetCellValue('G14','05   02   02  010');

$objPHPExcel->getActiveSheet()->SetCellValue('H13','Telephone / Telegraph and Internet');
$objPHPExcel->getActiveSheet()->SetCellValue('H14','05   02  05  030');

$objPHPExcel->getActiveSheet()->SetCellValue('I13','Office Supplies');
$objPHPExcel->getActiveSheet()->SetCellValue('I14','05   02   03   010');

$objPHPExcel->getActiveSheet()->SetCellValue('J13','Office Equipment Maintenance ');
$objPHPExcel->getActiveSheet()->SetCellValue('J14','05   02   13   070');


$objPHPExcel->getActiveSheet()->getStyle('A12:A14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('B12:B14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('C12:C14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('D12:D14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('E12:E14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('F12:J12')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('F13:J14')->applyFromArray($BStyle);



$objPHPExcel->getActiveSheet()->getStyle('E15:J999')->getNumberFormat()->setFormatCode('#,##0.00');


for($col = 'A'; $col !== 'V'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setAutoSize(true);
}
	
$rowCount = 16;
foreach ($result as $row)
{
	
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$row['month'].'-'.$row['day'].'-'.$row['yearm']);
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$row['alobs']);
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,$row['claimant']);
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,$row['description']);
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,$row['total']);
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,$row['tev']);
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,$row['training']);
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,$row['telephone_telegraph']);
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,$row['officeSupplies']);
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,$row['office_equip_maint']);
	
	
	
	$rowCount++;
	
	
}
$getRow = $rowCount + 1;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow.':J'.$getRow)->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow, 'TOTAL:');
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow, get_total_tev());
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow, get_total_trainings());
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow, get_total_telephone());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow, get_total_officeSupplies());	
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow, get_total_eq());
	


$getRow1 = $rowCount + 2;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow1.':J'.$getRow1)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow1, 'BALANCE:');	
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow1, get_tev_bal());		
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow1, get_trainings_bal());		
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow1, get_telephone_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow1, get_officeSupplies_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow1, get_eq_bal());




$getRow2 = $rowCount + 3;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow2.':J'.$getRow2)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow2, 'Allotment:');	
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow2, get_aip_tev());		
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow2, get_aip_training());		
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow2, get_aip_telephone());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow2, get_aip_officeSupplies());
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow2, get_aip_eq());





$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save("php://output");	
	
	
?>	