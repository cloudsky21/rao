<?PHP
session_start();

include("config.php");
include("functions_ps_lcr.php");
require_once 'Classes/PHPExcel.php';
mysqli_set_charset($db,"utf8");
$yy = $_SESSION['budget'];	

$rao = "RAOLCR".$yy;



header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$rao.xls");
header("Pragma: no-cache");
header("Expires: 0");


$sqlExcel = "SELECT * FROM pslcr WHERE year_transact = '$yy'";
$result = mysqli_query($db,$sqlExcel);



$objPHPExcel = new PHPExcel();
$BStyle = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
 
 
 
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('PSMPDO');
$objPHPExcel->getActiveSheet()->mergeCells('A1:S1'); 
$objPHPExcel->getActiveSheet()->mergeCells('A3:S3'); 
$objPHPExcel->getActiveSheet()->mergeCells('A5:S5');
$objPHPExcel->getActiveSheet()->mergeCells('A7:B7');
$objPHPExcel->getActiveSheet()->mergeCells('F12:U12');
$objPHPExcel->getActiveSheet()->getStyle('A1:S1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A3:S3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A5:S5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A12:A9999')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B12:S14')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('F12')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'REGISTRY OF ALLOTMENT AND OBLIGATION');
$objPHPExcel->getActiveSheet()->SetCellValue('A3', 'Personal Services');
$objPHPExcel->getActiveSheet()->SetCellValue('A5', 'LGU-Tolosa, Leyte');
$objPHPExcel->getActiveSheet()->getStyle("A7")->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->SetCellValue('A9', 'Fund');
$objPHPExcel->getActiveSheet()->SetCellValue('A7', $yy);
$objPHPExcel->getActiveSheet()->SetCellValue('B9', 'Local Civil Registrar');
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

$objPHPExcel->getActiveSheet()->SetCellValue('F13','Salaries');
$objPHPExcel->getActiveSheet()->SetCellValue('F14','05   01   01   010');

$objPHPExcel->getActiveSheet()->SetCellValue('G13','PERA');
$objPHPExcel->getActiveSheet()->SetCellValue('G14','05   01   02  	010');

$objPHPExcel->getActiveSheet()->SetCellValue('H13','RA');
$objPHPExcel->getActiveSheet()->SetCellValue('H14','05   01   02  	020');

$objPHPExcel->getActiveSheet()->SetCellValue('I13','TA');
$objPHPExcel->getActiveSheet()->SetCellValue('I14','05   01   02  	030');

$objPHPExcel->getActiveSheet()->SetCellValue('J13','Clothing Allowance');
$objPHPExcel->getActiveSheet()->SetCellValue('J14','05   01   02  	040');

$objPHPExcel->getActiveSheet()->SetCellValue('K13','Year End Bonus');
$objPHPExcel->getActiveSheet()->SetCellValue('K14','05   01   02  	140');

$objPHPExcel->getActiveSheet()->SetCellValue('L13','Cash Gift');
$objPHPExcel->getActiveSheet()->SetCellValue('L14','05   01   02  	150');

$objPHPExcel->getActiveSheet()->SetCellValue('M13','Mid-Year Bonus');
$objPHPExcel->getActiveSheet()->SetCellValue('M14','05   01   02  	990-1');

$objPHPExcel->getActiveSheet()->SetCellValue('N13','PIB');
$objPHPExcel->getActiveSheet()->SetCellValue('N14','05   01   02  	080');

$objPHPExcel->getActiveSheet()->SetCellValue('O13','Life and Retirement Contributions');
$objPHPExcel->getActiveSheet()->SetCellValue('O14','05   01   03  	010');

$objPHPExcel->getActiveSheet()->SetCellValue('P13','Pag-Ibig Contributions');
$objPHPExcel->getActiveSheet()->SetCellValue('P14','05   01   03  	020');

$objPHPExcel->getActiveSheet()->SetCellValue('Q13','PhilHealth Contributions');
$objPHPExcel->getActiveSheet()->SetCellValue('Q14','05   01   03  	030');

$objPHPExcel->getActiveSheet()->SetCellValue('R13','ECC Contributions');
$objPHPExcel->getActiveSheet()->SetCellValue('R14','05   01   03  	040');

$objPHPExcel->getActiveSheet()->SetCellValue('S13','Other Personel');
$objPHPExcel->getActiveSheet()->SetCellValue('S14','Benefits');



