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



<p>Are You Sure?</p>
<input type="hidden" value="<?PHP echo htmlentities($_POST['rowid']); ?>" name="recorded">



