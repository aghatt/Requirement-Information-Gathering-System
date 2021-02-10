<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: login.php");   }          




	
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
		
	//$utd=strtolower($_SESSION['username']);
		$utd=$_GET['utd'];
	$query="select * from memo where utd = '$utd' order by name";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
			
?>  
<html>
<head>
<title>Requirement and Information Gathering System</title>
<style>
tr:nth-child(even){
		background-color: #ede8dd;
}
.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: red;}
    to {color: black;}
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style=" min-height:600px;">
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
    <div class="header"><h2>Admin Module</h2></div>
     <div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Memorandum of Understanding (MoU)</b><br/><b>with</b><br/><b>Organizations</b> </div>
     
<br>
<div >



<?php  

if($number_of_rows >0){
	
	$count=1;
		 
?>
<table border="5" cellpadding="5" cellspacing="5">
	<tbody>
		<tr>
			<th>S No.</th>
			<th>Name of Org.</th>
			<th>City</th>
			<th>State</th>
			<th>Start Date</th>
			<th>Duration</th>
			<th></th>

		</tr>
		
	<?php	while ($row = mysqli_fetch_row($result)) {


//<!---------------php loop ------------------- -->
	?>	
		<tr>
		<form action="memo_a.php" method="GET">
		<th name="sno"><?php echo $count++;?></th>
			<td><center><input type="text" readonly name="nameoforg" value="<?php echo $row[1];?>"></center></td>
			<td><input type="text" readonly name="city" value="<?php echo $row[3];?>"></td>
			<td><input type="text" readonly name="state" value="<?php echo $row[4];?>"></td>
			<td><input type="text" readonly style="width:80px;" name="date" value="<?php echo $row[8];?>"></td>
			<td><input type="text" readonly style="width:60px;" name="duration" value="<?php echo $row[11];?>"></td>
			<input type="hidden" name="utd" value="<?php echo $utd;?>">
			<td><input type="submit" name="view" value="View"></td>
			</form>
			
			
			
<?php
}}else{
	?>
	<div class="flash" style="font-size:20px;padding-top:20px; min-height:100px; font-weight: bold;">
<?php echo "No Data uploaded!!";}?>


	</tbody>
</table>

</div>

</center>
<a href="admin_home.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>


</body>
</html>