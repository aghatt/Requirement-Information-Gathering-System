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
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
   <span class="header"><h3> <?php echo strtoupper($_SESSION['name']);?>  </h3></span>
    <br>                                
                                                                       
<input style="margin-right: 10px;margin-left: 20px;" type="button" onclick="location.href='personnel.php';" value="Personnel Affairs"/>
<input style="margin-right: 10px;" type="button" onclick="location.href='memo_next.php';" value="Academic Affairs"/>
<input style="margin-right: 20px;" type="button" onclick="location.href='logout.php';" value="Logout"/>

                                                                      
                                                                       
</div>                                                                 
</center>                                                              
</body>                                                                
</html>                                                                