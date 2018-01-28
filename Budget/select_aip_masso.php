<?PHP


function select_aip_salaries(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['salaries'];
return $col1;
}

function select_aip_salaries_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_salaries FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_salaries'];
return $col1;
}

function select_aip_pera(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['PERA'];
return $col1;
}

function select_aip_pera_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_PERA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_PERA'];
return $col1;
}

function select_aip_ra(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['RA'];
return $col1;
}

function select_aip_ra_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_RA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_RA'];
return $col1;
}

function select_aip_ta(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['TA'];
return $col1;
}

function select_aip_ta_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_TA FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_TA'];
return $col1;
}

function select_aip_cloth(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['clothing_allowance'];
return $col1;
}

function select_aip_cloth_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_clothing_allowance FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_clothing_allowance'];
return $col1;
}


function select_aip_yend(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['year_end'];
return $col1;
}

function select_aip_yend_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_year_end FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_year_end'];
return $col1;
}

function select_aip_gft(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['cash_gift'];
return $col1;
}

function select_aip_gft_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_cash_gift FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_cash_gift'];
return $col1;
}

function select_aip_mid(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['mid_year'];
return $col1;
}

function select_aip_mid_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_mid_year FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_mid_year'];
return $col1;
}

function select_aip_pib(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['pib'];
return $col1;
}

function select_aip_pib_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_pib FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_pib'];
return $col1;
}

function select_aip_gsis(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['life_retirement'];
return $col1;
}

function select_aip_gsis_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_life_retirement FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_life_retirement'];
return $col1;
}

function select_aip_hdmf(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['pag_ibig'];
return $col1;
}

function select_aip_hdmf_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_pag_ibig FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_pag_ibig'];
return $col1;
}


function select_aip_philhealth(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT philhealth FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['philhealth'];
return $col1;
}

function select_aip_philhealth_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_philhealth FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_philhealth'];
return $col1;
}

function select_aip_ecc(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['ecc'];
return $col1;
}

function select_aip_ecc_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_ecc FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_ecc'];
return $col1;
}


function select_aip_totps(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_ps FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_ps'];
return $col1;
}

function select_aip_totps_bal(){
include("config.php");


$sal = select_aip_salaries_bal();
$per = select_aip_pera_bal();
$rat = select_aip_ra_bal();
$ta = select_aip_ta_bal();
$clo = select_aip_cloth_bal();
$yend = select_aip_yend_bal();
$gft = select_aip_gft_bal();
$mid = select_aip_mid_bal();
$pi = select_aip_pib_bal();
$gs = select_aip_gsis_bal(); 
$love = select_aip_hdmf_bal();
$cares = select_aip_philhealth_bal();
$ec = select_aip_ecc_bal();
$opb = floatval(select_aip_opb());


$total_bal_ps = $sal + $per + $rat + $ta + $clo + $yend + $gft + $mid + $pi + $gs + $love + $cares + $ec + $opb;

$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET total_ps_balance = '$total_bal_ps' WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$col1 = check_if_update();
return $col1;
}

function check_if_update(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_ps_balance FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_ps_balance'];
return $col1;
}



function select_aip_travel(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['tev'];
return $col1;
}

function select_aip_travel_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_tev FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_tev'];
return $col1;
}


function select_aip_training(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['training_seminars'];
return $col1;
}

function select_aip_training_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_training_seminars FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_training_seminars'];
return $col1;
}

function select_aip_equip_maint(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT office_equip_maint FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['office_equip_maint'];
return $col1;
}

function select_aip_equip_maint_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_office_equip_maint FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_office_equip_maint'];
return $col1;
}

function select_aip_postage(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['postage'];
return $col1;
}

function select_aip_postage_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_postage FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_postage'];
return $col1;
}

function select_aip_auditing(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT auditing_services FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['auditing_services'];
return $col1;
}

function select_aip_auditing_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_auditing_services FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_auditing_services'];
return $col1;
}

function select_aip_office(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['office_supplies'];
return $col1;
}

function select_aip_office_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_office_supplies FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_office_supplies'];
return $col1;
}


function select_aip_ads(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT advertising_expenses FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['advertising_expenses'];
return $col1;
}

function select_aip_ads_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_advertising_expenses FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_advertising_expenses'];
return $col1;
}

function select_aip_others(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['others'];
return $col1;
}

function select_aip_others_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_others FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_others'];
return $col1;
}


function select_aip_totalmoe(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_mooe FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_mooe'];
return $col1;
}

function select_aip_totalmoe_bal(){
include("config.php");

$travel = select_aip_travel_bal();
$training = select_aip_training_bal();
$pst = select_aip_postage_bal();
$offs = select_aip_office_bal();
$aud = select_aip_auditing();
$ot = select_aip_others_bal();


$totmooe =  $travel + $training + $pst + $offs + $ot + $aud;

$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_mooe = '$totmooe' WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$col1 = check_aip_totalmooe_bal();

return $col1;
}

function check_aip_totalmooe_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_mooe FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_mooe'];
return $col1;

}


function select_aip_co(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT co FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['co'];
return $col1;
}

function select_aip_co_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_co FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$col1 = $row['balance_co'];

return $col1;
}

function select_aip_tl(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['terminal_leave'];
return $col1;
}

function select_aip_tl_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_terminal_leave FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_terminal_leave'];
return $col1;
}

function select_aip_opb(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['other_personal'];
return $col1;
}

function select_aip_opb_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_other_personal FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_other_personal'];
return $col1;
}

function select_aip_fidelity(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['fidelity_bond'];
return $col1;
}

function select_aip_fidelity_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_fidelity_bond FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_fidelity_bond'];
return $col1;
}

function select_aip_accountable(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT accountable_forms FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['accountable_forms'];
return $col1;
}

function select_aip_accountable_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_accountable_forms FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_accountable_forms'];
return $col1;
}

function select_aip_it(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT repairs_it_equip FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['repairs_it_equip'];
return $col1;
}

function select_aip_it_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_repairs_IT_equip FROM aip WHERE departments = 'MASSO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_repairs_IT_equip'];
return $col1;
}

?>