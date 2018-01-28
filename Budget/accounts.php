<?PHP 
include ("cfg.php");
session_start();
if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
}

?>
<?php




 
if(isset($_POST['delete_account'])){
	
	$get_record = $_POST['recorded'];
	
	$result = $db->prepare("DELETE FROM account WHERE account_id = ?");
	$result->execute([$get_record]);
		
	unset($_POST);
	header("location: ".$_SERVER['PHP_SELF']);

}

if(isset($_POST['addAccount'])){
	
	$userid = htmlentities($_POST['usr'], ENT_QUOTES);
	$userpas = sha1($_POST['pwd']);
	$usersname = htmlentities($_POST['acname'], ENT_QUOTES);
	$userposition = htmlentities($_POST['actype'], ENT_QUOTES);
	
	$result = $db->prepare("INSERT INTO account (account_id, password, accountName, position) VALUES (?,?,?,?)");
	$result->execute([$userid, $userpas, $usersname, $userposition]);	
	
	unset($_POST);
	header("location: ".$_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootswatch/solar/bootstrap.min.css">
<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Accounts</title>

<script>

$(document).ready(function(){
    $('#delAccount').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
			cache: false,
            type : 'post',
            url : 'delete_account.php', //Here you will fetch records 
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


<div class="modal fade" id="addAccount" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add User Account</h4>
					<form method="post" action="">
            </div>
            <div class="modal-body">
				
				
				
				
						<table class="table borderless">
							<tr>
								<td><label for="usr">User ID: </label></td>
								<td><input type="text" class="form-control" id="usr" name="usr" placeholder="Enter user account"></td>
							</tr>
							<tr>
								<td><label  for="pwd">Password:</label></td>
								<td><input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password"></td>
							</tr>
							
							<tr>
								<td><label for="name">Account Name / Nickname:</label></td>
								<td><input type="text" class="form-control" id="name" name="acname" placeholder="John" required></td>
							</tr>

							<?php 
								$result = $db->prepare("SELECT count(*) as total FROM account WHERE position = ?");
								$result->execute(["Admin Account"]);
								
								foreach($result as $row){
									
								$abled = $row['total'];
								
									if($abled == "2"){

										echo '<tr>';
											echo '<td><label for="actype">Account Type:</label></td>';
											echo '<td><select name="actype" id="actype" class="form-control">';
												
												echo '<option value="Guest" selected>Guest</option>';
													echo '</select>';
														echo '</td>';
															echo '</tr>';
															
								
									}
									else{
										
										echo '<tr>';
											echo '<td><label for="actype">Account Type:</label></td>';
											echo '<td><select name="actype" id="actype" class="form-control">';
												echo '<option value="Admin Account">Admin</option>';
												echo '<option value="Guest" selected>Guest</option>';
													echo '</select>';
														echo '</td>';
															echo '</tr>';										
									}
										
										
										
									
								}
								?>
								
					
						</table>
            </div>
            <div class="modal-footer">
               	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				 <button type="submit" class="btn btn-primary" name="addAccount">Add Account</button>
					</form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="delAccount" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete User Account</h4>
            </div>
			<form action="" method="POST">
            <div class="modal-body">
                <div class="edit-data"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="delete_account" class="btn btn-danger">Confirm</button>
            </div>
			</form>
        </div>
    </div>
</div>



<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="home">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </a>
		</div>
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
			<li><a href="sef">Special Eduction Fund (SEF)</a></li>
			<li><a href="mdr">5% Municipal Disaster Risk</a></li>
			<li><a href="pwds">1% Senior Citizens & Persons With Disabilities</a></li>
			<li><a href="1iralcpc">1% IRA &amp; LCPC</a></li>
	   </ul>
	   </li>
      <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
			<span class="caret"></span></a>
		<ul class="dropdown-menu">

		<li><a href="gen_january">SAAO</a></li>
		<li><a href="saaob">SAAOB</a></li>
		
		</ul>	
	  </li>
	  
    </ul>
	
	

	
	<ul class="nav navbar-nav navbar-right">
	<li><a href="#" class="btn" data-toggle="modal" data-target="#addAccount"><span class="glyphicon glyphicon-plus"></span></a></li>
		<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#" style="color:gray; pointer-events: none; border-bottom: 1px solid #ddd" tabindex="-1"><?PHP echo $_SESSION['isLoginName']; ?></a></li>
				<li><a href="accounts">Accounts</a></li>
				<li><a href="log">Audit Log</a></li>
				<li><a href="logmeOut">Log Out</a></li>
			</ul>
	
	
	
  
</div>
</nav>

<div class="container">
<div style="margin-top:70px;">
		
	
		
		<table class="table table-condensed table-hover table-striped">
			<thead>
				<tr>
					<th>Account ID</th>
					<th>Account Name</th>
					<th>Account Type</th>
					<th></th>
				</tr>
			</thead>	

<?PHP
		# Perform database query
  $query = "SELECT * FROM `account` WHERE account_id != ? ORDER BY `account_id` ASC";
  $result = $db->prepare($query);
  $result->execute(["root"]);



        foreach($result as $row) {
			
            echo '<tr>';
			echo '<td>'.$row['account_id'].'</td>';
			echo '<td>'.$row['accountName'].'</td>';
			echo '<td>'.$row['position'].'</td>';
			echo '<td><button type="submit" class="btn btn-danger btn-xs" name="btn_delete" data-id="'.$row['account_id'].'" data-toggle="modal" data-target="#delAccount"><span class="glyphicon glyphicon-trash"></span></button>';
			echo '</tr>';
		
		}
		
			
?>



</table>


</div>
</div>
</body>
</html>