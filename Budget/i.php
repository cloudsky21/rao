<?PHP
include("cfg.php");
$sd = "2017";
$result=$db->prepare("SELECT * FROM maccomooe WHERE yearm=?");
$result->execute([$sd]);

foreach ($result as $row){
	
	echo '<td><a href="report.php?xdadwadsXXXADWDASsasdawdasdasdasdawdasda='.$row['alobs'].'" target="_blank">'.$row['alobs'].'</a></td><br>';
}

?>