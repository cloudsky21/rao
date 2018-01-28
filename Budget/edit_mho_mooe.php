<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];

$result = $db->prepare("SELECT * FROM mhomooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$yt = $row['yearm'];	
$mt = $row['month'];
$dt = $row['day'];

$claimant = $row['claimant'];
$description = $row['description'];

$tev = $row['tev'];
$trainings = $row['training'];
$supplies = $row['officeSupplies'];
$mm = $row['motor_vehicle_maint'];	
$tel = $row['telephone_telegraph'];
$others = $row['others_maint'];
$dtotal = $row['total'];
	
}



?>
<table class="table table-condensed table-hover borderless">
<tbody>
	<tr>
		<td>Date</td>
		<td>ALOBS</td>
		<td>Claimant</td>
	</tr>

	<tr >
		<td><strong><input type="date" name="date" value="<?PHP echo $yt.'-'.$mt.'-'.$dt; ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" class="form-control"></strong></td>
		<td><input type="number" name="alobs" id="alobs" required min=0 step="any" max=999  class="form-control" value="<?PHP echo substr($alobs,3,3); ?>"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required  class="form-control" value="<?PHP echo $claimant;?>"></td>
	</tr>
	<tr>
		<td colspan=3><textarea name="description" maxlength="50" class="form-control" placeholder="Description here"><?PHP echo $description ?></textarea></td>
	</tr>
		<tr>
										<td>Travelling Expenses</td>
										<td class="help-block">02 &nbsp; 01 &nbsp; 010</td>
										<td><input type="number" step="any" name="tev" min=0 class="form-control" value="<?PHP echo $tev; ?>"></td>
										</tr>

										<tr>
											<td>Training &amp; Seminar Expenses</td>
											<td class="help-block">02 &nbsp; 02 &nbsp;	010</td>
											<td><input type="number" step="any" name="trainings" min=0 class="form-control" value="<?PHP echo $trainings; ?>" ></td>
											</tr>
														<tr>
															<td>Office Supplies</td>
															<td class="help-block">02 &nbsp; 03 &nbsp;	010</td>
															<td><input type="number" step="any" name="supplies" min=0 class="form-control"  value="<?PHP echo $supplies; ?>"></td>
															</tr>
															
															<tr>
																<td>Motor Vehicle<br> Maintenance</td>
																<td class="help-block">02 &nbsp; 13 &nbsp; 060</td>
																<td><input type="number" step="any" name="mm" min=0 class="form-control" value="<?PHP echo $mm; ?>"></td>
																</tr>
														
																	<tr>
																		<td>Telephone / Telegraph<br> and Internet</td>
																		<td class="help-block">02 &nbsp; 05 &nbsp; 030</td>
																		<td><input type="number" step="any" name="telephone" min=0 class="form-control" value="<?PHP echo $tel; ?>"></td>
																		</tr>

																		<tr>
																			<td>Other Maintenance and Operating Expenses</td>
																			<td class="help-block">02 &nbsp; 99 &nbsp;	990</td>
																			<td><input type="number" step="any" name="others" min=0 class="form-control"  value="<?PHP echo $others; ?>"></td>
																			</tr>
	
</tbody>	
</table>
<input type="hidden" name="alobs_edit" value="<?PHP echo $alobs; ?>">
