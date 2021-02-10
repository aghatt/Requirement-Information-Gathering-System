-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 09:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryy`
--

-- --------------------------------------------------------

--
-- Table structure for table `addreq`
--

CREATE TABLE `addreq` (
  `utd` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `sp` int(11) NOT NULL DEFAULT '0',
  `fp` int(11) NOT NULL DEFAULT '0',
  `req` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addreq`
--

INSERT INTO `addreq` (`utd`, `post`, `sp`, `fp`, `req`) VALUES
('soex', 'bathtubs ', 5, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `name`) VALUES
('vcoffice', 'vcofficemis_01', 'VC Office'),
('Asc', 'Ascmis_02', 'Human Resource Development Centre'),
('Biochem', 'Biochemmis_03', 'School of Biochemistry'),
('Chemsc', 'Chemscmis_04', 'School of  Chemical Sciences'),
('Socmrce', 'Socmrcemis_05', 'School of Commerce'),
('Socsit', 'Socsitmis_06', 'School of Computer Science & IT'),
('Sodsf', 'Sodsfmis_07', 'School of Data Science & Forecasting'),
('Soecon', 'Soeconmis_08', 'School of Economics'),
('Soedu', 'Soedumis_09', 'School of Education'),
('Soex', 'Soexmis_10', 'School of Electronics'),
('Sees', 'Seesmis_11', 'School of Energy & Environmental Studies'),
('Soinstru', 'Soinstrumis_12', 'School of Instrumentation'),
('Sjmc', 'Sjmcmis_15', 'School of Journalism & Mass Comm.'),
('Solang', 'Solangmis_16', 'School of Languages'),
('Somath', 'Somathmis_17', 'School of Mathematics'),
('Sopharma', 'Sopharmamis_18', 'School of Pharmacy'),
('Sopedu', 'Sopedumis_19', 'School of Physical Education'),
('Sophy', 'Sophymis_20', 'School of Physics'),
('Sostat', 'Sostatmis_21', 'School of Statistics'),
('Soss', 'Sossmis_22', 'School of Social Science'),
('Ietdavv', 'Ietdavvmis_23', 'Institute of Engineering & Technology'),
('Imsdavv', 'Imsdavvmis_24', 'Institute of Management Studies'),
('Iipsdavv', 'Iipsdavvmis_25', 'International Institute of Professional Studies'),
('Compcent', 'Compcentmis_26', 'Computer Centre'),
('Solib', 'Solibmis_27', 'School of Library & Information Science'),
('Doll', 'Dollmis_29', 'Department of Life Long Learning'),
('Emrcdavv', 'Emrcdavvmis_30', 'Education Multimedia Research Centre'),
('Umcdavv', 'Umcdavvmis_31', 'University Minority Cell'),
('Ddedavv', 'Ddedavvmis_32', 'Directorate of Distance Education'),
('Soyoga', 'Soyogamis_33', 'School of yoga'),
('Sobiotech', 'Sobiotechmis_35', 'School of Biotechnology'),
('Ddukkdavv', 'Ddukkdavvmis_36', 'DDU- Kaushal Kendra'),
('Solaw', 'Solawmis_14', 'School of Law'),
('Sols', 'Solsmis_15', 'School of Life Sciences'),
('cwo', 'cwomis_39', 'Chief Warden Office'),
('mcc', 'mccmis_38', 'Model Career Center'),
('ppress', 'ppressmis_17', 'Printing Press'),
('itc', 'itcmis_20', 'IT Center');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `utd` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL,
  `nature` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `purpose` varchar(400) NOT NULL,
  `date` varchar(20) NOT NULL,
  `benf` varchar(20) NOT NULL,
  `outcome` varchar(400) NOT NULL,
  `duration` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`utd`, `name`, `type`, `nature`, `level`, `purpose`, `date`, `benf`, `outcome`, `duration`) VALUES
('', '', '', '', '', '', '--', '', '', ''),
('', '', '', '', '', '', '--', '', '', ''),
('', 'a', 'govt', '', 'local', 'Type Text', '2017-01-01', 'teachers', 'Type Text', ''),
('', 'a', 'govt', '', 'local', 'Type Text', '01-01-2017', 'teachers', 'Type Text', ''),
('', 'wdw', 'govt', '', 'local', 'Type Text', '03-01-2017', 'teachers', 'Type Text', ''),
('soex', 'try', 'govt', 'Research & Developme', 'national', 'Just to try', '01-01-2022', 'teachers', 'good', ''),
('soex', 'cxc', 'govt', 'Research & Development', 'state', 'Type Texthfng', '01-03-2035', 'teachers', 'Type Textujtfggd', '4'),
('soex', 'cxc', 'govt', 'Research & Development', 'state', 'Type Texthfng', '01-03-2035', 'teachers', 'Type Textujtfggd', '4');

-- --------------------------------------------------------

--
-- Table structure for table `req1718`
--

