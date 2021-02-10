<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             

include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=strtolower($_SESSION['username']);
	
	$query="select *  from req1718 where utd = '$utd'";
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
		background-color: #ede8dd;
}

td{
    width: 80px;
    max-width: 100px; 
    white-space: nowrap;
    overflow: hidden;
}

</style>
<script>
var sum1=
<?php echo $row['reg_cls3_perm_sp'];?>+
<?php echo $row['reg_cls3_perm_fp'];?>+
<?php echo $row['reg_cls3_perm_req'];?>+
<?php echo $row['reg_cls4_perm_sp']?>+
<?php echo $row['reg_cls4_perm_fp']?>+
<?php echo $row['reg_cls4_perm_req']?>+
<?php echo $row['reg_cls3_dw_sp']; ?>+
<?php echo $row['reg_cls3_dw_fp']; ?>+
<?php echo $row['reg_cls3_dw_req'];?>+
<?php echo $row['reg_cls4_dw_sp']; ?>+
<?php echo $row['reg_cls4_dw_fp']; ?>+
<?php echo $row['reg_cls4_dw_req'];?>;
var sum2=
<?php echo $row['finance_cls3_dw_sp']; ?>+
<?php echo $row['finance_cls3_dw_fp']; ?>+
<?php echo $row['finance_cls4_dw_sp']; ?>+
<?php echo $row['finance_cls3_dw_req']; ?>+
<?php echo $row['finance_cls4_dw_fp']; ?>+
<?php echo $row['finance_cls4_dw_req'];?>+
<?php echo $row['finance_cls3_contract_sp']; ?>+
<?php echo $row['finance_cls3_contract_fp']; ?>+
<?php echo $row['finance_cls3_contract_req'];?>+
<?php echo $row['finance_cls4_contract_sp']; ?>+
<?php echo $row['finance_cls4_contract_fp']; ?>+
<?php echo $row['finance_cls4_contract_req'];?>+
<?php echo $row['finance_cls3_hourly_sp']; ?>+
<?php echo $row['finance_cls3_hourly_fp']; ?>+
<?php echo $row['finance_cls3_hourly_req']; ?>+
<?php echo $row['finance_cls4_hourly_sp']; ?>+
<?php echo $row['finance_cls4_hourly_fp']; ?>+
<?php echo $row['finance_cls4_hourly_req']; ?>;
</script>
</head>
<body style="background-color:#ffff99;">
<center>
<div >
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3><?php echo strtoupper($_SESSION['name']);?></h3></div>
     <div style="color:blue; margin-bottom:10px; font-size:18px;"> <b> View All Requirements & Information</b> </div>
     <br/>
<div>
	<div id='regular'>
	<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="8"><center>Office Staff - Regular</center></th></tr>
		
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th>Post</th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>



			<th>Post</th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Permanent</b></th>
			<td><?php echo $row['reg_cls3_perm_sp'];?></td>
			<td><?php echo $row['reg_cls3_perm_fp'];?></td>
			<td><?php echo $row['reg_cls3_perm_req'];?></td>


			<th><b>Permanent</b></th>
			<td><?php echo $row['reg_cls4_perm_sp']?></td>
			<td><?php echo $row['reg_cls4_perm_fp']?></td>
			<td><?php echo $row['reg_cls4_perm_req']?></td>
		</tr> 
	<!--	<tr>
			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['reg_cls3_dw_sp']; ?></td>
			<td><?php echo $row['reg_cls3_dw_fp']; ?></td>
			<td><?php echo $row['reg_cls3_dw_req'];?></td>


			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['reg_cls4_dw_sp']; ?></td>
			<td><?php echo $row['reg_cls4_dw_fp']; ?></td>
			<td><?php echo $row['reg_cls4_dw_req'];?></td>
		</tr>    -->

</tbody>
</table>
<script>
if(sum1==0){
	table1=document.getElementById('regular');
	table1.style.display='none';
}

</script>

<br/><br/>
	</div>
	
