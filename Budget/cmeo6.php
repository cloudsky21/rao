<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_co_meo.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	exit();
}


?>
<?php
//Allotment per quarter

$result = $db->prepare("SELECT * FROM aip WHERE departments = ? AND Year = ?");
		$result->execute(["MEO",$_SESSION['budget']]);
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_meo = $row['total_co'];
				$allotment_meo  = $appr_meo / 2;
			}


?>


<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$total_1 = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$total_2 = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$total_3 = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$total_4 = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$total_5 = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$total_6 = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$total_7 = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$total_8 = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$total_9 = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$total_10 = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$total_11 = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM meoco WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$total_12 = $row_december['total'];



?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CO Report | Mun. Engineering Office</title>
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
		<a class="navbar-brand" href="home">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="aipMEO">AIP</a></li>
			<li><a href="add_year">Budget Year</a></li>
			<li><a href="heads">Department Heads List</a></li>
			
		  
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
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
		  <span class="caret"></span></a>	  
	    <ul class="dropdown-menu">
			<li><a href="co_mmo_all">Mayors Office</a></li>
			<li><a href="co_sb_all">Sangguniang Bayan</a></li>
			<li><a href="co_mpdo_all">Municipal Planning and Development Office</a></li>
			<li><a href="co_lcr_all">Local Civil Registrar</a></li>
			<li><a href="co_mbo_all">Municipal Budget Office</a></li>
			<li><a href="co_macco_all">Municipal Accounting Office</a></li>
			<li><a href="co_mto_all">Municipal Treasurers Office</a></li>
			<li><a href="co_masso_all">Municipal Assessors Office</a></li>
			<li><a href="co_mho_all">Municipal Health Office</a></li>
			<li><a href="co_mswd_all">Municipal Social Welfare Development Office</a></li>
			<li><a href="co_mao_all">Municipal Agriculturist Office</a></li>
			<li><a href="co_meo_all">Municipal Engineering Office</a></li>
			<li><a href="co_mbe_all">Municipal Business Enterprise</a></li>
			<li><a href="co_gs_all">General Services</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
		<ul class="dropdown-menu">

			<li><a href="export_meo_ps">Export to Excel</a></li>
			<li><a href="personal_services_meo_all">Personal Services</a></li>
			<li><a href="mooe_meo_all">Maintenance and Other Operating Expenses</a></li>
			
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
			 <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
				<ul class="dropdown-menu">

					<li><a href="cmeo1">January</a></li>
					<li><a href="cmeo2">February</a></li>
					<li><a href="cmeo3">March</a></li>
					<li><a href="cmeo4">April</a></li>
					<li><a href="cmeo5">May</a></li>
					<li><a href="cmeo6">June</a></li>
					<li><a href="cmeo7">July</a></li>
					<li><a href="cmeo8">August</a></li>
					<li><a href="cmeo9">September</a></li>
					<li><a href="cmeo10">October</a></li>
					<li><a href="cmeo11">November</a></li>
					<li><a href="cmeo12">December</a></li>
		
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

<div style="margin-top: 100px;">


<div class="page-header">

<h2>Mun. Engineering's Office <br><small>Capital Outlay (June <?php echo $_SESSION['budget'] ?>)</small></h2>

</div>

	
		
			<ul class="list-group col-sm-4">
						
					<li class="list-group-item">Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_meo,2); ?></span></li>
					<li class="list-group-item">Balance Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_meo - $total_6,2); ?></span></li>
					
					
	
			</ul>
		
				
			<ul class="list-group col-sm-8">
				<li class="list-group-item"><label class="list-group-item-heading">Total: </label><p class="list-group-item-text"><?PHP echo number_format($total_6,2); ?></p></li>
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
$result = $db->prepare("SELECT * FROM meoco WHERE yearm = ? AND month = ? ORDER BY alobs DESC");
$result->execute([$yearTransact,"06"]);
 
  while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            echo '<tr>';
			echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
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

<?php
function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM meoco WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_co FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MEO"]);
$row = $result->fetch();
$value = $row['balance_co'];
return $value;
}

function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_co FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MEO"]);
$row = $result->fetch();
$value = $row['total_co'];
return $value;
}
?>
