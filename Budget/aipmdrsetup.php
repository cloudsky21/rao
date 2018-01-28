<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_mdr.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


$get_table_check = get_table_exist();


if($get_table_check == 1){


	$tablename = "mdr_list_".$_SESSION['budget'];
	$table_aip = "mdr".$_SESSION['budget'];
	$table_20 = "rmdr".$_SESSION['budget'];
	
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
	$get_budget = "mdr_list_".$_SESSION['budget'];
	$insert_to_db = $db->prepare("INSERT INTO `$get_budget` (code, propername, sector, refCode) VALUES (?,?,?,?)");
	$insert_to_db->execute([$_POST['for-code'], $_POST['for-name'], $_POST['sector'], $_POST['ref']]);
	
		
	$last_column = get_last_column();
	$last_column_r = get_last_column_rao();

	
	$addcolumn = $_POST['for-code'];
	$addcolumn_bal = $_POST['for-code']."_bal";
	
	$tablename_gad = "mdr".$_SESSION['budget'];
	$query = "ALTER TABLE $tablename_gad ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column`, ADD `$addcolumn_bal` DECIMAL(20,2) NOT NULL AFTER $last_column"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	$tabler20 = "rmdr".$_SESSION['budget'];
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
<title>AIP | Municipal Disaster Risk</title>
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
		 <li><a href="sef.php">Special Education Fund (SEF)</a></li>
		 <li><a href="mdr.php">5% Municipal Disaster Risk</a></li>
		 <li><a href="pwds.php">1% Senior Citizens & Persons With Disabilities</a></li>
		 <li><a href="1iralcpc.php">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
			<span class="caret"></span></a>
		<ul class="dropdown-menu scrollable-menu">

			<li><a href="aipMMO.php">Mayors Office</a></li>
			<li><a href="aipSB.php">Sangguniang Bayan</a></li>
			<li><a href="aipMPDO.php">Municipal Planning and Development Office</a></li>
			<li><a href="aipLCR.php">Local Civil Registrar</a></li>
			<li><a href="aipMBO.php">Municipal Budget Office</a></li>
			<li><a href="aipMACCO.php">Municipal Accounting Office</a></li>
			<li><a href="aipMTO.php">Municipal Treasurers Office</a></li>
			<li><a href="aipMASSO.php">Municipal Assessors Office</a></li>
			<li><a href="aipMHO.php">Municipal Health Office</a></li>
			<li><a href="aipMSWD.php">Municipal Social Welfare Development Office</a></li>
			<li><a href="aipMAO.php">Municipal Agriculturist Office</a></li>
			<li><a href="aipMEO.php">Municipal Engineering Office</a></li>
			<li><a href="aipMarket.php">Municipal Business Enterprise</a></li>
			<li><a href="aipPlaza.php">General Services</a></li>
			<li><a href="edf.php">20&#37; EDF</a></li>
			<li><a href="aipNoneOffice.php">None-Office</a></li>
			<li><a href="aipGAD.php">Gender and Development</a></li>
			<li><a href="aipMDR.php">Municipal Disaster Risk</a></li>
			<li><a href="aip1SP.php">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="aip1iralcpc.php">1% IRA & LCPC</a></li>
			<li><a href="aipSEF.php">Special Education Fund (SEF)</a></li>
			<li><a href="aipcont.php">Continuing Programs</a></li>
		
		</ul>	
		</li>
	<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
			<span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="aipMDR.php">Back-to-AIP <strong>MDR</strong></a></li>
			<li><a href="aipmdrsetup.php">Setup Table</a></li>
			<li><a href="aipmdrupdate.php">Update Column</a></li>
					
		
		</ul>	
		</li>	
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
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
	<div style="margin-top: 100px;">

		<div class="page-header">
			<h2>Setup Municipal Disaster Risk</h2>
		</div>
  

			
				<label>Table: <STRONG>MDR Programs from previous year</strong> </label>  
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
									
									$result = $db->prepare("SELECT * FROM mdr_list_".$sget."");
									$result->execute();
									
									foreach($result as $row){
										
										
										/*Check if set in mdr_list Current year*/
										$current_year = "mdr_list_".$_SESSION['budget'];
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