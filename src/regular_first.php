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
	$query="select flagr from req1718 where utd='$utd'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
if($row['flagr']==1){
	header('Location: regular.php');
}
	$query="update req1718 set flagr=1 where utd='$utd'";
	$result = mysqli_query($connection,$query);
	
	if(!$result){
		
		die('flagr update unsucessful');	
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
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Office Staff - Regular</b> </div>

<form action="regularhandler.php" method="POST">
<div style="height: 250px;">
	<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: red;"><th colspan="4"><center>Class III</center></th><th colspan="4"><center>Class IV</center></th></tr>
		<tr>
			<th></th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			
		</tr>
	
	<tr>

	<td><b>Permanent</b></td>
	<td><input type="number" value="0"  name="reg_cls3_perm_sp" id="00"></td>
	<td><input type="number" value="0" name="reg_cls3_perm_fp" id="01"></td>
	<td><input type="number" value="0" name="reg_cls3_perm_req" id="02"></td>
	


	<td><b>Permanent</b></td>
			<td><input type="number" value="0" name="reg_cls4_perm_sp" id="20"></td>
			<td><input type="number" value="0" name="reg_cls4_perm_fp" id="21"></td>
			<td><input type="number" value="0" name="reg_cls4_perm_req" id="22"></td>
			
		
	</tr>
		<!--	<tr>
			<td><b>Daily Wagers</b></td>
			<td><input type="number" value="0" name="reg_cls3_dw_sp" id="10"></td>
			<td><input type="number" value="0" name="reg_cls3_dw_fp" id="11"></td>
			<td><input type="number" value="0" name="reg_cls3_dw_req" id="12"></td>
			


			<td><b>Daily Wagers</b></td>
			<td><input type="number" value="0"  name="reg_cls4_dw_sp" id="30"></td>
			<td><input type="number" value="0"  name="reg_cls4_dw_fp" id="31"></td>
			<td><input type="number" value="0" name="reg_cls4_dw_req" id="32"></td>
	
		
		</tr> 	-->	
		<tr><td colspan="10"><center><input type="submit" onclick="" name="submit" value="Confirm and Save" style="width: 180px;"></center></td></tr>
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