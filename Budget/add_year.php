<?PHP 
session_start();
include ("cfg.php");
include("insertLog.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}



?>

<?PHP





if(isset($_POST['submit'])) {
	
	
	$_SESSION['row_insert1'] = 0;
	$post_year = $_POST['myYear'];
	$query = "INSERT INTO budget_year (year) VALUES (?)";
	$result = $db->prepare($query);
	$result->execute([$post_year]);
	$row_insert = $result->rowCount();
	
	if ($row_insert == 1){
		
		$notice =  "<div class='alert alert-success alert-dismissable'><strong>Success!</strong> Year Added</div>";
		unset($_POST);
		
	}
	else {
	
	$notice =  "<div class='alert alert-danger alert-dismissable'><strong>Error!</strong> Year Rejected.</div>";
	unset($_POST);
	
	}


	
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Budget Year</title>

</head>
<body>
<label id="accountTitle">Add Budget Year</label>
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
			<li><a href="sef">Special Eduction Fund (SEF)</a></li>
			<li><a href="mdr">5% Municipal Disaster Risk</a></li>
			<li><a href="pwds">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="1iralcpc">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		<li><a href="saao">SAAO</a></li>
		<li><a href="gen_january">SAAOB</a></li>
		
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
<div class="container-fluid">

<div style="margin-top:50px">
<form action="" method="POST" class="form-inline">

	<div class="form-group">
	<label for="myYear">Budget Year:</label>
	<input type="text" id="myYear" name="myYear" placeholder="@example: 2017" required class="form-control">
	<button type="submit" class="btn btn-default" name="submit">Submit</button>
	<br>
	<br>
	<br>
	</div>
	
	
</form>	
<?PHP
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		echo $notice;
	
	}
	
	
	$query2 = "SELECT * FROM budget_year GROUP BY year DESC";
	$result2 = $db->query($query2);
		
	echo '<table class="table table-hover">';
	echo '<th><p class="text-center">Budget Years</p></th>';
		
	while ($row2 = $result2->fetch()) {
		
		echo '<tr>';
		echo '<td><p class="text-center">'.$row2['year'].'</p></td>';	
		echo '</tr>';
	}
	echo '</table>';
?>


</div>
</div>
</body>
</html>