<?php
include("config.php");

$category = $_GET['category'];
$userid = $_GET['userid'];

/* create a prepared statement */
if ($result = mysqli_prepare($db, 'SELECT col1, col2 FROM mytable where 
                      userid=? and category=? order by id DESC')) {
    /* bind parameters for markers */
    /* Assumes userid is integer and category is string */
    mysqli_stmt_bind_param($result, "is", $userid, $category);  
    /* execute query */
    mysqli_stmt_execute($result);
	
	/* store result*/
	mysqli_stmt_store_result($result);

	/*Row count*/
	$row_cnt = mysqli_stmt_num_rows( $result );
	
    /* bind result variables */
    mysqli_stmt_bind_result($result, $col1, $col2);
    /* fetch value */
    mysqli_stmt_fetch($result);
    /* Alternative, use a while:
    while (mysqli_stmt_fetch($result)) {
        // use $col1 and $col2 
    }
    */
    /* use $col1 and $col2 */
    echo "COL1: $col1 COL2: $col2\n";
    /* close statement */
    mysqli_stmt_close($result);
}

/* close connection */
mysqli_close($db);
?>