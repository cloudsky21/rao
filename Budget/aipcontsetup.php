<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_cont.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	exit();
}


$get_table_check = get_table_exist_cont();


if($get_table_check == 1){


	$tablename = "cont_list_".$_SESSION['budget'];
	$table_aip = "cont".$_SESSION['budget'];
	$table_rao = "rcont".$_SESSION['budget'];
	
	
	$query = "CREATE TABLE $tablename(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 code VARCHAR(20) NOT NULL,
 propername VARCHAR(500) NOT NULL,
 amount DECIMAL(20,2) NOT NULL,
 sector VARCHAR(500) NOT NULL,
 refCode INT(4) NOT NULL,
 type VARCHAR(500) NOT NULL,
 others VARCHAR(500) NOT NULL,
 UNIQUE (code));";
 
	$result = $db->prepare($query);
	$result->execute();
	
	$query = "CREATE TABLE $table_aip(
 year VARCHAR(4) NOT NULL,
 total DECIMAL(20,2) NOT NULL,
 total_balance DECIMAL(20,2) NOT NULL);";
	
	$result = $db->prepare($query);
	$result->execute();
	
$query = "CREATE TABLE $table_rao(
 yearm VARCHAR(4) NOT NULL,
 month VARCHAR(2) NOT NULL,
 day VARCHAR(2) NOT NULL,
 alobs VARCHAR(12) NOT NULL,
 claimant VARCHAR(300) NOT NULL,
 description VARCHAR(500) NOT NULL,
 code VARCHAR(20) NOT NULL,
 total DECIMAL(20,2) NOT NULL);";
	
	$result = $db->prepare($query);
	$result->execute();

}

?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
$db->beginTransaction();
try
{
	$get_budget = "cont_list_".$_SESSION['budget'];
	$insert_to_db = $db->prepare("INSERT INTO `$get_budget` (code, propername, amount, sector, refCode, type, others) VALUES (?,?,?,?,?,?,?)");
	$insert_to_db->execute([$_POST['for-code'], $_POST['for-name'], $_POST['for-amount'], $_POST['sector'], $_POST['ref'], $_POST['for-type'], $_POST['others']]);
	
		
	$last_column = get_last_column();
	$last_column_r = get_last_column_rao();

	
	$addcolumn = $_POST['for-code'];
	$addcolumn_bal = $_POST['for-code']."_bal";
	
	$tablename = "cont".$_SESSION['budget'];
	$query = "ALTER TABLE `$tablename` ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column`, 
	ADD `$addcolumn_bal` DECIMAL(20,2) NOT NULL AFTER $last_column"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
		//check if year is inserted
		$check = $db->prepare("SELECT year FROM $tablename WHERE year = ?");
		$check->execute([$_SESSION['budget']]);
		
		$check_cnt = $check->rowCount();
		
		if($check_cnt > '0'){
			$query = "UPDATE $tablename SET $addcolumn = ? WHERE year = ?";
			$result = $db->prepare($query);
			$result->execute([$_POST['for-amount'], $_SESSION['budget']]);
		}
		else {
	
	$query = "INSERT INTO $tablename (year, $addcolumn, $addcolumn_bal) VALUES(?, ?,?)";
	$result = $db->prepare($query);
	$result->execute([$_SESSION['budget'],$_POST['for-amount'], $_POST['for-amount']]);
		}
	
	$tabler20 = "rcont".$_SESSION['budget'];
	$query = "ALTER TABLE $tabler20 ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column_r`"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	
}	
	
