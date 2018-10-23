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
  <h1 style="text-align: center;">Insert registration detail</h1>
  <br>
  <br><br>
<form action="" method="post" class="form-group" > 
  <table class="table table-bordered">
    
      <tr>
				<td> Full name</td>
				<td> <input type="text" name="fullname" ></td>
			</tr>
			<tr>
				<td> Username</td>
				<td> <input type="text" name="username"></td>
			</tr>
			

			<tr>
				<td> Email</td>
				<td> <input type="Email" name="email"></td>
			</tr>
			
			<tr>
				<td>Mobile no</td>
				<td> <input type="number" name="mobile"></td>
			</tr>
			
			<tr>
				<td> Password</td>
				<td> <input type="Password" name="password"></td>
			</tr>
			
					
		    <tr>
		    	
		    		<td><input type="submit" name="Submit"></td>
		    </tr>
		




  </table>
</form>
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

		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];

		$sql="insert into Registration (fullname , username , email , mobile , password)
		values('$fullname' , '$username' , '$email' , '$mobile' , '$password')" ;

		if(mysqli_query ($conn, $sql))
		{

	?>
			<script> alert('record inserted');</script>
	<?php

			}

			else
			{
	?>
	<script> alert('Error not inserted');</script>

<?php
}
}
?>