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
<script>
function click1(){
	myel1=document.getElementById("00");
	myel2=document.getElementById("01");
	myel3=document.getElementById("02");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click2(){
	myel1=document.getElementById("10");
	myel2=document.getElementById("11");
	myel3=document.getElementById("12");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click3(){
	myel1=document.getElementById("20");
	myel2=document.getElementById("21");
	myel3=document.getElementById("22");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click4(){
	myel1=document.getElementById("30");
	myel2=document.getElementById("31");
	myel3=document.getElementById("32");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click5(){
	myel1=document.getElementById("40");
	myel2=document.getElementById("41");
	myel3=document.getElementById("42");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click6(){
	myel1=document.getElementById("50");
	myel2=document.getElementById("51");
	myel3=document.getElementById("52");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
</script>
</head>
<?php 
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=$_SESSION['username'];
	$query="select * from req1718 where utd='$utd'";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
	if($number_of_rows >0){
		
				
		$row = mysqli_fetch_assoc($result);		
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
		<tr style="color: red;"><th colspan="5"><center>Class III</center></th><th colspan="5"><center>Class IV</center></th></tr>
		<tr>
			<th></th>
			<th>Sanctioned <br>Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>

			<th></th>
			<th>Sanctioned <br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>
		</tr>
		<tr>
			<td><b>Daily Wagers</b></td>
			<td><input type="number" name="finance_cls3_dw_sp"  value="<?php echo $row['finance_cls3_dw_sp']; ?>" readonly="readonly" id="00"></td>
			<td><input type="number" name="finance_cls3_dw_fp"   value="<?php echo $row['finance_cls3_dw_fp']; ?>" readonly="readonly" id="01"></td>
			<td><input type="number" name="finance_cls3_dw_req" value="<?php echo $row['finance_cls3_dw_req']; ?>"  readonly="readonly" id="02"></td>
			<td><input type="button" name="Edit" onclick="click1();" value="Edit" ></td>


			<td><b>Daily Wagers</b></td>
			<td><input type="number" name="finance_cls4_dw_sp"  value="<?php echo $row['finance_cls4_dw_sp']; ?>"  readonly="readonly" id="30"></td>
			<td><input type="number" name="finance_cls4_dw_fp"  value="<?php echo $row['finance_cls4_dw_fp']; ?>" readonly="readonly" id="31"></td>
			<td><input type="number" name="finance_cls4_dw_req" value="<?php echo $row['finance_cls4_dw_req']; ?>"  readonly="readonly" id="32"></td>
			<td><input type="button" name="Edit" onclick="click4();" value="Edit" ></td>
		</tr>
			<tr>
			<td><b>Contract</b></td>
			<td><input type="number" name="finance_cls3_contract_sp"  value="<?php echo $row['finance_cls3_contract_sp']; ?>" readonly="readonly" id="10"></td>
			<td><input type="number" name="finance_cls3_contract_fp"  value="<?php echo $row['finance_cls3_contract_fp']; ?>" readonly="readonly" id="11"></td>
			<td><input type="number" name="finance_cls3_contract_req"  value="<?php echo $row['finance_cls3_contract_req']; ?>" readonly="readonly" id="12"></td>
			<td><input type="button" name="Edit" onclick="click2();" value="Edit"></td>

			<td><b>Contract</b></td>
			<td><input type="number" name="finance_cls4_contract_sp" value="<?php echo $row['finance_cls4_contract_sp']; ?>"  readonly="readonly" id="40"></td>
			<td><input type="number" name="finance_cls4_contract_fp"  value="<?php echo $row['finance_cls4_contract_fp']; ?>" readonly="readonly" id="41"></td>
			<td><input type="number" name="finance_cls4_contract_req"  value="<?php echo $row['finance_cls4_contract_req']; ?>" readonly="readonly" id="42"></td>
			<td><input type="button" name="Edit" onclick="click5();" value="Edit"></td>
		</tr>
		<tr>
			<td><b>Hourly Basis</b></td>
			<td><input type="number" name="finance_cls3_hourly_sp"  value="<?php echo $row['finance_cls3_hourly_sp']; ?>"  readonly="readonly" id="20"></td>
			<td><input type="number" name="finance_cls3_hourly_fp"  value="<?php echo $row['finance_cls3_hourly_fp']; ?>"  readonly="readonly" id="21"></td>
			<td><input type="number" name="finance_cls3_hourly_req" value="<?php echo $row['finance_cls3_hourly_req']; ?>"  readonly="readonly" id="22"></td>
			<td><input type="button" name="Edit" onclick="click3();" value="Edit"></td>


			<td><b>Hourly Basis</b></td>
			<td><input type="number" name="finance_cls4_hourly_sp"  value="<?php echo $row['finance_cls4_hourly_sp']; ?>" readonly="readonly" id="50"></td>
			<td><input type="number" name="finance_cls4_hourly_fp" value="<?php echo $row['finance_cls4_hourly_fp']; ?>"  readonly="readonly" id="51"></td>
			<td><input type="number" name="finance_cls4_hourly_req"   value="<?php echo $row['finance_cls4_hourly_req']; ?>" readonly="readonly" id="52"></td>
			<td><input type="button" name="Edit" onclick="click6();" value="Edit"></td>
		</tr>
		<tr><td colspan="10">
	<center><input type="submit" onclick="" name="submit" value="Confirm & Save" style="width: 180px;"></center></td></tr>
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