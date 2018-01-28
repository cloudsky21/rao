<?PHP

function colCnt(){
	include("cfg.php");
	
	$result = $db->prepare("SELECT count(*)
FROM information_schema.columns
WHERE table_name = 'cont'");
	$result->execute();
	$i = $result->fetch();
	$tot = $i['count(*)'] - 6;
	return $tot;
}



function a($x){
	include("cfg.php");
	$result = $db->prepare("SELECT SUM($x) as xx FROM cont WHERE yearm = ?");
	$result->execute([$_SESSION['budget']]);
	while($row = $result->fetch()){
		$g = $row['xx'];
	}
	
	return $g;
}


function ax($x){
	include("cfg.php");
	$result = $db->prepare("SELECT $x as xx FROM cont WHERE yearm = ?");
	$result->execute([$_SESSION['budget']]);
	while($row = $result->fetch()){
		$g = $row['xx'];
	}
	
	return $g;
}


?>