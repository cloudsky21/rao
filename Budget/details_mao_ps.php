<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
include("functions_ps_mmo.php");
include("checker_duplications.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');


?>

<?PHP

$alobs = htmlentities($_POST['rowid']);
$year = $_SESSION['budget'];

$result = $db->prepare("SELECT * FROM psmao WHERE alobs = ? AND year_transact = ?");
$result->execute([$alobs, $year]);

foreach ($result as $row){
	
$transact = $row['month_transact'].'/'.$row['day_transact'].'/'.$row['year_transact']; 
$claimant = $row['claimant']; 
$salaries = $row['salaries'];
$pera = $row['PERA']; 
$ra = $row['RA']; 
$ta = $row['TA'];
$clothing_allowance = $row['clothing_allowance']; 
$year_end_bonus = $row['year_end_bonus']; 
$cash_gift = $row['cash_gift']; 
$mid_year_bonus = $row['mid_year_bonus'];
$pib = $row['pib']; 
$gsis = $row['life_retirement'];
$hdmf = $row['pag_ibig']; 
$philhealth = $row['philhealth']; 
$ecc = $row['ecc']; 
$opb = $row['other_personel_benefits']; 
$dtotal = $row['total'];
	
}

?>



			<table class="table table-condensed table-bordered">
				<tbody>
					<tr>
						<td><label>Transaction Date</label><p><?PHP echo $transact; ?></p></td>
						<td><label>ALOBS</label><p style="color: #DC4C46"><?PHP echo $alobs; ?></p></td>
						<td><label>Claimant</label><p><?PHP echo $claimant; ?></p></td>
						<td><label>TOTAL: </label><p><span class="badge"><?PHP echo number_format($dtotal,2); ?></span></p></td>
						
					</tr>
				</tbody>
			</table>
			
			<div style="width: 70%;">
			<ul class="list-group">
				<?PHP 
				if($salaries !="0.00"){ echo'<li class="list-group-item">Salaries<span class="badge">'.number_format($salaries,2).'</span></li>';} else{} 
				if($pera !="0.00"){ echo'<li class="list-group-item">PERA<span class="badge">'.number_format($pera,2).'</span></li>';} else{} 
				if($ra !="0.00"){ echo'<li class="list-group-item">RA<span class="badge">'.number_format($ra,2).'</span></li>';} else{} 
				if($ta !="0.00"){ echo'<li class="list-group-item">TA<span class="badge">'.number_format($ta,2).'</span></li>';} else{} 
				if($clothing_allowance !="0.00"){ echo'<li class="list-group-item">Clothing Allowance<span class="badge">'.number_format($clothing_allowance,2).'</span></li>';} else{} 
				if($year_end_bonus !="0.00"){ echo'<li class="list-group-item">Year-End Bonus<span class="badge">'.number_format($year_end_bonus,2).'</span></li>';} else{} 
				if($cash_gift !="0.00"){ echo'<li class="list-group-item">Cash Gift<span class="badge">'.number_format($cash_gift,2).'</span></li>';} else{} 
				if($mid_year_bonus !="0.00"){ echo'<li class="list-group-item">Mid-Year Bonus<span class="badge">'.number_format($mid_year_bonus,2).'</span></li>';} else{} 
				if($pib !="0.00"){ echo'<li class="list-group-item">PIB<span class="badge">'.number_format($pib,2).'</span></li>';} else{} 
				if($gsis !="0.00"){ echo'<li class="list-group-item">Life and Retirement Contributions<span class="badge">'.number_format($gsis,2).'</span></li>';} else{} 
				if($hdmf !="0.00"){ echo'<li class="list-group-item">PAG-IBIG Contributions<span class="badge">'.number_format($hdmf,2).'</span></li>';} else{} 
				if($philhealth !="0.00"){ echo'<li class="list-group-item">PhilHealth Contributions<span class="badge">'.number_format($philhealth,2).'</span></li>';} else{} 
				if($ecc !="0.00"){ echo'<li class="list-group-item">ECC Contributions<span class="badge">'.number_format($ecc,2).'</span></li>';} else{} 
				if($opb !="0.00"){ echo'<li class="list-group-item">Other Personal Benefits<span class="badge">'.number_format($opb,2).'</span></li>';} else{} 
				
				?>
			</ul>
			</div>	
	