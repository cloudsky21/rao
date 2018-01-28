<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("fValues.php");


date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>

<?PHP

if($_SERVER["REQUEST_METHOD"]=="POST"){

	
	


	
}

?>



















<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Continuing</title>
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
	width: 100%;
	height: 100%;
	margin: 0;
	overflow: auto;
	
	
	
}


#accountTitle {
	padding: 0;
	display: block;
	margin-top: 10px;
	margin-bottom: -120px;
	margin-left: 50px;
	font-size: 36px;
	min-width: 1000px;
}	
#container {
	margin-top: 135px;
	position: relative;
	padding: 0;
	width: 100%;
	
	
	
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #88B04B;
	min-width: 1000px;
	
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
	
	display: none;
	
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
	margin-left: 340px;
	width: 50%;
	min-width: 500px;
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
	
	background-color: #4CAF50;
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
}

#tb2 th {
	
	background-color: #4CAF50;
    color: white;
	border: 1px solid white;
	cursor: pointer;
	
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
	min-width: 1000px;
	
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
<label id="accountTitle">Continuing Program

</label>
<div id="container">
	  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="export_cont.php">Export to Excel</a>
  <a href="addtable.php">Add Tables</a>
  
 
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>
<div id="toggle-wrap">
<button id="hide">&#9776; Hide &nbsp;</button>
<button id="show">&#9776; Show &nbsp;</button>
</div>
<form method ="POST" action="" name="form1"  autocomplete="off">
<div class = "tbl-wrap">
<table id="tb1">
	<tr>
		<td>Date</td>
		<td>ALOBS</td>
		<td>Claimant</td>
	</tr>

	<tr >
		<td><input type="number" style="width:10%;" name="month_today" min="01" max="12" placeholder="mm" required maxlength="2">/<input type="number" style="width:10%;" name="day_today" min="01" max="31" placeholder="dd" maxlength="2" required>/<input type="number" style="width:10%;" name="year_today" min="01" max="31" placeholder="yy" maxlength="2" required></td>
		<td><input type="text" name="alobs" id="alobs" required maxlength="9" placeholder="00-000-00"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></tr>
	</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	<tr>
		<td>Description</td>
		<td>&nbsp;</td>
		
	</tr>
	<tr>
		<td colspan=3><textarea name="description-alobs" placeholder="description here..." maxlength="200"></textarea></td>
				
	</tr>

<?PHP 
	$result= $db->query('SHOW COLUMNS FROM cont WHERE Type="decimal(20,2)"');
	$result->execute();
	
	foreach($result as $row){
	echo '<tr>';
	echo '<td>'.$row.'</td>';
	}
	
?>		
	<td><input type="number" step="any" name="c1" value ="0.00" required></td>
	</tr>
	

		<tr>
		<td colspan=3><input type="submit" value="Submit" name="submit_co"></td>
		
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
	
	<?PHP 
	$i = colCnt();
	echo '<th colspan ="'.$i.'">Obligations Incurred</th>';
	?>
	
</tr>
<tr>
	<?PHP 
	$result= $db->query('SHOW COLUMNS FROM cont WHERE Type="decimal(20,2)"');
	$result->execute();
	
	$fieldname = $result->fetchAll(PDO::FETCH_COLUMN);
	foreach($fieldname as $row){
	
	
	echo '<th>'. strtoupper($row).'</th>';
	
	}
	$z = 0;
	
	?>
	
<?PHP






$rsys = $db->prepare("SELECT * FROM cont WHERE yearm=?");
$rsys->execute([$_SESSION['budget']]);

while ($fn = $rsys->fetch(PDO::FETCH_NUM)){
	
	
	echo '<tr>';
	echo '<td>'.$fn[1].'/'.$fn[2].'/'.$fn[0].'</td>';
	echo '<td>'.$fn[3].'</td>';
	echo '<td>'.$fn[4].'</td>';
	echo '<td>'.$fn[5].'</td>';
	echo '<td>'.$fn[6].'</td>';
	echo '<td>'.$fn[7].'</td>';
	echo '<td>'.$fn[8].'</td>';
	echo '<td>'.$fn[9].'</td>';
	
}



?>	
	
	
</tr>




	<td>&nbsp;</td>	
	<td>&nbsp;</td>	
	<td>&nbsp;</td>	
	<td>Total</td>
<?PHP
	foreach($fieldname as $row2){ 
	$xx = a($fieldname[$z]);
	echo '<td>'.$xx.'</td>';
	$z++;
	
	}
?>
	
	

 
 

	
	

</tr>
</table>






</body>
</html>