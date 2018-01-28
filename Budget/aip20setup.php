<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_edf.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}


$get_table_check = get_table_exist();


if($get_table_check == 1){


	$tablename = "20_list_".$_SESSION['budget'];
	$table_aip_20 = "20edf".$_SESSION['budget'];
	$table_20 = "r20edf".$_SESSION['budget'];
	
	$query = "CREATE TABLE $tablename(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 code VARCHAR(20) NOT NULL,
 propername VARCHAR(500) NOT NULL,
 sector VARCHAR(500) NOT NULL,
 type VARCHAR(500) NOT NULL,
 refCode INT(4) NOT NULL,
 UNIQUE (code));";
 
	$result = $db->prepare($query);
	$result->execute();
	
	$query = "CREATE TABLE $table_aip_20(
 year VARCHAR(4) NOT NULL,
 signatory VARCHAR(300) NOT NULL,
 total DECIMAL(20,2) NOT NULL,
 total_balance DECIMAL(20,2) NOT NULL);";
	
	$result = $db->prepare($query);
	$result->execute();
	
	$query = "CREATE TABLE $table_20(
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
	$get_budget = "20_list_".$_SESSION['budget'];
	$insert_to_db = $db->prepare("INSERT INTO `$get_budget` (code, propername, sector, type, refCode) VALUES (?,?,?,?,?)");
	$insert_to_db->execute([$_POST['for-code'], $_POST['for-name'], $_POST['sector'], $_POST['for-type'],$_POST['ref']]);
	
		
	$last_column = get_last_column();
	$last_column_r = get_last_column_rao();

	
	$addcolumn = $_POST['for-code'];
	$addcolumn_bal = $_POST['for-code']."_bal";
	
	$tablename_20 = "20edf".$_SESSION['budget'];
	$query = "ALTER TABLE $tablename_20 ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column`, ADD `$addcolumn_bal` DECIMAL(20,2) NOT NULL AFTER $last_column"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	$tabler20 = "r20edf".$_SESSION['budget'];
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
<title>AIP | 20&#37; EDF Fund</title>
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
			<li><a href="edf">Back-to-AIP <strong>20%EDF</strong></a></li>
			<li><a href="aip20setup">Setup Table</a></li>
			<li><a href="aip20update">Update Column</a></li>
					
		
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
			<h2>Setup 20% EDF</h2>
		</div>
  

			
				<label>Table: <STRONG>20&#37; EDF from previous year</strong> </label>  
					<div class="panel panel-default">
						<table  class="table table-condensed table-hover table-striped">
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
									
									$result = $db->prepare("SELECT * FROM 20_list_".$sget."");
									$result->execute();
									
									foreach($result as $row){
										
										
										/*Check if set in 20_list Current year*/
										$current_year = "20_list_".$_SESSION['budget'];
										$ifset = $db->prepare("SELECT * FROM $current_year WHERE code = ?");
										$ifset->execute([$row['code']]);
										
										$count = $ifset->rowCount();
										
										if(!$count>0){
											
										echo '<form action="" method="post">';
										
										echo '<tr>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['code'].'"></td>';
										echo '<td><input type="hidden" name="for-name" value="'.$row['propername'].'">'.$row['propername'].'</td>';
										echo '<td><input type="hidden" name="sector" value="'.$row['sector'].'">'.$row['sector'].'</td>';
										echo '<td><input type="hidden" name="for-type" value="'.$row['type'].'">'.$row['type'].'</td>';
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