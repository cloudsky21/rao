<?PHP
function get_aip_salaries(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$sal = $row['salaries'];
return $sal;
}

function get_aip_pera(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pera = $row['PERA'];
return $pera;
}

function get_aip_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cloth = $row['clothing_allowance'];
return $cloth;
}

function get_aip_yend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$yend = $row['year_end'];
return $yend;
}

function get_aip_cash(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$cas = $row['cash_gift'];
return $cas;
}

function get_aip_mid(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$mid = $row['mid_year'];
return $mid;
}


function get_aip_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$pib = $row['pib'];
return $pib;
}

function get_aip_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$gs = $row['life_retirement'];
return $gs;
}

function get_aip_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$hdmf = $row['pag_ibig'];
return $hdmf;
}

function get_aip_ph(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philHealth FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ph = $row['philHealth'];
return $ph;
}

function get_aip_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ec = $row['ecc'];
return $ec;
}

function get_aip_other(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$ot = $row['other_personal'];
return $ot;
}













function get_total_salaries(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(salaries) as salaries FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['salaries'];
return $tot;

}
function get_salaries_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_salaries_gs = $row['salaries'];


$get_salary = get_total_salaries();
$total = $aip_salaries_gs - $get_salary;

update_gs_salaries($total);
 
 return $total;
}

function update_gs_salaries($salary){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_salaries = '$salary' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}



function get_total_pera(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(pera) as pera FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['pera'];
return $tot;
}
function get_pera_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pera_gs = $row['PERA'];


$get_pera = get_total_pera();
$total = $aip_pera_gs - $get_pera;

update_gs_pera($total);
 
 return $total;
}

function update_gs_pera($pera){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_PERA = '$pera' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}



function get_total_cloth(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(clothing_allowance) as cloth FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cloth'];
return $tot;
}

function get_cloth_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cloth_gs = $row['clothing_allowance'];
$get_cloth = get_total_cloth();
$total = $aip_cloth_gs - $get_cloth;
update_gs_cloth($total);
return $total;
}

function update_gs_cloth($cloth){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_clothing_allowance = '$cloth' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}


function get_total_yearend(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(year_end_bonus) as yeand FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['yeand'];
return $tot;
}

function get_yearend_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_yearend_gs = $row['year_end'];
$get_yearend = get_total_yearend();
$total = $aip_yearend_gs - $get_yearend;
update_gs_yearend($total);
return $total;
}

function update_gs_yearend($yearend){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_year_end = '$yearend' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}






function get_total_cashgft(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(cash_gift) as cg FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['cg'];
return $tot;
}

function get_cashgft_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_cashgft_gs = $row['cash_gift'];
$get_cashgft = get_total_cashgft();
$total = $aip_cashgft_gs - $get_cashgft;
update_gs_cashgft($total);
return $total;
}

function update_gs_cashgft($cg){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_cash_gift = '$cg' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}




function get_total_mid_year(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(mid_year_bonus) as myb FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['myb'];
return $tot;
}

function get_mid_year_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_mid_year_gs = $row['mid_year'];
$get_mid_year = get_total_mid_year();
$total = $aip_mid_year_gs - $get_mid_year;
update_gs_mid_year($total);
return $total;
}

function update_gs_mid_year($myb){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_mid_year = '$myb' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}




function get_total_pib(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pib) as pib FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['pib'];
return $tot;
}

function get_pib_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_pib_gs = $row['pib'];
$get_pib = get_total_pib();
$total = $aip_pib_gs - $get_pib;
update_gs_pib($total);
return $total;
}

function update_gs_pib($pib){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pib = '$pib' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}




function get_total_gsis(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(life_retirement) as life_retirement FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['life_retirement'];
return $tot;
}

function get_gsis_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_gsis_gs = $row['life_retirement'];
$get_gsis = get_total_gsis();
$total = $aip_gsis_gs - $get_gsis;
update_gs_gsis($total);
return $total;
}

function update_gs_gsis($gsis){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_life_retirement = '$gsis' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}



function get_total_hdmf(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(pag_ibig) as hdmf FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['hdmf'];
return $tot;
}

function get_hdmf_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_hdmf_gs = $row['pag_ibig'];
$get_hdmf = get_total_hdmf();
$total = $aip_hdmf_gs - $get_hdmf;
update_gs_hdmf($total);
return $total;
}

function update_gs_hdmf($hdmf){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_pag_ibig = '$hdmf' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}




function get_total_care(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(philhealth) as care FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['care'];
return $tot;
}

function get_care_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT philhealth FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_care_gs = $row['philhealth'];
$get_care = get_total_care();
$total = $aip_care_gs - $get_care;
update_gs_care($total);
return $total;
}

function update_gs_care($care){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_philhealth = '$care' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}





function get_total_ecc(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(ecc) as ecc FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ecc'];
return $tot;
}

function get_ecc_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ecc_gs = $row['ecc'];
$get_ecc = get_total_ecc();
$total = $aip_ecc_gs - $get_ecc;
update_gs_ecc($total);
return $total;
}

function update_gs_ecc($ecc){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_ecc = '$ecc' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}



function get_total_others(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(other_personel_benefits) as others FROM psgs WHERE year_transact = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others'];
return $tot;
}

function get_others_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_gs = $row['other_personal'];
$get_others = get_total_others();
$total = $aip_others_gs - $get_others;
update_gs_others($total);
return $total;
}

function update_gs_others($others){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_other_personal = '$others' WHERE Year = '$year' && departments = 'General Services'";
$result2 = mysqli_query($db,$query2);
}

function get_total_obligation(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT SUM(total) as total FROM psgs WHERE year_transact = ?";
$result = $db->prepare($query);
$result->execute([$year]);
$row = $result->fetch();
$value = $row['total'];

return $value;
}

function get_obligation_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT total_ps_balance FROM aip WHERE Year = ? AND departments = ?";
$result = $db->prepare($query);
$result->execute([$year,"General Services"]);
$row = $result->fetch();
$value = $row['total_ps_balance'];

return $value;
}

function get_appropriation(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT total_ps FROM aip WHERE Year = ? AND departments = ?";
$result = $db->prepare($query);
$result->execute([$year,"General Services"]);
$row = $result->fetch();
$value = $row['total_ps'];

return $value;
}



?>