<!doctype html>
<html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:;
  position: fixed;
  top: 0;
  width: 100%;
}

.active {
  background-color: #4CAF50;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: teal;
}


table{
color:white;
background-color:#50585E;
text-align: center;
padding: 14px 20px;
border-radius:20px;
	
}


html { 
  background: url(bankhome.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h3{
background-color:#092B55;
padding-left: 0px;
padding-right: 0px;
border-radius:25px;
}


</style>
<head>
<center>
	
</head>

<body>

<ul>
	<li><a href="bankman.html"><font color="black"><b>Home</font></a></li>
</ul>

<head><font color="white" size="50" align="center"><h3>All Customers</h3></font></head>

<?php
error_reporting(0);
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
		
$query = "select * from user ";
$data = mysqli_query($conn,$query);
?>

	<div class="container">
	<br>
	<div class="row">
	<div class="col">
	<div class="table-responsive-sm">
	<table align = "center" border="1" cellspacing="15">
	<thead>
	<tr>
	<th class="text-center py-3" color="white">User ID</th>
	<th class="text-center py-3">Name</th>
	<th class="text-center py-3">Email ID</th>
	<th class="text-center py-3">Balance</th>
	<th class="text-center py-3">View</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
		while($rows=mysqli_fetch_assoc($data)){
	?>
	<tr>
	<td class="py-3"><?php echo $rows['id'] ?></td>
	<td class="py-3"><?php echo $rows['name'] ?></td>
	<td class="py-3"><?php echo $rows['email'] ?></td>
	<td class="py-3"><?php echo $rows['balance'] ?></td>
	<td><a href="personal.php?id= <?php echo $rows['id'] ?>"> <button type="button" class="btn">View</button></a></td>
	<?php
  }	
	?>	
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>