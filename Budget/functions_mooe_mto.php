<?PHP

function get_aip_tev(){

include("config.php");

	$dept  = "MTO";	
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

	$dept  = "MTO";	
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

function get_aip_postage(){

include("config.php");

	$dept  = "MTO";	
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

function get_aip_telephone(){

include("config.php");

	$dept  = "MTO";	
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

function get_aip_fi(){

include("config.php");

	$dept  = "MTO";	
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

function get_aip_accountable(){

include("config.php");

	$dept  = "MTO";	
	if ($result = $db->prepare("SELECT accountable_forms FROM aip WHERE Year = ? && departments = ? ")){
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

$dept  = "MTO";	
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

function get_aip_it(){
include("config.php");

$dept  = "MTO";	
	if ($result = $db->prepare("SELECT repairs_it_equip FROM aip WHERE Year = ? && departments = ? ")){
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

$dept  = "MTO";	
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

$query2 = "SELECT SUM(tev) as tev FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_mto = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_mto - $get_tev;

update_mto_tev($total);
 
 return $total;
}
function update_mto_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_mto = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_mto - $get_trainings;

update_mto_trainings($total);
 
 return $total;
}
function update_mto_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_postage(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(postage) as postage FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_mto = $row['postage'];


$get_postage = get_total_postage();
$total = $aip_postage_mto - $get_postage;

update_mto_postage($total);
 
 return $total;
}
function update_mto_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone_telegraph) as telephone_telegraph FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone_telegraph'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_mto = $row['telephone_telegraph'];


$get_telepone = get_total_telephone();
$total = $aip_telephone_mto - $get_telepone;

update_mto_telephone($total);
 
 return $total;
}
function update_mto_telephone($telephone){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_fi(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(fidelity_insurance) as fidelity_insurance FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['fidelity_insurance'];
return $tot;
}
function get_fi_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT fidelity_bond FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_fi_mto = $row['fidelity_bond'];


$get_fi = get_total_fi();
$total = $aip_fi_mto - $get_fi;

update_mto_fi($total);
 
 return $total;
}
function update_mto_fi($fi){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_fidelity_bond = '$fi' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_accountable(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(accountable_forms) as accountable_forms FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['accountable_forms'];
return $tot;
}
function get_accountable_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT accountable_forms FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_accountable_mto = $row['accountable_forms'];


$get_accountable = get_total_accountable();
$total = $aip_accountable_mto - $get_accountable;

update_mto_accountable($total);
 
 return $total;
}
function update_mto_accountable($accountable){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_accountable_forms = '$accountable' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_mto = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_mto - $get_officeSupplies;
update_mto_officeSupplies($total);
return $total;
}
function update_mto_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_it(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(it_equip_maint) as it_equip_maint FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['it_equip_maint'];
return $tot;
}
function get_it_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT repairs_it_equip FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_it_mto = $row['repairs_it_equip'];
$get_it = get_total_it();
$total = $aip_it_mto - $get_it;
update_mto_it($total);
return $total;
}
function update_mto_it($it){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_repairs_it_equip = '$it' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}





function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM mtomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MTO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_mto = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_mto - $get_others_maint;
update_mto_others_maint($total);
return $total;
}
function update_mto_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'MTO'";
$result2 = mysqli_query($db,$query2);
}
function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM mtomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MTO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MTO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}




?>