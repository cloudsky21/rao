<?PHP 
session_start();
include("insertLog.php");
include("config.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

mysqli_set_charset($db,"utf8");

?>

<?PHP

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(!empty($_POST['id']) && !empty($_POST['department_code']) && !empty($_POST['department_name']) && !empty($_POST['department_head'])){ 
	
	
	
	
	
	
	
	
	$deptid = $_POST['id'];
	$code = $_POST['department_code'];
	$dname = $_POST['department_name'];
	$dhead =$_POST['department_head'];
	$dsector = $_POST['sector'];
	
	foreach($_POST['id'] as $count => $id){
	
	if($_POST['sector'][$count] == "GENERAL PUBLIC SERVICES"){
		$refCode = "1000";
	}
	else if($_POST['sector'][$count] == "SOCIAL SERVICES"){
		$refCode = "4000";
	}
	else if($_POST['sector'][$count] == "ECONOMIC DEVELOPMENT"){
		$refCode = "8000";
	}
	else if($_POST['sector'][$count] == "ENVIRONMENT DEVELOPMENT "){
		$refCode = " ";
	}
	else if($_POST['sector'][$count] == "OTHER SERVICES"){
		$refCode = "9000";
	}
		
    $query2 = "UPDATE aip SET departments = '".$code[$count]."', deptName = '".$dname[$count]."', headOfOffice='".$dhead[$count]."', sector = '".$dsector[$count]."', refCode = '".$refCode."' WHERE id = '".$deptid[$count]."'";
	$result2 = mysqli_query($db,$query2);
}
	
}

unset($_POST);
header("location: ".$_SERVER['PHP_SELF']);
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
<title>Department Heads</title>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="home.php">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
	<ul class="nav navbar-nav">
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="home.php">Home
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_year.php">Budget Year</a></li>
          <li><a href="aipMMO.php">AIP</a></li>
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
     
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
		<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		 <li><a href="heads.php">Department Head/s List</a></li>
		
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
</nav>

<div class="container-fluid">
<form method="post" action="" >
<div id="table-wrap" class="table-responsive" style="margin-top: 100px;">
<table class="table table-condensed table-hover table-striped"> 
<thead>
	<th></th>
	<th><p>CODE</p></th>
	<th><p>DEPARTMENT</p></th>
	<th><p class="text-center">HEAD OF OFFICE</p></th>
	<th><p class="text-center">SECTOR</p></th>
</thead>
<?PHP
	$sbudget = $_SESSION['budget'];
	$query = "SELECT id, departments, deptName, headOfOffice, sector FROM aip WHERE Year = '$sbudget'";
	$result = mysqli_query($db,$query);
	$count = mysqli_num_rows($result);
	
	if($count>0){
	while ($row = mysqli_fetch_assoc($result)) {
		
			echo '<tr>';
			echo '<td><strong><input type="hidden" name="id[]" value="'.$row['id'].'" class="form-control"></td>';
			echo '<td><input type="hidden" id ="department_code" name="department_code[]" value="'.$row['departments'].'"  class="form-control">'.$row['departments'].'</td>';
			echo '<td><strong><input type="hidden" id="department_name" name="department_name[]" value="'.$row['deptName'].'"  class="form-control">'.$row['deptName'].'</strong></td>';			
			echo '<td><input type="text" id="department_head" name="department_head[]" value="'.$row['headOfOffice'].'" class="form-control"></td>';
			echo '<td><select class="form-control" name="sector[]" required>';
?>			
							<option value="GENERAL PUBLIC SERVICES" <?PHP if($row['sector'] == "GENERAL PUBLIC SERVICES"){ echo 'selected'; } ?>>General Public Services</option>
							<option value="SOCIAL SERVICES" <?PHP if($row['sector'] == "SOCIAL SERVICES"){ echo 'selected';} ?>>Social Services</option>
							<option value="ECONOMIC DEVELOPMENT" <?PHP if($row['sector'] == "ECONOMIC DEVELOPMENT"){ echo 'selected';} ?>>Economic Development</option>
							<option value="ENVIRONMENT DEVELOPMENT" <?PHP if($row['sector'] == "ENVIRONMENT DEVELOPMENT"){ echo 'selected';} ?>>Environment Development</option>
							<option value="OTHER SERVICES" <?PHP if($row['sector'] == "OTHER SERVICES"){ echo 'selected';} ?>>Other Services</option>
						</select>
			
			
			
			
<?PHP			
			echo '</td>';
			echo '</tr>';
		
	}
	
	
	echo '<tr>';
	echo '<td colspan="5"><button type="submit" name="update" class="form-control btn-success">Save Changes</button></td>';
	echo '</tr>';
	
	}
	
	
	
	
	
	
	
	
	



	
	
?>	
	
<tbody>

</tbody>	
</table>
</div>
</form>
</div>
</body>
</html>