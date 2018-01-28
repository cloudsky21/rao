<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_pwd.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}
$table_cy = "r1sp".$_SESSION['budget'];
try{
refresh_all();
}
catch(Exception $e)
{
	echo ("Setup AIP for 1% Senior Citizens & Persons With Disabilities. This page will be redirected.. in 3 seconds");
	header('Refresh: 3; url=aip1spsetup.php');
	exit();
	
}
$getlock = "0";
		$islock = $db->prepare("SELECT flag FROM aip WHERE Year = ?");
		$islock->execute([$_SESSION['budget']]);
		
		foreach($islock as $lock){
		
		
			$getlock =  $lock['flag'];
			
		}
?>
<?PHP

if(isset($_POST['btn-submit'])){

$tot= $_POST['rao_value'];
$code = $_POST['rao'];

//date
$get_date_Y = date("Y",strtotime($_POST['date']));
$get_date_m = date("m",strtotime($_POST['date']));
$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS

$alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);
$claimant = strtoupper(htmlentities($_POST['claimant'], ENT_QUOTES));
$description = htmlentities($_POST['description']);


$query = "INSERT INTO $table_cy (
yearm, 
month, 
day, 
alobs, 
claimant, 
description,
code,
$code,
total) VALUES (?,?,?,?,?,?,?,?,?)";

$result = $db->prepare($query);
$result->execute([$get_date_Y,$get_date_m, $get_date_d, $alobs, $claimant, $description, $_POST['rao'], $tot, $tot]);

refresh_all();	
unset($_POST);
header('Location: '.$_SERVER['PHP_SELF']);

}
?>


<?PHP

if(isset($_POST['submit_edit'])){
	
$tot= $_POST['rao_value'];
$code = $_POST['rao'];

//date
$get_date_Y = date("Y",strtotime($_POST['date']));
$get_date_m = date("m",strtotime($_POST['date']));
$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS

$alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);;
$claimant = strtoupper(htmlentities($_POST['claimant'], ENT_QUOTES));
$description = htmlentities($_POST['description']);	


$query = "DELETE FROM $table_cy WHERE alobs = ?";
$result = $db->prepare($query);
$result->execute([$_POST['alobs_edit']]);


$query = "INSERT INTO $table_cy (
yearm, 
month, 
day, 
alobs, 
claimant, 
description,
code,
$code,
total) VALUES (?,?,?,?,?,?,?,?,?)";

$result = $db->prepare($query);
$result->execute([$get_date_Y,$get_date_m, $get_date_d, $alobs, $claimant, $description, $_POST['rao'], $tot, $tot]);

refresh_all();
unset($_POST);
header('Location: '.$_SERVER['PHP_SELF']);
}
?>
<?PHP
if(isset($_POST['delete'])){

$result = $db->prepare("DELETE FROM $table_cy WHERE alobs = ?");
$result->execute([$_POST['recorded']]);	
refresh_all();	
unset($_POST);
header("location: ".$_SERVER['PHP_SELF']);
}
?>
<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$total_1 = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$total_2 = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$total_3 = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$total_4 = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$total_5 = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$total_6 = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$total_7 = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$total_8 = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$total_9 = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$total_10 = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$total_11 = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM $table_cy WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$total_12 = $row_december['total'];



?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RAO | Senior Citizens & Persons With Disabilities</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/3.3.7-dist/css/bootstrap-theme.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
    $('#infoModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'details_r1sp.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

$(document).ready(function(){
    $('#editModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'edit_r1sp.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.edit-data').html(data);//Show fetched data from database
            }
        });
     });
});

$(document).ready(function(){
    $('#deleteModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'delete_r1sp.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.edit-data').html(data);//Show fetched data from database
            }
        });
     });
});

