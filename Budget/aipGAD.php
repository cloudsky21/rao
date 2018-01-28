<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("check_aip.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}


$checkTableExist = get_table_exist_gad();

if($checkTableExist == '0'){

$isLoaded = check_if_loaded_gad_aip();
		if ($isLoaded > 0){
	
			
			header("location: aipGAD_readonly");
			exit();
			}
			
}
else
{
	header("location: aipgadsetup");
	exit();
}
$tot = "";
?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){


	foreach($_POST['amounts'] as $key =>$value){
	
	$amounts[$key] = htmlentities($value, ENT_QUOTES); 
}
//$filter_amounts= preg_replace('/[^a-z\-]/', '0', $amounts);

$tot = array_sum($amounts);

$tablename = "gad".$_SESSION['budget'];
$get_year = $_SESSION['budget'];
$sig = "Erwin C. Ocaña";

	$result = $db->prepare("INSERT INTO `$tablename` (year,signatory,total) VALUES (?,?,?)");
	
	$result->execute([$_SESSION['budget'], $sig, $tot]);
	
		$get_codes = $_POST['idcodes'];
		
	
	if(($rwc = $result->rowCount())=="1"){
		
		
		foreach($_POST['id_count'] as $key =>$id){
		$result = $db->prepare("UPDATE `$tablename` SET `$get_codes[$key]` = '".$amounts[$key]."' WHERE year = ?");
		$result->execute([$get_year]);
		
		}
		
		unset($_POST);
		header("location: aipGAD_readonly");
		exit();
	}
	
	else {
		unset($_POST);
		header('Location: '.$_SERVER['PHP_SELF']);
		
	}
	
	

	
	

	
	
	
	
	}


?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
<title>AIP |  Gender and Development</title>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
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
			
			<li><a href="aipgadsetup">Setup Table</a></li>
			<li><a href="aipgadupdate">Update Column</a></li>
					
		
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
	<h2>Programmed Appropriation and Obligation</h2>
  </div>
  
</div>
<form action="" method="POST">
<label>OFFICE &#47; SPECIAL PURPOSE APPROPRIATION: <STRONG>Gender And Development</strong></label>  
<div class="panel">
	<div class="panel panel-default">
	<table class="table table-condensed table-hover table-striped table-bordered">
		<thead>
			<th>#</th>
			<th>Object of Expenditure <br>&#40;1&#41;</th>
			<th>Budget Year Proposed<br>&#40;<?PHP echo $_SESSION['budget']; ?>&#41;</th>
		</thead>
	
	<?PHP
try{
	$tablename = "gad_list_".$_SESSION['budget']; 
	$result = $db->prepare("SELECT id,code,propername FROM `$tablename` WHERE 1");
	$result->execute();
	
	$cnt = $result->rowCount();
	
	if($cnt>0){
		foreach($result as $list){
			
			
			echo '<tr>';
			echo '<td><input type="hidden" name="id_count[]" value="'.$list['id'].'">'.$list['id'].'</td>';
				echo '<td><input type="hidden" name="idcodes[]" value="'.$list['code'].'">'.$list['propername'].'</td>';
				echo '<td><input type="number" name="amounts[]" placeholder="0.00" step="any" class="form-control"></td>';
			echo '</tr>';
		}		
		
		echo '<tr>
			<td colspan="3"><button type="submit" name="SUBMIT" class="btn btn-primary form-control">Submit</button></td>
		</tr>';
	}
	
	else {
		
		echo '<tr>
			<td colspan="3"><p>No programs added. Proceed to <strong><i>Settings > Setup Table</i></strong> to add programs from previous budget year or <strong><i>Settings > Update Column</i></strong> to add new program.</p></td>
		</tr>';
		
	}
}
catch(Exception $e){
	header("location: aipgadsetup");
	
}
	
	?>
	
		
	</table>
	</div>
</div>	
</form>
</div>
</body>
</html>