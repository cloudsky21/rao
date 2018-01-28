<?PHP


function check_if_loaded_mmo_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MMO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}






}

function check_if_loaded_sb_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "SB" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}

}

function check_if_loaded_mpdo_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MPDO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}


function check_if_loaded_lcr_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "LCR" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_mbo_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MBO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}



function check_if_loaded_macco_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MACCO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}


function check_if_loaded_mto_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MTO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}


function check_if_loaded_masso_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MASSO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}


function check_if_loaded_mho_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MHO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_mswd_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MSWD" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_mao_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MAO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_meo_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MEO" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_mbe_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "MBE" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function check_if_loaded_generalServices_aip(){
include ("config.php");


if ($result = mysqli_prepare($db, 'SELECT * FROM aip WHERE departments = "General Services" && Year = ?')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "s", $_SESSION['budget']);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    
    mysqli_stmt_close($result);
	return $row_cnt;
}
}

function get_table_exist(){
include("cfg.php");
	
$tablename = "20edf".$_SESSION['budget'];
$result ="0";
try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function get_table_exist_gad(){
include("cfg.php");
	
$tablename = "gad".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function get_table_exist_mdr(){
include("cfg.php");
	
$tablename = "mdr".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function get_table_exist_1sp(){
include("cfg.php");
	
$tablename = "1sp".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}
function get_table_exist_lcpc(){
include("cfg.php");
	
$tablename = "lcpc".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}
function get_table_exist_sef(){
include("cfg.php");
	
$tablename = "sef".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function get_table_exist_noneoffice(){
include("cfg.php");
	
$tablename = "noneoffice".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();

}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}



function check_if_loaded_20(){
include ("cfg.php");

$tablename = "20edf".$_SESSION['budget'];
$result = $db->prepare("SELECT * FROM $tablename WHERE Year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}

function check_if_loaded_gad_aip(){
include ("cfg.php");

$gad= "gad".$_SESSION['budget'];

$result = $db->prepare("SELECT year FROM `$gad` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}

function check_if_loaded_mdr_aip(){
include ("cfg.php");

$tbl = "mdr".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}


function check_if_loaded_1sp(){
include ("cfg.php");

$tbl = "1sp".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}



function check_if_loaded_lcpc_aip(){
include ("cfg.php");

$tbl = "lcpc".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}

function check_if_loaded_sef_aip(){
include ("cfg.php");

$tbl = "sef".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}

function check_if_loaded_noneoffice_aip(){
include ("cfg.php");
$tbl = "noneoffice".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}

function check_if_loaded_cont(){
include ("cfg.php");

$tbl = "cont".$_SESSION['budget'];

$result = $db->prepare("SELECT * FROM `$tbl` WHERE year = ?");
$result->execute([$_SESSION['budget']]);

$row_cnt = $result->rowCount();
return $row_cnt;

}
?>