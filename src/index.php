<?php
	session_start();
		if(isset($_SESSION['username'])){
		header("Location: logout.php");
		} ?>
<!DOCTYPE html>
<html>
<head>
<title>Requirement and Information Gathering System</title>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
   <div Style="font-size:35px; margin-top:120px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
   
   <div ><input type="button"  onclick="location.href='login.php';" value="Proceed"/>
   			<input type="button"  onclick="location.href='http://www.dauniv.ac.in/umis.php';" value="UTD MIS"/>
   </div>
 
 
</div>
</center>
</body>
</html>