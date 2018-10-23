<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     --><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/applehospitalhome.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <div class="container-fluid">  
  
<?php
include'header.php';
?>


      <div class="row">
        <div class="col-lg-6" style="padding-left: 30px;padding-top: 30px; ">
          <center>
              <h1><U>Address</U></h1>
              <h3>123,xyz street<br>abc chouraha near ghj<br>Indore [MP]   
              <br></h3>

                   <h1><U>Call us </U></h1>
              <h3>1236577<br>2123123131<br>0731-1564854  
              <br></h3>
                   <h1><U>Mail us on</U></h1>
             <h3> 123@gmail.com<br>abc@gmail.com<br>
         </h3>
         </center>


            </div>



     <div class="container">
     <div class="col-lg-6">

   <form style="color: white">
    <div class="form-group">
     <h1 style="color: tomato ;text-align:center;">Contact form</h1>

     Name<input type="text"  class="form-control" name="a" placeholder="Enter your name"><br>
     Email<input type="Email" class="form-control" name="b" placeholder="Enter email address"><br>
     Contact no.<input type="number" class="form-control" name="c" placeholder="Enter contact no."><br>
      Subject<input type="text" class="form-control" name="a" placeholder="Enter Subject"><br>
      Message<input type="textarea" class="form-control" name="a" placeholder="Enter Message"><br>
      submit<input type="submit" class="form-control" name="a" placeholder=""><br>
</div>
   </form>






</div>
</div>
</div><!--row close-->


            </div>

      </div><!--row-->

<div class="row">
 <div class="col-lg-12">

               <h1 align="center" style="color:black">MAP LOCATION</h1>
          <iframe align="center" style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.921820376564!2d75.8643384149618!3d22.69395408512053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fce495ee903f%3A0xf0b46034bc2ce47c!2sApple+Hospital!5e0!3m2!1sen!2sin!4v1529043715174" width="600" height="450" frameborder="2px solid black" style="border:0" allowfullscreen></iframe>
       
      




</div>
</div><!--row map-->




<?php
include'footer.php';
?>

    





     </div><!--container fluid main class-->
    







  </body>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>