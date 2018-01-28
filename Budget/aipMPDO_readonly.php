<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("select_aip_mpdo.php");
include("function_aip_mpdo.php");

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

/*-----------------------*/
if($_SERVER["REQUEST_METHOD"]=="POST"){


	$budy = $_SESSION['budget'];
	$dept_code = "MPDO";
	$dept_head = "ZALDY MARILLA";
	$dept_name = "Municipal Planning and Development Office";
	
	
	
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
	$post_oba =   $_POST['oba'];
	
	$post_tev =   $_POST['tev'];
	$post_training =   $_POST['training'];
	$post_telephone =   $_POST['telephone'];
	$post_office_supplies =  $_POST['office-supplies'];
	$post_other_maintenance =  $_POST['other-maintenance'];
	$post_capital_outlay =  $_POST['capital-outlay'];
	
	
	
	$total_ps = $post_salary + $post_pera + $post_ra + $post_ta + $post_clothing + $post_year_end + $post_cash_gift + $post_mid_year + $post_pib + $post_gsis + $post_hdmf + $post_philHealth + $post_ecc + $post_oba; 
	$total_mooe = $post_tev +  $post_training +  $post_telephone + $post_office_supplies + $post_other_maintenance;
	$total_coe = $post_capital_outlay + 0;

	
	$query = "UPDATE aip SET salaries = ?, PERA = ?, RA = ?, TA = ?, clothing_allowance = ?, year_end = ?, cash_gift = ?, 
							 mid_year = ?, pib = ?, life_retirement = ?, pag_ibig = ?, philhealth = ?, ecc = ?, other_allowance_bonuses = ?, total_ps = ?, 
							 tev = ?, training_seminars = ?, telephone_telegraph = ?, office_supplies = ?, others = ?, total_mooe = ?, co = ?, total_co = ? WHERE departments = 'MPDO' && Year = ?  ";
	
	
	$result = $db->prepare($query);
	$result->execute([$post_salary, $post_pera, $post_ra, $post_ta, $post_clothing, $post_year_end, $post_cash_gift, $post_mid_year, $post_pib, $post_gsis, $post_hdmf, $post_philHealth, $post_ecc, $post_oba, $total_ps, $post_tev, $post_training, $post_telephone, $post_office_supplies, $post_other_maintenance, $total_mooe, $post_capital_outlay, $total_coe, $budy]);	
	
	
	

	
	$count = $result->rowCount();
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
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<title>AIP | Municipal Planning and Development Office</title>
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

<?PHP

echo '<form method="POST" action="">';
echo '<div class="form-group">';
echo '<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>OFFICE OF THE MUN. PLANNING &amp; DEVELOPMENT COORDINATOR</strong></label>';
echo '<table class="table table-condensed table-hover table-striped table-bordered">'; 
echo '<thead>';
	echo '<th style="text-align: center;">Object of Expenditure <br>&#40;1&#41;</th>';
	echo '<th style="text-align: center;">Account Code<br>&#40;2&#41;</th>';
	echo '<th style="text-align: center;">&nbsp;</th>';
	echo '<th style="text-align: center;">Budget Year Proposed<br>&#40;'.$_SESSION['budget'].'&#41;</th>';
	echo '<th style="text-align: center;">Balance<br>&#40;4&#41;</th>';
echo '</thead>';
	echo '<tr>';
	echo '<td><strong>Current Operating Expenditures</strong></td>';
	echo '</tr>';	
		
		echo '<tr>';
			echo '<td><STRONG>1.1 Personal Services</STRONG></td>';
			echo '<td>5&#32;01</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
	// Salaries	
	$sal = floatval (select_aip_salaries());
		
		echo '<tr>';
			echo '<td>Salaries</td>';
			echo '<td>5&#32;01&#32;01&#32;010</td>';
			echo '<td>'.number_format($sal,2).'</td>';
			echo '<td><input type="number" id="salaries" name="salaries" class="form-control" step="any" value="'.$sal.'" tabindex = "1" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" value="'.number_format(select_aip_salaries_bal(),2).'"></td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td><STRONG>Other Compensations:</STRONG></td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
	//PERA
	$per = floatval(select_aip_pera());
	
		echo '<tr>';
			echo '<td>PERA</td>';
			echo '<td>5&#32;01&#32;02&#32;010</td>';
			echo '<td>'.number_format($per,2).'</td>';
			echo '<td><input type="number" id="PERA" name="PERA" class="form-control" value="'.$per.'"tabindex = "2" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_pera_bal(),2).'"></td>';
			echo '</tr>';
			
	//RA	
	$rat = floatval(select_aip_ra());
	
		echo '<tr>';
			echo '<td>RA</td>';
			echo '<td>5&#32;01&#32;02&#32;020</td>';
			echo '<td>'.number_format($rat,2).'</td>';
			echo '<td><input type="number" id="RA" name="RA" class="form-control" value="'.$rat.'" tabindex = "3" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ra_bal(),2).'"></td>';
		echo '</tr>';
	
	//TA	
	$ta = floatval(select_aip_ta());
	
		echo '<tr>';
			echo '<td>TA</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 030</td>';
			echo '<td>'.number_format($ta,2).'</td>';
			echo '<td><input type="number" id="TA" name="TA" class="form-control" value="'.$ta.'" tabindex = "4" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ta_bal(),2).'"></td>';
		echo '</tr>';
	
	//Clothing Allowance
	$cloth = floatval(select_aip_cloth());
	
		echo '<tr>';
			echo '<td>Clothing Allowance</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 040</td>';
			echo '<td>'.number_format($cloth,2).'</td>';
			echo '<td><input type="number" id="clothing_allowance" name="clothing_allowance" class="form-control" value="'.$cloth.'" tabindex = "5" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_cloth_bal(),2).'"></td>';
		echo '</tr>';
		
	//Year End Bonus
	$yend = floatval(select_aip_yend());	
		echo '<tr>';
			echo '<td>Year End Bonus</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 140</td>';
			echo '<td>'.number_format($yend,2).'</td>';
			echo '<td><input type="number" id="year_end" name="year_end" class="form-control" value="'.$yend.'" tabindex = "6" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_yend_bal(),2).'"></td>';
		echo '</tr>';
		
	//Cash Gift
	$gft = floatval(select_aip_gft());	
		echo '<tr>';
			echo '<td>Cash Gift</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 150</td>';
			echo '<td>'.number_format($gft,2).'</td>';
			echo '<td><input type="number" id="cash_gift" name="cash_gift" class="form-control" value="'.$gft.'" tabindex = "7" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_gft_bal(),2).'"></td>';
		echo '</tr>';
		
	//Mid Year Bonus
	$mid = floatval(select_aip_mid());	
		echo '<tr>';
			echo '<td>Mid-Year Bonus</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 990-1</td>';
			echo '<td>'.number_format($mid,2).'</td>';
			echo '<td><input type="number" id="mid_year" name="mid_year" class="form-control" value="'.$mid.'" tabindex = "8" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_mid_bal(),2).'"></td>';
		echo '</tr>';
		
	//PIB	
	$pi = floatval(select_aip_pib());
		echo '<tr>';
			echo '<td>PIB</td>';
			echo '<td>5 &#32; 01 &#32; 02 &#32; 080</td>';
			echo '<td>'.number_format($pi,2).'</td>';
			echo '<td><input type="number" id="pib" name="pib" class="form-control" value="'.$pi.'" tabindex = "9" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_pib_bal(),2).'"></td>';
		echo '</tr>';
		
	//Life and Retirement
	$gs = floatval(select_aip_gsis());
		echo '<tr>';
			echo '<td>Life &amp; Retirement Ins. Contributions</td>';
			echo '<td>5 &#32; 01 &#32; 03 &#32; 010</td>';
			echo '<td>'.number_format($gs,2).'</td>';
			echo '<td><input type="number" id="gsis" name="gsis" class="form-control" value="'.$gs.'" tabindex = "10" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_gsis_bal(),2).'"></td>';
		echo '</tr>';
		
	//HDMF	
	$love = floatval(select_aip_hdmf());
		echo '<tr>';
			echo '<td>Pag-Ibig Contributions</td>';
			echo '<td>5 &#32; 01 &#32; 03 &#32; 020</td>';
			echo '<td>'.number_format($love,2).'</td>';
			echo '<td><input type="number" id="hdmf" name="hdmf" class="form-control" value="'.$love.'" tabindex = "11" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_hdmf_bal(),2).'"></td>';
		echo '</tr>';
		
	//PHILHEALTH
	$cares = floatval(select_aip_philhealth());	
		echo '<tr>';
			echo '<td>PHILHEALTH Contributions</td>';
			echo '<td>5 &#32; 01 &#32; 03 &#32; 030</td>';
			echo '<td>'.number_format($cares,2).'</td>';
			echo '<td><input type="number" id="philHealth" name="philHealth" class="form-control" value="'.$cares.'" tabindex = "12" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_philhealth_bal(),2).'"></td>';
		echo '</tr>';
	
	//ECC Contributions	
	$ec = floatval(select_aip_ecc());
		echo '<tr>';
			echo '<td>ECC Contributions</td>';
			echo '<td>5 &#32; 01 &#32; 03 &#32; 040</td>';
			echo '<td>'.number_format($ec,2).'</td>';
			echo '<td><input type="number" id="ecc" name="ecc" class="form-control" value="'.$ec.'" tabindex = "13" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_ecc_bal(),2).'"></td>';
		echo '</tr>';
		
		
		echo '<tr>';
			echo '<td><STRONG>Others: (Specify)</STRONG></td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
	//Other Bonuses and Allowance
	$obas = floatval(select_aip_oba());	
		echo '<tr>';
			echo '<td>Other Bonuses and Allowances</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>'.number_format($obas,2).'</td>';
			echo '<td><input type="number" id="oba" name="oba" class="form-control" value="'.$obas.'" tabindex = "14" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_oba_bal(),2).'"></td>';
		echo '</tr>';
	
	//Total PERSONAL Services
	$totps = floatval(select_aip_totps());
		echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>TOTAL PERSONAL SERVICES:</strong></td>';
			echo '<td style="color:#f00"><strong>'.number_format($totps,2).'</strong></td>';
			echo '<td>&nbsp;</td>';
			echo '<td style="color:#672E3B"><strong>'.number_format(select_aip_totps_bal(),2).'</strong></td>';
		echo '</tr>';
		
		
		echo '<tr>';
			echo '<td><STRONG>1.2 Maintenance and Other <br> Operating Expenses</STRONG></td>';
			echo '<td>5&#32;02</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		echo '</tr>';
		
	//Traveling Expenses
	$travel = floatval(select_aip_travel());	
		echo '<tr>';
			echo '<td>Traveling Expenses</td>';
			echo '<td>5&#32; 02 &#32; 01 &#32; 010</td>';
			echo '<td>'.number_format($travel,2).'</td>';
			echo '<td><input type="number" id="tev" name="tev" class="form-control" value="'.$travel.'" tabindex = "15" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_travel_bal(),2).'"></td>';
		echo '</tr>';
	
	//Training
	$training = floatval(select_aip_training());	
		echo '<tr>';
			echo '<td>Training &amp; Seminar Expenses</td>';
			echo '<td>5&#32; 02 &#32; 02 &#32; 010</td>';
			echo '<td>'.number_format($training,2).'</td>';
			echo '<td><input type="number" id="training" name="training" class="form-control" value="'.$training.'" tabindex = "16" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_training_bal(),2).'"></td>';
		echo '</tr>';
		
	//Telephone
	$phonegraph = floatval(select_aip_telegraph());	
		echo '<tr>';
			echo '<td>Telephone / Telegraph and Internet</td>';
			echo '<td>5&#32; 02 &#32; 05 &#32; 030</td>';
			echo '<td>'.number_format($phonegraph,2).'</td>';
			echo '<td><input type="number" id="telephone" name="telephone" class="form-control" value="'.$phonegraph.'" tabindex = "17" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_telegraph_bal(),2).'"></td>';
		echo '</tr>';
	
	//Office Supplies
	$offs = floatval(select_aip_office());	
		echo '<tr>';
			echo '<td>Office Supplies Expenses</td>';
			echo '<td>5&#32; 02 &#32; 03 &#32; 010</td>';
			echo '<td>'.number_format($offs,2).'</td>';
			echo '<td><input type="number" id="office-supplies" name="office-supplies" class="form-control" value="'.$offs.'" tabindex = "18" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_office_bal(),2).'"></td>';
		echo '</tr>';
	
	//Other Maintenance and Operating Expenses
	$ot = floatval(select_aip_others());	
		echo '<tr>';
			echo '<td>Other Maintenance and Operating Expenses</td>';
			echo '<td>5&#32; 02 &#32; 99 &#32; 990</td>';
			echo '<td>'.number_format($ot,2).'</td>';
			echo '<td><input type="number" id="other-maintenance" name="other-maintenance" class="form-control" value="'.$ot.'" tabindex = "19" min="0.00" step="any"></td>';
			echo '<td><input type="text" class="form-control" readonly value="'.number_format(select_aip_others_bal(),2).'"></td>';
		echo '</tr>';
							
	//TOTAL MOOE
	$totmoe = floatval(select_aip_totalmoe());
		echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>TOTAL MAINT. AND OTHER OPERATING EXPENSES:</strong></td>';
			echo '<td style="color:#f00"><strong>'.number_format(select_aip_totalmoe(),2).'</strong></td>';
			echo '<td></td>';
			echo '<td style="color:#672E3B"><strong>'.number_format(select_aip_totalmoe_bal(),2).'</strong></td>';
			
		echo '</tr>';
	
	//Capital Outlay	
	$co = floatval(select_aip_co());
		echo '<tr>';
			echo '<td><STRONG>1.3 Capital Outlay</STRONG></td>';
			echo '<td>1&#32;07&#32;05&#32;020</td>';
			echo '<td>'.number_format(select_aip_co(),2).'</td>';
			echo '<td><input type="number" id="capital-outlay" name="capital-outlay" class="form-control" value="'.$co.'" tabindex = "20" min="0.00" step="any"></td>';
			echo '<td><input type="text" id="total-balance-capital-outlay" name="total-balance-capital-outlay" class="form-control" readonly value="'.number_format(select_aip_co_bal(),2).'"></td>';
		echo '</tr>';
				
		echo '<tr>';
		?>
			<?php 
			if($getlock == '0' || empty($getlock)){
			echo '<td colspan=5><button type="submit" name="calc" class="btn btn-success form-control">Submit</button></td>';
			}
			else
			{echo '<td colspan="5" class="text-center"><strong>Locked For Editing</strong></td>'; }
			
		?>
		<?php
		echo '</tr>';
		







echo '</table>';
echo '</div>';
echo '</form>';

?>
</body>
</html>