<head>
<link rel="stylesheet" href="css/css3.css">
<link rel="stylesheet" href="css/css3.css">
</head>
<?php
session_start();
include("config.php");

	$Logid =	 $_SESSION['loginID'];
	$LogPas =	 $_SESSION['loginpass'];
	$LogName =	 $_SESSION['loginName'];
	$LogPos =	 $_SESSION['loginPosition'];

	$query = "INSERT INTO account (account_id, password, accountName, position, status) VALUES ('$Logid','$LogPas','$LogName','$LogPos','Guest')";     
	$result = mysqli_query($db,$query);
		
	$arrows =  mysqli_affected_rows($db);	
	
	if($arrows == 1){
			echo '<div class="alert">';
			echo '<strong>Success!</strong>&nbsp; Account added.';
			header( "refresh:2;url=add-account.php" );
	
	}
	
?>