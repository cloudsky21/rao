<?PHP




function get_aip_tev(){

include("cfg.php");

	$dept  = "MEO";	
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

	$dept  = "MEO";	
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

	$dept  = "MEO";	
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

$dept  = "MEO";	
	$result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_supplies'];
 
				}

return $i;
	

}

function get_aip_others(){
include("cfg.php");

$dept  = "MEO";	
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

$result = $db->prepare("SELECT SUM(tev) as tev FROM meomooe WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['tev'];


return $tot;

}
function get_tev_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT tev FROM aip WHERE departments = 'MEO' && Year = ?");
$result->execute([$year]);

$row = $result->fetch();
$zx = $row['tev'];


$getx = get_total_tev();
$total = $zx - $getx;


update_tev($total);
 
return $total;
}
function update_tev($tev){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("UPDATE aip SET balance_tev = ? WHERE Year = ? && departments = 'MEO'");
$result->execute([$tev,$year]);
}



function get_total_trainings(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(training) as training FROM meomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("cfg.php");
$result = $db->prepare("SELECT training_seminars FROM aip WHERE departments = 'MEO' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['training_seminars'];


$getx = get_total_trainings();
$total = $zx - $getx;

update_trainings($total);
 
 return $total;
}
function update_trainings($trainings){
include("cfg.php");
$result = $db->prepare("UPDATE aip SET balance_training_seminars = ? WHERE Year = ? && departments = 'MEO'");
$result->execute([$trainings, $_SESSION['budget']]);
}



function get_total_postage(){

include("cfg.php");
$result = $db->prepare("SELECT SUM(postage) as zxc FROM meomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['zxc'];
return $tot;
}
function get_postage_bal(){
include("cfg.php");

$result = $db->prepare("SELECT postage FROM aip WHERE departments = 'MEO' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['postage'];

$getc = get_total_postage();
$total = $zx - $getc;

update_postage($total);
 
 return $total;
}
function update_postage($postage){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_postage = ? WHERE Year = ? && departments = 'MEO'");
$result->execute([$postage,$_SESSION['budget']]);
}


function get_total_officeSupplies(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(officeSupplies) as officeSupplies FROM meomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_supplies FROM aip WHERE departments = 'MEO' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['office_supplies'];
$getc = get_total_officeSupplies();
$total = $zx - $getc;
update_officeSupplies($total);
return $total;
}
function update_officeSupplies($officeSupplies){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_office_supplies = ? WHERE Year = ? && departments = 'MEO'");
$result->execute([$officeSupplies, $_SESSION['budget']]);
}



function get_total_others(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(others) as others FROM meomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['others'];
return $tot;
}
function get_others_bal(){
include("cfg.php");

$result = $db->prepare("SELECT others FROM aip WHERE departments = 'MEO' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['others'];
$getc = get_total_others();
$total = $zx - $getc;
update_others($total);
return $total;
}
function update_others($others){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_others = ? WHERE Year = ? && departments = 'MEO'");
$result->execute([$others, $_SESSION['budget']]);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM meomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MEO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MEO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}





?>