<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_ps_mmo.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


if($_POST['rowid']){

$alobs = $_POST['rowid'];


	
	
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">




</div>
</body>
</html>