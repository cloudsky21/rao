<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');


?>

<?PHP

$code = htmlentities($_POST['rowid']); // fetch code value
$tb = "sef_list_".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tb` WHERE code = ?");
$result->execute([$code]);

foreach ($result as $row){
	
	$id = $row['id'];
	$shortname = $row['code'];
	$longname = $row['propername'];
	$type = $row['type'];
	$others = $row['others'];
	
	
}

?>


<div class="form-group">
	<label for="shortname-edit" class="control-label col-sm-2">Codename:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="shortname-edit" required value="<?PHP echo $shortname ?>" placeholder="Enter here (No space bar please!)" maxlength="20">
			</div>
				</div>	
				
	<div class="form-group">	
		<label for="longname-edit" class="control-label col-sm-2">Propername:</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="longname-edit" required><?PHP echo $longname ?></textarea>
				<input type="hidden" name="theid" value="<?PHP echo $id; ?>">
				</div>
					</div>
					
			<div class="form-group">
				<label for="for-type" class="control-label col-sm-2">Type: </label>
					<div class="col-sm-10">	
						<select class="form-control" name="for-type" required>
							<option value="Personal Services" <?PHP if($type == "Personal Services"){ echo 'selected'; } ?>>Personal Services</option>
							<option value="Maintenance And Other Operating Expenses" <?PHP if($type == "Maintenance And Other Operating Expenses"){ echo 'selected';} ?>>Maintenance And Other Operating Expenses</option>
							<option value="Capital Outlay" <?PHP if($type == "Capital Outlay"){ echo 'selected';} ?>>Capital Outlay</option>							
						</select>
						</div>
				</div>
				
			<div class="form-group">
				<label for="others" class="control-label col-sm-2">Others: </label>
					<div class="col-sm-10">	
						<select class="form-control" name="others" required>
							<option value="ELEMENTARY SCHOOLS" <?PHP if($others == "ELEMENTARY SCHOOLS"){echo 'selected';} ?>>Elementary Schools</option>
							<option value="SECONDARY SCHOOLS" <?PHP if($others == "SECONDARY SCHOOLS"){echo 'selected';} ?>>Secondary Schools</option>							
						</select>
						</div>
				</div>	