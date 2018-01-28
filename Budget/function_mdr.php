<?PHP
/*
// tgad1
function tgad1(){
include("cfg.php");
$result = $db->prepare("SELECT sum(gadOffice_m) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad1allot
function tgad1allot(){
include("cfg.php");
$result = $db->prepare("SELECT gadOffice_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['gadOffice_m'];
}	
	return $val;
}


// tgad1Bal
function tgad1Bal(){
include("cfg.php");
$result = $db->prepare("SELECT gadOffice_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['gadOffice_m'];
}	
$getgad1 = tgad1();	
$balance = $val - $getgad1;
update_tgad1($balance);

return $balance;
}


// update tgad1
function update_tgad1($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET gadOffice_mBal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tgad2
function tgad2(){
include("cfg.php");
$result = $db->prepare("SELECT sum(iec_mtrls) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad2allot
function tgad2allot(){
include("cfg.php");
$result = $db->prepare("SELECT iec_mtrls FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['iec_mtrls'];
}	
	return $val;
}


// tgad2Bal
function tgad2Bal(){
include("cfg.php");
$result = $db->prepare("SELECT iec_mtrls FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['iec_mtrls'];
}	
$getgad2 = tgad2();	
$balance = $val - $getgad2;
update_tgad2($balance);

return $balance;
}


// update tgad2
function update_tgad2($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET iec_mtrlsBal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}










// tgad3
function tgad3(){
include("cfg.php");
$result = $db->prepare("SELECT sum(bida_cpBldg) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad3allot
function tgad3allot(){
include("cfg.php");
$result = $db->prepare("SELECT bida_cpBldg FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['bida_cpBldg'];
}	
	return $val;
}


// tgad3Bal
function tgad3Bal(){
include("cfg.php");
$result = $db->prepare("SELECT bida_cpBldg FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['bida_cpBldg'];
}	
$getgad3 = tgad3();	
$balance = $val - $getgad3;
update_tgad3($balance);

return $balance;
}


// update tgad3
function update_tgad3($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET bida_cpBldgbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad4
function tgad4(){
include("cfg.php");
$result = $db->prepare("SELECT sum(cLrNcD) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad4allot
function tgad4allot(){
include("cfg.php");
$result = $db->prepare("SELECT cLrNcD FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cLrNcD'];
}	
	return $val;
}


// tgad4Bal
function tgad4Bal(){
include("cfg.php");
$result = $db->prepare("SELECT cLrNcD FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cLrNcD'];
}	
$getgad4 = tgad4();	
$balance = $val - $getgad4;
update_tgad4($balance);

return $balance;
}


// update tgad4
function update_tgad4($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET cLrNcDbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad5
function tgad5(){
include("cfg.php");
$result = $db->prepare("SELECT sum(p_bloodstrips) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad5allot
function tgad5allot(){
include("cfg.php");
$result = $db->prepare("SELECT p_bloodstrips FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_bloodstrips'];
}	
	return $val;
}


// tgad5Bal
function tgad5Bal(){
include("cfg.php");
$result = $db->prepare("SELECT p_bloodstrips FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_bloodstrips'];
}	
$getgad5 = tgad5();	
$balance = $val - $getgad5;
update_tgad5($balance);

return $balance;
}


// update tgad5
function update_tgad5($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET p_bloodstripsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad6
function tgad6(){
include("cfg.php");
$result = $db->prepare("SELECT sum(hCcongress) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad6allot
function tgad6allot(){
include("cfg.php");
$result = $db->prepare("SELECT hCcongress FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['hCcongress'];
}	
	return $val;
}


// tgad6Bal
function tgad6Bal(){
include("cfg.php");
$result = $db->prepare("SELECT hCcongress FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['hCcongress'];
}	
$getgad6 = tgad6();	
$balance = $val - $getgad6;
update_tgad6($balance);

return $balance;
}


// update tgad6
function update_tgad6($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET hCcongressbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad7
function tgad7(){
include("cfg.php");
$result = $db->prepare("SELECT sum(bloodService) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad7allot
function tgad7allot(){
include("cfg.php");
$result = $db->prepare("SELECT bloodService FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['bloodService'];
}	
	return $val;
}


// tgad7Bal
function tgad7Bal(){
include("cfg.php");
$result = $db->prepare("SELECT bloodService FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['bloodService'];
}	
$getgad7 = tgad7();	
$balance = $val - $getgad7;
update_tgad7($balance);

return $balance;
}


// update tgad7
function update_tgad7($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET bloodServicebal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}







// tgad8
function tgad8(){
include("cfg.php");
$result = $db->prepare("SELECT sum(cancer_p) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad8allot
function tgad8allot(){
include("cfg.php");
$result = $db->prepare("SELECT cancer_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cancer_p'];
}	
	return $val;
}


// tgad8Bal
function tgad8Bal(){
include("cfg.php");
$result = $db->prepare("SELECT cancer_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cancer_p'];
}	
$getgad8 = tgad8();	
$balance = $val - $getgad8;
update_tgad8($balance);

return $balance;
}


// update tgad8
function update_tgad8($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET cancer_pbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad9
function tgad9(){
include("cfg.php");
$result = $db->prepare("SELECT sum(cervical_cs) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad9allot
function tgad9allot(){
include("cfg.php");
$result = $db->prepare("SELECT cervical_cs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cervical_cs'];
}	
	return $val;
}


// tgad9Bal
function tgad9Bal(){
include("cfg.php");
$result = $db->prepare("SELECT cervical_cs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cervical_cs'];
}	
$getgad9 = tgad9();	
$balance = $val - $getgad9;
update_tgad9($balance);

return $balance;
}


// update tgad9
function update_tgad9($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET cervical_csbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	



// tgad10
function tgad10(){
include("cfg.php");
$result = $db->prepare("SELECT sum(wfs_asrh) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad10allot
function tgad10allot(){
include("cfg.php");
$result = $db->prepare("SELECT wfs_asrh FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['wfs_asrh'];
}	
	return $val;
}


// tgad10Bal
function tgad10Bal(){
include("cfg.php");
$result = $db->prepare("SELECT wfs_asrh FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['wfs_asrh'];
}	
$getgad10 = tgad10();	
$balance = $val - $getgad10;
update_tgad10($balance);

return $balance;
}


// update tgad10
function update_tgad10($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET wfs_asrhbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	





// tgad11
function tgad11(){
include("cfg.php");
$result = $db->prepare("SELECT sum(capacity_CHV) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad11allot
function tgad11allot(){
include("cfg.php");
$result = $db->prepare("SELECT capacity_CHV FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['capacity_CHV'];
}	
	return $val;
}


// tgad11Bal
function tgad11Bal(){
include("cfg.php");
$result = $db->prepare("SELECT capacity_CHV FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['capacity_CHV'];
}	
$getgad11 = tgad11();	
$balance = $val - $getgad11;
update_tgad11($balance);

return $balance;
}


// update tgad11
function update_tgad11($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET capacity_CHVbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	





// tgad12
function tgad12(){
include("cfg.php");
$result = $db->prepare("SELECT sum(reorient_BNS) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad12allot
function tgad12allot(){
include("cfg.php");
$result = $db->prepare("SELECT reorient_BNS FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['reorient_BNS'];
}	
	return $val;
}


// tgad12Bal
function tgad12Bal(){
include("cfg.php");
$result = $db->prepare("SELECT reorient_BNS FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['reorient_BNS'];
}	
$getgad12 = tgad12();	
$balance = $val - $getgad12;
update_tgad12($balance);

return $balance;
}


// update tgad12
function update_tgad12($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET reorient_BNSbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	






// tgad13
function tgad13(){
include("cfg.php");
$result = $db->prepare("SELECT sum(backyard_g) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad13allot
function tgad13allot(){
include("cfg.php");
$result = $db->prepare("SELECT backyard_g FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['backyard_g'];
}	
	return $val;
}


// tgad13Bal
function tgad13Bal(){
include("cfg.php");
$result = $db->prepare("SELECT backyard_g FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['backyard_g'];
}	
$getgad13 = tgad13();	
$balance = $val - $getgad13;
update_tgad13($balance);

return $balance;
}


// update tgad13
function update_tgad13($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET backyard_gbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	




// tgad14
function tgad14(){
include("cfg.php");
$result = $db->prepare("SELECT sum(nutrition_m) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad14allot
function tgad14allot(){
include("cfg.php");
$result = $db->prepare("SELECT nutrition_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['nutrition_m'];
}	
	return $val;
}


// tgad14Bal
function tgad14Bal(){
include("cfg.php");
$result = $db->prepare("SELECT nutrition_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['nutrition_m'];
}	
$getgad14 = tgad14();	
$balance = $val - $getgad14;
update_tgad14($balance);

return $balance;
}


// update tgad14
function update_tgad14($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET nutrition_mbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	








// tgad15
function tgad15(){
include("cfg.php");
$result = $db->prepare("SELECT sum(n_status) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad15allot
function tgad15allot(){
include("cfg.php");
$result = $db->prepare("SELECT n_status FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['n_status'];
}	
	return $val;
}


// tgad15Bal
function tgad15Bal(){
include("cfg.php");
$result = $db->prepare("SELECT n_status FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['n_status'];
}	
$getgad15 = tgad15();	
$balance = $val - $getgad15;
update_tgad15($balance);

return $balance;
}


// update tgad15
function update_tgad15($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET n_statusbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	







// tgad16
function tgad16(){
include("cfg.php");
$result = $db->prepare("SELECT sum(p_safety) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad16allot
function tgad16allot(){
include("cfg.php");
$result = $db->prepare("SELECT p_safety FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_safety'];
}	
	return $val;
}


// tgad16Bal
function tgad16Bal(){
include("cfg.php");
$result = $db->prepare("SELECT p_safety FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['p_safety'];
}	
$getgad16 = tgad16();	
$balance = $val - $getgad16;
update_tgad16($balance);

return $balance;
}


// update tgad16
function update_tgad16($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET p_safetybal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	



// tgad17
function tgad17(){
include("cfg.php");
$result = $db->prepare("SELECT sum(subsidy_wfs) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad17allot
function tgad17allot(){
include("cfg.php");
$result = $db->prepare("SELECT subsidy_wfs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['subsidy_wfs'];
}	
	return $val;
}


// tgad17Bal
function tgad17Bal(){
include("cfg.php");
$result = $db->prepare("SELECT subsidy_wfs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['subsidy_wfs'];
}	
$getgad17 = tgad17();	
$balance = $val - $getgad17;
update_tgad17($balance);

return $balance;
}


// update tgad17
function update_tgad17($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET subsidy_wfsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	





// tgad18
function tgad18(){
include("cfg.php");
$result = $db->prepare("SELECT sum(rollout_brgys) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad18allot
function tgad18allot(){
include("cfg.php");
$result = $db->prepare("SELECT rollout_brgys FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['rollout_brgys'];
}	
	return $val;
}


// tgad18Bal
function tgad18Bal(){
include("cfg.php");
$result = $db->prepare("SELECT rollout_brgys FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['rollout_brgys'];
}	
$getgad18 = tgad18();	
$balance = $val - $getgad18;
update_tgad18($balance);

return $balance;
}


// update tgad18
function update_tgad18($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET rollout_brgysbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	


// tgad19
function tgad19(){
include("cfg.php");
$result = $db->prepare("SELECT sum(transpo_vamc) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad19allot
function tgad19allot(){
include("cfg.php");
$result = $db->prepare("SELECT transpo_vamc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['transpo_vamc'];
}	
	return $val;
}


// tgad19Bal
function tgad19Bal(){
include("cfg.php");
$result = $db->prepare("SELECT transpo_vamc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['transpo_vamc'];
}	
$getgad19 = tgad19();	
$balance = $val - $getgad19;
update_tgad19($balance);

return $balance;
}


// update tgad19
function update_tgad19($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET transpo_vamcbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}	



// tgad20
function tgad20(){
include("cfg.php");
$result = $db->prepare("SELECT sum(vamc_victims) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad20allot
function tgad20allot(){
include("cfg.php");
$result = $db->prepare("SELECT vamc_victims FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['vamc_victims'];
}	
	return $val;
}


// tgad20Bal
function tgad20Bal(){
include("cfg.php");
$result = $db->prepare("SELECT vamc_victims FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['vamc_victims'];
}	
$getgad20 = tgad20();	
$balance = $val - $getgad20;
update_tgad20($balance);

return $balance;
}


// update tgad20
function update_tgad20($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET vamc_victimsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad21
function tgad21(){
include("cfg.php");
$result = $db->prepare("SELECT sum(wfs_oSupplies) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad21allot
function tgad21allot(){
include("cfg.php");
$result = $db->prepare("SELECT wfs_oSupplies FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['wfs_oSupplies'];
}	
	return $val;
}


// tgad21Bal
function tgad21Bal(){
include("cfg.php");
$result = $db->prepare("SELECT wfs_oSupplies FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['wfs_oSupplies'];
}	
$getgad21 = tgad21();	
$balance = $val - $getgad21;
update_tgad21($balance);

return $balance;
}


// update tgad21
function update_tgad21($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET wfs_oSuppliesbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad22
function tgad22(){
include("cfg.php");
$result = $db->prepare("SELECT sum(maint_wfs) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad22allot
function tgad22allot(){
include("cfg.php");
$result = $db->prepare("SELECT maint_wfs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['maint_wfs'];
}	
	return $val;
}


// tgad22Bal
function tgad22Bal(){
include("cfg.php");
$result = $db->prepare("SELECT maint_wfs FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['maint_wfs'];
}	
$getgad22 = tgad22();	
$balance = $val - $getgad22;
update_tgad22($balance);

return $balance;
}


// update tgad22
function update_tgad22($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET maint_wfsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad23
function tgad23(){
include("cfg.php");
$result = $db->prepare("SELECT sum(s_watchgroupVawc) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad23allot
function tgad23allot(){
include("cfg.php");
$result = $db->prepare("SELECT s_watchgroupVawc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['s_watchgroupVawc'];
}	
	return $val;
}


// tgad23Bal
function tgad23Bal(){
include("cfg.php");
$result = $db->prepare("SELECT s_watchgroupVawc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['s_watchgroupVawc'];
}	
$getgad23 = tgad23();	
$balance = $val - $getgad23;
update_tgad23($balance);

return $balance;
}


// update tgad23
function update_tgad23($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET s_watchgroupVawcbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}






// tgad24
function tgad24(){
include("cfg.php");
$result = $db->prepare("SELECT sum(capDev_margin) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad24allot
function tgad24allot(){
include("cfg.php");
$result = $db->prepare("SELECT capDev_margin FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['capDev_margin'];
}	
	return $val;
}


// tgad24Bal
function tgad24Bal(){
include("cfg.php");
$result = $db->prepare("SELECT capDev_margin FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['capDev_margin'];
}	
$getgad24 = tgad24();	
$balance = $val - $getgad24;
update_tgad24($balance);

return $balance;
}


// update tgad24
function update_tgad24($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET capDev_marginbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad25
function tgad25(){
include("cfg.php");
$result = $db->prepare("SELECT sum(citizen_p_lights) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad25allot
function tgad25allot(){
include("cfg.php");
$result = $db->prepare("SELECT citizen_p_lights FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['citizen_p_lights'];
}	
	return $val;
}


// tgad25Bal
function tgad25Bal(){
include("cfg.php");
$result = $db->prepare("SELECT citizen_p_lights FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['citizen_p_lights'];
}	
$getgad25 = tgad25();	
$balance = $val - $getgad25;
update_tgad25($balance);

return $balance;
}


// update tgad25
function update_tgad25($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET citizen_p_lightsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad26
function tgad26(){
include("cfg.php");
$result = $db->prepare("SELECT sum(ids_solo_p) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad26allot
function tgad26allot(){
include("cfg.php");
$result = $db->prepare("SELECT ids_solo_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['ids_solo_p'];
}	
	return $val;
}


// tgad26Bal
function tgad26Bal(){
include("cfg.php");
$result = $db->prepare("SELECT ids_solo_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['ids_solo_p'];
}	
$getgad26 = tgad26();	
$balance = $val - $getgad26;
update_tgad26($balance);

return $balance;
}


// update tgad26
function update_tgad26($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET ids_solo_pbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad27
function tgad27(){
include("cfg.php");
$result = $db->prepare("SELECT sum(spes_p) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad27allot
function tgad27allot(){
include("cfg.php");
$result = $db->prepare("SELECT spes_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['spes_p'];
}	
	return $val;
}


// tgad27Bal
function tgad27Bal(){
include("cfg.php");
$result = $db->prepare("SELECT spes_p FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['spes_p'];
}	
$getgad27 = tgad27();	
$balance = $val - $getgad27;
update_tgad27($balance);

return $balance;
}


// update tgad27
function update_tgad27($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET spes_pbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad28
function tgad28(){
include("cfg.php");
$result = $db->prepare("SELECT sum(scholarship_grant) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad28allot
function tgad28allot(){
include("cfg.php");
$result = $db->prepare("SELECT scholarship_grant FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['scholarship_grant'];
}	
	return $val;
}


// tgad28Bal
function tgad28Bal(){
include("cfg.php");
$result = $db->prepare("SELECT scholarship_grant FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['scholarship_grant'];
}	
$getgad28 = tgad28();	
$balance = $val - $getgad28;
update_tgad28($balance);

return $balance;
}


// update tgad28
function update_tgad28($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET scholarship_grantbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad29
function tgad29(){
include("cfg.php");
$result = $db->prepare("SELECT sum(als) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad29allot
function tgad29allot(){
include("cfg.php");
$result = $db->prepare("SELECT als FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['als'];
}	
	return $val;
}


// tgad29Bal
function tgad29Bal(){
include("cfg.php");
$result = $db->prepare("SELECT als FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['als'];
}	
$getgad29 = tgad29();	
$balance = $val - $getgad29;
update_tgad29($balance);

return $balance;
}


// update tgad29
function update_tgad29($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET alsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad30
function tgad30(){
include("cfg.php");
$result = $db->prepare("SELECT sum(livelihood_skills) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad30allot
function tgad30allot(){
include("cfg.php");
$result = $db->prepare("SELECT livelihood_skills FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['livelihood_skills'];
}	
	return $val;
}


// tgad30Bal
function tgad30Bal(){
include("cfg.php");
$result = $db->prepare("SELECT livelihood_skills FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['livelihood_skills'];
}	
$getgad30 = tgad30();	
$balance = $val - $getgad30;
update_tgad30($balance);

return $balance;
}


// update tgad30
function update_tgad30($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET livelihood_skillsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}


// tgad31
function tgad31(){
include("cfg.php");
$result = $db->prepare("SELECT sum(womens_m) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad31allot
function tgad31allot(){
include("cfg.php");
$result = $db->prepare("SELECT womens_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['womens_m'];
}	
	return $val;
}


// tgad31Bal
function tgad31Bal(){
include("cfg.php");
$result = $db->prepare("SELECT womens_m FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['womens_m'];
}	
$getgad31 = tgad31();	
$balance = $val - $getgad31;
update_tgad31($balance);

return $balance;
}


// update tgad31
function update_tgad31($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET womens_mbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad32
function tgad32(){
include("cfg.php");
$result = $db->prepare("SELECT sum(family_week) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad32allot
function tgad32allot(){
include("cfg.php");
$result = $db->prepare("SELECT family_week FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['family_week'];
}	
	return $val;
}


// tgad32Bal
function tgad32Bal(){
include("cfg.php");
$result = $db->prepare("SELECT family_week FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['family_week'];
}	
$getgad32 = tgad32();	
$balance = $val - $getgad32;
update_tgad32($balance);

return $balance;
}


// update tgad32
function update_tgad32($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET family_weekbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad33
function tgad33(){
include("cfg.php");
$result = $db->prepare("SELECT sum(alay_lakad) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad33allot
function tgad33allot(){
include("cfg.php");
$result = $db->prepare("SELECT alay_lakad FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['alay_lakad'];
}	
	return $val;
}


// tgad33Bal
function tgad33Bal(){
include("cfg.php");
$result = $db->prepare("SELECT alay_lakad FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['alay_lakad'];
}	
$getgad33 = tgad33();	
$balance = $val - $getgad33;
update_tgad33($balance);

return $balance;
}


// update tgad33
function update_tgad33($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET alay_lakadbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}


// tgad34
function tgad34(){
include("cfg.php");
$result = $db->prepare("SELECT sum(cap_dev_MOVE) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad34allot
function tgad34allot(){
include("cfg.php");
$result = $db->prepare("SELECT cap_dev_MOVE FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cap_dev_MOVE'];
}	
	return $val;
}


// tgad34Bal
function tgad34Bal(){
include("cfg.php");
$result = $db->prepare("SELECT cap_dev_MOVE FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['cap_dev_MOVE'];
}	
$getgad34 = tgad34();	
$balance = $val - $getgad34;
update_tgad34($balance);

return $balance;
}


// update tgad34
function update_tgad34($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET cap_dev_MOVEbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}


// tgad35
function tgad35(){
include("cfg.php");
$result = $db->prepare("SELECT sum(volunteer_pw) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad35allot
function tgad35allot(){
include("cfg.php");
$result = $db->prepare("SELECT volunteer_pw FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['volunteer_pw'];
}	
	return $val;
}


// tgad35Bal
function tgad35Bal(){
include("cfg.php");
$result = $db->prepare("SELECT volunteer_pw FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['volunteer_pw'];
}	
$getgad35 = tgad35();	
$balance = $val - $getgad35;
update_tgad35($balance);

return $balance;
}


// update tgad35
function update_tgad35($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET volunteer_pwbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad36
function tgad36(){
include("cfg.php");
$result = $db->prepare("SELECT sum(counceling_rooms) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad36allot
function tgad36allot(){
include("cfg.php");
$result = $db->prepare("SELECT counceling_rooms FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['counceling_rooms'];
}	
	return $val;
}


// tgad36Bal
function tgad36Bal(){
include("cfg.php");
$result = $db->prepare("SELECT counceling_rooms FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['counceling_rooms'];
}	
$getgad36 = tgad36();	
$balance = $val - $getgad36;
update_tgad36($balance);

return $balance;
}


// update tgad36
function update_tgad36($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET counceling_roomsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad37
function tgad37(){
include("cfg.php");
$result = $db->prepare("SELECT sum(farmersFishfolks_day) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad37allot
function tgad37allot(){
include("cfg.php");
$result = $db->prepare("SELECT farmersFishfolks_day FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['farmersFishfolks_day'];
}	
	return $val;
}


// tgad37Bal
function tgad37Bal(){
include("cfg.php");
$result = $db->prepare("SELECT farmersFishfolks_day FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['farmersFishfolks_day'];
}	
$getgad37 = tgad37();	
$balance = $val - $getgad37;
update_tgad37($balance);

return $balance;
}


// update tgad37
function update_tgad37($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET farmersFishfolks_daybal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad38
function tgad38(){
include("cfg.php");
$result = $db->prepare("SELECT sum(agriFish_training_farmers) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad38allot
function tgad38allot(){
include("cfg.php");
$result = $db->prepare("SELECT agriFish_training_farmers FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['agriFish_training_farmers'];
}	
	return $val;
}


// tgad38Bal
function tgad38Bal(){
include("cfg.php");
$result = $db->prepare("SELECT agriFish_training_farmers FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['agriFish_training_farmers'];
}	
$getgad38 = tgad38();	
$balance = $val - $getgad38;
update_tgad38($balance);

return $balance;
}


// update tgad38
function update_tgad38($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET agriFish_training_farmersbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad39
function tgad39(){
include("cfg.php");
$result = $db->prepare("SELECT sum(drugAwareness_rduct) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad39allot
function tgad39allot(){
include("cfg.php");
$result = $db->prepare("SELECT drugAwareness_rduct FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drugAwareness_rduct'];
}	
	return $val;
}


// tgad39Bal
function tgad39Bal(){
include("cfg.php");
$result = $db->prepare("SELECT drugAwareness_rduct FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['drugAwareness_rduct'];
}	
$getgad39 = tgad39();	
$balance = $val - $getgad39;
update_tgad39($balance);

return $balance;
}


// update tgad39
function update_tgad39($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET drugAwareness_rductbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}




// tgad40
function tgad40(){
include("cfg.php");
$result = $db->prepare("SELECT sum(logistics_4ps) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad40allot
function tgad40allot(){
include("cfg.php");
$result = $db->prepare("SELECT logistics_4ps FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['logistics_4ps'];
}	
	return $val;
}


// tgad40Bal
function tgad40Bal(){
include("cfg.php");
$result = $db->prepare("SELECT logistics_4ps FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['logistics_4ps'];
}	
$getgad40 = tgad40();	
$balance = $val - $getgad40;
update_tgad40($balance);

return $balance;
}


// update tgad40
function update_tgad40($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET logistics_4psbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}


// tgad41
function tgad41(){
include("cfg.php");
$result = $db->prepare("SELECT sum(indi_crisis) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad41allot
function tgad41allot(){
include("cfg.php");
$result = $db->prepare("SELECT indi_crisis FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['indi_crisis'];
}	
	return $val;
}


// tgad41Bal
function tgad41Bal(){
include("cfg.php");
$result = $db->prepare("SELECT indi_crisis FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['indi_crisis'];
}	
$getgad41 = tgad41();	
$balance = $val - $getgad41;
update_tgad41($balance);

return $balance;
}


// update tgad41
function update_tgad41($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET indi_crisisbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad42
function tgad42(){
include("cfg.php");
$result = $db->prepare("SELECT sum(family_planning) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad42allot
function tgad42allot(){
include("cfg.php");
$result = $db->prepare("SELECT family_planning FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['family_planning'];
}	
	return $val;
}


// tgad42Bal
function tgad42Bal(){
include("cfg.php");
$result = $db->prepare("SELECT family_planning FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['family_planning'];
}	
$getgad42 = tgad42();	
$balance = $val - $getgad42;
update_tgad42($balance);

return $balance;
}


// update tgad42
function update_tgad42($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET family_planningbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}



// tgad43
function tgad43(){
include("cfg.php");
$result = $db->prepare("SELECT sum(MOVE_mun_brgy_levels) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad43allot
function tgad43allot(){
include("cfg.php");
$result = $db->prepare("SELECT MOVE_mun_brgy_levels FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['MOVE_mun_brgy_levels'];
}	
	return $val;
}


// tgad43Bal
function tgad43Bal(){
include("cfg.php");
$result = $db->prepare("SELECT MOVE_mun_brgy_levels FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['MOVE_mun_brgy_levels'];
}	
$getgad43 = tgad43();	
$balance = $val - $getgad43;
update_tgad43($balance);

return $balance;
}


// update tgad43
function update_tgad43($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET MOVE_mun_brgy_levelsbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}





// tgad44
function tgad44(){
include("cfg.php");
$result = $db->prepare("SELECT sum(client_foc) as result FROM gad WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['result'];
}	
	return $val;
}

// tgad44allot
function tgad44allot(){
include("cfg.php");
$result = $db->prepare("SELECT client_foc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['client_foc'];
}	
	return $val;
}


// tgad44Bal
function tgad44Bal(){
include("cfg.php");
$result = $db->prepare("SELECT client_foc FROM aipgad WHERE Year = ?");
$result->execute([$_SESSION['budget']]);
foreach($result as $row){
$val = $row['client_foc'];
}	
$getgad44 = tgad44();	
$balance = $val - $getgad44;
update_tgad44($balance);

return $balance;
}


// update tgad44
function update_tgad44($value){
include("cfg.php");
$result = $db->prepare("UPDATE aipgad SET client_focbal = ? WHERE Year = ?");
$result->execute([$value, $_SESSION['budget']]);
}

*/

