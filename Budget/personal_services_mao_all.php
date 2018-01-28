<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_ps_mao.php");
include("checker_duplications.php");
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
/* gets computes total balance*/ 
$appr = get_appropriation();


$result = $db->prepare("SELECT sum(total) as total FROM psmao WHERE year_transact = ?");
$result->execute([$_SESSION['budget']]);

$row = $result->fetch();
$sum = $row['total'];


$total = $appr - $sum;


$result = $db->prepare("UPDATE aip SET total_ps_balance = ? WHERE departments = ? AND Year = ?");
$result->execute([$total, "MAO", $_SESSION['budget']]);

get_total_salaries();
get_total_pera();
get_total_ra();
get_total_ta();
get_total_cloth();
get_total_yearend();
get_total_cashgft();
get_total_mid_year();
get_total_pib();
get_total_gsis();
get_total_hdmf();
get_total_care();
get_total_ecc();
get_total_others();

get_salaries_bal();
get_pera_bal();
get_ra_bal();
get_ta_bal();
get_cloth_bal();
get_yearend_bal();
get_cashgft_bal();
get_mid_year_bal();
get_pib_bal();
get_gsis_bal();
get_hdmf_bal();
get_care_bal();
get_ecc_bal();
get_others_bal();
?>

<?PHP
if(isset($_POST['delete_ps'])){
	
	$rec = htmlentities($_POST['recorded']);


	$result = $db->prepare("DELETE FROM psmao WHERE alobs = ?");
	$result->execute([$rec]);

	unset($_POST);	
	header("location: ".$_SERVER['PHP_SELF']);	

}

if(isset($_POST['btn_submit'])){

	$post_alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);


//date
	$get_date_Y = date("Y",strtotime($_POST['date']));
	$get_date_m = date("m",strtotime($_POST['date']));
	$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS


	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
		'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
		'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
		'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
		'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );


	$post_claimant = $_POST['claimant'];
	$post_claimant = strtoupper(htmlentities(strtr( $post_claimant, $unwanted_array )));
	$post_description = htmlentities($_POST['description'], ENT_QUOTES);

	
//numbers	
	$post_salary = $_POST['salaries'];
	$post_pera = $_POST['pera'];
	$post_ra = $_POST['ra'];	
	$post_ta = $_POST['ta'];
	$post_cloth = $_POST['cloth'];

	$post_yend = $_POST['year_end'];	
	$post_gft = $_POST['cash_gift'];	
	$post_mid = $_POST['mid_year'];	
	$post_pib = $_POST['pib'];
	$post_gsis = $_POST['gsis'];
	$post_hdmf = $_POST['hdmf'];
	$post_care = $_POST['care'];
	$post_ecc = $_POST['ecc'];


	$post_others = $_POST['others'];
	
	$totalObligation = $post_salary +  	$post_pera +$post_ra + $post_ta + $post_cloth+$post_yend+$post_gft+$post_mid+$post_pib+$post_gsis+$post_hdmf+$post_care+$post_ecc  + $post_others;

	$query = "INSERT INTO psmao (
	year_transact, 
	month_transact, 
	day_transact, 
	alobs, 
	claimant,
	description, 
	salaries, 
	PERA, 
	RA, 
	TA, 
	clothing_allowance, 
	year_end_bonus, 
	cash_gift, 
	mid_year_bonus,
	pib, 
	life_retirement,
	pag_ibig, 
	philhealth, 
	ecc, 
	other_personel_benefits, 
	total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

	$result = $db->prepare($query);
	$result->execute([ 
		$get_date_Y, 
		$get_date_m, 
		$get_date_d, 
		$post_alobs, 
		$post_claimant,
		$post_description,
		$post_salary,
		$post_pera,
		$post_ra,
		$post_ta,
		$post_cloth,
		$post_yend,
		$post_gft,
		$post_mid,
		$post_pib,
		$post_gsis,
		$post_hdmf,
		$post_care,
		$post_ecc,
		$post_others, 
		$totalObligation]);  
	
	$cnt = $result->rowCount();
	
	if($cnt == "1") {
		
		unset($_POST);
		header('Location: '.$_SERVER['PHP_SELF']);
		
	}

}


