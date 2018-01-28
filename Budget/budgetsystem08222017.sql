-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 02:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgetsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `1sp2017`
--

CREATE TABLE `1sp2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `honorarium_bal` decimal(20,2) NOT NULL,
  `honorarium` decimal(20,2) NOT NULL,
  `npdr_bal` decimal(20,2) NOT NULL,
  `npdr` decimal(20,2) NOT NULL,
  `motor_vehicle_maint_bal` decimal(20,2) NOT NULL,
  `motor_vehicle_maint` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1sp2017`
--

INSERT INTO `1sp2017` (`year`, `signatory`, `total`, `honorarium_bal`, `honorarium`, `npdr_bal`, `npdr`, `motor_vehicle_maint_bal`, `motor_vehicle_maint`) VALUES
('2017', 'Erwin C. Ocaña', '30000.00', '0.00', '10000.00', '0.00', '10000.00', '0.00', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `1sp_list_2016`
--

CREATE TABLE `1sp_list_2016` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1sp_list_2016`
--

INSERT INTO `1sp_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'honorarium', 'Honorarium for PWD and Focal Person', '2016'),
(2, 'npdr', 'Mandatory Program NDPR Celebration', '2016'),
(3, 'motor_vehicle_maint', 'Maintenance of Motor Vehicle', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `1sp_list_2017`
--

CREATE TABLE `1sp_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1sp_list_2017`
--

INSERT INTO `1sp_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'honorarium', 'Honorarium for PWD and Focal Person', '2017'),
(2, 'npdr', 'Mandatory Program NDPR Celebration', '2017'),
(3, 'motor_vehicle_maint', 'Maintenance of Motor Vehicle', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `20edf2017`
--

CREATE TABLE `20edf2017` (
  `year` varchar(4) NOT NULL,
  `signator` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `mdcOperation_bal` decimal(20,2) NOT NULL,
  `mdcOperation` decimal(20,2) NOT NULL,
  `mvprogram_bal` decimal(20,2) NOT NULL,
  `mvprogram` decimal(20,2) NOT NULL,
  `barangayan_bal` decimal(20,2) NOT NULL,
  `barangayan` decimal(20,2) NOT NULL,
  `faBrgyP_bal` decimal(20,2) NOT NULL,
  `faBrgyP` decimal(20,2) NOT NULL,
  `cbms_bal` decimal(20,2) NOT NULL,
  `cbms` decimal(20,2) NOT NULL,
  `cfLPRAP_bal` decimal(20,2) NOT NULL,
  `cfLPRAP` decimal(20,2) NOT NULL,
  `susDevCLUP_bal` decimal(20,2) NOT NULL,
  `susDevCLUP` decimal(20,2) NOT NULL,
  `ictTech4ed_bal` decimal(20,2) NOT NULL,
  `ictTech4ed` decimal(20,2) NOT NULL,
  `rAndD_bal` decimal(20,2) NOT NULL,
  `rAndD` decimal(20,2) NOT NULL,
  `iecEdCamp_bal` decimal(20,2) NOT NULL,
  `iecEdCamp` decimal(20,2) NOT NULL,
  `dCem_bal` decimal(20,2) NOT NULL,
  `dCem` decimal(20,2) NOT NULL,
  `udExUgc_bal` decimal(20,2) NOT NULL,
  `udExUgc` decimal(20,2) NOT NULL,
  `mBrgyRoads_bal` decimal(20,2) NOT NULL,
  `mBrgyRoads` decimal(20,2) NOT NULL,
  `SportsDev_bal` decimal(20,2) NOT NULL,
  `SportsDev` decimal(20,2) NOT NULL,
  `afdLproj_bal` decimal(20,2) NOT NULL,
  `afdLproj` decimal(20,2) NOT NULL,
  `aExtPCapB_bal` decimal(20,2) NOT NULL,
  `aExtPCapB` decimal(20,2) NOT NULL,
  `AHCM_bal` decimal(20,2) NOT NULL,
  `AHCM` decimal(20,2) NOT NULL,
  `coastalFRM_bal` decimal(20,2) NOT NULL,
  `coastalFRM` decimal(20,2) NOT NULL,
  `LpovRp_bal` decimal(20,2) NOT NULL,
  `LpovRp` decimal(20,2) NOT NULL,
  `wasteMgt_bal` decimal(20,2) NOT NULL,
  `wasteMgt` decimal(20,2) NOT NULL,
  `cleanGreen_bal` decimal(20,2) NOT NULL,
  `cleanGreen` decimal(20,2) NOT NULL,
  `infraBrgys_bal` decimal(20,2) NOT NULL,
  `infraBrgys` decimal(20,2) NOT NULL,
  `loanPayment_bal` decimal(20,2) NOT NULL,
  `loanPayment` decimal(20,2) NOT NULL,
  `masamasid_bal` decimal(20,2) NOT NULL,
  `masamasid` decimal(20,2) NOT NULL,
  `tourCultAct_bal` decimal(20,2) NOT NULL,
  `tourCultAct` decimal(20,2) NOT NULL,
  `tourProjinfraDev_bal` decimal(20,2) NOT NULL,
  `tourProjinfraDev` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `20edf2017`
--

INSERT INTO `20edf2017` (`year`, `signator`, `total`, `mdcOperation_bal`, `mdcOperation`, `mvprogram_bal`, `mvprogram`, `barangayan_bal`, `barangayan`, `faBrgyP_bal`, `faBrgyP`, `cbms_bal`, `cbms`, `cfLPRAP_bal`, `cfLPRAP`, `susDevCLUP_bal`, `susDevCLUP`, `ictTech4ed_bal`, `ictTech4ed`, `rAndD_bal`, `rAndD`, `iecEdCamp_bal`, `iecEdCamp`, `dCem_bal`, `dCem`, `udExUgc_bal`, `udExUgc`, `mBrgyRoads_bal`, `mBrgyRoads`, `SportsDev_bal`, `SportsDev`, `afdLproj_bal`, `afdLproj`, `aExtPCapB_bal`, `aExtPCapB`, `AHCM_bal`, `AHCM`, `coastalFRM_bal`, `coastalFRM`, `LpovRp_bal`, `LpovRp`, `wasteMgt_bal`, `wasteMgt`, `cleanGreen_bal`, `cleanGreen`, `infraBrgys_bal`, `infraBrgys`, `loanPayment_bal`, `loanPayment`, `masamasid_bal`, `masamasid`, `tourCultAct_bal`, `tourCultAct`, `tourProjinfraDev_bal`, `tourProjinfraDev`) VALUES
('2017', 'Erwin C. Ocaña', '12159358.20', '0.00', '76540.40', '0.00', '430000.00', '0.00', '120000.00', '0.00', '450000.00', '0.00', '0.00', '0.00', '800000.00', '0.00', '500000.00', '0.00', '150000.00', '0.00', '100000.00', '0.00', '75000.00', '0.00', '500000.00', '0.00', '500000.00', '0.00', '2000000.00', '0.00', '500000.00', '0.00', '400000.00', '0.00', '20000.00', '0.00', '65000.00', '0.00', '600000.00', '0.00', '500000.00', '0.00', '600000.00', '0.00', '250000.00', '0.00', '622817.80', '0.00', '700000.00', '0.00', '200000.00', '0.00', '1000000.00', '0.00', '1000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `20_list_2016`
--

CREATE TABLE `20_list_2016` (
  `id` int(11) NOT NULL,
  `code` varchar(300) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `20_list_2016`
--

INSERT INTO `20_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'mdcOperation', 'MDC Operation', '2016'),
(2, 'mvprogram', 'Municipal Volunteer Program', '2016'),
(3, 'barangayan', 'Barangayan/Gui-os Barangay', '2016'),
(4, 'faBrgyP', 'Financial Assistance for Brgy. priority P/P/As-CCA/DRR', '2016'),
(5, 'cbms', 'CBMS', '2016'),
(6, 'cfLPRAP', 'Counterpart Fund for LPRAP P/P/As', '2016'),
(7, 'susDevCLUP', 'Development Planning - SusDev/CLUP enhancement', '2016'),
(8, 'ictTech4ed', 'Development of ICT & Tech4Ed Operation', '2016'),
(9, 'rAndD', 'Research and Development', '2016'),
(10, 'iecEdCamp', 'IEC-Information, Education Campaign', '2016'),
(11, 'dCem', 'Development of Municipal Cemetery -phase 1', '2016'),
(12, 'udExUgc', 'Urban Development -Expansion of Urban/Growth Center', '2016'),
(13, 'mBrgyRoads', 'Maintenance of Mun./Brgy. Roads', '2016'),
(14, 'SportsDev', 'Sports Development', '2016'),
(15, 'afdLproj', 'Agri/Fisheries Development & Livelihood Projects', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `20_list_2017`
--

CREATE TABLE `20_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `20_list_2017`
--

INSERT INTO `20_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'mdcOperation', 'MDC Operation', '2017'),
(2, 'mvprogram', 'Municipal Volunteer Program', '2017'),
(3, 'barangayan', 'Barangayan/Gui-os Barangay', '2017'),
(4, 'faBrgyP', 'Financial Assistance for Brgy. priority P/P/As-CCA/DRR', '2017'),
(5, 'cbms', 'CBMS', '2017'),
(6, 'cfLPRAP', 'Counterpart Fund for LPRAP P/P/As', '2017'),
(7, 'susDevCLUP', 'Development Planning - SusDev/CLUP enhancement', '2017'),
(8, 'ictTech4ed', 'Development of ICT & Tech4Ed Operation', '2017'),
(9, 'rAndD', 'Research and Development', '2017'),
(10, 'iecEdCamp', 'IEC-Information, Education Campaign', '2017'),
(11, 'dCem', 'Development of Municipal Cemetery -phase 1', '2017'),
(12, 'udExUgc', 'Urban Development -Expansion of Urban/Growth Center', '2017'),
(13, 'mBrgyRoads', 'Maintenance of Mun./Brgy. Roads', '2017'),
(14, 'SportsDev', 'Sports Development', '2017'),
(15, 'afdLproj', 'Agri/Fisheries Development & Livelihood Projects', '2017'),
(16, 'aExtPCapB', 'Agri Extension Program (Cap Bldg)', '2017'),
(17, 'AHCM', 'Animal Health Care Management', '2017'),
(18, 'coastalFRM', 'Coastal Fishery Resources Mgt. Program', '2017'),
(19, 'LpovRp', 'Local Poverty Reduction Program', '2017'),
(20, 'wasteMgt', 'Solid Waste Mgt. Management Program', '2017'),
(21, 'cleanGreen', 'Clean & Green Program', '2017'),
(22, 'infraBrgys', 'Infrastructure Development for Barangays', '2017'),
(23, 'loanPayment', 'Loan Payment', '2017'),
(24, 'masamasid', 'MASAMASID', '2017'),
(25, 'tourCultAct', 'Tourism / Cultural Activities', '2017'),
(26, 'tourProjinfraDev', 'Tourism Project/s - Infrastructure development', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `accountName` varchar(300) NOT NULL,
  `position` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `password`, `accountName`, `position`, `status`) VALUES
('cloudsky21', 'bd8084619790d45126474a104e270cb0d3552be5', 'Mark Lindon', 'Guest', 0),
('root', '8a89798cf0878e37bb6589ae1c36b9d8a036275b', 'Administrator', 'Admin Account', 0);

-- --------------------------------------------------------

--
-- Table structure for table `aip`
--

