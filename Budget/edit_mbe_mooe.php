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

$result = $db->prepare("SELECT * FROM mbemooe WHERE alobs = ? AND yearm = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$yt = $row['yearm'];	
$mt = $row['month'];
$dt = $row['day'];

$alobs = $row['alobs'];
$claimant = $row['claimant']; 
$description = $row['description'];


$training = $row['training']; 
$water = $row['water'];
$officeSupplies = $row['officeSupplies']; 
$slaught = $row['Slaughterhouse']; 
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
		
		<td>Training &amp;<br> Seminar Expenses</td>
		<td class="help-block">02 &nbsp; 02 &nbsp;	010</td>
		<td><input class="form-control"  type="number" step="any" name="trainings" min=0 value="<?PHP echo $training ?>"></td>
	</tr>
	<tr>
		<td>Water</td>
		<td class="help-block">02 &nbsp; 04 &nbsp; 010</td>
		<td><input class="form-control"  type="number" step="any" name="water" min=0 value="<?PHP echo $water ?>"></td>
	</tr>
	<tr>
		<td>Office Supplies</td>
		<td class="help-block">02 &nbsp; 03 &nbsp;	010</td>
		<td><input class="form-control"  type="number" step="any" name="supplies" min=0 value="<?PHP echo $officeSupplies ?>"></td>
	</tr>
	
	<tr>
		<td>Market &amp; Slaughterhouse<br> Maintenance</td>
		<td class="help-block">02 &nbsp; 13 &nbsp;	040</td>
		<td><input class="form-control"  type="number" step="any" name="slaught" min=0 value="<?PHP echo $slaught ?>"></td>
	</tr>
	
</tbody>	
</table>
<input type="hidden" name="alobs_edit" value="<?PHP echo $alobs; ?>">