$(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });	
$(document).on('show.bs.modal', '.modal', function () {
    var zIndex = 1040 + (10 * $('.modal:visible').length);
    $(this).css('z-index', zIndex);
    setTimeout(function() {
        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
    }, 0);
});
</script>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
				</button>
					<a class="navbar-brand" href="home.php">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
					</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
									<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="aip1sp.php">AIP</a></li>
											<li><a href="add_year.php">Budget Year</a></li>
											<li><a href="heads.php">Department Heads List</a></li>
											</ul>
												</li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registry Allotments and Obligations (RAO)
		  <span class="caret"></span></a>	  
				<ul class="dropdown-menu">
					<li><a href="personal_services_mmo_all.php">Personal Services</a></li>
					<li><a href="mooe_mmo_all.php">Maint. And Other Operating Expenses</a></li>
					<li><a href="co_mmo_all.php">Capital Outlay</a></li>
					<li><a href="rao20.php">20&#37; EDF</a></li>
					<li><a href="none-office.php">Non - Office</a></li>
					<li><a href="gad.php">5% Gender and Development (GAD)</a></li>
					<li><a href="continuing_all.php">Continuing Program</a></li>
					<li><a href="sef.php">Special Education Fund (SEF)</a></li>
					<li><a href="mdr.php">5% Municipal Disaster Risk</a></li>
					<li><a href="pwds.php">1% Senior Citizens & Persons With Disabilities</a></li>
					<li><a href="1iralcpc.php">1% IRA &amp; LCPC</a></li>
					</ul>
						</li>
      
	  <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="export_pwds.php">Export to Excel</a></li>		
			</ul>	
			</li>
				</ul>
	
		<ul class="nav navbar-nav navbar-right">
			<?php if($getlock == '0'){ echo '<li><a href="#"  data-toggle="modal" data-target="#addObl"  data-backdrop="static" data-keyboard="false"><span class="glyphicon glyphicon-plus"></span></a></li>'; } else {} ?>
				<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
					<ul class="dropdown-menu">

						<li><a href="pd1.php">January</a></li>
						<li><a href="pd2.php">February</a></li>
						<li><a href="pd3.php">March</a></li>
						<li><a href="pd4.php">April</a></li>
						<li><a href="pd5.php">May</a></li>
						<li><a href="pd6.php">June</a></li>
						<li><a href="pd7.php">July</a></li>
						<li><a href="pd8.php">August</a></li>
						<li><a href="pd9.php">September</a></li>
						<li><a href="pd10.php">October</a></li>
						<li><a href="pd11.php">November</a></li>
						<li><a href="pd12.php">December</a></li>
		
						</ul>	
							</li>
		
		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#" style="color:gray; pointer-events: none; border-bottom: 1px solid #ddd" tabindex="-1"><?PHP echo $_SESSION['isLoginName']; ?></a></li>
				<li><a href="accounts.php">Accounts</a></li>
				<li><a href="log.php">Audit Log</a></li>
				<li><a href="logmeOut.php">Log Out</a></li>
				</ul>
					</li>
		
	
	</ul>
	</div>
</div>
</nav>
<div class="modal fade" id="addObl" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Obligation</h4>
			</div>

			<div class="modal-body">

				<form method ="POST" action="" name="form1" class="form-horizontal">

					<div class="form-group">
						<label for="date" class="control-label col-sm-4">Date</label>
							<div class="col-sm-8">
								<input class="form-control" type="date" name="date" value="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>"></strong>
								</div>
					</div>
					
					
					<div class="form-group">
						<label for="alobs" class="control-label col-sm-4">ALOBS</label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="alobs" id="alobs" required min="0" step="any" max=999>
								</div>
					</div>			
					
					<div class="form-group">
						<label for="claimant" class="control-label col-sm-4">Claimant</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required>
								</div>
					</div>	

					<div class="form-group">
						<label for="description" class="control-label col-sm-4">Description</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="description" maxlength="50"></textarea>
								</div>
					</div>			

					<div class="form-group">					
						<label for="rao" class="control-label col-sm-4">Program</label>
							<div class="col-sm-8">
								<select name="rao" id="rao" class="form-control">
										<?PHP 
											
											$rao_list = "1sp_list_".$_SESSION['budget'];
											$query = "SELECT id, code, propername FROM `$rao_list`";
											
												$result = $db->prepare($query);
												$result->execute();
												
													foreach($result as $row){
															
														
															echo '<option value="'.$row['code'].'">'.$row['propername'].'</option>';
																		
															
															
													}
										?>
								</select>
								</div>
					</div>

					<div class="form-group">
						<label for="rao_value" class="control-label col-sm-4">Amount</label>	
							<div class="col-sm-8">							
								<input type="number" step="any" name="rao_value" min=0 class="form-control" placeholder="Amount here">
								</div>
					</div>			
	


			</div>
