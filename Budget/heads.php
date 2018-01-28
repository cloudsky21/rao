<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}



?>



<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Department Heads List</title>
<link rel="shortcut icon" href="favicon.ico"/>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="home">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="home">Home
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_year">Budget Year</a></li>
          <li><a href="aipMMO">AIP</a></li>
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
      
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
		<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		 <li><a href="updateDeptHeads">Edit Department Head/s List</a></li>
		
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
</nav>
	<div class="container-fluid">
	  <div style="margin-top: 100px;">	
		<form method="post" action="">
			<table class="table table-hover"> 
				<thead>
					<th>CODE</th>
					<th>DEPARTMENT</th>
					<th>HEAD OF OFFICE</th>
					<th>SECTOR</th>
				</thead>	
					<tbody>
							<?PHP
									$sbudget = $_SESSION['budget'];
									$query = "SELECT id, departments, deptName, headOfOffice, sector FROM aip WHERE Year = ?";
									$result = $db->prepare($query);
									$result->execute([$sbudget]);
	
	
	
										foreach ($result as $row) {
		
											echo '<tr>';
											echo '<td>'.$row['departments'].'</td>';
											echo '<td><strong>'.$row['deptName'].'</strong></td>';
											echo '<td>'.$row['headOfOffice'].'</td>';
											echo '<td>'.$row['sector'].'</td>';
											echo '</tr>';
		
										}
	
		
							?>	
					</tbody>	
			</table>
		</form>
	</div>
</div>	
</body>
</html>