catch(Exception $e){

$db->rollBack();
echo "Exception: {$e->getmessage()}\n";	
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
<title>AIP | Continuing Program</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>


$(document).ready(function(){
        $('.dropdown-toggle').dropdown()
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
	<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
			<span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="aipcont">Back-to-AIP <strong>Continuing Program</strong></a></li>
			<li><a href="aipcontsetup">Setup Table</a></li>
			<li><a href="aipcontupdate">Update Column</a></li>
					
		
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
			<h2>Setup Continuing</h2>
		</div>
  

			
				<label>Table: <STRONG>Continuing Program with Balance</strong></label>  
					<div class="panel panel-default">
						<table  class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Program List</th>
									<th>Amount</th>
					
								</tr>
							</thead>
							
							<tbody>
								<?PHP 
										$sget = $_SESSION['budget']-1;
									
										$retrieve = $db->prepare("SELECT * FROM aip WHERE Year = ? AND balance_co > '0'");
										$retrieve->execute([$sget]); 
									
										echo '<tr>';
											echo '<td colspan="8"><strong>Capital Outlay:</strong></td>';
										echo '</tr>';
										
									foreach($retrieve as $row){
										
										
										/*Check if set in cont_list Current year*/
										$current_year = "cont_list_".$_SESSION['budget'];
										$ifset = $db->prepare("SELECT * FROM $current_year WHERE code = ?");
										$ifset->execute([$row['departments']]);
										
										$count = $ifset->rowCount();
										
										if(!$count>0){
										
										
										echo '<form action="" method="post">';
										
										echo '<tr>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['departments'].'"></td>';
										echo '<td><input type="hidden" name="for-name" value="'.$row['deptName'].' '.'Capital Outlay'.'">'.$row['deptName'].'</td>';
										echo '<td><input type="hidden" name="for-amount" value="'.$row['balance_co'].'">'.number_format($row['balance_co'],2).'</td>';
										echo '<td><input type="hidden" name="sector" value="'.$row['sector'].'">'.$row['sector'].'</td>';
										echo '<td><input type="hidden" name="ref" value="'.$row['refCode'].'"></td>';
										echo '<td><input type="hidden" name="for-type" value="Capital Outlay"></td>';
										echo '<td><input type="hidden" name="others" value="n/a"></td>';
										echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
										echo '</tr>';
										
										echo '</form>';
										}
										else {}
										
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									try{
									//retrieve balance for 20% EDF
									$table20edf = "20edf".$sget; //should be $sget
									$table_list20 = "20_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>20% EDF:</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="'.$keys['type'].'"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}									
									
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									try{
									//retrieve balance for None-Office
									$table20edf = "noneoffice".$sget; //should be $sget
									$table_list20 = "noneoffice_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>None-Office:</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="'.$keys['type'].'"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									try{
									//retrieve balance for 5% Gender and Development
									$table20edf = "gad".$sget; //should be $sget
									$table_list20 = "gad_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>5% Gender and Development</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="Maintenance And Other Operating Expenses"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}									
									
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									
									try{
									//retrieve balance for 5% Municipal Disaster Risk
									$table20edf = "mdr".$sget; //should be $sget
									$table_list20 = "mdr_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>5% Municipal Disaster Risk:</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="Maintenance And Other Operating Expenses"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									
									try{
									//retrieve balance for 1% Senior Citizens & Persons with Disabilities
									$table20edf = "1sp".$sget; //should be $sget
									$table_list20 = "1sp_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>1% Senior Citizens & Persons With Disabilities:</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="Maintenance And Other Operating Expenses"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									
									try{
									//retrieve balance for 1% IRA - LCPC
									$table20edf = "lcpc".$sget; //should be $sget
									$table_list20 = "lcpc_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list20");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>1% IRA - LCPC:</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
												

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														echo '<td><input type="hidden" name="sector" value="'.$keys['sector'].'">'.$keys['sector'].'</td>';
														echo '<td><input type="hidden" name="ref" value="'.$keys['refCode'].'"></td>';
														echo '<td><input type="hidden" name="for-type" value="Maintenance And Other Operating Expenses"></td>';
														echo '<td><input type="hidden" name="others" value="n/a"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
										echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';
									}		
									}
									
									
									catch(Exception $e){
										echo '<tr>';
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									try{
									//retrieve balance for SEF
									$table20edf = "sef".$sget; 
									$table_list = "sef_list_".$sget;
									
									$retrieve = $db->prepare("SELECT * FROM $table_list");
									$retrieve->execute();
										echo '<tr>';
											echo '<td colspan="8"><strong>Special Education Fund (SEF):</strong></td>';
										echo '</tr>';
										
										foreach($retrieve as $keys){
											
											$i = $keys['code']."_bal";
											$ii = $keys['propername'];
											$result = $db->prepare("SELECT $i as balance FROM $table20edf WHERE $i > '0'");
											$result->execute();
											
	

											
											foreach($result as $row){
												
												//Check if Existing to cont_list
												$list = "cont_list_".$_SESSION['budget'];
												$check_ifExist = $db->prepare("SELECT code FROM $list WHERE code = ?");
												$check_ifExist->execute([$i]);	
														
												$cnt = $check_ifExist->rowCount();

													if(!$cnt>0){
												
												echo '<form action="" method="post">';
													echo '<tr>';
														echo '<td><input type="hidden" name="for-code" value="'.$i.'"></td>';
														echo '<td><input type="hidden" name="for-name" value="'.$ii.'">'.$ii.'</td>';
														echo '<td><input type="hidden" name="for-amount" value="'.$row['balance'].'">'.number_format($row['balance'],2).'</td>';
														echo '<td><input type="hidden" name="sector" value="GENERAL PUBLIC SERVICES">GENERAL PUBLIC SERVICES</td>';
														echo '<td><input type="hidden" name="ref" value="n/a"></td>';
														echo '<td><input type="hidden" name="for-type" value="'.$keys['type'].'"></td>';
														echo '<td><input type="hidden" name="others" value="'.$keys['others'].'"></td>';
														echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
												
													echo '</tr>';
												echo '</form>';	
													}
													
														
											}
										}
									if($cnt>0){
										echo '<tr>';
											echo '<td colspan="8"><small>No Items Remaining.</small></td>';
										echo '</tr>';	
									}		
									}
									
									
									catch(Exception $e){
									echo '<tr>';	
									echo '<td colspan="8"><label>No data found</label></td>';
									echo '</tr>';
									}
/*-------------------------------------------------------------------------------------------------------------------------------*/									
									
								
								?>
							</tbody>
						</table>
					</div>
			
	</div>
</div>

</body>
</html>