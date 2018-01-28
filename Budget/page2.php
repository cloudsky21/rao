<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}

$list = "cont_list_".$_SESSION['budget'];
$table = "cont".$_SESSION['budget'];
$rtable = "rcont".$_SESSION['budget'];
?>




<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SAAO Final Report</title>
	<link rel="shortcut icon" href="favicon.ico"/>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" media="screen, print">
	<link rel="stylesheet" href="bootstrap/3.3.7-dist/css/bootstrap-theme.min.css">
	<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script>
		$(document).on('show.bs.modal', '.modal', function () {
			var zIndex = 1040 + (10 * $('.modal:visible').length);
			$(this).css('z-index', zIndex);
			setTimeout(function() {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		});
	</script>
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
					
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>&nbsp;<span class="caret"></span></a>
						<ul class="dropdown-menu">
							
							<li><a href="saao">Current Year Appropriation</a></li>
							<li><a href="page2">Continuing Appropriation</a></li>
							<li><a href="page3">SEF</a></li>
							<li><a href="page4">SEF Continuing</a></li>
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

		<div class="page-header" style="margin-top:55px;">

			
			
			<img src="saaoblogo.jpg" style="float: left;">
			<p class="text-center">Republic of the Philippine<br><strong>PROVINCE OF LEYTE</strong><br>Local Government Unit-Tolosa, Leyte<br><br><strong>STATUS OF APPROPRIATIONS, ALLOTMENTS AND OBLIGATIONS<br>GENERAL FUND</strong><br>As of <label>December</label> <?PHP echo $_SESSION['budget'] ?></p>
			
			
			
		</div>
		
		<table class="table table-bordered table-condensed table-striped" style="margin-top: 20px;">
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
			
			<!------- Continuing Appropriation------>	
			<tr>
				<td>II-</td>
				<td colspan="6"><strong>CONTINUING APPROPRIATIONS</strong></td>
			</tr>

			
			

			<!------- GENERAL PUBLIC SERVICES ------>	
			<tr>
				<td>1000</td>
				<td colspan="6"><strong>GENERAL PUBLIC SERVICES</strong></td>
			</tr>

			
			
			<?php 
			
			$total_gps_m = "0";
			$fObl_d_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Maintenance And Other Operating Expenses","GENERAL PUBLIC SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_g_m = $row['amount'];
				$code_g_m = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_g_m) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_d_m += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_gps_m += $amount_g_m; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_gps_co = "0";
			$fObl_d_c = "0";
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Capital Outlay","GENERAL PUBLIC SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_g_c = $row['amount'];
				$code_g_c = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_g_c) as total FROM $rtable WHERE 1");
				$obligation->execute();
				
				foreach($obligation as $rObl){
					
					$fObl_d_c += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_gps_co += $amount_g_c; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			//MOOE
			
			$gtotalFor_gps = $total_gps_m + $total_gps_co; // Appropriation or Allotment
			$gtotalObl_gps = $fObl_d_m + $fObl_d_c; // Obligation
			$btotalFor_gps = $gtotalFor_gps - $gtotalObl_gps; // balance
			
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_gps_m,2).'</td>';
			echo '<td>'.number_format($total_gps_m,2).'</td>';
			echo '<td>'.number_format($fObl_d_m,2).'</td>';
			echo '<td>'.number_format($total_gps_m - $fObl_d_m,2).'</td>';
			echo '<td>'.number_format($total_gps_m - $fObl_d_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_gps_co,2).'</td>';
			echo '<td>'.number_format($total_gps_co,2).'</td>';
			echo '<td>'.number_format($fObl_d_c,2).'</td>';
			echo '<td>'.number_format($total_gps_co - $fObl_d_c,2).'</td>';
			echo '<td>'.number_format($total_gps_co - $fObl_d_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($gtotalFor_gps,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_gps,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_gps,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_gps,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_gps,2); ?></strong></td>
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
			

			<!------- SOCIAL SERVICES ------>	
			<tr>
				<td>4000</td>
				<td colspan="6"><strong>SOCIAL SERVICES</strong></td>
			</tr>

			
			
			<?php 
			
			$total_s_m = "0";
			$fObl_s_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Maintenance And Other Operating Expenses","SOCIAL SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_s_m = $row['amount'];
				$code_s_m = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_s_m) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_s_m += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_s_m += $amount_g_m; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_s_co = "0";
			$fObl_s_c = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Capital Outlay","SOCIAL SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_s_c = $row['amount'];
				$code_s_c = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_s_c) as total FROM $rtable WHERE 1");
				$obligation->execute();
				
				foreach($obligation as $rObl){
					
					$fObl_s_c += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_s_co += $amount_g_c; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			//MOOE
			
			$gtotalFor_s = $total_s_m + $total_s_co; // Appropriation or Allotment
			$gtotalObl_s = $fObl_s_m + $fObl_s_c; // Obligation
			$btotalFor_s = $gtotalFor_s - $gtotalObl_s; // balance
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_s_m,2).'</td>';
			echo '<td>'.number_format($total_s_m,2).'</td>';
			echo '<td>'.number_format($fObl_s_m,2).'</td>';
			echo '<td>'.number_format($total_s_m - $fObl_s_m,2).'</td>';
			echo '<td>'.number_format($total_s_m - $fObl_s_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_s_co,2).'</td>';
			echo '<td>'.number_format($total_s_co,2).'</td>';
			echo '<td>'.number_format($fObl_s_c,2).'</td>';
			echo '<td>'.number_format($total_s_co - $fObl_s_c,2).'</td>';
			echo '<td>'.number_format($total_s_co - $fObl_s_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($gtotalFor_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_s,2); ?></strong></td>
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

			<!-------ECONOMIC DEVELOPMENT ------>	
			<tr>
				<td>8000</td>
				<td colspan="6"><strong>ECONOMIC DEVELOPMENT</strong></td>
			</tr>

			
			
			<?php 
			
			$total_ed_m = "0";
			$fObl_ed_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Maintenance And Other Operating Expenses","ECONOMIC DEVELOPMENT"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_ed_m = $row['amount'];
				$code_ed_m = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_ed_m) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_ed_m += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_ed_m += $amount_g_m; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_ed_co = "0";
			$fObl_ed_c = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Capital Outlay","ECONOMIC DEVELOPMENT"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_ed_c = $row['amount'];
				$code_ed_c = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_ed_c) as total FROM $rtable WHERE 1");
				$obligation->execute();
				
				foreach($obligation as $rObl){
					
					$fObl_ed_c += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_ed_co += $amount_ed_c; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			//MOOE
			
			$gtotalFor_ed = $total_ed_m + $total_ed_co; // Appropriation or Allotment
			$gtotalObl_ed = $fObl_ed_m + $fObl_ed_c; // Obligation
			$btotalFor_ed = $gtotalFor_ed - $gtotalObl_ed; // balance
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_ed_m,2).'</td>';
			echo '<td>'.number_format($total_ed_m,2).'</td>';
			echo '<td>'.number_format($fObl_ed_m,2).'</td>';
			echo '<td>'.number_format($total_ed_m - $fObl_ed_m,2).'</td>';
			echo '<td>'.number_format($total_ed_m - $fObl_ed_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_ed_co,2).'</td>';
			echo '<td>'.number_format($total_ed_co,2).'</td>';
			echo '<td>'.number_format($fObl_ed_c,2).'</td>';
			echo '<td>'.number_format($total_ed_co - $fObl_ed_c,2).'</td>';
			echo '<td>'.number_format($total_ed_co - $fObl_ed_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($gtotalFor_ed,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_ed,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_ed,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_ed,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_ed,2); ?></strong></td>
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
			
			<!-------ENVIRONMENT DEVELOPMENT ------>	
			<tr>
				<td>&nbsp;</td>
				<td colspan="6"><strong>ENVIRONMENT DEVELOPMENT</strong></td>
			</tr>

			
			
			<?php 
			
			$total_end_m = "0";
			$fObl_end_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Maintenance And Other Operating Expenses","ENVIRONMENT DEVELOPMENT"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_end_m = $row['amount'];
				$code_end_m = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_end_m) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_end_m += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_end_m += $amount_n_m; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_end_co = "0";
			$fObl_end_c = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Capital Outlay","ENVIRONMENT DEVELOPMENT"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_end_c = $row['amount'];
				$code_end_c = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_end_c) as total FROM $rtable WHERE 1");
				$obligation->execute();
				
				foreach($obligation as $rObl){
					
					$fObl_end_c += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_end_co += $amount_end_c; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			//MOOE
			
			$gtotalFor_end = $total_end_m + $total_end_co; // Appropriation or Allotment
			$gtotalObl_end = $fObl_end_m + $fObl_end_c; // Obligation
			$btotalFor_end = $gtotalFor_end - $gtotalObl_end; // balance
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '<td>0.00</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_end_m,2).'</td>';
			echo '<td>'.number_format($total_end_m,2).'</td>';
			echo '<td>'.number_format($fObl_end_m,2).'</td>';
			echo '<td>'.number_format($total_end_m - $fObl_end_m,2).'</td>';
			echo '<td>'.number_format($total_end_m - $fObl_end_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_end_co,2).'</td>';
			echo '<td>'.number_format($total_end_co,2).'</td>';
			echo '<td>'.number_format($fObl_end_c,2).'</td>';
			echo '<td>'.number_format($total_end_co - $fObl_end_c,2).'</td>';
			echo '<td>'.number_format($total_end_co - $fObl_end_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($gtotalFor_end,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_end,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_end,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_end,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_end,2); ?></strong></td>
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
			
			<!------- OTHER SERVICES ------>	
			<tr>
				<td>9000</td>
				<td colspan="6"><strong>OTHER SERVICES</strong></td>
			</tr>

			
			
			<?php 
			$total_o_p = "0";
			$fObl_o_p = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Personal Services","OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_o_p = $row['amount'];
				$code_o_p = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_o_p) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_o_p += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_o_p += $amount_o_p; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_o_m = "0";
			$fObl_o_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Maintenance And Other Operating Expenses","OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_o_m = $row['amount'];
				$code_o_m = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_o_m) as total FROM $rtable WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_o_m += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_o_m += $amount_o_m; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			$total_o_co = "0";
			$fObl_o_c = "0";
			
			$result = $db->prepare("SELECT * FROM $list WHERE type = ? AND sector = ?");
			$result->execute(["Capital Outlay","OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$amount_o_c = $row['amount'];
				$code_o_c = $row['code']; 
				
				
				/* ----- */ 
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_o_c) as total FROM $rtable WHERE 1");
				$obligation->execute();
				
				foreach($obligation as $rObl){
					
					$fObl_o_c += $rObl['total'];
					
				}
				
				
				/*--------- */	
				
				$total_o_co += $amount_o_c; // Appropriation - ALLOTMENTS
				
				
				
			}
			
			//MOOE
			
			$gtotalFor_o = $total_o_m + $total_o_co; // Appropriation or Allotment
			$gtotalObl_o = $fObl_o_m + $fObl_o_c; // Obligation
			$btotalFor_o = $gtotalFor_o - $gtotalObl_o; // balance
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($total_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p,2).'</td>';
			echo '<td>'.number_format($fObl_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p - $fObl_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p - $fObl_o_p,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_o_m,2).'</td>';
			echo '<td>'.number_format($total_o_m,2).'</td>';
			echo '<td>'.number_format($fObl_o_m,2).'</td>';
			echo '<td>'.number_format($total_o_m - $fObl_o_m,2).'</td>';
			echo '<td>'.number_format($total_o_m - $fObl_o_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_o_co,2).'</td>';
			echo '<td>'.number_format($total_o_co,2).'</td>';
			echo '<td>'.number_format($fObl_o_c,2).'</td>';
			echo '<td>'.number_format($total_o_co - $fObl_o_c,2).'</td>';
			echo '<td>'.number_format($total_o_co - $fObl_o_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($gtotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_o,2); ?></strong></td>
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
			
			
			<!------- Total Continuing Appropriations ------>	
			<tr>
				<td>&nbsp;</td>
				<td colspan="6"><strong>Total Continuing Appropriations</strong></td>
			</tr>

			<?php
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($total_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p,2).'</td>';
			echo '<td>'.number_format($fObl_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p - $fObl_o_p,2).'</td>';
			echo '<td>'.number_format($total_o_p - $fObl_o_p,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($total_gps_m + $total_s_m + $total_ed_m + $total_end_m + $total_o_m,2).'</td>';
			echo '<td>'.number_format($total_gps_m + $total_s_m + $total_ed_m + $total_end_m + $total_o_m,2).'</td>';
			echo '<td>'.number_format($fObl_d_m + $fObl_s_m + $fObl_ed_m + $fObl_end_m + $fObl_o_m,2).'</td>';
			echo '<td>'.number_format(($total_gps_m - $fObl_d_m) + ($total_s_m - $fObl_s_m) + ($total_ed_m - $fObl_ed_m) + ($total_end_m - $fObl_end_m) + ($total_o_m - $fObl_o_m),2).'</td>';
			echo '<td>'.number_format(($total_gps_m - $fObl_d_m) + ($total_s_m - $fObl_s_m) + ($total_ed_m - $fObl_ed_m) + ($total_end_m - $fObl_end_m) + ($total_o_m - $fObl_o_m),2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($total_gps_co + $total_s_co + $total_ed_co + $total_end_co + $total_o_co,2).'</td>';
			echo '<td>'.number_format($total_gps_co + $total_s_co + $total_ed_co + $total_end_co + $total_o_co,2).'</td>';
			echo '<td>'.number_format($fObl_d_c + $fObl_s_c + $fObl_ed_c + $fObl_end_c + $fObl_o_c,2).'</td>';
			echo '<td>'.number_format(($total_gps_co - $fObl_d_c) + ($total_s_co - $fObl_s_c) + ($total_ed_co - $fObl_ed_c) + ($total_end_co - $fObl_end_c) + ($total_o_co - $fObl_o_c),2).'</td>';
			echo '<td>'.number_format(($total_gps_co - $fObl_d_c) + ($total_s_co - $fObl_s_c) + ($total_ed_co - $fObl_ed_c) + ($total_end_co - $fObl_end_c) + ($total_o_co - $fObl_o_c),2).'</td>';
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
				<td style="text-align: center;"><strong>GRAND TOTAL</strong></td>	
				<td><strong><?PHP echo number_format($gtotalFor_gps + $gtotalFor_s + $gtotalFor_ed + $gtotalFor_end + $gtotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalFor_gps + $gtotalFor_s + $gtotalFor_ed + $gtotalFor_end + $gtotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($gtotalObl_gps + $gtotalObl_s + $gtotalObl_ed + $gtotalObl_end + $gtotalObl_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_gps + $btotalFor_s + $btotalFor_ed + $btotalFor_end + $btotalFor_o,2); ?></strong></td>
				<td><strong><?PHP echo number_format($btotalFor_gps + $btotalFor_s + $btotalFor_ed + $btotalFor_end + $btotalFor_o,2); ?></strong></td>
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

			
		</table>

	</div>
</div>	



</body>
</html>