<?PHP
function getlastname(){
	include("cfg.php");
	$result = $db->prepare("SELECT * FROM cont");
	$result->execute();
	$col = $result->columnCount();
	$i = $result->fetchColumn($col);
	echo $i;
	return $i;
}
?>