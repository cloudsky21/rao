<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

$posted_alobs = htmlentities($_POST['rowid']);

$result = $db->prepare("SELECT * FROM cont WHERE alobs = ? AND yearm = ?");
$result->execute([$posted_alobs, $_SESSION['budget']]);

foreach ($result as $row){
	
$yt = $row['yearm'];	
$mt = $row['month'];
$dt = $row['day'];

$claimant = $row['claimant']; 
$co = $row['coMMO_continuing'];

$dtotal = $row['total']; 

}


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
	<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>	
<body>
<div class="container-fluid">

							<table class="table table-condensed table-hover">
<tbody>
	<tr>
		<td>Date</td>
		<td>ALOBS</td>
		<td>Claimant</td>
	</tr>

	<tr >
		<td><strong><input type="date" name="date" value="<?PHP echo $yt.'-'.$mt.'-'.$dt; ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" class="form-control"></strong></td>
		<td><input type="number" name="alobs" id="alobs" required min=0 step="any" max=999  class="form-control" value="<?PHP echo substr($posted_alobs,3,3); ?>"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required  class="form-control" value="<?PHP echo $claimant;?>"></td>
	</tr>

	<tr>
		<tr>
		<td>Capital Outlay</td>
		<td class="textc"></td>
		<td><input type="number" step="any" name="co"  class="form-control" value="<?PHP echo $co; ?>"></td>
	</tr>
	
	
</tbody>	
</table>



<input type="hidden" name="alobs_edit" value="<?PHP echo $posted_alobs; ?>">



</div>
</body>
</html>