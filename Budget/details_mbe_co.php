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

$result = $db->prepare("SELECT * FROM mbeco WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
$claimant = $row['claimant']; 
$description = $row['description'];

$co = $row['capital_outlay'];


	
}

?>



			<table class="table table-condensed table-bordered">
				<tbody>
					<tr>
						<td><label>Transaction Date</label><p><?PHP echo $transact; ?></p></td>
						<td><label>ALOBS</label><p style="color: #DC4C46"><?PHP echo $alobs; ?></p></td>
						<td><label>Claimant</label><p><?PHP echo $claimant; ?></p></td>
					</tr>
					<tr>
						<td colspan="3"><label>Description</label><p><?PHP echo $description ?></p></td>
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
