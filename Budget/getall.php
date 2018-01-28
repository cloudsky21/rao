<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>


<tr>
	<th rowspan = 2>DATE</th>
	<th rowspan = 2>Ref.<br>
					AO/AA/<br>
					ALOBS<br>
							</th>
	<th rowspan = 2>Claimant</th>
	<th rowspan = 2>Description</th>
	<th rowspan = 2>Total Obligation</th>
	<th colspan = 15>Obligations Incurred</th>
</tr>
<tr>
	<th>SALARIES <br> 05 &nbsp; 01 &nbsp; 01 &nbsp; 010</th>
	<th>PERA <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	010</th>
	<th>RA <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	020 </th>
	<th>TA <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	030</th>
	<th>CLOTHING <BR> ALLOWANCE <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	040</th>
	<th>HONORARIA <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	100</th>
	<th>YEAR END BONUS <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	140</th>
	<th>CASH GIFT <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	150</th>
	<th>MID-YEAR BONUS <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	990-1</th>
	<th>PIB <br> 05 &nbsp; 01 &nbsp; 02 &nbsp;	080</th>
	<th>LIFE &amp RETIREMENT INS. <BR> CONTRIBUTIONS<br> 05 &nbsp; 01 &nbsp; 03 &nbsp;	010</th>
	<th>PAG-IBIG <BR> CONTRIBUTIONS <br> 05 &nbsp; 01 &nbsp; 03 &nbsp;	020</th>
	<th>PHILHEALTH <BR> CONTRIBUTIONS <br> 05 &nbsp; 01 &nbsp; 03 &nbsp;	030</th>
	<th>ECC CONTRIBUTIONS <br> 05 &nbsp; 01 &nbsp; 03 &nbsp;	040</th>
	<th>Other Personel Benefits</th>
</tr>



<?PHP
include ("config.php");
include("functions_ps_mmo.php");
session_start();


$q = $_REQUEST['q'];


