<?PHP
function get_aip_salaries(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$sal = $row['salaries'];
return $sal;
}

function get_aip_pera(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pera = $row['PERA'];
return $pera;
}

function get_aip_ra(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ra = $row['RA'];
return $ra;
}

function get_aip_ta(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ta = $row['TA'];
return $ta;
}

function get_aip_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cloth = $row['clothing_allowance'];
return $cloth;
}

function get_aip_hon(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT honoraria FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$hon = $row['honoraria'];
return $hon;
}

function get_aip_yend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$yend = $row['year_end'];
return $yend;
}

function get_aip_cash(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cas = $row['cash_gift'];
return $cas;
}

function get_aip_mid(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$mid = $row['mid_year'];
return $mid;
}


function get_aip_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pib = $row['pib'];
return $pib;
}

function get_aip_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$gs = $row['life_retirement'];
return $gs;
}

function get_aip_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$hdmf = $row['pag_ibig'];
return $hdmf;
}

function get_aip_ph(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philHealth FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ph = $row['philHealth'];
return $ph;
}

function get_aip_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ec = $row['ecc'];
return $ec;
}

function get_aip_tlb(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tl = $row['terminal_leave'];
return $tl;
}

function get_aip_other(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ot = $row['other_personal'];
return $ot;
}



function get_total_salaries(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(salaries) as salaries FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['salaries'];


return $tot;
}

function get_salaries_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_salaries_mmo = $row['salaries'];


$get_salary = get_total_salaries();
$total = $aip_salaries_mmo - $get_salary;

update_mmo_salaries($total);
 
 return $total;
}

function update_mmo_salaries($salary){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_salaries = '$salary' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_pera(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(pera) as pera FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['pera'];
return $tot;
}
function get_pera_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pera_mmo = $row['PERA'];


$get_pera = get_total_pera();
$total = $aip_pera_mmo - $get_pera;

update_mmo_pera($total);
 
 return $total;
}

function update_mmo_pera($pera){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_PERA = '$pera' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}

function get_total_ra(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(RA) as ra FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['ra'];
return $tot;
}
function get_ra_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ra_mmo = $row['RA'];


$get_ra = get_total_ra();
$total = $aip_ra_mmo - $get_ra;

update_mmo_ra($total);
 
 return $total;
}

function update_mmo_ra($ra){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_RA = '$ra' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}






function get_total_ta(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(TA) as ta FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ta'];
return $tot;
}

function get_ta_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ta_mmo = $row['TA'];
$get_ta = get_total_ta();
$total = $aip_ta_mmo - $get_ta;
update_mmo_ta($total);
return $total;
}

function update_mmo_ta($ta){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_TA = '$ta' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(clothing_allowance) as cloth FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cloth'];
return $tot;
}

function get_cloth_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cloth_mmo = $row['clothing_allowance'];
$get_cloth = get_total_cloth();
$total = $aip_cloth_mmo - $get_cloth;
update_mmo_cloth($total);
return $total;
}

function update_mmo_cloth($cloth){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_clothing_allowance = '$cloth' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_hon(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(honoraria) as hon FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['hon'];
return $tot;
}

function get_hon_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT honoraria FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_hon_mmo = $row['honoraria'];
$get_hon = get_total_hon();
$total = $aip_hon_mmo - $get_hon;
update_mmo_hon($total);
return $total;
}

function update_mmo_hon($hon){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_honoraria = '$hon' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_yearend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(year_end_bonus) as yeand FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['yeand'];
return $tot;
}

function get_yearend_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_yearend_mmo = $row['year_end'];
$get_yearend = get_total_yearend();
$total = $aip_yearend_mmo - $get_yearend;
update_mmo_yearend($total);
return $total;
}

function update_mmo_yearend($yearend){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_year_end = '$yearend' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}






function get_total_cashgft(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(cash_gift) as cg FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cg'];
return $tot;
}

function get_cashgft_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cashgft_mmo = $row['cash_gift'];
$get_cashgft = get_total_cashgft();
$total = $aip_cashgft_mmo - $get_cashgft;
update_mmo_cashgft($total);
return $total;
}

function update_mmo_cashgft($cg){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_cash_gift = '$cg' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_mid_year(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(mid_year_bonus) as myb FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['myb'];
return $tot;
}

function get_mid_year_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_mid_year_mmo = $row['mid_year'];
$get_mid_year = get_total_mid_year();
$total = $aip_mid_year_mmo - $get_mid_year;
update_mmo_mid_year($total);
return $total;
}

function update_mmo_mid_year($myb){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_mid_year = '$myb' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pib) as pib FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['pib'];
return $tot;
}

function get_pib_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pib_mmo = $row['pib'];
$get_pib = get_total_pib();
$total = $aip_pib_mmo - $get_pib;
update_mmo_pib($total);
return $total;
}

function update_mmo_pib($pib){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pib = '$pib' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(life_retirement) as life_retirement FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['life_retirement'];
return $tot;
}

function get_gsis_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_gsis_mmo = $row['life_retirement'];
$get_gsis = get_total_gsis();
$total = $aip_gsis_mmo - $get_gsis;
update_mmo_gsis($total);
return $total;
}

function update_mmo_gsis($gsis){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_life_retirement = '$gsis' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pag_ibig) as hdmf FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['hdmf'];
return $tot;
}

function get_hdmf_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_hdmf_mmo = $row['pag_ibig'];
$get_hdmf = get_total_hdmf();
$total = $aip_hdmf_mmo - $get_hdmf;
update_mmo_hdmf($total);
return $total;
}

function update_mmo_hdmf($hdmf){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pag_ibig = '$hdmf' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}




function get_total_care(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(philhealth) as care FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['care'];
return $tot;
}

