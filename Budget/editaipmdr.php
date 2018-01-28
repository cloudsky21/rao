<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');


?>

<?PHP

$code = htmlentities($_POST['rowid']); // fetch code value
$tb = "mdr_list_".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tb` WHERE code = ?");
$result->execute([$code]);

foreach ($result as $row){
	
	$id = $row['id'];
	$shortname = $row['code'];
	$longname = $row['propername'];
	$sector = $row['sector'];
	
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
				<label for="sector" class="control-label col-sm-2">Sector: </label>
					<div class="col-sm-10">	
						<select class="form-control" name="sector" required>
							<option value="GENERAL PUBLIC SERVICES" <?PHP if($sector == "GENERAL PUBLIC SERVICES"){ echo 'selected'; } ?>>General Public Services</option>
							<option value="SOCIAL SERVICES" <?PHP if($sector == "SOCIAL SERVICES"){ echo 'selected';} ?>>Social Services</option>
							<option value="ECONOMIC DEVELOPMENT" <?PHP if($sector == "ECONOMIC DEVELOPMENT"){ echo 'selected';} ?>>Economic Development</option>
							<option value="ENVIRONMENT DEVELOPMENT" <?PHP if($sector == "ENVIRONMENT DEVELOPMENT"){ echo 'selected';} ?>>Environment Development</option>
							<option value="OTHER SERVICES" <?PHP if($sector == "OTHER SERVICES"){ echo 'selected';} ?>>Other Services</option>
						</select>
						</div>
				</div>