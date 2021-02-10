<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }                             
?>  
<html>
<head>
<title>Requirement and Information Gathering System</title>
<style>
tr:nth-child(even){
		background-color: #ede8dd;
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:170px; height:170px; margin-bottom:20px;">
    <div class="header"><h2>Admin Module</h2></div>
     <div style="color:blue; margin-bottom:10px; font-size:18px;"> <b> View</b> </div>

<div style="height:  150px;">
<center>
<input  type="button" onclick="location.href='viewmemo_a.php';" value="MoU"/>
</center>
</div>
<a href="admin_home.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>
</div>
</center>
</body>
</html>