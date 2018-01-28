<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");


date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

?>




<?PHP


if($_SERVER["REQUEST_METHOD"]=="POST"){





$post_alobs = htmlentities($_POST['alobs']);

	
//numbers	

$query = "DELETE FROM psmto WHERE alobs = ?";
$rs = $db->prepare($query);
$rs->execute([$post_alobs]);


}


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete PS | Mun. Treasurers Office</title>
<link rel="icon" href="fav.png" rel="icon" type="image/x-icon" sizes="16x16">
<link rel="shortcut icon" href="fav.ico" type="image/x-icon" />


<style>

html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	width: 100%;
	height: 100%;
	margin: 0;
	
	
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
    background-color: #333;
	min-width: 1000px;
	width: 100%
	
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
	
	margin-right: 10px;
	text-align: center;
	
}
.login {
	
	display: block;
	position:relative;
	padding-top: 20px;
	padding-left: 10px;
	font-size: 16px;
}


.tbl-wrap{
	margin-left: 200px;
	width: 50%;
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

#tb1 td {
	padding: 3px;
}
#tb1 {
	
	padding: 5px;
}

#tb2 {
	
	margin-top: 10px;
	border-collapse: collapse;
   	width: 100%;
	font-size: 14px;
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
<label id="accountTitle">Personel Services - MTO - Delete ALOBS
</label>
<div id="container">
	<div class="wrap">
		<ul>
			<li><a href="delete_ps_mmo.php">MMO</a></li>
			<li><a href="delete_ps_sb.php">SB</a></li>
			<li><a href="delete_ps_mpdo.php">MPDO</a></li>
			<li><a href="delete_ps_lcr.php">LCR</a></li>
			<li><a href="delete_ps_mbo.php">MBO</a></li>
			<li><a href="delete_ps_macco.php">MACCO</a></li>
			<li><a href="delete_ps_mto.php"  class="active">MTO</a></li>
			<li><a href="delete_ps_masso.php">MASSO</a></li>
			<li><a href="delete_ps_mho.php">MHO</a></li>
			<li><a href="delete_ps_mswd.php">MSWD</a></li>
			<li><a href="delete_ps_mao.php">MAO</a></li>
			<li><a href="delete_ps_meo.php">MEO</a></li>
			<li><a href="delete_ps_mbe.php">MARKET</a></li>
			<li><a href="delete_ps_gs.php">PLAZA</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="personal_services_mto_all.php">Personal Services</a>
  <a href="mooe_mto_all.php">Maint. and Other Operating Expenses</a>
  <a href="co_mto_all.php">Capital Outlay</a>
  
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>

<form method ="POST" action="" name="form1">
<div class = "tbl-wrap">
<table id="tb1">
	<tr>
		<td>ALOBS</td>
	</tr>

	<tr>
		<td><input type="text" name="alobs" id="alobs" required maxlength="9" placeholder="00-000-00"></td>
		<td colspan=3><input type="submit" value="Submit"></td>
	</tr>
</table>

</div>




</form>
<table id="tb2">
<tr>
	<th>DATE</th>
	<th>Ref.<br>
					AO/AA/<br>
					ALOBS<br>
							</th>
	<th >Claimant</th>
	<th>Description</th>
	<th>Total Obligation</th>
</tr>


<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>	
	
<?PHP
$yearTransact = $_SESSION['budget'];
$result = $db->prepare("SELECT * FROM psmto WHERE year_transact =?");
$result->execute([$yearTransact]);
 
  foreach ($result as $row) {
        echo '<tr>';
			echo '<td>'.$row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.$row['description'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';
			
		echo '</tr>';
		}
		

 ?>
	

 
</table>






</body>
</html>