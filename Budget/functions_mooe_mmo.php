<?PHP

function get_aip_tev(){

include("config.php");

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

	$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

$dept  = "MMO";	
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

function get_aip_others(){
include("config.php");

$dept  = "MMO";	
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

$query2 = "SELECT SUM(tev) as tev FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_mmo = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_mmo - $get_tev;

update_mmo_tev($total);
 
 return $total;
}
function update_mmo_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_mmo = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_mmo - $get_trainings;

update_mmo_trainings($total);
 
 return $total;
}
function update_mmo_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone) as telephone FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_mmo = $row['telephone_telegraph'];


$get_telephone = get_total_telephone();
$total = $aip_telephone_mmo - $get_telephone;

update_mmo_telephone($total);
 
 return $total;
}
function update_mmo_telephone($telephone){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_postage(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(postage) as postage FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_mmo = $row['postage'];
$get_postage = get_total_postage();
$total = $aip_postage_mmo - $get_postage;
update_mmo_postage($total);
return $total;
}
function update_mmo_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_insurance_p(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(insurance_p) as insurance_p FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['insurance_p'];
return $tot;
}
function get_insurance_p_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT insurance_premium FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_insurance_p_mmo = $row['insurance_premium'];
$get_insurance_p = get_total_insurance_p();
$total = $aip_insurance_p_mmo - $get_insurance_p;
update_mmo_insurance_p($total);
return $total;
}
function update_mmo_insurance_p($insurance_p){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_insurance_premium = '$insurance_p' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_fidelity_b(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(fidelity_b) as fidelity_b FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['fidelity_b'];
return $tot;
}
function get_fidelity_b_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_fidelity_b_mmo = $row['fidelity_bond'];
$get_fidelity_b = get_total_fidelity_b();
$total = $aip_fidelity_b_mmo - $get_fidelity_b;
update_mmo_fidelity_b($total);
return $total;
}
function update_mmo_fidelity_b($fidelity_b){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_fidelity_bond = '$fidelity_b' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_mmo = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_mmo - $get_officeSupplies;
update_mmo_officeSupplies($total);
return $total;
}
function update_mmo_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_gasoline(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(gasoline) as gasoline FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['gasoline'];
return $tot;
}
function get_gasoline_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT gasoline FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_gasoline_mmo = $row['gasoline'];
$get_gasoline = get_total_gasoline();
$total = $aip_gasoline_mmo - $get_gasoline;
update_mmo_gasoline($total);
return $total;
}
function update_mmo_gasoline($gasoline){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_gasoline = '$gasoline' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_motor_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(motor_maint) as motor_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['motor_maint'];
return $tot;
}
function get_motor_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT motor_vehicle_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_motor_maint_mmo = $row['motor_vehicle_maint'];
$get_motor_maint = get_total_motor_maint();
$total = $aip_motor_maint_mmo - $get_motor_maint;
update_mmo_motor_maint($total);
return $total;
}
function update_mmo_motor_maint($motor_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_motor_vehicle_maint = '$motor_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeEquip_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeEquip_maint) as officeEquip_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeEquip_maint'];
return $tot;
}
function get_officeEquip_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_equip_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_office_equip_maint_mmo = $row['office_equip_maint'];
$get_office_equip_maint = get_total_officeEquip_maint();
$total = $aip_office_equip_maint_mmo - $get_office_equip_maint;
update_mmo_officeEquip_maint($total);
return $total;
}
function update_mmo_officeEquip_maint($office_equip_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_equip_maint = '$office_equip_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_confidential(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(confidential) as confidential FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['confidential'];
return $tot;
}
function get_confidential_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT confidential_intel_maint FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_confidential_mmo = $row['confidential_intel_maint'];
$get_confidential = get_total_confidential();
$total = $aip_confidential_mmo - $get_confidential;
update_mmo_confidential($total);
return $total;
}
function update_mmo_confidential($confidential){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_confidential_intel_maint = '$confidential' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM mmomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MMO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_mmo = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_mmo - $get_others_maint;
update_mmo_others_maint($total);
return $total;
}
function update_mmo_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'MMO'";
$result2 = mysqli_query($db,$query2);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM mmomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MMO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MMO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}


?>