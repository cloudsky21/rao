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
$get_date_Y = $_SESSION['budget'];
$get_date_m = htmlentities($_POST['month_today']);	
$get_date_d = htmlentities($_POST['day_today']);
	
//ALOBS

$alobs = $_POST['alobs'];
$claimant = htmlentities($_POST['claimant']);
$description = htmlentities($_POST['description-alobs']);

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
description, 
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
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$result->execute([
$get_date_Y, 
$get_date_m, 
$get_date_d, 
$alobs, 
$claimant, 
$description,
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
<link rel="icon" href="fav.png" rel="icon" type="image/x-icon" sizes="16x16">
<link rel="shortcut icon" href="fav.ico" type="image/x-icon" />
<style>

@media print {
    @page {
      margin: 0;
	  
    }
    body {
        height: 100%;
        width: 100%;
    }
  
}

.textc {color:#CE3175;font-weight: 900;}

html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	width: 150%;
	height: 100%;
	margin: 0;
	min-width: 2500px;
	
	
	
}


#accountTitle {
	padding: 0;
	display: block;
	margin-top: 10px;
	margin-bottom: -120px;
	margin-left: 50px;
	font-size: 36px;
	min-width: 3000px;
}	
#container {
	margin-top: 135px;
	position: relative;
	padding: 0;
	width: 200%;
	min-width: 3000px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #005960;
	min-width: 3000px;
	
}

li {
    float: left;
	
}

li a {
    display: block;
	font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}


li a:hover {
    background-color: #4CAF50;;
}
.active {
    background-color: #006400;
}
.wrap {
	
	margin:0 auto;
	text-align: center;
	
}
.login {
	
	display: block;
	position:relative;
	padding-top: 20px;
	padding-left: 10px;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	font-size: 16px;
}
#logout {
	
	margin-left: 85px;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	font-size: 16px;
	color: blue;
	float: left;
	width: 4%;
	text-decoration: none;
	
}
#logout:hover {
	
	color: #f00;
	
	
}

.tbl-wrap{
	margin-left: 200px;
	width: 40%;
	min-width: 400px;
	position: relative;
	
}



input[type=text], input[type=number]{
	border: none;
	border-bottom: 1px solid #000;
	font-size: 16px;
	padding: 5px;
}
input[type=text]:focus {
    background-color: lightblue;
}
textarea {
    width: 100%;
    height: 50px;
    padding: 5px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	
}
select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}

input[type=submit] {
	
	background-color: #4F84C4;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	height: 100%;
	width: 100%;
}


tr.borderline td {
  border-bottom:1px solid black;
 }
tr.borderlin td {
  border-top:1px solid black;
}

#tbl3 { display: none;}
#tb1 td {
	padding: 3px;
}
#tb1 td { border-bottom: 1px solid #ddd;}
#tb1 {
	
	
	display: none;
	padding: 5px;
}

#tb2 {
	
	margin-top: 10px;
	border-collapse: collapse;
   	width: 100%;
	font-size: 14px;
	min-width: 1000px;
	text-align: center;
	padding: 5px;
}

#tb2 th {
	
	background-color: #4F84C4;
    color: white;
	border: 1px solid white;
	cursor: pointer;
	padding: 3px;
}

#tb2 td {
	border-bottom: 1px solid #ddd;
}
#tb2 tr:nth-child(even){background-color: #f2f2f2} 
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #333; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 220px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}
tr.border_bottom td {
  border-bottom:1pt solid black;
}


#toggle-wrap {
	
	margin-bottom: 10px;
	margin-left: 340px;
	width: 20%;
	min-width: 3000px;
	
}


input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}



/* The navigation menu links */
.sidenav a {
    
	padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 25px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}


.tdclass {
	color: #008080;
	font-weight: 900;
}


</style>
<script src="js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.min" type="text/javascript"></script>
<script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<script type = "text/javascript" language = "javascript">

$(document).ready(function() {
            $("#alobs").mask("99-999-99");
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
			<li><a href="personal_services_mmo_all.php">MMO</a></li>
			<li><a href="personal_services_sb_all.php">SB</a></li>
			<li><a href="personal_services_mpdo_all.php">MPDO</a></li>
			<li><a href="personal_services_lcr_all.php">LCR</a></li>
			<li><a href="personal_services_mbo_all.php">MBO</a></li>
			<li><a href="personal_services_macco_all.php">MACCO</a></li>
			<li><a href="personal_services_mto_all.php">MTO</a></li>
			<li><a href="personal_services_masso_all.php">MASSO</a></li>
			<li><a href="personal_services_mho_all.php">MHO</a></li>
			<li><a href="personal_services_mswd_all.php">MSWD</a></li>
			<li><a href="personal_services_mao_all.php">MAO</a></li>
			<li><a href="personal_services_meo_all.php">MEO</a></li>
			<li><a href="personal_services_mbe_all.php">MARKET</a></li>
			<li><a href="personal_services_gs_all.php">PLAZA</a></li>
			<li><a href="rao20.php">20&#37; EDF</a></li>
			<li><a href="gad.php">GAD</a></li>
			<li><a href="mdr.php">MDR</a></li>
			<li><a href="pwds.php">1&#37; PWDs</a></li>
			<li><a href="scs.php" class="active">1&#37; SC</a></li>
			<li><a href="1iralcpc.php">1&#37; IRA & LCPC</a></li>
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
  <a href="scs.php">Automatic</a>
 
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
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

	<tr>
		<td><input type="number" style="width:10%;" name="month_today" min="01" max="12" placeholder="mm" required maxlength="2">/<input type="number" style="width:10%;" name="day_today" min="01" max="31" placeholder="dd" maxlength="2" required>/<?PHP echo $_SESSION['budget']; ?></td>
		<td><input type="text" name="alobs" id="alobs" required maxlength="9" placeholder="00-000-00"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></td>
	</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	<tr>
		<td>Description</td>
		<td>&nbsp;</td>
		<td></td>
	</tr>
	<tr>
		<td colspan=3><textarea name="description-alobs" placeholder="description here..." maxlength="200"></textarea></td>
				
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
	<th rowspan = 2>Description</th>
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
			echo '<td>'.$row['description'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';			
			echo '<td>'.number_format($row['tev'],2).'</td>';
			echo '<td>'.number_format($row['documentation'],2).'</td>';
			echo '<td>'.number_format($row['filipinoweek'],2).'</td>';
			echo '<td>'.number_format($row['healthyactivities'],2).'</td>';
			echo '<td>'.number_format($row['periodicexercise'],2).'</td>';
			echo '<td>'.number_format($row['visitslgus'],2).'</td>';
			echo '<td>'.number_format($row['orgeffectiviness'],2).'</td>';
			echo '<td>'.number_format($row['office_maint'],2).'</td>';
			echo '<td>'.number_format($row['oplan_eval'],2).'</td>';
			echo '<td>'.number_format($row['yearendperformance'],2).'</td>';
			echo '<td>'.number_format($row['ophelpdesks'],2).'</td>';
			
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
	<td>&nbsp;</td>
		
</tr>

<?PHP



echo '<tr>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
			echo '<td><strong>TOTAL:</strong></td>';
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
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td><strong>Total Balance:</strong></td>';
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
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td style="color:#DA413D;"><strong>Allotment:</strong></td>';
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






</body>
</html>