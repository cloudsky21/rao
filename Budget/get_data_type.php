<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Continuing Program</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){ /* PREPARE THE SCRIPT */
    $("#departments-involved").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var rowid = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
       /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "get_data_co.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: "rowid="+rowid, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#show-here").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });

    });
  });











</script>
<?PHP

if(isset($_POST['rowid']) && !empty($_POST['rowid'])){
	
$value_rowid = $_POST['rowid'];

	switch($value_rowid){
		
	case "co":	
		
	
	$result = $db->prepare("SELECT dept,thead FROM cont_program WHERE thead LIKE ? and year = ?");
	$result->execute(["co%", $_SESSION['budget']]);
	echo '<td><select id="departments-involved" name="departments_involved" class="form-control">';
	echo '<option value="" disabled selected>Select Department</option>';
	
	foreach ($result as $row){
	
	
?>	

	
		
		<option value="<?PHP echo $row['thead']; ?>"><?PHP echo $row['dept']; ?></option>
		
	
<?PHP
	}
	echo '</select>';
	
	
	
	
	
	break;
	
	
	default:
	echo "problem";
	
}

}

?>

</td>

	
	
