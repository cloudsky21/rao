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

$result = $db->prepare("SELECT * FROM mmomooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$description = $row['description'];
$tev = $row['tev'];
$training = $row['training']; 
$telephone = $row['telephone']; 
$postage = $row['postage'];
$insurance_p = $row['insurance_p']; 
$fidelity_b = $row['fidelity_b'];
$officeSupplies = $row['officeSupplies']; 
$gasoline = $row['gasoline']; 
$motor_maint = $row['motor_maint'];
$officeEquip_maint = $row['officeEquip_maint']; 
$confidential = $row['confidential'];
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
				if($telephone !="0.00"){ echo'<li class="list-group-item">Telephone / Telegraph and Internet<span class="badge">'.number_format($telephone,2).'</span></li>';} else{} 
				if($postage !="0.00"){ echo'<li class="list-group-item">Postage and Deliveries<span class="badge">'.number_format($postage,2).'</span></li>';} else{} 
				if($insurance_p !="0.00"){ echo'<li class="list-group-item">Insurance Premium<span class="badge">'.number_format($insurance_p,2).'</span></li>';} else{} 
				if($fidelity_b !="0.00"){ echo'<li class="list-group-item">Fidelity Bond Premium<span class="badge">'.number_format($fidelity_b,2).'</span></li>';} else{} 
				if($officeSupplies !="0.00"){ echo'<li class="list-group-item">Office Supplies<span class="badge">'.number_format($officeSupplies,2).'</span></li>';} else{} 
				if($gasoline !="0.00"){ echo'<li class="list-group-item">Gasoling, Oil &amp; Lubricants<span class="badge">'.number_format($gasoline,2).'</span></li>';} else{} 
				if($motor_maint !="0.00"){ echo'<li class="list-group-item">Motor Vehicle Maintenance<span class="badge">'.number_format($motor_maint,2).'</span></li>';} else{} 
				if($officeEquip_maint !="0.00"){ echo'<li class="list-group-item">Office Equipment Maintenance<span class="badge">'.number_format($officeEquip_maint,2).'</span></li>';} else{} 
				if($confidential !="0.00"){ echo'<li class="list-group-item">Confidential and Intelligence Expenses<span class="badge">'.number_format($confidential,2).'</span></li>';} else{} 
				if($others_maint !="0.00"){ echo'<li class="list-group-item">Other Maintenance and Operating Expenses<span class="badge">'.number_format($others_maint,2).'</span></li>';} else{} 
				
				?>
			</ul>
			</div>	
