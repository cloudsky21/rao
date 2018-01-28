<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
	  
      
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
   }
?>
<html>

 
<head>
 
    <!-- Basics -->
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     
    <title>Login</title>
 
    <!-- CSS -->
	<style>
	html {
		 font-size: 13pt;
	}
	.loginform ul {
  padding: 0;
  margin: 0;
}
.loginform li {
  display: inline;
  float: left;
}
label {
  display: block;
  color: #999;
}
.cf:before,
.cf:after {
    content: ""; 
    display: table;
}
 
.cf:after {
    clear: both;
}
.cf {
    *zoom: 1;
}
:focus {
  outline: 0;
}
.loginform input[type=submit] {
  border: 1px solid rgba(0, 0, 0, 0.3);
  background: #64c8ef; /* Old browsers */
  background: -moz-linear-gradient(top,  #64c8ef 0%, #00a2e2 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#64c8ef), color-stop(100%,#00a2e2)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* IE10+ */
  background: linear-gradient(to bottom,  #64c8ef 0%,#00a2e2 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64c8ef', endColorstr='#00a2e2',GradientType=0 ); /* IE6-9 */
  color: #fff;
  padding: 5px 15px;
  margin-left: 0px;
  margin-top: 15px;
  border-radius: 3px;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.3);
  float: inline;
  
}
.loginform input:not([type=submit]) {
  padding: 5px;
  margin-right: 10px;
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-radius: 3px;
  box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.1), 
        0px 1px 0px 0px rgba(250, 250, 250, 0.5) ;
		
}
	
input:required {
	border: 1px solid red;
}

#container {
	padding:20px;
	width: 400px;
    margin: 0 auto;
    height:200px;
    border:1px solid #8D8D8D;
	border-radius: 10px;
	box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.1), 
        0px 1px 0px 0px rgba(250, 250, 250, 0.5) ;
	
	
	
	
}
   
     </style>
</head>

<!-- Main HTML -->
     
<body>
     
    <!-- Begin Page Content -->
    <div id="container"> 
    <section class="loginform cf">
<form name="login" action="" method="POST" accept-charset="utf-8">
  <ul>
    <li><label for="user">User ID</label>
    <input type="text" name="user" placeholder="User ID" required></li>
    <li><label for="password">Password</label>
    <input type="password" name="password" placeholder="password" required></li>
    <li>
    <input type="submit" value="Login"></li>
  </ul>
</form>
</section>
    </div><!--/ container-->
     
     
    <!-- End Page Content -->
     
</body>
 
</html>