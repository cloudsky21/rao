<?php
function get_aip_salaries(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$sal = $row['salaries'];
return $sal;
}

function get_aip_pera(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pera = $row['PERA'];
return $pera;
}

function get_aip_ra(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ra = $row['RA'];
return $ra;
}

function get_aip_ta(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ta = $row['TA'];
return $ta;
}

function get_aip_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cloth = $row['clothing_allowance'];
return $cloth;
}

function get_aip_yend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$yend = $row['year_end'];
return $yend;
}

function get_aip_cash(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cas = $row['cash_gift'];
return $cas;
}

function get_aip_mid(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$mid = $row['mid_year'];
return $mid;
}


function get_aip_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pib = $row['pib'];
return $pib;
}

function get_aip_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$gs = $row['life_retirement'];
return $gs;
}

function get_aip_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$hdmf = $row['pag_ibig'];
return $hdmf;
}

function get_aip_ph(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philHealth FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ph = $row['philHealth'];
return $ph;
}

function get_aip_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ec = $row['ecc'];
return $ec;
}

function get_aip_tlb(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tl = $row['terminal_leave'];
return $tl;
}

function get_aip_other(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ot = $row['other_personal'];
return $ot;
}













function get_total_salaries(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(salaries) as salaries FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['salaries'];
return $tot;

}
function get_salaries_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_salaries_SB = $row['salaries'];


$get_salary = get_total_salaries();
$total = $aip_salaries_SB - $get_salary;

update_SB_salaries($total);
 
 return $total;
}

function update_SB_salaries($salary){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_salaries = '$salary' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_pera(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(pera) as pera FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['pera'];
return $tot;
}
function get_pera_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pera_SB = $row['PERA'];


$get_pera = get_total_pera();
$total = $aip_pera_SB - $get_pera;

update_SB_pera($total);
 
 return $total;
}

function update_SB_pera($pera){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_PERA = '$pera' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}

function get_total_ra(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(RA) as ra FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['ra'];
return $tot;
}
function get_ra_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ra_SB = $row['RA'];


$get_ra = get_total_ra();
$total = $aip_ra_SB - $get_ra;

update_SB_ra($total);
 
 return $total;
}

function update_SB_ra($ra){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_RA = '$ra' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}






function get_total_ta(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(TA) as ta FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ta'];
return $tot;
}

function get_ta_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ta_SB = $row['TA'];
$get_ta = get_total_ta();
$total = $aip_ta_SB - $get_ta;
update_SB_ta($total);
return $total;
}

function update_SB_ta($ta){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_TA = '$ta' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(clothing_allowance) as cloth FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cloth'];
return $tot;
}

function get_cloth_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cloth_SB = $row['clothing_allowance'];
$get_cloth = get_total_cloth();
$total = $aip_cloth_SB - $get_cloth;
update_SB_cloth($total);
return $total;
}

function update_SB_cloth($cloth){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_clothing_allowance = '$cloth' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_yearend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(year_end_bonus) as yeand FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['yeand'];
return $tot;
}

function get_yearend_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_yearend_SB = $row['year_end'];
$get_yearend = get_total_yearend();
$total = $aip_yearend_SB - $get_yearend;
update_SB_yearend($total);
return $total;
}

function update_SB_yearend($yearend){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_year_end = '$yearend' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}






function get_total_cashgft(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(cash_gift) as cg FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cg'];
return $tot;
}

function get_cashgft_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cashgft_SB = $row['cash_gift'];
$get_cashgft = get_total_cashgft();
$total = $aip_cashgft_SB - $get_cashgft;
update_SB_cashgft($total);
return $total;
}

function update_SB_cashgft($cg){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_cash_gift = '$cg' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}




function get_total_mid_year(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(mid_year_bonus) as myb FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['myb'];
return $tot;
}

function get_mid_year_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_mid_year_SB = $row['mid_year'];
$get_mid_year = get_total_mid_year();
$total = $aip_mid_year_SB - $get_mid_year;
update_SB_mid_year($total);
return $total;
}

function update_SB_mid_year($myb){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_mid_year = '$myb' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}




function get_total_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pib) as pib FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['pib'];
return $tot;
}

function get_pib_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pib_SB = $row['pib'];
$get_pib = get_total_pib();
$total = $aip_pib_SB - $get_pib;
update_SB_pib($total);
return $total;
}

function update_SB_pib($pib){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pib = '$pib' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}




function get_total_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(life_retirement) as life_retirement FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['life_retirement'];
return $tot;
}

function get_gsis_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_gsis_SB = $row['life_retirement'];
$get_gsis = get_total_gsis();
$total = $aip_gsis_SB - $get_gsis;
update_SB_gsis($total);
return $total;
}

function update_SB_gsis($gsis){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_life_retirement = '$gsis' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pag_ibig) as hdmf FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['hdmf'];
return $tot;
}

function get_hdmf_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_hdmf_SB = $row['pag_ibig'];
$get_hdmf = get_total_hdmf();
$total = $aip_hdmf_SB - $get_hdmf;
update_SB_hdmf($total);
return $total;
}

function update_SB_hdmf($hdmf){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pag_ibig = '$hdmf' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}




