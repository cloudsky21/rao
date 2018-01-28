<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_cont.php");

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}


?>

<?PHP
if(isset($_POST['delete_program_btn'])){
	
$get_recorded = htmlentities($_POST['recorded']); // gets the column to be deleted or drop
$bal_recorded = $get_recorded."_bal";

	$db->beginTransaction();
try
{
		$tbl_20_list = "cont_list_".$_SESSION['budget']; 
	
		$delete_col = $db->prepare("DELETE FROM `$tbl_20_list` WHERE code = ?");
		$delete_col->execute([$get_recorded]);

		//adjust increment to order
		
		$adjust = $db->prepare("ALTER TABLE `$tbl_20_list` AUTO_INCREMENT = 1");
		$adjust->execute();
		
		
		$count = 0;
		
		$select_cnt = $db->prepare("ALTER TABLE `$tbl_20_list` DROP `id`;");
		$select_cnt->execute();
		
		$select_cnt = $db->prepare("ALTER TABLE `$tbl_20_list` ADD `id` INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");
		$select_cnt->execute();
		
		
		//Delete the column from gad_CY
		$tbl_20edf = "cont".$_SESSION['budget'];
		$alter_table = $db->prepare("ALTER TABLE `$tbl_20edf` DROP `$get_recorded`, DROP `$bal_recorded`");
		$alter_table->execute();
		
		
		//Delete the column from rgad_CY
		$tbl_r = "rcont".$_SESSION['budget'];
		$alter_table = $db->prepare("ALTER TABLE `$tbl_r` DROP `$get_recorded`");
		$alter_table->execute();
		
		$edfCyTbl = $db->prepare("SELECT * FROM `$tbl_20_list`");
			$edfCyTbl->execute();
		
			$count = $edfCyTbl->rowCount();
			
				foreach($edfCyTbl as $list){
			
					
					$codelist = $list['code'];
					
			
					$edfcy = $db->prepare("SELECT `$codelist` as valueList FROM `$tbl_20edf`");
					$edfcy->execute();
			
					$r = $edfcy->fetch();
			
			
					$total +=  $r['valueList'];
		
				}
				
				if($count>0){
					
				$update_total = $db->prepare("UPDATE `$tbl_20edf` SET total = ?");
				$update_total->execute([$total]);
				}
				else{
				$update_total = $db->prepare("UPDATE `$tbl_20edf` SET total = 0");
				$update_total->execute();
				
				}
		
		
		
		
		
		
}
catch(Exception $e){		
	$db->rollBack();
echo "Exception: {$e->getmessage()}\n";		
}
	unset($_POST);
	header('Location: '.$_SERVER['PHP_SELF']);
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AIP | Continuing Programs</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('#delete').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'deleteaipcont.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('#show-delete').html(data);//Show fetched data from database
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
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="home">Home
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_year">Budget Year</a></li>
          <li><a href="aipMMO">AIP</a></li>
          <li><a href="heads">Department Heads List</a></li>
		  <li><a href="export_all_ps">RAO <?PHP echo $_SESSION['budget']; ?> </a></li>
	      
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
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
			<span class="caret"></span></a>
		<ul class="dropdown-menu scrollable-menu">

			<li><a href="aipMMO">Mayors Office</a></li>
			<li><a href="aipSB">Sangguniang Bayan</a></li>
			<li><a href="aipMPDO">Municipal Planning and Development Office</a></li>
			<li><a href="aipLCR">Local Civil Registrar</a></li>
			<li><a href="aipMBO">Municipal Budget Office</a></li>
			<li><a href="aipMACCO">Municipal Accounting Office</a></li>
			<li><a href="aipMTO">Municipal Treasurers Office</a></li>
			<li><a href="aipMASSO">Municipal Assessors Office</a></li>
			<li><a href="aipMHO">Municipal Health Office</a></li>
			<li><a href="aipMSWD">Municipal Social Welfare Development Office</a></li>
			<li><a href="aipMAO">Municipal Agriculturist Office</a></li>
			<li><a href="aipMEO">Municipal Engineering Office</a></li>
			<li><a href="aipMarket">Municipal Business Enterprise</a></li>
			<li><a href="aipPlaza">General Services</a></li>
			<li><a href="edf">20&#37; EDF</a></li>
			<li><a href="aipNoneOffice">None-Office</a></li>
			<li><a href="aipGAD">Gender and Development</a></li>
			<li><a href="aipMDR">Municipal Disaster Risk</a></li>
			<li><a href="aip1SP">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="aip1iralcpc">1% IRA & LCPC</a></li>
			<li><a href="aipSEF">Special Education Fund (SEF)</a></li>
			<li><a href="aipcont">Continuing Programs</a></li>
		
		</ul>	
		</li>
	<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

			<li><a href="aipcont">Back-to-AIP <strong>Continuing Program</strong></a></li>
			<li><a href="aipcontsetup">Setup Table</a></li>
			<li><a href="aipcontupdate">Update Column</a></li>
					
		
		</ul>	
		</li>	
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
		
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

<!---- DELETE MODAL -->

<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Program</h4>
            </div>
			<form action="" method="POST">
            <div class="modal-body">
            
				<div id="show-delete"></div>	
		
				
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="delete_program_btn" class="btn btn-danger">Delete</button>
            </div>
			</form>
        </div>
    </div>
</div>



<div class="container">
	<div style="margin-top: 100px;">

		<div class="page-header">
			<h2>Update Table of  Continuing Program</h2>
		</div>
  

			
				<label>Table: <STRONG>Continuing Program (<?PHP echo $_SESSION['budget'] ?>)</strong></label>
					<div class="table-responsive">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Code</th>
									<th>Program List</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							
							<tbody>
								<?PHP 
								
									
									
										
										
										/*Check if set in gad_list Current year*/
										$current_year = "cont_list_".$_SESSION['budget'];
										$ifset = $db->prepare("SELECT * FROM $current_year");
										$ifset->execute();
										
										$count = $ifset->rowCount();
										
										foreach($ifset as $row){
											
										
										
										echo '<tr>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['id'].'">'.$row['id'].'</td>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['code'].'">'.$row['code'].'</td>';
										echo '<td><input type="hidden" name="for-name" value="'.$row['propername'].'">'.$row['propername'].'</td>';
										echo '<td><button type="submit" name="delete_btn" class="btn btn-danger btn-xs" data-id="'.$row['code'].'" data-toggle="modal" data-target="#delete"> <span class="glyphicon glyphicon-trash"></span></button</td>';
										echo '</tr>';
										
									
										}
										
								
										
									
								
								
								?>
							</tbody>
						</table>
					</div>
			
	</div>
</div>

</body>
</html>