<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_sef.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}
$total="0";
$balance = "0";
refresh_all();

$getlock = "0";
		$islock = $db->prepare("SELECT flag FROM aip WHERE Year = ?");
		$islock->execute([$_SESSION['budget']]);
		
		foreach($islock as $lock){
		
		
			$getlock =  $lock['flag'];
			
		}
?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


		if(!empty($_POST['amount_adjusted'])){	
	
			$tot = array_sum($_POST['amount_adjusted']);

			$programUpdate = $_POST['program'];
			$amountUpdate = $_POST['amount_adjusted'];


				//Loop to update sef table
					foreach($_POST['idnumber'] as $key=>$value){
						
					$tb = "sef".$_SESSION['budget'];	
	
					$result = $db->prepare("UPDATE `$tb` SET `$programUpdate[$key]` = '".$amountUpdate[$key]."' WHERE year = ?");
					$result->execute([$_SESSION['budget']]);
					}
		
						//update total in edf
						$result = $db->prepare("UPDATE `$tb` SET total = '".$tot."' WHERE year = ?");
						$result->execute([$_SESSION['budget']]);
	
	
		}


	unset($_POST);
	header('Location: '.$_SERVER['PHP_SELF']);
	
	}	

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP |  Special Education Fund</title>
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
	  <?php 
			if($getlock == '0'){
	?>	
		<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
			<span class="caret"></span></a>
		<ul class="dropdown-menu">
			
			<li><a href="aipsefsetup">Setup Table</a></li>
			<li><a href="aipsefupdate">Update Column</a></li>
					
		
		</ul>	
		</li>
	  <?php
			}
else {}
?>		
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
			<form action="" method="POST">
				<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>SEF</strong></label>  
					<table  class="table table-condensed table-hover table-striped table-bordered">
						<thead>
							<th>#</th>
							<th>Object of Expenditure <br>&#40;1&#41;</th>
							<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
							<th>&nbsp;</th>
							<th>Balance<br>&#40;3&#41;</th>
						</thead>
		
	
		<?PHP 
		
			$tablename = "sef_list_".$_SESSION['budget']; //sef_list_(current Year) table
			$edfCyTbl = $db->prepare("SELECT * FROM `$tablename`");
			$edfCyTbl->execute();
		
				foreach($edfCyTbl as $list){
			
			
			
					$table2 = "sef".$_SESSION['budget']; //sef_CY table
					$codelist = $list['code'];
					$namelist = $list['code']."_bal";
			
					$edfcy = $db->prepare("SELECT `$codelist` as valueList, `$namelist` as balanceList, total FROM `$table2`");
					$edfcy->execute();
			
					$r = $edfcy->fetch();
			
			
					$total +=  $r['valueList'];
			
						echo '<tr>';	
							echo '<td><input type="hidden" name="idnumber[]" value="'.$list['id'].'">'.$list['id'].'</td>'; //number of loops for update
							echo '<td><input type="hidden" name="program[]" value="'.$list['code'].'">'.$list['propername'].'</td>'; //contains column name for 20edf_CY
							echo '<td><input type="hidden" value="'.$r['valueList'].'">'.number_format($r['valueList'],2).'</td>';
							echo '<td><input type="number" name="amount_adjusted[]" value="'.$r['valueList'].'" class="form-control" step=any min=0 required></td>'; //contains adjusted amount / to be adjusted amount
							echo '<td><input type="hidden" name="amount_balance[]" value="'.$r['balanceList'].'" >'.number_format($r['balanceList'],2).'</td>';
						echo '</tr>';
			
			$tablerao = "rsef".$_SESSION['budget'];
			$rnocy = $db->prepare("SELECT SUM($codelist) as total FROM `$tablerao`");
			$rnocy->execute();
			
				foreach($rnocy as $rnocy_total){
					
					$totalb = $r['valueList'] - $rnocy_total['total'];
					
					$update_bal = $db->prepare("UPDATE `$table2` SET $namelist=?");
					$update_bal->execute([$totalb]);
					
					
				}
				$balance += $r['balanceList'];
		
		}
		
		$update_total = $db->prepare("UPDATE `$table2` SET total = ?");
		$update_total->execute([$total]);
		
		?>
	
		<tr>
			<td></td>
			<td><strong>Total:</strong></td>
			<td><strong><?PHP if($total>0)  {echo number_format($total,2);} else {}  ?></strong></td>
			<td></td>
			<td><strong><?PHP if($balance>0)  {echo number_format($balance,2);} else {}  ?></strong></td> <!-- For Balance here -->
		<tr>
			<?php 
			if($getlock == '0' || empty($getlock)){
			echo '<td colspan="5"><button class="btn btn-default form-control" type="submit" name="submit_updates">Save Changes</button></td>';
			}
			else
			{
				echo '<td colspan="5" class="text-center"><strong>Locked For Editing</strong></td>';
			}
		?>	
		</tr>
		







</table>
</form>
</div>
</body>
</html>