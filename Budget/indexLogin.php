<?PHP
session_start();
include("config.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {

	$userid = mysqli_real_escape_string($db,$_POST['name']);
	$userpas = mysqli_real_escape_string($db, $_POST['password']);
	
	mysqli_set_charset($db,"latin 1");
	
	//$stmt = mysqli_prepare($db, "SELECT * FROM account WHERE account_id= ? && password = ? LIMIT 1");
	//mysqli_stmt_bind_param($stmt, 'ss', $userid, $userpas);
	
	$query = "SELECT * from account WHERE account_id = '$userid' && password = '$userpas'";     
	//mysqli_stmt_execute($stmt);
	
	$result = mysqli_query($db,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	//$row = mysqli_stmt_affected_rows($stmt);
	//mysqli_stmt_store_result($stmt);
	//mysqli_stmt_fetch($stmt);
	
     $count = mysqli_num_rows($result);
	 
	//$result = mysqli_stmt_get_result($stmt);

	
	$_SESSION['gv'] = 0;
	if($count == 1){
		$_SESSION['isLogin'] = 1;
		$_SESSION['isLoginID'] = $row['account_id'];
		$_SESSION['isLoginName'] = $row['accountName'];
		header("location:index.php");
		
		
	}
	else
	{
		$_SESSION['gv']=1;
		
	}
	
}
?>



<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="cssIndex/reset.css">
	<link rel="stylesheet" href="cssIndex/animate.css">
	<link rel="stylesheet" href="cssIndex/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form action="" Method="POST">
		
		<label for="name">Username:</label>
		
		<input type="name" id="name" name="name" placeholder="Username Here" required>
		
		<label for="password">Password:</label>
		
		<input type="password" id="password" name="password" placeholder = "Password Here" required>
		
		<div id="lower">
		
		<?PHP
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if ($_SESSION['gv'] == 1){
		echo '<div class="alert2">';
		echo '<strong>Error!</strong>&nbsp; Account does not exist.';
		echo '<span onclick="this.parentElement.style.display=\'none\'" class="closebtn">&times;</span>';
		echo '</div>';
		
		$_SESSION['gv']=0;
				}
				
				
	}
?>	
		
		
		
		
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	