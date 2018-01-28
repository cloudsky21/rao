<?PHP 
session_start();
include("insertLog.php");
include("config.php");
include("select_aip_mmo.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}
?>




<?PHP
	$total_ps = 0;
	$total_mooe = 0;
	$total_coe = 0;
	$success = 0;
	
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
	mysqli_set_charset($db,"utf8");
	
	$post_salary = mysqli_real_escape_string($db,$_POST['salaries']);
	$post_pera = mysqli_real_escape_string($db, $_POST['PERA']);
	$post_ra = mysqli_real_escape_string($db, $_POST['RA']);
	$post_ta = mysqli_real_escape_string($db, $_POST['TA']);
	$post_clothing = mysqli_real_escape_string($db, $_POST['clothing_allowance']);
	$post_honoraria = mysqli_real_escape_string($db, $_POST['honoraria']);
	$post_year_end = mysqli_real_escape_string($db, $_POST['year_end']);
	$post_cash_gift = mysqli_real_escape_string($db, $_POST['cash_gift']);
	$post_mid_year = mysqli_real_escape_string($db, $_POST['mid_year']);
	$post_pib = mysqli_real_escape_string($db, $_POST['pib']);
	$post_gsis = mysqli_real_escape_string($db, $_POST['gsis']);
	$post_hdmf = mysqli_real_escape_string($db, $_POST['hdmf']);
	$post_philHealth = mysqli_real_escape_string($db, $_POST['philHealth']);
	$post_ecc = mysqli_real_escape_string($db, $_POST['ecc']);
	$post_tl = mysqli_real_escape_string($db, $_POST['terminal-leave']);
	$post_personel = mysqli_real_escape_string($db, $_POST['personel']);
	
	$post_tev = mysqli_real_escape_string($db, $_POST['tev']);
	$post_training = mysqli_real_escape_string($db, $_POST['training']);
	$post_telephone = mysqli_real_escape_string($db, $_POST['telephone']);
	$post_postage = mysqli_real_escape_string($db, $_POST['postage']);
	$post_insurance_premium = mysqli_real_escape_string($db, $_POST['insurance-premium']);
	$post_fedility_premium = mysqli_real_escape_string($db,$_POST['fedility-premium']);
	$post_office_supplies = mysqli_real_escape_string($db,$_POST['office-supplies']);
	$post_gasoline = mysqli_real_escape_string($db,$_POST['gasoline']);
	$post_motor_vehicle = mysqli_real_escape_string($db,$_POST['vehicle-maintenance']);
	$post_equipment = mysqli_real_escape_string($db,$_POST['equipment']);
	$post_confidential = mysqli_real_escape_string($db,$_POST['confidential']);
	$post_other_maintenance = mysqli_real_escape_string($db,$_POST['other-maintenance']);
	
	// capital outlay
	$post_capital_outlay = mysqli_real_escape_string($db,$_POST['capital-outlay']);
			
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_honoraria + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_tl + $post_personel; 
	$total_mooe = $post_tev +  $post_training +  $post_telephone + $post_postage + $post_insurance_premium + $post_fedility_premium + $post_office_supplies + $post_gasoline + $post_motor_vehicle + $post_equipment + $post_confidential + $post_other_maintenance;
	$total_coe = $post_capital_outlay + 0;
	
	$query = "UPDATE aip SET salaries = ?, PERA = ?, RA = ?, TA = ?, clothing_allowance = ?, honoraria = ?, year_end = ?, cash_gift = ?, mid_year = ?, pib = ?, life_retirement = ?, pag_ibig = ?, philHealth = ?, ecc = ?, terminal_leave = ?, other_personal = ?, total_ps = ?,
								tev = ?, training_seminars = ?, telephone_telegraph = ?, postage = ?, insurance_premium = ?, fidelity_bond = ?, office_supplies = ?, gasoline = ?, motor_vehicle_maint = ?, office_equip_maint = ?, confidential_intel_maint = ?, others = ?, co = ?, total_co = ? WHERE Year = ? && departments = 'MMO' ";
	
	if ($result = mysqli_prepare($db, $query)){
		
	mysqli_stmt_bind_param($result,"ssssssssssssssssssssssssssssssss", $post_salary, $post_pera, $post_ra, $post_ta, $post_clothing, $post_honoraria, $post_year_end, $post_cash_gift, $post_mid_year, $post_pib, $post_gsis, $post_hdmf, $post_philHealth, $post_ecc, $post_tl, $post_personel, $total_ps, $post_tev, $post_training, $post_telephone, $post_postage, $post_insurance_premium, $post_fedility_premium, $post_office_supplies, $post_gasoline, $post_motor_vehicle, $post_equipment, $post_confidential, $post_other_maintenance, $post_capital_outlay, $total_coe, $budy);
	mysqli_stmt_execute($result);

	
	 
	$count = mysqli_stmt_affected_rows($result);
	$success = 1;
	

	 
	
	
	
	
	mysqli_stmt_close($result);
	}
	
	
	
	
}