$objPHPExcel->getActiveSheet()->getStyle('A12:A14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('B12:B14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('C12:C14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('D12:D14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('E12:E14')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('F12:S12')->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->getStyle('F13:S14')->applyFromArray($BStyle);



$objPHPExcel->getActiveSheet()->getStyle('E15:S999')->getNumberFormat()->setFormatCode('#,##0.00');


for($col = 'A'; $col !== 'V'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setAutoSize(true);
}
	
$rowCount = 16;
while ($row = mysqli_fetch_assoc($result))
{
	
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$row['month_transact'].'-'.$row['day_transact'].'-'.$row['year_transact']);
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$row['alobs']);
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,$row['claimant']);
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,$row['description']);
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,$row['total']);
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,$row['salaries']);
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,$row['PERA']);
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,$row['RA']);
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,$row['TA']);
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,$row['clothing_allowance']);
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount,$row['year_end_bonus']);
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount,$row['cash_gift']);
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,$row['mid_year_bonus']);
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,$row['pib']);
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,$row['life_retirement']);
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,$row['pag_ibig']);
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,$row['philhealth']);
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,$row['ecc']);
	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount,$row['other_personel_benefits']);
	
	$rowCount++;
	
	
}
$getRow = $rowCount + 1;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow.':S'.$getRow)->applyFromArray($BStyle);

$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow, 'TOTAL:');
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow, get_total_salaries());
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow, get_total_PERA());
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow, get_total_RA());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow, get_total_TA());	
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow, get_total_cloth());
$objPHPExcel->getActiveSheet()->SetCellValue('K'.$getRow, get_total_yearend());		
$objPHPExcel->getActiveSheet()->SetCellValue('L'.$getRow, get_total_cashgft());	
$objPHPExcel->getActiveSheet()->SetCellValue('M'.$getRow, get_total_mid_year());
$objPHPExcel->getActiveSheet()->SetCellValue('N'.$getRow, get_total_pib());	
$objPHPExcel->getActiveSheet()->SetCellValue('O'.$getRow, get_total_gsis());		
$objPHPExcel->getActiveSheet()->SetCellValue('P'.$getRow, get_total_hdmf());	
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$getRow, get_total_care());	
$objPHPExcel->getActiveSheet()->SetCellValue('R'.$getRow, get_total_ecc());
$objPHPExcel->getActiveSheet()->SetCellValue('S'.$getRow, get_total_others());

$getRow1 = $rowCount + 2;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow1.':S'.$getRow1)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow1, 'Total Balance:');	
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow1, get_salaries_bal());		
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow1, get_PERA_bal());		
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow1, get_RA_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow1, get_TA_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow1, get_cloth_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('K'.$getRow1, get_yearend_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('L'.$getRow1, get_cashgft_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('M'.$getRow1, get_mid_year_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('N'.$getRow1, get_pib_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('O'.$getRow1, get_gsis_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('P'.$getRow1, get_hdmf_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$getRow1, get_care_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('R'.$getRow1, get_ecc_bal());
$objPHPExcel->getActiveSheet()->SetCellValue('S'.$getRow1, get_others_bal());

$getRow2 = $rowCount + 3;
$objPHPExcel->getActiveSheet()->getStyle('A'.$getRow2.':S'.$getRow2)->applyFromArray($BStyle);
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$getRow2, 'Allotment:');	
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$getRow2, get_aip_salaries());		
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$getRow2, get_aip_pera());		
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$getRow2, get_aip_ra());
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$getRow2, get_aip_ta());
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$getRow2, get_aip_cloth());
$objPHPExcel->getActiveSheet()->SetCellValue('K'.$getRow2, get_aip_yend());
$objPHPExcel->getActiveSheet()->SetCellValue('L'.$getRow2, get_aip_cash());
$objPHPExcel->getActiveSheet()->SetCellValue('M'.$getRow2, get_aip_mid());
$objPHPExcel->getActiveSheet()->SetCellValue('N'.$getRow2, get_aip_pib());
$objPHPExcel->getActiveSheet()->SetCellValue('O'.$getRow2, get_aip_gsis());
$objPHPExcel->getActiveSheet()->SetCellValue('P'.$getRow2, get_aip_hdmf());
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$getRow2, get_aip_ph());
$objPHPExcel->getActiveSheet()->SetCellValue('R'.$getRow2, get_aip_ecc());
$objPHPExcel->getActiveSheet()->SetCellValue('S'.$getRow2, get_aip_other());


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save("php://output");	
	
	
?>	