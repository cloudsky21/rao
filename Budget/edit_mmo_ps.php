<?PHP
session_start();
include("insertLog.php");
include("cfg.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}

$posted_alobs = htmlentities($_POST['rowid']);

$result = $db->prepare("SELECT * FROM psmmo WHERE alobs = ? AND year_transact = ?");
$result->execute([$posted_alobs, $_SESSION['budget']]);

foreach ($result as $row){
	
$yt = $row['year_transact'];	
$mt = $row['month_transact'];
$dt = $row['day_transact'];

$claimant = $row['claimant']; 
$description = $row['description']; 
$salaries = $row['salaries'];
$pera = $row['PERA']; 
$ra = $row['RA']; 
$ta = $row['TA'];
$clothing_allowance = $row['clothing_allowance']; 
$honoraria = $row['honoraria'];
$year_end_bonus = $row['year_end_bonus']; 
$cash_gift = $row['cash_gift']; 
$mid_year_bonus = $row['mid_year_bonus'];
$pib = $row['pib']; 
$gsis = $row['life_retirement'];
$hdmf = $row['pag_ibig']; 
$philhealth = $row['philhealth']; 
$ecc = $row['ecc']; 
$opb = $row['other_personel_benefits']; 
$terminal_benefits = $row['terminal_benefits']; 
$dtotal = $row['total']; 

}


?>
<table class="table table-condensed table-hover borderless">
<tbody>
	<tr>
		<td>Date</td>
		<td>ALOBS</td>
		<td>Claimant</td>
	</tr>

	<tr >
		<td><strong><input type="date" name="date" value="<?PHP echo $yt.'-'.$mt.'-'.$dt; ?>" min="<?PHP echo $_SESSION['budget']."-01-01"; ?>" max="<?PHP echo $_SESSION['budget']."-".date("m-d"); ?>" class="form-control"></strong></td>
		<td><input type="number" name="alobs" id="alobs" required min=0 step="any" max=999  class="form-control" value="<?PHP echo substr($posted_alobs,3,3); ?>"></td>
		<td><input type="text" id="claimant" name="claimant" placeholder="Juan Dela Cruz et. al." required  class="form-control" value="<?PHP echo $claimant;?>"></td>
	</tr>
	<tr>
		<td colspan=3><textarea name="description" maxlength="50" class="form-control" placeholder="Description here"><?PHP echo $description ?></textarea></td>
	</tr>
		<tr>
		<td>Salaries</td>
		<td class="textc">01 &nbsp; 01 &nbsp; 010</td>
		<td><input type="number" step="any" name="salaries"  class="form-control" value="<?PHP echo $salaries; ?>"></td>
	</tr>
	<tr>
		<td>PERA</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	010</td>
		<td><input type="number" step="any" name="pera" class="form-control" value="<?PHP echo $pera; ?>"></td>
	</tr>
	<tr>
		<td>RA</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	020</td>
		<td><input type="number" step="any" name="ra" class="form-control" value="<?PHP echo $ra; ?>"></td>
	</tr>
	<tr>
		<td>TA</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	030</td>
		<td><input type="number" step="any" name="ta" class="form-control" value="<?PHP echo $ta; ?>"></td>
	</tr>
	<tr>
		<td>Clothing Allowance</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	040</td>
		<td><input type="number" step="any" name="cloth" class="form-control" value="<?PHP echo $clothing_allowance; ?>"></td>
	</tr>
	<tr>
		<td>Honoraria</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	100</td>
		<td><input type="number" step="any" name="honoraria" class="form-control" value="<?PHP echo $honoraria; ?>"></td>
	</tr>
	<tr>
		<td>Year End Bonus</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	140</td>
		<td><input type="number" step="any" name="year_end" class="form-control" value="<?PHP echo $year_end_bonus; ?>"></td>
	</tr>
	<tr>
		<td>Cash Gift</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	150</td>
		<td><input type="number" step="any" name="cash_gift" class="form-control" value="<?PHP echo $cash_gift; ?>"></td>
	</tr>
	<tr>
		<td>Mid-Year Bonus</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	990-1</td>
		<td><input type="number" step="any" name="mid_year" class="form-control" value="<?PHP echo $mid_year_bonus; ?>"></td>
	</tr>
	<tr>
		<td>PIB</td>
		<td class="textc">01 &nbsp; 02 &nbsp;	080</td>
		<td><input type="number" step="any" name="pib" class="form-control" value="<?PHP echo $pib; ?>"></td>
	</tr>
	<tr>
		<td>Life &amp; Retirement Insurance</td>
		<td class="textc">01 &nbsp; 03 &nbsp;	010</td>
		<td><input type="number" step="any" name="gsis" class="form-control" value="<?PHP echo $gsis; ?>"></td>
	</tr>
	<tr>
		<td>Pag-Ibig Contributions</td>
		<td class="textc">01 &nbsp; 03 &nbsp;	020</td>
		<td><input type="number" step="any" name="hdmf" class="form-control" value="<?PHP echo $hdmf; ?>"></td>
	</tr>
	<tr>
		<td>PHILHEALTH Contributions</td>
		<td class="textc">01 &nbsp; 03 &nbsp;	030</td>
		<td><input type="number" step="any" name="care" class="form-control" value="<?PHP echo $philhealth; ?>"></td>
	</tr>
	<tr>
		<td>ECC Contributions</td>
		<td class="textc">01 &nbsp; 03 &nbsp;	040</td>
		<td><input type="number" step="any" name="ecc" class="form-control" value="<?PHP echo $ecc; ?>"></td>
	</tr>
	<tr>
		<td>Terminal Leave Benefits</td>
		<td class="textc">&nbsp;</td>
		<td><input type="number" step="any" name="tlb" class="form-control" value="<?PHP echo $terminal_benefits; ?>"></td>
	</tr>
	<tr>
		<td>Other Personel Benefits</td>
		<td class="textc">&nbsp;</td>
		<td><input type="number" step="any" name="others" class="form-control" value="<?PHP echo $opb; ?>"></td>
	</tr>
	
</tbody>	
</table>
<input type="hidden" name="alobs_edit" value="<?PHP echo $posted_alobs; ?>">
