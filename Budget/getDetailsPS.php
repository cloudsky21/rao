<?php
  mysql_connect('localhost', 'peter', 'abc123') or die('Could not connect: ' . mysql_error());
  mysql_select_db('budgetsystem') or die('Could not select database');
   
  $placeId = $_POST['placeId'];

  $query = "SELECT * from aip";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  while ($row = mysql_fetch_assoc($result)) {
    if ($placeId == $row['departments']){
      echo json_encode($row);
    }
  }
?>