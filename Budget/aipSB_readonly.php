<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("select_aip_sb.php");
include("function_aip_sb.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	
}

$getlock = "0";
		$islock = $db->prepare("SELECT flag FROM aip WHERE Year = ?");
		$islock->execute([$_SESSION['budget']]);
		
		foreach($islock as $lock){
		
		
			$getlock =  $lock['flag'];
			
		}
		
		

?>




<?PHP
	$total_ps = 0;
	$total_mooe = 0;
	$total_coe = 0;
	$success = 0;
	
if(isset($_POST['calc'])){
	
	
	
	$budy = $_SESSION['budget'];
	$post_salary =  $_POST['salaries'];
	$post_pera =   $_POST['PERA'];
	$post_ra =   $_POST['RA'];
	$post_ta =   $_POST['TA'];
	$post_clothing =   $_POST['clothing_allowance'];
	//$post_honoraria =   $_POST['honoraria'];
	$post_year_end =   $_POST['year_end'];
	$post_cash_gift =   $_POST['cash_gift'];
	$post_mid_year =   $_POST['mid_year'];
	$post_pib =   $_POST['pib'];
	$post_gsis =   $_POST['gsis'];
	$post_hdmf =   $_POST['hdmf'];
	$post_philHealth =   $_POST['philHealth'];
	$post_ecc =   $_POST['ecc'];
	$post_tl =   $_POST['terminal-leave'];
	$post_personel =   $_POST['personel'];
	
	$post_tev =   $_POST['tev'];
	$post_training =   $_POST['training'];
	$post_telephone =   $_POST['telephone'];
	$post_postage =   $_POST['postage'];
	//$post_insurance_premium =   $_POST['insurance-premium'];
	$post_fedility_premium =  $_POST['fedility-premium'];
	$post_office_supplies =  $_POST['office-supplies'];
	//$post_gasoline =  $_POST['gasoline'];
	$post_ads =  $_POST['ads'];
	//$post_motor_vehicle =  $_POST['vehicle-maintenance'];
	//$post_equipment =  $_POST['equipment'];
	//$post_confidential =  $_POST['confidential'];
	$post_other_maintenance =  $_POST['other-maintenance'];
	
	// capital outlay
	$post_capital_outlay =  $_POST['capital-outlay'];
			
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_tl + $post_personel; 
	$total_mooe = $post_tev +  $post_training +  $post_telephone + $post_postage + $post_fedility_premium + $post_office_supplies + $post_other_maintenance + $post_ads;
	$total_coe = $post_capital_outlay + 0;
	
	$query = "UPDATE aip SET salaries = ?, PERA = ?, RA = ?, TA = ?, clothing_allowance = ?, year_end = ?, cash_gift = ?, mid_year = ?, pib = ?, life_retirement = ?, pag_ibig = ?, philHealth = ?, ecc = ?, terminal_leave = ?, other_personal = ?, total_ps = ?,
								tev = ?, training_seminars = ?, telephone_telegraph = ?, postage = ?, fidelity_bond = ?, office_supplies = ?, advertising_expenses = ?, others = ?, total_mooe = ?, co = ?, total_co = ? WHERE Year = ? && departments = 'SB' ";
	

	
		$result= $db->prepare($query);
		$result->execute([$post_salary, 
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
	$post_tl, 
	$post_personel, 
	$total_ps, 
	$post_tev, 
	$post_training, 
	$post_telephone, 
	$post_postage, 
	$post_fedility_premium, 
	$post_office_supplies, 
	$post_ads, 
	$post_other_maintenance, 
	$total_mooe,
	$post_capital_outlay,
	$total_coe, 
	$budy]);	
	
unset($_POST);
	header("location:".$_SERVER['PHP_SELF']);
	exit();

	
	}
	

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP | Sangguniang Bayan</title>
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
<div style="margin-top:100px;">
<div class="page-header"><h2>Programmed Appropriation and Obligation</h2></div>

<?PHP
$sal = floatval (select_aip_salaries());
$per = floatval(select_aip_pera());
$rat = floatval(select_aip_ra());
$ta = floatval(select_aip_ta());
$clo = floatval(select_aip_cloth());

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

$fidel = floatval(select_aip_fidelity());
$offs = floatval(select_aip_office());



