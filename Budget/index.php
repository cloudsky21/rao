<?PHP
session_start();
require_once("cfg.php");
include("insertLog.php");


if(isset($_COOKIE["x"]) && isset($_COOKIE["p"])){
	
	$result = $db->prepare("SELECT account_id, accountName, position, status FROM account WHERE account_id = ? && password = ?");
	$result->execute([$_COOKIE["x"],$_COOKIE["p"]]);
	$count = $result->rowCount();
	if($count > 0){
		foreach($result as $row){
		$name_account = $row['accountName'];
		$id = $row['account_id'];
		$stat = $row['position'];
		$status = $row['status'];
		}
		$_SESSION['isLogin'] = 1;
		$_SESSION['isLoginID'] = $id;
		$_SESSION['isLoginName'] = $name_account;
		$_SESSION['ip'] = getRealIpAddr();
		$transName = $_SESSION['isLoginName']." Logged in.";
		$_SESSION['isLoginID'];
		$_SESSION['ip'];
		audit($_SESSION['isLoginID'], $transName, $_SESSION['ip']); 
		header("location: home");
		
	}
	else if(isset($_SESSION['isLogin'])){
		
		/*Set Cookie*/
		$cookie_name = "x";
		$cookie_value = $_SESSION['xValue'];
		$cookie_p = $_SESSION['pValue'];
		$cookie_rrs = $_SESSION['budget'];
		
		
		 
		setcookie($cookie_name, $cookie_value, time() + 3600, "/");
		setcookie("p", $cookie_p, time() + 3600, "/");
		setcookie("budget", $cookie_rrs, time() + 3600, "/");
		
		
		
		header("location: home");
		
	}
	
	
	
}


?>


<?PHP
if($_SERVER["REQUEST_METHOD"]=="POST"){

	/*Converts to Code*/
	$userid = htmlentities($_POST['name'],ENT_QUOTES);
	
	/*Encrypts Password*/
	$userpas = sha1($_POST['password']);
	
	/*Checks if Budget Year is not null*/
	$budgetYear = $_POST['version_rao'];
	if(empty($budgetYear)){
	$_SESSION['budget'] = "Year not set";
	}
	else
	{
		$_SESSION['budget'] = $budgetYear;
	}
	
	
	/*Checks username and password in database*/
	$result = $db->prepare("SELECT account_id, accountName, position, status FROM account WHERE account_id = ? && password = ? LIMIT 1");
	$result->execute([$userid, $userpas]);
	 
	$count = $result->rowCount();
	
	if($count == 1){
		
		
		
	foreach($result as $row){
	
		
		$name_account = $row['accountName'];
		$id = $row['account_id'];
		$stat = $row['position'];
		$status = $row['status'];
			
		}
	 
		
		$_SESSION['isLogin'] = 1;
		$_SESSION['isLoginID'] = $id;
		$_SESSION['isLoginName'] = $name_account;
		$_SESSION['ip'] = getRealIpAddr();
		
		
		
		$transName = $_SESSION['isLoginName']." Logged in.";
		
		$_SESSION['isLoginID'];
		$_SESSION['ip'];
			
		audit($_SESSION['isLoginID'], $transName, $_SESSION['ip']); 
		
		
		
		$cookie_name = "x";
		$cookie_value = $userid;
		$cookie_p = $userpas;
		
		
		$_SESSION['xValue'] = $userid;
		$_SESSION['pValue'] = $cookie_p;
		setcookie($cookie_name, $cookie_value, time() + 3600, "/");
		setcookie("p", $cookie_p, time() + 3600, "/");
		header("location: home");
		}
	

	else
	{
		
		$get_result = '<div id="flash-msg" class="alert alert-danger">Account Not Found!</div>';
		unset($_POST);
	}
	

}
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RAO | Municipality of Tolosa</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $("#flash-msg").delay(3000).fadeOut("slow");
});	
</script>
	
</head>

	
<body class="body">
	<div class="container-fluid">
		
	
	
	
			
				
				<div class="login col-centered">
				
				<?PHP if($_SERVER["REQUEST_METHOD"]=="POST"){ echo $get_result;} ?>
						
							
							<h2 class="text-center color">Login</h2>
							
							
								
		
									<form action="" Method="POST" class="form-horizontal" role="form"> 
									
										
											
												<div class="form-group">
													<label for="usr" class="control-label col-sm-2 color">Username:</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="usr" name="name" required placeholder="Username">
																</div>	
												</div>
												
													
											
												<div class="form-group">
													<label for="pwd" class="control-label col-sm-2 color">Password:</label>
														<div class="col-sm-10">
															<input type="password" id="pwd" name="password" class="form-control" required placeholder="Password">
																</div>
												</div>
											
											
												<div class="form-group">
													<label for="budget" class="control-label col-sm-2 color">Budget Year:</label>
														<div class="col-sm-10">
															<select id="version_rao" name="version_rao" class="form-control">
			
												<?PHP
	
														$sql = "SELECT year FROM budget_year GROUP BY year ASC";
														$result = $db->prepare($sql);
														$result->execute();
			
															while($sqlrow = $result->fetch(PDO::FETCH_ASSOC)){
	
		
															echo "<option name ='myYear' value='{$sqlrow['year']}' selected = 'selected'";			
															echo ">{$sqlrow['year']}</option>";
			
		
															}
		
		
		 
												?>
													</select>
													</div>
													
												
												</div>
											
									
										
														<button type="submit" class="btn btn-primary form-control" name="letmein">Let me in.</button>
													
									</form>
									
								
									
									
						
				</div>
	</div>
		
		

	
</body>

</html>
	
	