CREATE TABLE `aip` (
  `id` int(11) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `departments` varchar(300) NOT NULL,
  `deptName` varchar(300) NOT NULL,
  `headOfOffice` varchar(200) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ACA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_ACA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `honoraria` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_honoraria` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_year_end` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_mid_year` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philHealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_philHealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_other_personal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `terminal_leave` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_terminal_leave` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthWorkersBenefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_healthWorkersBenefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `subsistenceAllowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_subsistenceAllowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_allowance_bonuses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_other_allowance_bonuses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_ps_balance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training_seminars` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_training_seminars` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone_telegraph` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_telephone_telegraph` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `insurance_premium` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_insurance_premium` decimal(20,2) NOT NULL DEFAULT '0.00',
  `accountable_forms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_accountable_forms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `advertising_expenses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_advertising_expenses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fidelity_bond` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_fidelity_bond` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_supplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_office_supplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gasoline` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_gasoline` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_equip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_office_equip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `confidential_intel_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_confidential_intel_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others` decimal(20,2) DEFAULT '0.00',
  `balance_others` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `repairs_it_equip` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_repairs_it_equip` decimal(20,2) NOT NULL DEFAULT '0.00',
  `co` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_co` decimal(20,2) NOT NULL DEFAULT '0.00',
  `auditing_services` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_auditing_services` decimal(20,2) NOT NULL DEFAULT '0.00',
  `water` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_water` decimal(20,2) NOT NULL DEFAULT '0.00',
  `electricity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_electricity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aics` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_aics` decimal(20,2) NOT NULL DEFAULT '0.00',
  `marketSlaughter` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_marketSlaughter` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balance_co` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aip`
--

INSERT INTO `aip` (`id`, `Year`, `departments`, `deptName`, `headOfOffice`, `salaries`, `balance_salaries`, `ACA`, `balance_ACA`, `PERA`, `balance_PERA`, `RA`, `balance_RA`, `TA`, `balance_TA`, `clothing_allowance`, `balance_clothing_allowance`, `honoraria`, `balance_honoraria`, `year_end`, `balance_year_end`, `cash_gift`, `balance_cash_gift`, `mid_year`, `balance_mid_year`, `pib`, `balance_pib`, `life_retirement`, `balance_life_retirement`, `pag_ibig`, `balance_pag_ibig`, `philHealth`, `balance_philHealth`, `ecc`, `balance_ecc`, `other_personal`, `balance_other_personal`, `terminal_leave`, `balance_terminal_leave`, `healthWorkersBenefits`, `balance_healthWorkersBenefits`, `subsistenceAllowance`, `balance_subsistenceAllowance`, `other_allowance_bonuses`, `balance_other_allowance_bonuses`, `total_ps`, `total_ps_balance`, `tev`, `balance_tev`, `training_seminars`, `balance_training_seminars`, `telephone_telegraph`, `balance_telephone_telegraph`, `postage`, `balance_postage`, `insurance_premium`, `balance_insurance_premium`, `accountable_forms`, `balance_accountable_forms`, `advertising_expenses`, `balance_advertising_expenses`, `fidelity_bond`, `balance_fidelity_bond`, `office_supplies`, `balance_office_supplies`, `gasoline`, `balance_gasoline`, `motor_vehicle_maint`, `balance_motor_vehicle_maint`, `office_equip_maint`, `balance_office_equip_maint`, `confidential_intel_maint`, `balance_confidential_intel_maint`, `others`, `balance_others`, `total_mooe`, `balance_mooe`, `repairs_it_equip`, `balance_repairs_it_equip`, `co`, `total_co`, `auditing_services`, `balance_auditing_services`, `water`, `balance_water`, `electricity`, `balance_electricity`, `aics`, `balance_aics`, `marketSlaughter`, `balance_marketSlaughter`, `balance_co`) VALUES
(1, '2017', 'MMO', 'Mayors Office', 'HON. ERWIN C. OCAÑA', '1254648.00', '1254648.00', '0.00', '0.00', '144000.00', '144000.00', '75600.00', '75600.00', '75600.00', '75600.00', '30000.00', '30000.00', '360000.00', '360000.00', '104554.00', '104554.00', '30000.00', '30000.00', '104554.00', '104554.00', '25000.00', '25000.00', '150557.76', '150557.76', '7200.00', '7200.00', '12900.00', '12900.00', '6450.00', '6450.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2381063.76', '2381063.76', '600000.00', '409710.17', '20000.00', '8429.00', '30000.00', '20575.24', '500.00', '500.00', '60000.00', '53468.44', '0.00', '0.00', '0.00', '0.00', '10000.00', '10000.00', '170000.00', '96655.94', '300000.00', '261750.00', '200000.00', '200000.00', '50000.00', '41400.00', '100000.00', '100000.00', '1500000.00', '1283728.00', '3040500.00', '2469216.79', '0.00', '0.00', '794390.85', '794390.85', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '293779.78'),
(2, '2017', 'SB', 'Sangguniang Bayan', 'HON. JUN LEGAZPI', '6077820.00', '4676075.00', '0.00', '0.00', '360000.00', '248000.00', '764400.00', '530600.00', '764400.00', '530600.00', '75000.00', '5000.00', '0.00', '0.00', '506485.00', '506485.00', '75000.00', '75000.00', '506485.00', '506485.00', '20000.00', '0.00', '729338.40', '604102.20', '18000.00', '13800.00', '66600.00', '53887.50', '17121.84', '13164.38', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '9980650.24', '7763199.08', '981272.50', '758379.38', '20000.00', '20000.00', '20000.00', '20000.00', '770.00', '770.00', '0.00', '0.00', '0.00', '0.00', '110000.00', '110000.00', '8250.00', '8250.00', '70000.00', '70000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '320000.00', '310000.00', '1530292.50', '1296399.38', '0.00', '0.00', '150000.00', '150000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '135000.00'),
(3, '2017', 'MPDO', 'Municipal Planning and Development Office', 'ZALDY MARILLA', '766620.00', '575613.00', '0.00', '0.00', '72000.00', '48000.00', '63000.00', '42000.00', '63000.00', '42000.00', '15000.00', '0.00', '0.00', '0.00', '63885.00', '63885.00', '15000.00', '15000.00', '63885.00', '63885.00', '15000.00', '0.00', '91994.40', '69073.56', '3600.00', '2700.00', '8400.00', '6300.00', '3211.44', '2417.22', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1244595.84', '930873.78', '101000.00', '74393.00', '2000.00', '2000.00', '15000.00', '12191.30', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '40000.00', '40000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '43300.00', '-1700.00', '201300.00', '124959.30', '0.00', '0.00', '50000.00', '50000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11800.00'),
(4, '2017', 'LCR', 'Local Civil Registrar', ' n/a', '566652.00', '566652.00', '0.00', '0.00', '48000.00', '48000.00', '63000.00', '63000.00', '63000.00', '63000.00', '10000.00', '10000.00', '0.00', '0.00', '47221.00', '47221.00', '10000.00', '10000.00', '47221.00', '47221.00', '10000.00', '10000.00', '67998.24', '67998.24', '2400.00', '2400.00', '6450.00', '6450.00', '2111.28', '2111.28', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '944053.52', '944053.52', '62000.00', '62000.00', '50000.00', '50000.00', '0.00', '0.00', '500.00', '500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '45247.00', '45247.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '60956.10', '60956.10', '218703.10', '218703.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, '2017', 'MBO', 'Municipal Budget Office', 'LOIDA A. PALAÑA', '493332.00', '481332.00', '0.00', '0.00', '24000.00', '24000.00', '63000.00', '63000.00', '63000.00', '63000.00', '5000.00', '5000.00', '0.00', '0.00', '41111.00', '41111.00', '5000.00', '5000.00', '41111.00', '41111.00', '5000.00', '5000.00', '59199.84', '59199.84', '1200.00', '1200.00', '5250.00', '5250.00', '1200.00', '1200.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '807403.84', '766899.94', '50000.00', '49000.00', '10000.00', '9500.00', '18000.00', '18000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '45000.00', '45000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '29996.65', '29996.65', '134996.65', '152996.65', '0.00', '0.00', '20000.00', '20000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '20000.00'),
(6, '2017', 'MACCO', 'Municipal Accounting Office', 'JEANA A. PARONE', '797976.00', '772155.00', '0.00', '0.00', '96000.00', '96000.00', '63000.00', '63000.00', '63000.00', '63000.00', '20000.00', '20000.00', '0.00', '0.00', '66498.00', '66498.00', '20000.00', '20000.00', '66498.00', '66498.00', '15000.00', '15000.00', '95757.12', '92658.60', '4800.00', '4500.00', '9300.00', '8962.50', '4242.72', '3996.57', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1322071.84', '1275768.67', '116500.00', '116500.00', '30000.00', '30000.00', '0.00', '0.00', '500.00', '500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '115000.00', '115000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11162.50', '11162.50', '300162.50', '300162.50', '0.00', '0.00', '35000.00', '35000.00', '27000.00', '27000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '35000.00'),
(7, '2017', 'MTO', 'Municipal Treasurers Office', 'JAIME B. LAURON', '1446216.00', '1446216.00', '0.00', '0.00', '216000.00', '204000.00', '63000.00', '57750.00', '63000.00', '57750.00', '45000.00', '45000.00', '0.00', '0.00', '120518.00', '120518.00', '45000.00', '45000.00', '120518.00', '120518.00', '35000.00', '35000.00', '173545.92', '173545.92', '10800.00', '10800.00', '16950.00', '16950.00', '10072.56', '10072.56', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2365620.48', '2343120.48', '160000.00', '160000.00', '85000.00', '85000.00', '60000.00', '60000.00', '10000.00', '10000.00', '0.00', '0.00', '90000.00', '90000.00', '0.00', '0.00', '45000.00', '45000.00', '175000.00', '175000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '75000.00', '75000.00', '770000.00', '505000.00', '70000.00', '70000.00', '200000.00', '200000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200000.00'),
(8, '2017', 'MASSO', 'Municipal Assesors Office', 'MYRNA T. SILVANO', '606696.00', '606696.00', '0.00', '0.00', '48000.00', '44000.00', '63000.00', '57750.00', '63000.00', '57750.00', '10000.00', '10000.00', '0.00', '0.00', '50558.00', '50558.00', '10000.00', '10000.00', '50558.00', '50558.00', '10000.00', '10000.00', '72803.52', '72803.52', '2400.00', '2400.00', '6450.00', '6450.00', '2085.96', '2085.96', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '995551.48', '981051.48', '100000.00', '100000.00', '10000.00', '10000.00', '0.00', '0.00', '850.00', '850.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '52000.00', '52000.00', '0.00', '0.00', '0.00', '0.00', '5500.00', '5500.00', '0.00', '0.00', '5500.00', '5500.00', '173850.00', '168350.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, '2017', 'MHO', 'Municipal Health Office', 'DRA. LYN BENITEZ', '2099772.00', '2099772.00', '0.00', '0.00', '192000.00', '180000.00', '63000.00', '57750.00', '63000.00', '57750.00', '40000.00', '40000.00', '0.00', '0.00', '174981.00', '174981.00', '40000.00', '40000.00', '174981.00', '174981.00', '40000.00', '40000.00', '251972.64', '251972.64', '9600.00', '9600.00', '21600.00', '21600.00', '9600.00', '9600.00', '0.00', '0.00', '0.00', '0.00', '158400.00', '158400.00', '0.00', '0.00', '0.00', '0.00', '3338906.64', '3316406.64', '117128.00', '117128.00', '10980.75', '10980.75', '19325.90', '19325.90', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '29282.00', '29282.00', '0.00', '0.00', '73205.00', '73205.00', '0.00', '0.00', '0.00', '0.00', '6145.59', '6145.59', '256067.24', '256067.24', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, '2017', 'MSWD', 'Municipal Social Welfare Office', 'ERLINDA J. SABINO', '1306140.00', '1306140.00', '0.00', '0.00', '102000.00', '94000.00', '63000.00', '63000.00', '63000.00', '63000.00', '25000.00', '25000.00', '0.00', '0.00', '108845.00', '108845.00', '25000.00', '25000.00', '108845.00', '108845.00', '20000.00', '20000.00', '156736.80', '156736.80', '6000.00', '6000.00', '15150.00', '15150.00', '6000.00', '6000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18000.00', '18000.00', '0.00', '0.00', '2023716.80', '1997716.80', '96972.48', '96972.48', '8000.00', '8000.00', '0.00', '0.00', '700.00', '700.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '70000.00', '70000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4364.80', '4364.80', '430037.28', '430037.28', '0.00', '0.00', '35000.00', '35000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '250000.00', '250000.00', '0.00', '0.00', '35000.00'),
(11, '2017', 'MAO', 'Municipal Agriculturists Office', 'ZOSIMO G. ADVINCULA', '630252.00', '630252.00', '0.00', '0.00', '48000.00', '46000.00', '63000.00', '60800.00', '63000.00', '60800.00', '10000.00', '10000.00', '0.00', '0.00', '52521.00', '52521.00', '10000.00', '10000.00', '52521.00', '52521.00', '5000.00', '5000.00', '75630.24', '75630.24', '2400.00', '2400.00', '7050.00', '7050.00', '2400.00', '2400.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1021774.24', '1015374.24', '73000.00', '73000.00', '5000.00', '5000.00', '24000.00', '24000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '27000.00', '27000.00', '0.00', '0.00', '0.00', '0.00', '8784.00', '8784.00', '0.00', '0.00', '0.00', '0.00', '137784.00', '113784.00', '0.00', '0.00', '30000.00', '30000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '30000.00'),
(12, '2017', 'MEO', 'Municipal Engineering Office', 'DONATO S. ADVINCULA', '808200.00', '808200.00', '0.00', '0.00', '72000.00', '66000.00', '63000.00', '57750.00', '63000.00', '57750.00', '15000.00', '15000.00', '0.00', '0.00', '67350.00', '67350.00', '15000.00', '15000.00', '67350.00', '67350.00', '15000.00', '15000.00', '96984.00', '96984.00', '3600.00', '3600.00', '8850.00', '8850.00', '3600.00', '3600.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1298934.00', '1282434.00', '44000.00', '44000.00', '1000.00', '1000.00', '0.00', '0.00', '500.00', '500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '44000.00', '44000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '282.00', '282.00', '89782.00', '89782.00', '0.00', '0.00', '70000.00', '70000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '70000.00'),
(13, '2017', 'MBE', 'Municipal Business Enterprise', 'JAIME B. LAURON', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '80000.00', '80000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '80000.00', '80000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '375000.00', '0.00', '0.00', '50000.00', '50000.00', '0.00', '0.00', '15000.00', '15000.00', '0.00', '0.00', '0.00', '0.00', '200000.00', '200000.00', '50000.00'),
(14, '2017', 'General Services', 'General Services Office', 'Hon. Erwin C. Ocaña', '1277004.00', '1277004.00', '0.00', '0.00', '384000.00', '380000.00', '0.00', '0.00', '0.00', '0.00', '80000.00', '80000.00', '0.00', '0.00', '106417.00', '106417.00', '80000.00', '80000.00', '106417.00', '106417.00', '80000.00', '80000.00', '153240.48', '153240.48', '19200.00', '19200.00', '19200.00', '19200.00', '12770.04', '12770.04', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '2314248.52', '30000.00', '30000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25000.00', '25000.00', '150000.00', '150000.00', '180000.00', '180000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1955000.00', '1955000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '70000.00', '70000.00', '1500000.00', '1500000.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `aipgad`
--

CREATE TABLE `aipgad` (
  `Year` varchar(4) NOT NULL,
  `gadOffice_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gadOffice_mbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `iec_mtrls` decimal(20,2) NOT NULL DEFAULT '0.00',
  `iec_mtrlsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bida_cpBldg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bida_cpBldgbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cLrNcD` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cLrNcDbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_bloodstrips` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_bloodstripsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `hCcongress` decimal(20,2) NOT NULL DEFAULT '0.00',
  `hCcongressbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bloodService` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bloodServicebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cancer_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cancer_pbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cervical_cs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cervical_csbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_asrh` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_asrhbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capacity_CHV` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capacity_CHVbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `reorient_BNS` decimal(20,2) NOT NULL DEFAULT '0.00',
  `reorient_BNSbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `backyard_g` decimal(20,2) NOT NULL DEFAULT '0.00',
  `backyard_gbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `nutrition_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `nutrition_mbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `n_status` decimal(20,2) NOT NULL DEFAULT '0.00',
  `n_statusbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_safety` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_safetybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `subsidy_wfs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `subsidy_wfsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rollout_brgys` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rollout_brgysbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `transpo_vamc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `transpo_vamcbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `vamc_victims` decimal(20,2) NOT NULL DEFAULT '0.00',
  `vamc_victimsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_oSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_oSuppliesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `maint_wfs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `maint_wfsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `s_watchgroupVawc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `s_watchgroupVawcbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capDev_margin` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capDev_marginbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `citizen_p_lights` decimal(20,2) NOT NULL DEFAULT '0.00',
  `citizen_p_lightsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ids_solo_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ids_solo_pbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `spes_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `spes_pbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `scholarship_grant` decimal(20,2) NOT NULL DEFAULT '0.00',
  `scholarship_grantbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `als` decimal(20,2) NOT NULL DEFAULT '0.00',
  `alsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `livelihood_skills` decimal(20,2) NOT NULL DEFAULT '0.00',
  `livelihood_skillsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `womens_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `womens_mbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_week` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_weekbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `alay_lakad` decimal(20,2) NOT NULL DEFAULT '0.00',
  `alay_lakadbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cap_dev_MOVE` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cap_dev_MOVEbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `volunteer_pw` decimal(20,2) NOT NULL DEFAULT '0.00',
  `volunteer_pwbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `counceling_rooms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `counceling_roomsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `farmersFishfolks_day` decimal(20,2) NOT NULL DEFAULT '0.00',
  `farmersFishfolks_daybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `agriFish_training_farmers` decimal(20,2) NOT NULL DEFAULT '0.00',
  `agriFish_training_farmersbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugAwareness_rduct` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugAwareness_rductbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `logistics_4ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `logistics_4psbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `indi_crisis` decimal(20,2) NOT NULL DEFAULT '0.00',
  `indi_crisisbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_planning` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_planningbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `MOVE_mun_brgy_levels` decimal(20,2) NOT NULL DEFAULT '0.00',
  `MOVE_mun_brgy_levelsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `client_foc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `client_focbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aipgad`
--

INSERT INTO `aipgad` (`Year`, `gadOffice_m`, `gadOffice_mbal`, `iec_mtrls`, `iec_mtrlsbal`, `bida_cpBldg`, `bida_cpBldgbal`, `cLrNcD`, `cLrNcDbal`, `p_bloodstrips`, `p_bloodstripsbal`, `hCcongress`, `hCcongressbal`, `bloodService`, `bloodServicebal`, `cancer_p`, `cancer_pbal`, `cervical_cs`, `cervical_csbal`, `wfs_asrh`, `wfs_asrhbal`, `capacity_CHV`, `capacity_CHVbal`, `reorient_BNS`, `reorient_BNSbal`, `backyard_g`, `backyard_gbal`, `nutrition_m`, `nutrition_mbal`, `n_status`, `n_statusbal`, `p_safety`, `p_safetybal`, `subsidy_wfs`, `subsidy_wfsbal`, `rollout_brgys`, `rollout_brgysbal`, `transpo_vamc`, `transpo_vamcbal`, `vamc_victims`, `vamc_victimsbal`, `wfs_oSupplies`, `wfs_oSuppliesbal`, `maint_wfs`, `maint_wfsbal`, `s_watchgroupVawc`, `s_watchgroupVawcbal`, `capDev_margin`, `capDev_marginbal`, `citizen_p_lights`, `citizen_p_lightsbal`, `ids_solo_p`, `ids_solo_pbal`, `spes_p`, `spes_pbal`, `scholarship_grant`, `scholarship_grantbal`, `als`, `alsbal`, `livelihood_skills`, `livelihood_skillsbal`, `womens_m`, `womens_mbal`, `family_week`, `family_weekbal`, `alay_lakad`, `alay_lakadbal`, `cap_dev_MOVE`, `cap_dev_MOVEbal`, `volunteer_pw`, `volunteer_pwbal`, `counceling_rooms`, `counceling_roomsbal`, `farmersFishfolks_day`, `farmersFishfolks_daybal`, `agriFish_training_farmers`, `agriFish_training_farmersbal`, `drugAwareness_rduct`, `drugAwareness_rductbal`, `logistics_4ps`, `logistics_4psbal`, `indi_crisis`, `indi_crisisbal`, `family_planning`, `family_planningbal`, `MOVE_mun_brgy_levels`, `MOVE_mun_brgy_levelsbal`, `client_foc`, `client_focbal`, `total`, `total_balance`) VALUES
('2017', '80000.00', '80000.00', '52964.55', '52964.55', '400000.00', '400000.00', '40000.00', '40000.00', '20000.00', '20000.00', '10000.00', '10000.00', '100000.00', '100000.00', '15000.00', '15000.00', '50000.00', '50000.00', '100000.00', '100000.00', '50000.00', '50000.00', '5000.00', '5000.00', '5000.00', '5000.00', '10000.00', '10000.00', '5000.00', '5000.00', '90000.00', '90000.00', '168000.00', '168000.00', '30000.00', '30000.00', '30000.00', '30000.00', '40000.00', '40000.00', '40000.00', '40000.00', '50000.00', '50000.00', '30000.00', '30000.00', '50000.00', '50000.00', '350000.00', '350000.00', '30000.00', '30000.00', '200000.00', '200000.00', '300000.00', '300000.00', '100000.00', '100000.00', '35000.00', '35000.00', '35000.00', '35000.00', '35000.00', '35000.00', '35000.00', '35000.00', '5000.00', '5000.00', '192000.00', '192000.00', '60000.00', '60000.00', '50000.00', '50000.00', '50000.00', '50000.00', '100000.00', '100000.00', '100000.00', '100000.00', '100000.00', '100000.00', '0.00', '0.00', '5000.00', '5000.00', '50000.00', '50000.00', '3302964.55', '3302964.55');

-- --------------------------------------------------------

--
-- Table structure for table `aipiralcpc`
--

CREATE TABLE `aipiralcpc` (
  `yearm` varchar(4) NOT NULL,
  `engulayan` decimal(20,2) NOT NULL DEFAULT '0.00',
  `engulayanbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `teenpreg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `teenpregbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dbaseforchildren` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dbaseforchildrenbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pedslane` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pedslanebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `distfaid` decimal(20,2) NOT NULL DEFAULT '0.00',
  `distfaidbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugawareness` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugawarenessbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sportsequip` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sportsequipbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcOsupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcOsuppliesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcregmeet` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcregmeetbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `propwastedisp` decimal(20,2) NOT NULL DEFAULT '0.00',
  `propwastedispbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycare` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycarebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `childrenslaw` decimal(20,2) NOT NULL DEFAULT '0.00',
  `childrenslawbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycareworkersday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycareworkersdaybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycareworkerstraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycareworkerstrainingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassistcicl` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassistciclbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pbdiversions` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pbdiversionsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aipiralcpc`
--

INSERT INTO `aipiralcpc` (`yearm`, `engulayan`, `engulayanbal`, `teenpreg`, `teenpregbal`, `dbaseforchildren`, `dbaseforchildrenbal`, `pedslane`, `pedslanebal`, `distfaid`, `distfaidbal`, `drugawareness`, `drugawarenessbal`, `sportsequip`, `sportsequipbal`, `lcpcOsupplies`, `lcpcOsuppliesbal`, `lcpcregmeet`, `lcpcregmeetbal`, `propwastedisp`, `propwastedispbal`, `daycare`, `daycarebal`, `childrenslaw`, `childrenslawbal`, `daycareworkersday`, `daycareworkersdaybal`, `daycareworkerstraining`, `daycareworkerstrainingbal`, `fassistcicl`, `fassistciclbal`, `pbdiversions`, `pbdiversionsbal`, `total`, `total_balance`) VALUES
('2017', '75000.00', '75000.00', '15000.00', '15000.00', '100000.00', '100000.00', '20000.00', '-480.00', '75000.00', '75000.00', '20000.00', '20000.00', '30000.00', '30000.00', '20000.00', '20000.00', '30000.00', '30000.00', '60000.00', '60000.00', '52000.00', '52000.00', '5000.00', '5000.00', '20000.00', '20000.00', '32967.91', '32967.91', '38000.00', '38000.00', '15000.00', '15000.00', '607967.91', '587487.91');

-- --------------------------------------------------------

--
-- Table structure for table `aipmdr`
--

CREATE TABLE `aipmdr` (
  `yearm` varchar(4) NOT NULL,
  `opCen` decimal(20,2) NOT NULL DEFAULT '0.00',
  `opCenbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSuppliesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `inventoryRiskAssess` decimal(20,2) NOT NULL DEFAULT '0.00',
  `inventoryRiskAssessbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `canalswaterways` decimal(20,2) NOT NULL DEFAULT '0.00',
  `canalswaterwaysbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `researchstudy` decimal(20,2) NOT NULL DEFAULT '0.00',
  `researchstudybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrcca` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrccabal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingdrrcaa` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingdrrcaabal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `contingency` decimal(20,2) NOT NULL DEFAULT '0.00',
  `contingencybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `warningforecasting` decimal(20,2) NOT NULL DEFAULT '0.00',
  `warningforecastingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `radio` decimal(20,2) NOT NULL DEFAULT '0.00',
  `radiobal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `phonemaintenance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `phonemaintenancebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueeqpts` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueeqptsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `evacsupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `evacsuppliesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `stockpilingfoods` decimal(20,2) NOT NULL DEFAULT '0.00',
  `stockpilingfoodsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrmonitoring` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrmonitoringbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gobags` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gobagsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fuelslub` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fuelslubbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueteams` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueteamsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gendersens` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gendersensbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `medical` decimal(20,2) NOT NULL DEFAULT '0.00',
  `medicalbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `miscexpenses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `miscexpensesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `policevisibility` decimal(20,2) NOT NULL DEFAULT '0.00',
  `policevisibilitybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `datacollection` decimal(20,2) NOT NULL DEFAULT '0.00',
  `datacollectionbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `updatewarningbulletins` decimal(20,2) NOT NULL DEFAULT '0.00',
  `updatewarningbulletinsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dana` decimal(20,2) NOT NULL DEFAULT '0.00',
  `danabal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `damageinfra` decimal(20,2) NOT NULL DEFAULT '0.00',
  `damageinfrabal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `schoolrehab` decimal(20,2) NOT NULL DEFAULT '0.00',
  `schoolrehabbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lowcosthousing` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lowcosthousingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sustainablelivelihood` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sustainablelivelihoodbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `livelihoodtraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `livelihoodtrainingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `financialassistance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `financialassistancebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `eastersunday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `eastersundaybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `earthday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `earthdaybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `johnthebaptistday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `johnthebaptistdaybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yolandamemorial` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yolandamemorialbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `uniformresponders` decimal(20,2) NOT NULL DEFAULT '0.00',
  `uniformrespondersbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aipmdr`
--

INSERT INTO `aipmdr` (`yearm`, `opCen`, `opCenbal`, `officeSupplies`, `officeSuppliesbal`, `inventoryRiskAssess`, `inventoryRiskAssessbal`, `canalswaterways`, `canalswaterwaysbal`, `researchstudy`, `researchstudybal`, `drrcca`, `drrccabal`, `trainingdrrcaa`, `trainingdrrcaabal`, `contingency`, `contingencybal`, `warningforecasting`, `warningforecastingbal`, `radio`, `radiobal`, `phonemaintenance`, `phonemaintenancebal`, `rescueeqpts`, `rescueeqptsbal`, `evacsupplies`, `evacsuppliesbal`, `stockpilingfoods`, `stockpilingfoodsbal`, `drrmonitoring`, `drrmonitoringbal`, `gobags`, `gobagsbal`, `fuelslub`, `fuelslubbal`, `rescueteams`, `rescueteamsbal`, `gendersens`, `gendersensbal`, `medical`, `medicalbal`, `miscexpenses`, `miscexpensesbal`, `policevisibility`, `policevisibilitybal`, `datacollection`, `datacollectionbal`, `updatewarningbulletins`, `updatewarningbulletinsbal`, `dana`, `danabal`, `damageinfra`, `damageinfrabal`, `schoolrehab`, `schoolrehabbal`, `lowcosthousing`, `lowcosthousingbal`, `sustainablelivelihood`, `sustainablelivelihoodbal`, `livelihoodtraining`, `livelihoodtrainingbal`, `financialassistance`, `financialassistancebal`, `eastersunday`, `eastersundaybal`, `earthday`, `earthdaybal`, `johnthebaptistday`, `johnthebaptistdaybal`, `yolandamemorial`, `yolandamemorialbal`, `uniformresponders`, `uniformrespondersbal`, `total`, `total_balance`) VALUES
('2017', '100000.00', '100000.00', '100000.00', '100000.00', '10000.00', '10000.00', '1000000.00', '1000000.00', '30000.00', '30000.00', '58000.00', '58000.00', '200000.00', '200000.00', '52082.69', '52082.69', '100000.00', '100000.00', '50000.00', '50000.00', '42000.00', '42000.00', '100000.00', '100000.00', '20000.00', '20000.00', '100000.00', '100000.00', '5000.00', '5000.00', '50000.00', '50000.00', '135880.00', '135880.00', '50000.00', '50000.00', '150000.87', '150000.87', '75000.00', '75000.00', '400000.00', '400000.00', '100000.00', '100000.00', '50000.00', '50000.00', '450001.00', '450001.00', '50000.00', '50000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50000.00', '50000.00', '50000.00', '50000.00', '10000.00', '10000.00', '10000.00', '10000.00', '10000.00', '10000.00', '50000.00', '50000.00', '100000.00', '100000.00', '3757964.56', '3757964.56');

-- --------------------------------------------------------

--
-- Table structure for table `aipnoneoffice`
--

CREATE TABLE `aipnoneoffice` (
  `Year` varchar(4) NOT NULL,
  `aid_barangay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aid_barangaybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `death_indemnity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `death_indemnitybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fa_Kbrgy` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fa_Kbrgybal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aids` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aidsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `loyalty_award` decimal(20,2) NOT NULL DEFAULT '0.00',
  `loyalty_awardbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `csmonth_celeb` decimal(20,2) NOT NULL DEFAULT '0.00',
  `csmonth_celebbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_meds` decimal(20,2) DEFAULT '0.00',
  `p_medsbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealthbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthfund` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthfundbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `masamasid` decimal(20,2) DEFAULT '0.00',
  `masamasidbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `legal_services` decimal(20,2) NOT NULL DEFAULT '0.00',
  `legal_servicesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `brgy_road` decimal(20,2) NOT NULL DEFAULT '0.00',
  `brgy_roadbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_bldg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_bldgbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_vehicle` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_vehiclebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aipnoneoffice`
--

INSERT INTO `aipnoneoffice` (`Year`, `aid_barangay`, `aid_barangaybal`, `death_indemnity`, `death_indemnitybal`, `fa_Kbrgy`, `fa_Kbrgybal`, `aids`, `aidsbal`, `loyalty_award`, `loyalty_awardbal`, `csmonth_celeb`, `csmonth_celebbal`, `p_meds`, `p_medsbal`, `philhealth`, `philhealthbal`, `healthfund`, `healthfundbal`, `masamasid`, `masamasidbal`, `legal_services`, `legal_servicesbal`, `brgy_road`, `brgy_roadbal`, `mun_bldg`, `mun_bldgbal`, `mun_vehicle`, `mun_vehiclebal`, `total`, `total_balance`) VALUES
('2017', '15000.00', '15000.00', '20000.00', '20000.00', '10000.00', '10000.00', '10000.00', '10000.00', '100000.00', '100000.00', '300000.00', '300000.00', '1000000.00', '1000000.00', '150000.00', '150000.00', '35000.00', '35000.00', '60000.00', '60000.00', '200000.00', '200000.00', '300000.00', '300000.00', '500000.00', '500000.00', '300000.00', '300000.00', '3000000.00', '3000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `aippwd`
--

CREATE TABLE `aippwd` (
  `yearm` varchar(4) NOT NULL,
  `honorarium` decimal(20,2) NOT NULL DEFAULT '0.00',
  `honorariumbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `npdr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `npdrbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maintbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `idsregistration` decimal(20,2) NOT NULL DEFAULT '0.00',
  `idsregistrationbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `skillstraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `skillstrainingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingallowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingallowancebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassist` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassistbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrtraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrtrainingbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendasses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendassesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `aippwd`
--

INSERT INTO `aippwd` (`yearm`, `honorarium`, `honorariumbal`, `npdr`, `npdrbal`, `motor_vehicle_maint`, `motor_vehicle_maintbal`, `idsregistration`, `idsregistrationbal`, `skillstraining`, `skillstrainingbal`, `trainingallowance`, `trainingallowancebal`, `fassist`, `fassistbal`, `drrtraining`, `drrtrainingbal`, `yearendasses`, `yearendassesbal`, `total`, `total_balance`) VALUES
('2017', '24000.00', '22000.00', '40000.00', '40000.00', '30000.00', '30000.00', '20000.00', '20000.00', '91000.00', '91000.00', '30000.00', '30000.00', '50000.00', '50000.00', '25000.00', '25000.00', '25296.45', '25296.45', '335296.45', '333296.45');

-- --------------------------------------------------------

--
-- Table structure for table `aipsc`
--

CREATE TABLE `aipsc` (
  `yearm` varchar(4) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `tevbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `documentation` decimal(20,2) NOT NULL DEFAULT '0.00',
  `documentationbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `filipinoweek` decimal(20,2) NOT NULL DEFAULT '0.00',
  `filipinoweekbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthyactivities` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthyactivitiesbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `periodicexercise` decimal(20,2) NOT NULL DEFAULT '0.00',
  `periodicexercisebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `visitslgus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `visitslgusbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `orgeffectiviness` decimal(20,2) NOT NULL DEFAULT '0.00',
  `orgeffectivinessbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_maintbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `oplan_eval` decimal(20,2) NOT NULL DEFAULT '0.00',
  `oplan_evalbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendperformance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendperformancebal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ophelpdesks` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ophelpdesksbal` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aipsc`
--

INSERT INTO `aipsc` (`yearm`, `tev`, `tevbal`, `documentation`, `documentationbal`, `filipinoweek`, `filipinoweekbal`, `healthyactivities`, `healthyactivitiesbal`, `periodicexercise`, `periodicexercisebal`, `visitslgus`, `visitslgusbal`, `orgeffectiviness`, `orgeffectivinessbal`, `office_maint`, `office_maintbal`, `oplan_eval`, `oplan_evalbal`, `yearendperformance`, `yearendperformancebal`, `ophelpdesks`, `ophelpdesksbal`, `total`, `total_balance`) VALUES
('2017', '22000.00', '-9240.13', '30000.00', '30000.00', '35000.00', '35000.00', '32500.00', '32500.00', '18796.45', '18796.45', '132000.00', '132000.00', '6000.00', '6000.00', '19000.00', '19000.00', '5000.00', '30000.00', '5000.00', '0.00', '30000.00', '0.00', '335296.45', '294056.32');

-- --------------------------------------------------------

--
-- Table structure for table `budget_year`
--

CREATE TABLE `budget_year` (
  `id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget_year`
--

INSERT INTO `budget_year` (`id`, `year`) VALUES
(1, '2016'),
(2, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(2) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `coMMO_continuing` decimal(20,2) NOT NULL,
  `coSB_continuing` decimal(20,2) NOT NULL,
  `mooeMMO_training_continuing` decimal(20,2) NOT NULL,
  `mooeMMO_tev_continuing` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `total`, `coMMO_continuing`, `coSB_continuing`, `mooeMMO_training_continuing`, `mooeMMO_tev_continuing`) VALUES
('2017', '07', '31', '07-001-17', 'as', '', '1234.00', '1234.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `cont_program`
--

CREATE TABLE `cont_program` (
  `id` int(11) NOT NULL,
  `thead` varchar(40) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `name` varchar(40) NOT NULL,
  `year` varchar(4) NOT NULL,
  `allotment` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cont_program`
--

INSERT INTO `cont_program` (`id`, `thead`, `dept`, `name`, `year`, `allotment`, `balance`) VALUES
(1, 'coMMO_continuing', 'MMO', 'Capital Outlay', '2017', '794390.85', '793156.85'),
(2, 'coSB_continuing', 'SB', 'Capital Outlay', '2017', '150000.00', '0.00'),
(3, 'mooeMMO_training_continuing', 'MMO', 'Trainings and Seminars', '2017', '1283728.00', '0.00'),
(4, 'mooeMMO_tev_continuing', 'MMO', 'Traveling Expenses', '2017', '1283728.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `gad`
--

CREATE TABLE `gad` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `gadOffice_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `iec_mtrls` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bida_cpBldg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cLrNcD` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_bloodstrips` decimal(20,2) NOT NULL DEFAULT '0.00',
  `hCcongress` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bloodService` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cancer_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cervical_cs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_asrh` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capacity_CHV` decimal(20,2) NOT NULL DEFAULT '0.00',
  `reorient_BNS` decimal(20,2) NOT NULL DEFAULT '0.00',
  `backyard_g` decimal(20,2) NOT NULL DEFAULT '0.00',
  `nutrition_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `n_status` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_safety` decimal(20,2) NOT NULL DEFAULT '0.00',
  `subsidy_wfs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rollout_brgys` decimal(20,2) NOT NULL DEFAULT '0.00',
  `transpo_vamc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `vamc_victims` decimal(20,2) NOT NULL DEFAULT '0.00',
  `wfs_oSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `maint_wfs` decimal(20,2) NOT NULL DEFAULT '0.00',
  `s_watchgroupVawc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `capDev_margin` decimal(20,2) NOT NULL DEFAULT '0.00',
  `citizen_p_lights` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ids_solo_p` decimal(20,2) DEFAULT '0.00',
  `spes_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `scholarship_grant` decimal(20,2) NOT NULL DEFAULT '0.00',
  `als` decimal(20,2) DEFAULT '0.00',
  `livelihood_skills` decimal(20,2) NOT NULL DEFAULT '0.00',
  `womens_m` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_week` decimal(20,2) DEFAULT '0.00',
  `alay_lakad` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cap_dev_MOVE` decimal(20,2) NOT NULL DEFAULT '0.00',
  `volunteer_pw` decimal(20,2) NOT NULL DEFAULT '0.00',
  `counceling_rooms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `farmersFishfolks_day` decimal(20,2) NOT NULL DEFAULT '0.00',
  `agriFish_training_farmers` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugAwareness_rduct` decimal(20,2) NOT NULL DEFAULT '0.00',
  `logistics_4ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `indi_crisis` decimal(20,2) NOT NULL DEFAULT '0.00',
  `family_planning` decimal(20,2) NOT NULL DEFAULT '0.00',
  `MOVE_mun_brgy_levels` decimal(20,2) NOT NULL DEFAULT '0.00',
  `client_foc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gad2017`
--

CREATE TABLE `gad2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `gadOffice_m_bal` decimal(20,2) NOT NULL,
  `gadOffice_m` decimal(20,2) NOT NULL,
  `iec_mtrls_bal` decimal(20,2) NOT NULL,
  `iec_mtrls` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gad2017`
--

INSERT INTO `gad2017` (`year`, `signatory`, `total`, `gadOffice_m_bal`, `gadOffice_m`, `iec_mtrls_bal`, `iec_mtrls`) VALUES
('2017', 'Erwin C. Ocaña', '201000.00', '0.00', '200000.00', '0.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `gad_list_2016`
--

CREATE TABLE `gad_list_2016` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gad_list_2016`
--

INSERT INTO `gad_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'gadOffice_m', 'Equipping/supplies/maintaining GAD office', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `gad_list_2017`
--

CREATE TABLE `gad_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gad_list_2017`
--

INSERT INTO `gad_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'gadOffice_m', 'Equipping/supplies/maintaining GAD office', '2017'),
(2, 'iec_mtrls', 'Symposium/Production of IEC Materials', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `gsco`
--

CREATE TABLE `gsco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gsmooe`
--

CREATE TABLE `gsmooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `water` decimal(20,2) NOT NULL DEFAULT '0.00',
  `electricity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gasoline` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `iralcpc`
--

CREATE TABLE `iralcpc` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `engulayan` decimal(20,2) NOT NULL DEFAULT '0.00',
  `teenpreg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dbaseforchildren` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pedslane` decimal(20,2) NOT NULL DEFAULT '0.00',
  `distfaid` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drugawareness` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sportsequip` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcOsupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lcpcregmeet` decimal(20,2) NOT NULL DEFAULT '0.00',
  `propwastedisp` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycare` decimal(20,2) NOT NULL DEFAULT '0.00',
  `childrenslaw` decimal(20,2) NOT NULL DEFAULT '0.00',
  `daycareworkersday` decimal(20,2) DEFAULT '0.00',
  `daycareworkerstraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassistcicl` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pbdiversions` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iralcpc`
--

INSERT INTO `iralcpc` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `total`, `engulayan`, `teenpreg`, `dbaseforchildren`, `pedslane`, `distfaid`, `drugawareness`, `sportsequip`, `lcpcOsupplies`, `lcpcregmeet`, `propwastedisp`, `daycare`, `childrenslaw`, `daycareworkersday`, `daycareworkerstraining`, `fassistcicl`, `pbdiversions`) VALUES
('2017', '01', '23', '01-117-17', 'E. Laure et AL.', 'Pedestrian Lane', '2880.00', '0.00', '0.00', '0.00', '2880.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '02', '06', '02-040-17', 'E. Laure et AL.', 'Pedestrian Lanes', '3840.00', '0.00', '0.00', '0.00', '3840.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '02', '21', '02-159-17', 'E. Laure et AL.', 'Pedestrian Lane', '3520.00', '0.00', '0.00', '0.00', '3520.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '03', '17', '03-017-17', 'E. Laure et AL.', 'Pedestrian Lanes', '3520.00', '0.00', '0.00', '0.00', '3520.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '03', '06', '03-028-17', 'E. Laure', 'Pedestrian Lane', '2880.00', '0.00', '0.00', '0.00', '2880.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '04', '03', '04-008-17', 'E. Laure et AL.', 'Pedestrian Lane', '3840.00', '0.00', '0.00', '0.00', '3840.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `lcpc2017`
--

CREATE TABLE `lcpc2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `engulayan_bal` decimal(20,2) NOT NULL,
  `engulayan` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lcpc2017`
--

INSERT INTO `lcpc2017` (`year`, `signatory`, `total`, `engulayan_bal`, `engulayan`) VALUES
('2017', 'Erwin C. Ocaña', '100000.00', '0.00', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `lcpc_list_2016`
--

CREATE TABLE `lcpc_list_2016` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lcpc_list_2016`
--

INSERT INTO `lcpc_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'engulayan', 'Enhanced Gulayan sa Paaralan', '2016'),
(2, 'teenpreg', 'Teenage Pregnancy Awareness / Prevention', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `lcpc_list_2017`
--

CREATE TABLE `lcpc_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lcpc_list_2017`
--

INSERT INTO `lcpc_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'engulayan', 'Enhanced Gulayan sa Paaralan', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `lcrco`
--

CREATE TABLE `lcrco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lcrmooe`
--

CREATE TABLE `lcrmooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `eventDate` varchar(10) NOT NULL,
  `eventTime` varchar(10) NOT NULL,
  `account_logged` varchar(20) NOT NULL,
  `transaction` varchar(300) NOT NULL,
  `ip_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`eventDate`, `eventTime`, `account_logged`, `transaction`, `ip_address`) VALUES
('2017/02/28', '12:34:57', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/02/28', '01:58:48', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/02/28', '01:58:59', 'cloudsky21', 'Mark Lindon Parone Logged in.', '127.0.0.1'),
('2017/02/28', '01:59:33', 'cloudsky21', 'Mark Lindon Parone logged out', '127.0.0.1'),
('2017/02/28', '01:59:40', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/02/28', '07:36:48', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/01', '07:49:11', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/02', '04:03:53', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/02', '04:03:54', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/03', '08:15:33', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/06', '09:24:14', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/06', '05:52:51', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/06', '05:58:26', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/06', '06:38:04', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/07', '09:29:39', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/08', '07:29:13', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/08', '05:56:13', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/09', '09:29:27', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/11', '04:44:19', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/13', '07:56:07', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/14', '10:31:38', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '08:01:25', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '09:52:04', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '09:59:54', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '10:00:09', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '12:04:51', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '01:05:52', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '01:05:56', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '01:57:10', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '05:19:26', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '05:32:20', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '05:32:53', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '05:37:41', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '05:37:45', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '05:39:35', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '05:39:38', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/15', '05:39:53', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/15', '06:50:02', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/17', '10:41:01', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/17', '04:26:20', 'cloudsky21', 'MarkKeresaki Logged in.', '192.168.0.199'),
('2017/03/17', '04:28:22', 'cloudsky21', 'MarkKeresaki logged out', '192.168.0.199'),
('2017/03/17', '04:30:14', 'cloudsky21', 'MarkKeresaki Logged in.', '192.168.0.199'),
('2017/03/17', '04:35:38', 'cloudsky21', 'MarkKeresaki logged out', '192.168.0.199'),
('2017/03/17', '04:35:38', 'cloudsky21', 'MarkKeresaki logged out', '192.168.0.199'),
('2017/03/20', '10:10:51', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/20', '10:11:16', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/20', '10:29:00', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/20', '10:32:53', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/20', '12:58:29', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/20', '12:58:33', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/20', '12:58:39', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/21', '09:02:12', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/21', '09:02:16', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/21', '09:05:24', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/21', '02:56:42', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/21', '03:29:05', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/21', '03:39:33', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/21', '03:40:29', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/22', '01:00:00', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/22', '01:26:28', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/23', '03:15:38', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/23', '04:46:44', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/23', '05:15:57', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/23', '07:39:18', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/24', '04:32:23', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/27', '10:26:31', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/27', '04:48:00', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/03/27', '04:48:05', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/28', '12:53:46', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/31', '09:17:43', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/31', '01:00:05', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/03/31', '04:46:22', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/12', '10:39:20', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/17', '10:18:49', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/18', '12:03:24', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/19', '01:03:23', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/20', '09:55:09', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/20', '05:46:55', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/20', '05:47:44', '', ' logged out', ''),
('2017/04/20', '05:48:32', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/20', '05:48:34', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/20', '05:51:13', '', ' logged out', ''),
('2017/04/20', '05:51:20', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/20', '05:51:23', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/20', '05:51:44', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/20', '05:52:03', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/21', '09:27:27', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/21', '02:42:52', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/21', '02:44:20', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/21', '02:51:23', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/21', '02:58:49', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/21', '03:00:30', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/21', '03:00:36', 'guest', 'Guest Logged in.', '127.0.0.1'),
('2017/04/24', '09:00:40', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '09:12:37', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '09:29:41', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '11:18:23', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '11:19:43', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '12:50:52', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '12:50:58', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '12:51:40', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '12:51:44', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '12:53:11', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '12:53:16', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '12:53:26', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '12:53:30', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:08:33', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:08:43', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:10:00', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:12:56', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:13:00', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:22:26', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:22:32', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:23:26', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:25:37', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:27:36', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:29:26', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:29:41', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:29:46', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:29:59', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:32:07', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:32:13', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:32:31', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:33:17', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:33:35', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:33:47', '', ' logged out', ''),
('2017/04/24', '04:35:45', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:36:08', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:36:20', '', ' logged out', ''),
('2017/04/24', '04:36:58', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:37:49', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:45:24', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:45:36', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '04:52:51', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '04:52:56', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:53:51', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:53:56', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:55:26', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:55:31', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:56:56', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:57:01', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '04:58:13', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '04:58:16', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '05:02:14', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '05:02:22', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '05:02:25', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '05:02:29', 'root', 'Administrator Account Logged in.', '127.0.0.1'),
('2017/04/24', '05:05:43', 'root', 'Administrator Account logged out', '127.0.0.1'),
('2017/04/24', '05:06:54', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/04/24', '05:07:03', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/04/24', '05:07:19', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '05:13:40', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '05:34:44', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/04/24', '06:04:23', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/04/24', '06:04:31', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:06:12', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:06:26', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:08:38', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:10:56', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:11:57', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:12:05', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:12:46', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:15:29', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:17:22', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:17:31', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:32:51', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/24', '06:32:59', 'cloudsky21', 'MarkKeresaki Logged in.', '127.0.0.1'),
('2017/04/24', '06:39:09', 'cloudsky21', 'MarkKeresaki logged out', '127.0.0.1'),
('2017/04/25', '12:49:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/04/25', '12:50:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/04/25', '12:50:26', 'cloudsky21', 'Mark Lindon Logged in.', '127.0.0.1'),
('2017/04/25', '12:51:26', 'cloudsky21', 'Mark Lindon logged out', '127.0.0.1'),
('2017/04/25', '12:51:33', 'cloudsky21', 'Mark Lindon Logged in.', '127.0.0.1'),
('2017/04/25', '02:35:00', 'cloudsky21', 'Mark Lindon logged out', '127.0.0.1'),
('2017/04/25', '02:35:09', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/04/25', '06:45:34', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/04/26', '06:36:30', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/04/26', '05:53:46', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/04/28', '10:15:08', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/02', '09:51:01', '', ' logged out', ''),
('2017/05/02', '09:51:25', '', ' logged out', ''),
('2017/05/02', '09:51:39', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/02', '05:05:24', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '10:52:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '12:55:45', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '12:56:22', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '12:56:47', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '12:57:29', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '12:57:32', '', ' logged out', ''),
('2017/05/03', '12:57:41', 'cloudsky21', 'Mark Lindon Logged in.', '127.0.0.1'),
('2017/05/03', '12:58:13', 'cloudsky21', 'Mark Lindon logged out', '127.0.0.1'),
('2017/05/03', '12:58:18', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '12:59:01', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '12:59:07', 'admin', 'Admin Logged in.', '127.0.0.1'),
('2017/05/03', '12:59:33', 'admin', 'Admin logged out', '127.0.0.1'),
('2017/05/03', '12:59:47', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '01:02:39', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '01:04:52', '', ' logged out', ''),
('2017/05/03', '01:05:04', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '01:05:35', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/03', '01:08:10', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '01:08:16', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/03', '05:10:53', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/04', '06:11:31', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/04', '06:11:38', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/04', '06:21:02', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '12:44:02', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '12:55:03', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '12:55:13', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '12:56:48', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '12:56:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:02:18', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:02:19', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:02:24', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:02:24', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:03:27', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:03:29', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:03:29', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:04:31', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:04:31', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:04:33', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:04:34', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:05:47', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:08:15', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:08:17', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:08:17', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:14:18', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:15:03', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:15:03', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:16:29', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:16:40', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:16:43', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:16:43', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:17:42', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:19:21', '', ' logged out', ''),
('2017/05/05', '01:19:26', '', ' logged out', ''),
('2017/05/05', '01:20:12', '', ' logged out', ''),
('2017/05/05', '01:20:17', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:20:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:20:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:22:49', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:25:51', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:25:57', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:26:17', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '01:27:04', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '01:33:54', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '04:16:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/05', '04:17:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/05', '05:02:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/12', '12:28:50', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/12', '05:45:24', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/15', '12:49:13', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/15', '06:20:33', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/17', '12:03:30', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/17', '05:21:51', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/18', '01:14:22', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/18', '05:40:56', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/18', '05:41:50', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/18', '05:44:15', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/19', '08:58:18', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/19', '10:59:58', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/19', '11:00:03', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/19', '11:00:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/19', '12:10:36', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/19', '12:37:57', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/19', '12:50:30', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/22', '09:43:24', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/22', '05:50:24', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/24', '05:06:41', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/24', '06:33:37', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/25', '10:19:28', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/25', '05:23:49', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/26', '05:44:21', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/26', '05:52:51', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/29', '10:38:12', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/29', '10:40:56', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/29', '02:21:52', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/29', '04:59:10', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/31', '04:49:56', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/31', '04:50:02', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/31', '05:01:44', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/31', '05:14:40', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/05/31', '05:14:57', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/05/31', '05:15:12', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/06/01', '04:43:10', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/06/01', '04:43:16', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/06/02', '11:28:46', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/06/02', '11:32:30', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/06/05', '07:58:29', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/06/05', '08:33:22', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/04', '03:21:53', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/04', '03:22:17', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/04', '03:23:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/04', '03:23:44', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/07', '10:32:25', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/07', '10:44:23', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/07', '04:51:45', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/07', '05:02:20', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/12', '11:43:06', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/12', '01:30:40', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/13', '10:31:19', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/14', '09:30:14', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/14', '10:26:38', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/14', '10:27:08', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/14', '10:27:11', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/14', '11:36:04', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/14', '12:17:06', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/14', '12:49:09', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/17', '01:30:42', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/17', '01:38:26', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/17', '01:38:47', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/17', '03:29:47', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/17', '04:00:26', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/17', '06:05:35', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/17', '06:14:27', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/17', '06:16:08', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/18', '11:48:14', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/18', '06:50:17', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/19', '12:31:56', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/19', '12:43:39', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/19', '12:45:35', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/19', '12:46:37', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/19', '04:01:43', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/19', '05:17:04', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/20', '11:12:15', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/20', '06:26:02', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/21', '12:36:00', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/21', '03:12:58', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/21', '03:20:28', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/24', '04:27:15', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/24', '05:24:33', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/25', '07:44:18', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/25', '07:47:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/25', '07:47:36', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/25', '08:14:20', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/25', '08:20:35', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/25', '08:21:20', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/25', '08:44:29', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/25', '08:44:36', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/25', '05:09:08', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/26', '01:14:18', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/26', '01:47:35', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/26', '03:03:45', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/26', '05:06:19', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/27', '10:09:44', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/27', '10:17:19', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/27', '10:22:57', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/27', '06:25:42', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/07/28', '01:48:06', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/31', '11:37:46', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/07/31', '06:30:59', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/01', '11:17:13', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/01', '11:17:17', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/01', '11:24:13', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/01', '05:24:25', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/01', '05:45:46', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/02', '09:54:01', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/02', '06:17:39', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/03', '05:01:48', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/03', '05:05:31', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/04', '08:03:40', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/04', '05:40:24', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/06', '11:34:05', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/07', '06:40:06', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/08', '05:24:02', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/08', '07:04:39', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/09', '04:25:45', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/09', '05:38:12', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/09', '05:38:29', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/09', '07:29:10', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/10', '11:24:35', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/10', '07:06:17', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/11', '08:24:04', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/11', '05:53:11', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/14', '12:26:01', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/14', '07:29:31', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/15', '11:17:47', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/15', '05:16:59', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/15', '05:43:36', 'root', 'Administrator logged out', '127.0.0.1'),
('2017/08/16', '05:15:46', 'root', 'Administrator Logged in.', '127.0.0.1'),
('2017/08/16', '05:17:35', 'root', 'Administrator logged out', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `maccoco`
--

CREATE TABLE `maccoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maccomooe`
--

CREATE TABLE `maccomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `auditing_services` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maoco`
--

CREATE TABLE `maoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maomooe`
--

CREATE TABLE `maomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone_telegraph` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_equip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `massoco`
--

CREATE TABLE `massoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `massomooe`
--

CREATE TABLE `massomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_equip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mbeco`
--

CREATE TABLE `mbeco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mbemooe`
--

CREATE TABLE `mbemooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `water` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `Slaughterhouse` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mboco`
--

CREATE TABLE `mboco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mbomooe`
--

CREATE TABLE `mbomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone_telegraph` decimal(20,2) NOT NULL,
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mbomooe`
--

INSERT INTO `mbomooe` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `tev`, `training`, `telephone_telegraph`, `officeSupplies`, `others_maint`, `total`) VALUES
('2017', '08', '11', '08-001-17', 'MARK', 'tev', '1000.00', '500.00', '0.00', '0.00', '0.00', '1500.00');

-- --------------------------------------------------------

--
-- Table structure for table `mdr`
--

CREATE TABLE `mdr` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `opCen` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `inventoryRiskAssess` decimal(20,2) NOT NULL DEFAULT '0.00',
  `canalswaterways` decimal(20,2) NOT NULL DEFAULT '0.00',
  `researchstudy` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrcca` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingdrrcaa` decimal(20,2) NOT NULL DEFAULT '0.00',
  `contingency` decimal(20,2) NOT NULL DEFAULT '0.00',
  `warningforecasting` decimal(20,2) NOT NULL DEFAULT '0.00',
  `radio` decimal(20,2) NOT NULL DEFAULT '0.00',
  `phonemaintenance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueeqpts` decimal(20,2) NOT NULL DEFAULT '0.00',
  `evacsupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `stockpilingfoods` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrmonitoring` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gobags` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fuelslub` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rescueteams` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gendersens` decimal(20,2) NOT NULL DEFAULT '0.00',
  `medical` decimal(20,2) NOT NULL DEFAULT '0.00',
  `miscexpenses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `policevisibility` decimal(20,2) NOT NULL DEFAULT '0.00',
  `datacollection` decimal(20,2) NOT NULL DEFAULT '0.00',
  `updatewarningbulletins` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dana` decimal(20,2) NOT NULL DEFAULT '0.00',
  `damageinfra` decimal(20,2) NOT NULL DEFAULT '0.00',
  `schoolrehab` decimal(20,2) NOT NULL DEFAULT '0.00',
  `lowcosthousing` decimal(20,2) NOT NULL DEFAULT '0.00',
  `sustainablelivelihood` decimal(20,2) NOT NULL DEFAULT '0.00',
  `livelihoodtraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `financialassistance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `eastersunday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `earthday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `johnthebaptistday` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yolandamemorial` decimal(20,2) NOT NULL DEFAULT '0.00',
  `uniformresponders` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mdr2017`
--

CREATE TABLE `mdr2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `uniformRspond_bal` decimal(20,2) NOT NULL,
  `uniformRspond` decimal(20,2) NOT NULL,
  `yolandaMemoAct_bal` decimal(20,2) NOT NULL,
  `yolandaMemoAct` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mdr2017`
--

INSERT INTO `mdr2017` (`year`, `signatory`, `total`, `uniformRspond_bal`, `uniformRspond`, `yolandaMemoAct_bal`, `yolandaMemoAct`) VALUES
('2017', 'Erwin C. Ocaña', '150000.00', '0.00', '100000.00', '0.00', '50000.00');

-- --------------------------------------------------------

--
-- Table structure for table `mdr_list_2016`
--

CREATE TABLE `mdr_list_2016` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mdr_list_2016`
--

INSERT INTO `mdr_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'uniformRspond', 'Uniform of Responders', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `mdr_list_2017`
--

CREATE TABLE `mdr_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mdr_list_2017`
--

INSERT INTO `mdr_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'uniformRspond', 'Uniform of Responders', '2017'),
(3, 'yolandaMemoAct', 'Yolanda memorial Activity', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `meoco`
--

CREATE TABLE `meoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meomooe`
--

CREATE TABLE `meomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mhoco`
--

CREATE TABLE `mhoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mhomooe`
--

CREATE TABLE `mhomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone_telegraph` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mmoco`
--

CREATE TABLE `mmoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mmoco`
--

INSERT INTO `mmoco` (`yearm`, `month`, `day`, `alobs`, `claimant`, `capital_outlay`, `total`) VALUES
('2017', '01', '24', '01-137-17', 'LJPM BUILDERS &amp; CONST. SUPPLY', '100000.00', '100000.00'),
('2017', '02', '07', '02-060-17', 'R. Villasante', '15000.00', '15000.00'),
('2017', '02', '16', '02-142-17', ' DARYL PALA&Ntilde;A ', '15000.00', '15000.00'),
('2017', '02', '17', '02-147-17', ' EMMANUEL  HARDWARE ', '99550.00', '99550.00'),
('2017', '03', '08', '03-054-17', ' M. Vivero et. Al. ', '29100.00', '29100.00'),
('2017', '03', '09', '03-064-17', ' VENUS ENGINEERING &amp; CONSTRUC. ', '177525.07', '177525.07'),
('2017', '04', '10', '04-045-17', ' EAST MARKETING &amp; GEN MERCHAN. ', '64436.00', '64436.00');

-- --------------------------------------------------------

--
-- Table structure for table `mmomooe`
--

CREATE TABLE `mmomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `insurance_p` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fidelity_b` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `gasoline` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeEquip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `confidential` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mmomooe`
--

INSERT INTO `mmomooe` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `tev`, `training`, `telephone`, `postage`, `insurance_p`, `fidelity_b`, `officeSupplies`, `gasoline`, `motor_maint`, `officeEquip_maint`, `confidential`, `others_maint`, `total`) VALUES
('2017', '01', '05', '01-024-17', 'C. Cinco', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50000.00', '50000.00'),
('2017', '01', '06', '01-038-17', 'M. S. Ramos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '640.00', '640.00'),
('2017', '01', '06', '01-040-17', 'LAND TRANSPORTATION OFFICE', '', '0.00', '0.00', '0.00', '0.00', '531.56', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '531.56'),
('2017', '01', '06', '01-049-17', 'E. C. Oca&ntilde;a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '01', '06', '01-060-17', 'R. L. Jayme', '', '6938.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '6938.00'),
('2017', '01', '24', '01-134-17', 'R. L. Jayme', '', '1820.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1820.00'),
('2017', '01', '26', '01-138-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1600.00', '0.00', '0.00', '0.00', '0.00', '1600.00'),
('2017', '01', '26', '01-143-17', 'XHIN BOY GAS STATION', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3000.00'),
('2017', '01', '30', '01-178-17', 'VISAYAN HERALD', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '2000.00'),
('2017', '01', '30', '01-187-17', 'E. C. Oca&ntilde;a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '300.00', '0.00', '0.00', '0.00', '0.00', '300.00'),
('2017', '01', '31', '01-192-17', 'XHIN BOY GAS STATION', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '0.00', '0.00', '0.00', '0.00', '1000.00'),
('2017', '02', '01', '02-001-17', 'XHIN BOY GAS STATION', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '02', '02', '02-003-17', 'M. Perez', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2800.00', '2800.00'),
('2017', '02', '02', '02-023-17', 'R. L. Jayme', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1126.00', '1126.00'),
('2017', '02', '02', '02-028-17', 'INNOVE COMMUNICATION INC.', '', '0.00', '0.00', '3027.80', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3027.80'),
('2017', '02', '07', '02-054-17', 'R. C. Cesista', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '9870.00', '9870.00'),
('2017', '02', '07', '02-057-17', 'EDS', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '6138.00', '0.00', '0.00', '0.00', '0.00', '0.00', '6138.00'),
('2017', '02', '07', '02-063-17', 'E. C. Oca&ntilde;a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '02', '07', '02-064-17', 'G. B. Iba&ntilde;ez', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1200.00', '1200.00'),
('2017', '02', '07', '02-065-17', 'XHIN BOY GAS STATION', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4000.00', '0.00', '0.00', '0.00', '0.00', '4000.00'),
('2017', '02', '07', '02-066-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1750.00', '0.00', '0.00', '0.00', '0.00', '1750.00'),
('2017', '02', '10', '02-096-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2200.00', '0.00', '0.00', '0.00', '0.00', '2200.00'),
('2017', '02', '10', '02-100-17', 'R. L. Jayme', '', '860.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5860.00'),
('2017', '02', '10', '02-114-17', 'D. V. Iba&ntilde;ez', '', '860.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5860.00'),
('2017', '02', '13', '02-120-17', 'A. B. Ombal', '', '0.00', '1571.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1571.00'),
('2017', '02', '13', '02-123-17', 'R. C. Suyom et Al.', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '21000.00', '21000.00'),
('2017', '02', '16', '02-141-17', 'J. Corpes', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '28000.00', '28000.00'),
('2017', '02', '17', '02-143-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1600.00', '0.00', '0.00', '0.00', '0.00', '1600.00'),
('2017', '02', '17', '02-144-17', 'J. B. Lauron', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5305.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5305.00'),
('2017', '02', '17', '02-148-17', 'Erwin C. Oca&ntilde;a', '', '17360.03', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17360.03'),
('2017', '02', '27', '02-173-17', 'INNOVE COMMUNICATION INC.', '', '0.00', '0.00', '2132.32', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2132.32'),
('2017', '02', '27', '02-174-17', 'INNOVE COMMUNICATION INC.', '', '0.00', '0.00', '2132.32', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2132.32'),
('2017', '02', '28', '02-194-17', 'E. C. Oca&ntilde;a', '', '25000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25000.00'),
('2017', '02', '28', '02-196-17', 'M. T. Daria', '', '15793.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15793.00'),
('2017', '03', '06', '03-019-17', 'E. C. Oca&ntilde;a', '', '25000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25000.00'),
('2017', '03', '06', '03-020-17', 'DACA-MPC', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00', '15000.00'),
('2017', '03', '06', '03-021-17', 'BEN&#039;S TENT MAKER &amp; RENTAL', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '30000.00', '30000.00'),
('2017', '03', '06', '03-031-17', 'D. V. Iba&ntilde;ez', '', '11830.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11830.00'),
('2017', '03', '06', '03-036-17', 'E. C. Oca&ntilde;a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '03', '06', '03-039-17', 'M. S. Ramos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200.00', '0.00', '0.00', '0.00', '0.00', '200.00'),
('2017', '03', '06', '03-040-17', 'M. S. Ramos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200.00', '200.00'),
('2017', '03', '06', '03-041-17', 'M. S. Ramos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '2000.00'),
('2017', '03', '07', '03-046-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1400.00', '0.00', '0.00', '0.00', '0.00', '1400.00'),
('2017', '03', '07', '03-049-17', 'R. C. Cesista', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '9000.00', '9000.00'),
('2017', '03', '07', '03-050-17', 'R. N. Apejas', '', '5120.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5120.00'),
('2017', '03', '07', '03-053-17', 'EMB RO8', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1126.00', '1126.00'),
('2017', '03', '08', '03-055-17', 'E. C. Oca&ntilde;a', '', '30650.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '30650.00'),
('2017', '03', '09', '03-060-17', 'R. C. Suyom', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '31500.00', '31500.00'),
('2017', '03', '13', '03-083-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1900.00', '0.00', '0.00', '0.00', '0.00', '1900.00'),
('2017', '03', '17', '03-111-17', 'JOEBZ COMPUTER SALES', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2635.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2635.00'),
('2017', '03', '17', '03-121-17', 'INNOVE COMMUNICATION INC.', '', '0.00', '0.00', '2132.32', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2132.32'),
('2017', '03', '17', '03-124-17', 'M. T. Daria', '', '5142.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5142.00'),
('2017', '03', '20', '03-139-17', 'B. B. Tangpuz', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '200.00', '0.00', '0.00', '0.00', '0.00', '200.00'),
('2017', '03', '20', '03-143-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1300.00', '0.00', '0.00', '0.00', '0.00', '1300.00'),
('2017', '03', '23', '03-154-17', 'DBM', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '28106.06', '0.00', '0.00', '0.00', '0.00', '0.00', '28106.06'),
('2017', '03', '23', '03-155-17', 'A. B. Ombal ', '', '10185.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10185.00'),
('2017', '03', '23', '03-156-17', 'NICOLAS TIRE AND SEV. CNTR.', '', '0.00', '0.00', '0.00', '0.00', '6000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '6000.00'),
('2017', '03', '27', '03-171-17', 'M. S. Ramos', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '300.00', '0.00', '0.00', '0.00', '0.00', '300.00'),
('2017', '03', '27', '03-172-17', 'JOEBZ COMPUTER SALES', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8160.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8160.00'),
('2017', '04', '04', '04-014-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2100.00', '0.00', '0.00', '0.00', '10810.00', '12910.00'),
('2017', '04', '04', '04-020-17', 'M. T. Daria', '', '8920.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8920.00'),
('2017', '04', '10', '04-046-17', 'E. C. Oca&ntilde;a', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '04', '11', '04-047-17', 'A. M. Advincula', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11000.00', '0.00', '0.00', '0.00', '0.00', '11000.00'),
('2017', '04', '11', '04-059-17', 'E. C. Oca&ntilde;a', '', '15940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15940.00'),
('2017', '04', '11', '04-059-17', 'M.S. Ramos\r\n', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '500.00', '0.00', '0.00', '0.00', '0.00', '500.00'),
('2017', '04', '11', '04-064-17', 'B.B. Tangpuz', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '300.00', '0.00', '0.00', '0.00', '0.00', '300.00'),
('2017', '04', '11', '04-070-17', 'R. R. Camontoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '800.00', '0.00', '0.00', '0.00', '0.00', '800.00'),
('2017', '04', '18', '04-091-17', 'E. C. Oca&ntilde;a', '', '8871.80', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8871.80'),
('2017', '04', '19', '04-096-17', 'R. R. CAMONTOY', 'Gasoline', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '800.00', '0.00', '0.00', '0.00', '0.00', '800.00'),
('2017', '04', '19', '04-100-17', 'R. BALTAZAR ET.AL.', 'Office Equipment', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8600.00', '0.00', '0.00', '8600.00'),
('1970', '01', '01', '01-133-70', 'A.M. ADVINCULA', 'Gasoline Expenses', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11000.00', '0.00', '0.00', '0.00', '0.00', '11000.00');

-- --------------------------------------------------------

--
-- Table structure for table `mpdoco`
--

CREATE TABLE `mpdoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mpdoco`
--

INSERT INTO `mpdoco` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `capital_outlay`, `total`) VALUES
('2017', '04', '12', '04-080-17', 'JOEBZ', '', '38200.00', '38200.00');

-- --------------------------------------------------------

--
-- Table structure for table `mpdomooe`
--

CREATE TABLE `mpdomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mpdomooe`
--

INSERT INTO `mpdomooe` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `tev`, `training`, `telephone`, `officeSupplies`, `others_maint`, `total`) VALUES
('2017', '01', '05', '01-028-17', 'C. C. Marilla', '', '12000.00', '0.00', '0.00', '0.00', '0.00', '12000.00'),
('2017', '01', '06', '01-052-17', 'C. C. Marilla', '', '6938.00', '0.00', '0.00', '0.00', '0.00', '6938.00'),
('2017', '01', '06', '01-053-17', 'B. B. Tangpuz', '', '6938.00', '0.00', '0.00', '0.00', '0.00', '6938.00'),
('2017', '01', '23', '01-130-17', 'B. B. Tangpuz', '', '731.00', '0.00', '0.00', '0.00', '0.00', '731.00'),
('2017', '02', '02', '02-028-17', 'INNOVE COMMUNICATION INC.', '', '0.00', '0.00', '2808.70', '0.00', '0.00', '2808.70'),
('2017', '02', '03', '02-029-17', 'OCEAN VIEW HOTEL &amp; WATER SPA', '', '0.00', '0.00', '0.00', '0.00', '45000.00', '45000.00');

-- --------------------------------------------------------

--
-- Table structure for table `mswdco`
--

CREATE TABLE `mswdco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mswdmooe`
--

CREATE TABLE `mswdmooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aics` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mtoco`
--

CREATE TABLE `mtoco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mtomooe`
--

CREATE TABLE `mtomooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone_telegraph` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fidelity_insurance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `accountable_forms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `it_equip_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `noneoffice`
--

CREATE TABLE `noneoffice` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(2) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(10) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `aid_barangay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `death_indemnity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fa_Kbrgy` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aids` decimal(20,2) NOT NULL DEFAULT '0.00',
  `loyalty_award` decimal(20,2) NOT NULL DEFAULT '0.00',
  `csmonth_celeb` decimal(20,2) NOT NULL DEFAULT '0.00',
  `p_meds` decimal(20,2) DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthfund` decimal(20,2) NOT NULL DEFAULT '0.00',
  `masamasid` decimal(20,2) DEFAULT '0.00',
  `legal_services` decimal(20,2) NOT NULL DEFAULT '0.00',
  `brgy_road` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_bldg` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mun_vehicle` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `noneoffice2017`
--

CREATE TABLE `noneoffice2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `aid_barangay_bal` decimal(20,2) NOT NULL,
  `aid_barangay` decimal(20,2) NOT NULL,
  `death_indemnity_bal` decimal(20,2) NOT NULL,
  `death_indemnity` decimal(20,2) NOT NULL,
  `fa_Kbrgy_bal` decimal(20,2) NOT NULL,
  `fa_Kbrgy` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noneoffice2017`
--

INSERT INTO `noneoffice2017` (`year`, `signatory`, `total`, `aid_barangay_bal`, `aid_barangay`, `death_indemnity_bal`, `death_indemnity`, `fa_Kbrgy_bal`, `fa_Kbrgy`) VALUES
('2017', 'Erwin C. Ocaña', '45000.00', '0.00', '15000.00', '0.00', '20000.00', '0.00', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `noneoffice_list_2016`
--

CREATE TABLE `noneoffice_list_2016` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noneoffice_list_2016`
--

INSERT INTO `noneoffice_list_2016` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'aid_barangay', 'Aid to Barangays', '2016'),
(2, 'death_indemnity', 'Death Indemnity', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `noneoffice_list_2017`
--

CREATE TABLE `noneoffice_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noneoffice_list_2017`
--

INSERT INTO `noneoffice_list_2017` (`id`, `code`, `propername`, `yearcreated`) VALUES
(1, 'aid_barangay', 'Aid to Barangays', '2017'),
(2, 'death_indemnity', 'Death Indemnity', '2017'),
(3, 'fa_Kbrgy', 'Financial Assistance for Implementation of Katarungan Pambarangay', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `psgs`
--

CREATE TABLE `psgs` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psgs`
--

INSERT INTO `psgs` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '04', '24', '04-015-17', 'G. Opinion', 'Allowance', '0.00', '4000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4000.00');

-- --------------------------------------------------------

--
-- Table structure for table `pslcr`
--

CREATE TABLE `pslcr` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `psmacco`
--

CREATE TABLE `psmacco` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmacco`
--

INSERT INTO `psmacco` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '04', '24', '04-008-17', 'J. Parone', 'Salaries', '25821.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3098.52', '300.00', '337.50', '246.15', '0.00', '29803.17');

-- --------------------------------------------------------

--
-- Table structure for table `psmao`
--

CREATE TABLE `psmao` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmao`
--

INSERT INTO `psmao` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '01', '21', '01-014-17', 'Z. Advincula', 'Allowances', '0.00', '2000.00', '2200.00', '2200.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '6400.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmasso`
--

CREATE TABLE `psmasso` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmasso`
--

INSERT INTO `psmasso` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '01', '11', '01-011-17', 'M. T. Silvano et.al.', 'Allowance', '0.00', '4000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '14500.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmbe`
--

CREATE TABLE `psmbe` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `psmbo`
--

CREATE TABLE `psmbo` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmbo`
--

INSERT INTO `psmbo` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '08', '10', '08-001-17', 'as', 'salaries', '12000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '12000.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmeo`
--

CREATE TABLE `psmeo` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmeo`
--

INSERT INTO `psmeo` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `total`) VALUES
('2017', '04', '24', '04-013-17', 'D. Advincula', 'Allowance', '0.00', '6000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16500.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmho`
--

CREATE TABLE `psmho` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `hwb` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmho`
--

INSERT INTO `psmho` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `hwb`, `other_personel_benefits`, `total`) VALUES
('2017', '01', '06', '01-012-17', 'Dr.A. Benitez et.al.', 'Allowances', '0.00', '12000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '22500.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmmo`
--

CREATE TABLE `psmmo` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `honoraria` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `terminal_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `psmpdo`
--

CREATE TABLE `psmpdo` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(200) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_allowance_bonuses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmpdo`
--

INSERT INTO `psmpdo` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_allowance_bonuses`, `total`) VALUES
('2017', '01', '04', '01-003-17', 'C. Marilla et Al.', '', '0.00', '6000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16500.00'),
('2017', '01', '16', '01-084-17', 'C. Marilla et Al.', '', '63669.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '7640.28', '300.00', '700.00', '263.63', '0.00', '72572.91'),
('2017', '01', '18', '01-097-17', 'C. Marilla et Al.', '', '0.00', '0.00', '0.00', '0.00', '15000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00'),
('2017', '02', '02', '02-008-17', 'C. Marilla et Al.', '', '0.00', '6000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16500.00'),
('2017', '02', '09', '02-083-17', 'C. Marilla et Al.', '', '63669.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '7640.28', '300.00', '700.00', '263.63', '0.00', '72572.91'),
('2017', '03', '01', '03-003-17', 'C. Marilla et Al.', '', '0.00', '6000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16500.00'),
('2017', '03', '13', '03-087-17', 'C. Marilla et Al.', '', '63669.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '7640.28', '300.00', '700.00', '266.96', '0.00', '72576.24'),
('2017', '03', '28', '03-181-17', 'C. Marilla et Al.', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '15000.00'),
('2017', '03', '30', '03-209-17', 'C. Marilla et Al.', 'allowance', '0.00', '6000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16500.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmswd`
--

CREATE TABLE `psmswd` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `subsistenceAllowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmswd`
--

INSERT INTO `psmswd` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `subsistenceAllowance`, `other_personel_benefits`, `total`) VALUES
('2017', '01', '06', '01-016-17', 'E. J. Sabino', 'Allowance', '0.00', '8000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8000.00');

-- --------------------------------------------------------

--
-- Table structure for table `psmto`
--

CREATE TABLE `psmto` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `terminal_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psmto`
--

INSERT INTO `psmto` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `terminal_benefits`, `other_personel_benefits`, `total`) VALUES
('2017', '01', '06', '01-010-17', 'J.B. Lauron et.al.', 'Allowance', '0.00', '12000.00', '5250.00', '5250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '22500.00');

-- --------------------------------------------------------

--
-- Table structure for table `pssb`
--

CREATE TABLE `pssb` (
  `year_transact` varchar(4) NOT NULL,
  `month_transact` varchar(10) NOT NULL,
  `day_transact` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `salaries` decimal(20,2) NOT NULL DEFAULT '0.00',
  `PERA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `RA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `TA` decimal(20,2) NOT NULL DEFAULT '0.00',
  `clothing_allowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `year_end_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cash_gift` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mid_year_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pib` decimal(20,2) NOT NULL DEFAULT '0.00',
  `life_retirement` decimal(20,2) NOT NULL DEFAULT '0.00',
  `pag_ibig` decimal(20,2) NOT NULL DEFAULT '0.00',
  `philhealth` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ecc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `other_personel_benefits` decimal(20,2) NOT NULL DEFAULT '0.00',
  `terminal_lb` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pssb`
--

INSERT INTO `pssb` (`year_transact`, `month_transact`, `day_transact`, `alobs`, `claimant`, `description`, `salaries`, `PERA`, `RA`, `TA`, `clothing_allowance`, `year_end_bonus`, `cash_gift`, `mid_year_bonus`, `pib`, `life_retirement`, `pag_ibig`, `philhealth`, `ecc`, `other_personel_benefits`, `terminal_lb`, `total`) VALUES
('2017', '01', '04', '01-002-17', 'R. B. Legaspi et Al.', '', '0.00', '28000.00', '58450.00', '58450.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '144900.00'),
('2017', '01', '18', '01-096-17', 'R. B. Legaspi et Al.', '', '0.00', '0.00', '0.00', '0.00', '65000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '65000.00'),
('2017', '01', '18', '01-108-17', 'R. B. Legaspi et Al.', '', '467199.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '41739.48', '1400.00', '3800.00', '1315.32', '0.00', '0.00', '515453.80'),
('2017', '01', '20', '01-110-17', 'C. R. Lumbre', '', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00'),
('2017', '02', '02', '02-007-17', 'R. B. Legaspi et Al.', '', '0.00', '28000.00', '58450.00', '58450.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '144900.00'),
('2017', '02', '09', '02-082-17', 'R. B. Legaspi et Al.', '', '467199.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '41739.48', '1400.00', '3800.00', '1315.32', '0.00', '0.00', '515453.80'),
('2017', '03', '01', '03-002-17', 'R. B. Legaspi et Al.', '', '0.00', '28000.00', '58450.00', '58450.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '144900.00'),
('2017', '03', '13', '03-086-17', 'R. B. Legaspi et Al.', '', '467347.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '41757.24', '1400.00', '5112.50', '1326.82', '0.00', '0.00', '516943.56'),
('2017', '03', '28', '03-182-17', 'C. R. Lumbre', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '20000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '20000.00'),
('2017', '03', '30', '03-208-17', 'R. B. Legaspi et Al.', '', '0.00', '28000.00', '58450.00', '58450.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '144900.00');

-- --------------------------------------------------------

--
-- Table structure for table `pwds`
--

CREATE TABLE `pwds` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `honorarium` decimal(20,2) NOT NULL DEFAULT '0.00',
  `npdr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `motor_vehicle_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `idsregistration` decimal(20,2) NOT NULL DEFAULT '0.00',
  `skillstraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `trainingallowance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fassist` decimal(20,2) NOT NULL DEFAULT '0.00',
  `drrtraining` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendasses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pwds`
--

INSERT INTO `pwds` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `honorarium`, `npdr`, `motor_vehicle_maint`, `idsregistration`, `skillstraining`, `trainingallowance`, `fassist`, `drrtraining`, `yearendasses`, `total`) VALUES
('2017', '02', '07', '02-061-17', 'J. C.Borromeo', 'Honorarium', '2000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `r20edf`
--

CREATE TABLE `r20edf` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(2) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `mdcOperation` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mvprogram` decimal(20,2) NOT NULL DEFAULT '0.00',
  `barangayan` decimal(20,2) NOT NULL DEFAULT '0.00',
  `faBrgyP` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cbms` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cfLPRAP` decimal(20,2) NOT NULL DEFAULT '0.00',
  `susDevCLUP` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ictTech4ed` decimal(20,2) NOT NULL DEFAULT '0.00',
  `rAndD` decimal(20,2) NOT NULL DEFAULT '0.00',
  `iecEdCamp` decimal(20,2) NOT NULL DEFAULT '0.00',
  `dCem` decimal(20,2) NOT NULL DEFAULT '0.00',
  `udExUgc` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mBrgyRoads` decimal(20,2) NOT NULL DEFAULT '0.00',
  `SportsDev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `afdLproj` decimal(20,2) NOT NULL DEFAULT '0.00',
  `aExtPCapB` decimal(20,2) NOT NULL DEFAULT '0.00',
  `AHCM` decimal(20,2) NOT NULL DEFAULT '0.00',
  `coastalFRM` decimal(20,2) NOT NULL DEFAULT '0.00',
  `LpovRp` decimal(20,2) NOT NULL DEFAULT '0.00',
  `solidWaste` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cleanGreen` decimal(20,2) NOT NULL DEFAULT '0.00',
  `infraBrgys` decimal(20,2) NOT NULL DEFAULT '0.00',
  `loanPayment` decimal(20,2) NOT NULL DEFAULT '0.00',
  `masamasid` decimal(20,2) NOT NULL DEFAULT '0.00',
  `tourCultAct` decimal(20,2) NOT NULL DEFAULT '0.00',
  `tourProjinfraDev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saao01`
--

CREATE TABLE `saao01` (
  `id` int(11) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `office` varchar(500) NOT NULL,
  `ps_appr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `mooe_appr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `co_appr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allotments_ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allotments_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allotments_co` decimal(20,2) NOT NULL DEFAULT '0.00',
  `obligations_ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `obligations_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `obligations_co` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAppropriation_ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAppropriation_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAppropriation_co` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAllotment_ps` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAllotment_mooe` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAllotment_co` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `saao01`
--

INSERT INTO `saao01` (`id`, `Year`, `office`, `ps_appr`, `mooe_appr`, `co_appr`, `allotments_ps`, `allotments_mooe`, `allotments_co`, `obligations_ps`, `obligations_mooe`, `obligations_co`, `balanceAppropriation_ps`, `balanceAppropriation_mooe`, `balanceAppropriation_co`, `balanceAllotment_ps`, `balanceAllotment_mooe`, `balanceAllotment_co`) VALUES
(1, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(2, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(3, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(4, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(5, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(6, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(7, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(8, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(9, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(10, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(11, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(12, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(13, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(14, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(15, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(16, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(17, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(18, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(19, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(20, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(21, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(22, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(23, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(24, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(25, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(26, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(27, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(28, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(29, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(30, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(31, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(32, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(33, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(34, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(35, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(36, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(37, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(38, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(39, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(40, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(41, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(42, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(43, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(44, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(45, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(46, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(47, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(48, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(49, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(50, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(51, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(52, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(53, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(54, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(55, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(56, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(57, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(58, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(59, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(60, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(61, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(62, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(63, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(64, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(65, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(66, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(67, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(68, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(69, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(70, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(71, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(72, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(73, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(74, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(75, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(76, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(77, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(78, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(79, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(80, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(81, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(82, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(83, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(84, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(85, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(86, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(87, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(88, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(89, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(90, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(91, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(92, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(93, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(94, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(95, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(96, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(97, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(98, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(99, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(100, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(101, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(102, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(103, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(104, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(105, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(106, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(107, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(108, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(109, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(110, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(111, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(112, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(113, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(114, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(115, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(116, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(117, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(118, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(119, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(120, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(121, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(122, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(123, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(124, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(125, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(126, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(127, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(128, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(129, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(130, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(131, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(132, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(133, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(134, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(135, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(136, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(137, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(138, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(139, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(140, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(141, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(142, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(143, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(144, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(145, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(146, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(147, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(148, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(149, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(150, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(151, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(152, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(153, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(154, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(155, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(156, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(157, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(158, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(159, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(160, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00'),
(161, '2017', 'MMO', '2381063.76', '3040500.00', '794390.85', '595265.94', '760125.00', '198597.71', '137746.24', '78829.56', '100000.00', '2243317.52', '2961670.44', '694390.85', '457519.70', '681295.44', '98597.71'),
(162, '2017', 'SB', '9980650.24', '1530292.50', '150000.00', '2495162.56', '382573.13', '37500.00', '730353.80', '233893.12', '15000.00', '9250296.44', '1296399.38', '135000.00', '1764808.76', '148680.01', '22500.00'),
(163, '2017', 'MPDO', '1244595.84', '201300.00', '50000.00', '311148.96', '50325.00', '12500.00', '104072.91', '28532.00', '0.00', '1140522.93', '172768.00', '50000.00', '207076.05', '21793.00', '12500.00'),
(164, '2017', 'LCR', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00', '0.00', '0.00', '0.00', '944053.52', '218703.10', '0.00', '236013.38', '54675.78', '0.00'),
(165, '2017', 'MBO', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00', '0.00', '0.00', '0.00', '807403.84', '152996.65', '20000.00', '201850.96', '38249.16', '5000.00'),
(166, '2017', 'MACCO', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00', '0.00', '0.00', '0.00', '1322071.84', '300162.50', '35000.00', '330517.96', '75040.63', '8750.00'),
(167, '2017', 'MTO', '2365620.48', '770000.00', '200000.00', '591405.12', '192500.00', '50000.00', '22500.00', '0.00', '0.00', '2343120.48', '770000.00', '200000.00', '568905.12', '192500.00', '50000.00'),
(168, '2017', 'MASSO', '995551.48', '173850.00', '0.00', '248887.87', '43462.50', '0.00', '14500.00', '0.00', '0.00', '981051.48', '173850.00', '0.00', '234387.87', '43462.50', '0.00'),
(169, '2017', 'General Services', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00', '0.00', '0.00', '0.00', '2318248.52', '1955000.00', '0.00', '579562.13', '488750.00', '0.00'),
(170, '2017', 'MHO', '3338906.64', '256067.24', '0.00', '834726.66', '64016.81', '0.00', '22500.00', '0.00', '0.00', '3316406.64', '256067.24', '0.00', '812226.66', '64016.81', '0.00'),
(171, '2017', 'MSWD', '2023716.80', '430037.28', '35000.00', '505929.20', '107509.32', '8750.00', '8000.00', '0.00', '0.00', '2015716.80', '430037.28', '35000.00', '497929.20', '107509.32', '8750.00'),
(172, '2017', 'MAO', '1021774.24', '137784.00', '30000.00', '255443.56', '34446.00', '7500.00', '6400.00', '0.00', '0.00', '1015374.24', '137784.00', '30000.00', '249043.56', '34446.00', '7500.00'),
(173, '2017', 'MEO', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00', '0.00', '0.00', '0.00', '1298934.00', '89782.00', '70000.00', '324733.50', '22445.50', '17500.00'),
(174, '2017', 'MBE', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00', '0.00', '0.00', '0.00', '0.00', '375000.00', '50000.00', '0.00', '93750.00', '12500.00');

-- --------------------------------------------------------

--
-- Table structure for table `saao20_01`
--

CREATE TABLE `saao20_01` (
  `id` int(11) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `program` varchar(500) NOT NULL,
  `appr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allotments` decimal(20,2) NOT NULL DEFAULT '0.00',
  `obligations` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAppropriation` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAllotment` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `saao20_01`
--

INSERT INTO `saao20_01` (`id`, `Year`, `program`, `appr`, `allotments`, `obligations`, `balanceAppropriation`, `balanceAllotment`) VALUES
(1, '2017', 'mdcOperation', '76540.40', '19135.10', '0.00', '76540.40', '19135.10'),
(2, '2017', 'mvprogram', '430000.00', '107500.00', '0.00', '430000.00', '107500.00'),
(3, '2017', 'barangayan', '120000.00', '30000.00', '0.00', '120000.00', '30000.00'),
(4, '2017', 'faBrgyP', '450000.00', '112500.00', '0.00', '450000.00', '112500.00'),
(5, '2017', 'cbms', '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2017', 'cfLPRAP', '800000.00', '200000.00', '0.00', '800000.00', '200000.00'),
(7, '2017', 'susDevCLUP', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(8, '2017', 'ictTech4ed', '150000.00', '37500.00', '0.00', '150000.00', '37500.00'),
(9, '2017', 'rAndD', '100000.00', '25000.00', '0.00', '100000.00', '25000.00'),
(10, '2017', 'iecEdCamp', '75000.00', '18750.00', '0.00', '75000.00', '18750.00'),
(11, '2017', 'dCem', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(12, '2017', 'udExUgc', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(13, '2017', 'mBrgyRoads', '2000000.00', '500000.00', '0.00', '2000000.00', '500000.00'),
(14, '2017', 'SportsDev', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(15, '2017', 'afdLproj', '400000.00', '100000.00', '0.00', '400000.00', '100000.00'),
(16, '2017', 'aExtPCapB', '20000.00', '5000.00', '0.00', '20000.00', '5000.00'),
(17, '2017', 'AHCM', '65000.00', '16250.00', '0.00', '65000.00', '16250.00'),
(18, '2017', 'coastalFRM', '600000.00', '150000.00', '0.00', '600000.00', '150000.00'),
(19, '2017', 'LpovRp', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(20, '2017', 'solidWaste', '600000.00', '150000.00', '0.00', '150000.00', '150000.00'),
(21, '2017', 'cleanGreen', '250000.00', '62500.00', '0.00', '250000.00', '62500.00'),
(22, '2017', 'infraBrgys', '622817.80', '155704.45', '0.00', '622817.80', '155704.45'),
(23, '2017', 'loanPayment', '700000.00', '175000.00', '0.00', '700000.00', '175000.00'),
(24, '2017', 'masamasid', '200000.00', '50000.00', '0.00', '200000.00', '50000.00'),
(25, '2017', 'tourCultAct', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(26, '2017', 'tourProjinfraDev', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(27, '2017', 'mdcOperation', '76540.40', '19135.10', '0.00', '76540.40', '19135.10'),
(28, '2017', 'mvprogram', '430000.00', '107500.00', '0.00', '430000.00', '107500.00'),
(29, '2017', 'barangayan', '120000.00', '30000.00', '0.00', '120000.00', '30000.00'),
(30, '2017', 'faBrgyP', '450000.00', '112500.00', '0.00', '450000.00', '112500.00'),
(31, '2017', 'cbms', '0.00', '0.00', '0.00', '0.00', '0.00'),
(32, '2017', 'cfLPRAP', '800000.00', '200000.00', '0.00', '800000.00', '200000.00'),
(33, '2017', 'susDevCLUP', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(34, '2017', 'ictTech4ed', '150000.00', '37500.00', '0.00', '150000.00', '37500.00'),
(35, '2017', 'rAndD', '100000.00', '25000.00', '0.00', '100000.00', '25000.00'),
(36, '2017', 'iecEdCamp', '75000.00', '18750.00', '0.00', '75000.00', '18750.00'),
(37, '2017', 'dCem', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(38, '2017', 'udExUgc', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(39, '2017', 'mBrgyRoads', '2000000.00', '500000.00', '0.00', '2000000.00', '500000.00'),
(40, '2017', 'SportsDev', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(41, '2017', 'afdLproj', '400000.00', '100000.00', '0.00', '400000.00', '100000.00'),
(42, '2017', 'aExtPCapB', '20000.00', '5000.00', '0.00', '20000.00', '5000.00'),
(43, '2017', 'AHCM', '65000.00', '16250.00', '0.00', '65000.00', '16250.00'),
(44, '2017', 'coastalFRM', '600000.00', '150000.00', '0.00', '600000.00', '150000.00'),
(45, '2017', 'LpovRp', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(46, '2017', 'solidWaste', '600000.00', '150000.00', '0.00', '150000.00', '150000.00'),
(47, '2017', 'cleanGreen', '250000.00', '62500.00', '0.00', '250000.00', '62500.00'),
(48, '2017', 'infraBrgys', '622817.80', '155704.45', '0.00', '622817.80', '155704.45'),
(49, '2017', 'loanPayment', '700000.00', '175000.00', '0.00', '700000.00', '175000.00'),
(50, '2017', 'masamasid', '200000.00', '50000.00', '0.00', '200000.00', '50000.00'),
(51, '2017', 'tourCultAct', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(52, '2017', 'tourProjinfraDev', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(53, '2017', 'mdcOperation', '76540.40', '19135.10', '0.00', '76540.40', '19135.10'),
(54, '2017', 'mvprogram', '430000.00', '107500.00', '0.00', '430000.00', '107500.00'),
(55, '2017', 'barangayan', '120000.00', '30000.00', '0.00', '120000.00', '30000.00'),
(56, '2017', 'faBrgyP', '450000.00', '112500.00', '0.00', '450000.00', '112500.00'),
(57, '2017', 'cbms', '0.00', '0.00', '0.00', '0.00', '0.00'),
(58, '2017', 'cfLPRAP', '800000.00', '200000.00', '0.00', '800000.00', '200000.00'),
(59, '2017', 'susDevCLUP', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(60, '2017', 'ictTech4ed', '150000.00', '37500.00', '0.00', '150000.00', '37500.00'),
(61, '2017', 'rAndD', '100000.00', '25000.00', '0.00', '100000.00', '25000.00'),
(62, '2017', 'iecEdCamp', '75000.00', '18750.00', '0.00', '75000.00', '18750.00'),
(63, '2017', 'dCem', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(64, '2017', 'udExUgc', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(65, '2017', 'mBrgyRoads', '2000000.00', '500000.00', '0.00', '2000000.00', '500000.00'),
(66, '2017', 'SportsDev', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(67, '2017', 'afdLproj', '400000.00', '100000.00', '0.00', '400000.00', '100000.00'),
(68, '2017', 'aExtPCapB', '20000.00', '5000.00', '0.00', '20000.00', '5000.00'),
(69, '2017', 'AHCM', '65000.00', '16250.00', '0.00', '65000.00', '16250.00'),
(70, '2017', 'coastalFRM', '600000.00', '150000.00', '0.00', '600000.00', '150000.00'),
(71, '2017', 'LpovRp', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(72, '2017', 'solidWaste', '600000.00', '150000.00', '0.00', '150000.00', '150000.00'),
(73, '2017', 'cleanGreen', '250000.00', '62500.00', '0.00', '250000.00', '62500.00'),
(74, '2017', 'infraBrgys', '622817.80', '155704.45', '0.00', '622817.80', '155704.45'),
(75, '2017', 'loanPayment', '700000.00', '175000.00', '0.00', '700000.00', '175000.00'),
(76, '2017', 'masamasid', '200000.00', '50000.00', '0.00', '200000.00', '50000.00'),
(77, '2017', 'tourCultAct', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(78, '2017', 'tourProjinfraDev', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(79, '2017', 'mdcOperation', '76540.40', '19135.10', '0.00', '76540.40', '19135.10'),
(80, '2017', 'mvprogram', '430000.00', '107500.00', '0.00', '430000.00', '107500.00'),
(81, '2017', 'barangayan', '120000.00', '30000.00', '0.00', '120000.00', '30000.00'),
(82, '2017', 'faBrgyP', '450000.00', '112500.00', '0.00', '450000.00', '112500.00'),
(83, '2017', 'cbms', '0.00', '0.00', '0.00', '0.00', '0.00'),
(84, '2017', 'cfLPRAP', '800000.00', '200000.00', '0.00', '800000.00', '200000.00'),
(85, '2017', 'susDevCLUP', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(86, '2017', 'ictTech4ed', '150000.00', '37500.00', '0.00', '150000.00', '37500.00'),
(87, '2017', 'rAndD', '100000.00', '25000.00', '0.00', '100000.00', '25000.00'),
(88, '2017', 'iecEdCamp', '75000.00', '18750.00', '0.00', '75000.00', '18750.00'),
(89, '2017', 'dCem', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(90, '2017', 'udExUgc', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(91, '2017', 'mBrgyRoads', '2000000.00', '500000.00', '0.00', '2000000.00', '500000.00'),
(92, '2017', 'SportsDev', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(93, '2017', 'afdLproj', '400000.00', '100000.00', '0.00', '400000.00', '100000.00'),
(94, '2017', 'aExtPCapB', '20000.00', '5000.00', '0.00', '20000.00', '5000.00'),
(95, '2017', 'AHCM', '65000.00', '16250.00', '0.00', '65000.00', '16250.00'),
(96, '2017', 'coastalFRM', '600000.00', '150000.00', '0.00', '600000.00', '150000.00'),
(97, '2017', 'LpovRp', '500000.00', '125000.00', '0.00', '500000.00', '125000.00'),
(98, '2017', 'solidWaste', '600000.00', '150000.00', '0.00', '150000.00', '150000.00'),
(99, '2017', 'cleanGreen', '250000.00', '62500.00', '0.00', '250000.00', '62500.00'),
(100, '2017', 'infraBrgys', '622817.80', '155704.45', '0.00', '622817.80', '155704.45'),
(101, '2017', 'loanPayment', '700000.00', '175000.00', '0.00', '700000.00', '175000.00'),
(102, '2017', 'masamasid', '200000.00', '50000.00', '0.00', '200000.00', '50000.00'),
(103, '2017', 'tourCultAct', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00'),
(104, '2017', 'tourProjinfraDev', '1000000.00', '250000.00', '0.00', '1000000.00', '250000.00');

-- --------------------------------------------------------

--
-- Table structure for table `saaono_01`
--

CREATE TABLE `saaono_01` (
  `id` int(11) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `program` varchar(500) NOT NULL,
  `appr` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allotments` decimal(20,2) NOT NULL DEFAULT '0.00',
  `obligations` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAppropriation` decimal(20,2) NOT NULL DEFAULT '0.00',
  `balanceAllotment` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `sbco`
--

CREATE TABLE `sbco` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `capital_outlay` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sbco`
--

INSERT INTO `sbco` (`yearm`, `month`, `day`, `alobs`, `claimant`, `capital_outlay`, `total`) VALUES
('2017', '01', '26', '01-142-17', 'J.Francisco', '15000.00', '15000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sbmooe`
--

CREATE TABLE `sbmooe` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `training` decimal(20,2) NOT NULL DEFAULT '0.00',
  `telephone` decimal(20,2) NOT NULL DEFAULT '0.00',
  `postage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `fidelity_b` decimal(20,2) NOT NULL DEFAULT '0.00',
  `officeSupplies` decimal(20,2) NOT NULL DEFAULT '0.00',
  `advertising_expenses` decimal(20,2) NOT NULL DEFAULT '0.00',
  `others_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sbmooe`
--

INSERT INTO `sbmooe` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `tev`, `training`, `telephone`, `postage`, `fidelity_b`, `officeSupplies`, `advertising_expenses`, `others_maint`, `total`) VALUES
('2017', '01', '05', '01-016-17', 'R. B. Legaspi', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-017-17', 'M. M. Mate', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-018-17', 'P. B. Remandaban', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-019-17', 'G. V. Cinco', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-020-17', 'C. R. Lumbre', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-021-17', 'M. A. Vargas', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-022-17', 'N. K. Novio Jr.', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-023-17', 'F. G. Beltran', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-035-17', 'M. R. Martinez', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '05', '01-036-17', 'E. S. Eracho', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '06', '01-041-17', 'R. A. Verecio', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '06', '01-042-17', 'B. P. Tacoy', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '06', '01-043-17', 'V. A. Flores', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '09', '01-061-17', 'J. P. Labata', '', '13940.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13940.00'),
('2017', '01', '16', '01-072-17', 'R. B. Legaspi', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-073-17', 'M. R. Martinez', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-074-17', 'M. M. Mate', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-075-17', 'V. A. Flores', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-076-17', 'F. G. Beltran', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-077-17', 'R. A. Verecio', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-078-17', 'G. V. Cinco', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-079-17', 'P. B. Remandaban', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-080-17', 'B. P. Tacoy', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '16', '01-082-17', 'C. R. LUMBRE', 'Other Maintenance', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', '1000.00'),
('2017', '01', '31', '01-193-17', 'R. B. LEGASPI', 'Reim. For Tev', '27733.12', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '27733.12');

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE `sc` (
  `yearm` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(2) NOT NULL,
  `alobs` varchar(12) NOT NULL,
  `claimant` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `total` decimal(20,2) NOT NULL DEFAULT '0.00',
  `tev` decimal(20,2) NOT NULL DEFAULT '0.00',
  `documentation` decimal(20,2) NOT NULL DEFAULT '0.00',
  `filipinoweek` decimal(20,2) NOT NULL DEFAULT '0.00',
  `healthyactivities` decimal(20,2) NOT NULL DEFAULT '0.00',
  `periodicexercise` decimal(20,2) NOT NULL DEFAULT '0.00',
  `visitslgus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `orgeffectiviness` decimal(20,2) NOT NULL DEFAULT '0.00',
  `office_maint` decimal(20,2) NOT NULL DEFAULT '0.00',
  `oplan_eval` decimal(20,2) NOT NULL DEFAULT '0.00',
  `yearendperformance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `ophelpdesks` decimal(20,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`yearm`, `month`, `day`, `alobs`, `claimant`, `description`, `total`, `tev`, `documentation`, `filipinoweek`, `healthyactivities`, `periodicexercise`, `visitslgus`, `orgeffectiviness`, `office_maint`, `oplan_eval`, `yearendperformance`, `ophelpdesks`) VALUES
('2017', '01', '30', '01-181-17', 'HAIYAN FOODSTOP', 'Continuing Education for OP/OPE', '29250.00', '29250.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('2017', '01', '30', '01-182-17', 'TACLOBAN TAP COMMERCIAL INC.', 'Continuing Education for OP/OPE', '1990.13', '1990.13', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `sef2017`
--

CREATE TABLE `sef2017` (
  `year` varchar(4) NOT NULL,
  `signatory` varchar(300) NOT NULL,
  `total` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sef2017`
--

INSERT INTO `sef2017` (`year`, `signatory`, `total`) VALUES
('2017', 'Erwin C. Ocaña', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `sef_list_2017`
--

CREATE TABLE `sef_list_2017` (
  `id` int(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `propername` varchar(500) NOT NULL,
  `yearcreated` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1sp_list_2016`
--
ALTER TABLE `1sp_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1sp_list_2017`
--
ALTER TABLE `1sp_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `20_list_2016`
--
ALTER TABLE `20_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `20_list_2017`
--
ALTER TABLE `20_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- Indexes for table `aip`
--
ALTER TABLE `aip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aipgad`
--
ALTER TABLE `aipgad`
  ADD PRIMARY KEY (`Year`);

--
-- Indexes for table `aipiralcpc`
--
ALTER TABLE `aipiralcpc`
  ADD PRIMARY KEY (`yearm`);

--
-- Indexes for table `aipmdr`
--
ALTER TABLE `aipmdr`
  ADD PRIMARY KEY (`yearm`);

--
-- Indexes for table `aipnoneoffice`
--
ALTER TABLE `aipnoneoffice`
  ADD PRIMARY KEY (`Year`);

--
-- Indexes for table `aippwd`
--
ALTER TABLE `aippwd`
  ADD PRIMARY KEY (`yearm`);

--
-- Indexes for table `aipsc`
--
ALTER TABLE `aipsc`
  ADD PRIMARY KEY (`yearm`);

--
-- Indexes for table `budget_year`
--
ALTER TABLE `budget_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`alobs`);

--
-- Indexes for table `cont_program`
--
ALTER TABLE `cont_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gad2017`
--
ALTER TABLE `gad2017`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `gad_list_2016`
--
ALTER TABLE `gad_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gad_list_2017`
--
ALTER TABLE `gad_list_2017`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `lcpc_list_2016`
--
ALTER TABLE `lcpc_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcpc_list_2017`
--
ALTER TABLE `lcpc_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mdr_list_2016`
--
ALTER TABLE `mdr_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mdr_list_2017`
--
ALTER TABLE `mdr_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noneoffice2017`
--
ALTER TABLE `noneoffice2017`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `noneoffice_list_2016`
--
ALTER TABLE `noneoffice_list_2016`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noneoffice_list_2017`
--
ALTER TABLE `noneoffice_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saao01`
--
ALTER TABLE `saao01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saao20_01`
--
ALTER TABLE `saao20_01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saaono_01`
--
ALTER TABLE `saaono_01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sef2017`
--
ALTER TABLE `sef2017`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `sef_list_2017`
--
ALTER TABLE `sef_list_2017`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1sp_list_2016`
--
ALTER TABLE `1sp_list_2016`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `1sp_list_2017`
--
ALTER TABLE `1sp_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `20_list_2016`
--
ALTER TABLE `20_list_2016`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `20_list_2017`
--
ALTER TABLE `20_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `aip`
--
ALTER TABLE `aip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `budget_year`
--
ALTER TABLE `budget_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cont_program`
--
ALTER TABLE `cont_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gad_list_2016`
--
ALTER TABLE `gad_list_2016`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gad_list_2017`
--
ALTER TABLE `gad_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lcpc_list_2016`
--
ALTER TABLE `lcpc_list_2016`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lcpc_list_2017`
--
ALTER TABLE `lcpc_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mdr_list_2016`
--
ALTER TABLE `mdr_list_2016`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mdr_list_2017`
--
ALTER TABLE `mdr_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noneoffice_list_2016`
--
ALTER TABLE `noneoffice_list_2016`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `noneoffice_list_2017`
--
ALTER TABLE `noneoffice_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `saao01`
--
ALTER TABLE `saao01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `saao20_01`
--
ALTER TABLE `saao20_01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `saaono_01`
--
ALTER TABLE `saaono_01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sef_list_2017`
--
ALTER TABLE `sef_list_2017`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
