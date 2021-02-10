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
</style>

<script>
var counter=1;
var hidden=document.getElementById('counter');
hidden.value=counter;
function click1(){
	myel1=document.getElementById("00");
	myel2=document.getElementById("01");
	myel3=document.getElementById("02");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click2(){
	myel1=document.getElementById("10");
	myel2=document.getElementById("11");
	myel3=document.getElementById("12");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click3(){
	myel1=document.getElementById("20");
	myel2=document.getElementById("21");
	myel3=document.getElementById("22");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function click4(){
	myel1=document.getElementById("30");
	myel2=document.getElementById("31");
	myel3=document.getElementById("32");
	myel1.removeAttribute("readonly");
	myel2.removeAttribute("readonly");
	myel3.removeAttribute("readonly");
}
function myfunc(){
	
	var name="other";
	counter=counter+1;
	name=name+counter.toString();
	var mytable=document.getElementById('table');
	
	var tr=document.createElement("tr");
	var td=document.createElement("td");
	var ele1=document.createElement("input");
	ele1.type="text";
	mytable.appendChild(tr);
	ele1.name=name+"_post";
	td.appendChild(ele1);
	tr.appendChild(td);
	mytable.appendChild(tr);
	
	var td=document.createElement("td");
	var ele1=document.createElement("input");
	ele1.type="number";
	mytable.appendChild(tr);
	ele1.name=name+"_sp";
	td.appendChild(ele1);
	tr.appendChild(td);
	mytable.appendChild(tr);
	
	var td=document.createElement("td");
	var ele1=document.createElement("input");
	ele1.type="number";
	mytable.appendChild(tr);
	ele1.name=name+"_fp";
	td.appendChild(ele1);
	tr.appendChild(td);
	mytable.appendChild(tr);
	
	var td=document.createElement("td");
	var ele1=document.createElement("input");
	ele1.type="number";
	mytable.appendChild(tr);
	ele1.name=name+"_req";
	td.appendChild(ele1);
	tr.appendChild(td);
	mytable.appendChild(tr);
	
	var hidden=document.getElementById('counter');
	hidden.value=counter;
	
}
</script>
</head>
<?php 
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	$utd=$_SESSION['username'];
?>
<body style="background-color:#ffff99;">
<center>
<div >
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3> <?php echo strtoupper($_SESSION['name']);?>   </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Add Requirements</b> </div>


<form action="addreqhandler.php" method="POST">
<div style="height:auto">
	<table border="5" id="table" cellspacing="10" cellpadding="10"  >
		<tbody>
		<tr>
			<th>Posts</th>
			<th>Sanctioned<br> Post</th>
			<th>Filled Up</th>
			<th>Required</th>
			
		</tr> 
		
<input type="hidden" id='counter' name="counter" />
<script>
var hidden=document.getElementById('counter');
hidden.value=counter;
</script>
<tr><td colspan="4"><center><input style="width: 200px;" type="button" name="aof" onclick="myfunc();" value="Add records" ></center></td></tr>
<tr>
			<td><input type='text' name='other1_post'> </td>
			<td><input type='number' name='other1_sp' ></td>
			<td><input type='number' name='other1_fp'></td>
			<td><input type='number' name='other1_req'></td>
			
		</tr>
</tbody>
</table>
<br />
<center><input style="width: 180px;" type="submit"  name="submit" value="Confirm & Save"></center>
<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;"><< <b>Back to Home</b></a>
</div>
</form>
</center>
</body>
</html>