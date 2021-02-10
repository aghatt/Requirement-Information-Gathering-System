<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: login.php");   }

		$utd=$_SESSION['username'];	
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
		$nameoforg=$_GET['nameoforg']; 
		$city=$_GET['city'];
		$state=$_GET['state'];
		$date=$_GET['date'];
		$duration=$_GET['duration'];
		
		
?> 
<html>
<head>
<title>Requirement and Information Gathering System</title>
<style type="text/css">
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
<style>
tr:nth-child(even){
		background-color: #ede8dd;	}
td{
    width: 250px;
    max-width: 500px; 
    white-space: nowrap;
    overflow: auto;	}
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
     <div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Memorandum of Understanding(MOU)</b><br/><b>with</b><br/><b>Organizations</b> </div>
     <br/>
	 
	 
	 <?php 
		
	 
	 
	 $q="select * from admins where username = '$utd' ";
	$res = mysqli_query($connection,$q);
	$r = mysqli_fetch_assoc($res);?>
	
     
	 
	 <div style=" margin-bottom:10px; font-size:18px;"> <b> <?php echo strtoupper($r['name']) ?> </b> </div>
     <br/>
	
<?php 
	
	$query="select * from memo where utd = '$utd' and name='$nameoforg'";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
	if($number_of_rows>0){
			while($row = mysqli_fetch_assoc($result)){
				?>
<div style="padding-top: 20px; min-height: 100px;">

<table cellpadding="10px" cellspacing="10px" border="2" >	
		<tr>
			<th>Name of Organization</th>
			<td> <textarea readonly style="background-color:#ffff99;" cols="40" rows="3"> <?php echo $row['name'];?></textarea> </td>
			<th>Type of Organization</th>
			<td colspan="3"> <?php echo $row['type'];?> </td>
		</tr>

		<tr>
			<th>City</th>
			<td> <?php echo $row['city'];?> </td>
			<th>State</th>
			<td colspan="3"> <?php echo $row['state'];?> </td>
		</tr>

		<tr>
			<th>Nature of Organization</th>
			<td colspan="3"> <?php echo $row['nature'];?>  </td>
		</tr>
		<tr>
			<th>Level</th>
			<td colspan="3">  <?php echo $row['level'];?> </td>
		</tr>
		<tr>
			<th>Purpose</th>
			<td colspan="3"><textarea readonly cols="105" rows="4" style="background-color:#ffff99;"><?php echo $row['purpose'];?> </textarea> </td>
		</tr>
		<tr>
			<th>Start Date</th>
			<td>  <?php echo $row['date'];?></td>
		
			<th>Durations</th>
			<td>  <?php echo $row['duration']." years";?></td>
		</tr>
		<tr>
			<th>Beneficiaries</th>
			<td colspan="3">  <?php echo $row['benf'];?></td>
		</tr>
		<tr>
			<th>Expected Outcome</th>
			<td colspan="3"> <textarea readonly style="background-color:#ede8dd;" rows="4" cols="105"><?php echo $row['outcome'];?> </textarea></td>
		</tr>
		
	
</table>

	</div>

	<?php }} else{?>
<div class="flash" style="font-size:20px;padding-top:20px; min-height:100px; font-weight: bold;">
<?php echo "No Data Found!!";}?>
</div>



<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>