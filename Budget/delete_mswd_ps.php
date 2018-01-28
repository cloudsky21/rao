<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}


?>
<?PHP 

if(isset($_POST['cancel_delete_ps'])){
unset($_POST);	
header("location: ".$_SERVER['PHP_SELF']);	

}
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

<p>Are You Sure?</p>
<input type="hidden" value="<?PHP echo htmlentities($_POST['rowid']); ?>" name="recorded">



</div>
</body>
</html>
