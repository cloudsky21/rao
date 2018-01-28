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

$query = "DELETE FROM mmoco WHERE alobs = ?";
$rs = $db->prepare($query);
$rs->execute([$post_alobs]);


}


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete CO | Mayors Office</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="delete.css">
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
<label id="accountTitle">Capital Outlay - Mayors Office
</label>
<div id="container">
	<div class="wrap">
		<ul>
			<li><a href="delete_co_mmo.php"  class="active">MMO</a></li>
			<li><a href="delete_co_sb.php">SB</a></li>
			<li><a href="delete_co_mpdo.php">MPDO</a></li>
			<li><a href="delete_co_lcr.php">LCR</a></li>
			<li><a href="delete_co_mbo.php">MBO</a></li>
			<li><a href="delete_co_macco.php">MACCO</a></li>
			<li><a href="delete_co_mto.php">MTO</a></li>
			<li><a href="delete_co_masso.php">MASSO</a></li>
			<li><a href="delete_co_mho.php">MHO</a></li>
			<li><a href="delete_co_mswd.php">MSWD</a></li>
			<li><a href="delete_co_mao.php">MAO</a></li>
			<li><a href="delete_co_meo.php">MEO</a></li>
			<li><a href="delete_co_mbe.php">MARKET</a></li>
			<li><a href="delete_co_gs.php">PLAZA</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
  <a href="personal_services_mmo_all.php">Personal Services</a>
  <a href="mooe_mmo_all.php">Maint. and Other Operating Expenses</a>
  <a href="co_mmo_all.php">Capital Outlay</a>
  
 
  
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
		<td colspan=3><input type="submit"></td>
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
	<th>Claimant</th>
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
$result = $db->prepare("SELECT * FROM mmoco WHERE yearm =?");
$result->execute([$yearTransact]);
 
  foreach ($result as $row) {
        echo '<tr>';
			echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
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