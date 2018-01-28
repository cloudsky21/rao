<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_iralcpc.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>
<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){



//date
$get_date_Y = date("Y");
$get_date_m = date("m");	
$get_date_d = date("d");
	
//ALOBS

$alobs = $_POST['alobs'];
$claimant = htmlentities($_POST['claimant']);


$total  = $_POST['ira1']
		+ $_POST['ira2'] 
        + $_POST['ira3']
        + $_POST['ira4'] 
      	+ $_POST['ira5'] 
		+ $_POST['ira6'] 
        + $_POST['ira7']
        + $_POST['ira8'] 
		+ $_POST['ira9']  
        + $_POST['ira10'] 
		+ $_POST['ira11']
		+ $_POST['ira12']
		+ $_POST['ira13']
		+ $_POST['ira14']
		+ $_POST['ira15']
		+ $_POST['ira16']; 

		
		
$ira1 = $_POST['ira1'];		
$ira2 = $_POST['ira2'];		
$ira3 = $_POST['ira3'];
$ira4 = $_POST['ira4'];		
$ira5 = $_POST['ira5'];
$ira6 = $_POST['ira6'];
$ira7 = $_POST['ira7'];
$ira8 = $_POST['ira8'];
$ira9 = $_POST['ira9'];
$ira10 = $_POST['ira10'];
$ira11 = $_POST['ira11'];		
$ira12 = $_POST['ira12'];
$ira13 = $_POST['ira13'];
$ira14 = $_POST['ira14'];
$ira15 = $_POST['ira15'];
$ira16 = $_POST['ira16'];
		
$result = $db->prepare("INSERT INTO iralcpc (
yearm, 
month, 
day, 
alobs, 
claimant, 
total,
engulayan,
teenpreg,
dbaseforchildren,
pedslane,
distfaid,
drugawareness,
sportsequip,
lcpcOsupplies,
lcpcregmeet,
propwastedisp,
daycare,
childrenslaw,
daycareworkersday,
daycareworkerstraining,
fassistcicl,
pbdiversions) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$result->execute([
$get_date_Y, 
$get_date_m, 
$get_date_d, 
$alobs, 
$claimant, 
$total,
$ira1,
$ira2,
$ira3,
$ira4,
$ira5,
$ira6,
$ira7,
$ira8,
$ira9,
$ira10,
$ira11,
$ira12,
$ira13,
$ira14,
$ira15,
$ira16]);
	
	$cnt = $result->rowCount(); 
		if($cnt == "1") {
		
		unset($_POST);
		header('Location: '.$_SERVER['PHP_SELF']);
		
		}
		else 
		{
			unset($_POST);
			echo "Something is Wrong";
		}
	

}




?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RAO | IRA LCPC</title>
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
    background-color: #000;
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
	
	background-color: #5B5EA6;
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
   	width: 120%;
	font-size: 14px;
	min-width: 1200px;
	text-align: center;
	padding: 5px;
}

#tb2 th {
	
	background-color: #5B5EA6;
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
<label id="accountTitle">1% of IRA - LCPC

</label>
<div id="container">
	<div class="wrap">
		<ul>
			
			<li><a href="rao20.php">20&#37; EDF</a></li>
			<li><a href="gad.php">GAD</a></li>
			<li><a href="mdr.php">MDR</a></li>
			<li><a href="pwds.php">1% PWDs</a></li>
			<li><a href="scs.php">1% SC</a></li>
			<li><a href="1iralcpc.php" class="active">1% IRA & LCPC</a></li>
			<li><a href="none-office.php">None Office</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="export_mdr.php">Export to Excel</a>
  <a href="aip1iralcpc.php">AIP 1% of IRA-LCPC</a>
  <a href="personal_services_mmo_all.php">Personal Services</a>
  <a href="mooe_mmo_all.php">Maint. &amp; Other Operating Expenses</a>
  <a href="delete_1iralcpc.php">Delete ALOBS</a>
 
 
 
  
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

	<tr >
		<td><?PHP echo '<strong>'.date("m").'-'.date("d").'-'.date("Y").'</strong>'; ?></td>
		<td><input type="text" name="alobs" id="alobs" required maxlength="9" placeholder="00-000-00"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></tr>
	</tr>
		
	<tr>
		<td>Enhanced Gulayan sa Paaralan</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira1" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Teenage Pregnancy Awareness / Prevention</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira2" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Database for Children</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira3" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Enforcement of Pedestrian Lanes</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira4" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Distribution of First Aid and Health Kits</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira5" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Drug Awareness and Reduction</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira6" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Procurement of Sports Equipment</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira7" value ="0.00" required></td>
	</tr>
	<tr>
		<td>LCPC Office Supplies</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira8" value ="0.00" required></td>
	</tr>
	<tr>
		<td>LCPC regular meetings/trainings</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira9" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Proper Waste Disposal</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira10" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Day Care Instructional Materials</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira11" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Advocacy Children's Law</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira12" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Day Care Worker's Day</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira13" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Day Care Workker Trainings</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira14" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Financial Assistance to CICL</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira15" value ="0.00" required></td>
	</tr>
	<tr>
		<td>Assist the PB in conducting diversion proceedings</td>
		<td>&nbsp;</td>
		<td><input type="number" step="any" name="ira16" value ="0.00" required></td>
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
	<th colspan = 16>Obligations Incurred</th>
