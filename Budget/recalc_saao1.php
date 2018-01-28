<?PHP
session_start();
include("cfg.php");


$result = $db->prepare("SELECT * FROM saao01 WHERE Year = ?");
$result->execute([$_SESSION['budget']]);

$count = $result->rowCount();

if($count > 0){
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MMO"]);
	
	
		foreach ($result as $row){
			
			$ps_mmo_appr = $row['total_ps'];
			$mooe_mmo_appr = $row['total_mooe'];
			$co_mmo_appr = $row['total_co'];
			
			
			$ps_mmo_allot = $ps_mmo_appr / 4;
			$mooe_mmo_allot = $mooe_mmo_appr / 4;
			$co_mmo_allot = $co_mmo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmmo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mmo = $row['SUM(total)'];
			} else $ps_obl_mmo = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mmomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mmo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mmoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$co_obl_mmo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mmo_ps = $ps_mmo_appr - $ps_obl_mmo;
			$bal_appr_mmo_mooe = $mooe_mmo_appr - $mooe_obl_mmo;
			$bal_appr_mmo_co = $co_mmo_appr - $co_obl_mmo;
			
			
			
			$bal_allot_mmo_ps = $ps_mmo_allot - $ps_obl_mmo;
			$bal_allot_mmo_mooe = $mooe_mmo_allot - $mooe_obl_mmo;
			$bal_allot_mmo_co = $co_mmo_allot - $co_obl_mmo;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([$_SESSION['budget'], "MMO",$ps_mmo_appr,$mooe_mmo_appr, $co_mmo_appr, $ps_mmo_allot, $mooe_mmo_allot, $co_mmo_allot, $ps_obl_mmo, $mooe_obl_mmo, $co_obl_mmo, $bal_appr_mmo_ps, $bal_appr_mmo_mooe, $bal_appr_mmo_co, $bal_allot_mmo_ps, $bal_allot_mmo_mooe, $bal_allot_mmo_co]);
	
/*Sangguniang Bayan*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "SB"]);
	
	
		foreach ($result as $row){
			
			$ps_sb_appr = $row['total_ps'];
			$mooe_sb_appr = $row['total_mooe'];
			$co_sb_appr = $row['total_co'];
			
			
			$ps_sb_allot = $ps_sb_appr / 4;
			$mooe_sb_allot = $mooe_sb_appr / 4;
			$co_sb_allot = $co_sb_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM pssb WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$ps_obl_sb = $row['SUM(total)'];}
			else $ps_obl_sb = "0.00";
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM sbmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_sb = $row['SUM(total)'];}	
			else $ps_obl_sb = "0.00";
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM sbco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$co_obl_sb = $row['SUM(total)'];}
			else $ps_obl_sb = "0.00";			
				
				
			}
			
			
			
			
			$bal_appr_sb_ps = $ps_sb_appr - $ps_obl_sb;
			$bal_appr_sb_mooe = $mooe_sb_appr - $mooe_obl_sb;
			$bal_appr_sb_co = $co_sb_appr - $co_obl_sb;
			
			
			
			$bal_allot_sb_ps = $ps_sb_allot - $ps_obl_sb;
			$bal_allot_sb_mooe = $mooe_sb_allot - $mooe_obl_sb;
			$bal_allot_sb_co = $co_sb_allot - $co_obl_sb;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([$_SESSION['budget'], "SB",$ps_sb_appr,$mooe_sb_appr, $co_sb_appr, $ps_sb_allot, $mooe_sb_allot, $co_sb_allot, $ps_obl_sb, $mooe_obl_sb, $co_obl_sb, $bal_appr_sb_ps, $bal_appr_sb_mooe, $bal_appr_sb_co, $bal_allot_sb_ps, $bal_allot_sb_mooe, $bal_allot_sb_co]);	
	

/*MPDO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MPDO"]);
	
	
		foreach ($result as $row){
			
			$ps_mpdo_appr = $row['total_ps'];
			$mooe_mpdo_appr = $row['total_mooe'];
			$co_mpdo_appr = $row['total_co'];
			
			
			$ps_mpdo_allot = $ps_mpdo_appr / 4;
			$mooe_mpdo_allot = $mooe_mpdo_appr / 4;
			$co_mpdo_allot = $co_mpdo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmpdo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mpdo = $row['SUM(total)'];
			}
			else  $ps_obl_mpdo = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mpdomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mpdo = $row['SUM(total)'];
			}
			else  $mooe_obl_mpdo = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mpdoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mpdo = $row['SUM(total)'];	
			}
			else  $co_obl_mpdo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mpdo_ps = $ps_mpdo_appr - $ps_obl_mpdo;
			$bal_appr_mpdo_mooe = $mooe_mpdo_appr - $mooe_obl_mpdo;
			$bal_appr_mpdo_co = $co_mpdo_appr - $co_obl_mpdo;
			
			
			
			$bal_allot_mpdo_ps = $ps_mpdo_allot - $ps_obl_mpdo;
			$bal_allot_mpdo_mooe = $mooe_mpdo_allot - $mooe_obl_mpdo;
			$bal_allot_mpdo_co = $co_mpdo_allot - $co_obl_mpdo;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MPDO",
			$ps_mpdo_appr,
			$mooe_mpdo_appr, 
			$co_mpdo_appr, 
			$ps_mpdo_allot, 
			$mooe_mpdo_allot, 
			$co_mpdo_allot, 
			$ps_obl_mpdo, 
			$mooe_obl_mpdo, 
			$co_obl_mpdo, 
			$bal_appr_mpdo_ps, 
			$bal_appr_mpdo_mooe,
			$bal_appr_mpdo_co,
			$bal_allot_mpdo_ps, 
			$bal_allot_mpdo_mooe,
			$bal_allot_mpdo_co]);	
	
/*LCR*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "LCR"]);
	
	
		foreach ($result as $row){
			
			$ps_lcr_appr = $row['total_ps'];
			$mooe_lcr_appr = $row['total_mooe'];
			$co_lcr_appr = $row['total_co'];
			
			
			$ps_lcr_allot = $ps_lcr_appr / 4;
			$mooe_lcr_allot = $mooe_lcr_appr / 4;
			$co_lcr_allot = $co_lcr_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM pslcr WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_lcr = $row['SUM(total)'];
			}
			else  $ps_obl_lcr = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM lcrmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_lcr = $row['SUM(total)'];
			}
			else  $mooe_obl_lcr = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM lcrco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_lcr = $row['SUM(total)'];	
			}
			else  $co_obl_lcr = "0.00";	
				
			}
			
			
			
			
			$bal_appr_lcr_ps = $ps_lcr_appr - $ps_obl_lcr;
			$bal_appr_lcr_mooe = $mooe_lcr_appr - $mooe_obl_lcr;
			$bal_appr_lcr_co = $co_lcr_appr - $co_obl_lcr;
			
			
			
			$bal_allot_lcr_ps = $ps_lcr_allot - $ps_obl_lcr;
			$bal_allot_lcr_mooe = $mooe_lcr_allot - $mooe_obl_lcr;
			$bal_allot_lcr_co = $co_lcr_allot - $co_obl_lcr;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"LCR",
			$ps_lcr_appr,
			$mooe_lcr_appr, 
			$co_lcr_appr, 
			$ps_lcr_allot, 
			$mooe_lcr_allot, 
			$co_lcr_allot, 
			$ps_obl_lcr, 
			$mooe_obl_lcr, 
			$co_obl_lcr, 
			$bal_appr_lcr_ps, 
			$bal_appr_lcr_mooe,
			$bal_appr_lcr_co,
			$bal_allot_lcr_ps, 
			$bal_allot_lcr_mooe,
			$bal_allot_lcr_co]);	
	
				
	
	
	
/*MBO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MBO"]);
	
	
		foreach ($result as $row){
			
			$ps_mbo_appr = $row['total_ps'];
			$mooe_mbo_appr = $row['total_mooe'];
			$co_mbo_appr = $row['total_co'];
			
			
			$ps_mbo_allot = $ps_mbo_appr / 4;
			$mooe_mbo_allot = $mooe_mbo_appr / 4;
			$co_mbo_allot = $co_mbo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmbo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mbo = $row['SUM(total)'];
			}
			else  $ps_obl_mbo = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mbo = $row['SUM(total)'];
			}
			else  $mooe_obl_mbo = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mboco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mbo = $row['SUM(total)'];	
			}
			else  $co_obl_mbo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mbo_ps = $ps_mbo_appr - $ps_obl_mbo;
			$bal_appr_mbo_mooe = $mooe_mbo_appr - $mooe_obl_mbo;
			$bal_appr_mbo_co = $co_mbo_appr - $co_obl_mbo;
			
			
			
			$bal_allot_mbo_ps = $ps_mbo_allot - $ps_obl_mbo;
			$bal_allot_mbo_mooe = $mooe_mbo_allot - $mooe_obl_mbo;
			$bal_allot_mbo_co = $co_mbo_allot - $co_obl_mbo;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MBO",
			$ps_mbo_appr,
			$mooe_mbo_appr, 
			$co_mbo_appr, 
			$ps_mbo_allot, 
			$mooe_mbo_allot, 
			$co_mbo_allot, 
			$ps_obl_mbo, 
			$mooe_obl_mbo, 
			$co_obl_mbo, 
			$bal_appr_mbo_ps, 
			$bal_appr_mbo_mooe,
			$bal_appr_mbo_co,
			$bal_allot_mbo_ps, 
			$bal_allot_mbo_mooe,
			$bal_allot_mbo_co]);	
	
				
/*MACCO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MACCO"]);
	
	
		foreach ($result as $row){
			
			$ps_macco_appr = $row['total_ps'];
			$mooe_macco_appr = $row['total_mooe'];
			$co_macco_appr = $row['total_co'];
			
			
			$ps_macco_allot = $ps_macco_appr / 4;
			$mooe_macco_allot = $mooe_macco_appr / 4;
			$co_macco_allot = $co_macco_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmacco WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_macco = $row['SUM(total)'];
			}
			else  $ps_obl_macco = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maccomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_macco = $row['SUM(total)'];
			}
			else  $mooe_obl_macco = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maccoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_macco = $row['SUM(total)'];	
			}
			else  $co_obl_macco = "0.00";	
				
			}
			
			
			
			
			$bal_appr_macco_ps = $ps_macco_appr - $ps_obl_macco;
			$bal_appr_macco_mooe = $mooe_macco_appr - $mooe_obl_macco;
			$bal_appr_macco_co = $co_macco_appr - $co_obl_macco;
			
			
			
			$bal_allot_macco_ps = $ps_macco_allot - $ps_obl_macco;
			$bal_allot_macco_mooe = $mooe_macco_allot - $mooe_obl_macco;
			$bal_allot_macco_co = $co_macco_allot - $co_obl_macco;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MACCO",
			$ps_macco_appr,
			$mooe_macco_appr, 
			$co_macco_appr, 
			$ps_macco_allot, 
			$mooe_macco_allot, 
			$co_macco_allot, 
			$ps_obl_macco, 
			$mooe_obl_macco, 
			$co_obl_macco, 
			$bal_appr_macco_ps, 
			$bal_appr_macco_mooe,
			$bal_appr_macco_co,
			$bal_allot_macco_ps, 
			$bal_allot_macco_mooe,
			$bal_allot_macco_co]);	
	
				
/*MTO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MTO"]);
	
	
		foreach ($result as $row){
			
			$ps_mto_appr = $row['total_ps'];
			$mooe_mto_appr = $row['total_mooe'];
			$co_mto_appr = $row['total_co'];
			
			
			$ps_mto_allot = $ps_mto_appr / 4;
			$mooe_mto_allot = $mooe_mto_appr / 4;
			$co_mto_allot = $co_mto_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmto WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mto = $row['SUM(total)'];
			}
			else  $ps_obl_mto = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mtomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mto = $row['SUM(total)'];
			}
			else  $mooe_obl_mto = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mtoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mto = $row['SUM(total)'];	
			}
			else  $co_obl_mto = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mto_ps = $ps_mto_appr - $ps_obl_mto;
			$bal_appr_mto_mooe = $mooe_mto_appr - $mooe_obl_mto;
			$bal_appr_mto_co = $co_mto_appr - $co_obl_mto;
			
			
			
			$bal_allot_mto_ps = $ps_mto_allot - $ps_obl_mto;
			$bal_allot_mto_mooe = $mooe_mto_allot - $mooe_obl_mto;
			$bal_allot_mto_co = $co_mto_allot - $co_obl_mto;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MTO",
			$ps_mto_appr,
			$mooe_mto_appr, 
			$co_mto_appr, 
			$ps_mto_allot, 
			$mooe_mto_allot, 
			$co_mto_allot, 
			$ps_obl_mto, 
			$mooe_obl_mto, 
			$co_obl_mto, 
			$bal_appr_mto_ps, 
			$bal_appr_mto_mooe,
			$bal_appr_mto_co,
			$bal_allot_mto_ps, 
			$bal_allot_mto_mooe,
			$bal_allot_mto_co]);	
	
				
/*MASSO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MASSO"]);
	
	
		foreach ($result as $row){
			
			$ps_masso_appr = $row['total_ps'];
			$mooe_masso_appr = $row['total_mooe'];
			$co_masso_appr = $row['total_co'];
			
			
			$ps_masso_allot = $ps_masso_appr / 4;
			$mooe_masso_allot = $mooe_masso_appr / 4;
			$co_masso_allot = $co_masso_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmasso WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_masso = $row['SUM(total)'];
			}
			else  $ps_obl_masso = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM massomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_masso = $row['SUM(total)'];
			}
			else  $mooe_obl_masso = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM massoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_masso = $row['SUM(total)'];	
			}
			else  $co_obl_masso = "0.00";	
				
			}
			
			
			
			
			$bal_appr_masso_ps = $ps_masso_appr - $ps_obl_masso;
			$bal_appr_masso_mooe = $mooe_masso_appr - $mooe_obl_masso;
			$bal_appr_masso_co = $co_masso_appr - $co_obl_masso;
			
			
			
			$bal_allot_masso_ps = $ps_masso_allot - $ps_obl_masso;
			$bal_allot_masso_mooe = $mooe_masso_allot - $mooe_obl_masso;
			$bal_allot_masso_co = $co_masso_allot - $co_obl_masso;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MASSO",
			$ps_masso_appr,
			$mooe_masso_appr, 
			$co_masso_appr, 
			$ps_masso_allot, 
			$mooe_masso_allot, 
			$co_masso_allot, 
			$ps_obl_masso, 
			$mooe_obl_masso, 
			$co_obl_masso, 
			$bal_appr_masso_ps, 
			$bal_appr_masso_mooe,
			$bal_appr_masso_co,
			$bal_allot_masso_ps, 
			$bal_allot_masso_mooe,
			$bal_allot_masso_co]);	
	
				
/*General Services*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "General Services"]);
	
	
		foreach ($result as $row){
			
			$ps_gs_appr = $row['total_ps'];
			$mooe_gs_appr = $row['total_mooe'];
			$co_gs_appr = $row['total_co'];
			
			
			$ps_gs_allot = $ps_gs_appr / 4;
			$mooe_gs_allot = $mooe_gs_appr / 4;
			$co_gs_allot = $co_gs_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psgs WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_gs = $row['SUM(total)'];
			}
			else  $ps_obl_gs = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM gsmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_gs = $row['SUM(total)'];
			}
			else  $mooe_obl_gs = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM gsco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_gs = $row['SUM(total)'];	
			}
			else  $co_obl_gs = "0.00";	
				
			}
			
			
			
			
			$bal_appr_gs_ps = $ps_gs_appr - $ps_obl_gs;
			$bal_appr_gs_mooe = $mooe_gs_appr - $mooe_obl_gs;
			$bal_appr_gs_co = $co_gs_appr - $co_obl_gs;
			
			
			
			$bal_allot_gs_ps = $ps_gs_allot - $ps_obl_gs;
			$bal_allot_gs_mooe = $mooe_gs_allot - $mooe_obl_gs;
			$bal_allot_gs_co = $co_gs_allot - $co_obl_gs;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"General Services",
			$ps_gs_appr,
			$mooe_gs_appr, 
			$co_gs_appr, 
			$ps_gs_allot, 
			$mooe_gs_allot, 
			$co_gs_allot, 
			$ps_obl_gs, 
			$mooe_obl_gs, 
			$co_obl_gs, 
			$bal_appr_gs_ps, 
			$bal_appr_gs_mooe,
			$bal_appr_gs_co,
			$bal_allot_gs_ps, 
			$bal_allot_gs_mooe,
			$bal_allot_gs_co]);	
	
				
/*MHO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MHO"]);
	
	
		foreach ($result as $row){
			
			$ps_mho_appr = $row['total_ps'];
			$mooe_mho_appr = $row['total_mooe'];
			$co_mho_appr = $row['total_co'];
			
			
			$ps_mho_allot = $ps_mho_appr / 4;
			$mooe_mho_allot = $mooe_mho_appr / 4;
			$co_mho_allot = $co_mho_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmho WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mho = $row['SUM(total)'];
			}
			else  $ps_obl_mho = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mhomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mho = $row['SUM(total)'];
			}
			else  $mooe_obl_mho = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mhoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mho = $row['SUM(total)'];	
			}
			else  $co_obl_mho = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mho_ps = $ps_mho_appr - $ps_obl_mho;
			$bal_appr_mho_mooe = $mooe_mho_appr - $mooe_obl_mho;
			$bal_appr_mho_co = $co_mho_appr - $co_obl_mho;
			
			
			
			$bal_allot_mho_ps = $ps_mho_allot - $ps_obl_mho;
			$bal_allot_mho_mooe = $mooe_mho_allot - $mooe_obl_mho;
			$bal_allot_mho_co = $co_mho_allot - $co_obl_mho;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MHO",
			$ps_mho_appr,
			$mooe_mho_appr, 
			$co_mho_appr, 
			$ps_mho_allot, 
			$mooe_mho_allot, 
			$co_mho_allot, 
			$ps_obl_mho, 
			$mooe_obl_mho, 
			$co_obl_mho, 
			$bal_appr_mho_ps, 
			$bal_appr_mho_mooe,
			$bal_appr_mho_co,
			$bal_allot_mho_ps, 
			$bal_allot_mho_mooe,
			$bal_allot_mho_co]);	
	
				
/*MSWD*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MSWD"]);
	
	
		foreach ($result as $row){
			
			$ps_mswd_appr = $row['total_ps'];
			$mooe_mswd_appr = $row['total_mooe'];
			$co_mswd_appr = $row['total_co'];
			
			
			$ps_mswd_allot = $ps_mswd_appr / 4;
			$mooe_mswd_allot = $mooe_mswd_appr / 4;
			$co_mswd_allot = $co_mswd_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmswd WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mswd = $row['SUM(total)'];
			}
			else  $ps_obl_mswd = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mswdmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mswd = $row['SUM(total)'];
			}
			else  $mooe_obl_mswd = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mswdco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mswd = $row['SUM(total)'];	
			}
			else  $co_obl_mswd = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mswd_ps = $ps_mswd_appr - $ps_obl_mswd;
			$bal_appr_mswd_mooe = $mooe_mswd_appr - $mooe_obl_mswd;
			$bal_appr_mswd_co = $co_mswd_appr - $co_obl_mswd;
			
			
			
			$bal_allot_mswd_ps = $ps_mswd_allot - $ps_obl_mswd;
			$bal_allot_mswd_mooe = $mooe_mswd_allot - $mooe_obl_mswd;
			$bal_allot_mswd_co = $co_mswd_allot - $co_obl_mswd;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MSWD",
			$ps_mswd_appr,
			$mooe_mswd_appr, 
			$co_mswd_appr, 
			$ps_mswd_allot, 
			$mooe_mswd_allot, 
			$co_mswd_allot, 
			$ps_obl_mswd, 
			$mooe_obl_mswd, 
			$co_obl_mswd, 
			$bal_appr_mswd_ps, 
			$bal_appr_mswd_mooe,
			$bal_appr_mswd_co,
			$bal_allot_mswd_ps, 
			$bal_allot_mswd_mooe,
			$bal_allot_mswd_co]);	
	
				
/*MAO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MAO"]);
	
	
		foreach ($result as $row){
			
			$ps_mao_appr = $row['total_ps'];
			$mooe_mao_appr = $row['total_mooe'];
			$co_mao_appr = $row['total_co'];
			
			
			$ps_mao_allot = $ps_mao_appr / 4;
			$mooe_mao_allot = $mooe_mao_appr / 4;
			$co_mao_allot = $co_mao_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmao WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mao = $row['SUM(total)'];
			}
			else  $ps_obl_mao = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mao = $row['SUM(total)'];
			}
			else  $mooe_obl_mao = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mao = $row['SUM(total)'];	
			}
			else  $co_obl_mao = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mao_ps = $ps_mao_appr - $ps_obl_mao;
			$bal_appr_mao_mooe = $mooe_mao_appr - $mooe_obl_mao;
			$bal_appr_mao_co = $co_mao_appr - $co_obl_mao;
			
			
			
			$bal_allot_mao_ps = $ps_mao_allot - $ps_obl_mao;
			$bal_allot_mao_mooe = $mooe_mao_allot - $mooe_obl_mao;
			$bal_allot_mao_co = $co_mao_allot - $co_obl_mao;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MAO",
			$ps_mao_appr,
			$mooe_mao_appr, 
			$co_mao_appr, 
			$ps_mao_allot, 
			$mooe_mao_allot, 
			$co_mao_allot, 
			$ps_obl_mao, 
			$mooe_obl_mao, 
			$co_obl_mao, 
			$bal_appr_mao_ps, 
			$bal_appr_mao_mooe,
			$bal_appr_mao_co,
			$bal_allot_mao_ps, 
			$bal_allot_mao_mooe,
			$bal_allot_mao_co]);	
	
				
		
	/*MEO*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MEO"]);
	
	
		foreach ($result as $row){
			
			$ps_meo_appr = $row['total_ps'];
			$mooe_meo_appr = $row['total_mooe'];
			$co_meo_appr = $row['total_co'];
			
			
			$ps_meo_allot = $ps_meo_appr / 4;
			$mooe_meo_allot = $mooe_meo_appr / 4;
			$co_meo_allot = $co_meo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmeo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_meo = $row['SUM(total)'];
			}
			else  $ps_obl_meo = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM meomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_meo = $row['SUM(total)'];
			}
			else  $mooe_obl_meo = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM meoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_meo = $row['SUM(total)'];	
			}
			else  $co_obl_meo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_meo_ps = $ps_meo_appr - $ps_obl_meo;
			$bal_appr_meo_mooe = $mooe_meo_appr - $mooe_obl_meo;
			$bal_appr_meo_co = $co_meo_appr - $co_obl_meo;
			
			
			
			$bal_allot_meo_ps = $ps_meo_allot - $ps_obl_meo;
			$bal_allot_meo_mooe = $mooe_meo_allot - $mooe_obl_meo;
			$bal_allot_meo_co = $co_meo_allot - $co_obl_meo;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MEO",
			$ps_meo_appr,
			$mooe_meo_appr, 
			$co_meo_appr, 
			$ps_meo_allot, 
			$mooe_meo_allot, 
			$co_meo_allot, 
			$ps_obl_meo, 
			$mooe_obl_meo, 
			$co_obl_meo, 
			$bal_appr_meo_ps, 
			$bal_appr_meo_mooe,
			$bal_appr_meo_co,
			$bal_allot_meo_ps, 
			$bal_allot_meo_mooe,
			$bal_allot_meo_co]);	
	
/*MBE*/	
	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and departments = ? ");
$result->execute([$_SESSION['budget'], "MBE"]);
	
	
		foreach ($result as $row){
			
			$ps_mbe_appr = $row['total_ps'];
			$mooe_mbe_appr = $row['total_mooe'];
			$co_mbe_appr = $row['total_co'];
			
			
			$ps_mbe_allot = $ps_mbe_appr / 4;
			$mooe_mbe_allot = $mooe_mbe_appr / 4;
			$co_mbe_allot = $co_mbe_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmbe WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mbe = $row['SUM(total)'];
			}
			else  $ps_obl_mbe = "0.00";
				
			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbemooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mbe = $row['SUM(total)'];
			}
			else  $mooe_obl_mbe = "0.00";			
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbeco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mbe = $row['SUM(total)'];	
			}
			else  $co_obl_mbe = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mbe_ps = $ps_mbe_appr - $ps_obl_mbe;
			$bal_appr_mbe_mooe = $mooe_mbe_appr - $mooe_obl_mbe;
			$bal_appr_mbe_co = $co_mbe_appr - $co_obl_mbe;
			
			
			
			$bal_allot_mbe_ps = $ps_mbe_allot - $ps_obl_mbe;
			$bal_allot_mbe_mooe = $mooe_mbe_allot - $mooe_obl_mbe;
			$bal_allot_mbe_co = $co_mbe_allot - $co_obl_mbe;
	
			
			$result = $db->prepare("INSERT INTO saao01 (
			Year, 
			office, 
			ps_appr,
			mooe_appr, 
			co_appr, 
			allotments_ps, 
			allotments_mooe, 
			allotments_co, 
			obligations_ps, 
			obligations_mooe, 
			obligations_co, 
			balanceAppropriation_ps, 
			balanceAppropriation_mooe, 
			balanceAppropriation_co, 
			balanceAllotment_ps, 
			balanceAllotment_mooe, 
			balanceAllotment_co)
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$result->execute([
			$_SESSION['budget'], 
			"MBE",
			$ps_mbe_appr,
			$mooe_mbe_appr, 
			$co_mbe_appr, 
			$ps_mbe_allot, 
			$mooe_mbe_allot, 
			$co_mbe_allot, 
			$ps_obl_mbe, 
			$mooe_obl_mbe, 
			$co_obl_mbe, 
			$bal_appr_mbe_ps, 
			$bal_appr_mbe_mooe,
			$bal_appr_mbe_co,
			$bal_allot_mbe_ps, 
			$bal_allot_mbe_mooe,
			$bal_allot_mbe_co]);	
	
