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
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Personnel Affairs</b> </div>


    <br>                                
 <div>                                                                      
<input style="margin-right: 10px;margin-left: 20px;" type="button" onclick="location.href='office_staff.php';" value="Office Staff"/>
<input style="margin-right: 10px;" type="button" onclick="location.href='add_req_next.php';" value="Other Staff"/>
<input style="margin-right: 10px;" type="button" onclick="location.href='viewreq.php';" value="View Requirements"/>
  </div>
                                                                    
                         
<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px; margin-top: 100px;"><< <b>Back to Home</b></a>
                                                                     
                                                                       
</div>                                                                 
</center>                                                              
</body>                                                                
</html>                                                                