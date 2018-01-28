<?PHP 
session_start();
include("insertLog.php");
include("config.php");
include("check_aip.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}
$isLoaded = check_if_loaded_meo_aip();
		if ($isLoaded == '1'){
	
			header("location: aipMEOreadonly.php");
			}

?>

<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];
	$dept_code = "MEO";
	$dept_head = "DONATO S. ADVINCULA";
	$dept_name = "Municipal Engineering Office";
	
	
	
	$post_salary = mysqli_real_escape_string($db,$_POST['salaries']);
	$post_pera = mysqli_real_escape_string($db, $_POST['PERA']);
	$post_ra = mysqli_real_escape_string($db, $_POST['RA']);
	$post_ta = mysqli_real_escape_string($db, $_POST['TA']);
	$post_clothing = mysqli_real_escape_string($db, $_POST['clothing_allowance']);
	$post_year_end = mysqli_real_escape_string($db, $_POST['year_end']);
	$post_cash_gift = mysqli_real_escape_string($db, $_POST['cash_gift']);
	$post_mid_year = mysqli_real_escape_string($db, $_POST['mid_year']);
	$post_pib = mysqli_real_escape_string($db, $_POST['pib']);
	$post_gsis = mysqli_real_escape_string($db, $_POST['gsis']);
	$post_hdmf = mysqli_real_escape_string($db, $_POST['hdmf']);
	$post_philHealth = mysqli_real_escape_string($db, $_POST['philHealth']);
	$post_ecc = mysqli_real_escape_string($db, $_POST['ecc']);
	$post_opb = mysqli_real_escape_string($db, $_POST['opb']);
	
	$post_tev = mysqli_real_escape_string($db, $_POST['tev']);
	$post_training = mysqli_real_escape_string($db, $_POST['training']);
	$post_postage = mysqli_real_escape_string($db, $_POST['postage']);
	$post_office_supplies = mysqli_real_escape_string($db,$_POST['office-supplies']);
	$post_other = mysqli_real_escape_string($db, $_POST['other-maintenance']);
	
	$post_capital_outlay = mysqli_real_escape_string($db,$_POST['capital-outlay']);
	
	
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_opb; 
	$total_mooe = $post_tev +  $post_training + $post_postage + $post_office_supplies + $post_other;
	$total_coe = $post_capital_outlay + 0;

	
	$query = "INSERT INTO aip (Year, 
	departments, 
	deptName, 
	headOfOffice, 
	salaries, 
	PERA, 
	RA, 
	TA, 
	clothing_allowance, 
	year_end, 
	cash_gift, 
	mid_year,
	pib, 
	life_retirement, 
	pag_ibig, 
	philHealth, 
	ecc, 
	other_personal, 
	total_ps,
	tev, 
	training_seminars, 
	postage, 
	office_supplies, 
	others, 
	total_mooe, 
	co, 
	total_co) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	
	if ($result = mysqli_prepare($db, $query)){
		
	mysqli_stmt_bind_param($result,"sssssssssssssssssssssssssss", 
	$budy, 
	$dept_code, 
	$dept_name, 
	$dept_head, 
	$post_salary, 
	$post_pera, 
	$post_ra, 
	$post_ta, 
	$post_clothing, 
	$post_year_end, 
	$post_cash_gift, 
	$post_mid_year, 
	$post_pib, 
	$post_gsis, 
	$post_hdmf, 
	$post_philHealth, 
	$post_ecc, 
	$post_opb, 
	$total_ps, 
	$post_tev, 
	$post_training,  
	$post_postage, 
	$post_office_supplies, 
	$post_other,  
	$total_mooe, 
	$post_capital_outlay, 
	$total_coe);
	mysqli_stmt_execute($result);

	
	 
	$count = mysqli_stmt_affected_rows($result);
	
	if($count == "1") {
		unset($_POST);
		header("location: aipMEOreadonly.php");
		
	}
	
	
	mysqli_stmt_close($result);
	}
}




?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP | Municipal Engineers Office</title>
<style>
html, body {
		
		font-family: Tahoma, Verdana, Segoe, sans-serif;
		margin: 0 auto;
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
	min-width: 2000px;
}	
#container {
	margin-top: 135px;
	position: relative;
	padding: 0;
	width: 200%;
	min-width: 2000px;
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

	background-color: #660033;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	width: 100%;


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
	background-color: #660033;
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
			<li><a href="aipMEO.php"  class="active">MEO</a></li>
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
  <a href="personal_services_meo_all.php">Personnel Services</a>
  <a href="mooe_meo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_meo_all.php">Capital Outlay</a>
  
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>OFFICE OF THE MUNICIPAL ENGINEER</strong></label>  
<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>&nbsp;</th>
	<th>Account Code<br>&#40;2&#41;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	