//get data onLoad









?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AIP | Mayors Office</title>
<link rel="shortcut icon" href="favicon.ico"/>
<style>
html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	height: 100%;	
	margin: 0;
	width: 100%;
	
	
	
}

#banner {
	
	margin-bottom: -140px;
	
}
#accountTitle {
	padding: 0;
	display: block;
	margin-top: 10px;
	margin-bottom: -120px;
	margin-left: 50px;
	font-size: 36px;
	min-width:2000px;
}	
#container {
	margin-top: 135px;
	min-width:2000px;
	padding: 0;
	width: 100%;
	
	}
	
.w3-input {
	
	display:block;
	padding:8px 16px;
	font-size: 16px;
	outline:none;
	width:75%;
	border-bottom:1px solid #808080;
	
	}
.w2-input {
	
	
	padding:8px 16px;
	border: none;
	outline:none;
	width:75%;
	border-bottom:1px solid #808080;
	font-size: 16px;
	}
	
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}	
	
#total-balance-services {
	
	
	padding:8px 16px;
	border: none;
	outline:none;
	width:90%;
	border-bottom:1px solid #808080;
	color: #fff;
	
	
	
	}


input[type=button], input[type=submit], input[type=reset] {

	background-color: #ff0000;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	width: 100%;


}	

	
thead {
	font-family: Tahoma, Verdana, Segoe, sans-serif;
}

table {
	
	padding: 10px;
	margin:0 auto;
	border-collapse: collapse;
	width:100%;
	height: 100%;
}
td {
	text-align:left;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	
}

th, td {
	
	padding: 5px;
	border-bottom: 1px solid #ddd;

}

th {
	cursor: pointer;
}

tr:hover {
	background-color: #f5f5f5;
	
}
tr:nth-child(even) {background-color: #f2f2f2}

th {
	font-size: 14px;
	background-color: #ff0000;
    color: white;
}
	
	
.table-wrap {

text-align: center;
margin: 0 auto;
width: 100%;
min-width: 1000px;


}	
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	width: 100%;
	min-width: 2000px;
	
}

li {
    float: left;
	
}

li a {
    display: block;
	font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
}


li a:hover {
    background-color: #4CAF50;;
}
.active {
    background-color: #006400;
}
.wrap {
	
	margin-right: 10px;
	text-align: center;
	
}


.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #333; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 220px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    
	padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 25px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

</style>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}


</script>

