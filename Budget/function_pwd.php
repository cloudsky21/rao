<?PHP
/*
// tpwd1
function tpwd1(){
include("cfg.php");
$result = $db->prepare("SELECT sum(honorarium) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd1allot
function tpwd1allot(){
include("cfg.php");
$result = $db->prepare("SELECT honorarium FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['honorarium'];
}	
	return $val;
}


// tpwd1Bal
function tpwd1Bal(){
include("cfg.php");
$result = $db->prepare("SELECT honorarium FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['honorarium'];
}	
$getpwd1 = tpwd1();	
$balance = $val - $getpwd1;
update_tpwd1($balance);

return $balance;
}


// update tpwd1
function update_tpwd1($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET honorariumbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tpwd2
function tpwd2(){
include("cfg.php");
$result = $db->prepare("SELECT sum(npdr) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd2allot
function tpwd2allot(){
include("cfg.php");
$result = $db->prepare("SELECT npdr FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['npdr'];
}	
	return $val;
}


// tpwd2Bal
function tpwd2Bal(){
include("cfg.php");
$result = $db->prepare("SELECT npdr FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['npdr'];
}	
$getpwd2 = tpwd2();	
$balance = $val - $getpwd2;
update_tpwd2($balance);

return $balance;
}


// update tpwd2
function update_tpwd2($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET npdrbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}










// tpwd3
function tpwd3(){
include("cfg.php");
$result = $db->prepare("SELECT sum(motor_vehicle_maint) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd3allot
function tpwd3allot(){
include("cfg.php");
$result = $db->prepare("SELECT motor_vehicle_maint FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['motor_vehicle_maint'];
}	
	return $val;
}


// tpwd3Bal
function tpwd3Bal(){
include("cfg.php");
$result = $db->prepare("SELECT motor_vehicle_maint FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['motor_vehicle_maint'];
}	
$getpwd3 = tpwd3();	
$balance = $val - $getpwd3;
update_tpwd3($balance);

return $balance;
}


// update tpwd3
function update_tpwd3($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET motor_vehicle_maintbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tpwd4
function tpwd4(){
include("cfg.php");
$result = $db->prepare("SELECT sum(idsregistration) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd4allot
function tpwd4allot(){
include("cfg.php");
$result = $db->prepare("SELECT idsregistration FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['idsregistration'];
}	
	return $val;
}


// tpwd4Bal
function tpwd4Bal(){
include("cfg.php");
$result = $db->prepare("SELECT idsregistration FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['idsregistration'];
}	
$getpwd4 = tpwd4();	
$balance = $val - $getpwd4;
update_tpwd4($balance);

return $balance;
}


// update tpwd4
function update_tpwd4($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET idsregistrationbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tpwd5
function tpwd5(){
include("cfg.php");
$result = $db->prepare("SELECT sum(skillstraining) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd5allot
function tpwd5allot(){
include("cfg.php");
$result = $db->prepare("SELECT skillstraining FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['skillstraining'];
}	
	return $val;
}


// tpwd5Bal
function tpwd5Bal(){
include("cfg.php");
$result = $db->prepare("SELECT skillstraining FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['skillstraining'];
}	
$getpwd5 = tpwd5();	
$balance = $val - $getpwd5;
update_tpwd5($balance);

return $balance;
}


// update tpwd5
function update_tpwd5($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET skillstrainingbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tpwd6
function tpwd6(){
include("cfg.php");
$result = $db->prepare("SELECT sum(trainingallowance) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd6allot
function tpwd6allot(){
include("cfg.php");
$result = $db->prepare("SELECT trainingallowance FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['trainingallowance'];
}	
	return $val;
}


// tpwd6Bal
function tpwd6Bal(){
include("cfg.php");
$result = $db->prepare("SELECT trainingallowance FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['trainingallowance'];
}	
$getpwd6 = tpwd6();	
$balance = $val - $getpwd6;
update_tpwd6($balance);

return $balance;
}


// update tpwd6
function update_tpwd6($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET trainingallowancebal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tpwd7
function tpwd7(){
include("cfg.php");
$result = $db->prepare("SELECT sum(fassist) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd7allot
function tpwd7allot(){
include("cfg.php");
$result = $db->prepare("SELECT fassist FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fassist'];
}	
	return $val;
}


// tpwd7Bal
function tpwd7Bal(){
include("cfg.php");
$result = $db->prepare("SELECT fassist FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fassist'];
}	
$getpwd7 = tpwd7();	
$balance = $val - $getpwd7;
update_tpwd7($balance);

return $balance;
}


// update tpwd7
function update_tpwd7($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET fassistbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tpwd8
function tpwd8(){
include("cfg.php");
$result = $db->prepare("SELECT sum(drrtraining) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd8allot
function tpwd8allot(){
include("cfg.php");
$result = $db->prepare("SELECT drrtraining FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drrtraining'];
}	
	return $val;
}


// tpwd8Bal
function tpwd8Bal(){
include("cfg.php");
$result = $db->prepare("SELECT drrtraining FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drrtraining'];
}	
$getpwd8 = tpwd8();	
$balance = $val - $getpwd8;
update_tpwd8($balance);

return $balance;
}


// update tpwd8
function update_tpwd8($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET drrtrainingbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tpwd9
function tpwd9(){
include("cfg.php");
$result = $db->prepare("SELECT sum(yearendasses) as result FROM pwds WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tpwd9allot
function tpwd9allot(){
include("cfg.php");
$result = $db->prepare("SELECT yearendasses FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['yearendasses'];
}	
	return $val;
}


// tpwd9Bal
function tpwd9Bal(){
include("cfg.php");
$result = $db->prepare("SELECT yearendasses FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['yearendasses'];
}	
$getpwd9 = tpwd9();	
$balance = $val - $getpwd9;
update_tpwd9($balance);

return $balance;
}


// update tpwd9
function update_tpwd9($value){
include("cfg.php");
$result = $db->prepare("UPDATE aippwd SET yearendassesbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	
*/