</thead>
		<tr>
			<td><strong>Current Operating Expenditures</strong></td>
		</tr>	
		
		<tr>
			<td><STRONG>1.1 Personal Services</STRONG></td>
			<td>&nbsp;</td>
			<td>5&#32;01</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>Salaries</td>
			<td>&nbsp;</td>
			<td>5&#32;01&#32;01&#32;010</td>
			<td><input type="number" id="salaries" name="salaries" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td><STRONG>Other Compensations:</STRONG></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>PERA</td>
			<td>&nbsp;</td>
			<td>5&#32;01&#32;02&#32;010</td>
			<td><input type="number" id="PERA" name="PERA" class="w3-input" step="any" value="0.00"></td>
			
			</tr>
		
		<tr>
			<td>RA</td>
			<td>&nbsp;</td>
			<td>5&#32;01&#32;02&#32;020</td>
			<td><input type="number" id="RA" name="RA" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>TA</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 030</td>
			<td><input type="number" id="TA" name="TA" class="w3-input" step="any" value="0.00"></td>
			
		</tr>

		<tr>
			<td>Clothing Allowance</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 040</td>
			<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Year End Bonus</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 140</td>
			<td><input type="number" id="year_end" name="year_end" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Cash Gift</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 150</td>
			<td><input type="number" id="cash_gift" name="cash_gift" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Mid-Year Bonus</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>
			<td><input type="number" id="mid_year" name="mid_year" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>PIB</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 02 &#32; 080</td>
			<td><input type="number" id="pib" name="pib" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Life &amp; Retirement Ins. Contributions</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 03 &#32; 010</td>
			<td><input type="number" id="gsis" name="gsis" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Pag-Ibig Contributions</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 03 &#32; 020</td>
			<td><input type="number" id="hdmf" name="hdmf" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>PHILHEALTH Contributions</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 03 &#32; 030</td>
			<td><input type="number" id="philHealth" name="philHealth" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>ECC Contributions</td>
			<td>&nbsp;</td>
			<td>5 &#32; 01 &#32; 03 &#32; 040</td>
			<td><input type="number" id="ecc" name="ecc" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td><STRONG>Others: (Specify)</STRONG></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>Other Personnel Benefits</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="number" id="opb" name="opb" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		

		
		
		<tr>
			<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td>
			<td>&nbsp;</td>
			<td>5&#32;02</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		
		<tr>
			<td>Traveling Expenses</td>
			<td>&nbsp;</td>
			<td>5&#32; 02 &#32; 01 &#32; 010</td>
			<td><input type="number" id="tev" name="tev" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Training &amp; Seminar Expenses</td>
			<td>&nbsp;</td>
			<td>5&#32; 02 &#32; 02 &#32; 010</td>
			<td><input type="number" id="training" name="training" class="w3-input" step="any" value="0.00"></td>
			
		</tr>
		
		<tr>
			<td>Postage and Deliveries</td>
			<td>&nbsp;</td>
			<td>5&#32; 02 &#32; 05 &#32; 010</td>
			<td><input type="number" id="postage" name="postage" class="w3-input" step="any" value="0.00"></td>
			
		</tr>		
		
		<tr>
			<td>Office Supplies Expenses</td>
			<td>&nbsp;</td>
			<td>5&#32; 02 &#32; 03 &#32; 010</td>
			<td><input type="number" id="office-supplies" name="office-supplies" class="w3-input" step="any" value="0.00"></td>
			
		</tr>		
						
		<tr>
			<td>Other Maintenance and Operating Expenses</td>
			<td>&nbsp;</td>
			<td>5&#32; 02 &#32; 99 &#32; 990</td>
			<td><input type="number" id="other-maintenance" name="other-maintenance" class="w3-input"  step="any" value="0.00"></td>
			
		</tr>
				
		<tr>
			<td><STRONG>1.3 Capital Outlay</STRONG></td>
			<td>&nbsp;</td>
			<td>1&#32;07&#32;05&#32;020</td>
			<td><input type="number" id="capital-outlay" name="capital-outlay" class="w3-input"  step="any" value="0.00"></td>
			<td>&nbsp;</td>
		</tr>
		
			
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" value="SUBMIT"></td>
		</tr>
		






</table>
</form>
</div>
</body>
</html>