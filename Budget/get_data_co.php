<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	exit();
}

?>

<?PHP

if(isset($_POST['rowid']) && !empty($_POST['rowid'])){
	
?>

<tr>
		
		<td><input type="number" class="form-control" name="myvalue"></td>
</tr>
		
<?PHP
}	
	
	
	
?>

