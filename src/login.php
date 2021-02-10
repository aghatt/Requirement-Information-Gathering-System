<?php 	session_start();
		if(isset($_SESSION['username'])){                             
		header("Location: homepage.php");   }
		?>
<!DOCTYPE html>
<html>
<head>
<title>Requirement and Information Gathering System</title>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
  
   <div Style="font-size:35px; margin-top:100px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   
 <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
   
 <div >
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
<tr>
<form name="f1" method="post" action="attemptlogin.php">
<td>
<table width="100%" border="4" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center">
<div style="color:blue;"><b>Login </b></div>
</td>
</tr>
<tr>
<td width="78">
<div style="font-size:17px;"><center><strong>Username</strong> </center></div>
</td>
<td width="6">:</td>
<td width="294"><input  name="username" type="text" id="username"></td>
</tr>
<tr>
<td width="78">
<div style="font-size:17px;"><strong>Password</strong></div>
</td>
<td width="6">:</td>
<td width="294"><input  name="password" type="password" id="password"></td>
</tr>
<tr>
<td colspan="3">
<center>
<input type="submit"  name="submit" value="Login"> 
&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset">
</center>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

</div>
 
 
</div>
</center>
</body>
</html>