<div id='self'>
<table border="5"   cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="8"><center>Office Staff - Self Finance</center></th></tr>
		
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th>Post</th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>


			<th>Post</th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['finance_cls3_dw_sp']; ?></td>
			<td><?php echo $row['finance_cls3_dw_fp']; ?></td>
			<td><?php echo $row['finance_cls3_dw_req']; ?></td>



			<th><b>Daily Wagers</b></th>
			<td><?php echo $row['finance_cls4_dw_sp']; ?></td>
			<td><?php echo $row['finance_cls4_dw_fp']; ?></td>
			<td><?php echo $row['finance_cls4_dw_req'];?></td>
		</tr>
			<tr>
			<th><b>Contract</b></th>
			<td><?php echo $row['finance_cls3_contract_sp']; ?></td>
			<td><?php echo $row['finance_cls3_contract_fp']; ?></td>
			<td><?php echo $row['finance_cls3_contract_req'];?></td>



			<th><b>Contract</b></th>
			<td><?php echo $row['finance_cls4_contract_sp']; ?></td>
			<td><?php echo $row['finance_cls4_contract_fp']; ?></td>
			<td><?php echo $row['finance_cls4_contract_req'];?></td>
		</tr>
		<tr>
			<th><b>Hourly Basis</b></th>
			<td><?php echo $row['finance_cls3_hourly_sp']; ?></td>
			<td><?php echo $row['finance_cls3_hourly_fp']; ?></td>
			<td><?php echo $row['finance_cls3_hourly_req']; ?></td>




			<th><b>Hourly Basis</b></th>
			<td><?php echo $row['finance_cls4_hourly_sp']; ?></td>
			<td><?php echo $row['finance_cls4_hourly_fp']; ?></td>
			<td><?php echo $row['finance_cls4_hourly_req']; ?></td>
		</tr>
</tbody>
</table><script>
if(sum2==0){
	table2=document.getElementById('self');
	table2.style.display='none';
}

</script>
</div>
<!--
	<br/><br/>
<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="4"><center>Additional Requirements</center></th></tr>
		
		<tr>
			<th>Posts</th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<tr>
			<th><b>Security Personell</b></th>
			<td><?php echo $row['add_security_sp']; ?></td>
			<td><?php echo $row['add_security_fp']; ?></td>
			<td><?php echo $row['add_security_req']; ?></td>
		</tr>
			<tr>
			<th><b>Plumber/Fitters</b></th>
			<td><?php echo $row['add_plumber_sp']; ?></td>
			<td><?php echo $row['add_plumber_fp']; ?></td>
			<td><?php echo $row['add_plumber_req']; ?></td>
		</tr>
		<tr>
			<th><b>Civil Workers</b></th>
			<td><?php echo $row['add_civil_sp']; ?></td>
			<td><?php echo $row['add_civil_fp']; ?></td>
			<td><?php echo $row['add_civil_req']; ?></td>
		</tr>

		<tr>
			<th><b>Electrician</b></th>
			<td><?php echo $row['add_electrician_sp']; ?></td>
			<td><?php echo $row['add_electrician_fp']; ?></td>
			<td><?php echo $row['add_electrician_req']; ?></td>
		</tr>
			
</tbody>
</table>

</div>

-->

<br/><br/>


		<?php 
			$query1 = "select sum(req) from addreq where utd = '$utd'";
			$result1 = mysqli_query($connection,$query1);
			$row=mysqli_fetch_array($result1);
			if($row[0]>0){?>
			<table border="5" id='add' cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: green;"><th colspan="4"><center>Additional Requirements</center></th></tr>
		
		<tr>
		
			<th>Posts</th>
			<th>Sanctioned<br>Post</th>
			<th>Filled Up</th>
			<th>Required</th>
		</tr>
		<?php
			$query = "select * from addreq where utd = '$utd'";
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
			
		
			<th><?php echo  $post;?></th>
			<td><?php echo  $sp;?></td>
			<td><?php echo  $fp;?></td>
			<td><?php echo  $req;?></td>
		</tr>
			
			
			<?php } }
			} ?>
			
			
</tbody>
</table>






<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;margin-top:80px;"><< <b>Back to Home</b></a>
</div>
</center>

</body>
</html>