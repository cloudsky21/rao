<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


$isLoaded = check_if_loaded_mdr_aip();
		if ($isLoaded == '1'){
	
			header("location: aipMDR_readonly.php");
			}


?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];

	$mdr1 = $_POST['mdr1'];
	$mdr2 = $_POST['mdr2'];
	$mdr3 = $_POST['mdr3'];
	$mdr4 = $_POST['mdr4'];
	$mdr5 = $_POST['mdr5'];
	$mdr6 = $_POST['mdr6'];
	$mdr7 = $_POST['mdr7'];
	$mdr8 = $_POST['mdr8'];
	$mdr9 = $_POST['mdr9'];
	$mdr10 = $_POST['mdr10'];
	$mdr11 = $_POST['mdr11'];
	$mdr12 = $_POST['mdr12'];
	$mdr13 = $_POST['mdr13'];
	$mdr14 = $_POST['mdr14'];
	$mdr15 = $_POST['mdr15'];
	$mdr16 = $_POST['mdr16'];
	$mdr17 = $_POST['mdr17'];
	$mdr18 = $_POST['mdr18'];
	$mdr19 = $_POST['mdr19'];
	$mdr20 = $_POST['mdr20'];
	$mdr21 = $_POST['mdr21'];
	$mdr22 = $_POST['mdr22'];
	$mdr23 = $_POST['mdr23'];
	$mdr24 = $_POST['mdr24'];
	$mdr25 = $_POST['mdr25'];
	$mdr26 = $_POST['mdr26'];
	$mdr27 = $_POST['mdr27'];
	$mdr28 = $_POST['mdr28'];
	$mdr29 = $_POST['mdr29'];
	$mdr30 = $_POST['mdr30'];
	$mdr31 = $_POST['mdr31'];
	$mdr32 = $_POST['mdr32'];
	$mdr33 = $_POST['mdr33'];
	$mdr34 = $_POST['mdr34'];
	$mdr35 = $_POST['mdr35'];
	$mdr36 = $_POST['mdr36'];
	
	$total = $mdr1 + $mdr2 + $mdr3 + $mdr4 + $mdr5 + $mdr6 + $mdr7 + $mdr8 + $mdr9 + $mdr10 + 
			$mdr11 + $mdr1 + $mdr13 + $mdr14 + $mdr15 + $mdr16 + $mdr17 + $mdr18 + $mdr19 + $mdr20 + 
			$mdr21 + $mdr22 + $mdr23 + $mdr24 + $mdr25 + $mdr26 + $mdr27 + $mdr28 + $mdr29 + $mdr30 + 
			$mdr31 + $mdr32 + $mdr33 + $mdr34 + $mdr35 + $mdr36;
			

	
	$result = $db->prepare("INSERT INTO aipmdr (
	yearm,
	opCen,
	officeSupplies,
	inventoryRiskAssess,
	canalswaterways,
	researchstudy,
	drrcca,
	trainingdrrcaa,
	contingency,
	warningforecasting,
	radio,
	phonemaintenance,
	rescueeqpts,
	evacsupplies,
	stockpilingfoods,
	drrmonitoring,
	gobags,
	fuelslub,
	rescueteams,
	gendersens,
	medical,
	miscexpenses,
	policevisibility,
	datacollection,
	updatewarningbulletins,
	dana,
	damageinfra,
	schoolrehab,
	lowcosthousing,
	sustainablelivelihood,
	livelihoodtraining,
	financialassistance,
	eastersunday,
	earthday,
	johnthebaptistday,
	yolandamemorial,
	uniformresponders,
	total
	) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	
	$result->execute([$budy,$mdr1,$mdr2,$mdr3,$mdr4,$mdr5,$mdr6,$mdr7,$mdr8,$mdr9,$mdr10,$mdr11,$mdr12,$mdr13,$mdr14,$mdr15,$mdr16,$mdr17,$mdr18,$mdr19,$mdr20,$mdr21,$mdr22,$mdr23,$mdr24,$mdr25,$mdr26,$mdr27,$mdr28,$mdr29,$mdr30,$mdr31,$mdr32,$mdr33,$mdr34,$mdr35,$mdr36,$total]);
	
	$rowCnt = $result->rowCount();
	if($rowCnt>0){
		
	unset($_POST);
	header("location: aipMDR_readonly.php");	
	
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP |  Municipal Disaster Risk</title>
<style>
html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	margin:0;
	min-width: 1000px;
	width: 100%;
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

	background-color: #B565A7;
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
	background-color: #B565A7;
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
			<li><a href="aipGAD.php">GAD</a></li>
			<li><a href="aipMDR.php"  class="active">MDR</a></li>
			<li><a href="aip1SP.php">1% SC & PWDs</a></li>
			<li><a href="aip1iralcpc.php">1% IRA & LCPC</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="mdr.php">RAO MDR</a>
  <a href="personal_services_mmo_all.php">Personnel Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_mmo_all.php">Capital Outlay</a>
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>5% Municipal Disaster Risk</strong></label>  

<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	
</thead>
		<tr>	
			<td><strong>Disaster Prevention/Mitigation</strong></td>
			
		</tr>	
		
		<tr>
			<td>&nbsp;&nbsp; Establishment/Furnishing  of OpCen</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr1" name="mdr1" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Office Supplies</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr2" name="mdr2" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Conduct Inventory/Risk Assessment and Identify Vulnerability Reduction Measures for Critical Facilities and Infrastructure</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr3" name="mdr3" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
	
			
		<tr>
			<td>&nbsp;&nbsp; Continuous Construction/Repair/Repair/rehab /Dredging/ Declogging of canals and waterways</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr4" name="mdr4" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><strong>Disaster Preparedness</strong></td>
		</tr>
				
		<tr>
			<td>&nbsp;&nbsp; Continuing Research & Study</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr5" name="mdr5" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Preparation/ Production/ Distribution of DRR/CCA IEC Materials</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr6" name="mdr6" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Capacity Building Program/Trainings on DRR/CAA</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr7" name="mdr7" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Contingency Planning and Budgeting</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr8" name="mdr8" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Installation of Warning and Forecasting System</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr9" name="mdr9" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Maintenance of Two-way Radio/Repeater and Early Warning Devices</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr10" name="mdr10" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Internet/Telephon/Mobilephone maintenance expenses dissemination of emergency warnings/advisories</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr11" name="mdr11" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Purchase of additional Rescue Eqpts & emergency health kits</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr12" name="mdr12" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Purchase of additional supplies/materials/utensils for evacuation center</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr13" name="mdr13" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Stockpiling of food and non-food commodities</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr14" name="mdr14" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; DRR Monitoring and evaluation</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr15" name="mdr15" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Go Bags</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr16" name="mdr16" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><strong>Disaster Response</strong></td>
		</tr>
		
		
		
		
		<tr>
			<td>&nbsp;&nbsp; Deployment of emergency transportvehicles/motorboat (fuels/lubricants)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr17" name="mdr17" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Prepositioning of search and rescue teams</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr18" name="mdr18" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Relief Operations which are gender sensitive</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr19" name="mdr19" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Medical Consultation & treatment, psycho-social care and disease surveillance</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr20" name="mdr20" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Food Supplies, Emergency Miscellaneous Expenses</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr21" name="mdr21" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Deployment/Police Visibility in Evacuation Center/ business establishment and strategic areas to maintain  peace and order in affected communities</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr22" name="mdr22" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Data collection and updating of affected population resources and damages</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr23" name="mdr23" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Continuous update of warning bulletins and advisory</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr24" name="mdr24" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><strong>Disaster Rehabilitation & Recovery Phase</strong></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		
		
		
		
		
		<tr>
			<td>&nbsp;&nbsp; Conduct of Rapid of Damage Assessment & Needs Analysis (DANA)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr25" name="mdr25" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;&nbsp; Repair/Construction of Damaged infra and facilities</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr26" name="mdr26" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Repair/Rehabilitation of School Buildings</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr27" name="mdr27" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td>&nbsp;&nbsp; Resettlement of affected families within high risk areas (low cost housing, core shelter)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr28" name="mdr28" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Provision of Sustainable livelihood and employment program/cash for wrok</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr29" name="mdr29" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Livelihood Training</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr30" name="mdr30" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Provision of financial assistance to disaster victims</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr31" name="mdr31" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>	
		<tr>
			<td><i>Mandatory Celebration</i></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Easter Sunday</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr32" name="mdr32" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; National Earth Day celebration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr33" name="mdr33" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; John the Baptist Day</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr34" name="mdr34" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Yolanda Memorial Activity</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr35" name="mdr35" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Uniform of Responders</td>
			<td>&nbsp;</td>
			<td><input type="number" id="mdr36" name="mdr36" class="w3-input" step="any" value="0.00"></td>
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