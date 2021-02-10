<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: ../index.php");   }                             
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
     <div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Memorandum of Understanding (MoU)</b><br/><b>with</b><br/><b>Organizations</b> </div>
 <br><div style="height:  100px;">
<form action="view_memo1.php" method="GET">
<select required name="utd">
<option value=""> ----Select UTD----</option>
<option value="Asc"> Human Resource Development Centre</option>
<option value="Biochem">School of Biochemistry</option>
<option value="Sobiotech">School of BioTechnology</option>
<option value="Chemsc">School of Chemical Sciences</option>
<option value="Socmrce">School of Commerce</option>
<option value="socsit">School of Computer Science & Information Technology</option>
<option value="Sodsf">School of Data Science & Forecasting</option>
<option value="Soecon">School of Economics</option>
<option value="Soedu">School of Education</option>
<option value="Soex">School of Electronics</option>
<option value="Sees">School of Energy & Environmental Studies</option>
<option value="Soinstru">School of Instrumentation</option>
<option value="Sjmc">School of Journalism & Mass Communication</option></option>
<option value="Solaw">School of Law</option>
<option value="Sols">School of Life Sciences</option>
<option value="Solang">School of Languages</option>
<option value="Somath">School of Mathematics</option>
<option value="Sopharma">School of Pharmacy</option>
<option value="Sopedu">School of Physical Education</option>
<option value="Sophy">School of Physics</option>
<option value="Sostat">School of Statistics</option>
<option value="Soss">School of Social Science</option>
<option value="Ietdavv">Institute of Engineering & Technology</option>
<option value="Imsdavv">Institute of Management Studies</option>
<option value="Iipsdavv">International Institute of Professional Studies</option>
<option value="Compcent">Computer Centre</option>
<option value="itc">Information Technology Centre</option>
<option value="Solib">School of Library and Information Science</option>
<option value="Doll">Department of Life Long Learning</option>
<option value="Emrcdavv">Educational Multimedia Research Centre</option>
<option value="Umcdavv">University Minority Cell</option>
<option value="Ddedavv">Directorate of Distance Education</option>
<option value="Soyoga">School of Yoga</option>
<option value="Ddukkdavv">DDU-Kaushal Kendra</option>
<option value="cwo">Chief Warden Office</option>
<option value="mcc">Model Career Center</option>
<option value="uhc">University Health Center</option>
<option value="usv">University Shishu Vihar</option>
<option value="iqac">Internal Quality Assurance Cell</option>
<option value="cpc">Central Placement Cell</option>
<option value="ucc">University Cultural Centre</option>
<option value="cvc">Central Valuation Center</option>
<option value="dos">Directorate of Sports</option>
<option value="CNO">Central Office</option>
</select>
<input style="margin-right:20px;" type="submit" value="View"/>

</form>
</div>
<a href="admin_home.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>
</div>
</center>
</body>
</html>