CREATE TABLE `req1718` (
  `utd` varchar(30) NOT NULL,
  `reg_cls3_perm_sp` int(11) NOT NULL DEFAULT '0',
  `reg_cls3_perm_fp` int(11) NOT NULL DEFAULT '0',
  `reg_cls3_perm_req` int(11) NOT NULL DEFAULT '0',
  `reg_cls3_dw_sp` int(11) NOT NULL DEFAULT '0',
  `reg_cls3_dw_fp` int(11) NOT NULL DEFAULT '0',
  `reg_cls3_dw_req` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_perm_sp` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_perm_fp` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_perm_req` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_dw_sp` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_dw_fp` int(11) NOT NULL DEFAULT '0',
  `reg_cls4_dw_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_dw_sp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_dw_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_dw_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_contract_sp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_contract_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_contract_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_hourly_sp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_hourly_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls3_hourly_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_dw_sp` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_dw_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_dw_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_contract_sp` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_contract_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_contract_req` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_hourly_sp` int(11) DEFAULT '0',
  `finance_cls4_hourly_fp` int(11) NOT NULL DEFAULT '0',
  `finance_cls4_hourly_req` int(11) NOT NULL DEFAULT '0',
  `add_security_sp` int(11) NOT NULL DEFAULT '0',
  `add_security_fp` int(11) NOT NULL DEFAULT '0',
  `add_security_req` int(11) NOT NULL DEFAULT '0',
  `add_plumber_sp` int(11) NOT NULL DEFAULT '0',
  `add_plumber_fp` int(11) NOT NULL DEFAULT '0',
  `add_plumber_req` int(11) NOT NULL DEFAULT '0',
  `add_civil_sp` int(11) NOT NULL DEFAULT '0',
  `add_civil_fp` int(11) NOT NULL DEFAULT '0',
  `add_civil_req` int(11) NOT NULL DEFAULT '0',
  `add_electrician_sp` int(11) NOT NULL DEFAULT '0',
  `add_electrician_fp` int(11) NOT NULL DEFAULT '0',
  `add_electrician_req` int(11) NOT NULL DEFAULT '0',
  `additionalreq` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req1718`
--

INSERT INTO `req1718` (`utd`, `reg_cls3_perm_sp`, `reg_cls3_perm_fp`, `reg_cls3_perm_req`, `reg_cls3_dw_sp`, `reg_cls3_dw_fp`, `reg_cls3_dw_req`, `reg_cls4_perm_sp`, `reg_cls4_perm_fp`, `reg_cls4_perm_req`, `reg_cls4_dw_sp`, `reg_cls4_dw_fp`, `reg_cls4_dw_req`, `finance_cls3_dw_sp`, `finance_cls3_dw_fp`, `finance_cls3_dw_req`, `finance_cls3_contract_sp`, `finance_cls3_contract_fp`, `finance_cls3_contract_req`, `finance_cls3_hourly_sp`, `finance_cls3_hourly_fp`, `finance_cls3_hourly_req`, `finance_cls4_dw_sp`, `finance_cls4_dw_fp`, `finance_cls4_dw_req`, `finance_cls4_contract_sp`, `finance_cls4_contract_fp`, `finance_cls4_contract_req`, `finance_cls4_hourly_sp`, `finance_cls4_hourly_fp`, `finance_cls4_hourly_req`, `add_security_sp`, `add_security_fp`, `add_security_req`, `add_plumber_sp`, `add_plumber_fp`, `add_plumber_req`, `add_civil_sp`, `add_civil_fp`, `add_civil_req`, `add_electrician_sp`, `add_electrician_fp`, `add_electrician_req`, `additionalreq`) VALUES
('acad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('acco', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('adminis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('asc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('audit', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('biochem', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('ccdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('chemsc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('compcent', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('conf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('cscdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('cwo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('dcdc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('ddedavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('ddukkdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('develop', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('doll', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('dsw', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('emrcdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('engg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('estab', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('exam', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('ietdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('iipsdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('imsdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('itc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('mcc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('nss', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('ppress', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('regis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('scst', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sees', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sjmc', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sobiotech', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('socmrce', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('socsit', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sodsf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('soecon', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('soedu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('soex', 0, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 54, 530, 53, 535, 53, 353, 53, 533, 533636, 345, 24, 424, 7585, 646, 4765, 32, 243, 644, 2, 4, 5, 345757, 234575, 29999757, 234, 234, 234, 23457575, 32575, 25235757, NULL),
('soinstru', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('solang', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('solaw', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('solib', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sols', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('somath', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sopedu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sopharma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sophy', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('soss', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('sostat', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('soyoga', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('store', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('umcdavv', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
('vcoffice', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE `superusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superusers`
--

INSERT INTO `superusers` (`username`, `password`) VALUES
('admin', 'adminmis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `req1718`
--
ALTER TABLE `req1718`
  ADD PRIMARY KEY (`utd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
