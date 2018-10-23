
<?php
  session_start();
  include('connection.php');

  if(isset($_POST['Submit']))
  {

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from superadmin
          where username like '$username' and password like '$password' ";

    $result=mysqli_query ($conn, $sql);
    while ($row = mysqli_fetch_array($result))
     {
       $u1=$row['username'];
       $p1=$row['password'];
            
    }
    if ($u1==$username && $p1==$password)
     {
         $_SESSION['username']=$u1 ;
         $_SESSION['password']=$p1;

         echo '<script> window.location.href="admin_dashboard.php" </script>';
      }
      else
      {

          echo '<script> alert("Invalid") </script>';
      }    
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
 
 include 'header.php';


?>

<div class="container">
  <div class="col-lg-12">
  <h1 style="text-align: center;">Super-Admin login</h1>
  <br>
  <br><br>
  <center>
<form action="" method="post" class="form-group" > 
  <table class="table " style="width: 40%">
    
      <tr>
        <td> Username</td>
        <td> <input type="text" class="form-control" name="username"></td>
      </tr>
      

      <tr>
        <td> Password</td>
        <td> <input type="password"  class="form-control" name="password"></td>
      </tr>
      
          
        <tr>
          
            <td><input type="submit"  name="Submit"></td>
        </tr>
    





  </table>
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





