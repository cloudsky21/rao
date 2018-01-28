<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_iralcpc.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}
$table_cy = "rlcpc".$_SESSION['budget'];
$table = "lcpc".$_SESSION['budget'];
try{
refresh_all();
}
catch(Exception $e)
{
	echo ("Setup AIP for IRA-LCPC. This page will be redirected.. in 3 seconds");
	header('Refresh: 3; url=aip1lcpcsetup');
	exit();
	
}
?>
<?php
//Allotment per quarter

$result = $db->prepare("SELECT * FROM $table WHERE 1");
		$result->execute();
			
			foreach($result as $row){
				/*----- Appropriation and Allotment ----*/
				$appr_lp = $row['total'];
				$allotment_lp  = $appr_lp / 4 * 3;
			}


?>


<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$nt_1 = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$nt_2 = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$nt_3 = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$nt_4 = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$nt_5 = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$nt_6 = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$nt_7 = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$nt_8 = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$nt_9 = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$nt_10 = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$nt_11 = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$nt_12 = $row_december['total'];



?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report | IRA - LCPC</title>
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
			<li><a href="aip1iralcpc">AIP</a></li>
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
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
		<ul class="dropdown-menu">

			<li><a href="#">Export to Excel</a></li>
			
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
	
	  <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
				<ul class="dropdown-menu">

					<li><a href="lp1">January</a></li>
					<li><a href="lp2">February</a></li>
					<li><a href="lp3">March</a></li>
					<li><a href="lp4">April</a></li>
					<li><a href="lp5">May</a></li>
					<li><a href="lp6">June</a></li>
					<li><a href="lp7">July</a></li>
					<li><a href="lp8">August</a></li>
					<li><a href="lp9">September</a></li>
					<li><a href="lp10">October</a></li>
					<li><a href="lp11">November</a></li>
					<li><a href="lp12">December</a></li>
		
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

<h2>IRA - LCPC <br><small>July <?php echo $_SESSION['budget'] ?></small></h2>

</div>

	
		
			<ul class="list-group col-sm-4">
						
					<li class="list-group-item">Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_lp,2); ?></span></li>
					<li class="list-group-item">Balance Allotment (Per Quarter) <span class="badge"><?PHP echo number_format($allotment_lp - $nt_7, 2); ?></span></li>
					
					
	
			</ul>
		
				
			<ul class="list-group col-sm-8">
				<li class="list-group-item"><label class="list-group-item-heading">Total: </label><p class="list-group-item-text"><?PHP echo number_format($nt_7,2); ?></p></li>
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
$result = $db->prepare("SELECT * FROM $table_cy WHERE yearm = ? AND month = ? ORDER BY alobs DESC");
$result->execute([$yearTransact,"07"]);
 
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