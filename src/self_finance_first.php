<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
?> 
<html>
<head>
<style type="text/css">
td{
    width: 80px;
    max-width: 100px; /* add this */
    white-space: nowrap;
    overflow: hidden;
}

input{
	width:80px;
} 

</style>
<title>Requirement and Information Gathering System</title>
</head>
<?php 
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=$_SESSION['username'];
	$query="select flags from req1718 where utd='$utd'";
//$result=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($result);
//if($row['flags']==1){
	//header('Location: self_finance.php');
//}
	$query="update req1718 set flags=1 where utd='$utd'";
	$result = mysqli_query($connection,$query);
	
	if(!$result){
		
		die('flag update unsucessful');	
		}
?>





<body style="background-color:#ffff99;">
<center>
<div >
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3> <?php echo strtoupper($_SESSION['name']);?>   </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Office Staff - Self Finance</b> </div>

<form action="selffinancehandler.php" method="POST">
<div style="height:300px;">
	<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th></th>
			<th>Sanctioned Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>

			
			<th>Sanctioned Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			
		</tr>
		<tr>
			<td><b>Daily Wagers</b></td>
			<td><input type="number" name="finance_cls3_dw_sp"  value="0"  id="00"></td>
			<td><input type="number" name="finance_cls3_dw_fp"   value="0"  id="01"></td>
			<td><input type="number" name="finance_cls3_dw_req" value="0"   id="02"></td>
			


			<td><b>Daily Wagers</b></td>
			<td><input type="number" name="finance_cls4_dw_sp"  value="0"   id="30"></td>
			<td><input type="number" name="finance_cls4_dw_fp"  value="0"  id="31"></td>
			<td><input type="number" name="finance_cls4_dw_req" value="0"   id="32"></td>
			
		</tr>
			<tr>
			<td><b>Contract</b></td>
			<td><input type="number" name="finance_cls3_contract_sp"  value="0"  id="10"></td>
			<td><input type="number" name="finance_cls3_contract_fp"  value="0"  id="11"></td>
			<td><input type="number" name="finance_cls3_contract_req"  value="0"  id="12"></td>
			

			<td><b>Contract</b></td>
			<td><input type="number" name="finance_cls4_contract_sp" value="0"   id="40"></td>
			<td><input type="number" name="finance_cls4_contract_fp"  value="0"  id="41"></td>
			<td><input type="number" name="finance_cls4_contract_req"  value="0"  id="42"></td>
			
		</tr>
		<tr>
			<td><b>Hourly Basis</b></td>
			<td><input type="number" name="finance_cls3_hourly_sp"  value="0"   id="20"></td>
			<td><input type="number" name="finance_cls3_hourly_fp"  value="0"   id="21"></td>
			<td><input type="number" name="finance_cls3_hourly_req" value="0"   id="22"></td>
			


			<td><b>Hourly Basis</b></td>
			<td><input type="number" name="finance_cls4_hourly_sp"  value="0"  id="50"></td>
			<td><input type="number" name="finance_cls4_hourly_fp" value="0"   id="51"></td>
			<td><input type="number" name="finance_cls4_hourly_req"   value="0"  id="52"></td>
			
		</tr>
		<tr><td colspan="10">
	<center><input type="submit" onclick="" name="submit" value="Confirm and Save" style="width: 180px;"></center></td></tr>
</tbody>
</table>


	<br/><br/>

	
</div>
</form>
<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>