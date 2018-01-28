<?PHP





function get_aip_training(){

include("cfg.php");

	$dept  = "MBE";	
	$result = $db->prepare("SELECT training_seminars FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$training = $row['training_seminars'];
 
				}

return $training;
	

}

function get_aip_water(){

include("cfg.php");

	$dept  = "MBE";	
	$result = $db->prepare("SELECT water FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['water'];
 
				}

return $i;
	

}

function get_aip_officeSupplies(){
include("cfg.php");

$dept  = "MBE";	
	$result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_supplies'];
 
				}

return $i;
	

}

function get_aip_Slaughterhouse(){
include("cfg.php");

$dept  = "MBE";	
$result = $db->prepare("SELECT marketSlaughter FROM aip WHERE Year = ? && departments = ? ");
$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['marketSlaughter'];
 
				}

return $i;
	

}





function get_total_trainings(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(training) as training FROM mbemooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("cfg.php");
$result = $db->prepare("SELECT training_seminars FROM aip WHERE departments = 'MBE' && Year = ?");
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
$result = $db->prepare("UPDATE aip SET balance_training_seminars = ? WHERE Year = ? && departments = 'MBE'");
$result->execute([$trainings, $_SESSION['budget']]);
}



function get_total_water(){

include("cfg.php");
$result = $db->prepare("SELECT SUM(water) as water FROM mbemooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['water'];
return $tot;
}
function get_water_bal(){
include("cfg.php");

$result = $db->prepare("SELECT water FROM aip WHERE departments = 'MBE' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['water'];

$getc = get_total_water();
$total = $zx - $getc;

update_water($total);
 
 return $total;
}
function update_water($water){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_water = ? WHERE Year = ? && departments = 'MBE'");
$result->execute([$water,$_SESSION['budget']]);
}


function get_total_officeSupplies(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(officeSupplies) as officeSupplies FROM mbemooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_supplies FROM aip WHERE departments = 'MBE' && Year = ?");
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

$result = $db->prepare("UPDATE aip SET balance_office_supplies = ? WHERE Year = ? && departments = 'MBE'");
$result->execute([$officeSupplies, $_SESSION['budget']]);
}



function get_total_Slaughterhouse(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(Slaughterhouse) as Slaughterhouse FROM mbemooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['Slaughterhouse'];
return $tot;
}
function get_Slaughterhouse_bal(){
include("cfg.php");

$result = $db->prepare("SELECT marketSlaughter FROM aip WHERE departments = 'MBE' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['marketSlaughter'];
$getc = get_total_Slaughterhouse();
$total = $zx - $getc;
update_Slaughterhouse($total);
return $total;
}
function update_Slaughterhouse($Slaughterhouse){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_marketSlaughter = ? WHERE Year = ? && departments = 'MBE'");
$result->execute([$Slaughterhouse, $_SESSION['budget']]);
}


function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM mbemooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MBE"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MBE"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}




?>