<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
		
		
			
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	
	$query = "select * from req1718 order by sno limit 0,999999";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
//	echo $number_of_rows;
	
	
	
?>  
<html>
<head>
<title>Requirement and Information Gathering System</title>
<style>
tr:nth-child(even){
		background-color: #ede8dd;
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="min-height:650px;">
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:170px; height:170px; margin-bottom:20px;">
    <div class="header"><h2>Admin Module</h2></div>
     <div style="color:blue; margin-bottom:10px; font-size:18px;"> <b> Summary of Required Personnels</b> </div>

<div >


<table border="5" cellspacing="5" cellpadding="5">
	<tbody>
	
	<tr style="color:green;">
		<th>Schools / Departments</th>
		<th colspan="1">Class III (R)</th>
		<th colspan="1">Class IV (R)</th>
		<th colspan="3">Class III (SF)</th>
		<th colspan="3">Class IV (SF)</th>
	<!--	<th>Additional <br>Req.</th>-->
		<th></th>

	</tr>		
	<tr style="color:red;">
		<th></th>
	<th>PM</th> 
	<!--	<th>DW</th> -->
		<th>PM</th> 
	<!--	<th>DW</th> -->
		<th>DW</th>
		<th>CB</th>
		<th>HB</th>
		<th>DW</th>
		<th>CB</th>
		<th>HB</th>
		<!--<th></th>-->
		<th></th>

	</tr>

<?php 
//$counter=1;
			//	for($i=0;$i<$number_of_rows;$i++){
				while ($row = mysqli_fetch_assoc($result)) {
					$s=$row['utd'];
					$another="select name from admins where username='$s' ";
					$res=mysqli_query($connection,$another);
					$v=mysqli_fetch_array($res);
					$namme=$v[0];
		//	echo $row["utd"];
?>

	<tr><form  action="viewreq.php" >
		<td><input type="hidden" name="utd" value="<?php echo strtoupper($row['utd']);?>"><span style='color:blue'><b><?php echo strtoupper($namme);?></b></span></td>
		<td><?php echo $row['reg_cls3_perm_req'];?></td> 
	<!--	<td><?php echo $row['reg_cls3_dw_req'];?></td>  -->
		<td><?php echo $row['reg_cls4_perm_req'];?></td>   
	<!--	<td><?php echo $row['reg_cls4_dw_req'];?></td>  -->
		<td><?php echo $row['finance_cls3_dw_req'];?></td>
		<td><?php echo $row['finance_cls3_contract_req'];?></td>
		<td><?php echo $row['finance_cls3_hourly_req'];?></td>
		<td><?php echo $row['finance_cls4_dw_req'];?></td>
		<td><?php echo $row['finance_cls4_contract_req'];?></td>
		<td><?php echo $row['finance_cls4_hourly_req'];?></td>
		
		<td><input type="submit" name="view" value="View"></td>
		</form>
	</tr>
	
	<?php }
	$query2= 'select sum(reg_cls3_perm_req), sum(reg_cls3_dw_req),sum(reg_cls4_perm_req),sum(reg_cls4_dw_req),sum(finance_cls3_dw_req),sum(finance_cls3_contract_req),sum(finance_cls3_hourly_req),sum(finance_cls4_dw_req),sum(finance_cls4_contract_req),sum(finance_cls4_hourly_req) from req1718;';
	$result2=mysqli_query($connection, $query2);
	$row2=mysqli_fetch_assoc($result2);
	?>
	<tr>
	<td><span style='color:blue'><b>TOTAL</b></span></td>
	<td><?php echo $row2['sum(reg_cls3_perm_req)'];?></td>  
	<!--	<td><?php echo $row2['sum(reg_cls3_dw_req)'];?></td> -->
		<td><?php echo $row2['sum(reg_cls4_perm_req)'];?></td> 
	<!--	<td><?php echo $row2['sum(reg_cls4_dw_req)'];?></td> -->
		<td><?php echo $row2['sum(finance_cls3_dw_req)'];?></td>
		<td><?php echo $row2['sum(finance_cls3_contract_req)'];?></td>
		<td><?php echo $row2['sum(finance_cls3_hourly_req)'];?></td>
		<td><?php echo $row2['sum(finance_cls4_dw_req)'];?></td>
		<td><?php echo $row2['sum(finance_cls4_contract_req)'];?></td>
		<td><?php echo $row2['sum(finance_cls4_hourly_req)'];?></td>
	
	
	</td>
	</tbody>
</table>

</div>
</div>
</center>
<center>
<a href="admin_home.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>
<p style="color: brown;font-weight: bold;">Please Note: R: Regular, SF: Self Finance.<br>
PM: Permanent Wagers, DW: Daily Wagers, CB: Contract Basis, HB: Hourly Basis.
</p></center>
</body>
</html>