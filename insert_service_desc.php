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
    
</body>

<?php
 
 include 'admin_header.php';


?>

<div class="container">
	<div class="col-lg-12">
  <h1 style="text-align: center;">Insert Service Detail</h1>
  <br>
  <br><br>
  <center>
<form action="" method="post" enctype="multipart/form-data" class="form-group" > 
  <table class="table table-bordered" style="width: 50%">
    
      <tr>
				<td> Service name</td>
				<td> <input type="text" name="servicename" ></td>
			</tr>
			<tr>
				<td> Duration</td>
				<td> <input type="text" name="duration"></td>
			</tr>
			

			<tr>
				<td>Amount</td>
				<td> <input type="number" name="amount"></td>
			</tr>
			
			<tr>
				<td>Description</td>
				<td> <input type="textarea" name="description"></td>
			</tr>
			
			<tr>
				<td> Service Image</td>
				<td> <input type="file" name="image"></td>
			</tr>

  </table>

  <input type="submit" name="Submit">
  <a  href="service_desc_view.php" class="btn btn-info">Back</a>

</form>
</center>
</div>
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



<?php
	include('connection.php');

	if(isset($_POST['Submit']))
	{
		move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
		$image=$_FILES["image"]["name"];
		$servicename=$_POST['servicename'];
		$duration=$_POST['duration'];
		$amount=$_POST['amount'];
		$description=$_POST['description'];

		$sql="insert into servicemasterdesc (servicename , duration , amount , description,image)
		values('$servicename' , '$duration' , '$amount' , '$description' , '$image')" ;

		if(mysqli_query ($conn, $sql))
		{

	?>
			<script> alert('record inserted');</script>
	<?php
			echo '<script> window.location.href="service_desc_view.php" </script>';
			}

			else
			{
	?>
	<script> alert('Error not inserted');</script>

<?php
echo '<script> window.location.href="service_desc_view.php" </script>';
}
}
?>