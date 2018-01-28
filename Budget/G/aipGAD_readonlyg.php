<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");
include("function_gad.php");


if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}



?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){
$gad1 = $_POST['gad1'];		
$gad2 = $_POST['gad2'];		
$gad3 = $_POST['gad3'];
$gad4 = $_POST['gad4'];		
$gad5 = $_POST['gad5'];
$gad6 = $_POST['gad6'];
$gad7 = $_POST['gad7'];
$gad8 = $_POST['gad8'];
$gad9 = $_POST['gad9'];
$gad10 = $_POST['gad10'];
$gad11 = $_POST['gad11'];		
$gad12 = $_POST['gad12'];		
$gad13 = $_POST['gad13'];
$gad14 = $_POST['gad14'];		
$gad15 = $_POST['gad15'];
$gad16 = $_POST['gad16'];
$gad17 = $_POST['gad17'];
$gad18 = $_POST['gad18'];
$gad19 = $_POST['gad19'];
$gad20 = $_POST['gad20'];
$gad21 = $_POST['gad21'];		
$gad22 = $_POST['gad22'];		
$gad23 = $_POST['gad23'];
$gad24 = $_POST['gad24'];		
$gad25 = $_POST['gad25'];
$gad26 = $_POST['gad26'];
$gad27 = $_POST['gad27'];
$gad28 = $_POST['gad28'];
$gad29 = $_POST['gad29'];
$gad30 = $_POST['gad30'];
$gad31 = $_POST['gad31'];		
$gad32 = $_POST['gad32'];		
$gad33 = $_POST['gad33'];
$gad34 = $_POST['gad34'];		
$gad35 = $_POST['gad35'];
$gad36 = $_POST['gad36'];
$gad37 = $_POST['gad37'];
$gad38 = $_POST['gad38'];
$gad39 = $_POST['gad39'];
$gad40 = $_POST['gad40'];
$gad41 = $_POST['gad41'];
$gad42 = $_POST['gad42'];
$gad43 = $_POST['gad43'];
$gad44 = $_POST['gad44'];

	$budy = $_SESSION['budget'];
	$result = $db->prepare("UPDATE aipGAD SET 
	gadOffice_m = ?,
	iec_mtrls = ?,
	bida_cpBldg = ?,
	cLrNcD = ?,
	p_bloodstrips = ?,
	hCcongress = ?,
	bloodService = ?,
	cancer_p = ?,
	cervical_cs = ?,
	wfs_asrh = ?,
	capacity_CHV = ?,
	reorient_BNS = ?,
	backyard_g = ?,
	nutrition_m = ?,
	n_status = ?,
	p_safety = ?,
	subsidy_wfs = ?,
	rollout_brgys = ?,
	transpo_vamc = ?,
	vamc_victims = ?,
	wfs_oSupplies = ?,
	maint_wfs = ?,
	s_watchgroupVawc = ?,
	capDev_margin = ?,
	citizen_p_lights = ?,
	ids_solo_p = ?,
	spes_p = ?,
	scholarship_grant = ?,
	als = ?,
	livelihood_skills = ?,
	womens_m = ?,
	family_week = ?,
	alay_lakad = ?,
	cap_dev_MOVE = ?,
	volunteer_pw = ?,
	counceling_rooms = ?,
	farmersFishfolks_day = ?,
	agriFish_training_farmers = ?,
	drugAwareness_rduct = ?,
	logistics_4ps = ?,
	indi_crisis = ?,
	family_planning = ?,
	MOVE_mun_brgy_levels = ?,
	client_foc = ?
	WHERE Year = ?");
	$result->execute([
$gad1,
$gad2,
$gad3,
$gad4,
$gad5,
$gad6,
$gad7,
$gad8,
$gad9,
$gad10,
$gad11,
$gad12,
$gad13,
$gad14,
$gad15,
$gad16,
$gad17,
$gad18,
$gad19,
$gad20,
$gad21,
$gad22,
$gad23,
$gad24,
$gad25,
$gad26,
$gad27,
$gad28,
$gad29,
$gad30,
$gad31,
$gad32,
$gad33,
$gad34,
$gad35,
$gad36,
$gad37,
$gad38,
$gad39,
$gad40,
$gad41,
$gad42,
$gad43,
$gad44,
$budy]);
	
}


$result = $db->prepare("SELECT * FROM aipgad WHERE Year=?");
$result->execute([$_SESSION['budget']]);

foreach($result as $key => $row){

$gad1 = $row['gadOffice_m'];
$gadb1 = $row['gadOffice_mbal'];

$gad2 = $row['iec_mtrls'];
$gadb2 = $row['iec_mtrlsbal'];


$gad3 = $row['bida_cpBldg'];
$gadb3 = $row['bida_cpBldgbal'];

$gad4 = $row['cLrNcD'];
$gadb4 = $row['cLrNcDbal'];

$gad5 = $row['p_bloodstrips'];
$gadb5 = $row['p_bloodstripsbal'];

$gad6 = $row['hCcongress'];
$gadb6 = $row['hCcongressbal'];



$gad7 = $row['bloodService'];
$gadb7 = $row['bloodServicebal'];

$gad8 = $row['cancer_p'];
$gadb8 = $row['cancer_pbal'];

$gad9 = $row['cervical_cs'];
$gadb9 = $row['cervical_csbal'];

$gad10 = $row['wfs_asrh'];
$gadb10 = $row['wfs_asrhbal'];

$gad11 = $row['capacity_CHV'];
$gadb11 = $row['capacity_CHVbal'];

$gad12 = $row['reorient_BNS'];
$gadb12 = $row['reorient_BNSbal'];

$gad13 = $row['backyard_g'];
$gadb13 = $row['backyard_gbal'];

$gad14 = $row['nutrition_m'];
$gadb14 = $row['nutrition_mbal'];


$gad15 = $row['n_status'];
$gadb15 = $row['n_statusbal'];

$gad16 = $row['p_safety'];
$gadb16 = $row['p_safetybal'];


$gad17 = $row['subsidy_wfs'];
$gadb17 = $row['subsidy_wfsbal'];

$gad18 = $row['rollout_brgys'];
$gadb18 = $row['rollout_brgysbal'];

$gad19 = $row['transpo_vamc'];
$gadb19 = $row['transpo_vamcbal'];

$gad20 = $row['vamc_victims'];
$gadb20 = $row['vamc_victimsbal'];

$gad21 = $row['wfs_oSupplies'];
$gadb21 = $row['wfs_oSuppliesbal'];

$gad22 = $row['maint_wfs'];
$gadb22 = $row['maint_wfsbal'];

$gad23 = $row['s_watchgroupVawc'];
$gadb23 = $row['s_watchgroupVawcbal'];

$gad24 = $row['capDev_margin'];
$gadb24 = $row['capDev_marginbal'];

$gad25 = $row['citizen_p_lights'];
$gadb25 = $row['citizen_p_lightsbal'];

$gad26 = $row['ids_solo_p'];
$gadb26 = $row['ids_solo_pbal'];

$gad27 = $row['spes_p'];
$gadb27 = $row['spes_pbal'];

$gad28 = $row['scholarship_grant'];
$gadb28 = $row['scholarship_grantbal'];

$gad29 = $row['als'];
$gadb29 = $row['alsbal'];

$gad30 = $row['livelihood_skills'];
$gadb30 = $row['livelihood_skillsbal'];

$gad31 = $row['womens_m'];
$gadb31 = $row['womens_mbal'];

$gad32 = $row['family_week'];
$gadb32 = $row['family_weekbal'];

$gad33 = $row['alay_lakad'];
$gadb33 = $row['alay_lakadbal'];

$gad34 = $row['cap_dev_MOVE'];
$gadb34 = $row['cap_dev_MOVEbal'];


$gad35 = $row['volunteer_pw'];
$gadb35 = $row['volunteer_pwbal'];

$gad36 = $row['counceling_rooms'];
$gadb36 = $row['counceling_roomsbal'];


$gad37 = $row['farmersFishfolks_day'];
$gadb37 = $row['farmersFishfolks_daybal'];

$gad38 = $row['agriFish_training_farmers'];
$gadb38 = $row['agriFish_training_farmersbal'];


$gad39 = $row['drugAwareness_rduct'];
$gadb39 = $row['drugAwareness_rductbal'];

$gad40 = $row['logistics_4ps'];
$gadb40 = $row['logistics_4psbal'];

$gad41 = $row['indi_crisis'];
$gadb41 = $row['indi_crisisbal'];

$gad42 = $row['family_planning'];
$gadb42 = $row['family_planningbal'];

$gad43 = $row['MOVE_mun_brgy_levels'];
$gadb43 = $row['MOVE_mun_brgy_levelsbal'];

$gad44 = $row['client_foc'];
$gadb44 = $row['client_focbal'];


}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP |  Gender and Development</title>
<style>
html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	margin:0;
	min-width: 1000px;
	
}


