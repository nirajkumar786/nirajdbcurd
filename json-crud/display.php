<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM emp";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($total);																						
//echo "$result";
if($total!=0)
{
	?>
	<table>
		<tr>
		<th>name</th>
		<th>dob</th>
		<th>gender</th>
		<th>department</th>
		<th>dept_manager</th>
		<th>salary</th>
		<th>join_date</th>
		<th colspan="2">operation</th>
		</tr>
		<style>
			td{
				padding:10px;
			}
			
		</style>
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
	echo "
	<tr>
	
	<td>".$result['name']."</td>
	<td>".$result['dob']."</td>
	<td>".$result['gender']."</td>
	<td>".$result['department']."</td>
	<td>".$result['dept_manager']."</td>
	<td>".$result['salary']."</td>
	<td>".$result['join_date']."</td>
	<td><a href='update1.php?name=$result[name]& dob=$result[dob] & gender=$result[gender] & department=$result[department]
	    & dept_manager=$result[dept_manager] & salary=$result[salary] & join_date=$result[join_date]'>Edit</a></td>
	<td><a href='#'>Delete</a></td>
	</tr>";
      }
}
else 
{
	echo "no records";
}

?>
</table>


