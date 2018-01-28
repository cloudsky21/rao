<?PHP

function get_aip_tev(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT tev FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($tev);
					$result->fetch();
 
				}

return $tev;
	}

}

function get_aip_training(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT training_seminars FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($training);
					$result->fetch();
 
				}

return $training;
	}

}

function get_aip_telephone(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT telephone_telegraph FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_postage(){

include("config.php");

	$dept  = "SB";	
	if ($result = $db->prepare("SELECT postage FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_insurance(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT insurance_premium FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_fidelity(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT fidelity_bond FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_offsup(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_gas(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT gasoline FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_motorVehicle(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT motor_vehicle_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_officeEquip(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT office_equip_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_confidential(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT confidential_intel_maint FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_ads(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT advertising_expenses FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}

function get_aip_others(){
include("config.php");

$dept  = "SB";	
	if ($result = $db->prepare("SELECT others FROM aip WHERE Year = ? && departments = ? ")){
		$result->bind_param('ss', $_SESSION['budget'], $dept);
		$result->execute();
		$result->store_result();


				if ($result->num_rows > 0) {

					$result->bind_result($i);
					$result->fetch();
 
				}

return $i;
	}

}








function get_total_tev(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(tev) as tev FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_sb = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_sb - $get_tev;

update_sb_tev($total);
 
 return $total;
}
function update_sb_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_sb = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_sb - $get_trainings;

update_sb_trainings($total);
 
 return $total;
}
function update_sb_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}



function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone) as telephone FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_sb = $row['telephone_telegraph'];


$get_telephone = get_total_telephone();
$total = $aip_telephone_sb - $get_telephone;

update_sb_telephone($total);
 
 return $total;
}
function update_sb_telephone($telephone){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_postage(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(postage) as postage FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_sb = $row['postage'];
$get_postage = get_total_postage();
$total = $aip_postage_sb - $get_postage;
update_sb_postage($total);
return $total;
}
function update_sb_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_insurance_p(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(insurance_p) as insurance_p FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['insurance_p'];
return $tot;
}
function get_insurance_p_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT insurance_premium FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_insurance_p_sb = $row['insurance_premium'];
$get_insurance_p = get_total_insurance_p();
$total = $aip_insurance_p_sb - $get_insurance_p;
update_sb_insurance_p($total);
return $total;
}
function update_sb_insurance_p($insurance_p){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_insurance_premium = '$insurance_p' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_fidelity_b(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(fidelity_b) as fidelity_b FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['fidelity_b'];
return $tot;
}
function get_fidelity_b_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_fidelity_b_sb = $row['fidelity_bond'];
$get_fidelity_b = get_total_fidelity_b();
$total = $aip_fidelity_b_sb - $get_fidelity_b;
update_sb_fidelity_b($total);
return $total;
}
function update_sb_fidelity_b($fidelity_b){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_fidelity_bond = '$fidelity_b' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_sb = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_sb - $get_officeSupplies;
update_sb_officeSupplies($total);
return $total;
}
function update_sb_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_ads(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(advertising_expenses) as ads FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['ads'];
return $tot;
}
function get_ads_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT advertising_expenses FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_ads_sb = $row['advertising_expenses'];
$get_ads = get_total_ads();
$total = $aip_ads_sb - $get_ads;
update_sb_ads($total);
return $total;
}
function update_sb_ads($ads){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_advertising_expenses = '$ads' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}


function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM sbmooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'SB' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_sb = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_sb - $get_others_maint;
update_sb_others_maint($total);
return $total;
}
function update_sb_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'SB'";
$result2 = mysqli_query($db,$query2);
}

function get_total_obligation(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT SUM(total) as total FROM sbmooe WHERE yearm = ?";
$result = $db->prepare($query);
$result->execute([$year]);
$row = $result->fetch();
$value = $row['total'];

return $value;
}

function get_obligation_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?";
$result = $db->prepare($query);
$result->execute([$year,"SB"]);
$row = $result->fetch();
$value = $row['balance_mooe'];

return $value;
}

function get_appropriation(){
include("cfg.php");
$year = $_SESSION['budget'];
$query = "SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?";
$result = $db->prepare($query);
$result->execute([$year,"SB"]);
$row = $result->fetch();
$value = $row['total_mooe'];

return $value;
}


?>