function get_care_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philhealth FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_care_mmo = $row['philhealth'];
$get_care = get_total_care();
$total = $aip_care_mmo - $get_care;
update_mmo_care($total);
return $total;
}

function update_mmo_care($care){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_philhealth = '$care' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}





function get_total_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(ecc) as ecc FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ecc'];
return $tot;
}

function get_ecc_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ecc_mmo = $row['ecc'];
$get_ecc = get_total_ecc();
$total = $aip_ecc_mmo - $get_ecc;
update_mmo_ecc($total);
return $total;
}

function update_mmo_ecc($ecc){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_ecc = '$ecc' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_others(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(other_personel_benefits) as others FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others'];
return $tot;
}

function get_others_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_mmo = $row['other_personal'];
$get_others = get_total_others();
$total = $aip_others_mmo - $get_others;
update_mmo_others($total);
return $total;
}

function update_mmo_others($others){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_other_personal = '$others' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}

function get_total_tlb(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(terminal_benefits) as terminal_benefits FROM psmmo WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['terminal_benefits'];
return $tot;
}

function get_tlb_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tlb_mmo = $row['terminal_leave'];
$get_tlb = get_total_tlb();
$total = $aip_tlb_mmo - $get_tlb;
update_mmo_tlb($total);
return $total;
}

function update_mmo_tlb($tlb){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_terminal_leave = '$tlb' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_aip_tev(){

include("config.php");

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

function get_aip_others(){
include("config.php");

$dept  = "MMO";	
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

$query2 = "SELECT SUM(tev) as tev FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_mmo = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_mmo - $get_tev;

update_mmo_tev($total);
 
 return $total;
}
function update_mmo_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_mmo = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_mmo - $get_trainings;

update_mmo_trainings($total);
 
 return $total;
}
function update_mmo_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone) as telephone FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_mmo = $row['telephone_telegraph'];


$get_telephone = get_total_telephone();
$total = $aip_telephone_mmo - $get_telephone;

update_mmo_telephone($total);
 
 return $total;
}
function update_mmo_telephone($telephone){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_postage(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(postage) as postage FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_mmo = $row['postage'];
$get_postage = get_total_postage();
$total = $aip_postage_mmo - $get_postage;
update_mmo_postage($total);
return $total;
}
function update_mmo_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_insurance_p(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(insurance_p) as insurance_p FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['insurance_p'];
return $tot;
}
function get_insurance_p_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT insurance_premium FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_insurance_p_mmo = $row['insurance_premium'];
$get_insurance_p = get_total_insurance_p();
$total = $aip_insurance_p_mmo - $get_insurance_p;
update_mmo_insurance_p($total);
return $total;
}
function update_mmo_insurance_p($insurance_p){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_insurance_premium = '$insurance_p' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_fidelity_b(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(fidelity_b) as fidelity_b FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['fidelity_b'];
return $tot;
}
function get_fidelity_b_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_fidelity_b_mmo = $row['fidelity_bond'];
$get_fidelity_b = get_total_fidelity_b();
$total = $aip_fidelity_b_mmo - $get_fidelity_b;
update_mmo_fidelity_b($total);
return $total;
}
function update_mmo_fidelity_b($fidelity_b){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_fidelity_bond = '$fidelity_b' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_mmo = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_mmo - $get_officeSupplies;
update_mmo_officeSupplies($total);
return $total;
}
function update_mmo_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_gasoline(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(gasoline) as gasoline FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['gasoline'];
return $tot;
}
function get_gasoline_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT gasoline FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_gasoline_mmo = $row['gasoline'];
$get_gasoline = get_total_gasoline();
$total = $aip_gasoline_mmo - $get_gasoline;
update_mmo_gasoline($total);
return $total;
}
function update_mmo_gasoline($gasoline){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_gasoline = '$gasoline' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_motor_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(motor_maint) as motor_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['motor_maint'];
return $tot;
}
function get_motor_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT motor_vehicle_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_motor_maint_mmo = $row['motor_vehicle_maint'];
$get_motor_maint = get_total_motor_maint();
$total = $aip_motor_maint_mmo - $get_motor_maint;
update_mmo_motor_maint($total);
return $total;
}
function update_mmo_motor_maint($motor_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_motor_vehicle_maint = '$motor_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeEquip_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeEquip_maint) as officeEquip_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeEquip_maint'];
return $tot;
}
function get_officeEquip_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_equip_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_office_equip_maint_mmo = $row['office_equip_maint'];
$get_office_equip_maint = get_total_officeEquip_maint();
$total = $aip_office_equip_maint_mmo - $get_office_equip_maint;
update_mmo_officeEquip_maint($total);
return $total;
}
function update_mmo_officeEquip_maint($office_equip_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_equip_maint = '$office_equip_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_confidential(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(confidential) as confidential FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['confidential'];
return $tot;
}
function get_confidential_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT confidential_intel_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_confidential_mmo = $row['confidential_intel_maint'];
$get_confidential = get_total_confidential();
$total = $aip_confidential_mmo - $get_confidential;
update_mmo_confidential($total);
return $total;
}
function update_mmo_confidential($confidential){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_confidential_intel_maint = '$confidential' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_mmo = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_mmo - $get_others_maint;
update_mmo_others_maint($total);
return $total;
}
function update_mmo_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_aip_co(){

include("cfg.php");

	$dept  = "MMO";	
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

$result = $db->prepare("SELECT SUM(capital_outlay) as co FROM mmoco WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['co'];


return $tot;

}
function get_co_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT co FROM aip WHERE departments = 'MMO' && Year = ?");
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
$result = $db->prepare("UPDATE aip SET balance_co = ? WHERE Year = ? && departments = 'MMO'");
$result->execute([$co,$year]);
}




?>