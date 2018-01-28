<?PHP




function get_aip_tev(){

include("cfg.php");

	$dept  = "General Services";	
	$result = $db->prepare("SELECT tev FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
	
				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$tev = $row['tev'];
					
				}

return $tev;
	}


function get_aip_officeSupplies(){
include("cfg.php");

$dept  = "General Services";	
	$result = $db->prepare("SELECT office_supplies FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['office_supplies'];
 
				}

return $i;
	

}
	
	
function get_aip_water(){

include("cfg.php");

	$dept  = "General Services";	
	$result = $db->prepare("SELECT water FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$xx = $row['water'];
 
				}

return $xx;
	

}


function get_aip_electricity(){

include("cfg.php");

	$dept  = "General Services";	
	$result = $db->prepare("SELECT electricity FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['electricity'];
 
				}

return $i;
	

}


function get_aip_gasoline(){
include("cfg.php");

$dept  = "General Services";	
	$result = $db->prepare("SELECT gasoline FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['gasoline'];
 
				}

return $i;
	

}


function get_aip_mm(){
include("cfg.php");

$dept  = "General Services";	
$result = $db->prepare("SELECT motor_vehicle_maint FROM aip WHERE Year = ? && departments = ? ");
$result->execute([$_SESSION['budget'], $dept]);
		


			if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$i = $row['motor_vehicle_maint'];
 
				}

return $i;
	

}








function get_total_tev(){
include("cfg.php");

$year = $_SESSION['budget'];

$result = $db->prepare("SELECT SUM(tev) as tev FROM gsmooe WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['tev'];


return $tot;

}
function get_tev_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT tev FROM aip WHERE departments = 'General Services' && Year = ?");
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
$result = $db->prepare("UPDATE aip SET balance_tev = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$tev,$year]);
}



function get_total_officeSupplies(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(officeSupplies) as officeSupplies FROM gsmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['officeSupplies'];
return $tot;
}
function get_officeSupplies_bal(){
include("cfg.php");

$result = $db->prepare("SELECT office_supplies FROM aip WHERE departments = 'General Services' && Year = ?");
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

$result = $db->prepare("UPDATE aip SET balance_office_supplies = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$officeSupplies, $_SESSION['budget']]);
}



function get_total_water(){
include("cfg.php");
$result = $db->prepare("SELECT SUM(water) as water FROM gsmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['water'];
return $tot;
}
function get_water_bal(){
include("cfg.php");
$result = $db->prepare("SELECT water FROM aip WHERE departments = 'General Services' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['water'];


$getx = get_total_water();
$total = $zx - $getx;

update_water($total);
 
 return $total;
}
function update_water($water){
include("cfg.php");
$result = $db->prepare("UPDATE aip SET balance_water = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$water, $_SESSION['budget']]);
}



function get_total_electricity(){

include("cfg.php");
$result = $db->prepare("SELECT SUM(electricity) as zxcs FROM gsmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['zxcs'];
return $tot;
}
function get_electricity_bal(){
include("cfg.php");

$result = $db->prepare("SELECT electricity FROM aip WHERE departments = 'General Services' && Year = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$zx = $row['electricity'];

$getc = get_total_electricity();
$total = $zx - $getc;

update_electricity($total);
 
 return $total;
}
function update_electricity($electricity){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_electricity = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$electricity,$_SESSION['budget']]);
}



function get_total_gasoline(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(gasoline) as zxcs FROM gsmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['zxcs'];
return $tot;
}
function get_gasoline_bal(){
include("cfg.php");

$result = $db->prepare("SELECT gasoline FROM aip WHERE departments = 'General Services' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['gasoline'];
$getc = get_total_gasoline();
$total = $zx - $getc;
update_gasoline($total);
return $total;
}
function update_gasoline($adg){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_gasoline = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$adg, $_SESSION['budget']]);
}




function get_total_mm(){
include("cfg.php");

$result = $db->prepare("SELECT SUM(motor_vehicle_maint) as zxcs FROM gsmooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$tot = $row['zxcs'];
return $tot;
}
function get_mm_bal(){
include("cfg.php");

$result = $db->prepare("SELECT motor_vehicle_maint FROM aip WHERE departments = 'General Services' && Year = ?");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$zx = $row['motor_vehicle_maint'];
$getc = get_total_mm();
$total = $zx - $getc;
update_mm($total);
return $total;
}
function update_mm($mm){
include("cfg.php");

$result = $db->prepare("UPDATE aip SET balance_motor_vehicle_maint = ? WHERE Year = ? && departments = 'General Services'");
$result->execute([$mm, $_SESSION['budget']]);
}

function get_total_obligation(){
include("cfg.php");	
$result = $db->prepare("SELECT SUM(total) as total FROM gsmooe WHERE yearm = ? ");
$result->execute([$_SESSION['budget']]);
$row = $result->fetch();
$value = $row['total'];
return $value;
}

function get_obligation_bal(){
include("cfg.php");	
$result = $db->prepare("SELECT balance_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "General Services"]);
$row = $result->fetch();
$value = $row['balance_mooe'];
return $value;
}


function get_appropriation(){
include("cfg.php");	
$result = $db->prepare("SELECT total_mooe FROM aip WHERE Year = ? AND departments = ?");
$result->execute([$_SESSION['budget'], "General Services"]);
$row = $result->fetch();
$value = $row['total_mooe'];
return $value;
}





?>