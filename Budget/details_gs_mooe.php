<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');


?>

<?PHP

$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];

$result = $db->prepare("SELECT * FROM gsmooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$description = $row['description'];

$tev = $row['tev'];
$supplies = $row['officeSupplies']; 
$water = $row['water'];
$electricity = $row['electricity']; 
$gas = $row['gasoline'];
$mm = $row['motor_vehicle_maint'];
$dtotal = $row['total'];
	
}

?>



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
				if($tev !="0.00"){ echo'<li class="list-group-item">Travelling Expenses<span class="badge">'.number_format($tev,2).'</span></li>';} else{} 
				if($supplies !="0.00"){ echo'<li class="list-group-item">Office Supplies<span class="badge">'.number_format($supplies,2).'</span></li>';} else{} 
				if($water !="0.00"){ echo'<li class="list-group-item">Water<span class="badge">'.number_format($water,2).'</span></li>';} else{} 
				if($electricity !="0.00"){ echo'<li class="list-group-item">Electricity<span class="badge">'.number_format($electricity,2).'</span></li>';} else{} 
				if($gas !="0.00"){ echo'<li class="list-group-item">Gasoline, Oil &amp; Lubricants<span class="badge">'.number_format($gas,2).'</span></li>';} else{} 
				if($mm !="0.00"){ echo'<li class="list-group-item">Motor Vehicle<br> Maintenance<span class="badge">'.number_format($mm,2).'</span></li>';} else{} 
				?>
			</ul>
			</div>	
