<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}
$isLoaded = check_if_loaded_mbe_aip();
		if ($isLoaded == '1'){
	
			header("location: aipMarketreadonly");
			}
	


?>
<?PHP

	$total_ps = 0;
	$total_mooe = 0;
	$total_coe = 0;
	$success = 0;
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
	
	
	$budy = $_SESSION['budget'];
	$dept_code = "MBE";
	$dept_head = "JAIME B. LAURON";
	$dept_name = "Municipal Business Enterprise";
	$sector = "ECONOMIC DEVELOPMENT";
	$refCode = "8000";
	
	$post_salary =  $_POST['salaries'];
	$post_pera =   $_POST['PERA'];
	$post_aca =   $_POST['ACA'];
	$post_clothing =   $_POST['clothing_allowance'];
	$post_year_end =   $_POST['year_end'];
	$post_cash_gift =   $_POST['cash_gift'];
	$post_mid_year =   $_POST['mid_year'];
	$post_pib =   $_POST['pib'];
	$post_gsis =   $_POST['gsis'];
	$post_hdmf =   $_POST['hdmf'];
	$post_philHealth =   $_POST['philHealth'];
	$post_ecc =   $_POST['ecc'];
	$post_opb =   $_POST['opb'];
	
	$post_training =   $_POST['training'];
	$post_water =   $_POST['water'];
	$post_office_supplies =  $_POST['office-supplies'];
	$post_slaught =  $_POST['market-slaughter'];
	
	
	
	// capital outlay
	$post_capital_outlay =  $_POST['capital-outlay'];
			
	
	$total_ps = $post_salary + $post_pera + $post_aca + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_opb; 
	$total_mooe = $post_training + $post_water + $post_office_supplies + $post_slaught;
	$total_coe = $post_capital_outlay + 0;
	
	$query = "INSERT INTO aip (
	Year, 
	departments, 
	deptName, 
	headOfOffice, 
	sector,
	refCode,
	salaries, 
	PERA, 
	ACA,
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
	training_seminars, 
	water, 
	office_supplies, 
	marketSlaughter, 
	total_mooe, 
	co, 
	total_co
	) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
						
	
	$result = $db->prepare($query);
	$result->execute([
	$budy, 
	$dept_code, 
	$dept_name, 
	$dept_head,
	$sector,
	$refCode,
	$post_salary, 
	$post_pera, 
	$post_aca,
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
	$post_training,
	$post_water,
	$post_office_supplies,
	$post_slaught,
	$total_mooe,
	$post_capital_outlay,
	$total_coe]);
	

	
	
	$count = $result->rowCount();
	
	
	if($count =="1"){
		unset($_POST);
		header("location:aipMarketreadonly");
		exit();
	}
	

	
	

	
	
	
}



?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP | Municipal Business Enterprise</title>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		<a class="navbar-brand" href="home">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="home">Home
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_year">Budget Year</a></li>
          <li><a href="aipMMO">AIP</a></li>
          <li><a href="heads">Department Heads List</a></li>
		  <li><a href="export_all_ps">RAO <?PHP echo $_SESSION['budget']; ?> </a></li>
	      
        </ul>
      </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registry Allotment and Obligations (RAO)
		  <span class="caret"></span></a>	  
	    <ul class="dropdown-menu">
		 <li><a href="personal_services_mmo_all">Personal Services</a></li>
		 <li><a href="mooe_mmo_all">Maint. And Other Operating Expenses</a></li>
		 <li><a href="co_mmo_all">Capital Outlay</a></li>
		 <li><a href="rao20">20&#37; EDF</a></li>
		 <li><a href="none-office">Non - Office</a></li>
		 <li><a href="gad">5% Gender and Development (GAD)</a></li>
		 <li><a href="continuing_all">Continuing Program</a></li>
		 <li><a href="sef">Special Education Fund (SEF)</a></li>
		 <li><a href="mdr">5% Municipal Disaster Risk</a></li>
		 <li><a href="pwds">1% Senior Citizens & Persons With Disabilities</a></li>
		 <li><a href="1iralcpc">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
			<span class="caret"></span></a>
		<ul class="dropdown-menu scrollable-menu">

			<li><a href="aipMMO">Mayors Office</a></li>
			<li><a href="aipSB">Sangguniang Bayan</a></li>
			<li><a href="aipMPDO">Municipal Planning and Development Office</a></li>
			<li><a href="aipLCR">Local Civil Registrar</a></li>
			<li><a href="aipMBO">Municipal Budget Office</a></li>
			<li><a href="aipMACCO">Municipal Accounting Office</a></li>
			<li><a href="aipMTO">Municipal Treasurers Office</a></li>
			<li><a href="aipMASSO">Municipal Assessors Office</a></li>
			<li><a href="aipMHO">Municipal Health Office</a></li>
			<li><a href="aipMSWD">Municipal Social Welfare Development Office</a></li>
			<li><a href="aipMAO">Municipal Agriculturist Office</a></li>
			<li><a href="aipMEO">Municipal Engineering Office</a></li>
			<li><a href="aipMarket">Municipal Business Enterprise</a></li>
			<li><a href="aipPlaza">General Services</a></li>
			<li><a href="edf">20&#37; EDF</a></li>
			<li><a href="aipNoneOffice">None-Office</a></li>
			<li><a href="aipGAD">Gender and Development</a></li>
			<li><a href="aipMDR">Municipal Disaster Risk</a></li>
			<li><a href="aip1SP">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="aip1iralcpc">1% IRA & LCPC</a></li>
			<li><a href="aipSEF">Special Education Fund (SEF)</a></li>
			<li><a href="aipcont">Continuing Programs</a></li>
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#" style="color:gray; pointer-events: none; border-bottom: 1px solid #ddd" tabindex="-1"><?PHP echo $_SESSION['isLoginName']; ?></a></li>
					<li><a href="accounts">Accounts</a></li>
					<li><a href="log">Audit Log</a></li>
					<li><a href="logmeOut">Log Out</a></li>
				</ul>
			</li>	
	</ul>
  </div>