</tr>
<tr>
	<th>Enhanced Gulayan sa Paaralan</th>
	<th>Teenage Pregnancy Awareness / Prevention</th>
	<th>Database for Children</th>
	<th>Enforcement of Pedestrian Lanes</th>
	<th>Distribution of First Aid and Health Kits</th>
	<th>Drug Awareness and Reduction</th>
	<th>Procurement of Sports Equipment</th>
	<th>LCPC Office supplies</th>
	<th>LCPC regular meetings/trainings</th>	
	<th>Proper Waste Disposal</th>
	<th>Day Care Instructional Materials</th>
	<th>Advocacy Children's Law</th>
	<th>Day Care Worker's Day</th>
	<th>Day Care Workker Trainings</th>
	<th>Financial Assistance to CICL</th>
	<th>Assist the PB in conducting diversion proceedings</th>
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
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	
</tr>




<?PHP
$rs = $db->prepare("SELECT * FROM iralcpc WHERE yearm = ?");
$rs->execute([$_SESSION['budget']]);

foreach($rs as $row){
echo '<tr>';
			echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';			
			echo '<td>'.number_format($row['engulayan'],2).'</td>';
			echo '<td>'.number_format($row['teenpreg'],2).'</td>';
			echo '<td>'.number_format($row['dbaseforchildren'],2).'</td>';
			echo '<td>'.number_format($row['pedslane'],2).'</td>';
			echo '<td>'.number_format($row['distfaid'],2).'</td>';
			echo '<td>'.number_format($row['drugawareness'],2).'</td>';
			echo '<td>'.number_format($row['sportsequip'],2).'</td>';
			echo '<td>'.number_format($row['lcpcOsupplies'],2).'</td>';
			echo '<td>'.number_format($row['lcpcregmeet'],2).'</td>';
			echo '<td>'.number_format($row['propwastedisp'],2).'</td>';
			echo '<td>'.number_format($row['daycare'],2).'</td>';
			echo '<td>'.number_format($row['childrenslaw'],2).'</td>';
			echo '<td>'.number_format($row['daycareworkersday'],2).'</td>';
			echo '<td>'.number_format($row['daycareworkerstraining'],2).'</td>';
			echo '<td>'.number_format($row['fassistcicl'],2).'</td>';
			echo '<td>'.number_format($row['pbdiversions'],2).'</td>';
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
			echo '<td><strong>TOTAL:</strong></td>';
			echo '<td><strong>'.number_format(tira1(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira2(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira3(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira4(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira5(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira6(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira7(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira8(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira9(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira10(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira11(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira12(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira13(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira14(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira15(),2).'</strong></td>';
			echo '<td><strong>'.number_format(tira16(),2).'</strong></td>';
			
echo '</tr>';	

echo '<tr>';
	
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td><strong>Total Balance:</strong></td>';
		echo '<td><strong>'.number_format(tira1Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira2Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira3Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira4Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira5Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira6Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira7Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira8Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira9Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira10Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira11Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira12Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira13Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira14Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira15Bal(),2).'</strong></td>';
		echo '<td><strong>'.number_format(tira16Bal(),2).'</strong></td>';

echo '</tr>';		

echo '<tr>';
		
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td style="color:#DA413D;"><strong>Allotment:</strong></td>';
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira1allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira2allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira3allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira4allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira5allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira6allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira7allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira8allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira9allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira10allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira11allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira12allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira13allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira14allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira15allot(),2).'</strong></td>'; 
		echo '<td style="color:#DA413D;"><strong>'.number_format(tira16allot(),2).'</strong></td>'; 
		
echo '</tr>';		
?>	

</table>






</body>
</html>