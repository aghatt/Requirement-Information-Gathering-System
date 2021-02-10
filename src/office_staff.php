<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: login.php");   }                             
?>  
<html>
<head>
<title>Requirement and Information Gathering System</title>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3>  <?php echo strtoupper($_SESSION['name']);?> </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Office Staff Requirement & Information</b> </div>

<br>
<div style="height:150px;">
<input style="margin-right: 20px;" type="button" onclick="location.href='regular_handler.php';" value="Regular"/>
<input style="margin-right: 20px;" type="button" onclick="location.href='self_finance_handler.php';" value="Self Finance"/>
<br/>
</div>

<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>