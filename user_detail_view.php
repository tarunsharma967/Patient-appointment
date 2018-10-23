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
  <div class="col-lg-12">
  <h1 style="text-align: center;">User Detail </h1>
  <br>
  <br><br>
<form action="" method="post" class="form-group" > 
  <table class="table table-bordered">
    
      
	
	<tr>
		<th>Fullname</th>
		<th>Username</th>
		<th>Email</th>
		<th>Mobile No.</th>
		<th>Password</th>
	</tr>



<?php

	$sql="select * from registration" ;
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td>".$row['fullname']. "</td>" ;
		echo"<td>".$row['username']. "</td>" ;
		echo"<td>".$row['email']. "</td>" ;
		echo"<td>".$row['mobile']. "</td>" ;
		echo"<td>".$row['password']. "</td>" ;
    echo"</tr>";
	}

?>



  </table>

  <a class="btn btn-info" href="admin_dashboard.php" style="float: right;">Back</a>
</form>
<br>
</div>
</div><!--container class-->
<br>
<br>
<?php

include 'footer.php';

?>




  </body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</html>

































