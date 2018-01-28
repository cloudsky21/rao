<?PHP
/*
// tsc1
function tsc1(){
include("cfg.php");
$result = $db->prepare("SELECT sum(tev) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc1allot
function tsc1allot(){
include("cfg.php");
$result = $db->prepare("SELECT tev FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['tev'];
}	
	return $val;
}


// tsc1Bal
function tsc1Bal(){
include("cfg.php");
$result = $db->prepare("SELECT tev FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['tev'];
}	
$getsc1 = tsc1();	
$balance = $val - $getsc1;
update_tsc1($balance);

return $balance;
}


// update tsc1
function update_tsc1($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET tevbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tsc2
function tsc2(){
include("cfg.php");
$result = $db->prepare("SELECT sum(documentation) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc2allot
function tsc2allot(){
include("cfg.php");
$result = $db->prepare("SELECT documentation FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['documentation'];
}	
	return $val;
}


// tsc2Bal
function tsc2Bal(){
include("cfg.php");
$result = $db->prepare("SELECT documentation FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['documentation'];
}	
$getsc2 = tsc2();	
$balance = $val - $getsc2;
update_tsc2($balance);

return $balance;
}


// update tsc2
function update_tsc2($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET documentationbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}










// tsc3
function tsc3(){
include("cfg.php");
$result = $db->prepare("SELECT sum(filipinoweek) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc3allot
function tsc3allot(){
include("cfg.php");
$result = $db->prepare("SELECT filipinoweek FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['filipinoweek'];
}	
	return $val;
}


// tsc3Bal
function tsc3Bal(){
include("cfg.php");
$result = $db->prepare("SELECT filipinoweek FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['filipinoweek'];
}	
$getsc3 = tsc3();	
$balance = $val - $getsc3;
update_tsc3($balance);

return $balance;
}


// update tsc3
function update_tsc3($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET filipinoweekbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tsc4
function tsc4(){
include("cfg.php");
$result = $db->prepare("SELECT sum(healthyactivities) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc4allot
function tsc4allot(){
include("cfg.php");
$result = $db->prepare("SELECT healthyactivities FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['healthyactivities'];
}	
	return $val;
}


// tsc4Bal
function tsc4Bal(){
include("cfg.php");
$result = $db->prepare("SELECT healthyactivities FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['healthyactivities'];
}	
$getsc4 = tsc4();	
$balance = $val - $getsc4;
update_tsc4($balance);

return $balance;
}


// update tsc4
function update_tsc4($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET healthyactivitiesbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tsc5
function tsc5(){
include("cfg.php");
$result = $db->prepare("SELECT sum(periodicexercise) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc5allot
function tsc5allot(){
include("cfg.php");
$result = $db->prepare("SELECT periodicexercise FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['periodicexercise'];
}	
	return $val;
}


// tsc5Bal
function tsc5Bal(){
include("cfg.php");
$result = $db->prepare("SELECT periodicexercise FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['periodicexercise'];
}	
$getsc5 = tsc5();	
$balance = $val - $getsc5;
update_tsc5($balance);

return $balance;
}


// update tsc5
function update_tsc5($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET periodicexercisebal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tsc6
function tsc6(){
include("cfg.php");
$result = $db->prepare("SELECT sum(visitslgus) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc6allot
function tsc6allot(){
include("cfg.php");
$result = $db->prepare("SELECT visitslgus FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['visitslgus'];
}	
	return $val;
}


// tsc6Bal
function tsc6Bal(){
include("cfg.php");
$result = $db->prepare("SELECT visitslgus FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['visitslgus'];
}	
$getsc6 = tsc6();	
$balance = $val - $getsc6;
update_tsc6($balance);

return $balance;
}


// update tsc6
function update_tsc6($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET visitslgusbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tsc7
function tsc7(){
include("cfg.php");
$result = $db->prepare("SELECT sum(orgeffectiviness) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc7allot
function tsc7allot(){
include("cfg.php");
$result = $db->prepare("SELECT orgeffectiviness FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['orgeffectiviness'];
}	
	return $val;
}


// tsc7Bal
function tsc7Bal(){
include("cfg.php");
$result = $db->prepare("SELECT orgeffectiviness FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['orgeffectiviness'];
}	
$getsc7 = tsc7();	
$balance = $val - $getsc7;
update_tsc7($balance);

return $balance;
}


// update tsc7
function update_tsc7($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET orgeffectivinessbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tsc8
function tsc8(){
include("cfg.php");
$result = $db->prepare("SELECT sum(office_maint) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc8allot
function tsc8allot(){
include("cfg.php");
$result = $db->prepare("SELECT office_maint FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['office_maint'];
}	
	return $val;
}


// tsc8Bal
function tsc8Bal(){
include("cfg.php");
$result = $db->prepare("SELECT office_maint FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['office_maint'];
}	
$getsc8 = tsc8();	
$balance = $val - $getsc8;
update_tsc8($balance);

return $balance;
}


// update tsc8
function update_tsc8($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET office_maintbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tsc9
function tsc9(){
include("cfg.php");
$result = $db->prepare("SELECT sum(oplan_eval) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc9allot
function tsc9allot(){
include("cfg.php");
$result = $db->prepare("SELECT oplan_eval FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['oplan_eval'];
}	
	return $val;
}


// tsc9Bal
function tsc9Bal(){
include("cfg.php");
$result = $db->prepare("SELECT oplan_eval FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['oplan_eval'];
}	
$getsc9 = tsc9();	
$balance = $val - $getsc9;
update_tsc9($balance);

return $balance;
}


// update tsc9
function update_tsc9($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET oplan_evalbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tsc10
function tsc10(){
include("cfg.php");
$result = $db->prepare("SELECT sum(yearendperformance) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc10allot
function tsc10allot(){
include("cfg.php");
$result = $db->prepare("SELECT yearendperformance FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['yearendperformance'];
}	
	return $val;
}


// tsc10Bal
function tsc10Bal(){
include("cfg.php");
$result = $db->prepare("SELECT yearendperformance FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['yearendperformance'];
}	
$getsc10 = tsc10();	
$balance = $val - $getsc10;
update_tsc9($balance);

return $balance;
}


// update tsc10
function update_tsc10($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET yearendperformancebal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tsc11
function tsc11(){
include("cfg.php");
$result = $db->prepare("SELECT sum(ophelpdesks) as result FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tsc11allot
function tsc11allot(){
include("cfg.php");
$result = $db->prepare("SELECT ophelpdesks FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['ophelpdesks'];
}	
	return $val;
}


// tsc11Bal
function tsc11Bal(){
include("cfg.php");
$result = $db->prepare("SELECT ophelpdesks FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['ophelpdesks'];
}	
$getsc11 = tsc11();	
$balance = $val - $getsc11;
update_tsc9($balance);

return $balance;
}


// update tsc11
function update_tsc11($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipsc SET ophelpdesksbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	





function get_total_obligation(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(total) AS total FROM sc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");

$result = $db->prepare("SELECT total_balance FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");

$result = $db->prepare("SELECT total FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}











*/




function get_table_exist(){
include("cfg.php");
	
$tablename = "1sp_list_".$_SESSION['budget'];
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



function get_last_column(){
include("cfg.php");

$tablename = "1sp".$_SESSION['budget'];
	
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

$tablename = "r1sp".$_SESSION['budget'];
	
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


?>