?>
<?PHP
if(isset($_POST['submit_edit_ps'])){
	


	$post_alobs = date("m",strtotime($_POST['date']))."-".sprintf("%03d",$_POST['alobs'])."-".substr(date("Y",strtotime($_POST['date'])),-2);



//date
	$get_date_Y = date("Y",strtotime($_POST['date']));
	$get_date_m = date("m",strtotime($_POST['date']));
	$get_date_d = date("d",strtotime($_POST['date']));
	
//ALOBS


	$post_claimant = strtoupper(htmlentities($_POST['claimant'],ENT_QUOTES));
	$post_description = htmlentities($_POST['description'], ENT_QUOTES);

	
//numbers	
	$post_salary = $_POST['salaries'];
	$post_pera = $_POST['pera'];
	$post_ra = $_POST['ra'];	
	$post_ta = $_POST['ta'];
	$post_cloth = $_POST['cloth'];

	$post_yend = $_POST['year_end'];	
	$post_gft = $_POST['cash_gift'];	
	$post_mid = $_POST['mid_year'];	
	$post_pib = $_POST['pib'];
	$post_gsis = $_POST['gsis'];
	$post_hdmf = $_POST['hdmf'];
	$post_care = $_POST['care'];
	$post_ecc = $_POST['ecc'];
	$post_subsistence = $_POST['subsistence'];
	
	$totalObligation = $post_salary + $post_pera + $post_ra + $post_ta +$post_cloth+$post_yend+$post_gft+$post_mid+$post_pib+$post_gsis+$post_hdmf+$post_care+$post_ecc + $post_others;

	$query = "UPDATE psmao SET
	year_transact=?, 
	month_transact=?, 
	day_transact=?, 
	alobs=?, 
	claimant=?,
	description=?, 
	salaries=?, 
	PERA=?, 
	RA=?, 
	TA=?, 
	clothing_allowance=?, 
	year_end_bonus=?, 
	cash_gift=?, 
	mid_year_bonus=?,
	pib=?, 
	life_retirement=?,
	pag_ibig=?, 
	philhealth=?, 
	ecc=?, 
	other_personel_benefits=?, 
	total=? WHERE alobs = ? AND year_transact = ?";

	$result= $db->prepare($query);
	$result->execute([
		$get_date_Y, 
		$get_date_m, 
		$get_date_d, 
		$post_alobs, 
		$post_claimant,
		$post_description,
		$post_salary,
		$post_pera,
		$post_ra,
		$post_ta,
		$post_cloth,
		$post_yend,
		$post_gft,
		$post_mid,
		$post_pib,
		$post_gsis,
		$post_hdmf,
		$post_care,
		$post_ecc,
		$post_others, 
		$totalObligation, $_POST['alobs_edit'],$_SESSION['budget']]); 

	unset($_POST);
	header("location:".$_SERVER['PHP_SELF']);	
}
?>

<?PHP
/* JANUARY TOTAL Obligation */
$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "01"]);
$row_jan = $result->fetch();
$ps_jan_total = $row_jan['total'];

/* FEBRUARY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "02"]);
$row_feb = $result->fetch();
$ps_feb_total = $row_feb['total'];

/* MARCH TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "03"]);
$row_march = $result->fetch();
$ps_march_total = $row_march['total'];

/* APRIL TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "04"]);
$row_april = $result->fetch();
$ps_april_total = $row_april['total'];

/* MAY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "05"]);
$row_may = $result->fetch();
$ps_may_total = $row_may['total'];

/* JUNE TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "06"]);
$row_june = $result->fetch();
$ps_june_total = $row_june['total'];

/* JULY TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "07"]);
$row_july = $result->fetch();
$ps_july_total = $row_july['total'];

/* AUGUST TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "08"]);
$row_august = $result->fetch();
$ps_august_total = $row_august['total'];

/* SEPTEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "09"]);
$row_september = $result->fetch();
$ps_september_total = $row_september['total'];

/* OCTOBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "10"]);
$row_october = $result->fetch();
$ps_october_total = $row_october['total'];

/* NOVEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "11"]);
$row_november = $result->fetch();
$ps_november_total = $row_november['total'];

/* DECEMBER TOTAL Obligation */