/*20EDF*/	
	
$result = $db->prepare("SELECT mdcOperation,
mvprogram,
barangayan,
faBrgyP,
cbms,
cfLPRAP,
susDevCLUP,
ictTech4ed,
rAndD,
iecEdCamp,
dCem,
udExUgc,
mBrgyRoads,
SportsDev,
afdLproj,
aExtPCapB,
AHCM,
coastalFRM,
LpovRp,
solidWaste,
cleanGreen,
infraBrgys,
loanPayment,
masamasid, 
tourCultAct, 
tourProjinfraDev FROM 20edf WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
	
	
		foreach ($result as $row){
			
			$mdcOperation_appr = $row['mdcOperation'];
			$mvprogram_appr = $row['mvprogram'];
			$barangayan_appr = $row['barangayan'];
			$faBrgyP_appr = $row['faBrgyP'];
			$cbms_appr = $row['cbms'];
			$cfLPRAP_appr = $row['cfLPRAP'];
			$susDevCLUP_appr = $row['susDevCLUP'];
			$ictTech4ed_appr = $row['ictTech4ed'];
			$rAndD_appr = $row['rAndD'];
			$iecEdCamp_appr = $row['iecEdCamp'];
			
			$dCem_appr = $row['dCem'];
			$udExUgc_appr = $row['udExUgc'];
			$mBrgyRoads_appr = $row['mBrgyRoads'];
			$SportsDev_appr = $row['SportsDev'];
			$afdLproj_appr = $row['afdLproj'];
			$aExtPCapB_appr = $row['aExtPCapB'];
			$AHCM_appr = $row['AHCM'];
			$coastalFRM_appr = $row['coastalFRM'];
			$LpovRp_appr = $row['LpovRp'];
			$solidWaste_appr = $row['solidWaste'];
			
			$cleanGreen_appr = $row['cleanGreen'];
			$infraBrgys_appr = $row['infraBrgys'];
			$loanPayment_appr = $row['loanPayment'];
			$masamasid_appr = $row['masamasid'];
			$tourCultAct_appr = $row['tourCultAct'];
			$tourProjinfraDev_appr = $row['tourProjinfraDev'];
			
			
			
			
			
			
			$mdcOperation_allot = $mdcOperation_appr / 4;
			$mvprogram_allot = $mvprogram_appr / 4;
			$barangayan_allot = $barangayan_appr / 4;
			$faBrgyP_allot = $faBrgyP_appr / 4;
			$cbms_allot = $cbms_appr / 4;
			$cfLPRAP_allot = $cfLPRAP_appr / 4;
			$susDevCLUP_allot = $susDevCLUP_appr / 4;
			$ictTech4ed_allot = $ictTech4ed_appr / 4;
			$rAndD_allot = $rAndD_appr / 4;
			$iecEdCamp_allot = $iecEdCamp_appr / 4;
			$dCem_allot = $dCem_appr / 4;
			$udExUgc_allot = $udExUgc_appr / 4;
			$mBrgyRoads_allot = $mBrgyRoads_appr / 4;
			$SportsDev_allot = $SportsDev_appr / 4;
			$afdLproj_allot = $afdLproj_appr / 4;
			$aExtPCapB_allot = $aExtPCapB_appr / 4;
			$AHCM_allot = $AHCM_appr / 4;
			$coastalFRM_allot = $coastalFRM_appr / 4;
			$LpovRp_allot = $LpovRp_appr / 4;
			$solidWaste_allot = $solidWaste_appr / 4;
			$cleanGreen_allot = $cleanGreen_appr / 4;
			$infraBrgys_allot = $infraBrgys_appr / 4;
			$loanPayment_allot = $loanPayment_appr / 4;
			$masamasid_allot = $masamasid_appr / 4;
			$tourCultAct_allot = $tourCultAct_appr / 4;
			$tourProjinfraDev_allot = $tourProjinfraDev_appr / 4;
			
		}
			$rs = $db->prepare("SELECT 
			SUM(mdcOperation), 
			SUM(mvprogram), 
			SUM(barangayan),
			SUM(faBrgyP),
			SUM(cbms),
			SUM(cfLPRAP),
			SUM(susDevCLUP),
			SUM(ictTech4ed),
			SUM(rAndD),
			SUM(iecEdCamp),
			SUM(dCem),
			SUM(udExUgc),
			SUM(mBrgyRoads),
			SUM(SportsDev),
			SUM(afdLproj),
			SUM(aExtPCapB),
			SUM(AHCM),
			SUM(coastalFRM),
			SUM(LpovRp),
			SUM(solidWaste),
			SUM(cleanGreen),
			SUM(infraBrgys),
			SUM(loanPayment),
			SUM(masamasid),
			SUM(tourCultAct),
			SUM(tourProjinfraDev) FROM r20edf WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			
			if(!empty($row['SUM(mdcOperation)'])){$obl_mdc = $row['SUM(mdcOperation)'];} else  $obl_mdc = "0.00";
			if(!empty($row['SUM(mvprogram)'])){$obl_mvp = $row['SUM(mvprogram)'];} else  $obl_mvp = "0.00";
			if(!empty($row['SUM(barangayan)'])){$obl_barangayan = $row['SUM(barangayan)'];} else  $obl_barangayan = "0.00";
			if(!empty($row['SUM(faBrgyP)'])){$obl_faBrgyP = $row['SUM(faBrgyP)'];} else  $obl_faBrgyP = "0.00";
			if(!empty($row['SUM(cbms)'])){$obl_cbms = $row['SUM(cbms)'];} else  $obl_cbms = "0.00";
			if(!empty($row['SUM(cfLPRAP)'])){$obl_cfLPRAP = $row['SUM(cfLPRAP)'];} else  $obl_cfLPRAP = "0.00";
			if(!empty($row['SUM(susDevCLUP)'])){$obl_susDevCLUP = $row['SUM(susDevCLUP)'];} else  $obl_susDevCLUP = "0.00";
			if(!empty($row['SUM(ictTech4ed)'])){$obl_ictTech4ed = $row['SUM(ictTech4ed)'];} else  $obl_ictTech4ed = "0.00";
			if(!empty($row['SUM(rAndD)'])){$obl_rAndD = $row['SUM(rAndD)'];} else  $obl_rAndD = "0.00";
			if(!empty($row['SUM(iecEdCamp)'])){$obl_iecEdCamp = $row['SUM(iecEdCamp)'];} else  $obl_iecEdCamp = "0.00";
			if(!empty($row['SUM(dCem)'])){$obl_dCem = $row['SUM(dCem)'];} else  $obl_dCem = "0.00";
			if(!empty($row['SUM(udExUgc)'])){$obl_udExUgc = $row['SUM(udExUgc)'];} else  $obl_udExUgc = "0.00";
			if(!empty($row['SUM(mBrgyRoads)'])){$obl_mBrgyRoads = $row['SUM(mBrgyRoads)'];} else  $obl_mBrgyRoads = "0.00";
			if(!empty($row['SUM(SportsDev)'])){$obl_SportsDev = $row['SUM(SportsDev)'];} else  $obl_SportsDev = "0.00";
			if(!empty($row['SUM(afdLproj)'])){$obl_afdLproj = $row['SUM(afdLproj)'];} else  $obl_afdLproj = "0.00";
			if(!empty($row['SUM(aExtPCapB)'])){$obl_aExtPCapB = $row['SUM(aExtPCapB)'];} else  $obl_aExtPCapB = "0.00";
			if(!empty($row['SUM(AHCM)'])){$obl_AHCM = $row['SUM(AHCM)'];} else  $obl_AHCM = "0.00";
			if(!empty($row['SUM(coastalFRM)'])){$obl_coastalFRM = $row['SUM(coastalFRM)'];} else  $obl_coastalFRM = "0.00";
			if(!empty($row['SUM(LpovRp)'])){$obl_LpovRp = $row['SUM(LpovRp)'];} else  $obl_LpovRp = "0.00";
			if(!empty($row['SUM(solidWaste)'])){$obl_solidWaste = $row['SUM(solidWaste)'];} else  $obl_solidWaste = "0.00";
			if(!empty($row['SUM(cleanGreen)'])){$obl_cleanGreen = $row['SUM(cleanGreen)'];} else  $obl_cleanGreen = "0.00";
			if(!empty($row['SUM(infraBrgys)'])){$obl_infraBrgys = $row['SUM(infraBrgys)'];} else  $obl_infraBrgys = "0.00";
			if(!empty($row['SUM(loanPayment)'])){$obl_loanPayment = $row['SUM(loanPayment)'];} else  $obl_loanPayment = "0.00";
			if(!empty($row['SUM(masamasid)'])){$obl_masamasid = $row['SUM(masamasid)'];} else  $obl_masamasid = "0.00";
			if(!empty($row['SUM(tourCultAct)'])){$obl_tourCultAct = $row['SUM(tourCultAct)'];} else  $obl_tourCultAct = "0.00";
			if(!empty($row['SUM(tourProjinfraDev)'])){$obl_tourProjinfraDev = $row['SUM(tourProjinfraDev)'];} else  $obl_tourProjinfraDev = "0.00";
			}
			
			
			
//Balance Appropriation			
			$bal_appr_mdcOperation = $mdcOperation_appr - $obl_mdc;
			$bal_appr_mvprogram = $mvprogram_appr - $obl_mvp;
			$bal_appr_barangayan = $barangayan_appr - $obl_barangayan;
			$bal_appr_faBrgyP = $faBrgyP_appr - $obl_faBrgyP;
			$bal_appr_cbms = $cbms_appr - $obl_cbms;
			$bal_appr_cfLPRAP = $cfLPRAP_appr - $obl_cfLPRAP;
			$bal_appr_susDevCLUP = $susDevCLUP_appr - $obl_susDevCLUP;
			$bal_appr_ictTech4ed = $ictTech4ed_appr - $obl_ictTech4ed;
			$bal_appr_rAndD = $rAndD_appr - $obl_rAndD;
			$bal_appr_iecEdCamp = $iecEdCamp_appr - $obl_iecEdCamp;
			$bal_appr_dCem = $dCem_appr - $obl_dCem;
			$bal_appr_udExUgc = $udExUgc_appr - $obl_udExUgc;
			$bal_appr_mBrgyRoads = $mBrgyRoads_appr - $obl_mBrgyRoads;
			$bal_appr_SportsDev = $SportsDev_appr - $obl_SportsDev;
			$bal_appr_afdLproj = $afdLproj_appr - $obl_afdLproj;
			$bal_appr_aExtPCapB = $aExtPCapB_appr - $obl_aExtPCapB;
			$bal_appr_AHCM = $AHCM_appr - $obl_AHCM;
			$bal_appr_coastalFRM = $coastalFRM_appr - $obl_coastalFRM;
			$bal_appr_LpovRp = $LpovRp_appr - $obl_LpovRp;
			$bal_appr_solidWaste = $solidWaste_appr - $obl_solidWaste;
			$bal_appr_cleanGreen = $cleanGreen_appr - $obl_cleanGreen;
			$bal_appr_infraBrgys = $infraBrgys_appr - $obl_infraBrgys;
			$bal_appr_loanPayment = $loanPayment_appr - $obl_loanPayment;
			$bal_appr_masamasid = $masamasid_appr - $obl_masamasid;
			$bal_appr_tourCultAct = $tourCultAct_appr - $obl_tourCultAct;
			$bal_appr_tourProjinfraDev = $tourProjinfraDev_appr - $obl_tourProjinfraDev;


//Balance Allotment			
			$bal_allot_mdcOperation = $mdcOperation_allot - $obl_mdc;
			$bal_allot_mvprogram = $mvprogram_allot - $obl_mvp;
			$bal_allot_barangayan = $barangayan_allot - $obl_barangayan;
			$bal_allot_faBrgyP = $faBrgyP_allot - $obl_faBrgyP;
			$bal_allot_cbms = $cbms_allot - $obl_cbms;
			$bal_allot_cfLPRAP = $cfLPRAP_allot - $obl_cfLPRAP;
			$bal_allot_susDevCLUP = $susDevCLUP_allot - $obl_susDevCLUP;
			$bal_allot_ictTech4ed = $ictTech4ed_allot - $obl_ictTech4ed;
			$bal_allot_rAndD = $rAndD_allot - $obl_rAndD;
			$bal_allot_iecEdCamp = $iecEdCamp_allot - $obl_iecEdCamp;
			$bal_allot_dCem = $dCem_allot - $obl_dCem;
			$bal_allot_udExUgc = $udExUgc_allot - $obl_udExUgc;
			$bal_allot_mBrgyRoads = $mBrgyRoads_allot - $obl_mBrgyRoads;
			$bal_allot_SportsDev = $SportsDev_allot - $obl_SportsDev;
			$bal_allot_afdLproj = $afdLproj_allot - $obl_afdLproj;
			$bal_allot_aExtPCapB = $aExtPCapB_allot - $obl_aExtPCapB;
			$bal_allot_AHCM = $AHCM_allot - $obl_AHCM;
			$bal_allot_coastalFRM = $coastalFRM_allot - $obl_coastalFRM;
			$bal_allot_LpovRp = $LpovRp_allot - $obl_LpovRp;
			$bal_allot_solidWaste = $solidWaste_allot - $obl_solidWaste;
			$bal_allot_cleanGreen = $cleanGreen_allot - $obl_cleanGreen;
			$bal_allot_infraBrgys = $infraBrgys_allot - $obl_infraBrgys;
			$bal_allot_loanPayment = $loanPayment_allot - $obl_loanPayment;
			$bal_allot_masamasid = $masamasid_allot - $obl_masamasid;
			$bal_allot_tourCultAct = $tourCultAct_allot - $obl_tourCultAct;
			$bal_allot_tourProjinfraDev = $tourProjinfraDev_allot - $obl_tourProjinfraDev;
			
	
			
			$result = $db->prepare("INSERT INTO saao20_01 (
			Year, 
			program,
			appr, 
			allotments, 
			obligations,
			balanceAppropriation,
			balanceAllotment)
			VALUES (?,?,?,?,?,?,?)");
			
$a = array(
"mdcOperation",
"mvprogram",
"barangayan",
"faBrgyP",
"cbms",
"cfLPRAP",
"susDevCLUP",
"ictTech4ed",
"rAndD",
"iecEdCamp",
"dCem",
"udExUgc",
"mBrgyRoads",
"SportsDev",
"afdLproj",
"aExtPCapB",
"AHCM",
"coastalFRM",
"LpovRp",
"solidWaste",
"cleanGreen",
"infraBrgys",
"loanPayment",
"masamasid",
"tourCultAct",
"tourProjinfraDev"
);	
$b = array($mdcOperation_appr, $mvprogram_appr, $barangayan_appr, $faBrgyP_appr, $cbms_appr, $cfLPRAP_appr, $susDevCLUP_appr, $ictTech4ed_appr, $rAndD_appr, $iecEdCamp_appr, $dCem_appr, $udExUgc_appr, $mBrgyRoads_appr, $SportsDev_appr, $afdLproj_appr, $aExtPCapB_appr, $AHCM_appr, $coastalFRM_appr, $LpovRp_appr, $solidWaste_appr, $cleanGreen_appr,$infraBrgys_appr,$loanPayment_appr,$masamasid_appr,$tourCultAct_appr,$tourProjinfraDev_appr);
$c = array($mdcOperation_allot, $mvprogram_allot, $barangayan_allot, $faBrgyP_allot, $cbms_allot, $cfLPRAP_allot, $susDevCLUP_allot, $ictTech4ed_allot, $rAndD_allot, $iecEdCamp_allot, $dCem_allot, $udExUgc_allot, $mBrgyRoads_allot, $SportsDev_allot, $afdLproj_allot, $aExtPCapB_allot, $AHCM_allot, $coastalFRM_allot, $LpovRp_allot, $solidWaste_allot, $cleanGreen_allot,$infraBrgys_allot, $loanPayment_allot, $masamasid_allot,$tourCultAct_allot,$tourProjinfraDev_allot);		
$d = array($obl_mdc, $obl_mvp, $obl_barangayan, $obl_faBrgyP, $obl_cbms, $obl_cfLPRAP, $obl_susDevCLUP, $obl_ictTech4ed, $obl_rAndD, $obl_iecEdCamp, $obl_dCem, $obl_udExUgc, $obl_mBrgyRoads, $obl_SportsDev, $obl_afdLproj, $obl_aExtPCapB, $obl_AHCM, $obl_coastalFRM, $obl_LpovRp, $obl_solidWaste, $obl_cleanGreen, $obl_infraBrgys, $obl_loanPayment, $obl_masamasid, $obl_tourCultAct, $obl_tourProjinfraDev);
$e = array($bal_appr_mdcOperation, $bal_appr_mvprogram, $bal_appr_barangayan, $bal_appr_faBrgyP, $bal_appr_cbms, $bal_appr_cfLPRAP, $bal_appr_susDevCLUP, $bal_appr_ictTech4ed, $bal_appr_rAndD, $bal_appr_iecEdCamp, $bal_appr_dCem, $bal_appr_udExUgc, $bal_appr_mBrgyRoads, $bal_appr_SportsDev, $bal_appr_afdLproj, $bal_appr_aExtPCapB, $bal_appr_AHCM, $bal_appr_coastalFRM, $bal_appr_LpovRp, $bal_allot_solidWaste, $bal_appr_cleanGreen, $bal_appr_infraBrgys, $bal_appr_loanPayment, $bal_appr_masamasid, $bal_appr_tourCultAct, $bal_appr_tourProjinfraDev);			
$f = array($bal_allot_mdcOperation, $bal_allot_mvprogram, $bal_allot_barangayan, $bal_allot_faBrgyP, $bal_allot_cbms, $bal_allot_cfLPRAP, $bal_allot_susDevCLUP, $bal_allot_ictTech4ed, $bal_allot_rAndD, $bal_allot_iecEdCamp, $bal_allot_dCem, $bal_allot_udExUgc, $bal_allot_mBrgyRoads, $bal_allot_SportsDev, $bal_allot_afdLproj, $bal_allot_aExtPCapB, $bal_allot_AHCM, $bal_allot_coastalFRM, $bal_allot_LpovRp, $bal_allot_solidWaste, $bal_allot_cleanGreen, $bal_allot_infraBrgys, $bal_allot_loanPayment, $bal_allot_masamasid, $bal_allot_tourCultAct, $bal_allot_tourProjinfraDev);						


$i = 0;
for($i=0;$i<=25;$i++){

$result->execute([$_SESSION['budget'], $a[$i], $b[$i], $c[$i], $d[$i], $e[$i], $f[$i]]);	
}	
					
		









/*NONE-OFFICE*/		


$total_NO_appr = 0;

$result =$db->prepare("SELECT total FROM aipmdr WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);

foreach($result as $row){

$total_mdr_appr = $row['total'];
	
}
	
$total_NO_appr += $total_mdr_appr;

$result =$db->prepare("SELECT total FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
			
foreach($result as $row){

$total_gad_appr = $row['total'];
	
}			
			
$total_NO_appr += $total_gad_appr;			
			
$result =$db->prepare("SELECT total FROM aippwd WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
			
foreach($result as $row){

$total_pwd_appr = $row['total'];
	
}			
			
$total_NO_appr += $total_pwd_appr;

$result =$db->prepare("SELECT total FROM aipsc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
			
foreach($result as $row){

$total_sc_appr = $row['total'];
	
}			
			
$total_NO_appr += $total_sc_appr;	

$result =$db->prepare("SELECT total FROM aipiralcpc WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
			
foreach($result as $row){

$total_lcpc_appr = $row['total'];
	
}			
			
$total_NO_appr += $total_lcpc_appr;	

$result =$db->prepare("SELECT * FROM aipnoneoffice WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
			
foreach($result as $row){

$appr_aid_barangay = $row['aid_barangay'];
$appr_death_indemnity = $row['death_indemnity'];
$appr_fa_Kbrgy = $row['fa_Kbrgy'];
$appr_aids = $row['aids'];
$appr_loyalty_award = $row['loyalty_award'];
$appr_csmonth_celeb = $row['csmonth_celeb'];
$appr_p_meds = $row['p_meds'];
$appr_philhealth = $row['philhealth'];
$appr_healthfund = $row['healthfund'];
$appr_masamasid = $row['masamasid'];
$appr_legal_services = $row['legal_services'];
$appr_brgy_road = $row['brgy_road'];
$appr_mun_bldg = $row['mun_bldg'];
$appr_mun_vehicle = $row['mun_vehicle'];

$total_none_office_appr = $row['total'];
	
}			
			
$total_NO_appr += $total_none_office_appr;				
			
/*ALLOTMENTS*/

$allot_mdr = $total_mdr_appr / 4;		
$allot_gad = $total_gad_appr / 4;
$allot_pwdsc = ($total_pwd_appr + $total_sc_appr) / 4;
$allot_lcpc = $total_lcpc_appr / 4;
$allot_aid_barangay = $appr_aid_barangay / 4;
$allot_death_indemnity = $appr_death_indemnity / 4;
$allot_fa_Kbrgy = $appr_fa_Kbrgy / 4;
$allot_aids = $appr_aids / 4;
$allot_loyalty_award = $appr_loyalty_award  / 4;
$allot_csmonth_celeb = $appr_loyalty_award  / 4;
$allot_p_meds = $appr_p_meds / 4;
$allot_philhealth = $appr_philhealth / 4;
$allot_healthfund = $appr_healthfund / 4;
$allot_masamasid = $appr_masamasid / 4;
$allot_legal_services = $appr_legal_services / 4;
$allot_brgy_road = $appr_brgy_road / 4;
$allot_mun_bldg = $appr_mun_bldg / 4;
$allot_mun_vehicle = $appr_mun_vehicle / 4;


/*OBLIGATIONS*/

$result = $db->prepare("SELECT SUM(total) FROM mdr WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_mdr = $row['SUM(total)'];

}

$result = $db->prepare("SELECT SUM(total) FROM gad WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_gad = $row['SUM(total)'];

}

$result = $db->prepare("SELECT SUM(total) FROM pwds WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_pwds = $row['SUM(total)'];

}

$result = $db->prepare("SELECT SUM(total) FROM sc WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_sc = $row['SUM(total)'];

}

$obl_pwdsc = $obl_pwds + $obl_sc;


			
$result = $db->prepare("SELECT SUM(total) FROM iralcpc WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_lcpc = $row['SUM(total)'];

}

$result = $db->prepare("SELECT SUM(aid_barangay),SUM(death_indemnity), SUM(fa_Kbrgy),SUM(aids),SUM(loyalty_award),SUM(csmonth_celeb),SUM(p_meds),SUM(philhealth),SUM(healthfund),SUM(masamasid),SUM(legal_services),SUM(brgy_road),SUM(mun_bldg),SUM(mun_vehicle) FROM noneoffice WHERE yearm = ? and month = ?");
$result->execute([$_SESSION['budget'],"01"]);

foreach($result as $row){

$obl_aid_barangay = $row['SUM(aid_barangay)'];
$obl_death_indemnity = $row['SUM(death_indemnity)'];
$obl_fa_Kbrgy = $row['SUM(fa_Kbrgy)'];
$obl_aids = $row['SUM(aids)'];
$obl_loyalty_award = $row['SUM(loyalty_award)'];
$obl_csmonth_celeb = $row['SUM(csmonth_celeb)'];
$obl_p_meds = $row['SUM(p_meds)'];
$obl_philhealth = $row['SUM(philhealth)'];
$obl_healthfund = $row['SUM(healthfund)'];
$obl_masamasid = $row['SUM(masamasid)'];
$obl_legal_services = $row['SUM(legal_services)'];
$obl_brgy_road = $row['SUM(brgy_road)'];
$obl_mun_bldg = $row['SUM(mun_bldg)'];
$obl_mun_vehicle = $row['SUM(mun_vehicle)'];


}
			
			
/*BALANCE Appropriation*/

			
$bal_mdr_appr = $total_mdr_appr - $obl_mdr;
$bal_gad_appr =  $total_gad_appr - $obl_gad;
$bal_pwdsc_appr = ($total_pwd_appr + $total_sc_appr) - $obl_pwdsc;
$bal_lcpc_appr = $total_lcpc_appr - $obl_lcpc;
$bal_aid_barangay_appr =  $appr_aid_barangay - $obl_aid_barangay;
$bal_death_indemnity_appr =  $appr_death_indemnity - $obl_death_indemnity;
$bal_fa_Kbrgy_appr =  $appr_fa_Kbrgy - $obl_fa_Kbrgy;
$bal_aids_appr =  $appr_aids - $obl_aids;
$bal_loyalty_award_appr =  $appr_loyalty_award - $obl_loyalty_award;
$bal_csmonth_celeb_appr =  $appr_csmonth_celeb - $obl_csmonth_celeb;
$bal_p_meds_appr =  $appr_p_meds - $obl_p_meds;
$bal_philhealth_appr =  $appr_philhealth - $obl_philhealth;
$bal_healthfund_appr =  $appr_healthfund - $obl_healthfund;
$bal_masamasid_appr =  $appr_masamasid - $obl_masamasid;
$bal_legal_services_appr =  $appr_legal_services - $obl_legal_services;
$bal_brgy_road_appr =  $appr_brgy_road - $obl_brgy_road;
$bal_mun_bldg_appr =  $appr_mun_bldg - $obl_mun_bldg;			
$bal_mun_vehicle_appr =  $appr_mun_vehicle - $obl_mun_vehicle;

/*BALANCE ALLOTMENTS*/	

$bal_mdr_allot = $allot_mdr - $obl_mdr;
$bal_gad_allot = $allot_gad - $obl_gad;
$bal_pwdsc_allot = $allot_pwdsc - $obl_pwdsc;
$bal_lcpc_allot = $allot_lcpc - $obl_lcpc;
$bal_aid_barangay_allot =  $allot_aid_barangay - $obl_aid_barangay;
$bal_death_indemnity_allot =  $allot_death_indemnity - $obl_death_indemnity;
$bal_fa_Kbrgy_allot =  $allot_fa_Kbrgy - $obl_fa_Kbrgy;
$bal_aids_allot =  $allot_aids - $obl_aids;
$bal_loyalty_award_allot =  $allot_loyalty_award - $obl_loyalty_award;
$bal_csmonth_celeb_allot =  $allot_csmonth_celeb - $obl_csmonth_celeb;
$bal_p_meds_allot =  $allot_p_meds - $obl_p_meds;
$bal_philhealth_allot =  $allot_philhealth - $obl_philhealth;
$bal_healthfund_allot =  $allot_healthfund - $obl_healthfund;
$bal_masamasid_allot =  $allot_masamasid - $obl_masamasid;
$bal_legal_services_allot =  $allot_legal_services - $obl_legal_services;
$bal_brgy_road_allot =  $allot_brgy_road - $obl_brgy_road;
$bal_mun_bldg_allot =  $allot_mun_bldg - $obl_mun_bldg;			
$bal_mun_vehicle_allot =  $allot_mun_vehicle - $obl_mun_vehicle;





$n_a = array("mdr","gad","pwdsc","lcpc","aid_barangay","death_indemnity","fa_Kbrgy","aids","loyalty_award","csmonth_celeb","p_meds","philhealth","healthfund","masamasid","legal_services","brgy_road","mun_bldg","mun_vehicle");
$n_b = array($allot_mdr,$allot_gad,$allot_pwdsc,$allot_lcpc,$allot_aid_barangay,$allot_death_indemnity,$allot_fa_Kbrgy,$allot_aids,$allot_loyalty_award,$allot_csmonth_celeb,$allot_p_meds,$allot_philhealth,$allot_healthfund,$allot_masamasid,$allot_legal_services,$allot_brgy_road,$allot_mun_bldg,$allot_mun_vehicle);
$n_c = array($obl_mdr,$obl_gad,$obl_pwdsc,$obl_lcpc,$obl_aid_barangay,$obl_death_indemnity,$obl_fa_Kbrgy,$obl_aids,$obl_loyalty_award,$obl_csmonth_celeb,$obl_p_meds,$obl_philhealth,$obl_healthfund,$obl_masamasid,$obl_legal_services,$obl_brgy_road,$obl_mun_bldg,$obl_mun_vehicle);
$n_d = array($bal_mdr_appr,$bal_gad_appr,$bal_pwdsc_appr,$bal_lcpc_appr,$bal_aid_barangay_appr,$bal_death_indemnity_appr,$bal_fa_Kbrgy_appr,$bal_aids_appr,$bal_loyalty_award_appr,$bal_csmonth_celeb_appr,$bal_p_meds_appr,$bal_philhealth_appr,$bal_healthfund_appr,$bal_masamasid_appr,$bal_legal_services_appr,$bal_brgy_road_appr,$bal_mun_bldg_appr,$bal_mun_vehicle_appr);
$n_e = array($bal_mdr_allot,$bal_gad_allot,$bal_pwdsc_allot,$bal_lcpc_allot,$bal_aid_barangay_allot,$bal_death_indemnity_allot,$bal_fa_Kbrgy_allot,$bal_aids_allot,$bal_loyalty_award_allot,$bal_csmonth_celeb_allot,$bal_p_meds_allot,$bal_philhealth_allot,$bal_healthfund_allot,$bal_masamasid_allot,$bal_legal_services_allot,$bal_brgy_road_allot,$bal_mun_bldg_allot,$bal_mun_vehicle_allot);







	






	
			header("location: gen_january.php");
	
	
	
}
































else {






























	
/*MMO*/
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MMO"]);
	
	
		foreach ($result as $row){
			
			$ps_mmo_appr = $row['total_ps'];
			$mooe_mmo_appr = $row['total_mooe'];
			$co_mmo_appr = $row['total_co'];
			
			
			$ps_mmo_allot = $ps_mmo_appr / 4;
			$mooe_mmo_allot = $mooe_mmo_appr / 4;
			$co_mmo_allot = $co_mmo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmmo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mmo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";
				
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mmomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$mooe_obl_mmo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mmoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){		
			$co_obl_mmo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mmo_ps = $ps_mmo_appr - $ps_obl_mmo;
			$bal_appr_mmo_mooe = $mooe_mmo_appr - $mooe_obl_mmo;
			$bal_appr_mmo_co = $co_mmo_appr - $co_obl_mmo;
			
			
			
			$bal_allot_mmo_ps = $ps_mmo_allot - $ps_obl_mmo;
			$bal_allot_mmo_mooe = $mooe_mmo_allot - $mooe_obl_mmo;
			$bal_allot_mmo_co = $co_mmo_allot - $co_obl_mmo;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MMO",$ps_mmo_appr,$mooe_mmo_appr, $co_mmo_appr, $ps_mmo_allot, $mooe_mmo_allot, $co_mmo_allot, $ps_obl_mmo, $mooe_obl_mmo, $co_obl_mmo, $bal_appr_mmo_ps, $bal_appr_mmo_mooe, $bal_appr_mmo_co, $bal_allot_mmo_ps, $bal_allot_mmo_mooe, $bal_allot_mmo_co]);
			


	
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "SB"]);
	
	
		foreach ($result as $row){
			
			$ps_sb_appr = $row['total_ps'];
			$mooe_sb_appr = $row['total_mooe'];
			$co_sb_appr = $row['total_co'];
			
			
			$ps_sb_allot = $ps_sb_appr / 4;
			$mooe_sb_allot = $mooe_sb_appr / 4;
			$co_sb_allot = $co_sb_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM pssb WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_sb = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM sbmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_sb = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM sbco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_sb = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_sb_ps = $ps_sb_appr - $ps_obl_sb;
			$bal_appr_sb_mooe = $mooe_sb_appr - $mooe_obl_sb;
			$bal_appr_sb_co = $co_sb_appr - $co_obl_sb;
			
			
			
			$bal_allot_sb_ps = $ps_sb_allot - $ps_obl_sb;
			$bal_allot_sb_mooe = $mooe_sb_allot - $mooe_obl_sb;
			$bal_allot_sb_co = $co_sb_allot - $co_obl_sb;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "SB",$ps_sb_appr,$mooe_sb_appr, $co_sb_appr, $ps_sb_allot, $mooe_sb_allot, $co_sb_allot, $ps_obl_sb, $mooe_obl_sb, $co_obl_sb, $bal_appr_sb_ps, $bal_appr_sb_mooe, $bal_appr_sb_co, $bal_allot_sb_ps, $bal_allot_sb_mooe, $bal_allot_sb_co]);
			
			/*MPDO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MPDO"]);
	
	
		foreach ($result as $row){
			
			$ps_mpdo_appr = $row['total_ps'];
			$mooe_mpdo_appr = $row['total_mooe'];
			$co_mpdo_appr = $row['total_co'];
			
			
			$ps_mpdo_allot = $ps_mpdo_appr / 4;
			$mooe_mpdo_allot = $mooe_mpdo_appr / 4;
			$co_mpdo_allot = $co_mpdo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmpdo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mpdo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mpdomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mpdo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mpdoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mpdo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mpdo_ps = $ps_mpdo_appr - $ps_obl_mpdo;
			$bal_appr_mpdo_mooe = $mooe_mpdo_appr - $mooe_obl_mpdo;
			$bal_appr_mpdo_co = $co_mpdo_appr - $co_obl_mpdo;
			
			
			
			$bal_allot_mpdo_ps = $ps_mpdo_allot - $ps_obl_mpdo;
			$bal_allot_mpdo_mooe = $mooe_mpdo_allot - $mooe_obl_mpdo;
			$bal_allot_mpdo_co = $co_mpdo_allot - $co_obl_mpdo;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MPDO",$ps_mpdo_appr,$mooe_mpdo_appr, $co_mpdo_appr, $ps_mpdo_allot, $mooe_mpdo_allot, $co_mpdo_allot, $ps_obl_mpdo, $mooe_obl_mpdo, $co_obl_mpdo, $bal_appr_mpdo_ps, $bal_appr_mpdo_mooe, $bal_appr_mpdo_co, $bal_allot_mpdo_ps, $bal_allot_mpdo_mooe, $bal_allot_mpdo_co]);
			
			
/*LCR*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "LCR"]);
	
	
		foreach ($result as $row){
			
			$ps_lcr_appr = $row['total_ps'];
			$mooe_lcr_appr = $row['total_mooe'];
			$co_lcr_appr = $row['total_co'];
			
			
			$ps_lcr_allot = $ps_lcr_appr / 4;
			$mooe_lcr_allot = $mooe_lcr_appr / 4;
			$co_lcr_allot = $co_lcr_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM pslcr WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_lcr = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM lcrmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_lcr = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM lcrco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_lcr = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_lcr_ps = $ps_lcr_appr - $ps_obl_lcr;
			$bal_appr_lcr_mooe = $mooe_lcr_appr - $mooe_obl_lcr;
			$bal_appr_lcr_co = $co_lcr_appr - $co_obl_lcr;
			
			
			
			$bal_allot_lcr_ps = $ps_lcr_allot - $ps_obl_lcr;
			$bal_allot_lcr_mooe = $mooe_lcr_allot - $mooe_obl_lcr;
			$bal_allot_lcr_co = $co_lcr_allot - $co_obl_lcr;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "LCR",$ps_lcr_appr,$mooe_lcr_appr, $co_lcr_appr, $ps_lcr_allot, $mooe_lcr_allot, $co_lcr_allot, $ps_obl_lcr, $mooe_obl_lcr, $co_obl_lcr, $bal_appr_lcr_ps, $bal_appr_lcr_mooe, $bal_appr_lcr_co, $bal_allot_lcr_ps, $bal_allot_lcr_mooe, $bal_allot_lcr_co]);
			
/*MBO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MBO"]);
	
	
		foreach ($result as $row){
			
			$ps_mbo_appr = $row['total_ps'];
			$mooe_mbo_appr = $row['total_mooe'];
			$co_mbo_appr = $row['total_co'];
			
			
			$ps_mbo_allot = $ps_mbo_appr / 4;
			$mooe_mbo_allot = $mooe_mbo_appr / 4;
			$co_mbo_allot = $co_mbo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmbo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mbo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mbo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mboco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mbo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mbo_ps = $ps_mbo_appr - $ps_obl_mbo;
			$bal_appr_mbo_mooe = $mooe_mbo_appr - $mooe_obl_mbo;
			$bal_appr_mbo_co = $co_mbo_appr - $co_obl_mbo;
			
			
			
			$bal_allot_mbo_ps = $ps_mbo_allot - $ps_obl_mbo;
			$bal_allot_mbo_mooe = $mooe_mbo_allot - $mooe_obl_mbo;
			$bal_allot_mbo_co = $co_mbo_allot - $co_obl_mbo;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MBO",$ps_mbo_appr,$mooe_mbo_appr, $co_mbo_appr, $ps_mbo_allot, $mooe_mbo_allot, $co_mbo_allot, $ps_obl_mbo, $mooe_obl_mbo, $co_obl_mbo, $bal_appr_mbo_ps, $bal_appr_mbo_mooe, $bal_appr_mbo_co, $bal_allot_mbo_ps, $bal_allot_mbo_mooe, $bal_allot_mbo_co]);
			
									
/*MACCO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MACCO"]);
	
	
		foreach ($result as $row){
			
			$ps_macco_appr = $row['total_ps'];
			$mooe_macco_appr = $row['total_mooe'];
			$co_macco_appr = $row['total_co'];
			
			
			$ps_macco_allot = $ps_macco_appr / 4;
			$mooe_macco_allot = $mooe_macco_appr / 4;
			$co_macco_allot = $co_macco_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmacco WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_macco = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maccomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_macco = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maccoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_macco = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_macco_ps = $ps_macco_appr - $ps_obl_macco;
			$bal_appr_macco_mooe = $mooe_macco_appr - $mooe_obl_macco;
			$bal_appr_macco_co = $co_macco_appr - $co_obl_macco;
			
			
			
			$bal_allot_macco_ps = $ps_macco_allot - $ps_obl_macco;
			$bal_allot_macco_mooe = $mooe_macco_allot - $mooe_obl_macco;
			$bal_allot_macco_co = $co_macco_allot - $co_obl_macco;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MACCO",$ps_macco_appr,$mooe_macco_appr, $co_macco_appr, $ps_macco_allot, $mooe_macco_allot, $co_macco_allot, $ps_obl_macco, $mooe_obl_macco, $co_obl_macco, $bal_appr_macco_ps, $bal_appr_macco_mooe, $bal_appr_macco_co, $bal_allot_macco_ps, $bal_allot_macco_mooe, $bal_allot_macco_co]);
			
									
/*MTO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MTO"]);
	
	
		foreach ($result as $row){
			
			$ps_mto_appr = $row['total_ps'];
			$mooe_mto_appr = $row['total_mooe'];
			$co_mto_appr = $row['total_co'];
			
			
			$ps_mto_allot = $ps_mto_appr / 4;
			$mooe_mto_allot = $mooe_mto_appr / 4;
			$co_mto_allot = $co_mto_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmto WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mto = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mtomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mto = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mtoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mto = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mto_ps = $ps_mto_appr - $ps_obl_mto;
			$bal_appr_mto_mooe = $mooe_mto_appr - $mooe_obl_mto;
			$bal_appr_mto_co = $co_mto_appr - $co_obl_mto;
			
			
			
			$bal_allot_mto_ps = $ps_mto_allot - $ps_obl_mto;
			$bal_allot_mto_mooe = $mooe_mto_allot - $mooe_obl_mto;
			$bal_allot_mto_co = $co_mto_allot - $co_obl_mto;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MTO",$ps_mto_appr,$mooe_mto_appr, $co_mto_appr, $ps_mto_allot, $mooe_mto_allot, $co_mto_allot, $ps_obl_mto, $mooe_obl_mto, $co_obl_mto, $bal_appr_mto_ps, $bal_appr_mto_mooe, $bal_appr_mto_co, $bal_allot_mto_ps, $bal_allot_mto_mooe, $bal_allot_mto_co]);
			
									
/*MASSO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MASSO"]);
	
	
		foreach ($result as $row){
			
			$ps_masso_appr = $row['total_ps'];
			$mooe_masso_appr = $row['total_mooe'];
			$co_masso_appr = $row['total_co'];
			
			
			$ps_masso_allot = $ps_masso_appr / 4;
			$mooe_masso_allot = $mooe_masso_appr / 4;
			$co_masso_allot = $co_masso_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmasso WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_masso = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM massomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_masso = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM massoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_masso = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_masso_ps = $ps_masso_appr - $ps_obl_masso;
			$bal_appr_masso_mooe = $mooe_masso_appr - $mooe_obl_masso;
			$bal_appr_masso_co = $co_masso_appr - $co_obl_masso;
			
			
			
			$bal_allot_masso_ps = $ps_masso_allot - $ps_obl_masso;
			$bal_allot_masso_mooe = $mooe_masso_allot - $mooe_obl_masso;
			$bal_allot_masso_co = $co_masso_allot - $co_obl_masso;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MASSO",$ps_masso_appr,$mooe_masso_appr, $co_masso_appr, $ps_masso_allot, $mooe_masso_allot, $co_masso_allot, $ps_obl_masso, $mooe_obl_masso, $co_obl_masso, $bal_appr_masso_ps, $bal_appr_masso_mooe, $bal_appr_masso_co, $bal_allot_masso_ps, $bal_allot_masso_mooe, $bal_allot_masso_co]);
			
									
/*General Services*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "General Services"]);
	
	
		foreach ($result as $row){
			
			$ps_gs_appr = $row['total_ps'];
			$mooe_gs_appr = $row['total_mooe'];
			$co_gs_appr = $row['total_co'];
			
			
			$ps_gs_allot = $ps_gs_appr / 4;
			$mooe_gs_allot = $mooe_gs_appr / 4;
			$co_gs_allot = $co_gs_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psgs WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_gs = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM gsmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_gs = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM gsco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_gs = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_gs_ps = $ps_gs_appr - $ps_obl_gs;
			$bal_appr_gs_mooe = $mooe_gs_appr - $mooe_obl_gs;
			$bal_appr_gs_co = $co_gs_appr - $co_obl_gs;
			
			
			
			$bal_allot_gs_ps = $ps_gs_allot - $ps_obl_gs;
			$bal_allot_gs_mooe = $mooe_gs_allot - $mooe_obl_gs;
			$bal_allot_gs_co = $co_gs_allot - $co_obl_gs;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "General Services",$ps_gs_appr,$mooe_gs_appr, $co_gs_appr, $ps_gs_allot, $mooe_gs_allot, $co_gs_allot, $ps_obl_gs, $mooe_obl_gs, $co_obl_gs, $bal_appr_gs_ps, $bal_appr_gs_mooe, $bal_appr_gs_co, $bal_allot_gs_ps, $bal_allot_gs_mooe, $bal_allot_gs_co]);
			
/*MHO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MHO"]);
	
	
		foreach ($result as $row){
			
			$ps_mho_appr = $row['total_ps'];
			$mooe_mho_appr = $row['total_mooe'];
			$co_mho_appr = $row['total_co'];
			
			
			$ps_mho_allot = $ps_mho_appr / 4;
			$mooe_mho_allot = $mooe_mho_appr / 4;
			$co_mho_allot = $co_mho_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmho WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mho = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mhomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mho = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mhoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mho = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mho_ps = $ps_mho_appr - $ps_obl_mho;
			$bal_appr_mho_mooe = $mooe_mho_appr - $mooe_obl_mho;
			$bal_appr_mho_co = $co_mho_appr - $co_obl_mho;
			
			
			
			$bal_allot_mho_ps = $ps_mho_allot - $ps_obl_mho;
			$bal_allot_mho_mooe = $mooe_mho_allot - $mooe_obl_mho;
			$bal_allot_mho_co = $co_mho_allot - $co_obl_mho;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MHO",$ps_mho_appr,$mooe_mho_appr, $co_mho_appr, $ps_mho_allot, $mooe_mho_allot, $co_mho_allot, $ps_obl_mho, $mooe_obl_mho, $co_obl_mho, $bal_appr_mho_ps, $bal_appr_mho_mooe, $bal_appr_mho_co, $bal_allot_mho_ps, $bal_allot_mho_mooe, $bal_allot_mho_co]);
			
							
/*MSWD*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MSWD"]);
	
	
		foreach ($result as $row){
			
			$ps_mswd_appr = $row['total_ps'];
			$mooe_mswd_appr = $row['total_mooe'];
			$co_mswd_appr = $row['total_co'];
			
			
			$ps_mswd_allot = $ps_mswd_appr / 4;
			$mooe_mswd_allot = $mooe_mswd_appr / 4;
			$co_mswd_allot = $co_mswd_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmswd WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mswd = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mswdmooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mswd = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mswdco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mswd = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mswd_ps = $ps_mswd_appr - $ps_obl_mswd;
			$bal_appr_mswd_mooe = $mooe_mswd_appr - $mooe_obl_mswd;
			$bal_appr_mswd_co = $co_mswd_appr - $co_obl_mswd;
			
			
			
			$bal_allot_mswd_ps = $ps_mswd_allot - $ps_obl_mswd;
			$bal_allot_mswd_mooe = $mooe_mswd_allot - $mooe_obl_mswd;
			$bal_allot_mswd_co = $co_mswd_allot - $co_obl_mswd;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MSWD",$ps_mswd_appr,$mooe_mswd_appr, $co_mswd_appr, $ps_mswd_allot, $mooe_mswd_allot, $co_mswd_allot, $ps_obl_mswd, $mooe_obl_mswd, $co_obl_mswd, $bal_appr_mswd_ps, $bal_appr_mswd_mooe, $bal_appr_mswd_co, $bal_allot_mswd_ps, $bal_allot_mswd_mooe, $bal_allot_mswd_co]);
			
							
/*MAO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MAO"]);
	
	
		foreach ($result as $row){
			
			$ps_mao_appr = $row['total_ps'];
			$mooe_mao_appr = $row['total_mooe'];
			$co_mao_appr = $row['total_co'];
			
			
			$ps_mao_allot = $ps_mao_appr / 4;
			$mooe_mao_allot = $mooe_mao_appr / 4;
			$co_mao_allot = $co_mao_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmao WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mao = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mao = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM maoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mao = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mao_ps = $ps_mao_appr - $ps_obl_mao;
			$bal_appr_mao_mooe = $mooe_mao_appr - $mooe_obl_mao;
			$bal_appr_mao_co = $co_mao_appr - $co_obl_mao;
			
			
			
			$bal_allot_mao_ps = $ps_mao_allot - $ps_obl_mao;
			$bal_allot_mao_mooe = $mooe_mao_allot - $mooe_obl_mao;
			$bal_allot_mao_co = $co_mao_allot - $co_obl_mao;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MAO",$ps_mao_appr,$mooe_mao_appr, $co_mao_appr, $ps_mao_allot, $mooe_mao_allot, $co_mao_allot, $ps_obl_mao, $mooe_obl_mao, $co_obl_mao, $bal_appr_mao_ps, $bal_appr_mao_mooe, $bal_appr_mao_co, $bal_allot_mao_ps, $bal_allot_mao_mooe, $bal_allot_mao_co]);
			
							
					
/*MEO*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MEO"]);
	
	
		foreach ($result as $row){
			
			$ps_meo_appr = $row['total_ps'];
			$mooe_meo_appr = $row['total_mooe'];
			$co_meo_appr = $row['total_co'];
			
			
			$ps_meo_allot = $ps_meo_appr / 4;
			$mooe_meo_allot = $mooe_meo_appr / 4;
			$co_meo_allot = $co_meo_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmeo WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_meo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM meomooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_meo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM meoco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_meo = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_meo_ps = $ps_meo_appr - $ps_obl_meo;
			$bal_appr_meo_mooe = $mooe_meo_appr - $mooe_obl_meo;
			$bal_appr_meo_co = $co_meo_appr - $co_obl_meo;
			
			
			
			$bal_allot_meo_ps = $ps_meo_allot - $ps_obl_meo;
			$bal_allot_meo_mooe = $mooe_meo_allot - $mooe_obl_meo;
			$bal_allot_meo_co = $co_meo_allot - $co_obl_meo;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MEO",$ps_meo_appr,$mooe_meo_appr, $co_meo_appr, $ps_meo_allot, $mooe_meo_allot, $co_meo_allot, $ps_obl_meo, $mooe_obl_meo, $co_obl_meo, $bal_appr_meo_ps, $bal_appr_meo_mooe, $bal_appr_meo_co, $bal_allot_meo_ps, $bal_allot_meo_mooe, $bal_allot_meo_co]);
			
							
					
			
/*MBE*/
			
$result = $db->prepare("SELECT total_ps, total_mooe, total_co FROM aip WHERE Year = ? and deparments = ? ");
$result->execute([$_SESSION['budget'], "MBE"]);
	
	
		foreach ($result as $row){
			
			$ps_mbe_appr = $row['total_ps'];
			$mooe_mbe_appr = $row['total_mooe'];
			$co_mbe_appr = $row['total_co'];
			
			
			$ps_mbe_allot = $ps_mbe_appr / 4;
			$mooe_mbe_allot = $mooe_mbe_appr / 4;
			$co_mbe_allot = $co_mbe_appr / 4;
			
			
		}
			$rs = $db->prepare("SELECT SUM(total) FROM psmbe WHERE year_transact = ? and month_transact = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$ps_obl_mbe = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbemooe WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$mooe_obl_mbe = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			$rs = $db->prepare("SELECT SUM(total) FROM mbeco WHERE yearm = ? and month = ? ");
			$rs->execute([$_SESSION['budget'],"01"]);	
			
			foreach($rs as $row){
			if(!empty($row['SUM(total)'])){	
			$co_obl_mbe = $row['SUM(total)'];	
			} else $ps_obl_mmo = "0.00";	
				
			}
			
			
			
			
			$bal_appr_mbe_ps = $ps_mbe_appr - $ps_obl_mbe;
			$bal_appr_mbe_mooe = $mooe_mbe_appr - $mooe_obl_mbe;
			$bal_appr_mbe_co = $co_mbe_appr - $co_obl_mbe;
			
			
			
			$bal_allot_mbe_ps = $ps_mbe_allot - $ps_obl_mbe;
			$bal_allot_mbe_mooe = $mooe_mbe_allot - $mooe_obl_mbe;
			$bal_allot_mbe_co = $co_mbe_allot - $co_obl_mbe;
	
			
			$result = $db->prepare("UPDATE saao01 SET
			Year=?, 
			office=?, 
			ps_appr=?,
			mooe_appr=?, 
			co_appr=?, 
			allotments_ps=?, 
			allotments_mooe=?, 
			allotments_co=?, 
			obligations_ps=?, 
			obligations_mooe=?, 
			obligations_co=?, 
			balanceAppropriation_ps=?, 
			balanceAppropriation_mooe=?, 
			balanceAppropriation_co=?, 
			balanceAllotment_ps=?, 
			balanceAllotment_mooe=?, 
			balanceAllotment_co=?");
			$result->execute([$_SESSION['budget'], "MBE",$ps_mbe_appr,$mooe_mbe_appr, $co_mbe_appr, $ps_mbe_allot, $mooe_mbe_allot, $co_mbe_allot, $ps_obl_mbe, $mooe_obl_mbe, $co_obl_mbe, $bal_appr_mbe_ps, $bal_appr_mbe_mooe, $bal_appr_mbe_co, $bal_allot_mbe_ps, $bal_allot_mbe_mooe, $bal_allot_mbe_co]);
			
							
					
			
					
			
			header("location: gen_january.php");
}	
































?>