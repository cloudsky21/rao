<?PHP
	include("cfg.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){

	$tbname = $_POST['c'];
	$last = $_POST['dbTables'];

	$result = $db->prepare("ALTER TABLE `cont` ADD $tbname DECIMAL(20,2) NOT NULL DEFAULT '0.00' AFTER $last");
	$result->execute();	
	unset($_POST);
	header('Location: '.$_SERVER['PHP_SELF']);

}

?>

<!DOCTYPE html>
<head>

</head>
<body>
	<form name="f1" method="post" action="">
	<table>
	<tr><td>Last Column<td></tr>
	<tr>
	<td>
	<select id="dbTables" name="dbTables">
	
	<?PHP
		$rs = $db->query('SHOW COLUMNS FROM cont WHERE Type="decimal(20,2)"');
		$rs->execute();
		
		$table_fields = $rs->fetchAll(PDO::FETCH_COLUMN);
		foreach ($table_fields as $row){
		
			
			echo '<option value="'.$row.'" selected="selected">'.$row.'</option>';
			
			
		}
	?>
	
	
	</select>
	</td>
	<td><input type="text" name="c" placeholder="db table name"></td>
	<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
	</table>
	</form>
	
	<table name="tb3">
	
	<?PHP
	
	$result= $db->query('SHOW COLUMNS FROM cont WHERE Type="decimal(20,2)"');
	$result->execute();
	
	$fieldname = $result->fetchAll(PDO::FETCH_COLUMN);
	
	foreach($fieldname as $row){
		echo '<tr>';
		echo '<th>'.$row.'</th>';
		echo '</tr>';
	}
	
	
	?>
	
	
	</table>
	
	
</body>
</html>