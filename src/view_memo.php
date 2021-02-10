<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: login.php");   }

			
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
		
	$utd=strtolower($_SESSION['username']);

	$query="select * from memo where utd = '$utd'";
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
<div >
   
  <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3>  <?php echo strtoupper($_SESSION['name']);?> </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Memorandum of Understanding(MOU)</b><br/><b>with</b><br/><b>Organizations</b> </div>

<div style="padding-top: 20px; min-height: 100px;">
<?php 

if($number_of_rows >0){
		 while ($row = mysqli_fetch_row($result)) {

?>

<table cellpadding="10px" cellspacing="10px" border="2" >
	<tbody>
		<tr>
			<th>Name of Organization</th>
			<td > <?php echo $row[1];?> </td>
		
			<th>Type of Organization</th>
			<td > <?php echo $row[2];?> </td>
		</tr>

		<tr>
			<th>City</th>
			<td > <?php echo $row[1];?> </td>
		
			<th>State</th>
			<td > <?php echo $row[2];?> </td>
		</tr>


		<tr>
			<th>Nature of Organization</th>
			<td colspan="3"> <?php echo $row[3];?>  </td>
		</tr>
		<tr>
			<th>Level</th>
			<td colspan="3">  <?php echo $row[4];?> </td>
		</tr>
		<tr>
			<th>Purpose</th>
			<td colspan="3"><?php echo $row[5];?>  </td>
		</tr>
		<tr>
			<th>Start Date</th>
			<td>  <?php echo $row[6];?></td>
		
			<th>Duration</th>
			<td> <?php echo $row[9];?> years</td>
		</tr>
		<tr>
			<th>Beneficiaries</th>
			<td colspan="3">  <?php echo $row[7];?></td>
		</tr>
		<tr>
			<th>Expected Outcome</th>
			<td colspan="3"> <?php echo $row[8];?> </td>
		</tr>
		
	</tbody>
</table>
<br/>
	
<?php } }
else{
	?>
	<div class="flash" style="font-size:20px;padding-top:20px; min-height:100px; font-weight: bold;">
<?php echo "No Data Found!!";}?>
</div>



<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>