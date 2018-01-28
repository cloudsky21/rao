<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_ps_mmo.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');


?>

<?PHP

$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];

$result = $db->prepare("SELECT month, claimant, day, yearm, coMMO_continuing,total FROM cont WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$co = $row['coMMO_continuing'];
$dtotal = $row['total'];
	
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
			<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
			
	</head>
<body>
	<div class="container-fluid">
		<div class="table-responsive">	
			<table class="table table-condensed table-bordered">
				<tbody>
					<tr>
						<td><label>Transaction Date</label><p><?PHP echo $transact; ?></p></td>
						<td><label>ALOBS</label><p style="color: #DC4C46"><?PHP echo $alobs; ?></p></td>
						<td><label>Claimant</label><p><?PHP echo $claimant; ?></p></td>
						<td><label>TOTAL: </label><p><span class="badge"><?PHP echo number_format($dtotal,2); ?></span></p></td>
						
					</tr>
				</tbody>
			</table>
			
			<div style="width: 70%;">
			<ul class="list-group">
				<?PHP 
				if($co !="0.00"){ echo'<li class="list-group-item">Capital Outlay<span class="badge">'.number_format($co,2).'</span></li>';} else{} 
								
				?>
			</ul>
			</div>	
		</div>
		
	</div>
</body>
</html>