</div>
</nav>

<div class="container">

<div style="margin-top: 100px;">

<div class="page-header">
	<h2>Programmed Appropriation and Obligation</h2>
  </div>
  
</div>
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>MUNICIPAL BUSINESS ENTERPRISE</strong></label>  
<table  class="table table-condensed table-hover table-striped table-bordered">
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>Account Code<br>&#40;2&#41;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	
</thead>
		<tr>
			<td colspan=4><strong>Current Operating Expenditures</strong></td>
		</tr>	
		
		<tr>
			<td><STRONG>1.1 Personal Services</STRONG></td>
			
			<td>5&#32;01</td>
			<td>&nbsp;</td>
			
		</tr>
		
		<tr>
			<td>Salaries</td>
			
			<td>5&#32;01&#32;01&#32;010</td>
			<td><input type="number" id="salaries" name="salaries" class="form-control" step="any"  required></td>
			
		</tr>

		<tr>
			<td><STRONG>Other Compensations:</STRONG></td>
			
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
			<td>PERA</td>
			
			<td>5&#32;01&#32;02&#32;010</td>
			<td><input type="number" id="PERA" name="PERA" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>ACA</td>
			
			<td>5&#32;01&#32;02&#32;020</td>
			<td><input type="number" id="ACA" name="ACA" class="form-control" step="any"  required></td>
			
		</tr>
				
		<tr>
			<td>Clothing Allowance</td>
			
			<td>5 &#32; 01 &#32; 02 &#32; 040</td>
			<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Year End Bonus</td>
			
			<td>5 &#32; 01 &#32; 02 &#32; 140</td>
			<td><input type="number" id="year_end" name="year_end" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Cash Gift</td>
			
			<td>5 &#32; 01 &#32; 02 &#32; 150</td>
			<td><input type="number" id="cash_gift" name="cash_gift" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Mid-Year Bonus</td>
			
			<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>
			<td><input type="number" id="mid_year" name="mid_year" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>PIB</td>
			
			<td>5 &#32; 01 &#32; 02 &#32; 080</td>
			<td><input type="number" id="pib" name="pib" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Life &amp; Retirement Ins. Contributions</td>
			
			<td>5 &#32; 01 &#32; 03 &#32; 010</td>
			<td><input type="number" id="gsis" name="gsis" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Pag-Ibig Contributions</td>
			
			<td>5 &#32; 01 &#32; 03 &#32; 020</td>
			<td><input type="number" id="hdmf" name="hdmf" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>PHILHEALTH Contributions</td>
			
			<td>5 &#32; 01 &#32; 03 &#32; 030</td>
			<td><input type="number" id="philHealth" name="philHealth" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>ECC Contributions</td>
			
			<td>5 &#32; 01 &#32; 03 &#32; 040</td>
			<td><input type="number" id="ecc" name="ecc" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td colspan=3><STRONG>Others: (Specify)</STRONG></td>
			
		</tr>
		
		<tr>
			<td>Other Personnel Benefits</td>
			
			<td>&nbsp;</td>
			<td><input type="number" id="opb" name="opb" class="form-control" step="any"  required></td>
			
		</tr>
		
		
		<tr>
			<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td>
			
			<td>5&#32;02</td>
			<td>&nbsp;</td>
		</tr>				
		
		<tr>
			<td>Training &amp; Seminar Expenses</td>
			
			<td>5&#32; 02 &#32; 02 &#32; 010</td>
			<td><input type="number" id="training" name="training" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Water</td>
			
			<td>5&#32; 02 &#32; 04 &#32; 010</td>
			<td><input type="number" id="water" name="water" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Office Supplies Expenses</td>
			
			<td>5&#32; 02 &#32; 03 &#32; 010</td>
			<td><input type="number" id="office-supplies" name="office-supplies" class="form-control" step="any"  required></td>
			
		</tr>
		
		<tr>
			<td>Market &amp; Slaughterhouse Maintenance</td>
			
			<td>5&#32; 02 &#32; 13 &#32; 040</td>
			<td><input type="number" id="market-slaughter" name="market-slaughter" class="form-control" step="any"  required></td>
			
		</tr>						
			
		<tr>
			<td><STRONG>1.3 Capital Outlay</STRONG></td>
			
			<td>1&#32;07&#32;05&#32;020</td>
			<td><input type="number" id="capital-outlay" name="capital-outlay" class="form-control" step="any"  required></td>
			
		</tr>
						
		<tr>
			<td colspan="3"><button class="btn btn-success form-control" type="submit" name="SUBMIT">Submit</button></td>
		</tr>
		

</table>
</form>
</div>
</body>
</html>