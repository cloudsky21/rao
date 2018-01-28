<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

$get_rowid = htmlentities($_POST['rowid']);
$tb = "1sp".$_SESSION['budget'];

		//check if has value encoded
		
		$rs=$db->prepare("SELECT `$get_rowid` as valuable FROM `$tb`");
		$rs->execute();
		$val = $rs->fetch();
		
		if($val['valuable'] > 0) {
			
			$confirm = 'This program is <strong>NOT EMPTY!</strong> and has a value of "'. number_format($val['valuable'],2).'". <br> Are You sure you want to delete?';
			
		}
		else
			$confirm = 'Proceed with delete?';
		
		
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


<?PHP echo $confirm; ?>

<input type="hidden" value="<?PHP echo htmlentities($_POST['rowid']); ?>" name="recorded">



</div>
</body>
</html>
