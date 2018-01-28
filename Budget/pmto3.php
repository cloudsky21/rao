<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_ps_mto.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
	exit();
}

?>
<?php
//Allotment per quarter

$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MTO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_mto = $row['total_ps'];
				$allotment_mto  = $appr_mto / 4;
			}


?>


<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$ps_jan_total = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$ps_feb_total = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$ps_march_total = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$ps_april_total = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$ps_may_total = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$ps_june_total = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$ps_july_total = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$ps_august_total = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$ps_september_total = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$ps_october_total = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$ps_november_total = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmto WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$ps_december_total = $row_december['total'];



?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PS Report | Municipal Treasurers Office</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
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
		<a class="navbar-brand" href="home.php">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="aipMTO.php">AIP</a></li>
			<li><a href="add_year.php">Budget Year</a></li>
			<li><a href="heads.php">Department Heads List</a></li>
			
		  
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
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
		  <span class="caret"></span></a>	  
	    <ul class="dropdown-menu">
			<li><a href="personal_services_mmo_all.php">Mayors Office</a></li>
			<li><a href="personal_services_sb_all.php">Sangguniang Bayan</a></li>
			<li><a href="personal_services_mpdo_all.php">Municipal Planning and Development Office</a></li>
			<li><a href="personal_services_lcr_all.php">Local Civil Registrar</a></li>
			<li><a href="personal_services_mbo_all.php">Municipal Budget Office</a></li>
			<li><a href="personal_services_macco_all.php">Municipal Accounting Office</a></li>
			<li><a href="personal_services_mto_all.php">Municipal Treasurers Office</a></li>
			<li><a href="personal_services_masso_all.php">Municipal Assessors Office</a></li>
			<li><a href="personal_services_mho_all.php">Municipal Health Office</a></li>
			<li><a href="personal_services_mswd_all.php">Municipal Social Welfare Development Office</a></li>
			<li><a href="personal_services_mao_all.php">Municipal Agriculturist Office</a></li>
			<li><a href="personal_services_meo_all.php">Municipal Engineering Office</a></li>
			<li><a href="personal_services_mbe_all.php">Municipal Business Enterprise</a></li>
			<li><a href="personal_services_gs_all.php">General Services</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
		<ul class="dropdown-menu">

			<li><a href="export_mto_ps.php">Export to Excel</a></li>
			<li><a href="personal_services_mto_all.php">Personal Services</a></li>
			<li><a href="mooe_mto_all.php">Maint. and Other Operating Expenses</a></li>
			<li><a href="co_mto_all.php">Capital Outlay</a></li>
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
			 <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
				<ul class="dropdown-menu">

					<li><a href="pmto1.php">January</a></li>
					<li><a href="pmto2.php">February</a></li>
					<li><a href="pmto3.php">March</a></li>
					<li><a href="pmto4.php">April</a></li>
					<li><a href="pmto5.php">May</a></li>
					<li><a href="pmto6.php">June</a></li>
					<li><a href="pmto7.php">July</a></li>
					<li><a href="pmto8.php">August</a></li>
					<li><a href="pmto9.php">September</a></li>
					<li><a href="pmto10.php">October</a></li>
					<li><a href="pmto11.php">November</a></li>
					<li><a href="pmto12.php">December</a></li>
		
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

<div style="margin-top: 100px;">


<div class="page-header">

<h2>Mun. Treasurer's Office <br><small>Personal Services (March <?php echo $_SESSION['budget'] ?>)</small></h2>

</div>

	
		
			<ul class="list-group col-sm-4">
						
					<li class="list-group-item">Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_mto,2); ?></span></li>
					<li class="list-group-item">Balance Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_mto - $ps_march_total,2); ?></span></li>
					
					
	
			</ul>
		
				
			<ul class="list-group col-sm-8">
				<li class="list-group-item"><label class="list-group-item-heading">Total: </label><p class="list-group-item-text"><?PHP echo number_format($ps_march_total,2); ?></p></li>
				<li class="list-group-item"><label class="list-group-item-heading">Balance: </label><p class="list-group-item-text"> <?PHP echo number_format(get_obligation_bal(),2); ?></p></li>
				<li class="list-group-item"><label class="list-group-item-heading">Appropriation:  </label><p class="list-group-item-text"><?PHP echo number_format(get_appropriation(),2); ?></p></li>
			</ul>
	

<table class="table table-condensed table-hover table-bordered">
<thead>
	<tr>
	
		<th>DATE</th>
		<th>Ref.&nbsp;AO/AA/ALOBS</th>
		<th>Claimant</th>
		<th>Total Obligation</th>
		<th>Description</th>
		
	
	</tr>
</thead>
<tbody>

	

	
<?PHP
/* JANUARY */
$yearTransact = $_SESSION['budget'];
$result = $db->prepare("SELECT * FROM psmto WHERE year_transact = ? AND month_transact = ? ORDER BY alobs DESC");
$result->execute([$yearTransact,"03"]);
 
  while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            echo '<tr>';
			echo '<td>'.$row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';
			echo '<td>'.$row['description'].'</td>';
			
			echo '</tr>';
  }
		
 ?>
 
</tbody>
</table>
</div>
</div>

</body>
</html>