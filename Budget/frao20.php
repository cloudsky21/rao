<?PHP
/*function get_total_1(){
include("cfg.php");
$result= $db->prepare("SELECT sum(mdcOperation) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_2(){
include("cfg.php");
$result= $db->prepare("SELECT sum(mvprogram) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_3(){
include("cfg.php");
$result= $db->prepare("SELECT sum(barangayan) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_4(){
include("cfg.php");
$result= $db->prepare("SELECT sum(faBrgyP) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_5(){
include("cfg.php");
$result= $db->prepare("SELECT sum(cbms) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_6(){
include("cfg.php");
$result= $db->prepare("SELECT sum(cfLPRAP) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_7(){
include("cfg.php");
$result= $db->prepare("SELECT sum(susDevCLUP) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_8(){
include("cfg.php");
$result= $db->prepare("SELECT sum(ictTech4ed) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_9(){
include("cfg.php");
$result= $db->prepare("SELECT sum(rAndD) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_10(){
include("cfg.php");
$result= $db->prepare("SELECT sum(iecEdCamp) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_11(){
include("cfg.php");
$result= $db->prepare("SELECT sum(dCem) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_12(){
include("cfg.php");
$result= $db->prepare("SELECT sum(udExUgc) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}



function get_total_13(){
include("cfg.php");
$result= $db->prepare("SELECT sum(mBrgyRoads) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_14(){
include("cfg.php");
$result= $db->prepare("SELECT sum(SportsDev) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_15(){
include("cfg.php");
$result= $db->prepare("SELECT sum(afdLproj) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_16(){
include("cfg.php");
$result= $db->prepare("SELECT sum(aExtPCapB) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}



function get_total_17(){
include("cfg.php");
$result= $db->prepare("SELECT sum(AHCM) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}



function get_total_18(){
include("cfg.php");
$result= $db->prepare("SELECT sum(coastalFRM) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_19(){
include("cfg.php");
$result= $db->prepare("SELECT sum(LpovRp) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_20(){
include("cfg.php");
$result= $db->prepare("SELECT sum(solidWaste) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_21(){
include("cfg.php");
$result= $db->prepare("SELECT sum(cleanGreen) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

function get_total_22(){
include("cfg.php");
$result= $db->prepare("SELECT sum(infraBrgys) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}



function get_total_23(){
include("cfg.php");
$result= $db->prepare("SELECT sum(loanPayment) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_24(){
include("cfg.php");
$result= $db->prepare("SELECT sum(masamasid) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}





function get_total_25(){
include("cfg.php");
$result= $db->prepare("SELECT sum(tourCultAct) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}


function get_total_26(){
include("cfg.php");
$result= $db->prepare("SELECT sum(tourProjinfraDev) as zz FROM r20edf WHERE yearm=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
return $i;	
}

///////////////BALANCE



function get_total_b1(){
include("cfg.php");
$result= $db->prepare("SELECT mdcOperation as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = get_total_1(); 
$res = $i - $g;
u1($res);
return $res;	
}

function get_total_b2(){
include("cfg.php");
$result= $db->prepare("SELECT mvprogram as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$getc = get_total_2();
$add = $i - $getc;
u2($add);
return $add;	
}

function get_total_b3(){
include("cfg.php");
$result= $db->prepare("SELECT barangayan as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = get_total_3(); 
$gg = $i - $g;
u3($gg);
return $gg;	
}

function get_total_b4(){
include("cfg.php");
$result= $db->prepare("SELECT faBrgyP as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_4();
u4($g);
return $g;	
}

function get_total_b5(){
include("cfg.php");
$result= $db->prepare("SELECT cbms as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_5();
u5($g);
return $g;	
}

function get_total_b6(){
include("cfg.php");
$result= $db->prepare("SELECT cfLPRAP as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_6();
u6($g);
return $g;		
}


function get_total_b7(){
include("cfg.php");
$result= $db->prepare("SELECT susDevCLUP as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_7();
u7($g);
return $g;	
}

function get_total_b8(){
include("cfg.php");
$result= $db->prepare("SELECT ictTech4ed as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_8();
u8($g);
return $g;	
}


function get_total_b9(){
include("cfg.php");
$result= $db->prepare("SELECT rAndD as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_9();
u9($g);
return $g;	
}


function get_total_b10(){
include("cfg.php");
$result= $db->prepare("SELECT iecEdCamp as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_10();
u10($g);
return $g;		
}


function get_total_b11(){
include("cfg.php");
$result= $db->prepare("SELECT dCem as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_11();
u11($g);
return $g;	
}


function get_total_b12(){
include("cfg.php");
$result= $db->prepare("SELECT udExUgc as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_12();
u12($g);
return $g;		
}



function get_total_b13(){
include("cfg.php");
$result= $db->prepare("SELECT mBrgyRoads as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_13();
u13($g);
return $g;		
}


function get_total_b14(){
include("cfg.php");
$result= $db->prepare("SELECT SportsDev as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_14();
u14($g);
return $g;		
}

function get_total_b15(){
include("cfg.php");
$result= $db->prepare("SELECT afdLproj as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_15();
u15($g);
return $g;	
}


function get_total_b16(){
include("cfg.php");
$result= $db->prepare("SELECT aExtPCapB as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_16();
u16($g);
return $g;	
}



function get_total_b17(){
include("cfg.php");
$result= $db->prepare("SELECT AHCM as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_17();
u16($g);
return $g;		
}



function get_total_b18(){
include("cfg.php");
$result= $db->prepare("SELECT coastalFRM as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_18();
u18($g);
return $g;		
}


function get_total_b19(){
include("cfg.php");
$result= $db->prepare("SELECT LpovRp as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_19();
u19($g);
return $g;		
}


function get_total_b20(){
include("cfg.php");
$result= $db->prepare("SELECT solidWaste as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_20();
u20($g);
return $g;		
}

function get_total_b21(){
include("cfg.php");
$result= $db->prepare("SELECT cleanGreen as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_21();
u21($g);
return $g;		
}

function get_total_b22(){
include("cfg.php");
$result= $db->prepare("SELECT infraBrgys as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_22();
u22($g);
return $g;	
}



function get_total_b23(){
include("cfg.php");
$result= $db->prepare("SELECT loanPayment as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_23();
u23($g);
return $g;		
}


function get_total_b24(){
include("cfg.php");
$result= $db->prepare("SELECT masamasid as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_24();
u24($g);
return $g;		
}





function get_total_b25(){
include("cfg.php");
$result= $db->prepare("SELECT tourCultAct as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_25();
u25($g);
return $g;		
}


function get_total_b26(){
include("cfg.php");
$result= $db->prepare("SELECT tourProjinfraDev as zz FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i = $r['zz'];
$g = $i - get_total_26();
u26($g);
return $g;		
}




/////// UPDATE


function u1($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET mdcOperationBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u2($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET mvprogramBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u3($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET barangayanBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u4($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET faBrgyPBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u5($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET cbmsBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u6($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET cfLPRAPBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u7($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET susDevCLUPBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u8($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET ictTech4edBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u9($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET rAndDBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u10($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET iecEdCampBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u11($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET dCemBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u12($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET udExUgcBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u13($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET mBrgyRoadsBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u14($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET SportsDevBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u15($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET afdLprojBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u16($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET aExtPCapBBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u17($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET AHCMBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u18($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET coastalFRMBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u19($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET LpovRpBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}



function u20($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET solidWasteBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u21($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET cleanGreenBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}



function u22($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET infraBrgysBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u23($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET loanPaymentBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}

function u24($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET masamasidBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u25($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET tourCultActBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}


function u26($res){
include("cfg.php");
$result= $db->prepare("UPDATE 20edf SET tourProjinfraDevBal= ? WHERE Year=?");
$result->execute([$res,$_SESSION['budget']]);
}






////// AIP
// mdcOperation
function get1(){
include("cfg.php");
$result= $db->prepare("SELECT mdcOperation as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// mvprogram
function get2(){
include("cfg.php");
$result= $db->prepare("SELECT mvprogram as xx FROM 20edf WHERE Year=? LIMIT 1");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// barangayan
function get3(){
include("cfg.php");
$result= $db->prepare("SELECT barangayan as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// faBrgyP
function get4(){
include("cfg.php");
$result= $db->prepare("SELECT faBrgyP as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// cbms
function get5(){
include("cfg.php");
$result= $db->prepare("SELECT cbms as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// cfLPRAP
function get6(){
include("cfg.php");
$result= $db->prepare("SELECT cfLPRAP as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// susDevCLUP
function get7(){
include("cfg.php");
$result= $db->prepare("SELECT susDevCLUP as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}


// ictTech4ed
function get8(){
include("cfg.php");
$result= $db->prepare("SELECT ictTech4ed as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}

// rAndD
function get9(){
include("cfg.php");
$result= $db->prepare("SELECT rAndD as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}

// iecEdCamp
function get10(){
include("cfg.php");
$result= $db->prepare("SELECT iecEdCamp as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// dCem
function get11(){
include("cfg.php");
$result= $db->prepare("SELECT dCem as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// udExUgc
function get12(){
include("cfg.php");
$result= $db->prepare("SELECT udExUgc as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}

// mBrgyRoads
function get13(){
include("cfg.php");
$result= $db->prepare("SELECT mBrgyRoads as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// SportsDev
function get14(){
include("cfg.php");
$result= $db->prepare("SELECT SportsDev as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}

// afdLproj
function get15(){
include("cfg.php");
$result= $db->prepare("SELECT afdLproj as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// aExtPCapB
function get16(){
include("cfg.php");
$result= $db->prepare("SELECT aExtPCapB as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// AHCM
function get17(){
include("cfg.php");
$result= $db->prepare("SELECT AHCM as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// coastalFRM
function get18(){
include("cfg.php");
$result= $db->prepare("SELECT coastalFRM as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// LpovRp
function get19(){
include("cfg.php");
$result= $db->prepare("SELECT LpovRp as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// solidWaste
function get20(){
include("cfg.php");
$result= $db->prepare("SELECT solidWaste as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// cleanGreen
function get21(){
include("cfg.php");
$result= $db->prepare("SELECT cleanGreen as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// infraBrgys
function get22(){
include("cfg.php");
$result= $db->prepare("SELECT infraBrgys as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// loanPayment
function get23(){
include("cfg.php");
$result= $db->prepare("SELECT loanPayment as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// masamasid
function get24(){
include("cfg.php");
$result= $db->prepare("SELECT masamasid as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// tourCultAct
function get25(){
include("cfg.php");
$result= $db->prepare("SELECT tourCultAct as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}
// tourProjinfraDev
function get26(){
include("cfg.php");
$result= $db->prepare("SELECT tourProjinfraDev as xx FROM 20edf WHERE Year=?");
$result->execute([$_SESSION['budget']]);
$r = $result->fetch();
$i= $r['xx'];
return $i;
}





*/

function get_total_obligation(){
include("cfg.php");
$tbl = "r20edf".$_SESSION['budget'];
$result = $db->prepare("SELECT SUM(total) AS total FROM `$tbl`");
$result->execute();	
$row = $result->fetch();
$value = $row['total'];

return $value;	
	
}
function get_obligation_bal(){
include("cfg.php");
$tbl = "20edf".$_SESSION['budget'];
$result = $db->prepare("SELECT total_balance FROM `$tbl");
$result->execute();	
$row = $result->fetch();
$value = $row['total_balance'];

	
return $value;	
}

function get_appropriation(){
include("cfg.php");

$tbl = "20edf".$_SESSION['budget'];
$result = $db->prepare("SELECT * FROM $tbl");
$result->execute();	

foreach($result as $row){
	$value = $row['total'];
}

	
return $value;	
}

function refresh_all()
{
include("cfg.php");

$total="0";
$balance="0";

$table_cy = "r20edf".$_SESSION['budget'];
$table2 = "20edf".$_SESSION['budget']; //20edf_CY table

$tablename = "20_list_".$_SESSION['budget']; //20_list_(current Year) table
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