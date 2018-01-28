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
			<p class="text-center">Republic of the Philippine<br><strong>PROVINCE OF LEYTE</strong><br>Local Government Unit-Tolosa, Leyte<br><br><strong>STATUS OF APPROPRIATIONS, ALLOTMENTS AND OBLIGATIONS <br>GENERAL FUND</strong><br>As of <label>December</label> <?PHP echo $_SESSION['budget'] ?></p>
			
			
			
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
			
			<!------- CURRENT YEAR APPROPRIATIONS / SEF ------>	
			<tr>
				<td>II-</td>
				<td colspan="6"><strong>CONTINUING APPROPRIATIONS</strong></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td colspan="6">&nbsp;</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td colspan="6">ELEMENTARY SCHOOLS</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td colspan="6">&nbsp;</td>
			</tr>
			
			<!------- ELEMENTARY SCHOOLS ------>	
			<tr>
				<td>1000</td>
				<td colspan="6"><strong>GENERAL PUBLIC SERVICES</strong></td>
			</tr>

			
			<!---------------------- Personal Services -------------------->		
			<?php 
			$list_e = "cont_list_".$_SESSION['budget'];
			$table_e = "cont".$_SESSION['budget'];
			$rtable_e = "rcont".$_SESSION['budget'];
			$r_appr_e = "0";
			$fObl_e = "0";
			
			$result = $db->prepare("SELECT * FROM $list_e WHERE type = ? AND others = ?");
			$result->execute(["Personal Services","ELEMENTARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_e = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_e as total FROM $table_e WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_e += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_e) as total FROM $rtable_e WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_e += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}
			
			
			
			/*---------------------- Maintenance --------------------*/
			
			$r_appr_m = "0";
			$fObl_m = "0";
			
			$result = $db->prepare("SELECT * FROM $list_e WHERE type = ? AND others = ?");
			$result->execute(["Maintenance And Other Operating Expenses","ELEMENTARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_m = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_m as total FROM $table_e WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_m += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_m) as total FROM $rtable_e WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_m += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}
			
			/*---------------------- Capital Outlay --------------------*/
			
			$r_appr_c = "0";
			$fObl_c = "0";
			
			$result = $db->prepare("SELECT * FROM $list_e WHERE type = ? AND others = ?");
			$result->execute(["Capital Outlay","ELEMENTARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_c = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_c as total FROM $table_e WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_c += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_c) as total FROM $rtable_e WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_c += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($r_appr_e,2).'</td>';
			echo '<td>'.number_format($r_appr_e,2).'</td>';
			echo '<td>'.number_format($fObl_e,2).'</td>';
			echo '<td>'.number_format($r_appr_e - $fObl_e,2).'</td>';
			echo '<td>'.number_format($r_appr_e - $fObl_e,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($r_appr_m,2).'</td>';
			echo '<td>'.number_format($r_appr_m,2).'</td>';
			echo '<td>'.number_format($fObl_m,2).'</td>';
			echo '<td>'.number_format($r_appr_m - $fObl_m,2).'</td>';
			echo '<td>'.number_format($r_appr_m - $fObl_m,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($r_appr_c,2).'</td>';
			echo '<td>'.number_format($r_appr_c,2).'</td>';
			echo '<td>'.number_format($fObl_c,2).'</td>';
			echo '<td>'.number_format($r_appr_c - $fObl_c,2).'</td>';
			echo '<td>'.number_format($r_appr_c - $fObl_c,2).'</td>';
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
				<td><strong><?PHP echo number_format($r_appr_e + $r_appr_m + $r_appr_c,2); ?></strong></td>
				<td><strong><?PHP echo number_format($r_appr_e + $r_appr_m + $r_appr_c,2); ?></strong></td>
				<td><strong><?PHP echo number_format($fObl_e + $fObl_m + $fObl_c,2); ?></strong></td>
				<td><strong><?PHP echo number_format(($r_appr_e - $fObl_e) + ($r_appr_m - $fObl_m) + ($r_appr_c - $fObl_c),2); ?></strong></td>
				<td><strong><?PHP echo number_format(($r_appr_e - $fObl_e) + ($r_appr_m - $fObl_m) + ($r_appr_c - $fObl_c),2); ?></strong></td>
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
			
			
			
			
			<!------- SECONDARY SCHOOLS ------>
			
			<tr>
				<td>&nbsp;</td>
				<td colspan="6">&nbsp;</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td colspan="6">SECONDARY SCHOOLS</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td colspan="6">&nbsp;</td>
			</tr>
			
			<!------- SECONDARY SCHOOLS ------>	
			<tr>
				<td>4000</td>
				<td colspan="6"><strong>GENERAL PUBLIC SERVICES</strong></td>
			</tr>

			<!---------------------- Personal Services -------------------->		
			<?php 
			$list_s = "cont_list_".$_SESSION['budget'];
			$table_s = "cont".$_SESSION['budget'];
			$rtable_s = "rcont".$_SESSION['budget'];
			$r_appr_s = "0";
			$fObl_s = "0";
			
			$result = $db->prepare("SELECT * FROM $list_e WHERE type = ? AND others = ?");
			$result->execute(["Personal Services","SECONDARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_s = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_s as total FROM $table_s WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_s += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_s) as total FROM $rtable_s WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_s += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}
			
			
			
			/*---------------------- Maintenance --------------------*/
			
			$r_appr_m_s = "0";
			$fObl_m_s = "0";
			
			$result = $db->prepare("SELECT * FROM $list_s WHERE type = ? AND others = ?");
			$result->execute(["Maintenance And Other Operating Expenses","SECONDARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_m_s = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_m_s as total FROM $table_s WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_m_s += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_m_s) as total FROM $rtable_s WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_m_s += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}
			
			/*---------------------- Capital Outlay --------------------*/
			
			$r_appr_c_s = "0";
			$fObl_c_s = "0";
			
			$result = $db->prepare("SELECT * FROM $list_s WHERE type = ? AND others = ?");
			$result->execute(["Capital Outlay","SECONDARY SCHOOLS"]);
			
			foreach($result as $row){
				/**** Code ***/
				$code_c_s = $row['code'];
				
				/* ----- */ 
				
				
				$get_appr = $db->prepare("SELECT $code_c_s as total FROM $table_s WHERE year =?");
				$get_appr->execute([$_SESSION['budget']]);
				
				foreach($get_appr as $total_appr){
					
					
					$r_appr_c_s += $total_appr['total'];	
					
					
				}
				
				
				
				
				
				
				/*----- Obligations ----- */
				$obligation = $db->prepare("SELECT sum($code_c_s) as total FROM $rtable_s WHERE yearm = ?");
				$obligation->execute([$_SESSION['budget']]);
				
				foreach($obligation as $rObl){
					
					$fObl_c_s += $rObl['total'];
					
				}
				
				
				/*----- Balances ----- */
				
				
				
				
			}			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($r_appr_s,2).'</td>';
			echo '<td>'.number_format($r_appr_s,2).'</td>';
			echo '<td>'.number_format($fObl_s,2).'</td>';
			echo '<td>'.number_format($r_appr_s - $fObl_s,2).'</td>';
			echo '<td>'.number_format($r_appr_s - $fObl_s,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($r_appr_m_s,2).'</td>';
			echo '<td>'.number_format($r_appr_m_s,2).'</td>';
			echo '<td>'.number_format($fObl_m_s,2).'</td>';
			echo '<td>'.number_format($r_appr_m_s - $fObl_m_s,2).'</td>';
			echo '<td>'.number_format($r_appr_m_s - $fObl_m_s,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($r_appr_c_s,2).'</td>';
			echo '<td>'.number_format($r_appr_c_s,2).'</td>';
			echo '<td>'.number_format($fObl_c_s,2).'</td>';
			echo '<td>'.number_format($r_appr_c_s - $fObl_c_s,2).'</td>';
			echo '<td>'.number_format($r_appr_c_s - $fObl_c_s,2).'</td>';
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
				<td><strong><?PHP echo number_format($r_appr_s + $r_appr_m_s + $r_appr_c_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($r_appr_s + $r_appr_m_s + $r_appr_c_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format($fObl_s+ $fObl_m_s + $fObl_c_s,2); ?></strong></td>
				<td><strong><?PHP echo number_format(($r_appr_s - $fObl_s) + ($r_appr_m_s - $fObl_m_s) + ($r_appr_c_s - $fObl_c_s),2); ?></strong></td>
				<td><strong><?PHP echo number_format(($r_appr_s - $fObl_s) + ($r_appr_m_s - $fObl_m_s) + ($r_appr_c_s - $fObl_c_s),2); ?></strong></td>
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
			
			<!------- Total Current Year Appropriations ------>	
			<tr>
				<td>&nbsp;</td>
				<td colspan="6"><strong>Total Current Year Appropriations</strong></td>
			</tr>

			
			
			<?php 
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($r_appr_e + $r_appr_s,2).'</td>';
			echo '<td>'.number_format($r_appr_e + $r_appr_s,2).'</td>';
			echo '<td>'.number_format($fObl_e + $fObl_s,2).'</td>';
			echo '<td>'.number_format(($r_appr_e - $fObl_e) + ($r_appr_s - $fObl_s),2).'</td>';
			echo '<td>'.number_format(($r_appr_e - $fObl_e) + ($r_appr_s - $fObl_s),2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($r_appr_m + $r_appr_m_s,2).'</td>';
			echo '<td>'.number_format($r_appr_m + $r_appr_m_s,2).'</td>';
			echo '<td>'.number_format($fObl_m + $fObl_m_s,2).'</td>';
			echo '<td>'.number_format(($r_appr_m - $fObl_m) + ($r_appr_m_s - $fObl_m_s),2).'</td>';
			echo '<td>'.number_format(($r_appr_m - $fObl_m) + ($r_appr_m_s - $fObl_m_s),2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($r_appr_c + $r_appr_c_s,2).'</td>';
			echo '<td>'.number_format($r_appr_c + $r_appr_c_s,2).'</td>';
			echo '<td>'.number_format($fObl_c + $fObl_c_s,2).'</td>';
			echo '<td>'.number_format(($r_appr_c - $fObl_c) + ($r_appr_c_s - $fObl_c_s),2).'</td>';
			echo '<td>'.number_format(($r_appr_c - $fObl_c) + ($r_appr_c_s - $fObl_c_s),2).'</td>';
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
				<td><strong><?PHP echo number_format(($r_appr_s + $r_appr_m_s + $r_appr_c_s) + ($r_appr_e + $r_appr_m + $r_appr_c),2); ?></strong></td>
				<td><strong><?PHP echo number_format(($r_appr_s + $r_appr_m_s + $r_appr_c_s) + ($r_appr_e + $r_appr_m + $r_appr_c),2); ?></strong></td>
				<td><strong><?PHP echo number_format(($fObl_s+ $fObl_m_s + $fObl_c_s) + ($fObl_e + $fObl_m + $fObl_c),2); ?></strong></td>
				<td><strong><?PHP echo number_format((($r_appr_s - $fObl_s) + ($r_appr_m_s - $fObl_m_s) + ($r_appr_c_s - $fObl_c_s)) + (($r_appr_e - $fObl_e) + ($r_appr_m - $fObl_m) + ($r_appr_c - $fObl_c)),2); ?></strong></td>
				<td><strong><?PHP echo number_format((($r_appr_s - $fObl_s) + ($r_appr_m_s - $fObl_m_s) + ($r_appr_c_s - $fObl_c_s)) + (($r_appr_e - $fObl_e) + ($r_appr_m - $fObl_m) + ($r_appr_c - $fObl_c)),2); ?></strong></td>
			</tr>

			
			
			
		</table>

	</div>
</div>	





</body>
</html>