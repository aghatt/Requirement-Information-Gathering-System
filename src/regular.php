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
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Office Staff - Regular</b> </div>

<form action="regularhandler.php" method="POST">
<div style="height: 250px;">
	<table border="5"  cellspacing="8" cellpadding="8"  >
		<tbody>
		<tr style="color: red;"><th colspan="5"><center>Class III</center></th><th colspan="5"><center>Class IV</center></th></tr>
		<tr>
			<th></th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>
			<th></th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			<th></th>
		</tr>
	
	<tr>

	<td><b>Permanent</b></td>
	<td><input type="number" value="<?php echo $row['reg_cls3_perm_sp']; ?>" readonly="readonly" name="reg_cls3_perm_sp" id="00"></td>
	<td><input type="number" readonly="readonly" value="<?php echo $row['reg_cls3_perm_fp']; ?>" name="reg_cls3_perm_fp" id="01"></td>
	<td><input type="number" readonly="readonly" value="<?php echo $row['reg_cls3_perm_req']; ?>" name="reg_cls3_perm_req" id="02"></td>
	<td><input type="button" name="edit" onclick="click1();" value="Edit" ></td>


	<td><b>Permanent</b></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_perm_sp']; ?>" readonly="readonly" name="reg_cls4_perm_sp" id="20"></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_perm_fp']; ?>" readonly="readonly" name="reg_cls4_perm_fp" id="21"></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_perm_req']; ?>" readonly="readonly" name="reg_cls4_perm_req" id="22"></td>
			<td><input type="button" name="edit" onclick="click3();" value="Edit" ></td>
		
	</tr>
		<!--	<tr>
			<td><b>Daily Wagers</b></td>
			<td><input type="number" value="<?php echo $row['reg_cls3_dw_sp']; ?>" readonly="readonly" name="reg_cls3_dw_sp" id="10"></td>
			<td><input type="number" value="<?php echo $row['reg_cls3_dw_fp']; ?>" readonly="readonly" name="reg_cls3_dw_fp" id="11"></td>
			<td><input type="number" value="<?php echo $row['reg_cls3_dw_req']; ?>" readonly="readonly" name="reg_cls3_dw_req" id="12"></td>
			<td><input type="button" name="edit" onclick="click2();" value="Edit"></td>


			<td><b>Daily Wagers</b></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_dw_sp']; ?>"  readonly="readonly" name="reg_cls4_dw_sp" id="30"></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_dw_fp']; ?>"  readonly="readonly" name="reg_cls4_dw_fp" id="31"></td>
			<td><input type="number" value="<?php echo $row['reg_cls4_dw_req']; ?>" readonly="readonly" name="reg_cls4_dw_req" id="32"></td>
			<td><input type="button" name="edit" onclick="click4();" value="Edit"></td>
		
		</tr> -->
		<tr><td colspan="10"><center><input type="submit" onclick="" name="submit" value="Confirm & Save" style="width: 180px;"></center></td></tr>
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