<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


$isLoaded = check_if_loaded_gad_aip();
		if ($isLoaded == '1'){
	
			header("location: aipGAD_readonly.php");
			}



?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];
	
	
	$sum = $_POST['gad1']+$_POST['gad2']+	$_POST['gad3']+$_POST['gad4']+	$_POST['gad5']+	$_POST['gad6']+	$_POST['gad7']+	$_POST['gad8']+	$_POST['gad9']+	$_POST['gad10']+	$_POST['gad11']+	$_POST['gad12']+	$_POST['gad13']+	$_POST['gad14']+	$_POST['gad15']+	$_POST['gad16']+	$_POST['gad17']+	$_POST['gad18']+	$_POST['gad19']+	$_POST['gad20']+	$_POST['gad21']+	$_POST['gad22']+	$_POST['gad23']+	$_POST['gad24']+	$_POST['gad25']+	$_POST['gad26']+	$_POST['gad27']+	$_POST['gad28']+	$_POST['gad29']+	$_POST['gad30']+	$_POST['gad31']+	$_POST['gad32']+	$_POST['gad33']+	$_POST['gad34']+	$_POST['gad35']+	$_POST['gad36']+	$_POST['gad37']+	$_POST['gad38']+	$_POST['gad39']+	$_POST['gad40']+	$_POST['gad41']+	$_POST['gad42']+	$_POST['gad43']+ $_POST['gad44'];
	
	
	$result = $db->prepare("INSERT INTO aipgad (
	Year, 
	gadOffice_m, 
	iec_mtrls, 
	bida_cpBldg,
	cLrNcD, 
	p_bloodstrips,
	hCcongress, 
	bloodService, 
	cancer_p,
	cervical_cs,
	wfs_asrh,
	capacity_CHV,
	reorient_BNS,
	backyard_g,
	nutrition_m,
	n_status,
	p_safety,
	subsidy_wfs,
	rollout_brgys,
	transpo_vamc,
	vamc_victims,
	wfs_oSupplies,
	maint_wfs,
	s_watchgroupVawc,
	capDev_margin,
	citizen_p_lights,
	ids_solo_p,
	spes_p,
	scholarship_grant,
	als,
	livelihood_skills,
	womens_m,
	family_week,
	alay_lakad,
	cap_dev_MOVE,
	volunteer_pw,
	counceling_rooms,
	farmersFishfolks_day,
	agriFish_training_farmers,
	drugAwareness_rduct,
	logistics_4ps,
	indi_crisis,
	family_planning,
	MOVE_mun_brgy_levels,
	client_foc) 
	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$result->execute([$budy, $_POST['gad1'],$_POST['gad2'],	$_POST['gad3'],$_POST['gad4'],	$_POST['gad5'],	$_POST['gad6'],	$_POST['gad7'],	$_POST['gad8'],	$_POST['gad9'],	$_POST['gad10'],	$_POST['gad11'],	$_POST['gad12'],	$_POST['gad13'],	$_POST['gad14'],	$_POST['gad15'],	$_POST['gad16'],	$_POST['gad17'],	$_POST['gad18'],	$_POST['gad19'],	$_POST['gad20'],	$_POST['gad21'],	$_POST['gad22'],	$_POST['gad23'],	$_POST['gad24'],	$_POST['gad25'],	$_POST['gad26'],	$_POST['gad27'],	$_POST['gad28'],	$_POST['gad29'],	$_POST['gad30'],	$_POST['gad31'],	$_POST['gad32'],	$_POST['gad33'],	$_POST['gad34'],	$_POST['gad35'],	$_POST['gad36'],	$_POST['gad37'],	$_POST['gad38'],	$_POST['gad39'],	$_POST['gad40'],	$_POST['gad41'],	$_POST['gad42'],	$_POST['gad43'], $_POST['gad44']]);
	
	
	
	$row_cnt = $result->rowCount();
	
	if($row_cnt == '1'){
		header("location: aipGAD_readonly.php");
	}
	else{ 
		unset($_POST);
		header('Location: '.$_SERVER['PHP_SELF']);
	}
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
	
