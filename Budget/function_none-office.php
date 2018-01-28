<?PHP
/*
// tnone1
function tnone1(){
include("cfg.php");
$result = $db->prepare("SELECT sum(aid_barangay) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone1allot
function tnone1allot(){
include("cfg.php");
$result = $db->prepare("SELECT aid_barangay FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['aid_barangay'];
}	
	return $val;
}


// tnone1Bal
function tnone1Bal(){
include("cfg.php");
$result = $db->prepare("SELECT aid_barangay FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['aid_barangay'];
}	
$getnone1 = tnone1();	
$balance = $val - $getnone1;
update_tnone1($balance);

return $balance;
}


// update tnone1
function update_tnone1($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET aid_barangaybal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tnone2
function tnone2(){
include("cfg.php");
$result = $db->prepare("SELECT sum(death_indemnity) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone2allot
function tnone2allot(){
include("cfg.php");
$result = $db->prepare("SELECT death_indemnity FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['death_indemnity'];
}	
	return $val;
}


// tnone2Bal
function tnone2Bal(){
include("cfg.php");
$result = $db->prepare("SELECT death_indemnity FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['death_indemnity'];
}	
$getnone2 = tnone2();	
$balance = $val - $getnone2;
update_tnone2($balance);

return $balance;
}


// update tnone2
function update_tnone2($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET death_indemnitybal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}










// tnone3
function tnone3(){
include("cfg.php");
$result = $db->prepare("SELECT sum(fa_Kbrgy) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone3allot
function tnone3allot(){
include("cfg.php");
$result = $db->prepare("SELECT fa_Kbrgy FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fa_Kbrgy'];
}	
	return $val;
}


// tnone3Bal
function tnone3Bal(){
include("cfg.php");
$result = $db->prepare("SELECT fa_Kbrgy FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fa_Kbrgy'];
}	
$getnone3 = tnone3();	
$balance = $val - $getnone3;
update_tnone3($balance);

return $balance;
}


// update tnone3
function update_tnone3($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET fa_Kbrgybal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tnone4
function tnone4(){
include("cfg.php");
$result = $db->prepare("SELECT sum(aids) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone4allot
function tnone4allot(){
include("cfg.php");
$result = $db->prepare("SELECT aids FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['aids'];
}	
	return $val;
}


// tnone4Bal
function tnone4Bal(){
include("cfg.php");
$result = $db->prepare("SELECT aids FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['aids'];
}	
$getnone4 = tnone4();	
$balance = $val - $getnone4;
update_tnone4($balance);

return $balance;
}


// update tnone4
function update_tnone4($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET aidsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tnone5
function tnone5(){
include("cfg.php");
$result = $db->prepare("SELECT sum(loyalty_award) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone5allot
function tnone5allot(){
include("cfg.php");
$result = $db->prepare("SELECT loyalty_award FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['loyalty_award'];
}	
	return $val;
}


// tnone5Bal
function tnone5Bal(){
include("cfg.php");
$result = $db->prepare("SELECT loyalty_award FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['loyalty_award'];
}	
$getnone5 = tnone5();	
$balance = $val - $getnone5;
update_tnone5($balance);

return $balance;
}


// update tnone5
function update_tnone5($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET loyalty_awardbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tnone6
function tnone6(){
include("cfg.php");
$result = $db->prepare("SELECT sum(csmonth_celeb) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone6allot
function tnone6allot(){
include("cfg.php");
$result = $db->prepare("SELECT csmonth_celeb FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['csmonth_celeb'];
}	
	return $val;
}


// tnone6Bal
function tnone6Bal(){
include("cfg.php");
$result = $db->prepare("SELECT csmonth_celeb FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['csmonth_celeb'];
}	
$getnone6 = tnone6();	
$balance = $val - $getnone6;
update_tnone6($balance);

return $balance;
}


// update tnone6
function update_tnone6($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET csmonth_celebbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tnone7
function tnone7(){
include("cfg.php");
$result = $db->prepare("SELECT sum(p_meds) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone7allot
function tnone7allot(){
include("cfg.php");
$result = $db->prepare("SELECT p_meds FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_meds'];
}	
	return $val;
}


// tnone7Bal
function tnone7Bal(){
include("cfg.php");
$result = $db->prepare("SELECT p_meds FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_meds'];
}	
$getnone7 = tnone7();	
$balance = $val - $getnone7;
update_tnone7($balance);

return $balance;
}


// update tnone7
function update_tnone7($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET p_medsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tnone8
function tnone8(){
include("cfg.php");
$result = $db->prepare("SELECT sum(philhealth) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone8allot
function tnone8allot(){
include("cfg.php");
$result = $db->prepare("SELECT philhealth FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['philhealth'];
}	
	return $val;
}


// tnone8Bal
function tnone8Bal(){
include("cfg.php");
$result = $db->prepare("SELECT philhealth FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['philhealth'];
}	
$getnone8 = tnone8();	
$balance = $val - $getnone8;
update_tnone8($balance);

return $balance;
}


// update tnone8
function update_tnone8($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET philhealthbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tnone9
function tnone9(){
include("cfg.php");
$result = $db->prepare("SELECT sum(healthfund) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone9allot
function tnone9allot(){
include("cfg.php");
$result = $db->prepare("SELECT healthfund FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['healthfund'];
}	
	return $val;
}


// tnone9Bal
function tnone9Bal(){
include("cfg.php");
$result = $db->prepare("SELECT healthfund FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['healthfund'];
}	
$getnone9 = tnone9();	
$balance = $val - $getnone9;
update_tnone9($balance);

return $balance;
}


// update tnone9
function update_tnone9($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET healthfundbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tnone10
function tnone10(){
include("cfg.php");
$result = $db->prepare("SELECT sum(masamasid) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone10allot
function tnone10allot(){
include("cfg.php");
$result = $db->prepare("SELECT masamasid FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['masamasid'];
}	
	return $val;
}


// tnone10Bal
function tnone10Bal(){
include("cfg.php");
$result = $db->prepare("SELECT masamasid FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['masamasid'];
}	
$getnone10 = tnone10();	
$balance = $val - $getnone10;
update_tnone10($balance);

return $balance;
}


// update tnone10
function update_tnone10($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET masamasidbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tnone11
function tnone11(){
include("cfg.php");
$result = $db->prepare("SELECT sum(legal_services) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone11allot
function tnone11allot(){
include("cfg.php");
$result = $db->prepare("SELECT legal_services FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['legal_services'];
}	
	return $val;
}


// tnone11Bal
function tnone11Bal(){
include("cfg.php");
$result = $db->prepare("SELECT legal_services FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['legal_services'];
}	
$getnone11 = tnone11();	
$balance = $val - $getnone11;
update_tnone11($balance);

return $balance;
}


// update tnone11
function update_tnone11($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET legal_servicesbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	







// tnone12
function tnone12(){
include("cfg.php");
$result = $db->prepare("SELECT sum(brgy_road) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone12allot
function tnone12allot(){
include("cfg.php");
$result = $db->prepare("SELECT brgy_road FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['brgy_road'];
}	
	return $val;
}


// tnone12Bal
function tnone12Bal(){
include("cfg.php");
$result = $db->prepare("SELECT brgy_road FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['brgy_road'];
}	
$getnone12 = tnone12();	
$balance = $val - $getnone12;
update_tnone12($balance);

return $balance;
}


// update tnone12
function update_tnone12($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET brgy_roadbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	









// tnone13
function tnone13(){
include("cfg.php");
$result = $db->prepare("SELECT sum(mun_bldg) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone13allot
function tnone13allot(){
include("cfg.php");
$result = $db->prepare("SELECT mun_bldg FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['mun_bldg'];
}	
	return $val;
}


// tnone13Bal
function tnone13Bal(){
include("cfg.php");
$result = $db->prepare("SELECT mun_bldg FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['mun_bldg'];
}	
$getnone13 = tnone13();	
$balance = $val - $getnone13;
update_tnone13($balance);

return $balance;
}


// update tnone13
function update_tnone13($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET mun_bldgbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	


// tnone14
function tnone14(){
include("cfg.php");
$result = $db->prepare("SELECT sum(mun_vehicle) as result FROM noneoffice WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tnone14allot
function tnone14allot(){
include("cfg.php");
$result = $db->prepare("SELECT mun_vehicle FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['mun_vehicle'];
}	
	return $val;
}


// tnone14Bal
function tnone14Bal(){
include("cfg.php");
$result = $db->prepare("SELECT mun_vehicle FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['mun_vehicle'];
}	
$getnone14 = tnone14();	
$balance = $val - $getnone14;
update_tnone14($balance);

return $balance;
}


// update tnone14
function update_tnone14($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipnoneoffice SET mun_vehiclebal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}


*/





