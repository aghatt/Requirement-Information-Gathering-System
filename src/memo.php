<?php 	session_start();
		if(!isset($_SESSION['username'])){                             
		header("Location: index.php");   }    
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

<div style="height: 400px;padding-top: 20px;">
	
<form action="memo_handler.php" method="post">
<table cellpadding="10px" cellspacing="10px" border="2" >
	<tbody>
		<tr>
			<th>Name of Organization</th>
			<td ><input type="text" name="name_org" required></td>
		
			<th>Type of Organization</th>
			<td ><select name="type">
				<option value="Government">Government</option>
				<option value="Private">Private</option>
				<option value="Others">Others</option>
			</select></td>
		</tr>

		<tr>
			<th>City</th>
			<td ><input type="text" name="city" required></td>
		
			<th>State</th>
			<td ><input type="text" name="state" required></td>
		</tr>

		<tr>
			<th>Nature of Organization</th>
			<td colspan="3"><input type="checkbox" name="nature_org_acad" value="Academic">Academic<input type="checkbox" name="nature_org_rnd" value="R&D">R&D<input type="checkbox" name="nature_org_industry" value="Industrial">Industrial</td>
		</tr>
		<tr>
			<th>Level</th>
			<td colspan="3"><select name="level">
				<option value="Local">Local</option>
				<option value="State">State</option>
				<option value="National">National</option>
				<option value="International">International</option>
			</select></td>
		</tr>
		<tr>
			<th>Purpose</th>
			<td colspan="3"><textarea name="purpose" rows="4" cols="50"></textarea></td>
		</tr>
		<tr>
			<th>Start Date</th>
			<td><table>
			<tr>	
				<td>
					<select required name="dd">
						<option value="">date</option>
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
						<option value="">month</option>
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
						<option value="">year</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
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
			<td><input type="number" name="dur" style="width: 40px;" required>&nbsp; years</td>
		</tr>
		<tr>
			<th>Beneficiaries</th>
			<td colspan="3"><input type="checkbox" name="benef_teachers" value="Teachers">Teachers<input type="checkbox" name="benef_students"  value="Students">Students<input type="checkbox" name="benef_scholars" value="Research Scholars">Research Scholars<input type="checkbox" name="benef_others" value="Others">Others
			</td>
		</tr>
		<tr>
			<th>Expected Outcome</th>
			<td colspan="3"><textarea name="outcome" rows="4" cols="50"></textarea></td>
		</tr>
		<tr>
			<td colspan="4">
				<center><input type="submit" name="submit" value="Submit"></center>
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