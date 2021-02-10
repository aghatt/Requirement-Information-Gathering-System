<?php
	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$utd=strtolower($_SESSION['username']);
if(isset($_POST['submit'])){
	$finance_cls3_dw_sp=$_POST['finance_cls3_dw_sp'];
	$finance_cls3_dw_fp=$_POST['finance_cls3_dw_fp'];
	$finance_cls3_dw_req=$_POST['finance_cls3_dw_req'];
	$finance_cls3_contract_sp=$_POST['finance_cls3_contract_sp'];
	$finance_cls3_contract_fp=$_POST['finance_cls3_contract_fp'];
	$finance_cls3_contract_req=$_POST['finance_cls3_contract_req'];
	$finance_cls3_hourly_sp=$_POST['finance_cls3_hourly_sp'];
	$finance_cls3_hourly_fp=$_POST['finance_cls3_hourly_fp'];
	$finance_cls3_hourly_req=$_POST['finance_cls3_hourly_req'];
	 
	$finance_cls4_dw_sp=$_POST['finance_cls4_dw_sp'];
	$finance_cls4_dw_fp=$_POST['finance_cls4_dw_fp'];
	$finance_cls4_dw_req=$_POST['finance_cls4_dw_req'];
	$finance_cls4_contract_sp=$_POST['finance_cls4_contract_sp'];
	$finance_cls4_contract_fp=$_POST['finance_cls4_contract_fp'];
	$finance_cls4_contract_req=$_POST['finance_cls4_contract_req'];
	$finance_cls4_hourly_sp=$_POST['finance_cls4_hourly_sp'];
	$finance_cls4_hourly_fp=$_POST['finance_cls4_hourly_fp'];
	$finance_cls4_hourly_req=$_POST['finance_cls4_hourly_req'];
	
	
	
	
	
	
	
	$query="UPDATE req1718 set		
								finance_cls3_dw_sp='$finance_cls3_dw_sp',
								finance_cls3_dw_fp ='$finance_cls3_dw_fp',
								finance_cls3_dw_req='$finance_cls3_dw_req',
								finance_cls3_contract_sp='$finance_cls3_contract_sp',
								finance_cls3_contract_fp='$finance_cls3_contract_fp',
						        finance_cls3_contract_req='$finance_cls3_contract_req',
                                finance_cls3_hourly_sp='$finance_cls3_hourly_sp',
                                finance_cls3_hourly_fp='$finance_cls3_hourly_fp',
                                finance_cls3_hourly_req='$finance_cls3_hourly_req',
                                
                                finance_cls4_dw_sp='$finance_cls4_dw_sp',
                                finance_cls4_dw_fp='$finance_cls4_dw_fp',
						        finance_cls4_dw_req='$finance_cls4_dw_req',
						        finance_cls4_contract_sp='$finance_cls4_contract_sp',
						        finance_cls4_contract_fp='$finance_cls4_contract_fp',
						        finance_cls4_contract_req='$finance_cls4_contract_req',
						        finance_cls4_hourly_sp='$finance_cls4_hourly_sp',
						        finance_cls4_hourly_fp='$finance_cls4_hourly_fp',
						        finance_cls4_hourly_req='$finance_cls4_hourly_req'  WHERE utd='$utd'";
						
								
                                
	$result=mysqli_query($connection,$query);
	if(!$result)  
	die("error:Data cannot be updated");  
	header('Location: self_finance.php');
}

?>