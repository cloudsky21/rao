<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}

$get_rowid = htmlentities($_POST['rowid']);

if($get_rowid == "root"){

	$rowid = 0;
}	
else $rowid = $get_rowid;
	
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
	<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>	
<body>
<div class="container">


<?PHP echo "Proceed to delete ".$rowid." ?"; ?>

<input type="hidden" value="<?PHP echo htmlentities($rowid); ?>" name="recorded">



</div>
</body>
</html>
