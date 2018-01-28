<?php
   include("config.php");
   session_start();
                
      $myusername = $_POST["username"];
      $mypassword = $_POST["password"];
	  
      
      $sql = "SELECT * FROM account WHERE account_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $AccountName = $row['accountName'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $AccountName;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>