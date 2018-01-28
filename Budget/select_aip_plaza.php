<?PHP


function select_aip_salaries(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT salaries FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['salaries'];
return $col1;
}

function select_aip_salaries_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_salaries FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_salaries'];
return $col1;
}

function select_aip_pera(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT PERA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['PERA'];
return $col1;
}

function select_aip_pera_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_PERA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_PERA'];
return $col1;
}

function select_aip_ra(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT RA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['RA'];
return $col1;
}

function select_aip_ra_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_RA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_RA'];
return $col1;
}

function select_aip_ta(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT TA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['TA'];
return $col1;
}

function select_aip_ta_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_TA FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_TA'];
return $col1;
}

function select_aip_cloth(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT clothing_allowance FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['clothing_allowance'];
return $col1;
}

function select_aip_cloth_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_clothing_allowance FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_clothing_allowance'];
return $col1;
}


function select_aip_yend(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT year_end FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['year_end'];
return $col1;
}

function select_aip_yend_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_year_end FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_year_end'];
return $col1;
}

function select_aip_gft(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT cash_gift FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['cash_gift'];
return $col1;
}

function select_aip_gft_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_cash_gift FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_cash_gift'];
return $col1;
}

function select_aip_mid(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT mid_year FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['mid_year'];
return $col1;
}

function select_aip_mid_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_mid_year FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_mid_year'];
return $col1;
}

function select_aip_pib(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT pib FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['pib'];
return $col1;
}

function select_aip_pib_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_pib FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_pib'];
return $col1;
}

function select_aip_gsis(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT life_retirement FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['life_retirement'];
return $col1;
}

function select_aip_gsis_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_life_retirement FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_life_retirement'];
return $col1;
}

function select_aip_hdmf(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT pag_ibig FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['pag_ibig'];
return $col1;
}

function select_aip_hdmf_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_pag_ibig FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_pag_ibig'];
return $col1;
}


function select_aip_philhealth(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT philhealth FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['philhealth'];
return $col1;
}

function select_aip_philhealth_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_philhealth FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_philhealth'];
return $col1;
}

function select_aip_ecc(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT ecc FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['ecc'];
return $col1;
}

function select_aip_ecc_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_ecc FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_ecc'];
return $col1;
}


function select_aip_totps(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_ps FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_ps'];
return $col1;
}

function select_aip_totps_bal(){
include("config.php");


$sal = select_aip_salaries_bal();
$per = select_aip_pera_bal();
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


$total_bal_ps = $sal + $per + $clo + $yend + $gft + $mid + $pi + $gs + $love + $cares + $ec + $opb;

$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET total_ps_balance = '$total_bal_ps' WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$col1 = check_if_update();
return $col1;
}

function check_if_update(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_ps_balance FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_ps_balance'];
return $col1;
}



function select_aip_travel(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['tev'];
return $col1;
}

function select_aip_travel_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_tev FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_tev'];
return $col1;
}


function select_aip_gasoline(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT gasoline FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['gasoline'];
return $col1;
}

function select_aip_gasoline_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_gasoline FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_gasoline'];
return $col1;
}

function select_aip_office(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['office_supplies'];
return $col1;
}

function select_aip_office_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_office_supplies FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_office_supplies'];
return $col1;
}


function select_aip_water(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT water FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['water'];
return $col1;
}

function select_aip_water_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_water FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_water'];
return $col1;
}

function select_aip_electricity(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT electricity FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['electricity'];
return $col1;
}

function select_aip_electricity_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_electricity FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_electricity'];
return $col1;
}


function select_aip_vehicle(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT motor_vehicle_maint FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['motor_vehicle_maint'];
return $col1;
}

function select_aip_vehicle_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_motor_vehicle_maint FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_motor_vehicle_maint'];
return $col1;
}


function select_aip_totalmoe(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT total_mooe FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['total_mooe'];
return $col1;
}

function select_aip_totalmoe_bal(){
include("config.php");


$training = floatval(select_aip_travel_bal());
$wat = floatval(select_aip_water_bal());
$offs = floatval(select_aip_office_bal());
$ele = floatval(select_aip_electricity_bal());
$gas = floatval(select_aip_gasoline_bal());
$veh = floatval(select_aip_vehicle_bal());


$totmooe =  $training + $wat + $offs + $ele + $veh + $gas;

$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_mooe = '$totmooe' WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$col1 = check_aip_totalmooe_bal();

return $col1;
}

function check_aip_totalmooe_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_mooe FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_mooe'];
return $col1;

}


function select_aip_co(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT co FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['co'];
return $col1;
}

function select_aip_co_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_co FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$col1 = $row['balance_co'];

return $col1;
}

function select_aip_tl(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT terminal_leave FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['terminal_leave'];
return $col1;
}

function select_aip_tl_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_terminal_leave FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_terminal_leave'];
return $col1;
}

function select_aip_opb(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT other_personal FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['other_personal'];
return $col1;
}

function select_aip_opb_bal(){
include("config.php");

$year = $_SESSION['budget'];
$query2 = "SELECT balance_other_personal FROM aip WHERE departments = 'General Services' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$col1 = $row['balance_other_personal'];
return $col1;
}




?>