<?php
	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$utd=strtolower($_SESSION['username']);
$counter=$_POST['counter'];
/* if(isset($_POST['submit'])){
	
	$add_security_sp=$_POST['add_security_sp'];
	$add_security_fp=$_POST['add_security_fp'];
	$add_security_req=$_POST['add_security_req'];
	$add_plumber_sp=$_POST['add_plumber_sp'];
	$add_plumber_fp=$_POST['add_plumber_fp'];
	$add_plumber_req=$_POST['add_plumber_req'];
	$add_civil_sp=$_POST['add_civil_sp'];
	$add_civil_fp=$_POST['add_civil_fp'];
	$add_civil_req=$_POST['add_civil_req'];
	$add_electrician_sp=$_POST['add_electrician_sp'];
	$add_electrician_fp=$_POST['add_electrician_fp'];
	$add_electrician_req=$_POST['add_electrician_req'];
	
	
	$query="UPDATE req1718 set  
	                            
			add_security_sp='$add_security_sp',
            add_security_fp='$add_security_fp',
            add_security_req='$add_security_req',
            add_plumber_sp='$add_plumber_sp',
            add_plumber_fp='$add_plumber_fp',
            add_plumber_req='$add_plumber_req',
            add_civil_sp='$add_civil_sp',
            add_civil_fp='$add_civil_fp',
            add_civil_req='$add_civil_req',
            add_electrician_sp='$add_electrician_sp',
            add_electrician_fp='$add_electrician_fp',
            add_electrician_req='$add_electrician_req' WHERE utd='$utd'";
			$result=mysqli_query($connection,$query);
if(!$result)  
	die("error:Data cannot be updated");  
echo $query."   ".$counter."     "; */
for($i=1;$i<=$counter;$i++){
		if(($_POST['other'.$i.'_post'])!=''){
			$other_post=$_POST['other'.$i.'_post'];
		}
		else{$other_post="Not Mentioned";}
		
		if(($_POST['other'.$i.'_sp'])!=''){
			$other_sp=$_POST['other'.$i.'_sp'];
		}
		else{$other_sp=0;}
		
		if(($_POST['other'.$i.'_fp'])!=''){
			$other_fp=$_POST['other'.$i.'_fp'];
		}
		else{$other_fp=0;}
		
		if(($_POST['other'.$i.'_req'])!=''){
			$other_req=$_POST['other'.$i.'_req'];
		}
		else{$other_req=0;}
		
		
		
		//$other_post=$_POST['other'.$i.'_post'];
		//$other_sp=$_POST['other'.$i.'_sp'];
		//$other_fp=$_POST['other'.$i.'_fp'];
		//$other_req=$_POST['other'.$i.'_req'];
		$query="insert into addreq values('{$utd}','{$other_post}',{$other_sp},{$other_fp},{$other_req})";
	
		$result=mysqli_query($connection,$query);
		if(!$result)  
				die("error:Additional Data cannot be updated ");  
				
	}
	
	//header('Location: add_req.php');
//}
//else{
	//echo "Server is down.";
//}

header('Location: view_add_req.php');
?>