<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}

?>




<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SAAOB Report</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/3.3.7-dist/css/bootstrap-theme.min.css">
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
			<li><a href="sef">Special Eduction Fund (SEF)</a></li>
			<li><a href="mdr">5% Municipal Disaster Risk</a></li>
			<li><a href="pwds">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="1iralcpc">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		<li><a href="gen_january">SAAOB</a></li>
		<li><a href="saao">SAAO</a></li>
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="gen_january">January</a></li>
					<li><a href="gen_february">February</a></li>
					<li><a href="gen_march">March</a></li>
					<li><a href="gen_april">April</a></li>
					<li><a href="gen_may">May</a></li>
					<li><a href="gen_june">June</a></li>
					<li><a href="gen_july">July</a></li>
					<li><a href="gen_august">August</a></li>
					<li><a href="gen_september">September</a></li>
					<li><a href="gen_october">October</a></li>
					<li><a href="gen_november">November</a></li>
					<li><a href="gen_december">December</a></li>
				</ul>	
		</li>
	
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
<div class="page-header" style="margin-top:70px;">

<img src="saaoblogo.jpg" style="float: left;">
				<p class="text-center">Republic of the Philippine<br><strong>PROVINCE OF LEYTE</strong><br>Local Government Unit-Tolosa, Leyte<br><br><strong>STATUS OF APPROPRIATIONS, ALLOTMENTS AND OBLIGATIONS <br>GENERAL FUND</strong><br>As of <label>May</label> <?PHP echo $_SESSION['budget'] ?></p>
</div>


	

  


