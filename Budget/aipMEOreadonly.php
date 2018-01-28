<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("select_aip_meo.php");
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
if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];
	
	
	$post_salary =  $_POST['salaries'];
	$post_pera =   $_POST['PERA'];
	$post_ra =   $_POST['RA'];
	$post_ta =   $_POST['TA'];
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
	
	$post_tev =   $_POST['tev'];
	$post_training =   $_POST['training'];
	$post_postage =   $_POST['postage'];
	$post_office_supplies =  $_POST['office-supplies'];
	$post_other =  $_POST['other-maintenance'];
	
	$post_capital_outlay =  $_POST['capital-outlay'];
	
	
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_opb; 
	$total_mooe = $post_tev +  $post_training +  + $post_postage + $post_office_supplies + $post_other;
	$total_coe = $post_capital_outlay + 0;

	
	$query = "UPDATE aip SET 
	salaries = ?, 
	PERA = ?, 
	RA = ?, 
	TA = ?, 
	clothing_allowance = ?, 
	year_end = ?, 
	cash_gift = ?, 
	mid_year = ?, 
	pib = ?, 
	life_retirement = ?, 
	pag_ibig = ?, 
	philhealth = ?, 
	ecc = ?, 
	other_personal = ?, 
	total_ps = ?, 
	tev = ?, 
	training_seminars = ?, 
	postage = ?, 
	office_supplies = ?, 
	others = ?, 
	total_mooe = ?, 
	co = ?, 
	total_co = ? WHERE departments = 'MEO' && Year = ?  ";
	
	$result = $db->prepare($query);
	$result->execute([
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
	$total_coe, 
	$budy]);
	

	
	unset($_POST);
	header("location:".$_SERVER['PHP_SELF']);
	
	
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<title>AIP | Municipal Engineers Office</title>
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
<form method="POST" action="">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>OFFICE OF THE MUNICIPAL ENGINEER</strong></label>  

<table class="table table-condensed table-hover table-striped table-bordered">
<thead>
	<th>Object of Expenditure <br>&#40;1&#41;</th>
	<th>Account Code<br>&#40;2&#41;</th>
	<th>&nbsp;</th>
	<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
	<th>Balance<br>&#40;4&#41;</th>
