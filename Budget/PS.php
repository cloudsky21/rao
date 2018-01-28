<?php
include("config.php");

$page = $_SERVER['PHP_SELF'];
$sec = "60";


  # Perform database query
  $query = "SELECT * from aip";
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>

<html>
<head>

<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<title>RAO - Personal Services</title>

	
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
<form>
<div id="container">
<h2>REGISTRY OF ALLOTMENT AND OBLIGATION<br>
Personal Services
</h2>

<table>
<tr>
<td>
<label id="dept">Fund: </label>
</td>

<td>
<select id="departments" name = "departments">
<?php
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option value="' . $row['departments'] . '">' . $row['deptName'] . '</option>';
		}
      ?>

</select>
</td>
</tr>
<tr>
<td>
<label id="SystemDate" name="SystemDate">Transaction Date:</labe>
</td>
<td>
<label style="color: #ff0000"><?php echo date('m/d/Y',time()); ?></label>
</td>
</tr>
<tr>
<td></td>
</tr>
<td><label><div style="font-size: 13px;">Function/Program/Project</div></label></td>
</tr>

<tr>
<td><label>Ref. AO/AA/ALOBS: </label></td>
<td><input type="text" id="alobs"></td>
<td><label>Allotment: </label>
<td><input type="text" id="allotment" name="allotment" readonly></td>
</tr>

<tr>
<td><label>Claimant:</label></td>
<td><input type="text" id="claimant"></td>
<td><label>Balance:</label></td>
<td><input type="text" id="balance" name="balance" readonly></td>
</tr>

<tr>
<td><label>Description:</label></td>
<td><input type="text" id="DescriptionTrans"></td>
<td><input type="submit" value="Submit"></td>
</tr>



</table>
</div>
</form>
<script src="jquery.min.js"></script>
    <script>
      function insertResults(json){
        $("#allotment").val(json["budgetAllotment"]);
        $("#balance").val(json["balance"]);
        
      }

      function clearForm(){
        $("#allotment, #balance").val("");
      }

      function makeAjaxRequest(placeId){
        $.ajax({
          type: "POST",
          data: { placeId: placeId },
          dataType: "json", 
          url: "getDetailsPS.php",
          success: function(json) {
            insertResults(json);
          }
        });
      }

      $("#departments").on("change", function(){
        var id = $(this).val();
        if (id === "0"){
          clearForm();
        } else {
          makeAjaxRequest(id);
        }
      });
    </script>

</body>
</html>