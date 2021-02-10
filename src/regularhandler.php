<?php
	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$utd=strtolower($_SESSION['username']);
if(isset($_POST['submit'])){
	$reg_cls3_perm_sp=$_POST['reg_cls3_perm_sp'];
	$reg_cls3_perm_fp=$_POST['reg_cls3_perm_fp'];
	$reg_cls3_perm_req=$_POST['reg_cls3_perm_req'];
	//$reg_cls3_dw_sp=$_POST['reg_cls3_dw_sp'];
	//$reg_cls3_dw_fp=$_POST['reg_cls3_dw_fp'];
	//$reg_cls3_dw_req=$_POST['reg_cls3_dw_req'];
	
	$reg_cls4_perm_sp=$_POST['reg_cls4_perm_sp'];
	$reg_cls4_perm_fp=$_POST['reg_cls4_perm_fp'];
	$reg_cls4_perm_req=$_POST['reg_cls4_perm_req'];
	//$reg_cls4_dw_sp=$_POST['reg_cls4_dw_sp'];
	//$reg_cls4_dw_fp=$_POST['reg_cls4_dw_fp'];
	//$reg_cls4_dw_req=$_POST['reg_cls4_dw_req'];
	
	$query="UPDATE req1718 set  reg_cls3_perm_sp='$reg_cls3_perm_sp',
	                            reg_cls3_perm_fp='$reg_cls3_perm_fp',
                             reg_cls3_perm_req='$reg_cls3_perm_req',
                                
                                                              
                                reg_cls4_perm_sp='$reg_cls4_perm_sp',
                                reg_cls4_perm_fp='$reg_cls4_perm_fp',
                                reg_cls4_perm_req='$reg_cls4_perm_req'
                                WHERE utd='$utd'";
	$result=mysqli_query($connection,$query);
if(!$result)  
	die("error:Data cannot be updated");
	header('Location: regular.php');
}

?>