</script>
</head>
<body>
<label id="accountTitle">Programmed Appropriation and Obligation</label>
<div id="container">
	<div class="wrap">
		<ul>
			<li><a href="aipMMO.php"  class="active">MMO</a></li>
			<li><a href="aipSB.php">SB</a></li>
			<li><a href="aipMPDO.php">MPDO</a></li>
			<li><a href="aipLCR.php">LCR</a></li>
			<li><a href="aipMBO.php">MBO</a></li>
			<li><a href="aipMACCO.php">MACCO</a></li>
			<li><a href="aipMTO.php">MTO</a></li>
			<li><a href="aipMASSO.php">MASSO</a></li>
			<li><a href="aipMHO.php">MHO</a></li>
			<li><a href="aipMSWD.php">MSWD</a></li>
			<li><a href="aipMAO.php">MAO</a></li>
			<li><a href="aipMEO.php">MEO</a></li>
			<li><a href="aipMarket.php">MARKET</a></li>
			<li><a href="aipPlaza.php">PLAZA</a></li>
			<li><a href="edf.php">20&#37; EDF</a></li>
			<li><a href="aipGAD.php">GAD</a></li>
			<li><a href="aipMDR.php">MDR</a></li>
			<li><a href="aip1SP.php">1% SC & PWDs</a></li>
			<li><a href="aip1iralcpc.php">1% IRA & LCPC</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="heads.php">Head of Departments</a>
  <a href="personal_services_mmo_all.php">Personnel Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_mmo_all.php">Capital Outlay</a>
  </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<?PHP
$sal = floatval (select_aip_salaries());
$per = floatval(select_aip_pera());
$rat = floatval(select_aip_ra());
$ta = floatval(select_aip_ta());
$clo = floatval(select_aip_cloth());
$ho = floatval(select_aip_hon());
$yend = floatval(select_aip_yend());
$gft = floatval(select_aip_gft());
$mid = floatval(select_aip_mid());
$pi = floatval(select_aip_pib());
$gs = floatval(select_aip_gsis()); 
$love = floatval(select_aip_hdmf());
$cares = floatval(select_aip_philhealth());
$ec = floatval(select_aip_ecc());
$totps = floatval(select_aip_totps());
$travel = floatval(select_aip_travel());
$training = floatval(select_aip_training());
$phonegraph = floatval(select_aip_telegraph());	
$pst = floatval(select_aip_postage());
$ins = 	floatval(select_aip_insurance());
$fidel = floatval(select_aip_fidelity());
$offs = floatval(select_aip_office());
$gasy = floatval(select_aip_gasoline());
$moto = floatval(select_aip_motor());
$ofequip = floatval(select_aip_equip());
$confid = floatval(select_aip_confidential());
$ot = floatval(select_aip_others());
$totmoe = floatval(select_aip_totalmoe());
$capot = floatval(select_aip_co());
$tl = floatval(select_aip_tl());
$opb = floatval(select_aip_opb());





echo '<form action="" method = "POST">';
echo '<div class="table-wrap">';
echo '<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <strong>OFFICE OF THE MUNICIPAL MAYOR</strong></label><br> ';
echo '<table>';
echo '<thead>';
	echo '<th>Object of Expenditure <br>&#40;1&#41;</th>';
	echo '<th>Account Code<br>&#40;2&#41;</th>';
	echo '<th>Budget Year Proposed<br>&#40;'.$_SESSION['budget'].'&#41;</th>';
	echo '<th>&nbsp;</th>';
	echo '<th>Balance<br>&#40;4&#41;</th>';
