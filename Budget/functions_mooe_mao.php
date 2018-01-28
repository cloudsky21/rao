<?PHP




function get_aip_tev(){

include("cfg.php");

	$dept  = "MAO";	
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

	$dept  = "MAO";	
	$result = $db->prepare("SELECT training_seminars FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$training = $row['training_seminars'];
 
				}

return $training;
	

}

function get_aip_telephone(){

include("cfg.php");

	$dept  = "MAO";	
	$result = $db->prepare("SELECT telephone_telegraph FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['telephone_telegraph'];
 
				}

return $i;
	

}

function get_aip_officeSupplies(){
include("cfg.php");

$dept  = "MAO";	
	$result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_supplies'];
 
				}

return $i;
	

}

function get_aip_eq(){
include("cfg.php");

$dept  = "MAO";	
$result = $db->prepare("SELECT office_equip_maint FROM aip WHERE Year = ? && departments = ? ");
$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_equip_maint'];
 
				}

return $i;
	

}








function get_total_tev(){
include("cfg.php");

$year = $_SESSION['budget'];

$result = $db->prepare("SELECT SUM(tev) as tev FROM maomooe WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['tev'];


return $tot;

}
function get_tev_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT tev FROM aip WHERE departments = 'MAO' && Year = ?");
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
$result = $db->prepare("UPDATE aip SET balance_tev = ? WHERE Year = ? && departments = 'MAO'");
$result->execute([$tev,$year]);
}



function get_total_trainings(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(training) as training FROM maomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['training'];
return $tot;
}
function get_trainings_bal(){
include("cfg.php");
$result = $db->prepare("SELECT training_seminars FROM aip WHERE departments = 'MAO' && Year = ?");
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
$result = $db->prepare("UPDATE aip SET balance_training_seminars = ? WHERE Year = ? && departments = 'MAO'");
$result->execute([$trainings, $_SESSION['budget']]);
}



function get_total_telephone(){

include("cfg.php");
$result = $db->prepare("SELECT SUM(telephone_telegraph) as tel FROM maomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['tel'];
return $tot;
}
function get_telephone_bal(){
include("cfg.php");

$result = $db->prepare("SELECT telephone_telegraph FROM aip WHERE departments = 'MAO' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['telephone_telegraph'];

$getc = get_total_telephone();
$total = $zx - $getc;

update_mswd_telephone($total);
 
 return $total;
}
function update_mswd_telephone($telephone_telegraph){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_telephone_telegraph = ? WHERE Year = ? && departments = 'MAO'");
$result->execute([$telephone_telegraph,$_SESSION['budget']]);
}


function get_total_officeSupplies(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(officeSupplies) as officeSupplies FROM maomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_supplies FROM aip WHERE departments = 'MAO' && Year = ?");
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

$result = $db->prepare("UPDATE aip SET balance_office_supplies = ? WHERE Year = ? && departments = 'MAO'");
$result->execute([$officeSupplies, $_SESSION['budget']]);
}



function get_total_eq(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(office_equip_maint) as office_equip_maint FROM maomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['office_equip_maint'];
return $tot;
}
function get_eq_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_equip_maint FROM aip WHERE departments = 'MAO' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['office_equip_maint'];
$getc = get_total_eq();
$total = $zx - $getc;
update_mswd_eq($total);
return $total;
}
function update_mswd_eq($office_equip_maint){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_office_equip_maint = ? WHERE Year = ? && departments = 'MAO'");
$result->execute([$office_equip_maint, $_SESSION['budget']]);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM maomooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MAO"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "MAO"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}





?>