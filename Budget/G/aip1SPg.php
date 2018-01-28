<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


$isLoaded = check_if_loaded_sc_aip() + check_if_loaded_pwd_aip();
		if ($isLoaded == '2'){
	
			header("location: aip1SP_readonly.php");
			}


?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];

	$pwd1 = $_POST['pwd1'];
	$pwd2 = $_POST['pwd2'];
	$pwd3 = $_POST['pwd3'];
	$pwd4 = $_POST['pwd4'];
	$pwd5 = $_POST['pwd5'];
	$pwd6 = $_POST['pwd6'];
	$pwd7 = $_POST['pwd7'];
	$pwd8 = $_POST['pwd8'];
	$pwd9 = $_POST['pwd9'];
	
	
	$total_pwd = $pwd1 + $pwd2 + $pwd3 + $pwd4 + $pwd5
			   + $pwd6 + $pwd7 + $pwd8 + $pwd9;
	
	$sc1 = $_POST['sc1'];
	$sc2 = $_POST['sc2'];
	$sc3 = $_POST['sc3'];
	$sc4 = $_POST['sc4'];
	$sc5 = $_POST['sc5'];
	$sc6 = $_POST['sc6'];
	$sc7 = $_POST['sc7'];
	$sc8 = $_POST['sc8'];
	$sc9 = $_POST['sc9'];
	$sc10 = $_POST['sc10'];
	$sc11 = $_POST['sc11'];
	
	$total_sc = $sc1 + $sc2 + $sc3 + $sc4 + $sc5
			   + $sc6 + $sc7 + $sc8 + $sc9 + $sc10 + $sc11;
	
	$gtotal = $total_pwd + $total_sc;
			

	
	$result = $db->prepare("INSERT INTO aippwd (
	yearm,
	honorarium,
	npdr,
	motor_vehicle_maint,
	idsregistration,
	skillstraining,
	trainingallowance,
	fassist,
	drrtraining,
	yearendasses,
	total) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	
	$result->execute([$budy, $pwd1, $pwd2, $pwd3, $pwd4, $pwd5, $pwd6, $pwd7, $pwd8, $pwd9, $total_pwd]);
	$rowCnt_pwd = $result->rowCount();
	
	$result = $db->prepare("INSERT INTO aipsc (
	yearm,
	tev,
	documentation,
	filipinoweek,
	healthyactivities,
	periodicexercise,
	visitslgus,
	orgeffectiviness,
	office_maint,
	oplan_eval,
	yearendperformance,
	ophelpdesks,
	total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
	
	$result->execute([$budy, $sc1, $sc2, $sc3, $sc4, $sc5, $sc6, $sc7, $sc8, $sc9, $sc10, $sc11, $total_sc]);
	
	$rowCnt_sc = $result->rowCount();
	if($rowCnt_pwd > 0 && $rowCnt_sc > 0){
		
	unset($_POST);
	header("location: aip1SP_readonly.php");	
	
	}
	else echo "Something went Wrong";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP |  Persons With Disability and Senior Citizens</title>
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

	background-color: #9C9A40;
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
	background-color: #9C9A40;
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
			<li><a href="aipMDR.php">MDR</a></li>
			<li><a href="aip1SP.php"  class="active">1% SC & PWDs</a></li>
			<li><a href="aip1iralcpc.php">1% IRA & LCPC</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="pwds.php">RAO 1% PWDs</a>
  <a href="scs.php">RAO 1 % SCs</a>
  <a href="personal_services_mmo_all.php">Personnel Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_mmo_all.php">Capital Outlay</a>
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>1% PWDs / Senior Citizens</strong></label>  

<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	
</thead>
		<tr>	
			<td><strong>PERSONS WITH DISABILITIES / PWDs</strong></td>
			
		</tr>	
		
		<tr>
			<td>Honorarium for PWD and Focal Person</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd1" name="pwd1" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Mandatory Program NDPR Celebration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd2" name="pwd2" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Maintenance of Motor Vehicle</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd3" name="pwd3" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
				
		<tr>
			<td>Production of PWD IDs and Registration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd4" name="pwd4" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Skills & Training Livelihood</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd5" name="pwd5" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Training allowance/Conduct Monthly meeting & Quarterly Meeting with Focal Person</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd6" name="pwd6" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Medical/Financial Assistance for All PWD Members</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd7" name="pwd7" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>DRR Training, Life Saving Support (drill & simulation)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd8" name="pwd8" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Year-end Assessment</td>
			<td>&nbsp;</td>
			<td><input type="number" id="pwd9" name="pwd9" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><strong>SENIOR CITIZEN</strong></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		
		
		
		<tr>
			<td>Continuing Education for Older Persons <br> &amp; Older Person Empowerment Activities (TEV)</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc1" name="sc1" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Documentation of Older Person & Related Events</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc2" name="sc2" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Elderly Filipino Week Celebration</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc3" name="sc3" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Older Person Camaraderie, Wellness and Healthy Aging Activities</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc4" name="sc4" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Physical Fitness Periodic Exercise</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc5" name="sc5" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Exchange visit to other LGUs-SCOs</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc6" name="sc6" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>Organizational Effectiveness</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc7" name="sc7" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>Functional &amp; Decent Office Maintenance</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc8" name="sc8" class="w3-input" step="any" value="0.00"></td>
		
		</tr>
		
		<tr>
			<td>Mid Year Oplan Evaluation</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc9" name="sc9" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Year End Performance Review and Analysis</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc10" name="sc10" class="w3-input" step="any" value="0.00"></td>
		</tr>
		<tr>
			<td>Maintenance of Older Person's Help Desk Office</td>
			<td>&nbsp;</td>
			<td><input type="number" id="sc11" name="sc11" class="w3-input" step="any" value="0.00"></td>
			
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