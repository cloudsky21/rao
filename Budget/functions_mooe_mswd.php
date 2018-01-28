<?PHP




function get_aip_tev(){

include("cfg.php");

	$dept  = "MSWD";	
	$result = $db->prepare("SELECT tev FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
	
				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$tev = $row['tev'];
					
				}

return $tev;
	}

function get_aip_training(){

include("cfg.php");

	$dept  = "MSWD";	
	$result = $db->prepare("SELECT training_seminars FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$training = $row['training_seminars'];
 
				}

return $training;
	

}

function get_aip_postage(){

include("cfg.php");

	$dept  = "MSWD";	
	$result = $db->prepare("SELECT postage FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['postage'];
 
				}

return $i;
	

}

function get_aip_officeSupplies(){
include("cfg.php");

$dept  = "MSWD";	
	$result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_supplies'];
 
				}

return $i;
	

}

function get_aip_aics(){
include("cfg.php");

$dept  = "MSWD";	
$result = $db->prepare("SELECT aics FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['aics'];
 
				}


return $i;
	

}

function get_aip_others(){
include("cfg.php");

$dept  = "MSWD";	
$result = $db->prepare("SELECT others FROM aip WHERE Year = ? && departments = ? ");
$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['others'];
 
				}

return $i;
	

}








function get_total_tev(){
include("cfg.php");

$year = $_SESSION['budget'];

$result = $db->prepare("SELECT SUM(tev) as tev FROM mswdmooe WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['tev'];


return $tot;

}
function get_tev_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT tev FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$year]);

$row = $result->fetch();
$zx = $row['tev'];


$getx = get_total_tev();
$total = $zx - $getx;


update_mswd_tev($total);
 
return $total;
}
function update_mswd_tev($tev){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("UPDATE aip SET balance_tev = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$tev,$year]);
}



function get_total_trainings(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(training) as training FROM mswdmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("cfg.php");
$result = $db->prepare("SELECT training_seminars FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['training_seminars'];


$getx = get_total_trainings();
$total = $zx - $getx;

update_mswd_trainings($total);
 
 return $total;
}
function update_mswd_trainings($trainings){
include("cfg.php");
$result = $db->prepare("UPDATE aip SET balance_training_seminars = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$trainings, $_SESSION['budget']]);
}



function get_total_postage(){

include("cfg.php");
$result = $db->prepare("SELECT SUM(postage) as postage FROM mswdmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['postage'];
return $tot;
}
function get_postage_bal(){
include("cfg.php");

$result = $db->prepare("SELECT postage FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['postage'];

$getc = get_total_postage();
$total = $zx - $getc;

update_mswd_postage($total);
 
 return $total;
}
function update_mswd_postage($postage){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_postage = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$postage,$_SESSION['budget']]);
}


function get_total_officeSupplies(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(officeSupplies) as officeSupplies FROM mswdmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_supplies FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['office_supplies'];
$getc = get_total_officeSupplies();
$total = $zx - $getc;
update_mswd_officeSupplies($total);
return $total;
}
function update_mswd_officeSupplies($officeSupplies){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_office_supplies = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$officeSupplies, $_SESSION['budget']]);
}



function get_total_aics(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(aics) as aics FROM mswdmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['aics'];
return $tot;
}
function get_aics_bal(){
include("cfg.php");

$result = $db->prepare("SELECT aics FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['aics'];
$getc = get_total_aics();
$total = $zx - $getc;
update_mswd_aics($total);
return $total;
}
function update_mswd_aics($aics){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_aics = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$aics, $_SESSION['budget']]);
}




function get_total_others_maint(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(others_maint) as others_maint FROM mswdmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['others_maint'];
return $tot;
}
function get_others_maint_bal(){
include("cfg.php");

$result = $db->prepare("SELECT others FROM aip WHERE departments = 'MSWD' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['others'];
$getc = get_total_others_maint();
$total = $zx - $getc;
update_mswd_others_maint($total);
return $total;
}
function update_mswd_others_maint($others_maint){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_others = ? WHERE Year = ? && departments = 'MSWD'");
$result->execute([$others_maint, $_SESSION['budget']]);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM mswdmooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MSWD"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MSWD"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}



?>