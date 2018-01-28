<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_sc.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){



//date
$get_date_Y = date("Y",strtotime($_POST['date']));
$get_date_m = date("m",strtotime($_POST['date']));
$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS

$alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);
$claimant = htmlentities($_POST['claimant'], ENT_QUOTES);

$total  = $_POST['sc1']
		+ $_POST['sc2'] 
        + $_POST['sc3']
        + $_POST['sc4'] 
      	+ $_POST['sc5'] 
		+ $_POST['sc6'] 
        + $_POST['sc7']
        + $_POST['sc8'] 
		+ $_POST['sc9']  
        + $_POST['sc10'] 
		+ $_POST['sc11']; 

$sc1 = $_POST['sc1'];		
$sc2 = $_POST['sc2'];		
$sc3 = $_POST['sc3'];
$sc4 = $_POST['sc4'];		
$sc5 = $_POST['sc5'];
$sc6 = $_POST['sc6'];
$sc7 = $_POST['sc7'];
$sc8 = $_POST['sc8'];
$sc9 = $_POST['sc9'];
$sc10 = $_POST['sc10'];
$sc11 = $_POST['sc11'];		


		
$result = $db->prepare("INSERT INTO sc (
yearm, 
month, 
day, 
alobs, 
claimant, 
total,
tev,
documentation,
filipinoweek,
healthyactivities,
periodicexercise,
visitslgus,
orgeffectiviness,
office_maint,
oplan_eval,
yearendperformance,
ophelpdesks
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$result->execute([
$get_date_Y, 
$get_date_m, 
$get_date_d, 
$alobs, 
$claimant, 
$total,
$sc1,
$sc2,
$sc3,
$sc4,
$sc5,
$sc6,
$sc7,
$sc8,
$sc9,
$sc10,
$sc11]);
	
	$cnt = $result->rowCount(); 
		if($cnt == "1") {
		
		unset($_POST);
		header('Location: '.$_SERVER['PHP_SELF']);
		
		}
		else 
		{
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
<title>RAO | Senior Citizen</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="extra.css" />
<script src="js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.min" type="text/javascript"></script>
<script type = "text/javascript" language = "javascript">

$(document).ready(function() {
        $("#hide").click(function(){
        $("#tb1").hide();
		});
		$("#show").click(function(){
        $("#tb1").show();
    
});
    });
	
</script>


<script>


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</head>
<body>
<label id="accountTitle">5% Senior Citizen

</label>
<div id="container">
	<div class="wrap">
		<ul>
			
			<li><a href="rao20.php">20&#37; EDF</a></li>
			<li><a href="gad.php">GAD</a></li>
			<li><a href="mdr.php">MDR</a></li>
			<li><a href="pwds.php">1% PWDs</a></li>
			<li><a href="scs.php" class="active">1% SC</a></li>
			<li><a href="1iralcpc.php">1% IRA & LCPC</a></li>
			<li><a href="none-office.php">None Office</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="export_mdr.php">Export to Excel</a>
  <a href="aip1SP.php">AIP PWDs &amp; SC</a>
  <a href="personal_services_mmo_all.php">Personal Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="delete_scs.php">Delete ALOBS</a>
  
 
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span>
<div id="toggle-wrap">
<button id="hide">&#9776; Hide &nbsp;</button>
<button id="show">&#9776; Show &nbsp;</button>
</div>
<form method ="POST" action="" name="form1" autocomplete="off">
<div class = "tbl-wrap">
<table id="tb1">
	<tr>
		<td>Date</td>
		<td>ALOBS</td>
		<td>Claimant</td>
	</tr>

	<tr >
		<td><strong><input type="date" name="date" value="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>"></strong></td>
		<td><input type="number" name="alobs" id="alobs" required min="0" step="any" max=999></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></td>
	</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	
	<tr>
		<td>Continuing Education for Older Persons <br>&amp; Older Person Empowerment Activities (TEV)</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc1" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Documentation of Older Person & Related Events</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc2" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Elderly Filipino Week Celebration</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc3" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Older Person Camaraderie, <br>Wellness and Healthy Aging Activities</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc4" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Physical Fitness Periodic Exercise</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc5" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Exchange visit to other LGUs-SCOs</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc6" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Organizational Effectiveness</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc7" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Functional & Decent Office Maintenance</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc8" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Mid Year Oplan Evaluation</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc9" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Year End Performance Review and Analysis</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc10" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Maintenance of Older Person's Help Desk Office</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="sc11" value ="0.00" required></td>
	</tr>
	<tr>
		<td colspan=3><input type="submit" value="Submit" name="submit"></td>
		
	</tr>
</table>

</div>

</form>
	
<table id="tb2">
<tr>
	<th rowspan = 2>DATE</th>
	<th rowspan = 2>Ref.<br>AO/AA/<br>ALOBS<br></th>
	<th rowspan = 2>Claimant</th>
	<th rowspan = 2>Total Obligation</th>
	<th colspan = 11>Obligations Incurred</th>
</tr>
<tr>
	<th>Continuing Education for Older Persons <br>&amp; Older Person Empowerment Activities (TEV)</th>
	<th>Documentation of Older Person &amp; Related Events</th>
	<th>Elderly Filipino Week Celebration</th>
	<th>Older Person Camaraderie, <br>Wellness and Healthy Aging Activities</th>
	<th>Physical Fitness Periodic Exercise</th>
	<th>Exchange visit to other LGUs-SCOs</th>
	<th>Organizational Effectiveness</th>
	<th>Functional &amp; Decent Office Maintenance</th>
	<th>Mid Year Oplan Evaluation</th>	
	<th>Year End Performance Review and Analysis</th>
	<th>Maintenance of Older Person's Help Desk Office</th>
</tr>

<tr>
	
	
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>




<?PHP
$rs = $db->prepare("SELECT * FROM sc WHERE yearm = ?");
$rs->execute([$_SESSION['budget']]);

foreach($rs as $row){
echo '<tr>';
			echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';			
			
			if($row['tev'] != "0.00") { echo '<td>'.number_format($row['tev'],2).'</td>'; } else echo '<td>&nbsp;</td>';
			if($row['documentation'] != "0.00") { echo '<td>'.number_format($row['documentation'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['filipinoweek'] != "0.00") { echo '<td>'.number_format($row['filipinoweek'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['healthyactivities'] != "0.00") { echo '<td>'.number_format($row['healthyactivities'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['periodicexercise'] != "0.00") { echo '<td>'.number_format($row['periodicexercise'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['visitslgus'] != "0.00") { echo '<td>'.number_format($row['visitslgus'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['orgeffectiviness'] != "0.00") { echo '<td>'.number_format($row['orgeffectiviness'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['office_maint'] != "0.00") { echo '<td>'.number_format($row['office_maint'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['oplan_eval'] != "0.00") { echo '<td>'.number_format($row['oplan_eval'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['yearendperformance'] != "0.00") { echo '<td>'.number_format($row['yearendperformance'],2).'</td>';} else echo '<td>&nbsp;</td>';
			if($row['ophelpdesks'] != "0.00") { echo '<td>'.number_format($row['ophelpdesks'],2).'</td>';} else echo '<td>&nbsp;</td>';
			
echo '</tr>';
}	
?>
<tr>

	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
		
</tr>

<?PHP



echo '<tr>';

			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>Grand TOTAL:</strong></td>';
			echo '<td><strong>'.number_format(get_total_obligation(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc1(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc2(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc3(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc4(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc5(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc6(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc7(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc8(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc9(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc10(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tsc11(),2).'</strong></td>';
			
echo '</tr>';	

echo '<tr>';
	
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td><strong>Grand Total Balance:</strong></td>';
		echo '<td><strong>'.number_format(get_obligation_bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc1Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc2Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc3Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc4Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc5Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc6Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc7Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc8Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc9Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc10Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tsc11Bal(),2).'</strong></td>';

echo '</tr>';		

echo '<tr>';
	
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td style="color:#DA413D;"><STRONG>Allotment:</STRONG></td>';
		echo '<td style="color:#DA413D;"><strong>'.number_format(get_appropriation(),2).'</strong></td>';
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc1allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc2allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc3allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc4allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc5allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc6allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc7allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc8allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc9allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc10allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tsc11allot(),2).'</strong></td>'; 
		
echo '</tr>';		
?>	

</table>





</div>
</body>
</html>