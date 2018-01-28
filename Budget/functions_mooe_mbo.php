<?PHP

function get_aip_tev(){

include("config.php");

	$dept  = "MBO";	
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

	$dept  = "MBO";	
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

function get_aip_offsup(){
include("config.php");

$dept  = "MBO";	
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

function get_aip_telephone(){

include("config.php");

	$dept  = "MBO";	
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

function get_aip_others(){
include("config.php");

$dept  = "MBO";	
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

$query2 = "SELECT SUM(tev) as tev FROM mbomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['tev'];


return $tot;
}
function get_tev_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT tev FROM aip WHERE departments = 'MBO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_tev_mbo = $row['tev'];


$get_tev = get_total_tev();
$total = $aip_tev_mbo - $get_tev;

update_mbo_tev($total);
 
 return $total;
}
function update_mbo_tev($tev){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_tev = '$tev' WHERE Year = '$year' && departments = 'MBO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_trainings(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(training) as training FROM mbomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT training_seminars FROM aip WHERE departments = 'MBO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_trainings_mbo = $row['training_seminars'];


$get_trainings = get_total_trainings();
$total = $aip_trainings_mbo - $get_trainings;

update_mbo_trainings($total);
 
 return $total;
}
function update_mbo_trainings($trainings){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_training_seminars = '$trainings' WHERE Year = '$year' && departments = 'MBO'";
$result2 = mysqli_query($db,$query2);
}


function get_total_officeSupplies(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(officeSupplies) as officeSupplies FROM mbomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT office_supplies FROM aip WHERE departments = 'MBO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_officeSupplies_mbo = $row['office_supplies'];
$get_officeSupplies = get_total_officeSupplies();
$total = $aip_officeSupplies_mbo - $get_officeSupplies;
update_mbo_officeSupplies($total);
return $total;
}
function update_mbo_officeSupplies($officeSupplies){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_office_supplies = '$officeSupplies' WHERE Year = '$year' && departments = 'MBO'";
$result2 = mysqli_query($db,$query2);
}



function get_total_telephone(){

include("config.php");
$year = $_SESSION['budget'];

$query2 = "SELECT SUM(telephone_telegraph) as telephone_telegraph FROM mbomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$tot = $row['telephone_telegraph'];
return $tot;
}
function get_telephone_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT telephone_telegraph FROM aip WHERE departments = 'MBO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_telephone_telegraph_mbo = $row['telephone_telegraph'];


$get_telephone = get_total_telephone();
$total = $aip_telephone_telegraph_mbo - $get_telephone;

update_mbo_telephone($total);
 
 return $total;
}
function update_mbo_telephone($telephone_telegraph){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_telephone_telegraph = '$telephone_telegraph' WHERE Year = '$year' && departments = 'MBO'";
$result2 = mysqli_query($db,$query2);
}








function get_total_others_maint(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT SUM(others_maint) as others_maint FROM mbomooe WHERE yearm = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT others FROM aip WHERE departments = 'MBO' && Year = '$year'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$aip_others_maint_mbo = $row['others'];
$get_others_maint = get_total_others_maint();
$total = $aip_others_maint_mbo - $get_others_maint;
update_mbo_others_maint($total);
return $total;
}
function update_mbo_others_maint($others_maint){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "UPDATE aip SET balance_others = '$others_maint' WHERE Year = '$year' && departments = 'MBO'";
$result2 = mysqli_query($db,$query2);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM mbomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MBO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MBO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}



?>