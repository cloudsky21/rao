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

if(isset($_POST['btn-mooe-tev'])){
	
	$db->beginTransaction();
	
try{
	
	$sql = 'INSERT INTO cont_program (thead, name, year, allotment) VALUES (?,?,?,?)';
	$insert_to_db = $db->prepare($sql);
	$insert_to_db->execute([$_POST['code'], $_POST['wholeName'], $_POST['year'],$_POST['column_allotment']]);
	
	
	$addcolumn = $_POST['code'];
	$query = "ALTER TABLE cont ADD `$addcolumn` DECIMAL(20,2) NOT NULL"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	$db->commit();

}
catch(Exception $e){

	$db->rollBack();	
}

	

	
	unset($_POST);
	header("location:".$_SERVER['PHP_SELF']);	
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
        $('.dropdown-toggle').dropdown()
    });	

	
	
 $(document).ready(function(){ /* PREPARE THE SCRIPT */
    $("#select-deparment").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var rowid = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
       /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "get_data.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: "rowid="+rowid, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });

    });
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

<div class="container-fluid">

	<div style="margin-top: 100px;">


		<div class="page-header">
			<h2>Continuing Program</h2>
		</div>

			<div class="row">
				<div class="col-sm-6">
					
							
								
									<div class="panel panel-default">
										<div class="panel-body">
											<label for="select-program">Program/Activities/Project Description:</label>
												<div class="form-group">	
													<select id="select-program" class="form-control" name="select-program" onchange="location= this.value;">
														<option value="cont_columns_co">Capital Outlays</option> 
														<option value="cont_columns_mooe" selected="selected">Maintenance and Other Operating Expenses</option>
														<option value="cont_columns_GS">General Services</option> 
														<option value="cont_columns_20">20&#37; EDF</option> 
														<option value="cont_columns_GAD">GAD</option> 
														<option value="cont_columns_MDR">MDR</option> 
														<option value="cont_columns_SCPWD">1% SC & PWDs</option> 
														<option value="cont_columns_IRALCPC">1% IRA & LCPC</option> 
														<option value="cont_columns_None-Office">None Office</option> 
														<option value="cont_columns_SEF">SEF</option>
													</select>
												</div>
												
											<label for="select-program">Departments:</label>
												<div class="form-group">	
													<select id="select-deparment" class="form-control" name="select-departments">
														<option value=""></option> 
														<option value="MMO">Mayors Office</option> 
														<option value="SB">Sangguniang Bayan</option>
														<option value="MPDO">Mun. Planning And Development Office</option> 
														<option value="LCR">Local Civil Registrar</option> 
														<option value="MBO">Mun. Budget Office</option> 
														<option value="MACCO">Mun. Accounting Office</option> 
														<option value="MTO">Mun. Treasurers Office</option> 
														<option value="MASSO">Mun. Assessors Office</option> 
														<option value="MHO">Mun. Health Office</option> 
														<option value="MSWD">Mun. Social Welfare and Development</option>
														<option value="MAO">Mun. Agriculturist Office</option>
														<option value="MEO">Mun. Engineering Office</option>
														<option value="MBE">Mun. Business Enterprise</option>
														<option value="GS">General Services</option>
													</select>
												</div>	
												
												
									
									
								
									
									<?PHP 
									
									
								/* Maintenance and Other Operating Expenses*/
								
										?>
										
										
										
										
										
										
										
									
										<div id="show">
										
										</div>
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
										</div>
				
									</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th>Code</th>
										<th>Name</th>
										<th>Balance</th>
									</tr>
								</thead>			
				
				
									<?PHP
				
										$columns = $db->prepare("SELECT * FROM cont_program WHERE year = ?");
										$columns->execute([$_SESSION['budget']]);
				
											foreach($columns as $row){	
									?>
								<tbody>
									<tr>
										<td><?PHP echo $row['thead']; ?></td>
										<td><?PHP echo $row['name']; ?></td>
										<td><?PHP echo number_format($row['allotment'],2); ?></td>
									<?PHP } ?>
									</tr>
								</tbody>		
							</table>
						</div>
					</div>
				</div>
						
			</div>		
		
		
		
		
		
		
		
		
		


	</div>
</div>	
</body>
</html>




