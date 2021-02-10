<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
		
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=$_SESSION['username'];
	$query="select sum(reg_cls3_perm_sp),sum(reg_cls3_perm_fp),sum(reg_cls3_perm_req),sum(reg_cls3_dw_sp),sum(reg_cls3_dw_fp),sum(reg_cls3_dw_req),sum(reg_cls4_perm_sp),sum(reg_cls4_perm_fp),sum(reg_cls4_perm_req),sum(reg_cls4_dw_sp),sum(reg_cls4_dw_fp),sum(reg_cls4_dw_req),sum(finance_cls3_dw_sp),sum(finance_cls3_dw_fp),sum(finance_cls3_dw_req),sum(finance_cls3_contract_sp),sum(finance_cls3_contract_fp),sum(finance_cls3_contract_req),sum(finance_cls3_hourly_sp),sum(finance_cls3_hourly_fp),sum(finance_cls3_hourly_req),sum(finance_cls4_dw_sp),sum(finance_cls4_dw_fp),sum(finance_cls4_dw_req),sum(finance_cls4_contract_sp),sum(finance_cls4_contract_fp),sum(finance_cls4_contract_req),sum(finance_cls4_hourly_sp),sum(finance_cls4_hourly_fp),sum(finance_cls4_hourly_req),sum(add_security_sp),sum(add_security_fp),sum(add_security_req),sum(add_plumber_sp),sum(add_plumber_fp),sum(add_plumber_req),sum(add_civil_sp),sum(add_civil_fp),sum(add_civil_req),sum(add_electrician_sp) ,sum(add_electrician_fp),sum(add_electrician_req)  from req1718";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
	if($number_of_rows >0){
		$row = mysqli_fetch_assoc($result);		
		}

?>				
<html>
<head>
<title>Requirement and Information Gathering System</title>

<style>
tr:nth-child(even){
		background-color: #ede8dd;	}
td{
    width: 80px;
    max-width: 100px; 
    white-space: nowrap;
    overflow: hidden;	}
</style>

</head>
<body style="background-color:#ffff99;">
<center>
<div >
   
   
    <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:170px; height:170px; margin-bottom:20px;">
    <div class="header"><h2>Admin Module</h2></div>
     <div style="color:blue; margin-bottom:10px; font-size:18px;"> <b> View All Requirement & Information</b> </div>
     <br/>
<div>
	
	<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="8"><center>Office Staff - Regular</center></th></tr>
		
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th>Post</th>
			<th>Sanctioned <br>Post</th>
			<th>Filled Up</th>
			<th>Required</th>


			<th>Post</th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Permanent</b></th>
			<td><?php echo $row['sum(reg_cls3_perm_sp)'];?></td>
			<td><?php echo $row['sum(reg_cls3_perm_fp)'];?></td>
			<td><?php echo $row['sum(reg_cls3_perm_req)'];?></td>


			<th><b>Permanent</b></th>
			<td><?php echo $row['sum(reg_cls4_perm_sp)']?></td>
			<td><?php echo $row['sum(reg_cls4_perm_fp)']?></td>
			<td><?php echo $row['sum(reg_cls4_perm_req)']?></td>
		</tr>
			<tr>
			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['sum(reg_cls3_dw_sp)']; ?></td>
			<td><?php echo $row['sum(reg_cls3_dw_fp)']; ?></td>
			<td><?php echo $row['sum(reg_cls3_dw_req)']; ?></td>


			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['sum(reg_cls4_dw_sp)']; ?></td>
			<td><?php echo $row['sum(reg_cls4_dw_fp)']; ?></td>
			<td><?php echo $row['sum(reg_cls4_dw_req)']; ?></td>
		</tr>
</tbody>
</table>
<br/><br/>

<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="8"><center>Office Staff - Self Finance</center></th></tr>
		
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th>Post</th>
			<th>Sanctioned <br>Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		

			<th>Post</th>
			<th>Sanctioned <br>Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['sum(finance_cls3_dw_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_dw_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_dw_req)']; ?></td>
		
			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['sum(finance_cls4_dw_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_dw_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_dw_req)']; ?></td>
		</tr>
	
		<tr>
			<th><b>Contract</b></th>
			<td><?php echo $row['sum(finance_cls3_contract_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_contract_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_contract_req)']; ?></td>


			<th><b>Contract</b></th>
			<td><?php echo $row['sum(finance_cls4_contract_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_contract_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_contract_req)']; ?></td>
		</tr>
		<tr>
			<th><b>Hourly Basis</b></th>
			<td><?php echo $row['sum(finance_cls3_hourly_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_hourly_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls3_hourly_req)']; ?></td>

			<th><b>Hourly Basis</b></th>
			<td><?php echo $row['sum(finance_cls4_hourly_sp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_hourly_fp)']; ?></td>
			<td><?php echo $row['sum(finance_cls4_hourly_req)']; ?></td>
		</tr>
</tbody>
</table>
<br/><br/>
<!--
<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="4"><center>Additional Requirements</center></th></tr>
				
		<tr>
			<th>Posts</th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Security Personell</b></th>
			<td><?php echo $row['sum(add_security_sp)']; ?></td>
			<td><?php echo $row['sum(add_security_fp)']; ?></td>
			<td><?php echo $row['sum(add_security_req)']; ?></td>
		</tr>
			<tr>
			<th><b>Plumber/Fitters</b></th>
			<td><?php echo $row['sum(add_plumber_sp)']; ?></td>
			<td><?php echo $row['sum(add_plumber_fp)']; ?></td>
			<td><?php echo $row['sum(add_plumber_req)']; ?></td>
		</tr>
		<tr>
			<th><b>Civil Workers</b></th>
			<td><?php echo $row['sum(add_civil_sp)']; ?></td>
			<td><?php echo $row['sum(add_civil_fp)']; ?></td>
			<td><?php echo $row['sum(add_civil_req)']; ?></td>
		</tr>

		<tr>
			<th><b>Electrician</b></th>
			<td><?php echo $row['sum(add_electrician_sp)']; ?></td>
			<td><?php echo $row['sum(add_electrician_fp)']; ?></td>
			<td><?php echo $row['sum(add_electrician_req)']; ?></td>
		</tr>
			
</tbody>
</table>

</div>
-->

<br/><br/>

<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="5"><center>Additional Requirements</center></th></tr>
		<tr>
			<th>utd name</th>
			<th>Posts</th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<?php 
			$query = "select * from addreq ";
			$result = mysqli_query($connection,$query);
			$number_of_rows=mysqli_num_rows($result);
			if($number_of_rows>0){
				
				//$temp_array[] = mysqli_fetch_array($result);
		//	}
			while ($row = mysqli_fetch_assoc($result)){
			//for($i=0;$i<$number_of_rows;$i++){
				//	$row  =  $temp_array[$i];
					$utds =  $row['utd'];
					$post =  $row['post'];
					$sp   =  $row['sp'];
					$fp =    $row['fp'];
					$req  =   $row['req'];
			
		?>
		<tr>
			
			<th><?php echo $utds;?></th>	
			<td><?php echo  $post;?></td>
			<td><?php echo  $sp;?></td>
			<td><?php echo  $fp;?></td>
			<td><?php echo  $req;?></td>
		</tr>
			
			
			<?php }}else{echo "data not found";} ?>
			
			
</tbody>
</table>









<a href="admin_home.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;margin-top:80px;"><< <b>Back to Home</b></a>
</div>
</center>
</body>
</html>