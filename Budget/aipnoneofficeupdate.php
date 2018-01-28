<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("function_none-office.php");

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
		$tbl_list = "noneoffice_list_".$_SESSION['budget']; 
	
		$delete_col = $db->prepare("DELETE FROM `$tbl_list` WHERE code = ?");
		$delete_col->execute([$get_recorded]);

		//adjust increment to order
		
		$adjust = $db->prepare("ALTER TABLE `$tbl_list` AUTO_INCREMENT = 1");
		$adjust->execute();
		
		
		$count = 0;
		
		$select_cnt = $db->prepare("ALTER TABLE `$tbl_list` DROP `id`;");
		$select_cnt->execute();
		
		$select_cnt = $db->prepare("ALTER TABLE `$tbl_list` ADD `id` INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");
		$select_cnt->execute();
		
		
		//Delete the column from noneoffice_CY
		$tbl_noneoffice = "noneoffice".$_SESSION['budget'];
		$alter_table = $db->prepare("ALTER TABLE `$tbl_noneoffice` DROP `$get_recorded`, DROP `$bal_recorded`");
		$alter_table->execute();
		
		//Delete the column from rnoneoffice_CY
		$tbl_rnoneoffice = "rnoneoffice".$_SESSION['budget'];
		$alter_table = $db->prepare("ALTER TABLE `$tbl_rnoneoffice` DROP `$get_recorded`");
		$alter_table->execute();
		
		$edfCyTbl = $db->prepare("SELECT * FROM `$tbl_list`");
			$edfCyTbl->execute();
		
			$count = $edfCyTbl->rowCount();
			
				foreach($edfCyTbl as $list){
			
					
					$codelist = $list['code'];
					
			
					$edfcy = $db->prepare("SELECT `$codelist` as valueList FROM `$tbl_noneoffice`");
					$edfcy->execute();
			
					$r = $edfcy->fetch();
			
			
					$total +=  $r['valueList'];
		
				}
				
				if($count>0){
					
				$update_total = $db->prepare("UPDATE `$tbl_noneoffice` SET total = ?");
				$update_total->execute([$total]);
				}
				else{
				$update_total = $db->prepare("UPDATE `$tbl_noneoffice` SET total = 0");
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
	
	

if(isset($_POST['add_program_btn'])){
	
	
$db->beginTransaction();
try
{
	if($_POST['sector'] == "GENERAL PUBLIC SERVICES"){
		$refCode = "1000";
	}
	else if($_POST['sector'] == "SOCIAL SERVICES"){
		$refCode = "4000";
	}
	else if($_POST['sector'] == "ECONOMIC DEVELOPMENT"){
		$refCode = "8000";
	}
	else if($_POST['sector'] == "ENVIRONMENT DEVELOPMENT "){
		$refCode = " ";
	}
	else if($_POST['sector'] == "OTHER SERVICES"){
		$refCode = "9000";
	}
	
	$get_budget = "noneoffice_list_".$_SESSION['budget'];
	$insert_to_db = $db->prepare("INSERT INTO $get_budget (code, propername, sector, refCode, type) VALUES (?,?,?,?,?)");
	$insert_to_db->execute([$_POST['new_code'], $_POST['new_name'], $_POST['sector'], $refCode, $_POST['for-type']]);
	
	
	
	$last_column = get_last_column();
	$last_column_r = get_last_column_rao();
	
	$addcolumn = $_POST['new_code'];
	$addcolumn_bal = $_POST['new_code']."_bal";
	
	$tablename_20 = "noneoffice".$_SESSION['budget'];
	$query = "ALTER TABLE $tablename_20 ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column`, ADD `$addcolumn_bal` DECIMAL(20,2) NOT NULL AFTER $last_column"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
	$tabler20 = "rnoneoffice".$_SESSION['budget'];
	$query = "ALTER TABLE $tabler20 ADD `$addcolumn` DECIMAL(20,2) NOT NULL AFTER `$last_column_r`"; 
	$altertable = $db->prepare($query);
	$altertable->execute();
	
}	
	
catch(Exception $e){

$db->rollBack();
echo "Exception: {$e->getmessage()}\n";	
}	
	
	unset($_POST);
	header('Location: '.$_SERVER['PHP_SELF']);
	
	}

?>

<?PHP 

if(isset($_POST['edit_program_btn'])){

$get_id = htmlentities($_POST['theid']);
$get_shortname = htmlentities($_POST['shortname-edit']);
$get_shortname_bal = htmlentities($_POST['shortname-edit'])."_bal";
$get_longname = htmlentities($_POST['longname-edit']);


	$db->beginTransaction();
	
	try{
		if($_POST['sector'] == "GENERAL PUBLIC SERVICES"){
		$refCode = "1000";
	}
	else if($_POST['sector'] == "SOCIAL SERVICES"){
		$refCode = "4000";
	}
	else if($_POST['sector'] == "ECONOMIC DEVELOPMENT"){
		$refCode = "8000";
	}
	else if($_POST['sector'] == "ENVIRONMENT DEVELOPMENT "){
		$refCode = " ";
	}
	else if($_POST['sector'] == "OTHER SERVICES"){
		$refCode = "9000";
	}
		//Get Original Name first
		$tb_list1 = "noneoffice_list_".$_SESSION['budget'];
		$rs = $db->prepare("SELECT code FROM `$tb_list1` WHERE id=?");
		$rs->execute([$get_id]);
		
		//fetch Data
		
		$get_data = $rs->fetch();
		$old_column = $get_data['code']; // the old column
		
		$old_column_bal = $get_data['code']."_bal"; // the old column with balance
		
		//Update List first
		
		$tb_list2 = "noneoffice_list_".$_SESSION['budget'];
		$rs = $db->prepare("UPDATE `$tb_list2` SET code = ?, propername = ?, sector = ?, refCode = ?, type=? WHERE id = ?");
		$rs->execute([$get_shortname, $get_longname, $_POST['sector'], $refCode, $_POST['for-type'], $get_id]);
		
		//Next Alter the Table of noneoffice_CY
		$tb_20 = "noneoffice".$_SESSION['budget'];
		$rs = $db->prepare("ALTER TABLE `$tb_20` CHANGE `$old_column` `$get_shortname` DECIMAL(20,2) NOT NULL, CHANGE `$old_column_bal` `$get_shortname_bal` DECIMAL(20,2) NOT NULL;");
		$rs->execute();
		
		//Next Alter the Table of rnoneoffice_CY
		$tb_r20 = "rnoneoffice".$_SESSION['budget'];
		$rs = $db->prepare("ALTER TABLE `$tb_r20` CHANGE `$old_column` `$get_shortname` DECIMAL(20,2) NOT NULL;");
		$rs->execute();
		
		$rs = $db->prepare("UPDATE $tb_r20 SET code = ? WHERE code = ?");
		$rs->execute([$get_shortname, $old_column]);
		
		
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
<title>AIP | None-Office Update</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('#edit').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'editaipnoneoffice.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('#show-edit').html(data);//Show fetched data from database
            }
        });
     });
});
$(document).ready(function(){
    $('#delete').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'deleteaipnoneoffice.php', //Here you will fetch records 
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
          <li><a href="aipNoneOffice">AIP</a></li>
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

			<li><a href="aipNoneOffice">Back-to-AIP <strong>None-Office</strong></a></li>
			<li><a href="aipnoneofficesetup">Setup Table</a></li>
			<li><a href="aipnoneofficeupdate">Update Column</a></li>
					
		
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

<div class="modal fade" id="addProgram" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Program</h4>
            </div>
			<form action="" method="POST" class="form-horizontal">
            <div class="modal-body">
            
				<div class="form-group">
				<label for="new_code" class="control-label col-sm-4">Short Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="new_code" required maxlength="20">
						</div>
				</div>	
		
				<div class="form-group">
				<label for="new_name" class="control-label col-sm-4">Name: </label>
					<div class="col-sm-8">	
						<textarea class="form-control" name="new_name" required></textarea>
						</div>
				</div>	
		
				<div class="form-group">
				<label for="sector" class="control-label col-sm-4">Sector: </label>
					<div class="col-sm-8">	
						<select class="form-control" name="sector" required>
							<option value="GENERAL PUBLIC SERVICES">General Public Services</option>
							<option value="SOCIAL SERVICES">Social Services</option>
							<option value="ECONOMIC DEVELOPMENT">Economic Development</option>
							<option value="ENVIRONMENT DEVELOPMENT">Environment Development</option>
							<option value="OTHER SERVICES">Other Services</option>
						</select>
						</div>
				</div>	
				
				<div class="form-group">
				<label for="for-type" class="control-label col-sm-4">Type: </label>
					<div class="col-sm-8">	
						<select class="form-control" name="for-type" required>
							<option value="Personal Services">Personal Services</option>
							<option value="Maintenance And Other Operating Expenses">Maintenance And Other Operating Expenses</option>
							<option value="Capital Outlay">Capital Outlay</option>							
						</select>
						</div>
				</div>
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="add_program_btn" class="btn btn-primary">Add Program</button>
            </div>
			</form>
        </div>
    </div>
</div>


<!---- EDIT MODAL -->
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Program</h4>
            </div>
			<form action="" method="POST" class="form-horizontal">
            <div class="modal-body">
            
			<div id="show-edit"></div>	
			
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="edit_program_btn" class="btn btn-primary">Save Changes</button>
            </div>
			</form>
        </div>
    </div>
</div>


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
			<h2>Update Table of NONE OFFICE</h2>
		</div>
  

			
				<label>Table: <STRONG>None-Office (<?PHP echo $_SESSION['budget'] ?>)</strong></label>&nbsp; &nbsp; <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#addProgram"><span class="glyphicon glyphicon-plus"></span></button>  
					<div class="table-responsive">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Code</th>
									<th>Program List</th>
									<th>Sector</th>
									<th>Type</th>
								</tr>
							</thead>
							
							<tbody>
								<?PHP 
								
									
									
										
										
										/*Check if set in noneoffice_list Current year*/
										$current_year = "noneoffice_list_".$_SESSION['budget'];
										$ifset = $db->prepare("SELECT * FROM $current_year");
										$ifset->execute();
										
										$count = $ifset->rowCount();
										
										foreach($ifset as $row){
											
										
										
										echo '<tr>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['id'].'">'.$row['id'].'</td>';
										echo '<td><input type="hidden" name="for-code" value="'.$row['code'].'">'.$row['code'].'</td>';
										echo '<td><input type="hidden" name="for-name" value="'.$row['propername'].'">'.$row['propername'].'</td>';
										echo '<td><input type="hidden" name="sector" value="'.$row['sector'].'">'.$row['sector'].'</td>';
										echo '<td><input type="hidden" name="for-type" value="'.$row['type'].'">'.$row['type'].'</td>';
										echo '<td><button type="submit" name="edit_btn" class="btn btn-info btn-xs" data-id="'.$row['code'].'" data-toggle="modal" data-target="#edit"> <span class="glyphicon glyphicon-list"> Edit</span></button> &nbsp; <button type="submit" name="delete_btn" class="btn btn-danger btn-xs" data-id="'.$row['code'].'" data-toggle="modal" data-target="#delete"> <span class="glyphicon glyphicon-trash"></span></button</td>';
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