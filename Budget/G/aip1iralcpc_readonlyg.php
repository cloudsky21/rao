<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];

	$ira1 = $_POST['ira1'];
	$ira2 = $_POST['ira2'];
	$ira3 = $_POST['ira3'];
	$ira4 = $_POST['ira4'];
	$ira5 = $_POST['ira5'];
	$ira6 = $_POST['ira6'];
	$ira7 = $_POST['ira7'];
	$ira8 = $_POST['ira8'];
	$ira9 = $_POST['ira9'];
	$ira10 = $_POST['ira10'];
	$ira11 = $_POST['ira11'];
	$ira12 = $_POST['ira12'];
	$ira13 = $_POST['ira13'];
	$ira14 = $_POST['ira14'];
	$ira15 = $_POST['ira15'];
	$ira16 = $_POST['ira16'];
		
	$total = $ira1 + $ira2 + $ira3 + $ira4 + $ira5 + $ira6 + $ira7 + $ira8 + $ira9 + $ira10 + $ira11 + $ira12 + $ira13 + $ira14 + $ira15 + $ira16;
		

	$result = $db->prepare("UPDATE aipiralcpc SET 
	engulayan = ?,
	teenpreg = ?,
	dbaseforchildren = ?,
	pedslane = ?,
	distfaid = ?,
	drugawareness = ?,
	sportsequip = ?,
	lcpcOsupplies = ?,
	lcpcregmeet = ?,
	propwastedisp = ?, 
	daycare = ?,
	childrenslaw = ?,
	daycareworkersday = ?, 
	daycareworkerstraining = ?, 
	fassistcicl = ?, 
	pbdiversions = ?, 	
	total = ? WHERE yearm = ?");
	
	$result->execute([$ira1,$ira2,$ira3,$ira4,$ira5,$ira6,$ira7,$ira8,$ira9,$ira10,$ira11,$ira12,$ira13,$ira14,$ira15,$ira16,$total,$budy]);
	$rowCnt_pwd = $result->rowCount();
	
	if($rowCnt_pwd > 0){
		
	unset($_POST);
	
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
<title>AIP |  1% of IRA - LCPC</title>
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

	background-color: #B18F6A;
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
	background-color: #B18F6A;
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
			<li><a href="aipMMOg.php">MMO</a></li>
			<li><a href="aipSBg.php">SB</a></li>
			<li><a href="aipMPDOg.php">MPDO</a></li>
			<li><a href="aipLCRg.php">LCR</a></li>
			<li><a href="aipMBOg.php">MBO</a></li>
			<li><a href="aipMACCOg.php">MACCO</a></li>
			<li><a href="aipMTOg.php">MTO</a></li>
			<li><a href="aipMASSOg.php">MASSO</a></li>
			<li><a href="aipMHOg.php">MHO</a></li>
			<li><a href="aipMSWDg.php">MSWD</a></li>
			<li><a href="aipMAOg.php">MAO</a></li>
			<li><a href="aipMEOg.php">MEO</a></li>
			<li><a href="aipMarketg.php">MARKET</a></li>
			<li><a href="aipPlazag.php">PLAZA</a></li>
			<li><a href="edfg.php">20&#37; EDF</a></li>
			<li><a href="aipGADg.php">GAD</a></li>
			<li><a href="aipMDRg.php">MDR</a></li>
			<li><a href="aip1SPg.php">1% SC & PWDs</a></li>
			<li><a href="aip1iralcpcg.php"  class="active">1% IRA & LCPC</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Guest.php">Goto Main</a>
  <a href="iralcpcg.php">RAO 1% IRA - LCPC</a>
  <a href="personal_services_mmo_g.php">Personnel Services</a>
  <a href="mooe_mmo_g.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_mmo_g.php">Capital Outlay</a>
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>1% of IRA - LCPC</strong></label>  
<?PHP 
$result = $db->prepare("SELECT * FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);

foreach($result as $row){
	
$ira1 = $row['engulayan'];
$irab1 = $row['engulayanbal'];	
	
$ira2 = $row['teenpreg'];
$irab2 = $row['teenpregbal'];

$ira3 = $row['dbaseforchildren'];
$irab3 = $row['dbaseforchildrenbal'];

$ira4 = $row['pedslane'];
$irab4 = $row['pedslanebal'];
	
$ira5 = $row['distfaid'];
$irab5 = $row['distfaidbal'];	
	
$ira6 = $row['drugawareness'];
$irab6 = $row['drugawarenessbal'];		
	
$ira7 = $row['sportsequip'];
$irab7 = $row['sportsequipbal'];

$ira8 = $row['lcpcOsupplies'];
$irab8 = $row['lcpcOsuppliesbal'];	

$ira9 = $row['lcpcregmeet'];
$irab9 = $row['lcpcregmeetbal'];

$ira10 = $row['propwastedisp'];
$irab10 = $row['propwastedispbal'];

$ira11 = $row['daycare'];
$irab11 = $row['daycarebal'];		
	
$ira12 = $row['childrenslaw'];
$irab12 = $row['childrenslawbal'];	

$ira13 = $row['daycareworkersday'];
$irab13 = $row['daycareworkersdaybal'];		

$ira14 = $row['daycareworkerstraining'];
$irab14 = $row['daycareworkerstrainingbal'];	

$ira15 = $row['fassistcicl'];
$irab15 = $row['fassistciclbal'];

$ira16 = $row['pbdiversions'];
$irab16 = $row['pbdiversionsbal'];		
	
$totalira = $row['total'];	

}
?>
<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	<th>Balance</th>
	
</thead>
				
		<tr>
			<td>Enhanced Gulayan sa Paaralan</td>
			<td><?PHP echo number_format($ira1,2); ?></td>
			<td><input type="number" id="ira1" name="ira1" class="w3-input" step="any" value="<?PHP echo $ira1; ?>"></td>
			<td><?PHP echo number_format($irab1,2); ?></td>
			
		</tr>
		
		<tr>
			<td>Teenage Pregnancy Awareness / Prevention</td>
			<td><?PHP echo number_format($ira2,2); ?></td>
			<td><input type="number" id="ira2" name="ira2" class="w3-input" step="any" value="<?PHP echo $ira2; ?>"></td>
			<td><?PHP echo number_format($irab2,2); ?></td>
		</tr>
		
		<tr>
			<td>Database for Children</td>
			<td><?PHP echo number_format($ira3,2); ?></td>
			<td><input type="number" id="ira3" name="ira3" class="w3-input" step="any" value="<?PHP echo $ira3; ?>"></td>
			<td><?PHP echo number_format($irab3,2); ?></td>
		</tr>
				
		<tr>
			<td>Enforcement of Pedestrian Lanes</td>
			<td><?PHP echo number_format($ira4,2); ?></td>
			<td><input type="number" id="ira4" name="ira4" class="w3-input" step="any" value="<?PHP echo $ira4; ?>"></td>
			<td><?PHP echo number_format($irab4,2); ?></td>
		</tr>
		
		<tr>
			<td>Dristribution of First Aid and Health Kits</td>
			<td><?PHP echo number_format($ira5,2); ?></td>
			<td><input type="number" id="ira5" name="ira5" class="w3-input" step="any" value="<?PHP echo $ira5; ?>"></td>
			<td><?PHP echo number_format($irab5,2); ?></td>
		</tr>
		
		<tr>
			<td>Drug Awareness and Reduction</td>
			<td><?PHP echo number_format($ira6,2); ?></td>
			<td><input type="number" id="ira6" name="ira6" class="w3-input" step="any" value="<?PHP echo $ira6; ?>"></td>
			<td><?PHP echo number_format($irab6,2); ?></td>
		</tr>
		
		<tr>
			<td>Procurement of Sports Equipment</td>
			<td><?PHP echo number_format($ira7,2); ?></td>
			<td><input type="number" id="ira7" name="ira7" class="w3-input" step="any" value="<?PHP echo $ira7; ?>"></td>
			<td><?PHP echo number_format($irab7,2); ?></td>
		</tr>
		
		<tr>
			<td>LCPC Office Supplies</td>
			<td><?PHP echo number_format($ira8,2); ?></td>
			<td><input type="number" id="ira8" name="ira8" class="w3-input" step="any" value="<?PHP echo $ira8; ?>"></td>
			<td><?PHP echo number_format($irab8,2); ?></td>
		</tr>
		
		<tr>
			<td>LCPC regular meetings/trainings</td>
			<td><?PHP echo number_format($ira9,2); ?></td>
			<td><input type="number" id="ira9" name="ira9" class="w3-input" step="any" value="<?PHP echo $ira9; ?>"></td>
			<td><?PHP echo number_format($irab9,2); ?></td>
		</tr>
		
		<tr>
			<td>Proper Waste Disposal</td>
			<td><?PHP echo number_format($ira10,2); ?></td>
			<td><input type="number" id="ira10" name="ira10" class="w3-input" step="any" value="<?PHP echo $ira10; ?>"></td>
			<td><?PHP echo number_format($irab10,2); ?></td>
		</tr>
		<tr>
			<td>Day Care Instructional Materials</td>
			<td><?PHP echo number_format($ira11,2); ?></td>
			<td><input type="number" id="ira11" name="ira11" class="w3-input" step="any" value="<?PHP echo $ira11; ?>"></td>
			<td><?PHP echo number_format($irab11,2); ?></td>
		</tr>
		<tr>
			<td>Advocacy Children's Law</td>
			<td><?PHP echo number_format($ira12,2); ?></td>
			<td><input type="number" id="ira12" name="ira12" class="w3-input" step="any" value="<?PHP echo $ira12; ?>"></td>
			<td><?PHP echo number_format($irab12,2); ?></td>
		</tr>
		<tr>
			<td>Day Care Worker's Day</td>
			<td><?PHP echo number_format($ira13,2); ?></td>
			<td><input type="number" id="ira13" name="ira13" class="w3-input" step="any" value="<?PHP echo $ira13; ?>"></td>
			<td><?PHP echo number_format($irab13,2); ?></td>
		</tr>
		<tr>
			<td>Day Care Workker Trainings</td>
			<td><?PHP echo number_format($ira14,2); ?></td>
			<td><input type="number" id="ira14" name="ira14" class="w3-input" step="any" value="<?PHP echo $ira14; ?>"></td>
			<td><?PHP echo number_format($irab14,2); ?></td>
		</tr>
		<tr>
			<td>Financial Assistance to CICL</td>
			<td><?PHP echo number_format($ira15,2); ?></td>
			<td><input type="number" id="ira15" name="ira15" class="w3-input" step="any" value="<?PHP echo $ira15; ?>"></td>
			<td><?PHP echo number_format($irab15,2); ?></td>
		</tr>
		<tr>
			<td>Assist the PB in conducting diversion proceedings</td>
			<td><?PHP echo number_format($ira16,2); ?></td>
			<td><input type="number" id="ira16" name="ira16" class="w3-input" step="any" value="<?PHP echo $ira16; ?>"></td>
			<td><?PHP echo number_format($irab16,2); ?></td>
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