<?PHP
/*
function g1(){
include("cfg.php");
$result=$db->prepare("SELECT mdcOperation FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['mdcOperation'];
return $row;	
}
function g1_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(mdcOperation) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g1() - $y;
return $i;
updateEmdcbal($i);	
}
function updateEmdcbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET mdcOperationBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

	
function g2(){
include("cfg.php");
$result=$db->prepare("SELECT mvprogram FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['mvprogram'];
return $row;	
}
function g2_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(mvprogram) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g2() - $y;
return $i;
updatemvpbal($i);	
}
function updatemvpbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET mvprogramBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}





function g3(){
include("cfg.php");
$result=$db->prepare("SELECT barangayan FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['barangayan'];
return $row;	
}
function g3_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(barangayan) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g3() - $y;
return $i;
updateaBrgynbal($i);	
}
function updateBrgynbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET barangayanBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}


function g4(){
include("cfg.php");
$result=$db->prepare("SELECT faBrgyP FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['faBrgyP'];
return $row;	
}
function g4_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(faBrgyP) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g4() - $y;
return $i;
updatefaBrgyPbal($i);	
}
function updatefaBrgyPbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET faBrgyPBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}



function g5(){
include("cfg.php");
$result=$db->prepare("SELECT cbms FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['cbms'];
return $row;	
}
function g5_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(cbms) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g5() - $y;
return $i;
updatecbmsbal($i);	
}
function updatecbmsbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET cbmsPBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}
//cfLPRAP

function g6(){
include("cfg.php");
$result=$db->prepare("SELECT cfLPRAP FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['cfLPRAP'];
return $row;	
}
function g6_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(cfLPRAP) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g6() - $y;
return $i;
updatecfLPRAPbal($i);	
}
function updatecfLPRAPbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET cfLPRAPBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//susDevCLUP

function g7(){
include("cfg.php");
$result=$db->prepare("SELECT susDevCLUP FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['susDevCLUP'];
return $row;	
}
function g7_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(susDevCLUP) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g7() - $y;
return $i;
updatesusDevCLUPbal($i);	
}
function updatesusDevCLUPbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET susDevCLUPBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}
//ictTech4ed

function g8(){
include("cfg.php");
$result=$db->prepare("SELECT ictTech4ed FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['ictTech4ed'];
return $row;	
}
function g8_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(ictTech4ed) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g8() - $y;
return $i;
updateictTech4edbal($i);	
}
function updateictTech4edbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET ictTech4edBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}
//rAndD
function g9(){
include("cfg.php");
$result=$db->prepare("SELECT rAndD FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['rAndD'];
return $row;	
}
function g9_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(rAndD) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g9() - $y;
return $i;
updaterAndDbal($i);	
}
function updaterAndDbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET rAndDBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//iecEdCamp
function g10(){
include("cfg.php");
$result=$db->prepare("SELECT iecEdCamp FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['iecEdCamp'];
return $row;	
}
function g10_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(iecEdCamp) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g10() - $y;
return $i;
updateiecEdCampbal($i);	
}
function updateiecEdCampbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET iecEdCampBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//dCem
function g11(){
include("cfg.php");
$result=$db->prepare("SELECT dCem FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['dCem'];
return $row;	
}
function g11_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(dCem) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g11() - $y;
return $i;
updatedCembal($i);	
}
function updatedCembal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET dCemBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}
//udExUgc
function g12(){
include("cfg.php");
$result=$db->prepare("SELECT udExUgc FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['udExUgc'];
return $row;	
}
function g12_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(udExUgc) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g12() - $y;
return $i;
updateudExUgcbal($i);	
}
function updateudExUgcbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET udExUgcBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}
//mBrgyRoads
function g13(){
include("cfg.php");
$result=$db->prepare("SELECT mBrgyRoads FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['mBrgyRoads'];
return $row;	
}
function g13_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(mBrgyRoads) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g13() - $y;
return $i;
updatemBrgyRoadsbal($i);	
}
function updatemBrgyRoadsbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET mBrgyRoadsBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//SportsDev
function g14(){
include("cfg.php");
$result=$db->prepare("SELECT SportsDev FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['SportsDev'];
return $row;	
}
function g14_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(SportsDev) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g14() - $y;
return $i;
updateSportsDevbal($i);	
}
function updateSportsDevbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET SportsDevBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//afdLproj
function g15(){
include("cfg.php");
$result=$db->prepare("SELECT afdLproj FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['afdLproj'];
return $row;	
}
function g15_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(afdLproj) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g15() - $y;
return $i;
updateafdLprojbal($i);	
}
function updateafdLprojbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET afdLprojBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//aExtPCapB
function g16(){
include("cfg.php");
$result=$db->prepare("SELECT aExtPCapB FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['aExtPCapB'];
return $row;	
}
function g16_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(aExtPCapB) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g16() - $y;
return $i;
updateaExtPCapBbal($i);	
}
function updateaExtPCapBbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET aExtPCapBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//AHCM
function g17(){
include("cfg.php");
$result=$db->prepare("SELECT AHCM FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['AHCM'];
return $row;	
}
function g17_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(AHCM) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g17() - $y;
return $i;
updateAHCMbal($i);	
}
function updateAHCMbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET AHCMBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//coastalFRM
function g18(){
include("cfg.php");
$result=$db->prepare("SELECT coastalFRM FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['coastalFRM'];
return $row;	
}
function g18_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(coastalFRM) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g18() - $y;
return $i;
updatecoastalFRMbal($i);	
}
function updatecoastalFRMbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET coastalFRMBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}


//LpovRp
function g19(){
include("cfg.php");
$result=$db->prepare("SELECT LpovRp FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['LpovRp'];
return $row;	
}
function g19_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(LpovRp) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g19() - $y;
return $i;
updateLpovRpbal($i);	
}
function updateLpovRpbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET LpovRpBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//solidWaste
function g20(){
include("cfg.php");
$result=$db->prepare("SELECT solidWaste FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['solidWaste'];
return $row;	
}
function g20_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(solidWaste) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g20() - $y;
return $i;
updatesolidWastebal($i);	
}
function updatesolidWastebal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET solidWasteBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//cleanGreen
function g21(){
include("cfg.php");
$result=$db->prepare("SELECT cleanGreen FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['cleanGreen'];
return $row;	
}
function g21_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(cleanGreen) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g21() - $y;
return $i;
updatecleanGreenbal($i);	
}
function updatecleanGreenbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET cleanGreenBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//infraBrgys
function g22(){
include("cfg.php");
$result=$db->prepare("SELECT infraBrgys FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['infraBrgys'];
return $row;	
}
function g22_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(infraBrgys) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g22() - $y;
return $i;
updateinfraBrgysbal($i);	
}
function updateinfraBrgysbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET infraBrgysBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//loanPayment
function g23(){
include("cfg.php");
$result=$db->prepare("SELECT loanPayment FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['loanPayment'];
return $row;	
}
function g23_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(loanPayment) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g23() - $y;
return $i;
updateloanPaymentbal($i);	
}
function updateloanPaymentbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET loanPaymentBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//masamasid
function g24(){
include("cfg.php");
$result=$db->prepare("SELECT masamasid FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['masamasid'];
return $row;	
}
function g24_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(masamasid) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g24() - $y;
return $i;
updatemasamasidbal($i);	
}
function updatemasamasidbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET masamasidBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//tourCultAct
function g25(){
include("cfg.php");
$result=$db->prepare("SELECT tourCultAct FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['tourCultAct'];
return $row;	
}
function g25_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(tourCultAct) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g25() - $y;
return $i;
updatetourCultActbal($i);	
}
function updatetourCultActbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET tourCultActBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//tourProjinfraDev
function g26(){
include("cfg.php");
$result=$db->prepare("SELECT tourProjinfraDev FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['tourProjinfraDev'];
return $row;	
}
function g26_bal(){
include("cfg.php");
$result=$db->prepare("SELECT SUM(tourProjinfraDev) as xcz FROM r20edf WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$y = $row['xcz'];
$i = g26() - $y;
return $i;
updatetourProjinfraDevbal($i);	
}
function updatetourProjinfraDevbal($i){
include("cfg.php");
$result=$db->prepare("UPDATE 20edf SET tourProjinfraDevBal = ? WHERE Year=?");	
$result->execute([$i, $_SESSION['budget']]);
}

//Total
function total(){
include("cfg.php");
$result=$db->prepare("SELECT total FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['total'];
return $row;
		   
}
function total_balance(){
include("cfg.php");
$balance_all = g1_bal() + g2_bal() + g3_bal() + g4_bal() + g5_bal() + g6_bal() +
			   g7_bal() + g8_bal() + g9_bal() + g10_bal() + g11_bal() + g12_bal() +
			   g13_bal() + g14_bal() + g15_bal() + g16_bal() + g17_bal() + g18_bal() +
			   g19_bal() + g20_bal() + g21_bal() + g22_bal() + g23_bal() + g24_bal() +
			   g25_bal() + g26_bal();
			   
$result = $db->prepare("UPDATE 20edf SET total_balance = ? WHERE Year = ?");
$result->execute([$balance_all, $_SESSION['budget']]);	

$result=$db->prepare("SELECT total_balance FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$row= $r['total_balance'];
return $row;	
}

*/



function get_table_exist(){
include("cfg.php");
	
$tablename = "20_list_".$_SESSION['budget'];
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

$tablename = "20edf".$_SESSION['budget'];
	
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

$tablename = "r20edf".$_SESSION['budget'];
	
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

$table_cy = "r20edf".$_SESSION['budget'];
$table2 = "20edf".$_SESSION['budget']; //20edf_CY table

$tablename = "20_list_".$_SESSION['budget']; //20_list_(current Year) table
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