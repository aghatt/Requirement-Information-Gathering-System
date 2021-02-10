<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }    
	

			
include("serverconfig.php");
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
		$nameoforg=$_GET['nameoforg']; 
		$city=$_GET['city'];
		$state=$_GET['state'];
		$date=$_GET['date'];
		$duration=$_GET['duration'];
		$utd=$_GET['utd'];
		
	?>
<html>
<head>
<title>Requirement and Information Gathering System</title>
<style type="text/css">
	tr:nth-child(odd){
		background-color: #ede8dd;
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div >
   
   
   <div Style="font-size:35px; margin-top:30px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
  <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Requirement and Information Gathering System</b></div>
   <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:10px;">
   <div class="header"><h3>  <?php echo strtoupper($_SESSION['name']);?> </h3></div>
<div style="color:blue; margin-bottom:10px; font-size:20px;padding-top: 10px;"> <b>Memorandum of Understanding (MoU)</b><br/><b>with</b><br/><b>Organizations</b> </div>



<?php
$query="select * from memo where utd = '$utd' and name='$nameoforg' and city='$city' and date='$date' and duration='$duration'";
	$result = mysqli_query($connection,$query);
	$number_of_rows = mysqli_num_rows($result);
//	echo $number_of_rows;
$row=mysqli_fetch_assoc($result);

?>






<div style="height: 400px;padding-top: 20px;">
	
<form action="memo_edit_handler.php" method="post">
<table cellpadding="10px" cellspacing="10px" border="2" >
	<tbody>
	<tr><th colspan="4">Edit Memorandum</th></tr>
		<tr>
			<th>Name of Organization</th>
			<td ><input type="text" readonly name="name_org" required value='<?php echo $nameoforg;?>'> </td>
		<input type="hidden" name = "prevname" value='<?php echo $nameoforg;?>'>
			<th>Type of Organization</th>
			<td ><select required name="type">
				<option value="Government">Government</option>
				<option value="Private">Private</option>
				<option value="Others">Others</option>
			</select></td>
		</tr>

		<tr>
			<th>City</th>
			<td ><input type="text" name="city" required value='<?php echo $row['city'];?>'></td>
		
			<th>State</th>
			<td ><input type="text" name="state" required value='<?php echo $row['state'];?>'></td>
		</tr>

		<tr>
			<th>Nature of Organization</th>
			<td colspan="3">
			
			
			<?php 
			$nature =$row['nature'];		
			?>
				<input type="checkbox" 
					<?php 	if (preg_match('/academic/i',$nature)){?> checked <?php } ?>name="nature_org_acad" value="Academic">Academic
				<input type="checkbox" <?php 	if (preg_match('/R&D/i',$nature)){?> checked <?php } ?>checked name="nature_org_rnd" value="R&D">R&D
				<input type="checkbox"<?php 	if (preg_match('/industrial/i',$nature)){?> checked <?php } ?> name="nature_org_industry" value="Industrial">Industrial
			</td>
		</tr>
		<tr>
			<th>Level</th>
			<td colspan="3"><select required name="level">
								<option value="Local">Local</option>
				<option value="State">State</option>
				<option value="National">National</option>
				<option value="International">International</option>
			</select></td>
		</tr>
		<tr>
			<th>Purpose</th>
			<td colspan="3"><textarea name="purpose" required rows="4" cols="50" value='<?php echo $row['purpose'];?>'><?php echo $row['purpose'];?></textarea></td>
		</tr>
		<tr>
		
		<?php
		$date=$row['date'];
		
		$dt = explode("-",$date);
	//	echo $dt[0];
	//echo $dt[1];
//echo $dt[2];
		if($dt[1]==1){
			$mon='January';
		}
		if($dt[1]==2){
			$mon='Februrary';
		}
		if($dt[1]==3){
			$mon='March';
		}
		if($dt[1]==4){
			$mon='April';
		}
		if($dt[1]==5){
			$mon='May';
		}
		if($dt[1]==6){
			$mon='June';
		}
		if($dt[1]==7){
			$mon='July';
		}
		if($dt[1]==8){
			$mon='August';
		}
		if($dt[1]==9){
			$mon='September';
		}
		if($dt[1]==10){
			$mon='October';
		}
		if($dt[1]==11){
			$mon='November';
		}
		if($dt[1]==12){
			$mon='December';
		}
		
		
		
		?>
		
		
		
		
		
		
		
		
		
			<th>Start Date</th>
			<td><table>
			<tr>	
				<td >
					<select required name="dd" >
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						
						</select>
				</td>
				
					
				<td>
					<select required name="mm">
						<option value="01">January</option>
						<option value="02">Februrary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
						
						
						</select>
				</td>
				
				
				<td>
					<select required name="yyyy">
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
					
						</select>
				</td>
				
				
				
			</tr>
		</table>
</td>
		
			<th>Duration</th>
			<td><input type="number" name="dur" style="width: 40px;" required value='<?php echo $row['duration'];?>'>&nbsp; years</td>
		</tr>
		<tr>
			<th>Beneficiaries</th>
				<td colspan="3">
				
				<?php $benfe = $row['benf']; ?>
					<input type="checkbox"  <?php 	if (preg_match('/teachers/i',$benfe)){?> checked <?php } ?>name="benef_teachers" value="Teachers">Teachers
					<input type="checkbox" <?php 	if (preg_match('/students/i',$benfe)){?> checked <?php } ?> name="benef_students"  value="Students">Students
					<input type="checkbox"<?php 	if (preg_match('/scholars/i',$benfe)){?> checked <?php } ?> name="benef_scholars" value="Research Scholars">Research Scholars
					<input type="checkbox" <?php 	if (preg_match('/others/i',$benfe)){?> checked <?php } ?>name="benef_others" value="Others">Others
			</td>
		</tr>
		<tr>
			<th>Expected Outcome</th>
			<td colspan="3"><textarea required name="outcome" rows="4" cols="50" ><?php echo $row['outcome'];?></textarea></td>
		</tr>
		<tr>
			<td colspan="4">
				<center><input type="submit" name="submit" value="Confirm & Save "></center>
			</td>
		</tr>
	</tbody>
</table>
	
</form>
</div>

<a href="homepage.php" style="color:blue; text-decoration:none;font-size: 18px; float: right;margin-right:20px;margin-top:200px;"><< <b>Back to Home</b></a>

</div>
</center>
</body>
</html>