<div class="modal-footer">
																				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																				<button type="submit" class="btn btn-primary" name="btn-submit">Add Alobs</button>
																			</div>	
																		</div>
																	</form>
																</div>
															</div>


															<div class="container">
																<div style="margin-top: 100px;">
																	<div class="page-header">
																		<h2>1% Senior Citizens & Persons With Disabilities</h2>
																	</div>

<ul class="list-group col-sm-4">
	<li class="list-group-item"><strong>1st Quarter </strong><span class="badge"><?PHP echo number_format($total_1 + $total_2 + $total_3,2); ?></span></li>
	<li class="list-group-item"><strong>2nd Quarter </strong><span class="badge"><?PHP echo number_format($total_4 + $total_5 + $total_6,2); ?></span></li>
	<li class="list-group-item"><strong>3rd Quarter </strong><span class="badge"><?PHP echo number_format($total_7 + $total_8 + $total_9,2); ?></span></li>
	<li class="list-group-item"><strong>4th Quarter </strong><span class="badge"><?PHP echo number_format($total_10 + $total_11 + $total_12,2); ?></span></li>
</ul>

<ul class="list-group col-sm-8">
	<li class="list-group-item"><label class="list-group-item-heading">Total: </label><p class="list-group-item-text"><?PHP echo number_format(get_total_obligation(),2); ?></p></li>
	<li class="list-group-item"><label class="list-group-item-heading">Balance: </label><p class="list-group-item-text"> <?PHP echo number_format(get_obligation_bal(),2); ?></p></li>
	<li class="list-group-item"><label class="list-group-item-heading">Appropriation:  </label><p class="list-group-item-text"><?PHP echo number_format(get_appropriation(),2); ?></p></li>
</ul>		

<?PHP if(isset($_POST['submit_edit'])) { echo $notice; } ?>															
<table class="table table-condensed table-hover table-striped">
	<thead>
		<tr>

			<th>DATE</th>
			<th>Ref.&nbsp;AO/AA/ALOBS</th>
			<th>Claimant</th>
			<th>Total Obligation</th>
			<th>Description</th>
			<th>Actions</th>

		</tr>
	</thead>
	<tbody>
	
<?PHP

$yearTransact = $_SESSION['budget']; 
$result = $db->prepare("SELECT * FROM $table_cy WHERE yearm=?");
$result->execute([$yearTransact]);

 
  while ($row = $result->fetch()) {
			echo '<tr>';
			echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
			echo '<td data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#infoModal" data-id="'.$row['alobs'].'">'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';
			echo '<td>'.$row['description'].'</td>';
			if($getlock =='0'){ 
			echo '<td><a class="btn btn-default btn-xs"  data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#editModal" data-id="'.$row['alobs'].'"><span class="glyphicon glyphicon-edit"></span></a> ';
			echo '<a class="btn btn-default btn-xs"  data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#deleteModal" data-id="'.$row['alobs'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
			}
			else {echo'<td>Locked for Editing</td>';}
			echo '</tr>';
	}
		

?>		
		</tbody>
</table>
</div>
</div>

<div class="modal fade" id="deleteModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Delete Obligation</h4>
			</div>

			<form action="" method="POST">
				<div class="modal-body">
					<div class="edit-data"></div> 
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" name="delete" class="btn btn-danger">Confirm</button>
				</div>

			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Data</h4>
			</div>
			<form action="" method="POST" class="form-horizontal">
				<div class="modal-body">
					<div class="edit-data"></div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" name="submit_edit" class="btn btn-success">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="infoModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Obligation Details</h4>
			</div>
			<div class="modal-body">
				<div class="fetched-data"></div> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>