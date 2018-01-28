<?PHP
require ("cfg.php");
include ("insertLog.php");
session_start();

if(isset($_COOKIE['x']) && isset($_COOKIE['p'])){

	unset($_COOKIE['x']);
	unset($_COOKIE['p']);

setcookie('x','', time() - 7200, '/');
setcookie('p','', time() - 7200, '/');
}


$transact = $_SESSION['isLoginName']." logged out";
audit($_SESSION['isLoginID'],$transact,$_SESSION['ip']);


$result = $db->prepare("UPDATE account SET status = '0' WHERE account_id = ?");
$result->execute([$_SESSION['isLoginID']]);

$db=null;

session_destroy();
header("location: index");


?>