function get_total_obligation(){
include("cfg.php");
$tbl = "rmdr".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM $tbl WHERE yearm = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "mdr".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");
$tbl = "mdr".$_SESSION['budget'];
$result = $db->prepare("SELECT total FROM $tbl WHERE Year = ?");
$result->execute([$_SESSION['budget']]);	
$row = $result->fetch();
$value = $row['total'];

	
return $value;	
}


function get_table_exist(){
include("cfg.php");
	
$tablename = "mdr_list_".$_SESSION['budget'];
$result ="0";

try {
$checker = $db->prepare("SELECT 1 FROM $tablename LIMIT 1");
$checker->execute();
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}



function get_last_column(){
include("cfg.php");

$tablename = "mdr".$_SESSION['budget'];
	
try {
$checker = $db->prepare("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ? AND TABLE_NAME =? ORDER BY ORDINAL_POSITION DESC LIMIT 1");
$checker->execute(["budgetsystem",$tablename]);
	foreach($checker as $row){
		
		$result= $row['COLUMN_NAME'];
	
	}
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}


function get_last_column_rao(){
include("cfg.php");

$tablename = "rmdr".$_SESSION['budget'];
	
try {
$checker = $db->prepare("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ? AND TABLE_NAME =? ORDER BY ORDINAL_POSITION DESC LIMIT 1");
$checker->execute(["budgetsystem",$tablename]);
	foreach($checker as $row){
		
		$result= $row['COLUMN_NAME'];
	
	}
}

catch(PDOException $e){
	$result = "1";
	
	
	
}
	
	return $result;
}

function refresh_all()
{
include("cfg.php");

$total="0";
$balance="0";

$table_cy = "rmdr".$_SESSION['budget'];
$table2 = "mdr".$_SESSION['budget']; //20edf_CY table

$tablename = "mdr_list_".$_SESSION['budget']; //20_list_(current Year) table
			$edfCyTbl = $db->prepare("SELECT code, propername FROM `$tablename`");
				$edfCyTbl->execute();
		
					foreach($edfCyTbl as $list){

						$codelist = $list['code'];
						$namelist = $list['code'].'_bal';
						
							$edfcy = $db->prepare("SELECT `$codelist` as valueList, `$namelist` as balanceList FROM `$table2`");
							$edfcy->execute();
							
							foreach($edfcy as $rr){
								
								$total +=  $rr['valueList'];
								
							}
							
							$redfcy = $db->prepare("SELECT SUM($codelist) as total FROM $table_cy");
							$redfcy->execute();
							
							foreach($redfcy as $redfcy_total){
					
								$totalb = $rr['valueList'] - $redfcy_total['total'];
					
								$update_bal = $db->prepare("UPDATE `$table2` SET $namelist=?");
								$update_bal->execute([$totalb]);
								
								$balance += $rr['balanceList'];
							}
					}							
							
				$update_total = $db->prepare("UPDATE `$table2` SET total = ?, total_balance = ?");
				$update_total->execute([$total, $balance]);	
	
	
	
}

?>