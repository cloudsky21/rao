<?PHP

function get_aip_tev(){

include("config.php");

	$dept  = "MACCO";	
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

	$dept  = "MACCO";	
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

	$dept  = "MACCO";	
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

function get_aip_offsup(){
	
include("config.php");

$dept  = "MACCO";	
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

function get_aip_audit(){
	
include("config.php");

$dept  = "MACCO";	
	if ($result = $db->prepare("SELECT auditing_services FROM aip WHERE Year = ? && departments = ? ")){
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

$dept  = "MACCO";	
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

$query2 = "SELECT SUM(tev) as tev FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_macco = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_macco - $get_tev;

update_macco_tev($total);
 
 return $total;
}
function update_macco_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_macco = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_macco - $get_trainings;

update_macco_trainings($total);
 
 return $total;
}
function update_macco_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_postage(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(postage) as postage FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT postage FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_postage_macco = $row['postage'];


$get_postage = get_total_postage();
$total = $aip_postage_macco - $get_postage;

update_macco_postage($total);
 
 return $total;
}
function update_macco_postage($postage){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_postage = '$postage' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_macco = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_macco - $get_officeSupplies;
update_macco_officeSupplies($total);
return $total;
}
function update_macco_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_audit(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(auditing_services) as auditing_services FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['auditing_services'];
return $tot;
}
function get_audit_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT auditing_services FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_auditing_services_macco = $row['auditing_services'];
$get_auditing_services = get_total_audit();
$total = $aip_auditing_services_macco - $get_auditing_services;
update_macco_audit($total);
return $total;
}
function update_macco_audit($auditing_services){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_auditing_services = '$auditing_services' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM maccomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MACCO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_macco = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_macco - $get_others_maint;
update_macco_others_maint($total);
return $total;
}
function update_macco_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'MACCO'";
$result2 = mysqli_query($db,$query2);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM maccomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MACCO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MACCO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}



?>