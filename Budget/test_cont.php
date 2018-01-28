<?PHP
include("cfg.php");


$result = $db->prepare("SELECT departments as code_name, deptName as formal_name, balance_co as allotment FROM aip WHERE departments = ?");
$result->execute(["MMO"]);

?>


<form method="POST" action="">
<?PHP

foreach($result as $row){
	echo '<tr>';
		echo '<td><label for="allotment"><input type="checkbox" name="allotment" id="allotment" value="'.$row['allotment'].'">Capital Outlay</label></td>';
		echo '<td><input type="hidden" name="code-name" value="co"></td>';
		echo '<td><input type="hidden" name="formal-name" value="Capital-Outlay"></td>';
	
	
	
	echo '</tr>';
}



?>
<button type="submit" name="btn-submit">Submit</button>
</form>


<?PHP
if(isset($_POST['btn-submit'])){
	
	if(isset($_POST['allotment'])){
		
		$allotment_post = $_POST['allotment'];
		$code = $_POST['code-name'];
		$f_name = $_POST['formal-name'];
		$result = $db->prepare("INSERT INTO cont_table_list(code_name,formal_name,allotment) VALUES(?,?,?)");
		$result->execute([$code, $f_name, $allotment_post]);
		
		
		$result = $db->prepare("SHOW COLUMNS FROM cont WHERE Field=?");
		$result->execute([$code]);
		
		$rowcount = $result->rowCount();
		if($rowcount>0){ 
		echo 'existed';
		}
		else {
			$result = $db->prepare("ALTER TABLE cont ADD $code DECIMAL(20,2) NOT NULL");
			$result->execute();
		}
	}
	else{
	echo 'not clicked';
}
	
}	


?>