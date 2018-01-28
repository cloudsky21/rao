<?PHP
include("cfg.php");
$rs = $db->query('DESCRIBE aip');

$rs->execute();
$table_fields = $rs->fetchAll(PDO::FETCH_COLUMN);

foreach ($table_fields as $row){
echo '<table>';
echo '<tr>';
echo '<td>'.$row.'</td>';
echo '</tr>';
echo '</table>';
}


?>