<table class="table table-bordered table-condensed table-striped ">
	<tr>
		<thead>
		<th>CODE</th>
		<th>FUNCTION/PROGRAM/PROJECT</th>
		<th>APPROPRIATIONS</th>
		<th>ALLOTMENTS</th>
		<th>OBLIGATIONS</th>
		<th>BALANCES OF<br>APPROPRIATIONS</th>
		<th>BALANCES OF<br>ALLOTMENTS</th>
		</thead>
	</tr>
	
	<tr>
		<td>1011</td>
		<td colspan="6"><strong>Office of the Municipal Mayor</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MMO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_MMO = $row['total_ps'];
				$allotment_MMO  = $appr_MMO / 2;
				
				$appr2_MMO = $row['total_mooe'];
				$allotment2_MMO = $appr2_MMO / 2;
				
				$appr3_MMO = $row['total_co'];
				$allotment3_MMO = $appr3_MMO / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmmo WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_MMO = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mmomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_MMO = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mmoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_MMO = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_MMO = $appr_MMO - $fObl_MMO;
					$balance_allot_MMO = $allotment_MMO - $fObl_MMO;
					
					$balance_appr2_MMO = $appr2_MMO - $fObl2_MMO;
					$balance_allot2_MMO = $allotment2_MMO - $fObl2_MMO;
					
					$balance_appr3_MMO = $appr3_MMO - $fObl3_MMO;
					$balance_allot3_MMO = $allotment3_MMO - $fObl3_MMO;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_MMO,2).'</td>';
			echo '<td>'.number_format($allotment_MMO,2).'</td>';
			echo '<td>'.number_format($fObl_MMO,2).'</td>';
			echo '<td>'.number_format($balance_appr_MMO,2).'</td>';
			echo '<td>'.number_format($balance_allot_MMO,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_MMO,2).'</td>';
			echo '<td>'.number_format($allotment2_MMO,2).'</td>';
			echo '<td>'.number_format($fObl2_MMO,2).'</td>';
			echo '<td>'.number_format($balance_appr2_MMO,2).'</td>';
			echo '<td>'.number_format($balance_allot2_MMO,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_MMO,2).'</td>';
			echo '<td>'.number_format($allotment3_MMO,2).'</td>';
			echo '<td>'.number_format($fObl3_MMO,2).'</td>';
			echo '<td>'.number_format($balance_appr3_MMO,2).'</td>';
			echo '<td>'.number_format($balance_allot3_MMO,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_MMO + $appr2_MMO + $appr3_MMO,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_MMO + $allotment2_MMO + $allotment3_MMO,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_MMO + $fObl2_MMO + $fObl3_MMO,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_MMO + $balance_appr2_MMO + $balance_appr3_MMO,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_MMO + $balance_allot2_MMO + $balance_allot3_MMO,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
<!------- Sangguniang Bayan ------>	
	<tr>
		<td>1021</td>
		<td colspan="6"><strong>Office of the Sangguniang Bayan</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["SB",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_SB = $row['total_ps'];
				$allotment_SB  = $appr_SB / 2;
				
				$appr2_SB = $row['total_mooe'];
				$allotment2_SB = $appr2_SB / 2;
				
				$appr3_SB = $row['total_co'];
				$allotment3_SB = $appr3_SB / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM pssb WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_SB = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM sbmooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_SB = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM sbco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_SB = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_SB = $appr_SB - $fObl_SB;
					$balance_allot_SB = $allotment_SB - $fObl_SB;
					
					$balance_appr2_SB = $appr2_SB - $fObl2_SB;
					$balance_allot2_SB = $allotment2_SB - $fObl2_SB;
					
					$balance_appr3_SB = $appr3_SB - $fObl3_SB;
					$balance_allot3_SB = $allotment3_SB - $fObl3_SB;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_SB,2).'</td>';
			echo '<td>'.number_format($allotment_SB,2).'</td>';
			echo '<td>'.number_format($fObl_SB,2).'</td>';
			echo '<td>'.number_format($balance_appr_SB,2).'</td>';
			echo '<td>'.number_format($balance_allot_SB,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_SB,2).'</td>';
			echo '<td>'.number_format($allotment2_SB,2).'</td>';
			echo '<td>'.number_format($fObl2_SB,2).'</td>';
			echo '<td>'.number_format($balance_appr2_SB,2).'</td>';
			echo '<td>'.number_format($balance_allot2_SB,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_SB,2).'</td>';
			echo '<td>'.number_format($allotment3_SB,2).'</td>';
			echo '<td>'.number_format($fObl3_SB,2).'</td>';
			echo '<td>'.number_format($balance_appr3_SB,2).'</td>';
			echo '<td>'.number_format($balance_allot3_SB,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_SB + $appr2_SB + $appr3_SB,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_SB + $allotment2_SB + $allotment3_SB,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_SB + $fObl2_SB + $fObl3_SB,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_SB + $balance_appr2_SB + $balance_appr3_SB,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_SB + $balance_allot2_SB + $balance_allot3_SB,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

<!------- Planning and Development ------>	
	<tr>
		<td>1041</td>
		<td colspan="6"><strong>Office of the Municipal <br>Planning & Development Coordinator</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MPDO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mpdo = $row['total_ps'];
				$allotment_mpdo  = $appr_mpdo / 2;
				
				$appr2_mpdo = $row['total_mooe'];
				$allotment2_mpdo = $appr2_mpdo / 2;
				
				$appr3_mpdo = $row['total_co'];
				$allotment3_mpdo = $appr3_mpdo / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmpdo WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mpdo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mpdomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mpdo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mpdoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mpdo = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mpdo = $appr_mpdo - $fObl_mpdo;
					$balance_allot_mpdo = $allotment_mpdo - $fObl_mpdo;
					
					$balance_appr2_mpdo = $appr2_mpdo - $fObl2_mpdo;
					$balance_allot2_mpdo = $allotment2_mpdo - $fObl2_mpdo;
					
					$balance_appr3_mpdo = $appr3_mpdo - $fObl3_mpdo;
					$balance_allot3_mpdo = $allotment3_mpdo - $fObl3_mpdo;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mpdo,2).'</td>';
			echo '<td>'.number_format($allotment_mpdo,2).'</td>';
			echo '<td>'.number_format($fObl_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_appr_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_allot_mpdo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mpdo,2).'</td>';
			echo '<td>'.number_format($allotment2_mpdo,2).'</td>';
			echo '<td>'.number_format($fObl2_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mpdo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mpdo,2).'</td>';
			echo '<td>'.number_format($allotment3_mpdo,2).'</td>';
			echo '<td>'.number_format($fObl3_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mpdo,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mpdo,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mpdo + $appr2_mpdo + $appr3_mpdo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mpdo + $allotment2_mpdo + $allotment3_mpdo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mpdo + $fObl2_mpdo + $fObl3_mpdo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mpdo + $balance_appr2_mpdo + $balance_appr3_mpdo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mpdo + $balance_allot2_mpdo + $balance_allot3_mpdo,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>		


<!------- Municipal Civil Registrar ------>	
	<tr>
		<td>1051</td>
		<td colspan="6"><strong>Office of the Municipal Registrar</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["LCR",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_lcr = $row['total_ps'];
				$allotment_lcr  = $appr_lcr / 2;
				
				$appr2_lcr = $row['total_mooe'];
				$allotment2_lcr = $appr2_lcr / 2;
				
				$appr3_lcr = $row['total_co'];
				$allotment3_lcr = $appr3_lcr / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM pslcr WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_lcr = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM lcrmooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_lcr = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM lcrco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_lcr = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_lcr = $appr_lcr - $fObl_lcr;
					$balance_allot_lcr = $allotment_lcr - $fObl_lcr;
					
					$balance_appr2_lcr = $appr2_lcr - $fObl2_lcr;
					$balance_allot2_lcr = $allotment2_lcr - $fObl2_lcr;
					
					$balance_appr3_lcr = $appr3_lcr - $fObl3_lcr;
					$balance_allot3_lcr = $allotment3_lcr - $fObl3_lcr;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_lcr,2).'</td>';
			echo '<td>'.number_format($allotment_lcr,2).'</td>';
			echo '<td>'.number_format($fObl_lcr,2).'</td>';
			echo '<td>'.number_format($balance_appr_lcr,2).'</td>';
			echo '<td>'.number_format($balance_allot_lcr,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_lcr,2).'</td>';
			echo '<td>'.number_format($allotment2_lcr,2).'</td>';
			echo '<td>'.number_format($fObl2_lcr,2).'</td>';
			echo '<td>'.number_format($balance_appr2_lcr,2).'</td>';
			echo '<td>'.number_format($balance_allot2_lcr,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_lcr,2).'</td>';
			echo '<td>'.number_format($allotment3_lcr,2).'</td>';
			echo '<td>'.number_format($fObl3_lcr,2).'</td>';
			echo '<td>'.number_format($balance_appr3_lcr,2).'</td>';
			echo '<td>'.number_format($balance_allot3_lcr,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_lcr + $appr2_lcr + $appr3_lcr,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_lcr + $allotment2_lcr + $allotment3_lcr,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_lcr + $fObl2_lcr + $fObl3_lcr,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_lcr + $balance_appr2_lcr + $balance_appr3_lcr,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_lcr + $balance_allot2_lcr + $balance_allot3_lcr,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

<!------- Municipal Budget Office ------>	
	<tr>
		<td>1071</td>
		<td colspan="6"><strong>Office of the Municipal Budget Officer</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MBO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mbo = $row['total_ps'];
				$allotment_mbo  = $appr_mbo / 2;
				
				$appr2_mbo = $row['total_mooe'];
				$allotment2_mbo = $appr2_mbo / 2;
				
				$appr3_mbo = $row['total_co'];
				$allotment3_mbo = $appr3_mbo / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmbo WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mbo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mbo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mboco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mbo = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mbo = $appr_mbo - $fObl_mbo;
					$balance_allot_mbo = $allotment_mbo - $fObl_mbo;
					
					$balance_appr2_mbo = $appr2_mbo - $fObl2_mbo;
					$balance_allot2_mbo = $allotment2_mbo - $fObl2_mbo;
					
					$balance_appr3_mbo = $appr3_mbo - $fObl3_mbo;
					$balance_allot3_mbo = $allotment3_mbo - $fObl3_mbo;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mbo,2).'</td>';
			echo '<td>'.number_format($allotment_mbo,2).'</td>';
			echo '<td>'.number_format($fObl_mbo,2).'</td>';
			echo '<td>'.number_format($balance_appr_mbo,2).'</td>';
			echo '<td>'.number_format($balance_allot_mbo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mbo,2).'</td>';
			echo '<td>'.number_format($allotment2_mbo,2).'</td>';
			echo '<td>'.number_format($fObl2_mbo,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mbo,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mbo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mbo,2).'</td>';
			echo '<td>'.number_format($allotment3_mbo,2).'</td>';
			echo '<td>'.number_format($fObl3_mbo,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mbo,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mbo,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mbo + $appr2_mbo + $appr3_mbo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mbo + $allotment2_mbo + $allotment3_mbo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mbo + $fObl2_mbo + $fObl3_mbo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mbo + $balance_appr2_mbo + $balance_appr3_mbo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mbo + $balance_allot2_mbo + $balance_allot3_mbo,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	

<!------- Municipal Accounting Office ------>	
	<tr>
		<td>1081</td>
		<td colspan="6"><strong>Office of the Municipal Accountant</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MACCO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_macco = $row['total_ps'];
				$allotment_macco  = $appr_macco / 2;
				
				$appr2_macco = $row['total_mooe'];
				$allotment2_macco = $appr2_macco / 2;
				
				$appr3_macco = $row['total_co'];
				$allotment3_macco = $appr3_macco / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmacco WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_macco = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maccomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_macco = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maccoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_macco = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_macco = $appr_macco - $fObl_macco;
					$balance_allot_macco = $allotment_macco - $fObl_macco;
					
					$balance_appr2_macco = $appr2_macco - $fObl2_macco;
					$balance_allot2_macco = $allotment2_macco - $fObl2_macco;
					
					$balance_appr3_macco = $appr3_macco - $fObl3_macco;
					$balance_allot3_macco = $allotment3_macco - $fObl3_macco;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_macco,2).'</td>';
			echo '<td>'.number_format($allotment_macco,2).'</td>';
			echo '<td>'.number_format($fObl_macco,2).'</td>';
			echo '<td>'.number_format($balance_appr_macco,2).'</td>';
			echo '<td>'.number_format($balance_allot_macco,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_macco,2).'</td>';
			echo '<td>'.number_format($allotment2_macco,2).'</td>';
			echo '<td>'.number_format($fObl2_macco,2).'</td>';
			echo '<td>'.number_format($balance_appr2_macco,2).'</td>';
			echo '<td>'.number_format($balance_allot2_macco,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_macco,2).'</td>';
			echo '<td>'.number_format($allotment3_macco,2).'</td>';
			echo '<td>'.number_format($fObl3_macco,2).'</td>';
			echo '<td>'.number_format($balance_appr3_macco,2).'</td>';
			echo '<td>'.number_format($balance_allot3_macco,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_macco + $appr2_macco + $appr3_macco,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_macco + $allotment2_macco + $allotment3_macco,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_macco + $fObl2_macco + $fObl3_macco,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_macco + $balance_appr2_macco + $balance_appr3_macco,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_macco + $balance_allot2_macco + $balance_allot3_macco,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>



<!------- Municipal Treasurers Office ------>	
	<tr>
		<td>1091</td>
		<td colspan="6"><strong>Office of the Municipal Treasurer</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MTO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mto = $row['total_ps'];
				$allotment_mto  = $appr_mto / 2;
				
				$appr2_mto = $row['total_mooe'];
				$allotment2_mto = $appr2_mto / 2;
				
				$appr3_mto = $row['total_co'];
				$allotment3_mto = $appr3_mto / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmto WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mto = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mtomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mto = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mtoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mto = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mto = $appr_mto - $fObl_mto;
					$balance_allot_mto = $allotment_mto - $fObl_mto;
					
					$balance_appr2_mto = $appr2_mto - $fObl2_mto;
					$balance_allot2_mto = $allotment2_mto - $fObl2_mto;
					
					$balance_appr3_mto = $appr3_mto - $fObl3_mto;
					$balance_allot3_mto = $allotment3_mto - $fObl3_mto;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mto,2).'</td>';
			echo '<td>'.number_format($allotment_mto,2).'</td>';
			echo '<td>'.number_format($fObl_mto,2).'</td>';
			echo '<td>'.number_format($balance_appr_mto,2).'</td>';
			echo '<td>'.number_format($balance_allot_mto,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mto,2).'</td>';
			echo '<td>'.number_format($allotment2_mto,2).'</td>';
			echo '<td>'.number_format($fObl2_mto,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mto,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mto,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mto,2).'</td>';
			echo '<td>'.number_format($allotment3_mto,2).'</td>';
			echo '<td>'.number_format($fObl3_mto,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mto,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mto,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mto + $appr2_mto + $appr3_mto,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mto + $allotment2_mto + $allotment3_mto,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mto + $fObl2_mto + $fObl3_mto,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mto + $balance_appr2_mto + $balance_appr3_mto,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mto + $balance_allot2_mto + $balance_allot3_mto,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

<!------- Municipal Assesors Office ------>	
	<tr>
		<td>1104</td>
		<td colspan="6"><strong>Office of the Municipal Assessor</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MASSO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_masso = $row['total_ps'];
				$allotment_masso  = $appr_masso / 2;
				
				$appr2_masso = $row['total_mooe'];
				$allotment2_masso = $appr2_masso / 2;
				
				$appr3_masso = $row['total_co'];
				$allotment3_masso = $appr3_masso / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmasso WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_masso = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM massomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_masso = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM massoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_masso = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_masso = $appr_masso - $fObl_masso;
					$balance_allot_masso = $allotment_masso - $fObl_masso;
					
					$balance_appr2_masso = $appr2_masso - $fObl2_masso;
					$balance_allot2_masso = $allotment2_masso - $fObl2_masso;
					
					$balance_appr3_masso = $appr3_masso - $fObl3_masso;
					$balance_allot3_masso = $allotment3_masso - $fObl3_masso;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_masso,2).'</td>';
			echo '<td>'.number_format($allotment_masso,2).'</td>';
			echo '<td>'.number_format($fObl_masso,2).'</td>';
			echo '<td>'.number_format($balance_appr_masso,2).'</td>';
			echo '<td>'.number_format($balance_allot_masso,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_masso,2).'</td>';
			echo '<td>'.number_format($allotment2_masso,2).'</td>';
			echo '<td>'.number_format($fObl2_masso,2).'</td>';
			echo '<td>'.number_format($balance_appr2_masso,2).'</td>';
			echo '<td>'.number_format($balance_allot2_masso,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_masso,2).'</td>';
			echo '<td>'.number_format($allotment3_masso,2).'</td>';
			echo '<td>'.number_format($fObl3_masso,2).'</td>';
			echo '<td>'.number_format($balance_appr3_masso,2).'</td>';
			echo '<td>'.number_format($balance_allot3_masso,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_masso + $appr2_masso + $appr3_masso,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_masso + $allotment2_masso + $allotment3_masso,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_masso + $fObl2_masso + $fObl3_masso,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_masso + $balance_appr2_masso + $balance_appr3_masso,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_masso + $balance_allot2_masso + $balance_allot3_masso,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	

<!------- General Services ------>	
	<tr>
		<td>6544</td>
		<td colspan="6"><strong>General Services Office</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["General Services",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_gs = $row['total_ps'];
				$allotment_gs  = $appr_gs / 2;
				
				$appr2_gs = $row['total_mooe'];
				$allotment2_gs = $appr2_gs / 2;
				
				$appr3_gs = $row['total_co'];
				$allotment3_gs = $appr3_gs / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psgs WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_gs = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM gsmooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_gs = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM gsco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_gs = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_gs = $appr_gs - $fObl_gs;
					$balance_allot_gs = $allotment_gs - $fObl_gs;
					
					$balance_appr2_gs = $appr2_gs - $fObl2_gs;
					$balance_allot2_gs = $allotment2_gs - $fObl2_gs;
					
					$balance_appr3_gs = $appr3_gs - $fObl3_gs;
					$balance_allot3_gs = $allotment3_gs - $fObl3_gs;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_gs,2).'</td>';
			echo '<td>'.number_format($allotment_gs,2).'</td>';
			echo '<td>'.number_format($fObl_gs,2).'</td>';
			echo '<td>'.number_format($balance_appr_gs,2).'</td>';
			echo '<td>'.number_format($balance_allot_gs,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_gs,2).'</td>';
			echo '<td>'.number_format($allotment2_gs,2).'</td>';
			echo '<td>'.number_format($fObl2_gs,2).'</td>';
			echo '<td>'.number_format($balance_appr2_gs,2).'</td>';
			echo '<td>'.number_format($balance_allot2_gs,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_gs,2).'</td>';
			echo '<td>'.number_format($allotment3_gs,2).'</td>';
			echo '<td>'.number_format($fObl3_gs,2).'</td>';
			echo '<td>'.number_format($balance_appr3_gs,2).'</td>';
			echo '<td>'.number_format($balance_allot3_gs,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_gs + $appr2_gs + $appr3_gs,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_gs + $allotment2_gs + $allotment3_gs,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_gs + $fObl2_gs + $fObl3_gs,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_gs + $balance_appr2_gs + $balance_appr3_gs,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_gs + $balance_allot2_gs + $balance_allot3_gs,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	

<!------- Municipal Health Office ------>	
	<tr>
		<td>4411</td>
		<td colspan="6"><strong>Office of the Municipal Health Officer</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MHO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mho = $row['total_ps'];
				$allotment_mho  = $appr_mho / 2;
				
				$appr2_mho = $row['total_mooe'];
				$allotment2_mho = $appr2_mho / 2;
				
				$appr3_mho = $row['total_co'];
				$allotment3_mho = $appr3_mho / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmho WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mho = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mhomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mho = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mhoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mho = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mho = $appr_mho - $fObl_mho;
					$balance_allot_mho = $allotment_mho - $fObl_mho;
					
					$balance_appr2_mho = $appr2_mho - $fObl2_mho;
					$balance_allot2_mho = $allotment2_mho - $fObl2_mho;
					
					$balance_appr3_mho = $appr3_mho - $fObl3_mho;
					$balance_allot3_mho = $allotment3_mho - $fObl3_mho;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mho,2).'</td>';
			echo '<td>'.number_format($allotment_mho,2).'</td>';
			echo '<td>'.number_format($fObl_mho,2).'</td>';
			echo '<td>'.number_format($balance_appr_mho,2).'</td>';
			echo '<td>'.number_format($balance_allot_mho,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mho,2).'</td>';
			echo '<td>'.number_format($allotment2_mho,2).'</td>';
			echo '<td>'.number_format($fObl2_mho,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mho,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mho,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mho,2).'</td>';
			echo '<td>'.number_format($allotment3_mho,2).'</td>';
			echo '<td>'.number_format($fObl3_mho,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mho,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mho,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mho + $appr2_mho + $appr3_mho,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mho + $allotment2_mho + $allotment3_mho,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mho + $fObl2_mho + $fObl3_mho,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mho + $balance_appr2_mho + $balance_appr3_mho,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mho + $balance_allot2_mho + $balance_allot3_mho,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
<!------- Municipal Social Welfare ------>	
	<tr>
		<td>7611</td>
		<td colspan="6"><strong>Municipal Social Welfare and Development Office</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MSWD",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mswd = $row['total_ps'];
				$allotment_mswd  = $appr_mswd / 2;
				
				$appr2_mswd = $row['total_mooe'];
				$allotment2_mswd = $appr2_mswd / 2;
				
				$appr3_mswd = $row['total_co'];
				$allotment3_mswd = $appr3_mswd / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmswd WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mswd = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mswdmooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mswd = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mswdco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mswd = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mswd = $appr_mswd - $fObl_mswd;
					$balance_allot_mswd = $allotment_mswd - $fObl_mswd;
					
					$balance_appr2_mswd = $appr2_mswd - $fObl2_mswd;
					$balance_allot2_mswd = $allotment2_mswd - $fObl2_mswd;
					
					$balance_appr3_mswd = $appr3_mswd - $fObl3_mswd;
					$balance_allot3_mswd = $allotment3_mswd - $fObl3_mswd;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mswd,2).'</td>';
			echo '<td>'.number_format($allotment_mswd,2).'</td>';
			echo '<td>'.number_format($fObl_mswd,2).'</td>';
			echo '<td>'.number_format($balance_appr_mswd,2).'</td>';
			echo '<td>'.number_format($balance_allot_mswd,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mswd,2).'</td>';
			echo '<td>'.number_format($allotment2_mswd,2).'</td>';
			echo '<td>'.number_format($fObl2_mswd,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mswd,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mswd,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mswd,2).'</td>';
			echo '<td>'.number_format($allotment3_mswd,2).'</td>';
			echo '<td>'.number_format($fObl3_mswd,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mswd,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mswd,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mswd + $appr2_mswd + $appr3_mswd,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mswd + $allotment2_mswd + $allotment3_mswd,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mswd + $fObl2_mswd + $fObl3_mswd,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mswd + $balance_appr2_mswd + $balance_appr3_mswd,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mswd + $balance_allot2_mswd + $balance_allot3_mswd,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	

<!------- Municipal Agriculurist ------>	
	<tr>
		<td>8711</td>
		<td colspan="6"><strong>Office of the Municipal Agriculturist</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MAO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mao = $row['total_ps'];
				$allotment_mao  = $appr_mao / 2;
				
				$appr2_mao = $row['total_mooe'];
				$allotment2_mao = $appr2_mao / 2;
				
				$appr3_mao = $row['total_co'];
				$allotment3_mao = $appr3_mao / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmao WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mao = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mao = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mao = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mao = $appr_mao - $fObl_mao;
					$balance_allot_mao = $allotment_mao - $fObl_mao;
					
					$balance_appr2_mao = $appr2_mao - $fObl2_mao;
					$balance_allot2_mao = $allotment2_mao - $fObl2_mao;
					
					$balance_appr3_mao = $appr3_mao - $fObl3_mao;
					$balance_allot3_mao = $allotment3_mao - $fObl3_mao;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mao,2).'</td>';
			echo '<td>'.number_format($allotment_mao,2).'</td>';
			echo '<td>'.number_format($fObl_mao,2).'</td>';
			echo '<td>'.number_format($balance_appr_mao,2).'</td>';
			echo '<td>'.number_format($balance_allot_mao,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mao,2).'</td>';
			echo '<td>'.number_format($allotment2_mao,2).'</td>';
			echo '<td>'.number_format($fObl2_mao,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mao,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mao,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mao,2).'</td>';
			echo '<td>'.number_format($allotment3_mao,2).'</td>';
			echo '<td>'.number_format($fObl3_mao,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mao,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mao,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mao + $appr2_mao + $appr3_mao,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mao + $allotment2_mao + $allotment3_mao,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mao + $fObl2_mao + $fObl3_mao,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mao + $balance_appr2_mao + $balance_appr3_mao,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mao + $balance_allot2_mao + $balance_allot3_mao,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>


<!------- Municipal Engineer ------>	
	<tr>
		<td>8751</td>
		<td colspan="6"><strong>Office of the Municipal Engineer</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MEO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_meo = $row['total_ps'];
				$allotment_meo  = $appr_meo / 2;
				
				$appr2_meo = $row['total_mooe'];
				$allotment2_meo = $appr2_meo / 2;
				
				$appr3_meo = $row['total_co'];
				$allotment3_meo = $appr3_meo / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmeo WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_meo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM meomooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_meo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM meoco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_meo = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_meo = $appr_meo - $fObl_meo;
					$balance_allot_meo = $allotment_meo - $fObl_meo;
					
					$balance_appr2_meo = $appr2_meo - $fObl2_meo;
					$balance_allot2_meo = $allotment2_meo - $fObl2_meo;
					
					$balance_appr3_meo = $appr3_meo - $fObl3_meo;
					$balance_allot3_meo = $allotment3_meo - $fObl3_meo;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_meo,2).'</td>';
			echo '<td>'.number_format($allotment_meo,2).'</td>';
			echo '<td>'.number_format($fObl_meo,2).'</td>';
			echo '<td>'.number_format($balance_appr_meo,2).'</td>';
			echo '<td>'.number_format($balance_allot_meo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_meo,2).'</td>';
			echo '<td>'.number_format($allotment2_meo,2).'</td>';
			echo '<td>'.number_format($fObl2_meo,2).'</td>';
			echo '<td>'.number_format($balance_appr2_meo,2).'</td>';
			echo '<td>'.number_format($balance_allot2_meo,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_meo,2).'</td>';
			echo '<td>'.number_format($allotment3_meo,2).'</td>';
			echo '<td>'.number_format($fObl3_meo,2).'</td>';
			echo '<td>'.number_format($balance_appr3_meo,2).'</td>';
			echo '<td>'.number_format($balance_allot3_meo,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_meo + $appr2_meo + $appr3_meo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_meo + $allotment2_meo + $allotment3_meo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_meo + $fObl2_meo + $fObl3_meo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_meo + $balance_appr2_meo + $balance_appr3_meo,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_meo + $balance_allot2_meo + $balance_allot3_meo,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<!------- Municipal Business Enterprise ------>	
	<tr>
		<td>8811</td>
		<td colspan="6"><strong>Municipal Business Enterprise</strong></td>
	</tr>

	
		
		<?php 
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MBE",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mbe = $row['total_ps'];
				$allotment_mbe  = $appr_mbe / 2;
				
				$appr2_mbe = $row['total_mooe'];
				$allotment2_mbe = $appr2_mbe / 2;
				
				$appr3_mbe = $row['total_co'];
				$allotment3_mbe = $appr3_mbe / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmbe WHERE year_transact = ? AND month_transact = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mbe = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbemooe WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mbe = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbeco WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mbe = $rObl['total'];
					
					}
					
					
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mbe = $appr_mbe - $fObl_mbe;
					$balance_allot_mbe = $allotment_mbe - $fObl_mbe;
					
					$balance_appr2_mbe = $appr2_mbe - $fObl2_mbe;
					$balance_allot2_mbe = $allotment2_mbe - $fObl2_mbe;
					
					$balance_appr3_mbe = $appr3_mbe - $fObl3_mbe;
					$balance_allot3_mbe = $allotment3_mbe - $fObl3_mbe;
				
			}
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($appr_mbe,2).'</td>';
			echo '<td>'.number_format($allotment_mbe,2).'</td>';
			echo '<td>'.number_format($fObl_mbe,2).'</td>';
			echo '<td>'.number_format($balance_appr_mbe,2).'</td>';
			echo '<td>'.number_format($balance_allot_mbe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($appr2_mbe,2).'</td>';
			echo '<td>'.number_format($allotment2_mbe,2).'</td>';
			echo '<td>'.number_format($fObl2_mbe,2).'</td>';
			echo '<td>'.number_format($balance_appr2_mbe,2).'</td>';
			echo '<td>'.number_format($balance_allot2_mbe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($appr3_mbe,2).'</td>';
			echo '<td>'.number_format($allotment3_mbe,2).'</td>';
			echo '<td>'.number_format($fObl3_mbe,2).'</td>';
			echo '<td>'.number_format($balance_appr3_mbe,2).'</td>';
			echo '<td>'.number_format($balance_allot3_mbe,2).'</td>';
			echo '</tr>';
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>Financial Expenses</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($appr_mbe + $appr2_mbe + $appr3_mbe,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allotment_mbe + $allotment2_mbe + $allotment3_mbe,2); ?></strong></td>
		<td><strong><?PHP echo number_format($fObl_mbe + $fObl2_mbe + $fObl3_mbe,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_appr_mbe + $balance_appr2_mbe + $balance_appr3_mbe,2); ?></strong></td>
		<td><strong><?PHP echo number_format($balance_allot_mbe + $balance_allot2_mbe + $balance_allot3_mbe,2); ?></strong></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<!------- 20% EDF ------>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="6"><strong>20% EDF</strong></td>
		
	</tr>

	
		
		<?php 
		$list_20 = "20_list_".$_SESSION['budget'];
		$listcy_20 = "20edf".$_SESSION['budget'];
		$rlistcy_20 = "r20edf".$_SESSION['budget'];
		
		$total_appr_20 = "0";
		$total_allotment_20 = "0";
		$total_obl_20 = "0";
		$total_balAppr_20 = "0";
		$total_balAllot_20 = "0";
		
		
		$result = $db->prepare("SELECT * FROM $list_20 WHERE 1");
		$result->execute();
			
			foreach($result as $row){
				
				/** Get all list **/
				
				$all_list_code_20 = $row['code'];
				$all_list_name_20 = $row['propername'];
				
				
					/** Get their Appropriation **/
					
					$rs = $db->prepare("SELECT $all_list_code_20 as programs FROM $listcy_20 WHERE year = ?");
					$rs->execute([$_SESSION['budget']]);
					
					foreach($rs as $i){
						
						echo '<tr>';
							echo '<td>';
							echo '<td>'.$all_list_name_20.'</td>';
							echo '<td>'.number_format($i['programs'],2).'</td>';
							
							/* Allotment */
							$allotment_20 = $i['programs'] / 2;
							echo '<td>'.number_format($allotment_20,2).'</td>';
							
							/* Obligations */
							
							$obligation_20 = $db->prepare("SELECT sum($all_list_code_20) as total FROM $rlistcy_20 WHERE yearm = ? AND month = ?");
							$obligation_20->execute([$_SESSION['budget'],"05"]);
							
							foreach($obligation_20 as $obl){
								
								$rObl_20 = $obl['total'];
								
							}
							
							echo '<td>'.number_format($rObl_20,2).'</td>';
							
							
							/* Balance Appropriation */
							$bal_appr_20 = $i['programs'] - $rObl_20;
							echo '<td>'.number_format($bal_appr_20,2).'</td>';
							
							/* Balance Allotment */
							$bal_allot_20 = $allotment_20 - $rObl_20;
							echo '<td>'.number_format($bal_allot_20,2).'</td>';
 							
							echo '</tr>';
						
						
						
						
						$total_appr_20 += $i['programs'];
						$total_allotment_20 += $allotment_20;
						
						$total_obl_20 += $rObl_20;
						$total_balAppr_20 += $bal_appr_20;
						$total_balAllot_20 += $bal_allot_20;
						
					}
					
			
				
				
			}
			
			
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($total_appr_20,2); ?></strong></td>
		<td><strong><?PHP echo number_format($total_allotment_20,2); ?></strong></td>
		<td><strong><?PHP echo number_format($total_obl_20,2); ?></strong></td>
		<td><strong><?PHP echo number_format($total_balAppr_20,2); ?></strong></td>
		<td><strong><?PHP echo number_format($total_balAllot_20,2); ?></strong></td>
	</tr>	
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
<!------- NONE - OFFICE ------>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td><strong>Non-Office Expenditures</strong></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="6">&nbsp; Personal Services</td>
	</tr>
	
	<?php 
	/*-----------------NONE OFFICE EXPENDITURES ----------------------*/
	
		$list_noneoffice = "noneoffice_list_".$_SESSION['budget'];
		$listcy_noneoffice = "noneoffice".$_SESSION['budget'];
		$rlistcy_noneoffice = "rnoneoffice".$_SESSION['budget'];
		
		$total_appr_noneoffice_ps = "0";
		$total_allotment_noneoffice_ps = "0";
		$total_obl_noneoffice_ps = "0";
		$total_balAppr_noneoffice_ps = "0";
		$total_balAllot_noneoffice_ps = "0";
		
		
		$result = $db->prepare("SELECT * FROM $list_noneoffice WHERE type = ?");
		$result->execute(["Personal Services"]);
			
			foreach($result as $row){
				
				/** Get all list **/
				
				$all_list_code_noneoffice = $row['code'];
				$all_list_name_noneoffice = $row['propername'];
				
				
					/** Get their Appropriation **/
					
					$rs = $db->prepare("SELECT $all_list_code_noneoffice as programs FROM $listcy_noneoffice WHERE year = ?");
					$rs->execute([$_SESSION['budget']]);
					
					foreach($rs as $i){
						
						echo '<tr>';
							echo '<td>';
							echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; '.$all_list_name_noneoffice.'</td>';
							echo '<td>'.number_format($i['programs'],2).'</td>';
							
							/* Allotment */
							$allotment_noneoffice = $i['programs'] / 2;
							echo '<td>'.number_format($allotment_noneoffice,2).'</td>';
							
							/* Obligations */
							
							$obligation_noneoffice = $db->prepare("SELECT sum($all_list_code_noneoffice) as total FROM $rlistcy_noneoffice WHERE yearm = ? AND month = ?");
							$obligation_noneoffice->execute([$_SESSION['budget'],"05"]);
							
							foreach($obligation_noneoffice as $obl){
								
								$rObl_noneoffice = $obl['total'];
								
							}
							
							echo '<td>'.number_format($rObl_noneoffice,2).'</td>';
							
							
							/* Balance Appropriation */
							$bal_appr_noneoffice = $i['programs'] - $rObl_noneoffice;
							echo '<td>'.number_format($bal_appr_noneoffice,2).'</td>';
							
							/* Balance Allotment */
							$bal_allot_noneoffice = $allotment_noneoffice - $rObl_noneoffice;
							echo '<td>'.number_format($bal_allot_noneoffice,2).'</td>';
 							
							echo '</tr>';
						
						
						
						
						$total_appr_noneoffice_ps += $i['programs'];
						$total_allotment_noneoffice_ps += $allotment_noneoffice;
						
						$total_obl_noneoffice_ps += $rObl_noneoffice;
						$total_balAppr_noneoffice_ps += $bal_appr_noneoffice;
						$total_balAllot_noneoffice_ps += $bal_allot_noneoffice;
						
					}
					
			
				
				
			}
			
			
			
			
		?>	
	
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="6">&nbsp; Maintenance and Other Operating Expenses</td>
		
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp; &nbsp; &nbsp; &nbsp; 5% Calamity Fund</td>
		<!------ 5% Calamity Fund --->
		
		<?php 
		$total_appr_noneoffice_mdr = "0";
		$total_allotment_noneoffice_mdr = "0";
		$total_obl_noneoffice_mdr = "0";
		$total_balAppr_noneoffice_mdr = "0";
		$total_balAllot_noneoffice_mdr = "0";
		
		$list_mdr = "mdr".$_SESSION['budget'];
		$rlistcy_mdr = "rmdr".$_SESSION['budget'];
		
		
		$result = $db->prepare("SELECT total FROM $list_mdr WHERE year = ?");
		$result->execute([$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mdr = $row['total'];
				$allotment_mdr  = $appr_mdr / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM $rlistcy_mdr WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_mdr = $rObl['total'];
					
					}
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_mdr = $appr_mdr - $fObl_mdr;
					$balance_allot_mdr = $allotment_mdr - $fObl_mdr;
					
					
				
			}
			
						$total_appr_noneoffice_mdr += $appr_mdr;
						$total_allotment_noneoffice_mdr += $allotment_mdr;
						
						$total_obl_noneoffice_mdr += $fObl_mdr;
						$total_balAppr_noneoffice_mdr += $balance_appr_mdr;
						$total_balAllot_noneoffice_mdr += $balance_allot_mdr;
			
			echo '<td>'.number_format($appr_mdr,2).'</td>';
			echo '<td>'.number_format($allotment_mdr,2).'</td>';
			echo '<td>'.number_format($fObl_mdr,2).'</td>';
			echo '<td>'.number_format($balance_appr_mdr,2).'</td>';
			echo '<td>'.number_format($balance_allot_mdr,2).'</td>';
			echo '</tr>';
			
			
			
		?>	
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp; &nbsp; &nbsp; &nbsp; 5% Gender and Development</td>
		<!------ 5% GAD --->
		<?php 
		$total_appr_noneoffice_gad = "0";
		$total_allotment_noneoffice_gad = "0";
		$total_obl_noneoffice_gad = "0";
		$total_balAppr_noneoffice_gad = "0";
		$total_balAllot_noneoffice_gad = "0";
		
		
		$list_gad = "gad".$_SESSION['budget'];
		$rlistcy_gad = "rgad".$_SESSION['budget'];
		
		
		$result = $db->prepare("SELECT total FROM $list_gad WHERE year = ?");
		$result->execute([$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_gad = $row['total'];
				$allotment_gad  = $appr_gad / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM $rlistcy_gad WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_gad = $rObl['total'];
					
					}
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_gad = $appr_gad - $fObl_gad;
					$balance_allot_gad = $allotment_gad - $fObl_gad;
					
					
				
			}
			
						$total_appr_noneoffice_gad += $appr_gad;
						$total_allotment_noneoffice_gad += $allotment_gad;
						
						$total_obl_noneoffice_gad += $fObl_gad;
						$total_balAppr_noneoffice_gad += $balance_appr_gad;
						$total_balAllot_noneoffice_gad += $balance_allot_gad;
			
			echo '<td>'.number_format($appr_gad,2).'</td>';
			echo '<td>'.number_format($allotment_gad,2).'</td>';
			echo '<td>'.number_format($fObl_gad,2).'</td>';
			echo '<td>'.number_format($balance_appr_gad,2).'</td>';
			echo '<td>'.number_format($balance_allot_gad,2).'</td>';
			echo '</tr>';
			
			
			
		?>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp; &nbsp; &nbsp; &nbsp; 1% Senior Citizen/PWD</td>
		<!------ 1% Senior Citizen/PWD --->
		<?php 
		$total_appr_noneoffice_1sp = "0";
		$total_allotment_noneoffice_1sp = "0";
		$total_obl_noneoffice_1sp = "0";
		$total_balAppr_noneoffice_1sp = "0";
		$total_balAllot_noneoffice_1sp = "0";
		
		$list_1sp = "1sp".$_SESSION['budget'];
		$rlistcy_1sp = "r1sp".$_SESSION['budget'];
		
		
		$result = $db->prepare("SELECT total FROM $list_1sp WHERE year = ?");
		$result->execute([$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_1sp = $row['total'];
				$allotment_1sp  = $appr_1sp / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM $rlistcy_1sp WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_1sp = $rObl['total'];
					
					}
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_1sp = $appr_1sp - $fObl_1sp;
					$balance_allot_1sp = $allotment_1sp - $fObl_1sp;
					
					
				
			}
			
						$total_appr_noneoffice_1sp += $appr_1sp;
						$total_allotment_noneoffice_1sp += $allotment_1sp;
						
						$total_obl_noneoffice_1sp += $fObl_1sp;
						$total_balAppr_noneoffice_1sp += $balance_appr_1sp;
						$total_balAllot_noneoffice_1sp += $balance_allot_1sp;
			
			echo '<td>'.number_format($appr_1sp,2).'</td>';
			echo '<td>'.number_format($allotment_1sp,2).'</td>';
			echo '<td>'.number_format($fObl_1sp,2).'</td>';
			echo '<td>'.number_format($balance_appr_1sp,2).'</td>';
			echo '<td>'.number_format($balance_allot_1sp,2).'</td>';
			echo '</tr>';
			
			
			
		?>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp; &nbsp; &nbsp; &nbsp; 1% Local Council for the Protection of Children</td>
		<!------ 1% IRA/Local Council for the Protection of Children --->
		<?php 
		$total_appr_noneoffice_lcpc = "0";
		$total_allotment_noneoffice_lcpc = "0";
		$total_obl_noneoffice_lcpc = "0";
		$total_balAppr_noneoffice_lcpc = "0";
		$total_balAllot_noneoffice_lcpc = "0";
		
		$list_lcpc = "lcpc".$_SESSION['budget'];
		$rlistcy_lcpc = "rlcpc".$_SESSION['budget'];
		
		
		$result = $db->prepare("SELECT total FROM $list_lcpc WHERE year = ?");
		$result->execute([$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_lcpc = $row['total'];
				$allotment_lcpc  = $appr_lcpc / 2;
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM $rlistcy_lcpc WHERE yearm = ? AND month = ?");
					$obligation->execute([$_SESSION['budget'],"05"]);
					
					foreach($obligation as $rObl){
						
						$fObl_lcpc = $rObl['total'];
					
					}
				/*--------- */	
					
					
					
				/*----- Balances ----- */
				
					$balance_appr_lcpc = $appr_lcpc - $fObl_lcpc;
					$balance_allot_lcpc = $allotment_lcpc - $fObl_lcpc;
					
					
				
			}
			
						$total_appr_noneoffice_lcpc += $appr_lcpc;
						$total_allotment_noneoffice_lcpc += $allotment_lcpc;
						
						$total_obl_noneoffice_lcpc += $fObl_lcpc;
						$total_balAppr_noneoffice_lcpc += $balance_appr_lcpc;
						$total_balAllot_noneoffice_lcpc += $balance_allot_lcpc;
			
			echo '<td>'.number_format($appr_lcpc,2).'</td>';
			echo '<td>'.number_format($allotment_lcpc,2).'</td>';
			echo '<td>'.number_format($fObl_lcpc,2).'</td>';
			echo '<td>'.number_format($balance_appr_lcpc,2).'</td>';
			echo '<td>'.number_format($balance_allot_lcpc,2).'</td>';
			echo '</tr>';
			
			
			
		?>
	
		<?php 
	/*-----------------NONE OFFICE EXPENDITURES / Maintenance and Other Operating Expenses ----------------------*/
	
		$list_noneoffice = "noneoffice_list_".$_SESSION['budget'];
		$listcy_noneoffice = "noneoffice".$_SESSION['budget'];
		$rlistcy_noneoffice = "rnoneoffice".$_SESSION['budget'];
		
		$total_appr_noneoffice_mooe = "0";
		$total_allotment_noneoffice_mooe = "0";
		$total_obl_noneoffice_mooe = "0";
		$total_balAppr_noneoffice_mooe = "0";
		$total_balAllot_noneoffice_mooe = "0";
		
		
		$result = $db->prepare("SELECT * FROM $list_noneoffice WHERE type = ?");
		$result->execute(["Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				
				/** Get all list **/
				
				$all_list_code_noneoffice = $row['code'];
				$all_list_name_noneoffice = $row['propername'];
				
				
					/** Get their Appropriation **/
					
					$rs = $db->prepare("SELECT $all_list_code_noneoffice as programs FROM $listcy_noneoffice WHERE year = ?");
					$rs->execute([$_SESSION['budget']]);
					
					foreach($rs as $i){
						
						echo '<tr>';
							echo '<td>';
							echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; '.$all_list_name_noneoffice.'</td>';
							echo '<td>'.number_format($i['programs'],2).'</td>';
							
							/* Allotment */
							$allotment_noneoffice = $i['programs'] / 2;
							echo '<td>'.number_format($allotment_noneoffice,2).'</td>';
							
							/* Obligations */
							
							$obligation_noneoffice = $db->prepare("SELECT sum($all_list_code_noneoffice) as total FROM $rlistcy_noneoffice WHERE yearm = ? AND month = ?");
							$obligation_noneoffice->execute([$_SESSION['budget'],"05"]);
							
							foreach($obligation_noneoffice as $obl){
								
								$rObl_noneoffice = $obl['total'];
								
							}
							
							echo '<td>'.number_format($rObl_noneoffice,2).'</td>';
							
							
							/* Balance Appropriation */
							$bal_appr_noneoffice = $i['programs'] - $rObl_noneoffice;
							echo '<td>'.number_format($bal_appr_noneoffice,2).'</td>';
							
							/* Balance Allotment */
							$bal_allot_noneoffice = $allotment_noneoffice - $rObl_noneoffice;
							echo '<td>'.number_format($bal_allot_noneoffice,2).'</td>';
 							
							echo '</tr>';
						
						
						
						
						$total_appr_noneoffice_mooe += $i['programs'];
						$total_allotment_noneoffice_mooe += $allotment_noneoffice;
						
						$total_obl_noneoffice_mooe += $rObl_noneoffice;
						$total_balAppr_noneoffice_mooe += $bal_appr_noneoffice;
						$total_balAllot_noneoffice_mooe += $bal_allot_noneoffice;
						
					}
					
			
				
				
			}
			
			
			
			
		?>	
	<tr>
		<td>&nbsp;</td>
		<td colspan="6">&nbsp; Capital Outlay</td>
		
	</tr>
	
	<?php 
	/*-----------------NONE OFFICE EXPENDITURES / Capital Outlay ----------------------*/
	
		$list_noneoffice = "noneoffice_list_".$_SESSION['budget'];
		$listcy_noneoffice = "noneoffice".$_SESSION['budget'];
		$rlistcy_noneoffice = "rnoneoffice".$_SESSION['budget'];
		
		$total_appr_noneoffice_co = "0";
		$total_allotment_noneoffice_co = "0";
		$total_obl_noneoffice_co = "0";
		$total_balAppr_noneoffice_co = "0";
		$total_balAllot_noneoffice_co = "0";
		
		
		$result = $db->prepare("SELECT * FROM $list_noneoffice WHERE type = ?");
		$result->execute(["Capital Outlay"]);
			
			foreach($result as $row){
				
				/** Get all list **/
				
				$all_list_code_noneoffice = $row['code'];
				$all_list_name_noneoffice = $row['propername'];
				
				
					/** Get their Appropriation **/
					
					$rs = $db->prepare("SELECT $all_list_code_noneoffice as programs FROM $listcy_noneoffice WHERE year = ?");
					$rs->execute([$_SESSION['budget']]);
					
					foreach($rs as $i){
						
						echo '<tr>';
							echo '<td>';
							echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; '.$all_list_name_noneoffice.'</td>';
							echo '<td>'.number_format($i['programs'],2).'</td>';
							
							/* Allotment */
							$allotment_noneoffice = $i['programs'] / 2;
							echo '<td>'.number_format($allotment_noneoffice,2).'</td>';
							
							/* Obligations */
							
							$obligation_noneoffice = $db->prepare("SELECT sum($all_list_code_noneoffice) as total FROM $rlistcy_noneoffice WHERE yearm = ? AND month = ?");
							$obligation_noneoffice->execute([$_SESSION['budget'],"05"]);
							
							foreach($obligation_noneoffice as $obl){
								
								$rObl_noneoffice = $obl['total'];
								
							}
							
							echo '<td>'.number_format($rObl_noneoffice,2).'</td>';
							
							
							/* Balance Appropriation */
							$bal_appr_noneoffice = $i['programs'] - $rObl_noneoffice;
							echo '<td>'.number_format($bal_appr_noneoffice,2).'</td>';
							
							/* Balance Allotment */
							$bal_allot_noneoffice = $allotment_noneoffice - $rObl_noneoffice;
							echo '<td>'.number_format($bal_allot_noneoffice,2).'</td>';
 							
							echo '</tr>';
						
						
						
						
						$total_appr_noneoffice_co += $i['programs'];
						$total_allotment_noneoffice_co += $allotment_noneoffice;
						
						$total_obl_noneoffice_co += $rObl_noneoffice;
						$total_balAppr_noneoffice_co += $bal_appr_noneoffice;
						$total_balAllot_noneoffice_co += $bal_allot_noneoffice;
						
					}
					
			
				
				
			}
			
			
			$gTotal_appr_noneoffice = $total_appr_noneoffice_ps + 
										$total_appr_noneoffice_mdr + 
										$total_appr_noneoffice_gad + 
										$total_appr_noneoffice_1sp + 
										$total_appr_noneoffice_lcpc +
										$total_appr_noneoffice_mooe +
										$total_appr_noneoffice_co;
			 
			
			
			$gTotal_allotment_noneoffice =  $total_allotment_noneoffice_ps + 
										$total_allotment_noneoffice_mdr + 
										$total_allotment_noneoffice_gad + 
										$total_allotment_noneoffice_1sp + 
										$total_allotment_noneoffice_lcpc +
										$total_allotment_noneoffice_mooe +
										$total_allotment_noneoffice_co;
										
										
			$gTotal_obl_noneoffice	 = $total_obl_noneoffice_ps + 
										$total_obl_noneoffice_mdr + 
										$total_obl_noneoffice_gad + 
										$total_obl_noneoffice_1sp + 
										$total_obl_noneoffice_lcpc +
										$total_obl_noneoffice_mooe +
										$total_obl_noneoffice_co;
										
			$gTotal_balAppr_noneoffice	 = $total_balAppr_noneoffice_ps + 
										$total_balAppr_noneoffice_mdr + 
										$total_balAppr_noneoffice_gad + 
										$total_balAppr_noneoffice_1sp + 
										$total_balAppr_noneoffice_lcpc +
										$total_balAppr_noneoffice_mooe +
										$total_balAppr_noneoffice_co;	

			$gTotal_balAllot_noneoffice	 = $total_balAllot_noneoffice_ps + 
										$total_balAllot_noneoffice_mdr + 
										$total_balAllot_noneoffice_gad + 
										$total_balAllot_noneoffice_1sp + 
										$total_balAllot_noneoffice_lcpc +
										$total_balAllot_noneoffice_mooe +
										$total_balAllot_noneoffice_co;
										
		?>
		
		
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td style="text-align: center;"><strong>Total</strong></td>	
		<td><strong><?PHP echo number_format($gTotal_appr_noneoffice,2); ?></strong></td>
		<td><strong><?PHP echo number_format($gTotal_allotment_noneoffice,2); ?></strong></td>
		<td><strong><?PHP echo number_format($gTotal_obl_noneoffice,2); ?></strong></td>
		<td><strong><?PHP echo number_format($gTotal_balAppr_noneoffice,2); ?></strong></td>
		<td><strong><?PHP echo number_format($gTotal_balAllot_noneoffice,2); ?></strong></td>
	</tr>	
	
</table>










	
</div>	
  </div>
</body>
</html>




