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

$result = $db->prepare("SELECT * FROM mtomooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$description = $row['description'];
$tev = $row['tev'];
$training = $row['training']; 
$postage = $row['postage'];
$telephone = $row['telephone_telegraph'];
$fi = $row['fidelity_insurance'];
$aforms = $row['accountable_forms'];
$supplies = $row['officeSupplies']; 
$it = $row['it_equip_maint'];
$others = $row['others_maint']; 
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
				if($telephone !="0.00"){ echo'<li class="list-group-item">Telephone / Telegraph and Internet<span class="badge">'.number_format($telephone,2).'</span></li>';} else{} 
				if($fi !="0.00"){ echo'<li class="list-group-item">Fedility Bond Premium & Insurance Premium<span class="badge">'.number_format($fi,2).'</span></li>';} else{} 
				if($aforms !="0.00"){ echo'<li class="list-group-item">Accountable Forms Expenses<span class="badge">'.number_format($aforms,2).'</span></li>';} else{} 
				if($supplies !="0.00"){ echo'<li class="list-group-item">Office Supplies<span class="badge">'.number_format($supplies,2).'</span></li>';} else{} 
				if($it !="0.00"){ echo'<li class="list-group-item">Repairs and Maintenance<br>- IT Equipment and Software<span class="badge">'.number_format($it,2).'</span></li>';} else{} 
				if($others !="0.00"){ echo'<li class="list-group-item">Other Maintenance <br>and Operating Expenses<span class="badge">'.number_format($others,2).'</span></li>';} else{} 
				?>
			</ul>
			</div>	
