<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

$table="rlcpc".$_SESSION['budget'];
$table_list_20 = "lcpc_list_".$_SESSION['budget'];
?>

<?PHP

$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];


			
			
				$result = $db->prepare("SELECT * FROM `$table` WHERE alobs = ? AND yearm = ?");
				$result->execute([$alobs, $year]);

					foreach ($result as $row){
	
						$transact = $row['month'].'/'.$row['day'].'/'.$row['yearm']; 
						$claimant = $row['claimant']; 
						$description = $row['description'];
						$code = $row['code'];
						$total = $row['total'];
						
						
						
					
	
		
		
			

}
		
		$res = $db->prepare("SELECT code, propername FROM `$table_list_20` WHERE code = ?");
		$res->execute([$code]);
		
		foreach($res as $r){
		
			$pname = $r['propername'];
		
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
				 echo'<li class="list-group-item">'.$pname.'<span class="badge">'.number_format($total,2).'</span></li>';
				
				?>
			</ul>
			</div>	