function get_total_care(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(philhealth) as care FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['care'];
return $tot;
}

function get_care_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philhealth FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_care_SB = $row['philhealth'];
$get_care = get_total_care();
$total = $aip_care_SB - $get_care;
update_SB_care($total);
return $total;
}

function update_SB_care($care){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_philhealth = '$care' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}





function get_total_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(ecc) as ecc FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ecc'];
return $tot;
}

function get_ecc_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ecc_SB = $row['ecc'];
$get_ecc = get_total_ecc();
$total = $aip_ecc_SB - $get_ecc;
update_SB_ecc($total);
return $total;
}

function update_SB_ecc($ecc){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_ecc = '$ecc' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_others(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(other_personel_benefits) as others FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others'];
return $tot;
}

function get_others_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_SB = $row['other_personal'];
$get_others = get_total_others();
$total = $aip_others_SB - $get_others;
update_SB_others($total);
return $total;
}

function update_SB_others($others){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_other_personal = '$others' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}

function get_total_tlb(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(terminal_lb) as terminal_benefits FROM pssb WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['terminal_benefits'];
return $tot;
}

function get_tlb_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tlb_SB = $row['terminal_leave'];
$get_tlb = get_total_tlb();
$total = $aip_tlb_SB - $get_tlb;
update_SB_tlb($total);
return $total;
}

function update_SB_tlb($tlb){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_terminal_leave = '$tlb' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_aip_tev(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT tev FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($tev);
					$result->fetch();
 
				}

return $tev;
	}

}

function get_aip_training(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT training_seminars FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($training);
					$result->fetch();
 
				}

return $training;
	}

}

function get_aip_telephone(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT telephone_telegraph FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_postage(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT postage FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_insurance(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT insurance_premium FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_fidelity(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT fidelity_bond FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_offsup(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_gas(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT gasoline FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_motorVehicle(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT motor_vehicle_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_officeEquip(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT office_equip_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_confidential(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT confidential_intel_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_ads(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT advertising_expenses FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_others(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT others FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}








function get_total_tev(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(tev) as tev FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_sb = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_sb - $get_tev;

update_sb_tev($total);
 
 return $total;
}
function update_sb_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_sb = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_sb - $get_trainings;

update_sb_trainings($total);
 
 return $total;
}
function update_sb_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone) as telephone FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_sb = $row['telephone_telegraph'];


$get_telephone = get_total_telephone();
$total = $aip_telephone_sb - $get_telephone;

update_sb_telephone($total);
 
 return $total;
}
function update_sb_telephone($telephone){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_postage(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(postage) as postage FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_sb = $row['postage'];
$get_postage = get_total_postage();
$total = $aip_postage_sb - $get_postage;
update_sb_postage($total);
return $total;
}
function update_sb_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_insurance_p(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(insurance_p) as insurance_p FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['insurance_p'];
return $tot;
}
function get_insurance_p_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT insurance_premium FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_insurance_p_sb = $row['insurance_premium'];
$get_insurance_p = get_total_insurance_p();
$total = $aip_insurance_p_sb - $get_insurance_p;
update_sb_insurance_p($total);
return $total;
}
function update_sb_insurance_p($insurance_p){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_insurance_premium = '$insurance_p' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_fidelity_b(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(fidelity_b) as fidelity_b FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['fidelity_b'];
return $tot;
}
function get_fidelity_b_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_fidelity_b_sb = $row['fidelity_bond'];
$get_fidelity_b = get_total_fidelity_b();
$total = $aip_fidelity_b_sb - $get_fidelity_b;
update_sb_fidelity_b($total);
return $total;
}
function update_sb_fidelity_b($fidelity_b){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_fidelity_bond = '$fidelity_b' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_sb = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_sb - $get_officeSupplies;
update_sb_officeSupplies($total);
return $total;
}
function update_sb_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_ads(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(advertising_expenses) as ads FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ads'];
return $tot;
}
function get_ads_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT advertising_expenses FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ads_sb = $row['advertising_expenses'];
$get_ads = get_total_ads();
$total = $aip_ads_sb - $get_ads;
update_sb_ads($total);
return $total;
}
function update_sb_ads($ads){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_advertising_expenses = '$ads' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_sb = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_sb - $get_others_maint;
update_sb_others_maint($total);
return $total;
}
function update_sb_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}

function get_aip_co(){

include("cfg.php");

	$dept  = "SB";	
	$result = $db->prepare("SELECT co FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
	
				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$co = $row['co'];
					
				}

return $co;
	}


function get_total_co(){
include("cfg.php");

$year = $_SESSION['budget'];

$result = $db->prepare("SELECT SUM(capital_outlay) as co FROM sbco WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['co'];


return $tot;

}
function get_co_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT co FROM aip WHERE departments = 'SB' && Year = ?");
$result->execute([$year]);

$row = $result->fetch();
$zx = $row['co'];


$getx = get_total_co();
$total = $zx - $getx;


update_co($total);
 
return $total;
}
function update_co($co){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("UPDATE aip SET balance_co = ? WHERE Year = ? && departments = 'SB'");
$result->execute([$co,$year]);
}









?>