function get_total_obligation(){
include("cfg.php");
$tbl = "rnoneoffice".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM `$tbl` WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "noneoffice".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM `$tbl` WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");
$tbl = "noneoffice".$_SESSION['budget'];
$result = $db->prepare("SELECT total FROM `$tbl` WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}





function get_last_column(){
include("cfg.php");

$tablename = "noneoffice".$_SESSION['budget'];
	
try {
$checker = $db->prepare("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ? AND TABLE_NAME =? ORDER BY ORDINAL_POSITION DESC LIMIT 1");
$checker->execute(["budgetsystem",$tablename]);
	foreach($checker as $row){
		
		$result= $row['COLUMN_NAME'];
	
	}
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}




function get_last_column_rao(){
include("cfg.php");

$tablename = "rnoneoffice".$_SESSION['budget'];
	
try {
$checker = $db->prepare("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ? AND TABLE_NAME =? ORDER BY ORDINAL_POSITION DESC LIMIT 1");
$checker->execute(["budgetsystem",$tablename]);
	foreach($checker as $row){
		
		$result= $row['COLUMN_NAME'];
	
	}
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}


function refresh_all()
{
include("cfg.php");

$total="0";
$balance="0";

$table_cy = "rnoneoffice".$_SESSION['budget'];
$table2 = "noneoffice".$_SESSION['budget']; //20edf_CY table

$tablename = "noneoffice_list_".$_SESSION['budget']; //20_list_(current Year) table
			$edfCyTbl = $db->prepare("SELECT code, propername FROM `$tablename`");
				$edfCyTbl->execute();
		
					foreach($edfCyTbl as $list){

						$codelist = $list['code'];
						$namelist = $list['code'].'_bal';
						
							$edfcy = $db->prepare("SELECT `$codelist` as valueList, `$namelist` as balanceList FROM `$table2`");
							$edfcy->execute();
							
							foreach($edfcy as $rr){
								
								$total +=  $rr['valueList'];
								
							}
							
							$redfcy = $db->prepare("SELECT SUM($codelist) as total FROM $table_cy");
							$redfcy->execute();
							
							foreach($redfcy as $redfcy_total){
					
								$totalb = $rr['valueList'] - $redfcy_total['total'];
					
								$update_bal = $db->prepare("UPDATE `$table2` SET $namelist=?");
								$update_bal->execute([$totalb]);
								
								$balance += $rr['balanceList'];
							}
					}							
							
				$update_total = $db->prepare("UPDATE `$table2` SET total = ?, total_balance = ?");
				$update_total->execute([$total, $balance]);	
	
	
	
}


?>