<?php

session_start();
$user=$_SESSION['username'];
if($user=="")
{
  echo '<script> window.location.href="superadmin_login.php"</script>';
}
else
{

}
?>

<?php


include 'connection.php';
session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php
 
 include 'admin_header.php';


?>

<div class="container">
  <h1 style="text-align: center;">Service master </h1>
  <br>
  <a  class="btn btn-success" href="insert_service_desc.php" style="float: right; width: 20%;">Add</a><br>
  <br>
<form action="" method="post"  class="form-group" > 
  <table class="table table-bordered">
    
      
<tr>
		<th>ID</th>
		<th>Service_name</th>
    <th>Duration</th>
    <th>Amount</th>
    <th>Description</th>
		<th>Service_image</th>
    <th colspan="2" style="text-align: center;">Action</th>
	</tr>



<?php

	$sql="select * from servicemasterdesc" ;
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td>".$row['id']. "</td>" ;
		echo"<td>".$row['servicename']. "</td>" ;
    echo"<td>".$row['duration']. "</td>" ;
    echo"<td>".$row['amount']. "</td>" ;
    echo"<td>".$row['description']. "</td>" ;
		echo"<td><img src='upload/".$row['image']. "' class='img-responsive img-thumbnail' style='width:50px;height:50px'> </td>" ;
    echo "<td><a class='btn btn-info' href='update_service_desc.php?id={$row['id']}'>Update</a></td>";
    echo "<td><a class='btn btn-danger' href='delete_service_desc.php?id={$row['id']}'>Delete</a></td>";
		echo"</tr>";
	}

?>



  </table>
</form>

<a  class="btn btn-info" href="admin_dashboard.php" style="float: right;">Back</a>
</div><!--container class-->
<br>
<br><br>

<?php

include 'footer.php';

?>




  </body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</html>
