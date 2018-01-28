<?PHP
function get_table_exist(){
include("cfg.php");
	
$tablename = "sef_list_".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function get_total_obligation(){
include("cfg.php");
$tbl = "rsef".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM $tbl WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "sef".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");
$tbl = "sef".$_SESSION['budget'];
$result = $db->prepare("SELECT total FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}

function get_last_column(){
include("cfg.php");

$tablename = "sef".$_SESSION['budget'];
	
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

$tablename = "rsef".$_SESSION['budget'];
	
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

$table_cy = "rsef".$_SESSION['budget'];
$table2 = "sef".$_SESSION['budget']; //20edf_CY table

$tablename = "sef_list_".$_SESSION['budget']; //20_list_(current Year) table
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