<?PHP
include("cfg.php");
    // check incoming params exist
    if (!isset($_GET['xdadwadsXXXADWDASsasdawdasdasdasdawdasda']))
		{
        // missing param, go to an error page for example
       echo "error";
       exit;
    }
	else {

    // You can now use $_GET['id'] which will be the id number passed
    // any way you want.

    // For example using a PDO connection called $pdo

    $table = "maccomooe";

    $sql = "SELECT * FROM $table WHERE alobs = :id";

    try {
        $stmt = $db->prepare($sql);
        $stmt->execute([$_GET['xdadwadsXXXADWDASsasdawdasdasdasdawdasda']]);

        $rows = $stmt->FetchAll();  // $rows now contains all the results of the query
    }
    catch( PDOException $e) {
        echo $e-getMessage();
    }

    foreach ( $rows as $row ) {
       echo $row['claimant'];
	   echo $row['description'];
	   echo $row['tev'];
    }
	}

?>