#accountTitle {
	padding: 0;
	display: block;
	margin-top: 10px;
	margin-bottom: -120px;
	margin-left: 50px;
	font-size: 36px;
	min-width: 1000px;
}	
#container {
	margin-top: 135px;
	position: relative;
	padding: 0;
	width: 100%;
	min-width: 1000px;
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

	background-color: #955251;
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
	min-width: 1000px;
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
	background-color: #955251;
    color: white;
}
	
	
.table-wrap {

text-align: center;
margin: 0 auto;
width: 100%;


}	
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	min-width: 1600px;
	
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
</head>
<body>
<label id="accountTitle">Programmed Appropriation and Obligation</label>
<div id="container">
	<div class="wrap">
		<ul>
			<li><a href="aipMMO.php">MMO</a></li>
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
			<li><a href="aipGAD.php"  class="active">GAD</a></li>
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
  <a href="gad.php">RAO GAD</a>
  <a href="personal_services_mmo_all.php">Personnel Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_mmo_all.php">Capital Outlay</a>
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>5% Gender and Development</strong></label>  

<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	<th>Balance</th>
	
</thead>
		<tr>	
			<td><strong>Organization Focused</strong></td>
			
		</tr>	
		
		<tr>
			<td>Equipping/supplies/maintaining GAD office</td>
			<?PHP
			echo '<td>'.number_format($gad1,2).'</td>';
			echo '<td><input type="number" id="gad1" name="gad1" class="w3-input" step="any" value="'.$gad1.'"></td>';
			echo '<td>'.number_format($gadb1,2).'</td>';
			?>
		</tr>
		
		<tr>
			<td>Symposium/Production of IEC Materials</td>
			<td><?PHP echo number_format($gad2,2); ?></td>
			<td><input type="number" id="gad2" name="gad2" class="w3-input" step="any" value="<?PHP echo $gad2; ?>"></td>
			<td><?PHP echo number_format($gadb2,2); ?></td>
			
		</tr>
		
		<tr>
			<td>Capacity Building, Seminars/Trainings to service providers (BIDA)</td>
			<td><?PHP echo number_format($gad3,2); ?></td>
			<td><input type="number" id="gad3" name="gad3" class="w3-input" step="any" value="<?PHP echo $gad3; ?>"></td>
			<td><?PHP echo number_format($gadb3,2); ?></td>
		</tr>
		<tr>
			<td><strong>Client Focused</strong></td>
		</tr>
		<tr>
			<td>Chronic Lifestyle related Non-Communicable Disease</td>
			<td><?PHP echo number_format($gad4,2); ?></td>
			<td><input type="number" id="gad4" name="gad4" class="w3-input" step="any" value="<?PHP echo $gad4; ?>"></td>
			<td><?PHP echo number_format($gadb4,2); ?></td>
		</tr>

		<tr>
			<td>Purchase of Blood Sugar Testing Strips</td>
			<td><?PHP echo number_format($gad5,2); ?></td>
			<td><input type="number" id="gad5" name="gad5" class="w3-input" step="any" value="<?PHP echo $gad5; ?>"></td>
			<td><?PHP echo number_format($gadb5,2); ?></td>
		</tr>
				
		<tr>
			<td>Annual Health Club Congress</td>
			<td><?PHP echo number_format($gad6,2); ?></td>
			<td><input type="number" id="gad6" name="gad6" class="w3-input" step="any" value="<?PHP echo $gad6; ?>"></td>
			<td><?PHP echo number_format($gadb6,2); ?></td>
		</tr>
		
		<tr>
			<td>Intensify Advocacy on RA 7719 (Nat'l Blood Service Act)</td>
			<td><?PHP echo number_format($gad7,2); ?></td>
			<td><input type="number" id="gad7" name="gad7" class="w3-input" step="any" value="<?PHP echo $gad7; ?>"></td>
			<td><?PHP echo number_format($gadb7,2); ?></td>
		</tr>
		
		<tr>
			<td>Cancer Prevention Program</td>
			<td><?PHP echo number_format($gad8,2); ?></td>
			<td><input type="number" id="gad8" name="gad8" class="w3-input" step="any" value="<?PHP echo $gad8; ?>"></td>
			<td><?PHP echo number_format($gadb8,2); ?></td>
		</tr>
		
		<tr>
			<td>Conduct Free Cervical Cancer Screening</td>
			<td><?PHP echo number_format($gad9,2); ?></td>
			<td><input type="number" id="gad9" name="gad9" class="w3-input" step="any" value="<?PHP echo $gad9; ?>"></td>
			<td><?PHP echo number_format($gadb9,2); ?></td>
		</tr>
		
		<tr>
			<td>Implementation of WFS ASRH Program</td>
			<td><?PHP echo number_format($gad10,2); ?></td>
			<td><input type="number" id="gad10" name="gad10" class="w3-input" step="any" value="<?PHP echo $gad10; ?>"></td>
			<td><?PHP echo number_format($gadb10,2); ?></td>
		</tr>
		
		<tr>
			<td>Capacity Building for CHV</td>
			<td><?PHP echo number_format($gad11,2); ?></td>
			<td><input type="number" id="gad11" name="gad11" class="w3-input" step="any" value="<?PHP echo $gad11; ?>"></td>
			<td><?PHP echo number_format($gadb11,2); ?></td>
		</tr>
		
		<tr>
			<td>Re-orientation of BNS</td>
			<td><?PHP echo number_format($gad12,2); ?></td>
			<td><input type="number" id="gad12" name="gad12" class="w3-input" step="any" value="<?PHP echo $gad12; ?>"></td>
			<td><?PHP echo number_format($gadb12,2); ?></td>
		</tr>
		
		<tr>
			<td>Backyard Gardening</td>
			<td><?PHP echo number_format($gad13,2); ?></td>
			<td><input type="number" id="gad13" name="gad13" class="w3-input" step="any" value="<?PHP echo $gad13; ?>"></td>
			<td><?PHP echo number_format($gadb13,2); ?></td>
		</tr>
		
		<tr>
			<td>National Nutrition Month Celebration</td>
			<td><?PHP echo number_format($gad14,2); ?></td>
			<td><input type="number" id="gad14" name="gad14" class="w3-input" step="any" value="<?PHP echo $gad14; ?>"></td>
			<td><?PHP echo number_format($gadb14,2); ?></td>
		</tr>
		
		<tr>
			<td>Monitoring & Evaluation of the <br>Nutritional Status of 0-59 Months-old Children</td>
			<td><?PHP echo number_format($gad15,2); ?></td>
			<td><input type="number" id="gad15" name="gad15" class="w3-input" step="any" value="<?PHP echo $gad15; ?>"></td>
			<td><?PHP echo number_format($gadb15,2); ?></td>
		</tr>
		
		<tr>
			<td>Public Safety (Signages and Enforcers)</td>
			<td><?PHP echo number_format($gad16,2); ?></td>
			<td><input type="number" id="gad16" name="gad16" class="w3-input" step="any" value="<?PHP echo $gad16; ?>"></td>
			<td><?PHP echo number_format($gadb16,2); ?></td>
		</tr>
		
		<tr>
			<td>Subsidy of WFS Facilitators</td>
			<td><?PHP echo number_format($gad17,2); ?></td>
			<td><input type="number" id="gad17" name="gad17" class="w3-input" step="any" value="<?PHP echo $gad17; ?>"></td>
			<td><?PHP echo number_format($gadb17,2); ?></td>
		</tr>
		
		<tr>
			<td>Rollout Sessions in Barangays</td>
			<td><?PHP echo number_format($gad18,2); ?></td>
			<td><input type="number" id="gad18" name="gad18" class="w3-input" step="any" value="<?PHP echo $gad18; ?>"></td>
			<td><?PHP echo number_format($gadb18,2); ?></td>
		</tr>
		
		<tr>
			<td>Transportation Assistance to VAWC Clients</td>
			<td><?PHP echo number_format($gad19,2); ?></td>
			<td><input type="number" id="gad19" name="gad19" class="w3-input" step="any" value="<?PHP echo $gad19; ?>"></td>
			<td><?PHP echo number_format($gadb19,2); ?></td>
		</tr>
		
		<tr>
			<td>Reception Expenses for VAWC Victims (food, clothing,first aid)</td>
			<td><?PHP echo number_format($gad20,2); ?></td>
			<td><input type="number" id="gad20" name="gad20" class="w3-input" step="any" value="<?PHP echo $gad20; ?>"></td>
			<td><?PHP echo number_format($gadb20,2); ?></td>
		</tr>
		
		<tr>
			<td>WFS office supplies and Materials provided</td>
			<td><?PHP echo number_format($gad21,2); ?></td>
			<td><input type="number" id="gad21" name="gad21" class="w3-input" step="any" value="<?PHP echo $gad21; ?>"></td>
			<td><?PHP echo number_format($gadb21,2); ?></td>
		</tr>
		
		<tr>
			<td>Maintenance of WFS</td>
			<td><?PHP echo number_format($gad22,2); ?></td>
			<td><input type="number" id="gad22" name="gad22" class="w3-input" step="any" value="<?PHP echo $gad22; ?>"></td>
			<td><?PHP echo number_format($gadb22,2); ?></td>
		</tr>
		
		<tr>
			<td>Support to Watch Group/VAWC Desks in Barangays</td>
			<td><?PHP echo number_format($gad23,2); ?></td>
			<td><input type="number" id="gad23" name="gad23" class="w3-input" step="any" value="<?PHP echo $gad23; ?>"></td>
			<td><?PHP echo number_format($gadb23,2); ?></td>
		</tr>
		
		<tr>
			<td>CapDev/Provision of Technical/Financial Assistance <br>to Marginalized Men and Women Group</td>
			<td><?PHP echo number_format($gad24,2); ?></td>
			<td><input type="number" id="gad24" name="gad24" class="w3-input" step="any" value="<?PHP echo $gad24; ?>"></td>
			<td><?PHP echo number_format($gadb24,2); ?></td>
		</tr>
		
		<tr>
			<td>Citizen Protection thru Provision of Streetlighting Facilities <br> (maintenance of streetlights along National Highway)</td>
			<td><?PHP echo number_format($gad25,2); ?></td>
			<td><input type="number" id="gad25" name="gad25" class="w3-input" step="any" value="<?PHP echo $gad25; ?>"></td>
			<td><?PHP echo number_format($gadb25,2); ?></td>
		</tr>
		<tr>
			<td><strong>Solo Parent Act</strong></td>
		</tr>				
		<tr>
			<td>Provision of IDs to Solo Parent</td>
			<td><?PHP echo number_format($gad26,2); ?></td>
			<td><input type="number" id="gad26" name="gad26" class="w3-input" step="any" value="<?PHP echo $gad26; ?>"></td>
			<td><?PHP echo number_format($gadb26,2); ?></td>
		</tr>
		<tr>
			<td>Support Services to SPES Program</td>
			<td><?PHP echo number_format($gad27,2); ?></td>
			<td><input type="number" id="gad27" name="gad27" class="w3-input" step="any" value="<?PHP echo $gad27; ?>"></td>
			<td><?PHP echo number_format($gadb27,2); ?></td>
		</tr>

		<tr>
			<td>Scholarship Grant to Poor nd Deserving Girls and Boys</td>
			<td><?PHP echo number_format($gad28,2); ?></td>
			<td><input type="number" id="gad28" name="gad28" class="w3-input" step="any" value="<?PHP echo $gad28; ?>"></td>
			<td><?PHP echo number_format($gadb28,2); ?></td>
		</tr>
		<tr>
			<td>Alternative Learning System</td>
			<td><?PHP echo number_format($gad29,2); ?></td>
			<td><input type="number" id="gad29" name="gad29" class="w3-input" step="any" value="<?PHP echo $gad29; ?>"></td>
			<td><?PHP echo number_format($gadb29,2); ?></td>
		</tr>
		<tr>
			<td>Livelihood Skills Training & Additional Capital</td>
			<td><?PHP echo number_format($gad30,2); ?></td>
			<td><input type="number" id="gad30" name="gad30" class="w3-input" step="any" value="<?PHP echo $gad30; ?>"></td>
			<td><?PHP echo number_format($gadb30,2); ?></td>
		</tr>
		<tr>
			<td><strong>Advocacy on mandatory Celebrations</strong></td>
		</tr>
		<tr>
			<td>Women's Month</td>
			<td><?PHP echo number_format($gad31,2); ?></td>
			<td><input type="number" id="gad31" name="gad31" class="w3-input" step="any" value="<?PHP echo $gad31; ?>"></td>
			<td><?PHP echo number_format($gadb31,2); ?></td>
		</tr>
		<tr>
			<td>Family Week Celebration</td>
			<td><?PHP echo number_format($gad32,2); ?></td>
			<td><input type="number" id="gad32" name="gad32" class="w3-input" step="any" value="<?PHP echo $gad32; ?>"></td>
			<td><?PHP echo number_format($gadb32,2); ?></td>
		</tr>
		<tr>
			<td>Alay Lakad</td>
			<td><?PHP echo number_format($gad33,2); ?></td>
			<td><input type="number" id="gad33" name="gad33" class="w3-input" step="any" value="<?PHP echo $gad33; ?>"></td>
			<td><?PHP echo number_format($gadb33,2); ?></td>
		</tr>
		<tr>
			<td><strong>Other Programs</strong></td>
		</tr>
		<tr>
			<td>Support to MOVE Organizing, CapDev</td>
			<td><?PHP echo number_format($gad34,2); ?></td>
			<td><input type="number" id="gad34" name="gad34" class="w3-input" step="any" value="<?PHP echo $gad34; ?>"></td>
			<td><?PHP echo number_format($gadb34,2); ?></td>
		</tr>
		<tr>
			<td>Volunteer Program Workers (unpaid workers) (DCW)</td>
			<td><?PHP echo number_format($gad35,2); ?></td>
			<td><input type="number" id="gad35" name="gad35" class="w3-input" step="any" value="<?PHP echo $gad35; ?>"></td>
			<td><?PHP echo number_format($gadb35,2); ?></td>
		</tr>
		<tr>
			<td>Equipping of Counselling Room (interactive,toys, equipments)</td>
			<td><?PHP echo number_format($gad36,2); ?></td>
			<td><input type="number" id="gad36" name="gad36" class="w3-input" step="any" value="<?PHP echo $gad36; ?>"></td>
			<td><?PHP echo number_format($gadb36,2); ?></td>
		</tr>
		<tr>
			<td>Conduct of Farmers' and Fisherfolks' Day</td>
			<td><?PHP echo number_format($gad37,2); ?></td>
			<td><input type="number" id="gad37" name="gad37" class="w3-input" step="any" value="<?PHP echo $gad37; ?>"></td>
			<td><?PHP echo number_format($gadb37,2); ?></td>
		</tr>
		<tr>
			<td>Conduct of Agri-Fish Trainings for Farmers and Fisherfolks</td>
			<td><?PHP echo number_format($gad38,2); ?></td>
			<td><input type="number" id="gad38" name="gad38" class="w3-input" step="any" value="<?PHP echo $gad38; ?>"></td>
			<td><?PHP echo number_format($gadb38,2); ?></td>
		</tr>
		<tr>
			<td>Support to Drug Awareness and Reduction Program/Double Barrel Program -<br> livelihood and rehabilitation of local drug surrenderees</td>
			<td><?PHP echo number_format($gad39,2); ?></td>
			<td><input type="number" id="gad39" name="gad39" class="w3-input" step="any" value="<?PHP echo $gad39; ?>"></td>
			<td><?PHP echo number_format($gadb39,2); ?></td>
		</tr>
		<tr>
			<td><strong>Counterpart fund for 4Ps</strong></td>
		</tr>
		
		<tr>
			<td>Provide augmentation fund/logistics for 4Ps</td>
			<td><?PHP echo number_format($gad40,2); ?></td>
			<td><input type="number" id="gad40" name="gad40" class="w3-input" step="any" value="<?PHP echo $gad40; ?>"></td>
			<td><?PHP echo number_format($gadb40,2); ?></td>
		</tr>
		<tr>
			<td>Assistance to Individual in Crisis Situations</td>
			<td><?PHP echo number_format($gad41,2); ?></td>
			<td><input type="number" id="gad41" name="gad41" class="w3-input" step="any" value="<?PHP echo $gad41; ?>"></td>
			<td><?PHP echo number_format($gadb41,2); ?></td>
		</tr>
		<tr>
			<td>Roll-out Session on Community-based safe motherhood and Family Planning</td>
			<td><?PHP echo number_format($gad42,2); ?></td>
			<td><input type="number" id="gad42" name="gad42" class="w3-input" step="any" value="<?PHP echo $gad42; ?>"></td>
			<td><?PHP echo number_format($gadb42,2); ?></td>
		</tr>
		<tr>
			<td>Organization and Support Services to MOVE at Municipal and Barangay Levels</td>
			<td><?PHP echo number_format($gad43,2); ?></td>
			<td><input type="number" id="gad43" name="gad43" class="w3-input" step="any" value="<?PHP echo $gad43; ?>"></td>
			<td><?PHP echo number_format($gadb43,2); ?></td>
		</tr>
		<tr>
			<td>Client Focused</td>
			<td><?PHP echo number_format($gad44,2); ?></td>
			<td><input type="number" id="gad44" name="gad44" class="w3-input" step="any" value="<?PHP echo $gad44; ?>"></td>
			<td><?PHP echo number_format($gadb44,2); ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan=2><input type="submit" value="SUBMIT"></td>
		</tr>
		

</table>
</form>
</div>
</body>
</html>