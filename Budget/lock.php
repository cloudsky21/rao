<?php
session_start();
include("cfg.php");

$uid = $_SESSION['isLoginID'];
$spass = sha1($_POST['lock']);


$validate_account = $db->prepare("SELECT position FROM account WHERE account_id = ? AND password = ?");
$validate_account->execute([$uid, $spass]);

$hCount = $validate_account->rowCount();

if($hCount == '0'){
	
	
	
	echo '<h3>Invalid Password. This page will be redirected.. in 3 seconds</h3>';
	header('Refresh: 3; url=saao');
	exit();	
	
	
}
else{
	
foreach($validate_account as $row){
	
	$is_admin = $row['position'];
	
	
	if($is_admin = "Admin Account"){
		
		
		
		$get_column = $db->prepare("SHOW columns FROM aip WHERE field = ?");
		$get_column->execute(["flag"]);

			$cnt = $get_column->rowCount();

				if($cnt > '0'){
	
				$checkvalue = $db->prepare("SELECT flag FROM aip WHERE Year = ?");
				$checkvalue->execute([$_SESSION['budget']]);
	
	
					$row2 = $checkvalue->fetch();
	
						if($row2['flag'] == '0'){
		
							$update = $db->prepare("UPDATE aip SET flag = ? WHERE Year = ?");
							$update->execute(["1", $_SESSION['budget']]);
							
							
							
							echo '<p>Budget '.$_SESSION['budget'].' is <strong>locked</strong> for editing. This page will be redirected.. in 3 seconds</p>';
							session_destroy();
							header('Refresh: 3; url=logmeOut');
							exit();
	
						}
							else if($row2['flag'] =='1')
								{
									$update = $db->prepare("UPDATE aip SET flag = ? WHERE Year = ?");
									$update->execute(["0", $_SESSION['budget']]);
									
									
									
									echo '<p>Budget '.$_SESSION['budget'].' is now <strong>unlocked</strong> for editing. This page will be redirected.. in 3 seconds</p>';
									session_destroy();
									header('Refresh: 3; url=logmeOut');
									exit();
								}
								

	
				}
				else
				{
				
				$create = $db->prepare("ALTER TABLE aip ADD flag int");
				$create->execute();
				
				$create->prepare("UPDATE aip SET flag = ? WHERE Year = ?");
				$create->execute(["1", $_SESSION['budget']]);
				
				
				
				echo '<p>Budget '.$_SESSION['budget'].' is <strong>locked</strong> for editing111. This page will be redirected.. in 3 seconds</p>';
							session_destroy();
							header('Refresh: 3; url=logmeOut');
							exit();
				}	
		
		
	}
	
	
	
}
	
	
}





?>