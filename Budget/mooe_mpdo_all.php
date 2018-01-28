<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_mooe_mpdo.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}
$getlock = "0";
$islock = $db->prepare("SELECT flag FROM aip WHERE Year = ?");
$islock->execute([$_SESSION['budget']]);

foreach($islock as $lock){
	
	
	$getlock =  $lock['flag'];
	
}
$notice="";

/* gets computes total balance*/ 
$appr = get_appropriation();


$result = $db->prepare("SELECT sum(total) as total FROM mpdomooe WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$sum = $row['total'];


$total = $appr - $sum;


$result = $db->prepare("UPDATE aip SET balance_mooe = ? WHERE departments = ? AND Year = ?");
$result->execute([$total, "MPDO", $_SESSION['budget']]);
/* ------------------------------*/

get_total_tev();
get_total_trainings();
get_total_telephone();
get_total_officeSupplies();
get_total_others_maint();

get_tev_bal();
get_trainings_bal();
get_telephone_bal();
get_officeSupplies_bal();
get_others_maint_bal();
?>

<?PHP

if(isset($_POST['btn-submit'])){



//date
	$get_date_Y = date("Y",strtotime($_POST['date']));
	$get_date_m = date("m",strtotime($_POST['date']));
	$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS

	$post_alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);

	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
		'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
		'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
		'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
		'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );


	$post_claimant = $_POST['claimant'];
	$post_claimant = strtoupper(htmlentities(strtr( $post_claimant, $unwanted_array )));
	$post_description = htmlentities($_POST['description'],ENT_QUOTES);

	
//numbers	
	$post_tev = $_POST['tev'];
	$post_trainings = $_POST['trainings'];
	$post_tel = $_POST['tel'];	
	$post_supplies = $_POST['supplies'];	
	$post_others = $_POST['others'];
	
	$totalObligation = $post_tev + $post_trainings + $post_tel + $post_supplies + $post_others;

	$query = "INSERT INTO mpdomooe (
	yearm, 
	month, 
	day, 
	alobs, 
	claimant,
	description, 
	tev, 
	training, 
	telephone, 
	officeSupplies,
	others_maint, 
	total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

	$result = $db->prepare($query);
	$result->execute([
		$get_date_Y, 
		$get_date_m,
		$get_date_d, 
		$post_alobs, 
		$post_claimant, 
		$post_description,
		$post_tev,
		$post_trainings,
		$post_tel,
		$post_supplies,
		$post_others,
		$totalObligation]);  
	
	
	$cnt = $result->rowCount();
	
	if($cnt == "1") {
		
		unset($_POST);
		header("location: ".$_SERVER['PHP_SELF']);
	}
	else {
		$notice = '<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> Data Rejected.</div>';
		
		unset($_POST);
	}
}
?>
<?PHP
if(isset($_POST['submit_edit'])){
//date
	$get_date_Y = date("Y",strtotime($_POST['date']));
	$get_date_m = date("m",strtotime($_POST['date']));
	$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS

	$post_alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);
	$post_claimant = strtoupper(htmlentities($_POST['claimant'],ENT_QUOTES));
	$post_description = htmlentities($_POST['description'],ENT_QUOTES);
	
//numbers	
	$post_tev = $_POST['tev'];
	$post_trainings = $_POST['trainings'];
	$post_tel = $_POST['tel'];	
	$post_supplies = $_POST['supplies'];	
	$post_others = $_POST['others'];
	
	$totalObligation = $post_tev + $post_trainings + $post_tel + $post_postage + $post_insurance + $post_fidelity + $post_supplies + $post_gas + $post_mot_vehicle + $post_offceEquip + $post_cIntExp + $post_others;

	$result = $db->prepare("UPDATE mpdomooe SET 
		yearm=?, 
		month=?, 
		day=?, 
		alobs=?, 
		claimant=?,
		description=?, 
		tev=?, 
		training=?, 
		telephone=?, 
		officeSupplies=?,
		others_maint=?, 
		total=? WHERE alobs=? AND yearm=?");

	$result->execute([
		$get_date_Y,
		$get_date_m,
		$get_date_d,
		$post_alobs,
		$post_claimant,
		$post_description,
		$post_tev,
		$post_trainings,
		$post_tel,
		$post_supplies,
		$post_others,
		$totalObligation,
		$_POST['alobs_edit'], $_SESSION['budget']]);

	$isSuccess = $result->rowCount();
	if($isSuccess > 0){
		
		unset($_POST);
		header("location: ".$_SERVER['PHP_SELF']);
	}
	else {
		$notice = '<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> Data Rejected.</div>';
		
		unset($_POST);
	}
}
?>
<?PHP
if(isset($_POST['delete'])){

	$result = $db->prepare("DELETE FROM mpdomooe WHERE alobs = ?");
	$result->execute([$_POST['recorded']]);	
	
	unset($_POST);
	header("location: ".$_SERVER['PHP_SELF']);
}
?>
<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$total_1 = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$total_2 = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$total_3 = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$total_4 = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$total_5 = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$total_6 = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$total_7 = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$total_8 = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$total_9 = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$total_10 = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$total_11 = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM mpdomooe WHERE yearm = ? AND month = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$total_12 = $row_december['total'];



