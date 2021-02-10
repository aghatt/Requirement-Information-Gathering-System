<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
?> 
<html>
<head>
<title>Requirement and Information Gathering System</title>
</head>
<?php 
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=$_SESSION['username'];
	if(isset($_POST['submit1'])){
		$post=$_POST['post'];
		$sp=$_POST['sp'];
		$fp=$_POST['fp'];
		$req=$_POST['req'];
		
	}else if(isset($_POST['submit2'])){
		$post=$_POST['post'];
		$query="delete from addreq where post='$post'";
		$result=mysqli_query($connection,$query);
	if(!$result)  
	die("error:Data cannot be delted");  
	header('Location: view_add_req.php');
	}
	else{
		die('Server is down.');
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
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Additional Requirements</b> </div>

<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Other Requirements</b> </div>
<form action="other_req_hand_handler.php" method="POST">
<table border="5" id="table" cellspacing="10" cellpadding="10"  >

 <tr>
    <th>POST</th>
    <th>Sanctioned Post</th>
    <th>Filled Up</th>
    <th>Required</th>
</tr>
<tr>

	<td ><input type="text" name="post" value="<?php  echo $post;?>" readonly></td>
	<td><input type="number" name="sp" value="<?php echo $sp;?>" ></td>
	<td><input type="number" name="fp" value="<?php echo $fp;?>" ></td>
	<td><input type="number" name="req" value="<?php echo $req?>" ></td>
</tr>
</table>
<br />
<center><input type="submit"  name="submit" value="Confirm and Save"></center>
</form>
<br />

	
</div>

<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;margin-top:200px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>