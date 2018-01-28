<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_cont.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	exit();
}

?>
<?PHP 



?>




<?PHP
if(isset($_POST['btn-mmo-co'])){
	if(isset($_POST['column_allotment'])){
		
		$column_name = $_POST['code'];
		
		$query = "INSERT INTO cont_program (thead, name, year, allotment) VALUES(?,?,?,?)";

		$result = $db->prepare($query);
		$result->execute([$_POST['code'], $_POST['wholeName'], date("Y",strtotime($_SESSION['budget'])),$_POST['column_allotment']]);
		

	}
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

$(document).ready(function(){
    $('#infoModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'details_mmo_ps.php', //Here you will fetch records 
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
            url : 'edit_mmo_ps.php', //Here you will fetch records 
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
            url : 'delete_mmo_ps.php', //Here you will fetch records 
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

</script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
			<li><a href="aipMMO">AIP</a></li>
			<li><a href="cont_columns">Columns</a></li>
			<li><a href="cont_rao">RAO</a></li>
			
        </ul>
        </li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
		  <span class="caret"></span></a>	  
	    <ul class="dropdown-menu">
			<li><a href="continuing_mmo_all">Mayors Office</a></li>
			<li><a href="continuing_sb_all">Sangguniang Bayan</a></li>
			<li><a href="continuing_mpdo_all">Municipal Planning and Development Office</a></li>
			<li><a href="continuing_lcr_all">Local Civil Registrar</a></li>
			<li><a href="continuing_mbo_all">Municipal Budget Office</a></li>
			<li><a href="continuing_macco_all">Municipal Accounting Office</a></li>
			<li><a href="continuing_mto_all">Municipal Treasurers Office</a></li>
			<li><a href="continuing_masso_all">Municipal Assessors Office</a></li>
			<li><a href="continuing_mho_all">Municipal Health Office</a></li>
			<li><a href="continuing_mswd_all">Municipal Social Welfare Development Office</a></li>
			<li><a href="continuing_mao_all">Municipal Agriculturist Office</a></li>
			<li><a href="continuing_meo_all">Municipal Engineering Office</a></li>
			<li><a href="continuing_mbe_all">Municipal Business Enterprise</a></li>
			<li><a href="continuing_gs_all">General Services</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Month Views <span class="caret"></span></a>
		<ul class="dropdown-menu">

		<li><a href="continuing_mmo_all">All</a></li>
		<li><a href="ct_mmo_1">January</a></li>
		<li><a href="ct_mmo_2">February</a></li>
		<li><a href="ct_mmo_3">March</a></li>
		<li><a href="ct_mmo_4">April</a></li>
		<li><a href="ct_mmo_5">May</a></li>
		<li><a href="ct_mmo_6">June</a></li>
		<li><a href="ct_mmo_7">July</a></li>
		<li><a href="ct_mmo_8">August</a></li>
		<li><a href="ct_mmo_9">September</a></li>
		<li><a href="ct_mmo_10">October</a></li>
		<li><a href="ct_mmo_11">November</a></li>
		<li><a href="ct_mmo_12">December</a></li>
		
		</ul>	
	  </li>
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
	<li><a href="#"  data-toggle="modal" data-target="#addObl"><span class="glyphicon glyphicon-plus"></span></a></li>
	 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?PHP echo $_SESSION['isLoginName']; ?>&nbsp;<span class="caret"></span></a>
		<ul class="dropdown-menu">
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
			<h2>Continuing Program</h2>
		</div>

			<div class="row">
				<div class="col-sm-6">
					
							<form action="" method="post">
								
									<div class="form-group">
										<label for="select-program">Program/Activities/Project Description:</label>
											<div class="input-group">	
												<select id="select-program" class="form-control" name="select-program">
													<option value="co">Capital Outlays</option> 
													<option value="GS">General Services</option> 
													<option value="20">20&#37; EDF</option> 
													<option value="GAD">GAD</option> 
													<option value="MDR">MDR</option> 
													<option value="SCPWD">1% SC & PWDs</option> 
													<option value="IRALCPC">1% IRA & LCPC</option> 
													<option value="None-Office">None Office</option> 
													<option value="SEF">SEF</option>
												</select>
													<div class="input-group-btn">
														<button type="submit" class="btn btn-default" name="select_btn">Submit</button>
													</div>		
											</div>		
									</div>
									
							</form>		
									
									<?PHP 
									if(isset($_POST['select_btn'])){
									
									$program = $_POST['select-program'];

									switch($program){	
									
									case "co":
										?>
										<form action="" method="POST" class="form-inline">
										
										<?PHP
										
											
											
												
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Program</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">Assigned</th>';
														
														echo '</tr>';
										$result = $db->prepare("SELECT * FROM `aip` WHERE co != ?");
										$result->execute(["0.00"]);
										
										foreach($result as $row){
														echo '<tr>';
																echo '<div class="checkbox">';
																echo '<td><label><input type="checkbox" value="'.$row['co'].'" name="column_allotment">Capital Outlay: </label>'.number_format($row['co'],2).'</td>';
																echo '<td><input type="hidden" name="code" value="co'.$row['departments'].'"></td>';
																echo '<td><input type="text" class="form-control" name="wholeName" value="'.$row['deptName'].'" readonly></td>';
																echo '</div>';
										}
													
												
																echo '<td><button type="submit" class="btn btn-default" name="btn-mmo-co"> >> </button></td>';	
														echo '</tr>';
													echo '</table>';
										
										
										?>
										
										
										</form>
										<?PHP
										break;
									default:
										
										echo 'something is wrong';
									
									
									
												}


												
									}
									?>
									
					
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<div class="col-sm-6">.col-sm-4</div>
						
			</div>		
		
		
		
		
		
		
		
		
		


	</div>
</div>	
</body>
</html>




