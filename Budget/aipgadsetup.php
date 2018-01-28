<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_gad.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}


$get_table_check = get_table_exist();


if($get_table_check == 1){


	$tablename = "gad_list_".$_SESSION['budget'];
	$table_aip = "gad".$_SESSION['budget'];
	$table_rao = "rgad".$_SESSION['budget'];
	
	$query = "CREATE TABLE $tablename(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 code VARCHAR(20) NOT NULL,
 propername VARCHAR(500) NOT NULL,
 sector VARCHAR(500) NOT NULL,
 refCode INT(4) NOT NULL);";
 
	$result = $db->prepare($query);
	$result->execute();
	
	$query = "CREATE TABLE $table_aip(
 year VARCHAR(4) NOT NULL,
 signatory VARCHAR(300) NOT NULL,
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
	$get_budget = "gad_list_".$_SESSION['budget'];
	$insert_to_db = $db->prepare("INSERT INTO `$get_budget` (code, propername, sector, refCode) VALUES (?,?,?,?)");
	$insert_to_db->execute([$_POST['for-code'], $_POST['for-name'], $_POST['sector'], $_POST['ref']]);
	
		
	$last_column = get_last_column();
	$last_column_r = get_last_column_rao();
	
	$addcolumn = $_POST['for-code'];
	$addcolumn_bal = $_POST['for-code']."_bal";
	
	$tablename_gad = "gad".$_SESSION['budget'];
	$query = "ALTER TABLE $tablename_gad ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column`, ADD `$addcolumn_bal` DECIMAL(20,2) NOT NULL AFTER $last_column"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	$tabler20 = "rgad".$_SESSION['budget'];
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
<title>AIP | Gender and Development Fund</title>
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
			<li><a href="aipGAD">Back-to-AIP <strong>GAD</strong></a></li>
			<li><a href="aipgadsetup">Setup Table</a></li>
			<li><a href="aipgadupdate">Update Column</a></li>
					
		
		</ul>	
		</li>	
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
	 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?PHP echo $_SESSION['isLoginName']; ?>&nbsp;<span class="caret"></span> </a>
		<ul class="dropdown-menu">
		<li><a href="accounts">Accounts</a></li>
		<li><a href="log">Audit Log</a></li>
		<li><a href="logmeOut">Log Out</a></li>
		</li>
		</ul>
	
	</ul>
  </div>
</div>
</nav>

<div class="container">
	<div style="margin-top: 100px;">

		<div class="page-header">
			<h2>Setup Gender and Development</h2>
		</div>
  

			
				<label>Table: <STRONG>GAD Programs from previous year</strong> </label>  
					<div class="panel panel-default">
						<table  class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th colspan=2>Program List</th>
									
					
								</tr>
							</thead>
							
							<tbody>
								<?PHP
							try{								
									$sget = $_SESSION['budget']-1;
									
									$result = $db->prepare("SELECT * FROM gad_list_".$sget."");
									$result->execute();
									
									foreach($result as $row){
										
										
										/*Check if set in gad_list Current year*/
										$current_year = "gad_list_".$_SESSION['budget'];
										$ifset = $db->prepare("SELECT * FROM $current_year WHERE code = ?");
										$ifset->execute([$row['code']]);
										
										$count = $ifset->rowCount();
										
										if(!$count>0){
											
										echo '<form action="" method="post">';
										
										echo '<tr>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['code'].'"></td>';
										echo '<td><input type="hidden" name="for-name" value="'.$row['propername'].'">'.$row['propername'].'</td>';
										echo '<td><input type="hidden" name="sector" value="'.$row['sector'].'">'.$row['sector'].'</td>';
										echo '<td><input type="hidden" name="ref" value="'.$row['refCode'].'">'.$row['refCode'].'</td>';
										echo '<td><button type="submit" name="submit_btn" class="btn btn-primary btn-xs">Add Program</button</td>';
										echo '</tr>';
										
										echo '</form>';
										}
										
									}
							}
							
							catch(Exception $e)
							{

							echo 'No Data was Set on year : '.$sget;
							}							
								
								?>
							</tbody>
						</table>
					</div>
			
	</div>
</div>

</body>
</html>