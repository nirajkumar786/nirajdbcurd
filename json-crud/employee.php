<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
<li class="clr1 active"><a href="index.php">Home</a></li>
<li class="clr1 active"><a href="employee.php">employee</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to File Manager</h3>      
  <p>Create, Read, Update and Delete Data from JSON</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="add_emp.php"><i class="icon-plus"></i> ADD MORE DATA</a>
  
  
  
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<?php
include("connection.php");
error_reporting(0);
$result = mysqli_query($con,"SELECT * FROM emp");
?>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
	  <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
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
		while($row = mysqli_fetch_array($result)) {
?>
	<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["dept_manager"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
    <td><?php echo $row["join_date"]; ?></td>
       <td>
     <a class="btn btn-xs btn-primary" href="update1.php?id=<?php echo $row['id'] ?>">Edit</a>


      <a class="btn btn-xs btn-danger" href="emp_delete.php?id=<?php echo $row['id'] ?>">Delete</a>
     </td>
</tr>
<?php
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div></div></div>

<?php include("footer.php");?>
 </body>
</html>