if($q=="ALL"){
$yearTransact = $_SESSION['budget'];
$query2 = "SELECT year_transact, month_transact, day_transact, alobs, claimant, description, salaries, PERA, RA, TA, clothing_allowance, honoraria, year_end_bonus, cash_gift, 	mid_year_bonus, pib, 	life_retirement, pag_ibig, philhealth, ecc, other_personel_benefits, total FROM psmmo WHERE year_transact = '$yearTransact'";
$result2 = mysqli_query($db,$query2);
 
  while ($row= mysqli_fetch_assoc($result2)) {
            echo '<tr>';
			echo '<td>'.$row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.$row['description'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';
			echo '<td>'.number_format($row['salaries'],2).'</td>';
			echo '<td>'.number_format($row['PERA'],2).'</td>';
			echo '<td>'.number_format($row['RA'],2).'</td>';
			echo '<td>'.number_format($row['TA'],2).'</td>';
			echo '<td>'.number_format($row['clothing_allowance'],2).'</td>';
			echo '<td>'.number_format($row['honoraria'],2).'</td>';
			echo '<td>'.number_format($row['year_end_bonus'],2).'</td>';
			echo '<td>'.number_format($row['cash_gift'],2).'</td>';
			echo '<td>'.number_format($row['mid_year_bonus'],2).'</td>';
			echo '<td>'.number_format($row['pib'],2).'</td>';
			echo '<td>'.number_format($row['life_retirement'],2).'</td>';
			echo '<td>'.number_format($row['pag_ibig'],2).'</td>';
			echo '<td>'.number_format($row['philhealth'],2).'</td>';
			echo '<td>'.number_format($row['ecc'],2).'</td>';
			echo '<td>'.number_format($row['other_personel_benefits'],2).'</td>';
			echo '</tr>';
		}
		
		
		echo '<tr class="border-bottom">';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>TOTAL:</td>';
		echo '<td><strong>'.number_format(get_total_salaries(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_pera(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ra(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ta(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_cloth(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_hon(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_yearend(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_cashgft(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_mid_year(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_pib(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_gsis(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_hdmf(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_care(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ecc(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_others(),2).'</strong></td>';
		echo '</tr>';

		echo '<tr >';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>Total Balance:</td>';
		echo '<td>'.number_format(get_salaries_bal(),2).'</td>';
		echo '<td>'.number_format(get_pera_bal(),2).'</td>';
		echo '<td>'.number_format(get_ra_bal(),2).'</td>';
		echo '<td>'.number_format(get_ta_bal(),2).'</td>';
		echo '<td>'.number_format(get_cloth_bal(),2).'</td>';
		echo '<td>'.number_format(get_hon_bal(),2).'</td>';
		echo '<td>'.number_format(get_yearend_bal(),2).'</td>';
		echo '<td>'.number_format(get_cashgft_bal(),2).'</td>';
		echo '<td>'.number_format(get_mid_year_bal(),2).'</td>';
		echo '<td>'.number_format(get_pib_bal(),2).'</td>';
		echo '<td>'.number_format(get_gsis_bal(),2).'</td>';
		echo '<td>'.number_format(get_hdmf_bal(),2).'</td>';
		echo '<td>'.number_format(get_care_bal(),2).'</td>';
		echo '<td>'.number_format(get_ecc_bal(),2).'</td>';
		echo '<td>'.number_format(get_others_bal(),2).'</td>';
		echo '</tr>';



		mysqli_free_result($result2);
		mysqli_close($db);

		
		
}

else
{
$yearTransact = $_SESSION['budget'];
$query2 = "SELECT year_transact, month_transact, day_transact, alobs, claimant, description, salaries, PERA, RA, TA, clothing_allowance, honoraria, year_end_bonus, cash_gift, 	mid_year_bonus, pib, 	life_retirement, pag_ibig, philhealth, ecc, other_personel_benefits, total FROM psmmo WHERE month_transact = '$q' && year_transact = '$yearTransact'";
$result2 = mysqli_query($db,$query2);
 
  while ($row= mysqli_fetch_assoc($result2)) {
          
			echo '<td>'.$row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact'].'</td>';
			echo '<td>'.$row['alobs'].'</td>';
			echo '<td>'.$row['claimant'].'</td>';
			echo '<td>'.$row['description'].'</td>';
			echo '<td>'.number_format($row['total'],2).'</td>';
			echo '<td>'.number_format($row['salaries'],2).'</td>';
			echo '<td>'.number_format($row['PERA'],2).'</td>';
			echo '<td>'.number_format($row['RA'],2).'</td>';
			echo '<td>'.number_format($row['TA'],2).'</td>';
			echo '<td>'.number_format($row['clothing_allowance'],2).'</td>';
			echo '<td>'.number_format($row['honoraria'],2).'</td>';
			echo '<td>'.number_format($row['year_end_bonus'],2).'</td>';
			echo '<td>'.number_format($row['cash_gift'],2).'</td>';
			echo '<td>'.number_format($row['mid_year_bonus'],2).'</td>';
			echo '<td>'.number_format($row['pib'],2).'</td>';
			echo '<td>'.number_format($row['life_retirement'],2).'</td>';
			echo '<td>'.number_format($row['pag_ibig'],2).'</td>';
			echo '<td>'.number_format($row['philhealth'],2).'</td>';
			echo '<td>'.number_format($row['ecc'],2).'</td>';
			echo '<td>'.number_format($row['other_personel_benefits'],2).'</td>';
			
		}
		
		
		echo '<tr class="border-bottom">';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>TOTAL:</td>';
		echo '<td><strong>'.number_format(get_total_salaries(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_pera(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ra(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ta(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_cloth(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_hon(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_yearend(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_cashgft(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_mid_year(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_pib(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_gsis(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_hdmf(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_care(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_ecc(),2).'</strong></td>';
		echo '<td><strong>'.number_format(get_total_others(),2).'</strong></td>';
		echo '</tr>';

		echo '<tr >';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>Total Balance:</td>';
		echo '<td>'.number_format(get_salaries_bal(),2).'</td>';
		echo '<td>'.number_format(get_pera_bal(),2).'</td>';
		echo '<td>'.number_format(get_ra_bal(),2).'</td>';
		echo '<td>'.number_format(get_ta_bal(),2).'</td>';
		echo '<td>'.number_format(get_cloth_bal(),2).'</td>';
		echo '<td>'.number_format(get_hon_bal(),2).'</td>';
		echo '<td>'.number_format(get_yearend_bal(),2).'</td>';
		echo '<td>'.number_format(get_cashgft_bal(),2).'</td>';
		echo '<td>'.number_format(get_mid_year_bal(),2).'</td>';
		echo '<td>'.number_format(get_pib_bal(),2).'</td>';
		echo '<td>'.number_format(get_gsis_bal(),2).'</td>';
		echo '<td>'.number_format(get_hdmf_bal(),2).'</td>';
		echo '<td>'.number_format(get_care_bal(),2).'</td>';
		echo '<td>'.number_format(get_ecc_bal(),2).'</td>';
		echo '<td>'.number_format(get_others_bal(),2).'</td>';
		echo '</tr>';



		mysqli_free_result($result2);
		mysqli_close($db);
}
	
	

 ?>
 
 </html>