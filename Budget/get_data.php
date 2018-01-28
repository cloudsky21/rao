<?PHP 
session_start();
include("insertLog.php");
include("cfg.php");
include("Classes/PHPExcel.php");

date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index");
	exit();
}

?>


<?PHP
























if(isset($_POST['rowid']) && !empty($_POST['rowid'])){
	
	
										/* Gets balance_co that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_tev FROM `aip` WHERE balance_tev > 0 and departments = ?");
										$result->execute([$_POST['rowid']]);
										
										if(($rowCount = $result->rowCount())>0){
										echo '<form action="" method="POST" name="form1">';	
													
										
										
										foreach($result as $row){
											
											/* Checks if already existing in cont_program table */	/* balance_tev */
											$get_ifset_tev = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_tev->execute(["mooe".$row['departments']."_tev_continuing", $_SESSION['budget']]);
											
											$count_tev = $get_ifset_tev->rowCount();
											/* if not exist then display*/
											if(!$count_tev>0){
											
											/* balance_tev */	
											echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">TEV</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
											
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_tev'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code" value="mooe'.$row['departments'].'_tev_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName" value="Traveling Expenses"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-tev">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										?>
										
										
				



				
										<?PHP
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_training_seminars FROM `aip` WHERE balance_training_seminars > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Trainings and Seminars</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
											
											/* Checks if already existing in cont_program table */	/* balance_training_seminars */
											$get_ifset_training = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_training->execute(["mooe".$row['departments']."_training_continuing", $_SESSION['budget']]);
											
											$count_training = $get_ifset_training->rowCount();
											/* if not exist then display*/
											if(!$count_training>0){
											
											/* balance_training_seminars */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_training_seminars'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code" value="mooe'.$row['departments'].'_training_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName" value="Trainings and Seminars"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										?>
										
										
										
										
										
										
										
										<?PHP
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_telephone_telegraph FROM `aip` WHERE balance_telephone_telegraph > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
											
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Telephones And Telegraph</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
											
											/* Checks if already existing in cont_program table */	/* balance_telephone_telegraph */
											$get_ifset_tel = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_tel->execute(["mooe".$row['departments']."_tel_continuing", $_SESSION['budget']]);
											
											$count_tel = $get_ifset_tel->rowCount();
											/* if not exist then display*/
											if(!$count_tel>0){
											
											/* balance_telephone_telegraph */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_telephone_telegraph'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_tel" value="mooe'.$row['departments'].'_tel_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_tel" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-tel">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										?>
										
										
										
										
										
										
										
										<?PHP
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_postage FROM `aip` WHERE balance_postage > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Postage and Deliveries</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
											
											/* Checks if already existing in cont_program table */	/* balance_postage */
											$get_ifset_post = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_post->execute(["mooe".$row['departments']."_post_continuing", $_SESSION['budget']]);
											
											$count_post = $get_ifset_post->rowCount();
											/* if not exist then display*/
											if(!$count_post>0){
											
											/* balance_postage */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_postage'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_post" value="mooe'.$row['departments'].'_post_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_post" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-post">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_insurance_premium FROM `aip` WHERE balance_insurance_premium > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Insurance Premium</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_insurance_premium */
											$get_ifset_insPrem = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_insPrem->execute(["mooe".$row['departments']."_insPrem_continuing", $_SESSION['budget']]);
											
											$count_insPrem = $get_ifset_insPrem->rowCount();
											/* if not exist then display*/
											if(!$count_insPrem>0){
											
											/* balance_insurance_premium */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_insurance_premium'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_insPrem" value="mooe'.$row['departments'].'_insPrem_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_insPrem" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-insPrem">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_accountable_forms FROM `aip` WHERE balance_accountable_forms > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Accountable Forms</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_accountable_forms */
											$get_ifset_acctForms = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_acctForms->execute(["mooe".$row['departments']."_acctForms_continuing", $_SESSION['budget']]);
											
											$count_acctForms = $get_ifset_acctForms->rowCount();
											/* if not exist then display*/
											if(!$count_acctForms>0){
											
											/* balance_accountable_forms */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_accountable_forms'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_acctForms" value="mooe'.$row['departments'].'_acctForms_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_acctForms" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-acctForms">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_advertising_expenses FROM `aip` WHERE balance_advertising_expenses > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Advertising Expenses</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_advertising_expenses */
											$get_ifset_ads = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_ads->execute(["mooe".$row['departments']."_ads_continuing", $_SESSION['budget']]);
											
											$count_ads = $get_ifset_ads->rowCount();
											/* if not exist then display*/
											if(!$count_ads>0){
											
											/* balance_advertising_expenses */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_advertising_expenses'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_ads" value="mooe'.$row['departments'].'_ads_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_ads" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-ads">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_fidelity_bond FROM `aip` WHERE balance_fidelity_bond > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Fidelity Bond Premium</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_fidelity_bond */
											$get_ifset_fid = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_fid->execute(["mooe".$row['departments']."_fid_continuing", $_SESSION['budget']]);
											
											$count_fid = $get_ifset_fid->rowCount();
											/* if not exist then display*/
											if(!$count_fid>0){
											
											/* balance_fidelity_bond */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_fidelity_bond'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_fid" value="mooe'.$row['departments'].'_fid_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_fid" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-fid">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_office_supplies FROM `aip` WHERE balance_office_supplies > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Office Supplies</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_office_supplies */
											$get_ifset_offsup = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_offsup->execute(["mooe".$row['departments']."_offsup_continuing", $_SESSION['budget']]);
											
											$count_offsup = $get_ifset_offsup->rowCount();
											/* if not exist then display*/
											if(!$count_offsup>0){
											
											/* balance_office_supplies */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_office_supplies'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_offsup" value="mooe'.$row['departments'].'_offsup_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_offsup" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-offsup">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_gasoline FROM `aip` WHERE balance_gasoline > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Gasoline, Oil and Lubricants</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_gasoline */
											$get_ifset_gas = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_gas->execute(["mooe".$row['departments']."_gas_continuing", $_SESSION['budget']]);
											
											$count_gas = $get_ifset_gas->rowCount();
											/* if not exist then display*/
											if(!$count_gas>0){
											
											/* balance_gasoline */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_gasoline'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_gas" value="mooe'.$row['departments'].'_gas_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_gas" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-gas">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_motor_vehicle_maint FROM `aip` WHERE balance_motor_vehicle_maint > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Motor Vehicle Maintenance</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_motor_vehicle_maint */
											$get_ifset_moto_maint = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_moto_maint->execute(["mooe".$row['departments']."_moto_maint_continuing", $_SESSION['budget']]);
											
											$count_moto_maint = $get_ifset_moto_maint->rowCount();
											/* if not exist then display*/
											if(!$count_moto_maint>0){
											
											/* balance_motor_vehicle_maint */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_motor_vehicle_maint'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_moto_maint" value="mooe'.$row['departments'].'_moto_maint_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_moto_maint" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-moto_maint">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_office_equip_maint FROM `aip` WHERE balance_office_equip_maint > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Office Equipment Maintenance</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_office_equip_maint */
											$get_ifset_offequip = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_offequip->execute(["mooe".$row['departments']."_offequip_continuing", $_SESSION['budget']]);
											
											$count_offequip = $get_ifset_offequip->rowCount();
											/* if not exist then display*/
											if(!$count_offequip>0){
											
											/* balance_office_equip_maint */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_office_equip_maint'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_offequip" value="mooe'.$row['departments'].'_offequip_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_offequip" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-offequip">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_confidential_intel_maint FROM `aip` WHERE balance_confidential_intel_maint > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Confidential and Intelligence Expenses</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_confidential_intel_maint */
											$get_ifset_confid = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_confid->execute(["mooe".$row['departments']."_confid_continuing", $_SESSION['budget']]);
											
											$count_confid = $get_ifset_confid->rowCount();
											/* if not exist then display*/
											if(!$count_confid>0){
											
											/* balance_confidential_intel_maint */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_confidential_intel_maint'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_confid" value="mooe'.$row['departments'].'_confid_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_confid" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-confid">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_others FROM `aip` WHERE balance_others > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Other Maintenance and Operating Expenses</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_others */
											$get_ifset_others = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_others->execute(["mooe".$row['departments']."_others_continuing", $_SESSION['budget']]);
											
											$count_others = $get_ifset_others->rowCount();
											/* if not exist then display*/
											if(!$count_others>0){
											
											/* balance_others */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_others'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_others" value="mooe'.$row['departments'].'_others_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_others" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-others">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_repairs_it_equip FROM `aip` WHERE balance_repairs_it_equip > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Repairs and Maintenance <br>- IT Equipment and Software</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_repairs_it_equip */
											$get_ifset_it_eqp = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_it_eqp->execute(["mooe".$row['departments']."_it_eqp_continuing", $_SESSION['budget']]);
											
											$count_it_eqp = $get_ifset_it_eqp->rowCount();
											/* if not exist then display*/
											if(!$count_it_eqp>0){
											
											/* balance_repairs_it_equip */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_repairs_it_equip'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_it_eqp" value="mooe'.$row['departments'].'_it_eqp_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_it_eqp" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-it_eqp">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_auditing_services FROM `aip` WHERE balance_auditing_services > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Auditing Services</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_auditing_services */
											$get_ifset_audit = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_audit->execute(["mooe".$row['departments']."_audit_continuing", $_SESSION['budget']]);
											
											$count_audit = $get_ifset_audit->rowCount();
											/* if not exist then display*/
											if(!$count_audit>0){
											
											/* balance_auditing_services */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_auditing_services'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_audit" value="mooe'.$row['departments'].'_audit_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_audit" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-audit">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_water FROM `aip` WHERE balance_water > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Water</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_water */
											$get_ifset_water = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_water->execute(["mooe".$row['departments']."_water_continuing", $_SESSION['budget']]);
											
											$count_water = $get_ifset_water->rowCount();
											/* if not exist then display*/
											if(!$count_water>0){
											
											/* balance_water */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_water'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_water" value="mooe'.$row['departments'].'_water_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_water" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-water">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_electricity FROM `aip` WHERE balance_electricity > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Electricity</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_electricity */
											$get_ifset_electricity = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_electricity->execute(["mooe".$row['departments']."_electricity_continuing", $_SESSION['budget']]);
											
											$count_electricity = $get_ifset_electricity->rowCount();
											/* if not exist then display*/
											if(!$count_electricity>0){
											
											/* balance_electricity */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_electricity'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_electricity" value="mooe'.$row['departments'].'_electricity_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_electricity" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-electricity">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_aics FROM `aip` WHERE balance_aics > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Grants and Donations</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_aics */
											$get_ifset_aics = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_aics->execute(["mooe".$row['departments']."_aics_continuing", $_SESSION['budget']]);
											
											$count_aics = $get_ifset_aics->rowCount();
											/* if not exist then display*/
											if(!$count_aics>0){
											
											/* balance_aics */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_aics'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_aics" value="mooe'.$row['departments'].'_aics_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_aics" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-aics">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
										
										
										/* Gets columns that still have remaining balance */					
										$result = $db->prepare("SELECT departments, deptName, balance_marketSlaughter FROM `aip` WHERE balance_marketSlaughter > 0 AND departments = ?");
										$result->execute([$_POST['rowid']]);
										
										$rowCount = $result->rowCount();
										
										if($rowCount>0){
													echo '<table class="table">';
														echo '<tr>';
															echo '<th style="border-top:none;">Market and Slaughterhouse Maintenance</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															echo '<th style="border-top:none;">&nbsp;</th>';
															
														echo '</tr>';
										
										
										foreach($result as $row){
												
											/* Checks if already existing in cont_program table */	/* balance_marketSlaughter */
											$get_ifset_marketSlaught = $db->prepare("SELECT * FROM cont_program WHERE thead = ? AND year = ?");
											$get_ifset_marketSlaught->execute(["mooe".$row['departments']."_marketSlaught_continuing", $_SESSION['budget']]);
											
											$count_marketSlaught = $get_ifset_marketSlaught->rowCount();
											/* if not exist then display*/
											if(!$count_marketSlaught>0){
											
											/* balance_marketSlaughter */	
											echo '<form action="" method="POST">';
														echo '<tr>';
																echo '<div class="form-group">';
																echo '<td><input type="number" value="'.$row['balance_marketSlaughter'].'" name="column_allotment" class="form-control" readonly></td>';
																echo '<td><input type="hidden" name="code_marketSlaught" value="mooe'.$row['departments'].'_marketSlaught_continuing"></td>';
																echo '<td><input type="hidden" name="year" value="'.$_SESSION['budget'].'"></td>';
																echo '<td><input type="hidden" name="wholeName_marketSlaught" value="'.$row['deptName'].'"></td>';
																echo '<td colspan="3"><button type="submit" class="btn btn-default form-control" name="btn-mooe-marketSlaught">Insert</button></td>';
																echo '</div>';
											echo '</form>';
											}	
											else {}
											
										}	
										
														echo '</tr>';
													echo '</table>';
										
										}
										else {}
										
										
										
}
										?>
