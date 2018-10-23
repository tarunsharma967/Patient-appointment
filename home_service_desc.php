
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>service_button_click</title>

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
    <!-- Main Container-->
    <div class="container-fluid">

  <?php
    include 'header.php';
    include 'connection.php';
  ?>

    <?php
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM servicemasterdesc where id=$id";
        $result = mysqli_query($conn ,$sql);
        if($row = mysqli_fetch_array($result)) {

    ?>
  
   <br>
   <h1 style="text-align: center;">Register yourself for <u><i><?php echo $row['servicename'] ?> </i></u></h1><br>
  <div class="container">
   <div class="row">
     <div class="col-lg-6">
    <img  src="upload/<?php echo $row['image'] ?>" alt="oops cant show image" class="img-responsive">
     </div>

     <div class="col-lg-6" style="background-color: #f7f7f7;">



  <center>
    <h1 class="text-danger">Registration Form</h1>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal" > 
  <table class="table table-bordered" style="width: 70%">
    
      <tr class="form-group">
        <td>Name</td>
        <td> <input type="text" name="name" class="form-control"></td>
      </tr>
      <tr class="form-group">
        <td>Date</td>
        <td> <input type="Date" name="date" class="form-control"></td>
      </tr>
      

      <tr class="form-group">
        <td>Time</td>
        <td> <input type="Time" name="time" class="form-control"></td>
      </tr>
      
      <tr class="form-group">
        <td>Contact No.</td>
        <td> <input type="number" name="contact" class="form-control"></td>
      </tr>
      
      
  </table>

  <input type="submit" name="Submit">

</form>



     </div>

   </div><!--row 1-->
   <div class="row">.
 
    <div class="col-lg-12" >
      <h2 class="text-muted">Service details:</h2>




      <table class="table table-bordered">
    
      
<tr>
    <th>Service_name</th>
    <th>Duration</th>
    <th>Amount</th>
    <th>Description</th>
</tr>



<?php
    echo"<tr>";
    echo"<td>".$row['servicename']. "</td>" ;
    echo"<td>".$row['duration']. "</td>" ;
    echo"<td>".$row['amount']. "</td>" ;
    echo"<td>".$row['description']. "</td>" ;
    echo"</tr>";

?>



  </table>
</form>

<a  class="btn btn-info" href="service.php" style="float: right;">Back</a>











    </div><!--column-->
  </div><!--row 2-->

  </div><!--container -->

  <?php
   }
   else
   {
    echo"<p>Something Wromg</p>" ;
   }
}
  ?>

  <br> 
 <?php
   include 'footer.php';
   ?>
  
   </div>    <!-- Main Container End-->
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

    $name=$_POST['name'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $contact=$_POST['contact'];

    $sql="insert into user (name , date, time , contact)
    values('$name', '$date' , '$time' , '$contact')" ;

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