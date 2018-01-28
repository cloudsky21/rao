<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
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
		<a class="navbar-brand" href="home.php">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="home.php">Home
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_year.php">Budget Year</a></li>
          <li><a href="aipMMO.php">AIP</a></li>
          <li><a href="heads.php">Department Heads List</a></li>
		  <li><a href="export_all_ps.php">RAO <?PHP echo $_SESSION['budget']; ?> </a></li>
	      
        </ul>
      </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registry Allotment and Obligations (RAO)
		  <span class="caret"></span></a>	  
	    <ul class="dropdown-menu">
			<li><a href="personal_services_mmo_all.php">Personal Services</a></li>
			<li><a href="mooe_mmo_all.php">Maint. And Other Operating Expenses</a></li>
			<li><a href="co_mmo_all.php">Capital Outlay</a></li>
			<li><a href="rao20.php">20&#37; EDF</a></li>
			<li><a href="none-office.php">Non - Office</a></li>
			<li><a href="gad.php">5% Gender and Development (GAD)</a></li>
			<li><a href="continuing_all.php">Continuing Program</a></li>
			<li><a href="sef.php">Special Eduction Fund (SEF)</a></li>
			<li><a href="mdr.php">5% Municipal Disaster Risk</a></li>
			<li><a href="pwds.php">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="1iralcpc.php">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		<li><a href="saao.php">SAAO</a></li>
		<li><a href="gen_january.php">SAAOB</a></li>
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#" class="btn" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#lockModal"><span class="glyphicon glyphicon-lock"></span></a></li>
		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>&nbsp;<span class="caret"></span></a>
			<ul class="dropdown-menu">
				
				<li><a href="saao.php">Current Year Appropriation</a></li>
				<li><a href="page2.php">Continuing Appropriation</a></li>
				<li><a href="page3.php">SEF</a></li>
				<li><a href="page4.php">SEF Continuing</a></li>
			</ul>
		</li>
		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#" style="color:gray; pointer-events: none; border-bottom: 1px solid #ddd" tabindex="-1"><?PHP echo $_SESSION['isLoginName']; ?></a></li>
				<li><a href="accounts.php">Accounts</a></li>
				<li><a href="log.php">Audit Log</a></li>
				<li><a href="logmeOut.php">Log Out</a></li>
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
	
	<tr>
		<td>I-</td>
		<td colspan="6"><strong>CURRENT YEAR APPROPRIATIONS</strong></td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
		
	<tr>
		<td>1000</td>
		<td colspan="6"><strong>GENERAL PUBLIC SERVICES</td>
		</tr>
	
		
		<?php 
		/********************* Mayor's Office ******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MMO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_MMO = $row['total_ps'];
				
				
				$appr2_MMO = $row['total_mooe'];
				
				
				$appr3_MMO = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmmo WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_MMO = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mmomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_MMO = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mmoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_MMO = $rObl['total'];
					
					}
				
			}
			
			
		/********************* Sangguniang Bayan Office ******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["SB",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_SB = $row['total_ps'];
				
				
				$appr2_SB = $row['total_mooe'];
				
				
				$appr3_SB = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM pssb WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_SB = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM sbmooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_SB = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM sbco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_SB = $rObl['total'];
					
					}
				
			}	
		
		/********************* Municipal Planning and Development Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MPDO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mpdo = $row['total_ps'];
				
				
				$appr2_mpdo = $row['total_mooe'];
				
				
				$appr3_mpdo = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmpdo WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mpdo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mpdomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mpdo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mpdoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mpdo = $rObl['total'];
					
					}
					
					
				
				
				
			}	
			
		/********************* General Services Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["General Services",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_gs = $row['total_ps'];
				
				
				$appr2_gs = $row['total_mooe'];
				
				
				$appr3_gs = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psgs WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_gs = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM gsmooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_gs = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM gsco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_gs = $rObl['total'];
					
					}
					
					
				
				
				
			}
			
			
		/********************* Municipal Budget Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MBO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_mbo = $row['total_ps'];
				
				
				$appr2_mbo = $row['total_mooe'];
				
				
				$appr3_mbo = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmbo WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mbo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mbo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mboco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mbo = $rObl['total'];
					
					}
					
					
				
				
				
			}	
		
		/********************* Municipal Accounting Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MACCO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_macco = $row['total_ps'];
				
				
				$appr2_macco = $row['total_mooe'];
				
				
				$appr3_macco = $row['total_co'];
				
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmacco WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_macco = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maccomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_macco = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maccoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_macco = $rObl['total'];
					
					}
					
					
				
				
				
			}	

		/********************* Municipal Treasurers Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MTO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_mto = $row['total_ps'];
				
				
				$appr2_mto = $row['total_mooe'];
				
				
				$appr3_mto = $row['total_co'];
			
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmto WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mto = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mtomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mto = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mtoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mto = $rObl['total'];
					
					}
				
			}				
			
			/********************* Municipal Assessors Office ******************/
		
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MASSO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$appr_masso = $row['total_ps'];
				
				
				$appr2_masso = $row['total_mooe'];
				
				
				$appr3_masso = $row['total_co'];
			
				
				
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmasso WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_masso = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM massomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_masso = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM massoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_masso = $rObl['total'];
					
					}
				
			}
			
			
		/********************* 20% EDF (MOOE)******************/
		
		$tablelist = "20_list_".$_SESSION['budget'];
		$tableaip_20 = "20edf".$_SESSION['budget'];
		$tabler20 = "r20edf".$_SESSION['budget'];
		$total_20_appr_gps_m ="0";
		$fObl_20_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist WHERE sector = ? AND type = ?");
		$result->execute(["GENERAL PUBLIC SERVICES","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20 = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20` as total FROM $tableaip_20 WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_gps_m += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20) as total FROM $tabler20 WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_m += $rObl['total'];
					
					}
					
				
			}	
			
			/********************* 20% EDF (CO)******************/
		
		$tablelist = "20_list_".$_SESSION['budget'];
		$tableaip_20 = "20edf".$_SESSION['budget'];
		$tabler20 = "r20edf".$_SESSION['budget'];
		$total_20_appr_gps_c ="0";
		$fObl_20_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist WHERE sector = ? AND type = ?");
		$result->execute(["GENERAL PUBLIC SERVICES","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20 = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20` as total FROM $tableaip_20 WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_gps_c += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20) as total FROM $tabler20 WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_c += $rObl['total'];
					
					}
					
				
			}
			
				/********************* NONE - OFFICE (MOOE)******************/
		
		$tablelist = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_gps_m ="0";
		$fObl_noneoffice_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist WHERE sector = ? AND type = ?");
		$result->execute(["GENERAL PUBLIC SERVICES","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice` as total FROM $tableaip_noneoffice WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_gps_m += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice) as total FROM $tablernoneoffice WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_m += $rObl['total'];
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (CO)******************/
		
		$tablelist = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_gps_c ="0";
		$fObl_noneoffice_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist WHERE sector = ? AND type = ?");
		$result->execute(["GENERAL PUBLIC SERVICES","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice` as total FROM $tableaip_noneoffice WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_gps_c += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice) as total FROM $tablernoneoffice WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_c += $rObl['total'];
					
					}
					
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			/**** ALL PERSONAL SERVICES FOR GENERAL PUBLIC SERVICES****/
			
			$allappr_gps_ps = $appr_MMO + $appr_SB + $appr_mpdo + $appr_gs + $appr_mbo + $appr_macco + $appr_mto + $appr_masso;
			$allappr_gps_obl_ps = $fObl_MMO + $fObl_SB + $fObl_mpdo + $fObl_gs + $fObl_mbo + $fObl_macco + $fObl_mto + $fObl_masso;
			$allbalance_appr_ps = $allappr_gps_ps - $allappr_gps_obl_ps;
			
			/**********************************************************/
			
			
			/**** ALL MAINTENANCE AND OTHER OPERATING EXPENSES FOR GENERAL PUBLIC SERVICES****/
			
			$allappr_gps_mooe = $appr2_MMO + $appr2_SB + $appr2_mpdo + $appr2_gs + $appr2_mbo + $appr2_macco + $appr2_mto + $appr2_masso + $total_20_appr_gps_m + $total_noneoffice_appr_gps_m;
			$allappr_gps_obl_mooe = $fObl2_MMO + $fObl2_SB + $fObl2_mpdo + $fObl2_gs + $fObl2_mbo + $fObl2_macco + $fObl2_mto + $fObl2_masso + $fObl_20_m + $fObl_noneoffice_m;
			$allbalance_appr_mooe = $allappr_gps_mooe - $allappr_gps_obl_mooe;
			
			/**********************************************************/
			
			/**** ALL CAPITAL OUTLAY FOR GENERAL PUBLIC SERVICES****/
			
			$allappr_gps_co = $appr3_MMO + $appr3_SB + $appr3_mpdo + $appr3_gs + $appr3_mbo + $appr3_macco + $appr3_mto + $appr3_masso + $total_20_appr_gps_c + $total_noneoffice_appr_gps_c;
			$allappr_gps_obl_co = $fObl3_MMO + $fObl3_SB + $fObl3_mpdo + $fObl3_gs + $fObl3_mbo + $fObl3_macco + $fObl3_mto + $fObl3_masso + $fObl_20_c + $fObl_noneoffice_c;
			$allbalance_appr_co = $allappr_gps_co - $allappr_gps_obl_co;
			
			/**********************************************************/
			
			
			/**** TOTAL FOR GENERAL PUBLIC SERVICES****/
			
			$allappr_gps_total = $allappr_gps_ps + $allappr_gps_mooe + $allappr_gps_co;
			$allappr_gps_obl_total = $allappr_gps_obl_ps + $allappr_gps_obl_mooe + $allappr_gps_obl_co;
			$allbalance_appr_total = $allbalance_appr_ps + $allbalance_appr_mooe + $allbalance_appr_co;
			
			/**********************************************************/
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_gps_ps,2).'</td>';
			echo '<td>'.number_format($allappr_gps_ps,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_gps_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_gps_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_gps_co,2).'</td>';
			echo '<td>'.number_format($allappr_gps_co,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_gps_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_gps_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_gps_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_appr_total,2); ?></strong></td>
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
	
	
	
	
	
	
	
	
	
	
<!------- Social Services ------>	
	<tr>
		<td>4000</td>
		<td colspan="6"><strong>SOCIAL SERVICES</strong></td>
	</tr>

	
		
		<?php 
		
		/********************* Municipal Health Office******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MHO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mho = $row['total_ps'];
				
				
				$appr2_mho = $row['total_mooe'];
				
				
				$appr3_mho = $row['total_co'];
				
				
			
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmho WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mho = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mhomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mho = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mhoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mho = $rObl['total'];
					
					}

			}
			
			
			
			/********************* Municipal Social Welfare Development Office******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MSWD",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mswd = $row['total_ps'];
				
				
				$appr2_mswd = $row['total_mooe'];
				
				
				$appr3_mswd = $row['total_co'];
				
				
			
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmswd WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mswd = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mswdmooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mswd = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mswdco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mswd = $rObl['total'];
					
					}

			}
			
			/********************* 20% EDF (MOOE)******************/
		
		$tablelist_m_ss = "20_list_".$_SESSION['budget'];
		$tableaip_20_m_ss = "20edf".$_SESSION['budget'];
		$tabler20_m_ss = "r20edf".$_SESSION['budget'];
		$total_20_appr_ss_m ="0";
		$fObl_20_ss_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_m_ss WHERE sector = ? AND type = ?");
		$result->execute(["SOCIAL SERVICES","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_ss_m = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_ss_m` as total FROM $tableaip_20_m_ss WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_ss_m += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_ss_m) as total FROM $tabler20_m_ss WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_ss_m += $rObl['total'];
					
					}
					
				
			}	
			
			/********************* 20% EDF (CO)******************/
		
		$tablelist_ss_c = "20_list_".$_SESSION['budget'];
		$tableaip_20_ss_c = "20edf".$_SESSION['budget'];
		$tabler20_ss_c = "r20edf".$_SESSION['budget'];
		$total_20_appr_ss_c ="0";
		$fObl_20_ss_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_ss_c WHERE sector = ? AND type = ?");
		$result->execute(["SOCIAL SERVICES","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_ss_c = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_ss_c` as total FROM $tableaip_20_ss_c WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_ss_c += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_ss_c) as total FROM $tabler20_ss_c WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_ss_c += $rObl['total'];
					
					}
					
				
			}
			
			/********************* NONE - OFFICE (PS)******************/
		
		$tablelist_noneoffice_ps_ss = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_ps_ss = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_ps_ss = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ss_p ="0";
		$fObl_noneoffice_ss_p = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_ps_ss WHERE sector = ? AND type = ?");
		$result->execute(["SOCIAL SERVICES","Personal Services"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_ps_ss = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_ps_ss` as total FROM $tableaip_noneoffice_ps_ss WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ss_p += $grow['total']; //<-----
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_ps_ss) as total FROM $tablernoneoffice_ps_ss WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ss_p += $rObl['total']; //<-----
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (MOOE)******************/
		
		$tablelist_noneoffice_m_ss = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_m_ss = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_m_ss = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ss_m ="0";
		$fObl_noneoffice_ss_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_m_ss WHERE sector = ? AND type = ?");
		$result->execute(["SOCIAL SERVICES","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_ss_m = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_ss_m` as total FROM $tableaip_noneoffice_m_ss WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ss_m += $grow['total']; // <--------- 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_ss_m) as total FROM $tablernoneoffice_m_ss WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ss_m += $rObl['total']; //<------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (CO)******************/
		
		$tablelist_noneoffice_c_ss = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_c_ss = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_c_ss = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ss_c ="0";
		$fObl_noneoffice_ss_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_c_ss WHERE sector = ? AND type = ?");
		$result->execute(["SOCIAL SERVICES","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_c_ss = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_c_ss` as total FROM $tableaip_noneoffice_c_ss WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ss_c += $grow['total']; 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_c_ss) as total FROM $tablernoneoffice_c_ss WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ss_c += $rObl['total'];
					
					}
					
				
			}			
			
			
			
			
			
			/**** ALL PERSONAL SERVICES FOR SOCIAL SERVICES****/
			
			$allappr_ss_ps = $appr_mho + $appr_mswd + $total_noneoffice_appr_ss_p; // appropriation
			$allappr_ss_obl_ps = $fObl_mho + $fObl_mswd + $fObl_noneoffice_ss_p;  // obligations
			$allbalance_ss_appr_ps = $allappr_ss_ps - $allappr_ss_obl_ps;         // allotments
			
			/**********************************************************/
			
			
			/**** ALL MAINTENANCE AND OTHER OPERATING EXPENSES FOR SOCIAL SERVICES****/
			
			$allappr_ss_mooe = $appr2_mho + $appr2_mswd + $total_20_appr_ss_m + $total_noneoffice_appr_ss_m;
			$allappr_ss_obl_mooe = $fObl2_mho + $fObl2_mswd + $fObl_20_ss_m + $fObl_noneoffice_ss_m;
			$allbalance_ss_appr_mooe = $allappr_ss_mooe - $allappr_ss_obl_mooe;
			
			/**********************************************************/
			
			/**** ALL CAPITAL OUTLAY FOR SOCIAL SERVICES****/
			
			$allappr_ss_co = $appr3_mho + $appr3_mswd + $total_20_appr_ss_c + $total_noneoffice_appr_ss_c;
			$allappr_ss_obl_co = $fObl3_mho + $fObl3_mswd + $fObl_20_ss_c + $fObl_noneoffice_ss_c;
			$allbalance_ss_appr_co = $allappr_ss_co - $allappr_ss_obl_co;
			
			/**********************************************************/
			
			
			/**** TOTAL FOR SOCIAL SERVICES****/
			
			$allappr_ss_total = $allappr_ss_ps + $allappr_ss_mooe + $allappr_ss_co;
			$allappr_ss_obl_total = $allappr_ss_obl_ps + $allappr_ss_obl_mooe;
			$allbalance_ss_appr_total = $allbalance_ss_appr_ps + $allbalance_ss_appr_mooe + $allbalance_ss_appr_co;
			
			/**********************************************************/
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_ss_ps,2).'</td>';
			echo '<td>'.number_format($allappr_ss_ps,2).'</td>';
			echo '<td>'.number_format($allappr_ss_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_ss_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_ss_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_ss_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_ss_co,2).'</td>';
			echo '<td>'.number_format($allappr_ss_co,2).'</td>';
			echo '<td>'.number_format($allappr_ss_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_ss_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_ss_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_ss_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_ss_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_ss_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_ss_appr_total,2); ?></strong></td>
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

	
	
<!------- ECONOMIC DEVELOPMENT ------>	
	<tr>
		<td>8000</td>
		<td colspan="6"><strong>ECONOMIC DEVELOPMENT</strong></td>
	</tr>

	
		
		<?php 
		
		/********************* Municipal Agriculturist Office******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MAO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mao = $row['total_ps'];
				
				
				$appr2_mao = $row['total_mooe'];
				
				
				$appr3_mao = $row['total_co'];
				
				
			
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmao WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mao = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mao = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM maoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mao = $rObl['total'];
					
					}

			}
			
			/********************* Municipal Engineering Office******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MEO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_meo = $row['total_ps'];
				
				
				$appr2_meo = $row['total_mooe'];
				
				
				$appr3_meo = $row['total_co'];
				
				
			
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmeo WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_meo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM meomooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_meo = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM meoco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_meo = $rObl['total'];
					
					}

			}
			
			/********************* Municipal Engineering Office******************/
		$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MBE",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mbe = $row['total_ps'];
				
				
				$appr2_mbe = $row['total_mooe'];
				
				
				$appr3_mbe = $row['total_co'];
				
				
			
				
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum(total) as total FROM psmbe WHERE year_transact = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mbe = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbemooe WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl2_mbe = $rObl['total'];
					
					}
					
					$obligation = $db->prepare("SELECT sum(total) as total FROM mbeco WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl3_mbe = $rObl['total'];
					
					}

			}
			
			/********************* 20% EDF (MOOE)******************/
		
		$tablelist_m_ed = "20_list_".$_SESSION['budget'];
		$tableaip_20_m_ed = "20edf".$_SESSION['budget'];
		$tabler20_m_ed = "r20edf".$_SESSION['budget'];
		$total_20_appr_ed_m ="0";
		$fObl_20_ed_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_m_ed WHERE sector = ? AND type = ?");
		$result->execute(["ECONOMIC DEVELOPMENT","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_m_ed = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_m_ed` as total FROM $tableaip_20_m_ed WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_ed_m += $grow['total'];  // <-------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_m_ed) as total FROM $tabler20_m_ed WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_ed_m += $rObl['total'];  // <-------------
					
					}
					
				
			}	
			
			/********************* 20% EDF (CO)******************/
		
		$tablelist_20_c_ed = "20_list_".$_SESSION['budget'];
		$tableaip_20_c_ed = "20edf".$_SESSION['budget'];
		$tabler20_c_ed = "r20edf".$_SESSION['budget'];
		$total_20_appr_ed_c ="0";
		$fObl_20_ed_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_20_c_ed WHERE sector = ? AND type = ?");
		$result->execute(["ECONOMIC DEVELOPMENT","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_c_ed = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_c_ed` as total FROM $tableaip_20_c_ed WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_ed_c += $grow['total']; // <-------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_c_ed) as total FROM $tabler20_c_ed WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_ed_c += $rObl['total']; // <-------
					
					}
					
				
			}
			
			/********************* NONE - OFFICE (PS)******************/
		
		$tablelist_noneoffice_ps_ed = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_ps_ed = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_ed = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ed_p ="0";
		$fObl_noneoffice_ed_p = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_ps_ed WHERE sector = ? AND type = ?");
		$result->execute(["ECONOMIC DEVELOPMENT","Personal Services"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_ps_ed = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_ps_ed` as total FROM $tableaip_noneoffice_ps_ed WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ed_p += $grow['total']; // <------------- 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_ps_ed) as total FROM $tablernoneoffice_ed WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ed_p += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (MOOE)******************/
		
		$tablelist_noneoffice_m_ed = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_m_ed = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_m_ed = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ed_m ="0";
		$fObl_noneoffice_ed_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_m_ed WHERE sector = ? AND type = ?");
		$result->execute(["ECONOMIC DEVELOPMENT","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_m_ed = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_m_ed` as total FROM $tableaip_noneoffice_m_ed WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ed_m += $grow['total']; // <---------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_m_ed) as total FROM $tablernoneoffice_m_ed WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ed_m += $rObl['total']; // <---------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (CO)******************/
		
		$tablelist_noneoffice_c_ed = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_c_ed = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_c_ed = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_ed_c ="0";
		$fObl_noneoffice_ed_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_c_ed WHERE sector = ? AND type = ?");
		$result->execute(["ECONOMIC DEVELOPMENT","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_c_ed = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_c_ed` as total FROM $tableaip_noneoffice_c_ed WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_ed_c += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_c_ed) as total FROM $tablernoneoffice_c_ed WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_ed_c += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
			
			/**** ALL PERSONAL SERVICES FOR ECONOMIC DEVELOPMENT****/
			
			$allappr_ed_ps = $appr_mao + $appr_meo + $appr_mbe + $total_noneoffice_appr_ed_p;
			$allappr_ed_obl_ps = $fObl_mao + $fObl_meo + $fObl_mbe + $fObl_noneoffice_ed_p;
			$allbalance_ed_appr_ps = $allappr_ed_ps - $allappr_ed_obl_ps;
			
			/**********************************************************/
			
			
			/**** ALL MAINTENANCE AND OTHER OPERATING EXPENSES FOR ECONOMIC DEVELOPMENT****/
			
			$allappr_ed_mooe = $appr2_mao + $appr2_meo + $appr2_mbe + $total_20_appr_ed_m + $total_noneoffice_appr_ed_m;
			$allappr_ed_obl_mooe = $fObl2_mao + $fObl2_meo + $fObl2_mbe + $fObl_20_ed_m + $fObl_noneoffice_ed_m;
			$allbalance_ed_appr_mooe = $allappr_ed_mooe - $allappr_ed_obl_mooe;
			
			/**********************************************************/
			
			/**** ALL CAPITAL OUTLAY FOR ECONOMIC DEVELOPMENT****/
			
			$allappr_ed_co = $appr3_mao + $appr3_meo + $appr3_mbe + $total_20_appr_ed_c + $total_noneoffice_appr_ed_c;
			$allappr_ed_obl_co = $fObl3_mao + $fObl3_meo + + $fObl3_mbe + $fObl_20_ed_c + $fObl_noneoffice_ed_c;
			$allbalance_ed_appr_co = $allappr_ed_co - $allappr_ed_obl_co;
			
			/**********************************************************/
			
			
			/**** TOTAL FOR ECONOMIC DEVELOPMENT****/
			
			$allappr_ed_total = $allappr_ed_ps + $allappr_ed_mooe + $allappr_ed_co;
			$allappr_ed_obl_total = $allappr_ed_obl_ps + $allappr_ed_obl_mooe;
			$allbalance_ed_appr_total = $allbalance_ed_appr_ps + $allbalance_ed_appr_mooe + $allbalance_ed_appr_co;
			
			/**********************************************************/
			
			
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_ed_ps,2).'</td>';
			echo '<td>'.number_format($allappr_ed_ps,2).'</td>';
			echo '<td>'.number_format($allappr_ed_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_ed_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_ed_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_ed_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_ed_co,2).'</td>';
			echo '<td>'.number_format($allappr_ed_co,2).'</td>';
			echo '<td>'.number_format($allappr_ed_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_ed_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_ed_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_ed_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_ed_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_ed_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_ed_appr_total,2); ?></strong></td>
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


<!------- ENVIRONMENT DEVELOPMENT  ------>	
	<tr>
		<td>&nbsp;</td>
		<td colspan="6"><strong>ENVIRONMENT DEVELOPMENT</strong></td>
	</tr>

	
		
		<?php 
		
		/********************* 20% EDF (MOOE)******************/
		
		$tablelist_m_end = "20_list_".$_SESSION['budget'];
		$tableaip_20_m_end = "20edf".$_SESSION['budget'];
		$tabler20_m_end = "r20edf".$_SESSION['budget'];
		$total_20_appr_end_m ="0";
		$fObl_20_end_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_m_end WHERE sector = ? AND type = ?");
		$result->execute(["ENVIRONMENT DEVELOPMENT","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_m_end = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_m_end` as total FROM $tableaip_20_m_end WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_end_m += $grow['total'];  // <-------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_m_end) as total FROM $tabler20_m_end WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_end_m += $rObl['total'];  // <-------------
					
					}
					
				
			}	
			
			/********************* 20% EDF (CO)******************/
		
		$tablelist_20_c_end = "20_list_".$_SESSION['budget'];
		$tableaip_20_c_end = "20edf".$_SESSION['budget'];
		$tabler20_c_end = "r20edf".$_SESSION['budget'];
		$total_20_appr_end_c ="0";
		$fObl_20_end_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_20_c_end WHERE sector = ? AND type = ?");
		$result->execute(["ENVIRONMENT DEVELOPMENT","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_20_c_end = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_20_c_end` as total FROM $tableaip_20_c_end WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_20_appr_end_c += $grow['total']; // <-------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_20_c_end) as total FROM $tabler20_c_end WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_20_end_c += $rObl['total']; // <-------
					
					}
					
				
			}
			
			/********************* NONE - OFFICE (PS)******************/
		
		$tablelist_noneoffice_ps_end = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_ps_end = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_end = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_end_p ="0";
		$fObl_noneoffice_end_p = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_ps_end WHERE sector = ? AND type = ?");
		$result->execute(["ENVIRONMENT DEVELOPMENT","Personal Services"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_ps_end = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_ps_end` as total FROM $tableaip_noneoffice_ps_end WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_end_p += $grow['total']; // <------------- 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_ps_end) as total FROM $tablernoneoffice_end WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_end_p += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (MOOE)******************/
		
		$tablelist_noneoffice_m_end = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_m_end = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_m_end = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_end_m ="0";
		$fObl_noneoffice_end_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_m_end WHERE sector = ? AND type = ?");
		$result->execute(["ENVIRONMENT DEVELOPMENT","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_m_end = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_m_end` as total FROM $tableaip_noneoffice_m_end WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_end_m += $grow['total']; // <---------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_m_end) as total FROM $tablernoneoffice_m_end WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_end_m += $rObl['total']; // <---------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (CO)******************/
		
		$tablelist_noneoffice_c_end = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_c_end = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_c_end = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_end_c ="0";
		$fObl_noneoffice_end_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_c_end WHERE sector = ? AND type = ?");
		$result->execute(["ENVIRONMENT DEVELOPMENT","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_c_end = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_c_end` as total FROM $tableaip_noneoffice_c_end WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_end_c += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_c_end) as total FROM $tablernoneoffice_c_end WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_end_c += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
			
			/**** ALL PERSONAL SERVICES FOR ENVIRONMENT DEVELOPMENT****/
			
			$allappr_end_ps = $total_noneoffice_appr_end_p;
			$allappr_end_obl_ps = $fObl_noneoffice_end_p;
			$allbalance_end_appr_ps = $allappr_end_ps - $allappr_end_obl_ps;
			
			/**********************************************************/
			
			
			/**** ALL MAINTENANCE AND OTHER OPERATING EXPENSES FOR ENVIRONMENT DEVELOPMENT****/
			
			$allappr_end_mooe = $total_20_appr_end_m + $total_noneoffice_appr_end_m;
			$allappr_end_obl_mooe = $fObl_20_end_m + $fObl_noneoffice_end_m;
			$allbalance_end_appr_mooe = $allappr_end_mooe - $allappr_end_obl_mooe;
			
			/**********************************************************/
			
			/**** ALL CAPITAL OUTLAY FOR ENVIRONMENT DEVELOPMENT****/
			
			$allappr_end_co = $total_20_appr_end_c + $total_noneoffice_appr_end_c;
			$allappr_end_obl_co = $fObl_20_end_c + $fObl_noneoffice_end_c;
			$allbalance_end_appr_co = $allappr_end_co - $allappr_end_obl_co;
			
			/**********************************************************/
			
			
			/**** TOTAL FOR ENVIRONMENT DEVELOPMENT****/
			
			$allappr_end_total = $allappr_end_ps + $allappr_end_mooe + $allappr_end_co;
			$allappr_end_obl_total = $allappr_end_obl_ps + $allappr_end_obl_mooe;
			$allbalance_end_appr_total = $allbalance_end_appr_ps + $allbalance_end_appr_mooe + $allbalance_end_appr_co;
			
			/**********************************************************/
			
			
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_end_ps,2).'</td>';
			echo '<td>'.number_format($allappr_end_ps,2).'</td>';
			echo '<td>'.number_format($allappr_end_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_end_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_end_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_end_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_end_co,2).'</td>';
			echo '<td>'.number_format($allappr_end_co,2).'</td>';
			echo '<td>'.number_format($allappr_end_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_end_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_end_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_end_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_end_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_end_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_end_appr_total,2); ?></strong></td>
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
		
		/********************* NONE - OFFICE (PS)******************/
		
		$tablelist_noneoffice_ps_o = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_ps_o = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_o = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_o_p ="0";
		$fObl_noneoffice_o_p = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_ps_o WHERE sector = ? AND type = ?");
		$result->execute(["OTHER SERVICES","Personal Services"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_ps_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_ps_o` as total FROM $tableaip_noneoffice_ps_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_o_p += $grow['total']; // <------------- 
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_ps_o) as total FROM $tablernoneoffice_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_o_p += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (MOOE)******************/
		
		$tablelist_noneoffice_m_o = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_m_o = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_m_o = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_o_m ="0";
		$fObl_noneoffice_o_m = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_m_o WHERE sector = ? AND type = ?");
		$result->execute(["OTHER SERVICES","Maintenance And Other Operating Expenses"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_m_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_m_o` as total FROM $tableaip_noneoffice_m_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_o_m += $grow['total']; // <---------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_m_o) as total FROM $tablernoneoffice_m_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_o_m += $rObl['total']; // <---------
					
					}
					
				
			}
			
			
				/********************* NONE - OFFICE (CO)******************/
		
		$tablelist_noneoffice_c_o = "noneoffice_list_".$_SESSION['budget'];
		$tableaip_noneoffice_c_o = "noneoffice".$_SESSION['budget'];
		$tablernoneoffice_c_o = "rnoneoffice".$_SESSION['budget'];
		$total_noneoffice_appr_o_c ="0";
		$fObl_noneoffice_o_c = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_noneoffice_c_o WHERE sector = ? AND type = ?");
		$result->execute(["OTHER SERVICES","Capital Outlay"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_noneoffice_c_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_noneoffice_c_o` as total FROM $tableaip_noneoffice_c_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_noneoffice_appr_o_c += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_noneoffice_c_o) as total FROM $tablernoneoffice_c_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_noneoffice_o_c += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
			/********************* GENDER AND DEVELOPMENT (MOOE)******************/
		
		$tablelist_gad_o = "gad_list_".$_SESSION['budget'];
		$tableaip_gad_o = "gad".$_SESSION['budget'];
		$tablergad_o = "rgad".$_SESSION['budget'];
		$total_gad_appr_o ="0";
		$fObl_gad_o = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_gad_o WHERE sector = ?");
		$result->execute(["OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_gad_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_gad_o` as total FROM $tableaip_gad_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_gad_appr_o += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_gad_o) as total FROM $tablergad_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_gad_o += $rObl['total']; //<------------
					
					}
					
				
			}
			
			/********************* MUNICIPAL DISASTER RISK (MOOE)******************/
		
		$tablelist_mdr_o = "mdr_list_".$_SESSION['budget'];
		$tableaip_mdr_o = "mdr".$_SESSION['budget'];
		$tablermdr_o = "rmdr".$_SESSION['budget'];
		$total_mdr_appr_o ="0";
		$fObl_mdr_o = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_mdr_o WHERE sector = ?");
		$result->execute(["OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_mdr_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_mdr_o` as total FROM $tableaip_mdr_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_mdr_appr_o += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_mdr_o) as total FROM $tablermdr_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_mdr_o += $rObl['total']; //<------------
					
					}
					
				
			}
			
			/********************* SENIOR CITIZENS & PERSONS WITH DISABILITIES (MOOE)******************/
		
		$tablelist_1sp_o = "1sp_list_".$_SESSION['budget'];
		$tableaip_1sp_o = "1sp".$_SESSION['budget'];
		$tabler1sp_o = "r1sp".$_SESSION['budget'];
		$total_1sp_appr_o ="0";
		$fObl_1sp_o = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_1sp_o WHERE sector = ?");
		$result->execute(["OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_1sp_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_1sp_o` as total FROM $tableaip_1sp_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_1sp_appr_o += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_1sp_o) as total FROM $tabler1sp_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_1sp_o += $rObl['total']; //<------------
					
					}
					
				
			}
			
			/********************* IRA - LCPC (MOOE)******************/
		
		$tablelist_lcpc_o = "lcpc_list_".$_SESSION['budget'];
		$tableaip_lcpc_o = "lcpc".$_SESSION['budget'];
		$tablerlcpc_o = "rlcpc".$_SESSION['budget'];
		$total_lcpc_appr_o ="0";
		$fObl_lcpc_o = "0";
		
		$result = $db->prepare("SELECT * FROM $tablelist_lcpc_o WHERE sector = ?");
		$result->execute(["OTHER SERVICES"]);
			
			foreach($result as $row){
				/*----- Appropriation ----*/
				$code_lcpc_o = $row['code'];
				
				$gAppr = $db->prepare("SELECT `$code_lcpc_o` as total FROM $tableaip_lcpc_o WHERE 1");
				$gAppr->execute();
				
				foreach($gAppr as $grow){
					
					$total_lcpc_appr_o += $grow['total']; //<------------
					
				}
				
				 
				
				/*----- Obligations ----- */
					$obligation = $db->prepare("SELECT sum($code_lcpc_o) as total FROM $tablerlcpc_o WHERE yearm = ?");
					$obligation->execute([$_SESSION['budget']]);
					
					foreach($obligation as $rObl){
						
						$fObl_lcpc_o += $rObl['total']; //<------------
					
					}
					
				
			}
			
			
			
			/**** ALL PERSONAL SERVICES FOR OTHER SERVICES****/
			
			$allappr_o_ps = $total_noneoffice_appr_o_p;
			$allappr_o_obl_ps = $fObl_noneoffice_o_p;
			$allbalance_o_appr_ps = $allappr_o_ps - $allappr_o_obl_ps;
			
			/**********************************************************/
			
			
			/**** ALL MAINTENANCE AND OTHER OPERATING EXPENSES FOR OTHER SERVICES****/
			
			$allappr_o_mooe = $total_noneoffice_appr_o_m + $total_gad_appr_o + $total_mdr_appr_o + $total_1sp_appr_o + $total_lcpc_appr_o;
			$allappr_o_obl_mooe = $fObl_noneoffice_o_m + $fObl_gad_o + $fObl_mdr_o + $fObl_1sp_o + $fObl_lcpc_o;
			$allbalance_o_appr_mooe = $allappr_o_mooe - $allappr_o_obl_mooe;
			
			/**********************************************************/
			
			/**** ALL CAPITAL OUTLAY FOR OTHER SERVICES****/
			
			$allappr_o_co = $total_noneoffice_appr_o_c;
			$allappr_o_obl_co = $fObl_noneoffice_o_c;
			$allbalance_o_appr_co = $allappr_o_co - $allappr_o_obl_co;
			
			/**********************************************************/
			
			
			/**** TOTAL FOR OTHER SERVICES****/
			
			$allappr_o_total = $allappr_o_ps + $allappr_o_mooe + $allappr_o_co;
			$allappr_o_obl_total = $allappr_o_obl_ps + $allappr_o_obl_mooe;
			$allbalance_o_appr_total = $allbalance_o_appr_ps + $allbalance_o_appr_mooe + $allbalance_o_appr_co;
			
			/**********************************************************/
			
			
			
			
			
			
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_o_ps,2).'</td>';
			echo '<td>'.number_format($allappr_o_ps,2).'</td>';
			echo '<td>'.number_format($allappr_o_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_o_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_o_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_o_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_o_co,2).'</td>';
			echo '<td>'.number_format($allappr_o_co,2).'</td>';
			echo '<td>'.number_format($allappr_o_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_o_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_o_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_o_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_o_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_o_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_o_appr_total,2); ?></strong></td>
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

<!-------Total ------>	
	<tr>
		<td>&nbsp;</td>
		<td colspan="6"><strong>Total Current Year Appropriations</strong></td>
	</tr>

	
		
		<?php 
		

			
			echo '<tr>';
			echo '<td>';
			echo '<td>Personal Services</td>';
			echo '<td>'.number_format($allappr_gps_ps + $allappr_ss_ps + $allappr_ed_ps + $allappr_end_ps + $allappr_o_ps,2).'</td>';
			echo '<td>'.number_format($allappr_gps_ps + $allappr_ss_ps + $allappr_ed_ps + $allappr_end_ps + $allappr_o_ps,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_ps + $allappr_ss_obl_ps + $allappr_ed_obl_ps + $allappr_end_obl_ps + $allappr_o_obl_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_ps + $allbalance_ss_appr_ps + $allbalance_ed_appr_ps + $allbalance_end_appr_ps + $allbalance_o_appr_ps,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_ps + $allbalance_ss_appr_ps + $allbalance_ed_appr_ps + $allbalance_end_appr_ps + $allbalance_o_appr_ps,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Maintenance & Other Operating Expenses</td>';
			echo '<td>'.number_format($allappr_gps_mooe + $allappr_ss_mooe + $allappr_ed_mooe + $allappr_end_mooe + $allappr_o_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_gps_mooe + $allappr_ss_mooe + $allappr_ed_mooe + $allappr_end_mooe + $allappr_o_mooe,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_mooe + $allappr_ss_obl_mooe + $allappr_ed_obl_mooe + $allappr_end_obl_mooe + $allappr_o_obl_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_mooe + $allbalance_ss_appr_mooe + $allbalance_ed_appr_mooe + $allbalance_end_appr_mooe + $allbalance_o_appr_mooe,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_mooe + $allbalance_ss_appr_mooe + $allbalance_ed_appr_mooe + $allbalance_end_appr_mooe + $allbalance_o_appr_mooe,2).'</td>';
			echo '</tr>';
			
			echo '<tr>';
			echo '<td>';
			echo '<td>Capital Outlay</td>';
			echo '<td>'.number_format($allappr_gps_co + $allappr_ss_co + $allappr_ed_co + $allappr_end_co + $allappr_o_co,2).'</td>';
			echo '<td>'.number_format($allappr_gps_co + $allappr_ss_co + $allappr_ed_co + $allappr_end_co + $allappr_o_co,2).'</td>';
			echo '<td>'.number_format($allappr_gps_obl_co + $allappr_ss_obl_co + $allappr_ed_obl_co + $allappr_end_obl_co + $allappr_o_obl_co,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_co + $allbalance_ss_appr_co + $allbalance_ed_appr_co + $allbalance_end_appr_co + $allbalance_o_appr_co,2).'</td>';
			echo '<td>'.number_format($allbalance_appr_co + $allbalance_ss_appr_co + $allbalance_ed_appr_co + $allbalance_end_appr_co + $allbalance_o_appr_co,2).'</td>';
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
		<td><strong><?PHP echo number_format($allappr_gps_total + $allappr_ss_total + $allappr_ed_total + $allappr_end_total + $allappr_o_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_gps_total + $allappr_ss_total + $allappr_ed_total + $allappr_end_total + $allappr_o_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allappr_gps_obl_total + $allappr_ss_obl_total + $allappr_ed_obl_total + $allappr_end_obl_total + $allappr_o_obl_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_appr_total + $allbalance_ss_appr_total + $allbalance_ed_appr_total + $allbalance_end_appr_total + $allbalance_o_appr_total,2); ?></strong></td>
		<td><strong><?PHP echo number_format($allbalance_appr_total + $allbalance_ss_appr_total + $allbalance_ed_appr_total + $allbalance_end_appr_total + $allbalance_o_appr_total,2); ?></strong></td>
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

  
  
  
<div class="modal fade" id="lockModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Report</h4>
			</div>
			
				<div class="modal-body">
				<?php
				$verify  = $db->prepare("SELECT flag FROM aip WHERE 1");
				$verify->execute();
				
				$row = $verify->fetch();
				
				if($row['flag'] == '0'){
					
				echo '<h4>Generate Final Report?</h4>
				<small>After generating final report. The Budget Year <strong>'. $_SESSION['budget'] .'</strong> will be locked for editing.</small>';	
					
					
				}
				
				else{
					
				echo '<h4>Unlock Report?</h4>
				<small>The Budget Year <strong>'. $_SESSION['budget'] .'</strong> will be ulocked for editing.</small>';	
					
				}
				
				?>
				
	
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#getPassModal">Confirm</button>
				</div>

			
		</div>
	</div>
</div>

<div class="modal fade" id="getPassModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<form method="post" action="lock.php">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm Password</h4>
			</div>
			
				<div class="modal-body">
				
					<div class="form-group">
						<label for="lock">Enter administrator password:</label>
							<input type="password" id="lock" name="lock" class="form-control input-lg" required>
								<span class="help-block">Only <strong>Administrator</strong> account can lock the report.</span>	
					</div>	
				
	
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Lock</button>
				</div>

		</form>	
		</div>
	</div>
</div>
</body>
</html>