</thead>
		<tr>	
			<td><strong>Organization Focused</strong></td>
			
		</tr>	
		
		<tr>
			<td>Equipping/supplies/maintaining GAD office</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad1" name="gad1" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Symposium/Production of IEC Materials</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad2" name="gad2" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Capacity Building, Seminars/Trainings to service providers (BIDA)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad3" name="gad3" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		<tr>
			<td><strong>Client Focused</strong></td>
		</tr>
		<tr>
			<td>Chronic Lifestyle related Non-Communicable Disease</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad4" name="gad4" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td>Purchase of Blood Sugar Testing Strips</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad5" name="gad5" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
				
		<tr>
			<td>Annual Health Club Congress</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad6" name="gad6" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Intensify Advocacy on RA 7719 (Nat'l Blood Service Act)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad7" name="gad7" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Cancer Prevention Program</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad8" name="gad8" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Conduct Free Cervical Cancer Screening</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad9" name="gad9" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Implementation of WFS ASRH Program</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad10" name="gad10" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Capacity Building for CHV</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad11" name="gad11" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Re-orientation of BNS</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad12" name="gad12" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Backyard Gardening</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad13" name="gad13" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>National Nutrition Month Celebration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad14" name="gad14" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Monitoring & Evaluation of the Nutritional Status of 0-59 Months-old Children</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad15" name="gad15" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Public Safety (Signages and Enforcers)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad16" name="gad16" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Subsidy of WFS Facilitators</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad17" name="gad17" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Rollout Sessions in Barangays</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad18" name="gad18" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Transportation Assistance to VAWC Clients</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad19" name="gad19" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Reception Expenses for VAWC Victims (food, clothing,first aid)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad20" name="gad20" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>WFS office supplies and Materials provided</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad21" name="gad21" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Maintenance of WFS</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad22" name="gad22" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Support to Watch Group/VAWC Desks in Barangays</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad23" name="gad23" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>CapDev/Provision of Technical/Financial Assistance to Marginalized Men and Women Group</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad24" name="gad24" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>Citizen Protection thru Provision of Streetlighting Facilities (maintenance of streetlights along National Highway)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad25" name="gad25" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		<tr>
			<td><strong>Solo Parent Act</strong></td>
		</tr>				
		<tr>
			<td>Provision of IDs to Solo Parent</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad26" name="gad26" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Support Services to SPES Program</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad27" name="gad27" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td>Scholarship Grant to Poor nd Deserving Girls and Boys</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad28" name="gad28" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Alternative Learning System</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad29" name="gad29" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Livelihood Skills Training & Additional Capital</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad30" name="gad30" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td><strong>Advocacy on mandatory Celebrations</strong></td>
		</tr>
		<tr>
			<td>Women's Month</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad31" name="gad31" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Family Week Celebration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad32" name="gad32" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Alay Lakad</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad33" name="gad33" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td><strong>Other Programs</strong></td>
		</tr>
		<tr>
			<td>Support to MOVE Organizing, CapDev</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad34" name="gad34" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Volunteer Program Workers (unpaid workers) (DCW)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad35" name="gad35" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Equipping of Counselling Room (interactive,toys, equipments)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad36" name="gad36" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Conduct of Farmers' and Fisherfolks' Day</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad37" name="gad37" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Conduct of Agri-Fish Trainings for Farmers and Fisherfolks</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad38" name="gad38" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Support to Drug Awareness and Reduction Program/Double Barrel Program - livelihood and rehabilitation of local drug surrenderees</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad39" name="gad39" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td><strong>Counterpart fund for 4Ps</strong></td>
		</tr>
		
		<tr>
			<td>Provide augmentation fund/logistics for 4Ps</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad40" name="gad40" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Assistance to Individual in Crisis Situations</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad41" name="gad41" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Roll-out Session on Community-based safe motherhood and Family Planning</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad42" name="gad42" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Organization and Support Services to MOVE at Municipal and Barangay Levels</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad43" name="gad43" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Client Focused</td>
			<td>&nbsp;</td>
			<td><input type="number" id="gad44" name="gad44" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" value="SUBMIT"></td>
		</tr>
		

</table>
</form>
</div>
</body>
</html>