echo '</thead>';
		echo '<tr>';
			echo '<td><strong>Current Operating Expenditures</strong></td>';
		echo '</tr>	';
		
		echo '<tr>';
			echo '<td><STRONG>1.1 Personal Services</STRONG></td>';
			echo '<td>5&#32;01</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Salaries</td>';
			echo '<td>5&#32;01&#32;01&#32;010</td>';
			echo '<td>'.number_format($sal,2).'</td>';
			echo '<td><input type="number" id="salaries" name="salaries" class="w3-input" step="any" min=0 value="'.$sal.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_salaries_bal(),2).'"></td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td><STRONG>Other Compensations:</STRONG></td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>PERA</td>';
		echo '<td>5&#32;01&#32;02&#32;010</td>';
		echo '<td>'.number_format($per,2).'</td>';
		echo '<td><input type="number" id="PERA" name="PERA" class="w3-input" step=0.01 min=0 value="'.$per.'"></td>';
		echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_pera_bal(),2).'"></td>';
		echo '</tr>';
		
	echo '	<tr>';
		echo '<td>RA</td>';
		echo '	<td>5&#32;01&#32;02&#32;020</td>';
		echo '<td>'.number_format($rat,2).'</td>';
		echo '	<td><input type="number" id="RA" name="RA" class="w3-input" step=0.01 min=0 value="'.$rat.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ra_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>TA</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 030</td>';
			echo '<td>'.number_format($ta,2).'</td>';
			echo '<td><input type="number" id="TA" name="TA" class="w3-input" step=0.01 min=0 value="'.$ta.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ta_bal(),2).'"></td>';
		echo '</tr>';

		echo '	<tr>';
			echo '<td>Clothing Allowance</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 040</td>';
			echo '<td>'.number_format($clo,2).'</td>';
		echo '	<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="w3-input" step=0.01 min=0 value="'.$clo.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_cloth_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Honoraria</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 100</td>';
			echo '<td>'.number_format($ho,2).'</td>';
			echo '<td><input type="number" id="honoraria" name="honoraria" class="w3-input" step=0.01 min=0 value="'.$ho.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_hon_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Year End Bonus</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 140</td>';
			echo '<td>'.number_format($yend,2).'</td>';
			echo '<td><input type="number" id="year_end" name="year_end" class="w3-input" step=0.01 min=0 value="'.$yend.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_yend_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Cash Gift</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 150</td>';
			echo '<td>'.number_format($gft,2).'</td>';
			echo '<td><input type="number" id="cash_gift" name="cash_gift" class="w3-input" step=0.01 min=0 value="'.$gft.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_gft_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Mid-Year Bonus</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>';
			echo '<td>'.number_format($mid,2).'</td>';
			echo '<td><input type="number" id="mid_year" name="mid_year" class="w3-input" step=0.01 min=0 value="'.$mid.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_mid_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>PIB</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 080</td>';
			echo '<td>'.number_format($pi,2).'</td>';
			echo '<td><input type="number" id="pib" name="pib" class="w3-input" step=0.01 min=0 value="'.$pi.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_pib_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Life &amp; Retirement Ins. Contributions</td>';
			echo '<td>5 &#32; 01 &#32; 03 &#32; 010</td>';
			echo '<td>'.number_format($gs,2).'</td>';
			echo '<td><input type="number" id="gsis" name="gsis" class="w3-input" step=0.01 min=0 value="'.$gs.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_gsis_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Pag-Ibig Contributions</td>';
		echo '<td>5 &#32; 01 &#32; 03 &#32; 020</td>';
		echo '<td>'.number_format($love,2).'</td>';
		echo '<td><input type="number" id="hdmf" name="hdmf" class="w3-input" step=0.01 min=0 value="'.$love.'"></td>';
		echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_hdmf_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>PHILHEALTH Contributions</td>';
		echo '<td>5 &#32; 01 &#32; 03 &#32; 030</td>';
		echo '<td>'.number_format($cares,2).'</td>';
		echo '<td><input type="number" id="philHealth" name="philHealth" class="w3-input" step=0.01 min=0 value="'.$cares.'"></td>';
		echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_philhealth_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>ECC Contributions</td>';
		echo '	<td>5 &#32; 01 &#32; 03 &#32; 040</td>';
		echo '<td>'.number_format($ec,2).'</td>';
		echo '	<td><input type="number" id="ecc" name="ecc" class="w3-input" step=0.01 min=0 value="'.$ec.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ecc_bal(),2).'"></td>';
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Terminal Leave Benefits</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>'.number_format($tl,2).'</td>';
		echo '<td><input type="number" id="terminal-leave" name="terminal-leave" class="w3-input" step=0.01 min=0  value="0.00"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_tl_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td><strong>Others (Specify)</strong></td>';
		echo '	<td>&nbsp;</td>';
		echo '	<td>&nbsp;</td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>Other Personnel Benefits</td>';
		echo '	<td>&nbsp;</td>';
		echo '<td>'.number_format($opb,2).'</td>';
		echo '	<td><input type="number" id="personel" name="personel" class="w3-input" step=0.01 min=0  value="0.00"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_opb_bal(),2).'"></td>';	
		echo '</tr>';
		
		
		
		
		
		
		
		
		echo '<tr>';
		echo '<td>&nbsp;</td>';
		echo '<td><strong>TOTAL PERSONAL SERVICES:</strong></td>';
		echo '<td>'.number_format($totps,2).'</td>';
		echo '<td><input type="text" id="total-personal-services" name="total-personal-services" class="w2-input" value = "'.number_format($totps,2).'" readonly></td>';
		echo '<td><strong><input type="text" id="total-balance-personal-services" name="total-balance-personal-services" class="w2-input" readonly value="'.number_format(select_aip_totps_bal(),2).'"></strong></td>';
		echo '</tr>';
		
		
		echo '<tr>';
		echo '	<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td>';
		echo '	<td>5&#32;02</td>';
		echo '	<td>&nbsp;</td>';
		echo '	<td>&nbsp;</td>';
		echo '	<td>&nbsp;</td>';
		echo '</tr>';
		




		
		echo '<tr>';
		echo '	<td>Traveling Expenses</td>';
		echo '	<td>5&#32; 02 &#32; 01 &#32; 010</td>';
		echo '<td>'.number_format($travel,2).'</td>';
		echo '	<td><input type="number" id="tev" name="tev" class="w3-input" step=0.01 min=0 value="'.$travel.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_travel_bal(),2).'"></td>';
		echo '</tr>';
		
		

		echo '<tr>';
		echo '	<td>Training &amp; Seminar Expenses</td>';
		echo '	<td>5&#32; 02 &#32; 02 &#32; 010</td>';
		echo '<td>'.number_format($training,2).'</td>';
		echo '	<td><input type="number" id="training" name="training" class="w3-input" step=0.01 min=0 value="'.$training.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_training_bal(),2).'"></td>';
		echo '</tr>';
		


		echo '<tr>';
		echo '	<td>Telephone / Telegraph and Internet</td>';
		echo '	<td>5&#32; 02 &#32; 05 &#32; 030</td>';
		echo '<td>'.number_format($phonegraph,2).'</td>';
		echo '	<td><input type="number" id="telephone" name="telephone" class="w3-input" step=0.01 min=0 value="'.$phonegraph.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_telegraph_bal(),2).'"></td>';
		echo '</tr>';
		
		
		
		echo '<tr>';
		echo '<td>Postage and Deliveries</td>';
		echo '<td>5&#32; 02 &#32; 05 &#32; 010</td>';
		echo '<td>'.number_format($pst,2).'</td>';
		echo '<td><input type="number" id="postage" name="postage" class="w3-input" step=0.01 min=0 value="'.$pst.'"></td>';
		echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_postage_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>Insurance Premium</td>';
		echo '	<td>5&#32; 02 &#32; 16 &#32; 030</td>';
		echo '<td>'.number_format($ins,2).'</td>';
		echo '	<td><input type="number" id="insurance-premium" name="insurance-premium" class="w3-input" step=0.01 min=0 value="'.$ins.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_insurance_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>Fidelity Bond Premium</td>';
		echo '	<td>5&#32; 02 &#32; 16 &#32; 020</td>';
		echo '<td>'.number_format($fidel,2).'</td>';
		echo '	<td><input type="number" id="fedility-premium" name="fedility-premium" class="w3-input" step=0.01 min=0 value="'.$fidel.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_fidelity_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>Office Supplies Expenses</td>';
		echo '	<td>5&#32; 02 &#32; 03 &#32; 010</td>';
		echo '<td>'.number_format($offs,2).'</td>';
		echo '	<td><input type="number" id="office-supplies" name="office-supplies" class="w3-input" step=0.01 min=0 value="'.$offs.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_office_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '	<td>Gasoline, Oil &amp; Lubricants</td>';
		echo '	<td>5&#32; 02 &#32; 13 &#32; 090</td>';
		echo '<td>'.number_format($gasy,2).'</td>';
		echo '	<td><input type="number" id="gasoline" name="gasoline" class="w3-input" step=0.01 min=0 value="'.$gasy.'"></td>';
		echo '	<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_gasoline_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Motor Vehicle Maintenance</td>';
			echo '<td>5&#32; 02 &#32; 13 &#32; 060</td>';
			echo '<td>'.number_format($moto,2).'</td>';
			echo '<td><input type="number" id="vehicle-maintenance" name="vehicle-maintenance" class="w3-input" step=0.01 min=0 value="'.$moto.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_motor_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Office Equipment Maintenance</td>';
			echo '<td>5&#32; 02 &#32; 13 &#32; 070</td>';
			echo '<td>'.number_format($ofequip,2).'</td>';
			echo '<td><input type="number" id="equipment" name="equipment" class="w3-input" step=0.01 min=0 value="'.$ofequip.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_equip_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Confidential and Intelligence Expenses</td>';
		echo '<td>5&#32; 02 &#32; 10 &#32; 020</td>';
		echo '<td>'.number_format($confid,2).'</td>';
		echo '<td><input type="number" id="confidential" name="confidential" class="w3-input" step=0.01 min=0 value="'.$confid.'"></td>';
		echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_confidential_bal(),2).'"></td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>Other Maintenance and Operating Expenses</td>';
			echo '<td>5&#32; 02 &#32; 99 &#32; 990</td>';
			echo '<td>'.number_format($ot,2).'</td>';
			echo '<td><input type="number" id="other-maintenance" name="other-maintenance" class="w3-input" step=0.01 min=0 value="'.$ot.'"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_others_bal(),2).'"></td>';
		echo '</tr>';
		
		
		
		echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>TOTAL MAINT. AND OTHER OPERATING EXPENSES:</strong></td>';
			echo '<td>'.number_format($totmoe,2).'</td>';
			echo '<td><input type="text" id="total-maint-services" name="total-maint-services" class="w2-input" value="'. number_format($totmoe,2).'" readonly></td>';
			echo '<td><strong><input type="text" id="total-balance-maintenance-expenses" name="total-balance-maintenance-expenses" class="w2-input" readonly value="'.number_format(select_aip_totalmoe_bal(),2).'"></strong></td>';
			
		echo '</tr>';
		
		echo '<tr>';
			echo '<td><STRONG>1.3 Capital Outlay</STRONG></td>';
			echo '<td>1&#32;07&#32;05&#32;020</td>';
			echo '<td>'.number_format($capot,2).'</td>';
			echo '<td><input type="number" id="capital-outlay" name="capital-outlay" class="w3-input" step=0.01 min=0 value="'.$capot.'"></td>';
			echo '<td><strong><input type="text" id="total-balance-capital-outlay" name="total-balance-capital-outlay" class="w2-input" readonly value="'.number_format(select_aip_co_bal(),2).'"></strong></td>';
			
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>TOTAL CAPITAL OUTLAY:</strong></td>';
			echo '<td>&nbsp;</td>';
			echo '<td><input type="text" id="total-capital-outlay" name="total-capital-outlay" class="w2-input" value = "'.number_format($capot,2).'" readonly></td>';
			echo '<td><strong><input type="text" id="total-balance-capital-outlay" name="total-balance-capital-outlay" class="w2-input" readonly value="'.number_format(select_aip_co_bal(),2).'"></strong></td>';
			
		echo '</tr>';
		
		echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td colspan="3"><input type="submit" name="calc" value="Update"></td>';
		echo '</tr>';
		
		
		







echo '</table>';
echo '</div>';
echo '</form>';
?>
</body>
</html>