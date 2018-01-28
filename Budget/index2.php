<?PHP
session_start();
include("cfg.php");
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
		header("location: home.php");
		
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
	
	foreach($result as $row){
	
	
		$name_account = $row['accountName'];
		$id = $row['account_id'];
		$stat = $row['position'];
		$status = $row['status'];
		
		}
	 
	if($count == 1){
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
		header("location: home.php");
		}
	

	else
	{
		
		$get_result = '<div class="alert alert-danger">Account Not Found!</div>';
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
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	
</head>

	
<body>
	<div class="container-fluid">
	<div class="row">
			<div class="col-sm-12"><?PHP if (isset($_POST['letmein'])){ echo $get_result;} ?></div>
			
	</div>
		<div class="row">
		
	
			<div class="col-sm-6" style="width:auto; margin-top: 70px;">
				
				
					<img src="logo.png" style="display:block; margin:0px auto;" class="img-responsive">
					
				
			</div>
			<div class="col-sm-6" style="border-left: 1px solid #ddd;">
				
				<div class="login">
					<div class="panel panel-primary" >
							<div class="panel-heading"><div class="text-center">Login</div></div>
								<div class="panel-body">
		
									<form action="" Method="POST" class="form-horizontal" role="form"> 
									
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="usr" class="control-label col-md-2">Username:</label>
												</div>
											</div>	
												
											<div class="col-sm-9">	
												<div class="form-group col-md-10">
													<input type="text" class="form-control input-lg" id="usr" name="name" style="width:100%;" required placeholder="Username">
												</div>	
											</div>	
										
											<div class="col-sm-3">
												<div class="form-group">
													<label for="pwd" class="control-label col-md-2">Password</label>
												</div>
											</div>	
											
											<div class="col-sm-9">	
												<div class="form-group col-md-10">
													<input type="password" id="pwd" name="password" class="form-control  input-lg" style="width:100%;" required placeholder="password">
												</div>	
											</div>
										
											<div class="col-sm-3">
												<div class="form-group">
													<label for="budget" class="control-label col-md-2">Budget Year:</label>
												</div>
											</div>	
											
											<div class="col-sm-9">		
												<div class="form-group col-md-10">
													<select id="version_rao" name="version_rao" class="form-control input-lg">
			
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
										</div>	
														<div class="panel-footer"><button type="submit" class="btn btn-success btn-large form-control" name="letmein">Let me in.</button></div>
									</form>
								</div>
									
								
					</div>			
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12"></div>
			
		</div>
	</div>
	
</body>

</html>
	
	