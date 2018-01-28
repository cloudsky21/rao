<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>
<html>
<head>

<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<title>Maintenance and Other Operating Expenses - RAO</title>

	
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
<form>
<div id="container">
<h2>REGISTRY OF ALLOTMENT AND OBLIGATION<br>
Maintenance and Other Operating Expenses
</h2>

<table>
<tr>
<td>
<label id="idfund">Fund: </label>
</td>

<td>
<select id="dept" name = "dept">
<option value="mayors">Mayors Office</option>
<option value="sb">Sangguniang Bayan</option>
<option value="mpdc">Municipal Planning and Development Office</option>


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
<td><input type="text" id="allotment" readonly></td>
</tr>

<tr>
<td><label>Claimant:</label></td>
<td><input type="text" id="claimant"></td>
<td><label>Balance:</label></td>
<td><input type="text" id="balance" readonly></td>
</tr>

<tr>
<td><label>Description:</label></td>
<td><input type="text" id="DescriptionTrans"></td>
<td><input type="submit" value="Submit"></td>
</tr>



</table>
</div>
</form>


</body>
</html>