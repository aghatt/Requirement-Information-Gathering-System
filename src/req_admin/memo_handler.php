<?php
session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: login.php");   }

	
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$utd=$_SESSION['username'];
$name=$_POST['name_org'];
$type=$_POST['type'];
$prevname=$_POST['prevname'];
if(isset($_POST['nature_org_acad'])){
	$nature_org_acad=" ".$_POST['nature_org_acad'];
}
else{
	$nature_org_acad="";
}


if(isset($_POST['nature_org_rnd'])){
	$nature_org_rnd=" ".$_POST['nature_org_rnd'];
}
else{
	$nature_org_rnd="";
}


if(isset($_POST['nature_org_industry'])){
	$nature_org_industry=" ".$_POST['nature_org_industry'];
}
else{
	$nature_org_industry="";
}


$nature=$nature_org_acad.$nature_org_rnd.$nature_org_industry;



$level=$_POST['level'];
$purpose=$_POST['purpose'];
$date=$_POST['dd']."-".$_POST['mm']."-".$_POST['yyyy'];

if(isset($_POST['benef_teachers'])){

$benef_teachers=$_POST['benef_teachers'];}
else{$benef_teachers="";}

if(isset($_POST['benef_students'])){

$benef_students=$_POST['benef_students'];}
else{$benef_students="";}

if(isset($_POST['benef_scholars'])){

$benef_scholars=$_POST['benef_scholars'];}
else{$benef_scholars="";}

if(isset($_POST['benef_others'])){

$benef_others=$_POST['benef_others'];}
else{$benef_others="";}

//$benef_students=$_POST['benef_students'];
//$benef_others=$_POST['benef_others'];
//$benef_scholars=$_POST['benef_scholars'];

$benf=$benef_teachers." ".$benef_students." ".$benef_scholars." ".$benef_others;
//$benf="testing purpose";
$outcome=$_POST['outcome'];
$dur=$_POST['dur'];
$city=$_POST['city'];
$state=$_POST['state'];

$message="";

echo " ".$utd." ".$name." ".$type." ". $city." ".$state." ".$nature." ".$level." ".$purpose." ".$date." ".$benf." ".$outcome." ".$dur."     ".$prevname."     ";

$query = "UPDATE `memo` SET `type`='$type',`city`='$city',`state`='$state',`nature`='$nature',`level`='$level',`purpose`='$purpose',`date`='$date',`benf`='$benf',`outcome`='$outcome',`duration`='$dur' WHERE 'utd'='$utd' AND 'name'='$name'";

echo $query;
$result=mysqli_query($connection,$query);
if($result){
$message="Successfully Saved";}
else{
	die("error:Data cannot be submitted");  
}
$_SESSION["message"]=$message;
mysqli_close($connection);
//header('Location: memo_next.php');
?>