</thead>
		<tr>
			<td colspan=5><strong>Current Operating Expenditures</strong></td>
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
			echo '<td><input type="number" id="salaries" name="salaries" class="form-control" step="any" value="'.$sal.'" tabindex="1"></td>';
			echo '<td><input type="text" class="form-control" value="'.number_format(select_aip_salaries_bal(),2).'" readonly></td>';
			?>
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
			<?PHP 
			$per = floatval(select_aip_pera());
			echo '<td>'.number_format($per,2).'</td>';
			echo '<td><input type="number" id="PERA" name="PERA" class="form-control" value="'.$per.'" tabindex="2" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_pera_bal(),2).'"></td>';
			?>
			</tr>
		
		<tr>
			<td>RA</td>
			<td>5&#32;01&#32;02&#32;020</td>
			<?PHP
			$ra = floatval(select_aip_ra());
			echo '<td>'.number_format($ra,2).'</td>';
			echo '<td><input type="number" id="RA" name="RA" class="form-control" value="'.$ra.'" tabindex="3" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ra_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>TA</td>
			<td>5 &#32; 01 &#32; 02 &#32; 030</td>
			<?PHP
			$ta = floatval(select_aip_ta());
			echo '<td>'.number_format($ta,2).'</td>';
			echo '<td><input type="number" id="TA" name="TA" class="form-control" value="'.$ta.'" tabindex="4" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ta_bal(),2).'"></td>';
			?>
		</tr>

		<tr>
			<td>Clothing Allowance</td>
			<td>5 &#32; 01 &#32; 02 &#32; 040</td>
			<?PHP
			$clo = floatval(select_aip_cloth());
			echo '<td>'.number_format($clo,2).'</td>';
			echo '<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="form-control" value="'.$clo.'" tabindex="5" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_cloth_bal(),2).'"></td>';
			?>
		</tr>
				
		<tr>
			<td>Year End Bonus</td>
			<td>5 &#32; 01 &#32; 02 &#32; 140</td>
			<?PHP
			$yend = floatval(select_aip_yend());
			echo '<td>'.number_format($yend,2).'</td>';
			echo '<td><input type="number" id="year_end" name="year_end" class="form-control" value="'.$yend.'" tabindex="6" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_yend_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Cash Gift</td>
			<td>5 &#32; 01 &#32; 02 &#32; 150</td>
			<?PHP
			$ca = floatval(select_aip_gft());
			echo '<td>'.number_format($ca,2).'</td>';
			echo '<td><input type="number" id="cash_gift" name="cash_gift" class="form-control" value="'.$ca.'" tabindex="7" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_gft_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Mid-Year Bonus</td>
			<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>
			<?PHP
			$mid = floatval(select_aip_mid());
			echo '<td>'.number_format($mid,2).'</td>';
			echo '<td><input type="number" id="mid_year" name="mid_year" class="form-control" value="'.$mid.'" tabindex="8" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_mid_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>PIB</td>
			<td>5 &#32; 01 &#32; 02 &#32; 080</td>
			<?PHP
			$pi = floatval(select_aip_pib());
			echo '<td>'.number_format($pi,2).'</td>';
			echo '<td><input type="number" id="pib" name="pib" class="form-control" value="'.$pi.'" tabindex="9" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_pib_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Life &amp; Retirement Ins. Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 010</td>
			<?PHP
			$gs = floatval(select_aip_gsis());
			echo '<td>'.number_format($gs,2).'</td>';
			echo '<td><input type="number" id="gsis" name="gsis" class="form-control" value="'.$gs.'" tabindex="10" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_gsis_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Pag-Ibig Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 020</td>
			<?PHP
			$hd = floatval(select_aip_hdmf());
			echo '<td>'.number_format($hd,2).'</td>';
			echo '<td><input type="number" id="hdmf" name="hdmf" class="form-control" value="'.$hd.'" tabindex="11" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_hdmf_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>PHILHEALTH Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 030</td>
			<?PHP
			$care = floatval(select_aip_philhealth());
			echo '<td>'.number_format($care,2).'</td>';
			echo '<td><input type="number" id="philHealth" name="philHealth" class="form-control" value="'.$care.'" tabindex="12" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_philhealth_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>ECC Contributions</td>
			<td>5 &#32; 01 &#32; 03 &#32; 040</td>
			<?PHP
			$ec = floatval(select_aip_ecc());
			echo '<td>'.number_format($ec,2).'</td>';
			echo '<td><input type="number" id="ecc" name="ecc" class="form-control" value="'.$ec.'" tabindex="13" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ecc_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Other Personnel Benefits</td>
			<td>&nbsp;</td>
			<?PHP
			$opb = floatval(select_aip_opb());
			echo '<td>'.number_format($opb,2).'</td>';
			echo '<td><input type="number" id="opb" name="opb" class="form-control" value="'.$opb.'" tabindex="15" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_opb_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><strong>TOTAL PERSONAL SERVICES:</strong></td>
			<?PHP
			$tot = floatval(select_aip_totps());
			echo '<td style="color:#f00" ><strong>'.number_format($tot,2).'</strong></td>';
			echo '<td>&nbsp;</td>';
			echo '<td style="color:#672E3B"><strong>'.number_format(select_aip_totps_bal(),2).'</strong></td>';
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
			echo '<td><input type="number" id="tev" name="tev" class="form-control" value="'.$tv.'" tabindex="16" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value = "'.number_format(select_aip_travel_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Training &amp; Seminar Expenses</td>
			<td>5&#32; 02 &#32; 02 &#32; 010</td>
			<?PHP 
			$tra = floatval(select_aip_training());
			echo '<td>'.number_format($tra,2).'</td>';
			echo '<td><input type="number" id="training" name="training" class="form-control" value="'.$tra.'" tabindex="17 step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value = "'.number_format(select_aip_training_bal(),2).'"></td>';
			?>
		</tr>
		
		<tr>
			<td>Postage and Deliveries</td>
			<td>5&#32; 02 &#32; 05 &#32; 010</td>
			<?PHP
			$po = floatval(select_aip_postage());
			echo '<td>'.number_format($po,2).'</td>';
			echo '<td><input type="number" id="postage" name="postage" class="form-control" step="any" value="'.$po.'" tabindex="17"></td>';
			echo '<td><input type="text" class="form-control" readonly value = "'.number_format(select_aip_postage_bal(),2).'" tabindex="0"></td>';
			?>
		</tr>		
		
		<tr>
			<td>Office Supplies Expenses</td>
			<td>5&#32; 02 &#32; 03 &#32; 010</td>
			<?PHP
			$off = floatval(select_aip_office());
			echo '<td>'.number_format($off,2).'</td>';
			echo '<td><input type="number" id="office-supplies" name="office-supplies" class="form-control" value="'.$off.'" tabindex="18" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_office_bal(),2).'"></td>';
			?>
		</tr>		
						
		<tr>
			<td>Other Maintenance and Operating Expenses</td>
			<td>5&#32; 02 &#32; 99 &#32; 990</td>
			<?PHP
			$ot = floatval(select_aip_others());
			echo '<td>'.number_format($ot,2).'</td>';
			echo '<td><input type="number" id="other-maintenance" name="other-maintenance" class="form-control" value="'.$ot.'" tabindex="21" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_others_bal(),2).'"></td>';
			?>
		</tr>
							
		<tr>
			<td>&nbsp;</td>
			<td><strong>TOTAL MAINT. AND OTHER OPERATING EXPENSES:</strong></td>
			<?PHP
			$tt = floatval(select_aip_totalmoe());
			echo '<td style="color:#f00" ><strong>'.number_format($tt,2).'</strong></td>';
			echo '<td>&nbsp;</td>';
			echo '<td style="color:#672E3B"><strong>'.number_format(select_aip_totalmoe_bal(),2).'</strong></td>';
			?>
		</tr>
		
		<tr>
			<td><STRONG>1.3 Capital Outlay</STRONG></td>
			<td>1&#32;07&#32;05&#32;020</td>
			<?PHP
			$coo = floatval(select_aip_co());
			echo '<td>'.number_format($coo,2).'</td>';
			echo '<td><input type="number" id="capital-outlay" name="capital-outlay" class="form-control" value="'.$coo.'" tabindex="20" step="any"></td>';
			echo '<td><input type="text" id="total-balance-maintenance-expenses" name="total-balance-maintenance-expenses" class="form-control" readonly value="'.number_format(select_aip_co_bal(),2).'"></td>';
			?>
		</tr>
		
		
		
		<tr>
			<?php 
			if($getlock == '0'|| empty($getlock)){
			echo '<td colspan=5><button type="submit" name="calc" class="btn btn-success form-control">Submit</button></td>';
			}
			else
			{echo '<td colspan="5" class="text-center"><strong>Locked For Editing</strong></td>'; }
			
		?>
		</tr>
		






</table>
</form>
</div>
</body>
</html>