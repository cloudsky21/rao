<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
	
	
}

$table="r1sp".$_SESSION['budget'];
$table_list_20 = "1sp_list_".$_SESSION['budget'];



$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$table` WHERE alobs = ? AND yearm = ?");
				$result->execute([$alobs, $year]);

					foreach ($result as $row){
	
						$dt = $row['day'];
						$mt = $row['month'];
						$yt = $row['yearm']; 
						
						$claimant = $row['claimant']; 
						$description = $row['description'];
						$code = $row['code'];
						$total = $row['total'];
						
						
						
					
	
		
		
			

}
	



?>
<div class="form-group">
	<label for="date" class="control-label col-sm-4">Date</label>
		<div class="col-sm-8">
			<strong><input type="date" name="date" value="<?PHP echo $yt.'-'.$mt.'-'.$dt; ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" class="form-control"></strong>
			</div>
</div>

<div class="form-group">
	<label for="alobs" class="control-label col-sm-4">ALOBS</label>	
		<div class="col-sm-8">
			<input type="number" name="alobs" id="alobs" required min=0 step="any" max=999  class="form-control" value="<?PHP echo substr($alobs,3,3); ?>">
			</div>
</div>

<div class="form-group">
	<label for="claimant" class="control-label col-sm-4">Claimant</label>	
		<div class="col-sm-8">
			<input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required  class="form-control" value="<?PHP echo $claimant;?>">
			</div>
</div>		

<div class="form-group">
	<label for="description" class="control-label col-sm-4">Description</label>	
		<div class="col-sm-8">
			<textarea name="description" maxlength="50" class="form-control" placeholder="Description here"><?PHP echo $description ?></textarea>
			</div>
</div>			
	
<div class="form-group">
	<label for="rao" class="control-label col-sm-4">Program</label>	
		<div class="col-sm-8">	
			<select name="rao" id="rao" class="form-control">
										<?PHP 
											
											$rao_list = "1sp_list_".$_SESSION['budget'];
											$query = "SELECT id, code, propername FROM `$rao_list`";
											
												$result = $db->prepare($query);
												$result->execute();
												
													foreach($result as $row){
															
															if($code == $row['code']){
																
																 $selected = 'selected="selected"';
															}
															else
															{
																$selected = '';
															}
														
															echo '<option value="'.$row['code'].'" '.$selected.'>'.$row['propername'].'</option>';
												
															
															
													}
										?>
			</select>
			</div>
</div>	

<div class="form-group">
	<label for="rao_value" class="control-label col-sm-4">Amount</label>	
		<div class="col-sm-8">			
			<input type="number" step="any" name="rao_value" min=0 class="form-control" placeholder="Amount here" value="<?PHP echo $total; ?>">
			<input type="hidden" name="alobs_edit" value="<?PHP echo $alobs; ?>">
		</div>
</div>		

