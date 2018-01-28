<?PHP
function check_if_duplicate_mmo($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmmo WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_sb($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM pssb WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mpdo($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmpdo WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_lcr($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM pslcr WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mbo($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmbo WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_macco($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmacco WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mto($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmto WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_masso($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmasso WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mho($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmho WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mswd($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmswd WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mao($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmao WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_meo($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmeo WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_mbe($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psmbe WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}

function check_if_duplicate_gs($alobs){
include("config.php");
$year = $_SESSION['budget'];
$query2 = "SELECT * FROM psgs WHERE alobs =  '$alobs'";
$result2 = mysqli_query($db,$query2);
$row = mysqli_num_rows($result2);
return $row;
}
?>