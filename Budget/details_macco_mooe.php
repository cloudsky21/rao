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

$result = $db->prepare("SELECT * FROM maccomooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$description = $row['description'];
$tev = $row['tev'];
$training = $row['training']; 
$postage = $row['postage'];
$officeSupplies = $row['officeSupplies']; 
$auditing = $row['auditing_services'];
$others_maint = $row['others_maint']; 
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
				if($training !="0.00"){ echo'<li class="list-group-item">Training &amp; Seminar Expenses<span class="badge">'.number_format($training,2).'</span></li>';} else{} 
				if($postage !="0.00"){ echo'<li class="list-group-item">Postage and Deliveries<span class="badge">'.number_format($postage,2).'</span></li>';} else{} 
				if($auditing !="0.00"){ echo'<li class="list-group-item">Auditing Services<span class="badge">'.number_format($auditing,2).'</span></li>';} else{} 
				if($officeSupplies !="0.00"){ echo'<li class="list-group-item">Office Supplies<span class="badge">'.number_format($officeSupplies,2).'</span></li>';} else{} 
				if($others_maint !="0.00"){ echo'<li class="list-group-item">Other Maintenance and Operating Expenses<span class="badge">'.number_format($others_maint,2).'</span></li>';} else{} 
				
				?>
			</ul>
			</div>	