$result = $db->prepare("SELECT SUM(total) AS total FROM psmao WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'], "12"]);
$row_december = $result->fetch();
$ps_december_total = $row_december['total'];



?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PS | Municipal Agriculturist Office</title>
	<link rel="shortcut icon" href="favicon.ico"/>
	<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">

	<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script>

		$(document).ready(function(){
			$('#infoModal').on('show.bs.modal', function (e) {
				var rowid = $(e.relatedTarget).data('id');
				$.ajax({
					
					type : 'post',
            url : 'details_mao_ps.php', //Here you will fetch records 
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
					
					type : 'post',
            url : 'edit_mao_ps.php', //Here you will fetch records 
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
					
					type : 'post',
            url : 'delete_mao_ps.php', //Here you will fetch records 
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
							<li><a href="aipMAO">AIP</a></li>
							<li><a href="add_year">Budget Year</a></li>
							<li><a href="heads">Department Heads List</a></li>
							
							
						</ul>
					</li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registry Allotments and Obligations (RAO)
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
							<li><a href="personal_services_mmo_all">Mayors Office</a></li>
							<li><a href="personal_services_sb_all">Sangguniang Bayan</a></li>
							<li><a href="personal_services_mpdo_all">Municipal Planning and Development Office</a></li>
							<li><a href="personal_services_lcr_all">Local Civil Registrar</a></li>
							<li><a href="personal_services_mbo_all">Municipal Budget Office</a></li>
							<li><a href="personal_services_macco_all">Municipal Accounting Office</a></li>
							<li><a href="personal_services_mto_all">Municipal Treasurers Office</a></li>
							<li><a href="personal_services_masso_all">Municipal Assessors Office</a></li>
							<li><a href="personal_services_mho_all">Municipal Health Office</a></li>
							<li><a href="personal_services_mswd_all">Municipal Social Welfare Development Office</a></li>
							<li><a href="personal_services_mao_all">Municipal Agriculturist Office</a></li>
							<li><a href="personal_services_meo_all">Municipal Engineering Office</a></li>
							<li><a href="personal_services_mbe_all">Municipal Business Enterprise</a></li>
							<li><a href="personal_services_gs_all">General Services</a></li>
						</ul>
					</li>
					<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="export_mao_ps">Export to Excel</a></li>	
							<li><a href="mooe_mao_all">Maint. and Other Operating Expenses</a></li>
							<li><a href="co_mao_all">Capital Outlay</a></li>
							
							
						</ul>	
					</li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<?php if($getlock == '0'){ echo '<li><a href="#"  data-toggle="modal" data-target="#addObl"  data-backdrop="static" data-keyboard="false"><span class="glyphicon glyphicon-plus"></span></a></li>'; } else {} ?>
					<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
						<ul class="dropdown-menu">

							<li><a href="pmao1">January</a></li>
							<li><a href="pmao2">February</a></li>
							<li><a href="pmao3">March</a></li>
							<li><a href="pmao4">April</a></li>
							<li><a href="pmao5">May</a></li>
							<li><a href="pmao6">June</a></li>
							<li><a href="pmao7">July</a></li>
							<li><a href="pmao8">August</a></li>
							<li><a href="pmao9">September</a></li>
							<li><a href="pmao10">October</a></li>
							<li><a href="pmao11">November</a></li>
							<li><a href="pmao12">December</a></li>
							
						</ul>	
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> &nbsp;<span class="caret"></span></a>
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
	<div class="container">

		<div style="margin-top: 100px;">


			<div class="page-header">

				<h2>Mun. Agriculturists Office <small>Personal Services</small></h2>

			</div>
			<ul class="list-group col-sm-4">
				
				<li class="list-group-item"><strong>1st Quarter </strong><span class="badge"><?PHP echo number_format($ps_jan_total + $ps_feb_total + $ps_march_total,2); ?></span></li>
				
				<li class="list-group-item"><strong>2nd Quarter </strong><span class="badge"><?PHP echo number_format($ps_april_total + $ps_may_total + $ps_june_total,2); ?></span></li>
				
				<li class="list-group-item"><strong>3rd Quarter </strong><span class="badge"><?PHP echo number_format($ps_july_total + $ps_august_total + $ps_september_total,2); ?></span></li>
				
				<li class="list-group-item"><strong>4th Quarter </strong><span class="badge"><?PHP echo number_format($ps_october_total + $ps_november_total + $ps_december_total,2); ?></span></li>
				
				
				
			</ul>
			
			
			<ul class="list-group col-sm-8">
				<li class="list-group-item"><label class="list-group-item-heading">Total: </label><p class="list-group-item-text"><?PHP echo number_format(get_total_obligation(),2); ?></p></li>
				<li class="list-group-item"><label class="list-group-item-heading">Balance: </label><p class="list-group-item-text"> <?PHP echo number_format(get_obligation_bal(),2); ?></p></li>
				<li class="list-group-item"><label class="list-group-item-heading">Appropriation:  </label><p class="list-group-item-text"><?PHP echo number_format(get_appropriation(),2); ?></p></li>
			</ul>





			<div class="modal fade" id="addObl" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Obligation</h4>
						</div>
						
						<div class="modal-body">
							
							<form method ="POST" action="" name="form1" autocomplete="off">
								<div class = "form-group">
									<table id="tb1" class="table table-condensed table-hover borderless">
										<thead>
											<tr>
												<th>Date</th>
												<th>ALOBS</th>
												<th>Claimant</th>
											</tr>
										</thead>
										
										<tbody>	

											<tr>
												<td><strong><input class="form-control" type="date" name="date" value="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>"></strong></td>
												<td><input class="form-control" type="number" name="alobs" id="alobs" required min="0" step="any" max=999></td>
												<td><input class="form-control" type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required></td>
											</tr>
											
											<tr>
												<td colspan=3><textarea name="description" maxlength="50" class="form-control" placeholder="Description here"></textarea></td>
											</tr>
											
											<tr>
												<td>Salaries</td>
												<td class="help-block">01 &nbsp; 01 &nbsp; 010</td>
												<td><input class="form-control" type="number" step="any" name="salaries" min=0></td>
											</tr>
											<tr>
												<td>PERA</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	010</td>
												<td><input class="form-control" type="number" step="any" name="pera" min=0></td>
											</tr>
											<tr>
												<td>RA</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	020</td>
												<td><input class="form-control"  type="number" step="any" name="ra" min=0></td>
											</tr>
											<tr>
												<td>TA</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	030</td>
												<td><input class="form-control" type="number" step="any" name="ta" min=0></td>
											</tr>
											<tr>
												<td>Clothing Allowance</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	040</td>
												<td><input class="form-control" type="number" step="any" name="cloth" min=0></td>
											</tr>
											<tr>
												<td>Year End Bonus</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	140</td>
												<td><input class="form-control" type="number" step="any" name="year_end" min=0></td>
											</tr>
											<tr>
												<td>Cash Gift</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	150</td>
												<td><input class="form-control" type="number" step="any" name="cash_gift" min=0></td>
											</tr>
											<tr>
												<td>Mid-Year Bonus</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	990-1</td>
												<td><input class="form-control" type="number" step="any" name="mid_year" min=0></td>
											</tr>
											<tr>
												<td>PIB</td>
												<td class="help-block">01 &nbsp; 02 &nbsp;	080</td>
												<td><input class="form-control" type="number" step="any" name="pib" min=0></td>
											</tr>
											<tr>
												<td>Life &amp; Retirement Insurance</td>
												<td class="help-block">01 &nbsp; 03 &nbsp;	010</td>
												<td><input class="form-control" type="number" step="any" name="gsis" min=0></td>
											</tr>
											<tr>
												<td>Pag-Ibig Contributions</td>
												<td class="help-block">01 &nbsp; 03 &nbsp;	020</td>
												<td><input class="form-control" type="number" step="any" name="hdmf" min=0></td>
											</tr>
											<tr>
												<td>PHILHEALTH Contributions</td>
												<td class="help-block">01 &nbsp; 03 &nbsp;	030</td>
												<td><input class="form-control" type="number" step="any" name="care" min=0></td>
											</tr>
											<tr>
												<td>ECC Contributions</td>
												<td class="help-block">01 &nbsp; 03 &nbsp;	040</td>
												<td><input class="form-control" type="number" step="any" name="ecc" min=0></td>
											</tr>
											<tr>
												<td>Other Personel Benefits</td>
												<td>&nbsp;</td>
												<td><input class="form-control" type="number" step="any" name="others" min=0></td>
											</tr>
											
										</table>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="btn_submit">Add Alobs</button>
										
									</div>	
								</div>
							</form>
						</div>
					</div>
				</div>

				<table class="table table-condensed table-striped table-hover table-striped">
					<thead>
						<tr>
							<th>DATE</th>
							<th>Ref. AO/AA/ALOBS</th>
							<th>CLAIMANT</th>
							<th>TOTAL OBLIGATION</th>
							<th>DESCRIPTION</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?PHP
						$yearTransact = $_SESSION['budget'];
						$result = $db->prepare("SELECT * FROM psmao WHERE year_transact = ?");
						$result->execute([$yearTransact]);
						
						while ($row = $result->fetch(PDO::FETCH_BOTH)) {
							echo '<tr>';
							echo '<td>'.$row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact'].'</td>';
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

			<div class="modal fade" id="deleteModal" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" data-backdrop="false">&times;</button>
							<h4 class="modal-title">Delete Obligation</h4>
						</div>
						<form action="" method="POST">
							<div class="modal-body">
								<div class="edit-data"></div> 
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" data-backdrop="false">Close</button>
								<button type="submit" name="delete_ps" class="btn btn-danger">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade" id="editModal" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" data-backdrop="false">&times;</button>
							<h4 class="modal-title">Edit Data</h4>
						</div>
						<form action="" method="POST">
							<div class="modal-body">
								<div class="edit-data"></div> 
							</div>
							<div class="modal-footer">				
								<button type="button" class="btn btn-default" data-dismiss="modal" data-backdrop="false">Close</button>	
								<button type="submit" class="btn btn-primary" name="submit_edit_ps">Submit</button>		
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




		</div>
	</div>
</body>
</html>