function get_total_obligation(){
include("cfg.php");
$tbl = "r1sp".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM `$tbl` WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "1sp".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM `$tbl` WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");
$tbl = "1sp".$_SESSION['budget'];
$result = $db->prepare("SELECT total FROM `$tbl` WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}

function refresh_all()
{
include("cfg.php");

$total="0";
$balance="0";

$table_cy = "r1sp".$_SESSION['budget'];
$table2 = "1sp".$_SESSION['budget']; //20edf_CY table

$tablename = "1sp_list_".$_SESSION['budget']; //20_list_(current Year) table
			$edfCyTbl = $db->prepare("SELECT code, propername FROM $tablename");
				$edfCyTbl->execute();
		
					foreach($edfCyTbl as $list){

						$codelist = $list['code'];
						$namelist = $list['code'].'_bal';
						
							$edfcy = $db->prepare("SELECT `$codelist` as valueList, `$namelist` as balanceList FROM `$table2`");
							$edfcy->execute();
							
							foreach($edfcy as $rrow){
								
								$total +=  $rrow['valueList'];
								
							}
							
							$redfcy = $db->prepare("SELECT SUM($codelist) as total FROM $table_cy");
							$redfcy->execute();
							
							foreach($redfcy as $redfcy_total){
					
								$totalb = $rrow['valueList'] - $redfcy_total['total'];
					
								$update_bal = $db->prepare("UPDATE `$table2` SET $namelist=?");
								$update_bal->execute([$totalb]);
								
								$balance += $rrow['balanceList'];
							}
					}							
							
				$update_total = $db->prepare("UPDATE `$table2` SET total = ?, total_balance = ?");
				$update_total->execute([$total, $balance]);	
	
	
	
}
?>