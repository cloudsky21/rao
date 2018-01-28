<?PHP
/*
// tira1
function tira1(){
include("cfg.php");
$result = $db->prepare("SELECT sum(engulayan) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira1allot
function tira1allot(){
include("cfg.php");
$result = $db->prepare("SELECT engulayan FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['engulayan'];
}	
	return $val;
}


// tira1Bal
function tira1Bal(){
include("cfg.php");
$result = $db->prepare("SELECT engulayan FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['engulayan'];
}	
$getira1 = tira1();	
$balance = $val - $getira1;
update_tira1($balance);

return $balance;
}


// update tira1
function update_tira1($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET engulayanbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tira2
function tira2(){
include("cfg.php");
$result = $db->prepare("SELECT sum(teenpreg) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira2allot
function tira2allot(){
include("cfg.php");
$result = $db->prepare("SELECT teenpreg FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['teenpreg'];
}	
	return $val;
}


// tira2Bal
function tira2Bal(){
include("cfg.php");
$result = $db->prepare("SELECT teenpreg FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['teenpreg'];
}	
$getira2 = tira2();	
$balance = $val - $getira2;
update_tira2($balance);

return $balance;
}


// update tira2
function update_tira2($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET teenpregbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}










// tira3
function tira3(){
include("cfg.php");
$result = $db->prepare("SELECT sum(dbaseforchildren) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira3allot
function tira3allot(){
include("cfg.php");
$result = $db->prepare("SELECT dbaseforchildren FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['dbaseforchildren'];
}	
	return $val;
}


// tira3Bal
function tira3Bal(){
include("cfg.php");
$result = $db->prepare("SELECT dbaseforchildren FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['dbaseforchildren'];
}	
$getira3 = tira3();	
$balance = $val - $getira3;
update_tira3($balance);

return $balance;
}


// update tira3
function update_tira3($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET dbaseforchildrenbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tira4
function tira4(){
include("cfg.php");
$result = $db->prepare("SELECT sum(pedslane) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira4allot
function tira4allot(){
include("cfg.php");
$result = $db->prepare("SELECT pedslane FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['pedslane'];
}	
	return $val;
}


// tira4Bal
function tira4Bal(){
include("cfg.php");
$result = $db->prepare("SELECT pedslane FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['pedslane'];
}	
$getira4 = tira4();	
$balance = $val - $getira4;
update_tira4($balance);

return $balance;
}


// update tira4
function update_tira4($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET pedslanebal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tira5
function tira5(){
include("cfg.php");
$result = $db->prepare("SELECT sum(distfaid) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira5allot
function tira5allot(){
include("cfg.php");
$result = $db->prepare("SELECT distfaid FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['distfaid'];
}	
	return $val;
}


// tira5Bal
function tira5Bal(){
include("cfg.php");
$result = $db->prepare("SELECT distfaid FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['distfaid'];
}	
$getira5 = tira5();	
$balance = $val - $getira5;
update_tira5($balance);

return $balance;
}


// update tira5
function update_tira5($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET distfaidbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tira6
function tira6(){
include("cfg.php");
$result = $db->prepare("SELECT sum(drugawareness) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira6allot
function tira6allot(){
include("cfg.php");
$result = $db->prepare("SELECT drugawareness FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drugawareness'];
}	
	return $val;
}


// tira6Bal
function tira6Bal(){
include("cfg.php");
$result = $db->prepare("SELECT drugawareness FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drugawareness'];
}	
$getira6 = tira6();	
$balance = $val - $getira6;
update_tira6($balance);

return $balance;
}


// update tira6
function update_tira6($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET drugawarenessbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tira7
function tira7(){
include("cfg.php");
$result = $db->prepare("SELECT sum(sportsequip) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira7allot
function tira7allot(){
include("cfg.php");
$result = $db->prepare("SELECT sportsequip FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['sportsequip'];
}	
	return $val;
}


// tira7Bal
function tira7Bal(){
include("cfg.php");
$result = $db->prepare("SELECT sportsequip FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['sportsequip'];
}	
$getira7 = tira7();	
$balance = $val - $getira7;
update_tira7($balance);

return $balance;
}


// update tira7
function update_tira7($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET sportsequipbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tira8
function tira8(){
include("cfg.php");
$result = $db->prepare("SELECT sum(lcpcOsupplies) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira8allot
function tira8allot(){
include("cfg.php");
$result = $db->prepare("SELECT lcpcOsupplies FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['lcpcOsupplies'];
}	
	return $val;
}


// tira8Bal
function tira8Bal(){
include("cfg.php");
$result = $db->prepare("SELECT lcpcOsupplies FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['lcpcOsupplies'];
}	
$getira8 = tira8();	
$balance = $val - $getira8;
update_tira8($balance);

return $balance;
}


// update tira8
function update_tira8($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET lcpcOsuppliesbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tira9
function tira9(){
include("cfg.php");
$result = $db->prepare("SELECT sum(lcpcregmeet) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira9allot
function tira9allot(){
include("cfg.php");
$result = $db->prepare("SELECT lcpcregmeet FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['lcpcregmeet'];
}	
	return $val;
}


// tira9Bal
function tira9Bal(){
include("cfg.php");
$result = $db->prepare("SELECT lcpcregmeet FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['lcpcregmeet'];
}	
$getira9 = tira9();	
$balance = $val - $getira9;
update_tira9($balance);

return $balance;
}


// update tira9
function update_tira9($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET lcpcregmeetbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tira10
function tira10(){
include("cfg.php");
$result = $db->prepare("SELECT sum(propwastedisp) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira10allot
function tira10allot(){
include("cfg.php");
$result = $db->prepare("SELECT propwastedisp FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['propwastedisp'];
}	
	return $val;
}


// tira10Bal
function tira10Bal(){
include("cfg.php");
$result = $db->prepare("SELECT propwastedisp FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['propwastedisp'];
}	
$getira10 = tira10();	
$balance = $val - $getira10;
update_tira10($balance);

return $balance;
}


// update tira10
function update_tira10($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET propwastedispbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tira11
function tira11(){
include("cfg.php");
$result = $db->prepare("SELECT sum(daycare) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira11allot
function tira11allot(){
include("cfg.php");
$result = $db->prepare("SELECT daycare FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycare'];
}	
	return $val;
}


// tira11Bal
function tira11Bal(){
include("cfg.php");
$result = $db->prepare("SELECT daycare FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycare'];
}	
$getira11 = tira11();	
$balance = $val - $getira11;
update_tira11($balance);

return $balance;
}


// update tira11
function update_tira11($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET daycarebal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	







// tira12
function tira12(){
include("cfg.php");
$result = $db->prepare("SELECT sum(childrenslaw) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira12allot
function tira12allot(){
include("cfg.php");
$result = $db->prepare("SELECT childrenslaw FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['childrenslaw'];
}	
	return $val;
}


// tira12Bal
function tira12Bal(){
include("cfg.php");
$result = $db->prepare("SELECT childrenslaw FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['childrenslaw'];
}	
$getira12 = tira12();	
$balance = $val - $getira12;
update_tira12($balance);

return $balance;
}


// update tira12
function update_tira12($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET childrenslawbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	









// tira13
function tira13(){
include("cfg.php");
$result = $db->prepare("SELECT sum(daycareworkersday) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira13allot
function tira13allot(){
include("cfg.php");
$result = $db->prepare("SELECT daycareworkersday FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycareworkersday'];
}	
	return $val;
}


// tira13Bal
function tira13Bal(){
include("cfg.php");
$result = $db->prepare("SELECT daycareworkersday FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycareworkersday'];
}	
$getira13 = tira13();	
$balance = $val - $getira13;
update_tira13($balance);

return $balance;
}


// update tira13
function update_tira13($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET daycareworkersdaybal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}	


// tira14
function tira14(){
include("cfg.php");
$result = $db->prepare("SELECT sum(daycareworkerstraining) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira14allot
function tira14allot(){
include("cfg.php");
$result = $db->prepare("SELECT daycareworkerstraining FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycareworkerstraining'];
}	
	return $val;
}


// tira14Bal
function tira14Bal(){
include("cfg.php");
$result = $db->prepare("SELECT daycareworkerstraining FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['daycareworkerstraining'];
}	
$getira14 = tira14();	
$balance = $val - $getira14;
update_tira14($balance);

return $balance;
}


// update tira14
function update_tira14($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET daycareworkerstrainingbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}






// tira15
function tira15(){
include("cfg.php");
$result = $db->prepare("SELECT sum(fassistcicl) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira15allot
function tira15allot(){
include("cfg.php");
$result = $db->prepare("SELECT fassistcicl FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fassistcicl'];
}	
	return $val;
}


// tira15Bal
function tira15Bal(){
include("cfg.php");
$result = $db->prepare("SELECT fassistcicl FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['fassistcicl'];
}	
$getira15 = tira15();	
$balance = $val - $getira15;
update_tira15($balance);

return $balance;
}


// update tira15
function update_tira15($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET fassistciclbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}









// tira16
function tira16(){
include("cfg.php");
$result = $db->prepare("SELECT sum(pbdiversions) as result FROM iralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tira16allot
function tira16allot(){
include("cfg.php");
$result = $db->prepare("SELECT pbdiversions FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['pbdiversions'];
}	
	return $val;
}


// tira16Bal
function tira16Bal(){
include("cfg.php");
$result = $db->prepare("SELECT pbdiversions FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['pbdiversions'];
}	
$getira16 = tira16();	
$balance = $val - $getira16;
update_tira16($balance);

return $balance;
}


// update tira16
function update_tira16($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipiralcpc SET pbdiversionsbal = ? WHERE yearm = ?");
$result->execute([$value, $_SESSION['budget']]);
}
*/

function get_total_obligation(){
include("cfg.php");
$tbl = "rlcpc".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM $tbl WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "lcpc".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");
$tbl = "lcpc".$_SESSION['budget'];
$result = $db->prepare("SELECT total FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}



function get_table_exist(){
include("cfg.php");
	
$tablename = "lcpc_list_".$_SESSION['budget'];
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

$tablename = "lcpc".$_SESSION['budget'];
	
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

$tablename = "rlcpc".$_SESSION['budget'];
	
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

$table_cy = "rlcpc".$_SESSION['budget'];
$table2 = "lcpc".$_SESSION['budget']; //20edf_CY table

$tablename = "lcpc_list_".$_SESSION['budget']; //20_list_(current Year) table
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