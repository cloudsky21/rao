<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');
if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
	
}
?>
<?PHP
$result = $db->prepare("SELECT total_ps,total_mooe,total_co FROM aip WHERE departments = ? and Year = ?");
$result->execute(["MMO",$_SESSION['budget']]);

foreach($result as $row){
	
	$mmo_total_ps = $row['total_ps'];
	$mmo_total_mooe = $row['total_mooe'];
	$mmo_total_co = $row['total_co'];
}

/* ALLOTMENTS*/
$allot_mmo_ps = $mmo_total_ps / 4;
$allot_mmo_mooe = $mmo_total_mooe / 4;
$allot_mmo_co = $mmo_total_co / 4;




/* GETTING TOTAL OBLIGATIONS */

/* (PERSONAL SERVICES) */
$result = $db->prepare("SELECT (SUM(salaries)+SUM(PERA)+SUM(RA)+SUM(TA)+SUM(clothing_allowance)+SUM(honoraria)+SUM(year_end_bonus)+SUM(cash_gift)+SUM(mid_year_bonus)+SUM(pib)+SUM(life_retirement)+SUM(pag_ibig)+SUM(philhealth)+SUM(ecc)+SUM(other_personel_benefits)+SUM(terminal_benefits)) AS Totalps FROM psmmo WHERE year_transact = ? AND month_transact = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){
	
	$mmo_totalOb_ps = $row['Totalps'];
}

/* (Maintenance) */
$result = $db->prepare("SELECT (SUM(tev)+SUM(training)+SUM(telephone)+SUM(postage)+SUM(insurance_p)+SUM(fidelity_b)+SUM(officeSupplies)+SUM(gasoline)+SUM(motor_maint)+SUM(officeEquip_maint)+SUM(confidential)+SUM(others_maint)) AS Total_mooe FROM mmomooe WHERE yearm=? AND month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){
	
	$mmo_totalOb_mooe = $row['Total_mooe'];
}

/* (Capital Outlay) */
$result = $db->prepare("SELECT SUM(capital_outlay) AS Total_co FROM mmoco WHERE yearm=? AND month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){	
	
	$mmo_totalOb_co = $row['Total_co'];
}





/* BALANCE APPROPRIATIONS */
$bal_appr_mmo_ps = $mmo_total_ps - $mmo_totalOb_ps;
$bal_appr_mmo_mooe = $mmo_total_mooe - $mmo_totalOb_mooe;
$bal_appr_mmo_co = $mmo_total_co - $mmo_totalOb_co;

/* BALANCE ALLOTMENTS */
$bal_allot_mmo_ps = $allot_mmo_ps - $mmo_totalOb_ps;
$bal_allot_mmo_mooe = $allot_mmo_mooe - $mmo_totalOb_mooe;
$bal_allot_mmo_co = $allot_mmo_co - $mmo_totalOb_co;




/* TOTALS*/
$total_mmo_appr = $mmo_total_ps + $mmo_total_mooe + $mmo_total_co;
$total_mmo_allot = $allot_mmo_ps + $allot_mmo_mooe + $allot_mmo_co;
$total_mmo_ob = $mmo_totalOb_ps + $mmo_totalOb_mooe + $mmo_totalOb_co;
$total_mmo_bal_appr = $bal_appr_mmo_ps + $bal_appr_mmo_mooe + $bal_appr_mmo_co;
$total_mmo_bal_allot = $bal_allot_mmo_ps + $bal_allot_mmo_mooe + $bal_allot_mmo_co;
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SAAO | January&nbsp<?PHP echo $_SESSION['budget']; ?></title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="saao.css">
</head>
<body>

	<ul>
		<li>Local Government Unit-Tolosa, Leyte</li>
		<li>STATEMENT OF APPROPRIATIONS, ALLOTMENTS, OBLIGATIONS AND BALANCES</li>
		<li>GENERAL FUND</li>
		<li><label>January&nbsp<?PHP echo $_SESSION['budget']; ?> </label></li>
	</ul>


<table>
	<tr>
		<th>CODE</th>
		<th>FUNCTION/PROGRAM/PROJECT</th>
		<th>APPROPRIATIONS</th>
		<th>ALLOTMENTS</th>
		<th>OBLIGATIONS</th>
		<th>BALANCE OF<br> APPROPRIATIONS</th>
		<th>BALANCE OF<br> ALLOTMENTS</th>	
	</tr>
	<tr>
		<td>1000</td>
		<td>GENERAL PUBLIC SERVICES</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<td>1011</td>
		<td><label>Office of the Municipal Mayor</label></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td>&nbsp; Personal Services</td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_total_ps,2); ?> </td>
		<td style="text-align: center;"><?PHP echo number_format($allot_mmo_ps,2); ?> </td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_totalOb_ps,2); ?> </td>
		<td style="text-align: center;"><?PHP echo number_format($bal_appr_mmo_ps,2); ?> </td>
		<td style="text-align: center;"><?PHP echo number_format($bal_allot_mmo_ps,2); ?> </td>
	</tr>
	<tr>
		<td></td>
		<td>&nbsp; Maintenance and Other Operating Expenses</td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_total_mooe,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($allot_mmo_mooe,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_totalOb_mooe,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($bal_appr_mmo_mooe,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($bal_allot_mmo_mooe,2); ?></td>
		
	</tr>	
	<tr>
		<td></td>
		<td>&nbsp; Capital Outlay</td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_total_co,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($allot_mmo_co,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($mmo_totalOb_co,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($bal_appr_mmo_co,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($bal_allot_mmo_co,2); ?></td>
		
	</tr>
	<tr>
		<td></td>
		<td>&nbsp; Financial Expenses</td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		<td style="text-align: center;"></td>
		
	</tr>
	<tr>
		<td></td>
		<td>&nbsp; &nbsp; &nbsp;&nbsp; <label>TOTAL</label></td>
		<td style="text-align: center;"><?PHP echo number_format($total_mmo_appr,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($total_mmo_allot,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($total_mmo_ob,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($total_mmo_bal_appr,2); ?></td>
		<td style="text-align: center;"><?PHP echo number_format($total_mmo_bal_allot,2); ?></td>
		
	</tr>
	
	
</table>	

