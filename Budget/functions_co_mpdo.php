<?PHP




function get_aip_co(){

include("cfg.php");

	$dept  = "MPDO";	
	$result = $db->prepare("SELECT co FROM aip WHERE Year = ? && departments = ? ");
	$result->execute([$_SESSION['budget'], $dept]);
	
				if ($result->rowCount() > 0) {

					$row = $result->fetch();
					$co = $row['co'];
					
				}

return $co;
	}


function get_total_co(){
include("cfg.php");

$year = $_SESSION['budget'];

$result = $db->prepare("SELECT SUM(capital_outlay) as co FROM mpdoco WHERE yearm = ?");
$result->execute([$year]);
$row = $result->fetch();
$tot = $row['co'];


return $tot;

}
function get_co_bal(){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("SELECT co FROM aip WHERE departments = 'MPDO' && Year = ?");
$result->execute([$year]);

$row = $result->fetch();
$zx = $row['co'];


$getx = get_total_co();
$total = $zx - $getx;


update_co($total);
 
return $total;
}
function update_co($co){
include("cfg.php");
$year = $_SESSION['budget'];
$result = $db->prepare("UPDATE aip SET balance_co = ? WHERE Year = ? && departments = 'MPDO'");
$result->execute([$co,$year]);
}





?>