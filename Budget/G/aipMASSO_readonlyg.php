<?PHP 
session_start();
include("insertLog.php");
include("config.php");
include("select_aip_masso.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>
<?PHP
if($_SERVER["REQUEST_METHOD"]=="POST"){
mysqli_set_charset($db,"utf8");

	$budy = $_SESSION['budget'];
	
	
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
	$post_equipment = mysqli_real_escape_string($db,$_POST['equipment']);
	$post_other_maintenance = mysqli_real_escape_string($db,$_POST['other-maintenance']);
	$post_capital_outlay = mysqli_real_escape_string($db,$_POST['capital-outlay']);
	
	
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_opb; 
	$total_mooe = $post_tev +  $post_training +  + $post_postage + $post_office_supplies + $post_equipment +$post_other_maintenance;
	$total_coe = $post_capital_outlay + 0;

	
	$query = "UPDATE aip SET salaries = ?, PERA = ?, RA = ?, TA = ?, clothing_allowance = ?, year_end = ?, cash_gift = ?, 
							 mid_year = ?, pib = ?, life_retirement = ?, pag_ibig = ?, philhealth = ?, ecc = ?, other_allowance_bonuses = ?, total_ps = ?, 
							 tev = ?, training_seminars = ?, postage = ?, office_supplies = ?, office_equip_maint = ?, others = ?, total_mooe = ?, co = ?, total_co = ? WHERE departments = 'MASSO' && Year = ?  ";
	
	if ($result = mysqli_prepare($db, $query)){
		
	mysqli_stmt_bind_param($result,"sssssssssssssssssssssssss",$post_salary, $post_pera, $post_ra, $post_ta, $post_clothing, $post_year_end, $post_cash_gift, $post_mid_year, $post_pib, $post_gsis, $post_hdmf, $post_philHealth, $post_ecc, $post_opb, $total_ps, $post_tev, $post_training, $post_postage,  $post_office_supplies, $post_equipment, $post_other_maintenance, $total_mooe, $post_capital_outlay, $total_coe, $budy);
	mysqli_stmt_execute($result);

	
	 
	$count = mysqli_stmt_affected_rows($result);
	$success = 1;
	mysqli_stmt_close($result);
	}
}

?>



<!DOCTYPE html>
<html>
<head>
<title>AIP | Municipal Assesors Office</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<style>
html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	margin: 0 auto;
	min-width: 1000px;
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

	background-color: #ffcc66;
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
	background-color: #ffcc66;
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
			<li><a href="aipMASSO.php"  class="active">MASSO</a></li>
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
  <a href="personal_services_masso_all.php">Personnel Services</a>
  <a href="mooe_masso_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="co_masso_all.php">Capital Outlay</a>
  
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div class="table-wrap">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>OFFICE OF THE MUNICIPAL ASSESSOR</strong></label>  
<form method="POST" action="">
<table>
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>Account Code<br>&#40;2&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	<th>Balance<br>&#40;4&#41;</th>
</thead>
		<tr>
			<td><strong>Current Operating Expenditures</strong></td>
		</tr>	
		
		<tr>
			<td><STRONG>1.1 Personal Services</STRONG></td>
			<td>5&#32;01</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>Salaries</td>
			<td>5&#32;01&#32;01&#32;010</td>
			<?PHP
			$sal = floatval (select_aip_salaries());
			
			echo '<td>'.number_format($sal,2).'</td>'; 
			echo '<td><input type="number" id="salaries" name="salaries" class="w3-input" step="any" value="'.$sal.'" tabindex="1"></td>';
			echo '<td><input type="text" class="w2-input" value="'.number_format(select_aip_salaries_bal(),2).'"></td>';
			?>
		</tr>

		<tr>
			<td><STRONG>Other Compensations:</STRONG></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<td>PERA</td>
			<td>5&#32;01&#32;02&#32;010</td>
			<?PHP 
			$per = floatval(select_aip_pera());
			echo '<td>'.number_format($per,2).'</td>';
			echo '<td><input type="number" id="PERA" name="PERA" class="w3-input" value="'.$per.'" tabindex="2" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_pera_bal(),2).'"></td>';
			?>
		
		<tr>
			<td>RA</td>
			<td>5&#32;01&#32;02&#32;020</td>
			<?PHP
			$ra = floatval(select_aip_ra());
			echo '<td>'.number_format($ra,2).'</td>';
			echo '<td><input type="number" id="RA" name="RA" class="w3-input" value="'.$ra.'" tabindex="3" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ra_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>TA</td>
			<td>5 &#32; 01 &#32; 02 &#32; 030</td>
			<?PHP
			$ta = floatval(select_aip_ta());
			echo '<td>'.number_format($ta,2).'</td>';
			echo '<td><input type="number" id="TA" name="TA" class="w3-input" value="'.$ta.'" tabindex="4" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ta_bal(),2).'"></td>';
			?>
		</tr>

		<tr>
			<td>Clothing Allowance</td>
			<td>5 &#32; 01 &#32; 02 &#32; 040</td>
			<?PHP
			$clo = floatval(select_aip_cloth());
			echo '<td>'.number_format($clo,2).'</td>';
			echo '<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="w3-input" value="'.$clo.'" tabindex="5" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_cloth_bal(),2).'"></td>';
			?>
		</tr>
				
		<tr>
			<td>Year End Bonus</td>
			<td>5 &#32; 01 &#32; 02 &#32; 140</td>
			<?PHP
			$yend = floatval(select_aip_yend());
			echo '<td>'.number_format($yend,2).'</td>';
			echo '<td><input type="number" id="year_end" name="year_end" class="w3-input" value="'.$yend.'" tabindex="6" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_yend_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Cash Gift</td>
			<td>5 &#32; 01 &#32; 02 &#32; 150</td>
			<?PHP
			$ca = floatval(select_aip_gft());
			echo '<td>'.number_format($ca,2).'</td>';
			echo '<td><input type="number" id="cash_gift" name="cash_gift" class="w3-input" value="'.$ca.'" tabindex="7" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_gft_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Mid-Year Bonus</td>
			<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>
			<?PHP
			$mid = floatval(select_aip_mid());
			echo '<td>'.number_format($mid,2).'</td>';
			echo '<td><input type="number" id="mid_year" name="mid_year" class="w3-input" value="'.$mid.'" tabindex="8" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_mid_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>PIB</td>
			<td>5 &#32; 01 &#32; 02 &#32; 080</td>
			<?PHP
			$pi = floatval(select_aip_pib());
			echo '<td>'.number_format($pi,2).'</td>';
			echo '<td><input type="number" id="pib" name="pib" class="w3-input" value="'.$pi.'" tabindex="9" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_pib_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Life &amp; Retirement Ins. Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 010</td>
			<?PHP
			$gs = floatval(select_aip_gsis());
			echo '<td>'.number_format($gs,2).'</td>';
			echo '<td><input type="number" id="gsis" name="gsis" class="w3-input" value="'.$gs.'" tabindex="10" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_gsis_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Pag-Ibig Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 020</td>
			<?PHP
			$hd = floatval(select_aip_hdmf());
			echo '<td>'.number_format($hd,2).'</td>';
			echo '<td><input type="number" id="hdmf" name="hdmf" class="w3-input" value="'.$hd.'" tabindex="11" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_hdmf_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>PHILHEALTH Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 030</td>
			<?PHP
			$care = floatval(select_aip_philhealth());
			echo '<td>'.number_format($care,2).'</td>';
			echo '<td><input type="number" id="philHealth" name="philHealth" class="w3-input" value="'.$care.'" tabindex="12" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_philhealth_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>ECC Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 040</td>
			<?PHP
			$ec = floatval(select_aip_ecc());
			echo '<td>'.number_format($ec,2).'</td>';
			echo '<td><input type="number" id="ecc" name="ecc" class="w3-input" value="'.$ec.'" tabindex="13" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_ecc_bal(),2).'"></td>';
			?>
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
			<?PHP
			$opb = floatval(select_aip_opb());
			echo '<td>'.number_format($opb,2).'</td>';
			echo '<td><input type="number" id="opb" name="opb" class="w3-input" value="'.$opb.'" tabindex="14" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_opb_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><strong>TOTAL PERSONAL SERVICES:</strong></td>
			<?PHP
			$tot = floatval(select_aip_totps());
			echo '<td>'.number_format($tot,2).'</td>';
			echo '<td><input type="text" id="total-personal-services" name="total-personal-services" class="w2-input" readonly value="'.$tot.'"></td>';
			echo '<td><strong><input type="text" id="total-balance-personal-services" name="total-balance-personal-services" class="w2-input" readonly value="'.number_format(select_aip_totps_bal(),2).'"></strong></td>';
			?>	
		</tr>
		
		
		<tr>
			<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td>
			<td>5&#32;02</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		
		<tr>
			<td>Traveling Expenses</td>
			<td>5&#32; 02 &#32; 01 &#32; 010</td>
			<?PHP
			$tv = floatval(select_aip_travel());
			echo '<td>'.number_format($tv,2).'</td>';
			echo '<td><input type="number" id="tev" name="tev" class="w3-input" value="'.$tv.'" tabindex="15" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value = "'.number_format(select_aip_travel_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Training &amp; Seminar Expenses</td>
			<td>5&#32; 02 &#32; 02 &#32; 010</td>
			<?PHP 
			$tra = floatval(select_aip_training());
			echo '<td>'.number_format($tra,2).'</td>';
			echo '<td><input type="number" id="training" name="training" class="w3-input" value="'.$tra.'" tabindex="16" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value = "'.number_format(select_aip_training_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Postage and Deliveries</td>
			<td>5&#32; 02 &#32; 05 &#32; 010</td>
			<?PHP
			$po = floatval(select_aip_postage());
			echo '<td>'.number_format($po,2).'</td>';
			echo '<td><input type="number" id="postage" name="postage" class="w3-input" step="any" value="'.$po.'" tabindex="17"></td>';
			echo '<td><input type="text" class="w2-input" readonly value = "'.number_format(select_aip_postage_bal(),2).'" tabindex="0"></td>';
			?>
		</tr>
		
		<tr>
			<td>Office Supplies Expenses</td>
			<td>5&#32; 02 &#32; 03 &#32; 010</td>
			<?PHP
			$off = floatval(select_aip_office());
			echo '<td>'.number_format($off,2).'</td>';
			echo '<td><input type="number" id="office-supplies" name="office-supplies" class="w3-input" value="'.$off.'" tabindex="18" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_office_bal(),2).'"></td>';
			?>
		</tr>
			
		<tr>
			<td>Office Equipment Maintenance</td>
			<td>5&#32; 02 &#32; 13 &#32; 070</td>
			<?PHP
			$offeq = floatval(select_aip_equip_maint());
			echo '<td>'.number_format($offeq,2).'</td>';
			echo '<td><input type="number" id="equipment" name="equipment" class="w3-input" value="'.$offeq.'" tabindex="20" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_equip_maint_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Other Maintenance and Operating Expenses</td>
			<td>5&#32; 02 &#32; 99 &#32; 990</td>
			<?PHP
			$ot = floatval(select_aip_others());
			echo '<td>'.number_format($ot,2).'</td>';
			echo '<td><input type="number" id="other-maintenance" name="other-maintenance" class="w3-input" value="'.$ot.'" tabindex="21" step="any"></td>';
			echo '<td><input type="text" class="w2-input" readonly value="'.number_format(select_aip_others_bal(),2).'"></td>';
			?>
		</tr>
							
		<tr>
			<td>&nbsp;</td>
			<td><strong>TOTAL MAINT. AND OTHER OPERATING EXPENSES:</strong></td>
			<?PHP
			$tt = floatval(select_aip_totalmoe());
			echo '<td>'.number_format($tt,2).'</td>';
			echo '<td><input type="text" id="total-maint-services" name="total-maint-services" class="w2-input" readonly value="'.$tt.'"></td>';
			echo '<td><strong><input type="text" id="total-balance-maintenance-expenses" name="total-balance-maintenance-expenses" class="w2-input" readonly value="'.number_format(select_aip_totalmoe_bal(),2).'"></strong></td>';
			?>
		</tr>
		
		<tr>
			<td><STRONG>1.3 Capital Outlay</STRONG></td>
			<td>1&#32;07&#32;05&#32;020</td>
			<?PHP
			$coo = floatval(select_aip_co());
			echo '<td>'.number_format($coo,2).'</td>';
			echo '<td><input type="number" id="capital-outlay" name="capital-outlay" class="w3-input" value="'.$coo.'" tabindex="22" step="any"></td>';
			echo '<td><strong><input type="text" id="total-balance-maintenance-expenses" name="total-balance-maintenance-expenses" class="w2-input" readonly value="'.number_format(select_aip_co_bal(),2).'"></strong></td>';
			?>
		</tr>
						
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="3"><input type="submit" value="Update"></td>
		</tr>
		








</table>
</form>
</div>
</body>
</html>