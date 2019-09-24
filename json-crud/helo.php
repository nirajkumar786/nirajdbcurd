<?php
include("connection.php");
$sam="INSERT INTO employee VALUES('9','jat','Ts',10000,'hm')";
$data=mysqli_query($con,$sam);
if($data)
{
	 echo "data inserted";
}	
else 
{
	
	echo "not inserted";
}
?>
