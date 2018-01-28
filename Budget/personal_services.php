<?PHP 
session_start();
include("insertLog.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: indexLogin.php");
}

?>



<!DOCTYPE html>
<html>
<head>
<style>
html, body {
		
	font-family: Georgia, serif;	
	
	
}

#banner {
	
	margin-bottom: -140px;
	
}
#accountTitle {
	padding: 0;
	display: block;
	margin-top: 90px;
	margin-bottom: -120px;
	margin-left: 50px;
	font-size: 36px;
}	
#container {
	margin-top: 135px;
	position: relative;
	padding: 0;
	
	width: 100%;
	
	
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	border-radius: 10px;
}

li {
    float: left;
	
}

li a {
    display: block;
	font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


li a:hover {
    background-color: #4CAF50;;
}
.active {
    background-color: #006400;
}
.wrap {
	
	margin-right: 10px;
	text-align: center;
	
}
.login {
	
	display: block;
	position:relative;
	padding-top: 20px;
	padding-left: 10px;
	font-family: "Comic Sans MS", cursive, sans-serif;
	font-size: 16px;
}
#logout {
	
	margin-left: 85px;
	font-family: "Comic Sans MS", cursive, sans-serif;
	font-size: 16px;
	color: blue;
	float: left;
	width: 4%;
	text-decoration: none;
	
}
#logout:hover {
	
	color: #f00;
	
	
}
.contain-login-details {
	
	float: right;
	position: static;
	margin-right: 150px;
	margin-top: -10px;
	z-index: -3;
	
	
}

.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #333; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 220px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    
	padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 25px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

</style>

<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</head>
<body>
<label id="accountTitle">Personel Services
<div class="contain-login-details">

<?PHP

echo '<label class="login">Account : <strong>'.$_SESSION['isLoginName'].'</strong></label>';
echo '<a id="logout" href="logmeOut.php">Logout</a>';

?>
</div>
</label>
<div id="container">
	<div class="wrap">
		<ul>
			<li><a href="#" class="active">MMO</a></li>
			<li><a href="#">SB</a></li>
			<li><a href="#">MPDO</a></li>
			<li><a href="#">LCR</a></li>
			<li><a href="#">MBO</a></li>
			<li><a href="#">MACCO</a></li>
			<li><a href="#">MTO</a></li>
			<li><a href="#">MASSO</a></li>
			<li><a href="#">MHO</a></li>
			<li><a href="#">MSWD</a></li>
			<li><a href="#">MAO</a></li>
			<li><a href="#">MEO</a></li>
			<li><a href="#">MARKET</a></li>
			<li><a href="#">PLAZA</a></li>
</ul>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Goto Main</a>
   <a href="#">Automatic (default)</a>
  <a href="#">Manual</a>
 
  
 </div>
<div id="main">
<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Settings</span></div>









</body>
</html>