$ot = floatval(select_aip_others());
$totmoe = floatval(select_aip_totalmoe());
$capot = floatval(select_aip_co());
$tl = floatval(select_aip_tl());
$opb = floatval(select_aip_opb());
$ads = floatval(select_aip_ads());


?>

<form action="" method = "POST">
 <div class="table-responsive">
 
 <label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <strong>OFFICE OF THE SANGGUNIANG BAYAN</strong></label><br>  
 <table class="table table-hover table-condensed table-striped table-bordered"> 
 <thead> 
	 <th style="text-align:center;">Object of Expenditure <br>&#40;1&#41;</th> 
	 <th style="text-align:center;">Account Code<br>&#40;2&#41;</th> 
	 <th style="text-align:center;">Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th> 
	 <th style="text-align:center;">&nbsp;</th> 
	 <th style="text-align:center;">Balance<br>&#40;4&#41;</th> 
 </thead> 
		 <tr> 
			 <td colspan=5><strong>Current Operating Expenditures</strong></td> 
		 </tr>	 
		
		 <tr> 
			 <td><STRONG>1.1 Personal Services</STRONG></td> 
			 <td colspan=4>5&#32;01</td> 
			 
		 </tr> 
		
		 <tr> 
			 <td>Salaries</td> 
			 <td>5&#32;01&#32;01&#32;010</td> 
			 <td><?PHP echo number_format($sal,2); ?></td> 
			 <td><input type="number" id="salaries" name="salaries" class="form-control" step="any" min=0 value="<?PHP echo $sal; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_salaries_bal(),2); ?>"></td> 
		 </tr> 

		 <tr> 
			 <td><STRONG>Other Compensations:</STRONG></td> 
			 <td>&nbsp;</td> 
			 <td>&nbsp;</td> 
			 <td>&nbsp;</td> 
			 <td>&nbsp;</td> 
		 </tr> 
		
		 <tr> 
		 <td>PERA</td> 
		 <td>5&#32;01&#32;02&#32;010</td> 
		 <td><?PHP echo number_format($per,2); ?></td> 
		 <td><input type="number" id="PERA" name="PERA" class="form-control" step=0.01 min=0 value="<?PHP echo $per; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_pera_bal(),2); ?>"></td> 
		 </tr> 
		
	 	<tr> 
		 <td>RA</td> 
		 	<td>5&#32;01&#32;02&#32;020</td> 
		 <td><?PHP echo number_format($rat,2); ?></td> 
		 	<td><input type="number" id="RA" name="RA" class="form-control" step=0.01 min=0 value="<?PHP echo $rat; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_ra_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
			 <td>TA</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 030</td> 
			 <td><?PHP echo number_format($ta,2); ?></td> 
			 <td><input type="number" id="TA" name="TA" class="form-control" step=0.01 min=0 value="<?PHP echo $ta; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_ta_bal(),2); ?>"></td> 
		 </tr> 

		 	<tr> 
			 <td>Clothing Allowance</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 040</td> 
			 <td><?PHP echo number_format($clo,2); ?></td> 
		 	<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="form-control" step=0.01 min=0 value="<?PHP echo $clo; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_cloth_bal(),2); ?>"></td> 
		 </tr> 
				
		 <tr> 
			 <td>Year End Bonus</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 140</td> 
			 <td><?PHP echo number_format($yend,2); ?></td> 
			 <td><input type="number" id="year_end" name="year_end" class="form-control" step=0.01 min=0 value="<?PHP echo $yend; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_yend_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
			 <td>Cash Gift</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 150</td> 
			 <td><?PHP echo number_format($gft,2); ?></td> 
			 <td><input type="number" id="cash_gift" name="cash_gift" class="form-control" step=0.01 min=0 value="<?PHP echo $gft; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_gft_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
			 <td>Mid-Year Bonus</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 990-1</td> 
			 <td><?PHP echo number_format($mid,2); ?></td> 
			 <td><input type="number" id="mid_year" name="mid_year" class="form-control" step=0.01 min=0 value="<?PHP echo $mid; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_mid_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
			 <td>PIB</td> 
			 <td>5 &#32; 01 &#32; 02 &#32; 080</td> 
			 <td><?PHP echo number_format($pi,2); ?></td> 
			 <td><input type="number" id="pib" name="pib" class="form-control" step=0.01 min=0 value="<?PHP echo $pi; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_pib_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
			 <td>Life &amp; Retirement Ins. Contributions</td> 
			 <td>5 &#32; 01 &#32; 03 &#32; 010</td> 
			 <td><?PHP echo number_format($gs,2); ?></td> 
			 <td><input type="number" id="gsis" name="gsis" class="form-control" step=0.01 min=0 value="<?PHP echo $gs; ?>"></td> 
			 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_gsis_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 <td>Pag-Ibig Contributions</td> 
		 <td>5 &#32; 01 &#32; 03 &#32; 020</td> 
		 <td><?PHP echo number_format($love,2); ?></td> 
		 <td><input type="number" id="hdmf" name="hdmf" class="form-control" step=0.01 min=0 value="<?PHP echo $love; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_hdmf_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 <td>PHILHEALTH Contributions</td> 
		 <td>5 &#32; 01 &#32; 03 &#32; 030</td> 
		 <td><?PHP echo number_format($cares,2); ?></td> 
		 <td><input type="number" id="philHealth" name="philHealth" class="form-control" step=0.01 min=0 value="<?PHP echo $cares; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_philhealth_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 	<td>ECC Contributions</td> 
		 	<td>5 &#32; 01 &#32; 03 &#32; 040</td> 
		 <td><?PHP echo number_format($ec,2); ?></td> 
		 	<td><input type="number" id="ecc" name="ecc" class="form-control" step=0.01 min=0 value="<?PHP echo $ec; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_ecc_bal(),2); ?>"></td> 
		 </tr> 
		
		
		 <tr> 
		 <td>Terminal Leave Benefits</td> 
		 <td>&nbsp;</td> 
		 <td><?PHP echo number_format($tl,2); ?></td> 
		 <td><input type="number" id="terminal-leave" name="terminal-leave" class="form-control" step=0.01 min=0  value="0.00"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_tl_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 	<td><strong>Others (Specify)</strong></td> 
		 	<td>&nbsp;</td> 
		 	<td>&nbsp;</td> 
		 	<td>&nbsp;</td> 
		 	<td>&nbsp;</td> 
		 </tr> 
		
		 <tr> 
		 	<td>Other Personnel Benefits</td> 
		 	<td>&nbsp;</td> 
		 <td><?PHP echo number_format($opb,2); ?></td> 
		 	<td><input type="number" id="personel" name="personel" class="form-control" step=0.01 min=0  value="0.00"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_opb_bal(),2); ?>"></td> 	
		 </tr> 
		
		
		
		
		
		
		
		
		 <tr> 
		 <td>&nbsp;</td> 
		 <td><strong>TOTAL PERSONAL SERVICES:</strong></td> 
		 <td style="color:#f00"><strong><?PHP echo number_format($totps,2); ?></strong></td> 
		 <td>&nbsp;</td> 
		 <td style="color:#672E3B"><strong><?PHP echo number_format(select_aip_totps_bal(),2); ?></strong></td> 
		 </tr> 
		
		
		 <tr> 
		 	<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td> 
		 	<td>5&#32;02</td> 
		 	<td></td> 
		 	<td></td> 
			<td></td> 
		 </tr> 
		




		
		 <tr> 
		 	<td>Traveling Expenses</td> 
		 	<td>5&#32; 02 &#32; 01 &#32; 010</td> 
		 <td><?PHP echo number_format($travel,2); ?></td> 
		 	<td><input type="number" id="tev" name="tev" class="form-control" step=0.01 min=0 value="<?PHP echo $travel; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_travel_bal(),2); ?>"></td> 
		 </tr> 
		
		

		 <tr> 
		 	<td>Training &amp; Seminar Expenses</td> 
		 	<td>5&#32; 02 &#32; 02 &#32; 010</td> 
		 <td><?PHP echo number_format($training,2); ?></td> 
		 	<td><input type="number" id="training" name="training" class="form-control" step=0.01 min=0 value="<?PHP echo $training; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_training_bal(),2); ?>"></td> 
		 </tr> 
		


		 <tr> 
		 	<td>Telephone / Telegraph and Internet</td> 
		 	<td>5&#32; 02 &#32; 05 &#32; 030</td> 
		 <td><?PHP echo number_format($phonegraph,2); ?></td> 
		 	<td><input type="number" id="telephone" name="telephone" class="form-control" step=0.01 min=0 value="<?PHP echo $phonegraph; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_telegraph_bal(),2); ?>"></td> 
		 </tr> 
		
		
		
		 <tr> 
		 <td>Postage and Deliveries</td> 
		 <td>5&#32; 02 &#32; 05 &#32; 010</td> 
		 <td><?PHP echo number_format($pst,2); ?></td> 
		 <td><input type="number" id="postage" name="postage" class="form-control" step=0.01 min=0 value="<?PHP echo $pst; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_postage_bal(),2); ?>"></td> 
		 </tr> 
				
		 <tr> 
		 	<td>Fidelity Bond Premium</td> 
		 	<td>5&#32; 02 &#32; 16 &#32; 020</td> 
		 <td><?PHP echo number_format($fidel,2); ?></td> 
		 	<td><input type="number" id="fedility-premium" name="fedility-premium" class="form-control" step=0.01 min=0 value="<?PHP echo $fidel; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_fidelity_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 	<td>Office Supplies Expenses</td> 
		 	<td>5&#32; 02 &#32; 03 &#32; 010</td> 
		 <td><?PHP echo number_format($offs,2); ?></td> 
		 	<td><input type="number" id="office-supplies" name="office-supplies" class="form-control" step=0.01 min=0 value="<?PHP echo $offs; ?>"></td> 
		 	<td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_office_bal(),2); ?>"></td> 
		 </tr> 
			
		 <tr> 
		 <td>Advertising Expenses</td> 
		 <td>5&#32; 02 &#32; 99 &#32; 010</td> 
		 <td><?PHP echo number_format($ads,2); ?></td> 
		 <td><input type="number" id="ads" name="ads" class="form-control" step=0.01 min=0 value="<?PHP echo $ads; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_ads_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 <td>Other Maintenance and Operating Expenses</td> 
		 <td>5&#32; 02 &#32; 99 &#32; 990</td> 
		 <td><?PHP echo number_format($ot,2); ?></td> 
		 <td><input type="number" id="other-maintenance" name="other-maintenance" class="form-control" step=0.01 min=0 value="<?PHP echo $ot; ?>"></td> 
		 <td><input type="text" class="form-control" readonly value="<?PHP echo number_format(select_aip_others_bal(),2); ?>"></td> 
		 </tr> 
		
		
		
		 <tr> 
		 <td>&nbsp;</td> 
		 <td><strong>TOTAL MAINT. AND OTHER OPERATING EXPENSES:</strong></td> 
		 <td style="color:#f00"><strong><?PHP echo number_format($totmoe,2); ?></strong></td> 
		 <td>&nbsp;</td> 
		 <td style="color:#672E3B"><strong><?PHP echo number_format(select_aip_totalmoe_bal(),2); ?></strong></td> 
			
		 </tr> 
		
		 <tr> 
		 <td><STRONG>1.3 Capital Outlay</STRONG></td> 
		 <td>1&#32;07&#32;05&#32;020</td> 
		 <td><?PHP echo number_format($capot,2); ?></td> 
		 <td><input type="number" id="capital-outlay" name="capital-outlay" class="form-control" step=0.01 min=0 value="<?PHP echo $capot; ?>"></td> 
		 <td><input type="text" id="total-balance-capital-outlay" name="total-balance-capital-outlay" class="form-control" readonly value="<?PHP echo number_format(select_aip_co_bal(),2); ?>"></td> 
		 </tr> 
		
		 <tr> 
		 <td>&nbsp;</td> 
		 <td><strong>TOTAL CAPITAL OUTLAY:</strong></td> 
		 <td style="color:#f00"><strong><?PHP echo number_format($capot,2); ?></strong></td> 
		 <td>&nbsp;</td> 
		 <td style="color:#672E3B"><strong><?PHP echo number_format(select_aip_co_bal(),2); ?></strong></td> 
		 </tr> 
		
		 <tr> 
		 
		 <?php 
			if($getlock == '0' || empty($getlock)){
			echo '<td colspan=5><button type="submit" name="calc" class="btn btn-success form-control">Submit</button></td>';
			}
			else
			{echo '<td colspan="5" class="text-center"><strong>Locked For Editing</strong></td>'; }
			
		?>
		 </tr> 
		
		
		







 </table> 
 </div> 
 </form> 
</div>
</div>
</body>
</html>