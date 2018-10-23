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
    


<?php

include'connection.php';
		$servicename='';
		$duration='';
		$amount='';
		$description='';
		$serviceimage='';
		$id = '';

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="SELECT * FROM servicemasterdesc where id='$id'";
	$result = mysqli_query($conn , $sql);
	if($row = mysqli_fetch_array($result)){
		$servicename=$row['servicename'];
		$duration=$row['duration'];
		$amount=$row['amount'];
		$description=$row['description'];
		$serviceimage=$row['serviceimage'];
	}
}

?>

<?php
 
 include 'admin_header.php';


?>

<div class="container">
	<div class="col-lg-12">
  <h1 style="text-align: center;">Delete Service</h1>
  <br>
  <br><br>
  <center>
<form action="" method="post" class="form-group" > 
  <table class="table " style="width: 50%">
  	<tr>
				<td>ID</td>
				<td> <input type="text" value="<?php echo $id ?>" disabled></td>
				<td> <input type="hidden" name="id" value="<?php echo $id ?>"></td>
			</tr>
    
      <tr>
				<td> Service name</td>
				<td> <input type="text" name="servicename" value="<?php echo $servicename ?>"></td>
			</tr>
			<tr>
				<td> Duration</td>
				<td> <input type="text" name="duration" value="<?php echo $duration ?>"></td>
			</tr>
			

			<tr>
				<td>Amount</td>
				<td> <input type="number" name="amount" value="<?php echo $amount ?>"></td>
			</tr>
			
			<tr>
				<td>Description</td>
				<td> <input type="textarea" name="description" value="<?php echo $description ?>"></td>
			</tr>
			
			<tr>
				<td> Service Image</td>
				<td> <input type="blob" name="serviceimage" value="<?php echo $serviceimage ?>"></td>
			</tr>
			

  </table>
<input type="submit" name="Submit">
<a  class="btn btn-info" href="service_desc_view.php">Back</a>
</form>
</center>

<br>

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

		$sql="delete from servicemasterdesc where id='$id'" ;

		if(mysqli_query($conn, $sql))
		{

	?>
			<script> alert('Record Deleted');</script>

	<?php
			echo '<script> window.location.href="service_desc_view.php" </script>';
			}

			else
			{
	?>
	<script> alert('Error not Deleted');</script>

<?php
	echo '<script> window.location.href="service_desc_view.php" </script>';
}
}
?>