?>




<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MOOE | Municipal Planning and Development Office</title>
	<link rel="shortcut icon" href="favicon.ico"/>
	<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">

	<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script>

		$(document).ready(function(){
			$('#infoModal').on('show.bs.modal', function (e) {
				var rowid = $(e.relatedTarget).data('id');
				$.ajax({
					cache: false,
					type : 'post',
            url : 'details_mpdo_mooe.php', //Here you will fetch records 
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
            url : 'edit_mpdo_mooe.php', //Here you will fetch records 
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
            url : 'delete_mpdo_mooe.php', //Here you will fetch records 
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
				<a class="navbar-brand" href="home">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="aipMPDO">AIP</a></li>
							<li><a href="add_year">Budget Year</a></li>
							<li><a href="heads">Department Heads List</a></li>
							
							
						</ul>
					</li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registry Allotment and Obligations (RAO)
						<span class="caret"></span></a>	  
						<ul class="dropdown-menu">
							<li><a href="personal_services_mmo_all">Personal Services</a></li>
							<li><a href="mooe_mmo_all">Maint. And Other Operating Expenses</a></li>
							<li><a href="co_mmo_all">Capital Outlay</a></li>
							<li><a href="rao20">20&#37; EDF</a></li>
							<li><a href="none-office">Non - Office</a></li>
							<li><a href="gad">5% Gender and Development (GAD)</a></li>
							<li><a href="continuing_all">Continuing Program</a></li>
							<li><a href="sef">Special Education Fund (SEF)</a></li>
							<li><a href="mdr">5% Municipal Disaster Risk</a></li>
							<li><a href="pwds">1% Senior Citizens & Persons With Disabilities</a></li>
							<li><a href="1iralcpc">1% IRA &amp; LCPC</a></li>
						</ul>
					</li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
						<span class="caret"></span></a>	  
						<ul class="dropdown-menu">
							<li><a href="mooe_mmo_all">Mayors Office</a></li>
							<li><a href="mooe_sb_all">Sangguniang Bayan</a></li>
							<li><a href="mooe_mpdo_all">Municipal Planning and Development Office</a></li>
							<li><a href="mooe_lcr_all">Local Civil Registrar</a></li>
							<li><a href="mooe_mbo_all">Municipal Budget Office</a></li>
							<li><a href="mooe_macco_all">Municipal Accounting Office</a></li>
							<li><a href="mooe_mto_all">Municipal Treasurers Office</a></li>
							<li><a href="mooe_masso_all">Municipal Assessors Office</a></li>
							<li><a href="mooe_mho_all">Municipal Health Office</a></li>
							<li><a href="mooe_mswd_all">Municipal Social Welfare Development Office</a></li>
							<li><a href="mooe_mao_all">Municipal Agriculturist Office</a></li>
							<li><a href="mooe_meo_all">Municipal Engineering Office</a></li>
							<li><a href="mooe_mbe_all">Municipal Business Enterprise</a></li>
							<li><a href="mooe_gs_all">General Services</a></li>
						</ul>
					</li>
					<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
						<ul class="dropdown-menu">

							<li><a href="export_mpdo_mooe">Export to Excel</a></li>
							<li><a href="personal_services_mpdo_all">Personal Services</a></li>
							<li><a href="co_sb_all">Capital Outlay</a></li>
							
						</ul>	
					</li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<?php if($getlock == '0'){ echo '<li><a href="#"  data-toggle="modal" data-target="#addObl"  data-backdrop="static" data-keyboard="false"><span class="glyphicon glyphicon-plus"></span></a></li>'; } else {} ?>
					<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
						<ul class="dropdown-menu">

							<li><a href="mmpdo1">January</a></li>
							<li><a href="mmpdo2">February</a></li>
							<li><a href="mmpdo3">March</a></li>
							<li><a href="mmpdo4">April</a></li>
							<li><a href="mmpdo5">May</a></li>
							<li><a href="mmpdo6">June</a></li>
							<li><a href="mmpdo7">July</a></li>
							<li><a href="mmpdo8">August</a></li>
							<li><a href="mmpdo9">September</a></li>
							<li><a href="mmpdo10">October</a></li>
							<li><a href="mmpdo11">November</a></li>
							<li><a href="mmpdo12">December</a></li>
							
						</ul>	
					</li>
					
					
					
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" style="color:gray; pointer-events: none; border-bottom: 1px solid #ddd" tabindex="-1"><?PHP echo $_SESSION['isLoginName']; ?></a></li>
							<li><a href="accounts">Accounts</a></li>
							<li><a href="log">Audit Log</a></li>
							<li><a href="logmeOut">Log Out</a></li>
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

					<form method ="POST" action="" name="form1">

						<table class="table table-condensed borderless">
							<tr>
								<td>Date</td>
								<td>ALOBS</td>
								<td>Claimant</td>
							</tr>

							<tr>
								<td><strong><input class="form-control" type="date" name="date" value="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>"></strong></td>
								<td><input class="form-control" type="number" name="alobs" id="alobs" required min="0" step="any" max=999></td>
								<td><input class="form-control" type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></td>
							</tr>
							
							<tr>
								<td colspan="3"><textarea class="form-control" name="description" maxlength="50"></textarea></td>
							</tr>	
							
							<tr>
								<td>Travelling Expenses</td>
								<td class="help-block">02 &nbsp; 01 &nbsp; 010</td>
								<td><input type="number" step="any" name="tev" min=0 class="form-control"></td>
							</tr>
							<tr>
								<td>Training &amp; Seminar Expenses</td>
								<td class="help-block">02 &nbsp; 02 &nbsp;	010</td>
								<td><input type="number" step="any" name="trainings" min=0 class="form-control"></td>
							</tr>
							<tr>
								<td>Telephone / Telegraph and Internet</td>
								<td class="help-block">02 &nbsp; 05 &nbsp;	030</td>
								<td><input type="number" step="any" name="tel"  min=0 class="form-control"></td>
							</tr>
							<tr>
								<td>Office Supplies</td>
								<td class="help-block">02 &nbsp; 03 &nbsp;	010</td>
								<td><input type="number" step="any" name="supplies"  min=0 class="form-control"></td>
							</tr>
							<tr>
								<td>Other Maintenance and Operating Expenses</td>
								<td class="help-block">02 &nbsp; 99 &nbsp;	990</td>
								<td><input type="number" step="any" name="others" min=0 class="form-control"></td>
							</tr>

						</table>

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
				<h2>Mun. Planning and Development Office <small>Maintenance and Other Operating Expenses</small></h2>
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
						<th>CLAIMANT</th>
						<th>TOTAL OBLIGATION</th>
						<th>DESCRIPTION</th>
						<th>ACTION</th>

					</tr>
				</thead>
				<tbody>


					
					
					<?PHP
					$yearTransact = $_SESSION['budget']; 
					$result = $db->prepare("SELECT * FROM mpdomooe WHERE yearm = ? ORDER BY alobs DESC");
					$result->execute([$yearTransact]);
					
					while ($row = $result->fetch(PDO::FETCH_BOTH)) {
						echo '<tr>';
						echo '<td>'.$row['month'].'/'.$row['day'].'/'.$row['yearm'].'</td>';
						echo '<td data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#infoModal" data-id="'.$row['alobs'].'">'.$row['alobs'].'</td>';
						echo '<td>'.$row['claimant'].'</td>';
						echo '<td>'.number_format($row['total'],2).'</td>';
						echo '<td>'.$row['description'].'</td>';
						if($getlock == '0'){ echo '<td><a class="btn btn-default btn-xs"  data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#editModal" data-id="'.$row['alobs'].'"><span class="glyphicon glyphicon-edit"></span></a> ';
						echo '<a class="btn btn-default btn-xs"  data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#deleteModal" data-id="'.$row['alobs'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
						echo '</tr>';
					}
					else {echo'<td>Locked for Editing</td>';}
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
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Data</h4>
			</div>
			<form action="" method="POST">
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

