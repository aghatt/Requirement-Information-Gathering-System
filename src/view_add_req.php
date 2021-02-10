<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
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
input{	width: 80px;	} 
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
<div style="min-height:600px;">
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3> <?php echo strtoupper($_SESSION['name']);?>   </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>View Additional Requirements</b> </div>



		<?php		
			$query =  "select * from addreq where utd = '$utd' order by post asc";
			$result = mysqli_query($connection,$query);
			$number_of_rows = mysqli_num_rows($result);
			
			$i = $number_of_rows;

//$temp_arry = array();
if($number_of_rows >0){
	?>
				<table border="5" id="table" cellspacing="10" cellpadding="10"  >
		<?php while($row = mysqli_fetch_array($result)){
		
		$temp_array[]=$row;
	
		}

	
	
	
	
	
?>


 <tr>
    <th>Post</th>
    <th>Sanctioned<br> Post</th>
    <th>Filled Up</th>
    <th>Required</th>
	<th></th>
	<th></th>
</tr>

<?php
$j=0;
				for($j=0;$j<$i;$j++){
					
					$row = $temp_array[$j];
					$post = $row['post'];
					$sp = $row['sp'];	
					$fp = $row['fp'];
					$req=$row['req'];

?>

<tr>
<form action="other_req_handler.php" method="POST">
	<th><input type="textarea" value="<?php  echo $post;?>" name="post" readonly="readonly"></th>
	<td><input type="text" value="<?php  echo $sp?>"  name="sp" readonly="readonly"></td>
	<td><input type="text" value="<?php  echo $fp;?>" name="fp" readonly="readonly"></td>
	<td><input type="text" value="<?php  echo $req;?>" name="req" readonly="readonly"></td>
	<td><input type="submit" name="submit1"  value="Edit" ></td><td><input type="submit"  onclick="confirm('Please confirm before deleting requirement.')" name="submit2"  value="Delete" ></td>
</form>
</tr>


	<?php 
				
} }else{
	?><br /><br />
	<div class="flash" style="font-size:20px;padding-top:20px; min-height:100px; font-weight: bold;">No Data found!!</div>
	<?php 
}
				?>			
</table>
</div>
</center>
<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>

</body>
</html>