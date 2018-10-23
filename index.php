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
    <link rel="stylesheet" type="text/css" href="css/applehospitalhome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--to give music to website-->
  
    
    <div class="container-fluid">
   <?php
   include'header.php';
   ?>

<div class="row">
  <div class="col-lg-12">
 
             <!--###################  SLIDER  #################-->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

  <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
           <div class="item active">
               <img src="css/images/banner3.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
           </div>
           <div class="item">
                    <img src="css/images/banner4.jpg" alt="...">
               <div class="carousel-caption">
        ...
               </div>
            </div>
    ...
        </div>

  <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
                </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
               </a>
    </div>



      </div>


</div><!--row-->


   <section id="gallery">
<div class="container bg-5 text-center">
    <div class="row">
            <center>
            <div class="col-md-3">
                <a href="images/navbar1.jpg">
                    <img class="img-responsive img-rounded" src="images/navbar1.jpg" alt="">
                </a>
                
            </div>
            <div class="col-md-3">
                <a href="css/images/7.png">
                    <img class="img-responsive img-rounded" src="images/navbar2.jpg" alt="">
                </a>
                
            </div>
            <div class="col-md-3">
                <a href="css/images/3.png">
                    <img class="img-responsive img-rounded" src="images/hospitalcartone.jpg" alt="">
                </a>
                
            </div>
            <div class="col-md-3">
                <a href="css/images/2.png">
                    <img class="img-responsive img-rounded" src="images/hospitalcarttwo.jpg" alt="">
                </a>
                
            </div>
            </center>
    </div>

    
</div>



     </div><!--row4 SLIDER ROW -->

     <div class="row">
      <H1>Center of Excillence </H1>
      <h4>Combining the best doctors and facilities along with staff</h4>
      <div class="col-lg-4">
          <img src="css/images/ap1.png">
          <br>
          <h3>Name of sergery</h3>
      </div>
      <div class="col-lg-4">
          <img src="css/images/ap2.png">
            <br>
          <h3>Name of sergery</h3>
      </div>
      <div class="col-lg-4">
          <img src="css/images/ap3.png">
          <br>
          <h3>Name of sergery</h3>
      </div>

     </div><!--row 5  big images-->

     <div class="row">
        <div class="col-lg-2">
          <img src="css/images/ap4.png">
          <br>
          <h4>Image name</h4> 
        </div>
        <div class="col-lg-2">
            <img src="css/images/ap5.png">
          <br>
          <h4>Image name</h4>
        </div>
        <div class="col-lg-2">
            <img src="css/images/ap6.png">
          <br>
          <h4>Image name</h4>
        </div>
        <div class="col-lg-2">
            <img src="css/images/ap7.png">
          <br>
          <h4>Image name</h4>
        </div>
        <div class="col-lg-2">
            <img src="css/images/ap8.png">
          <br>
          <h4>Image name</h4>
        </div>
        <div class="col-lg-2">
            <img src="css/images/ap9.png">
          <br>
          <h4>Image name</h4>
        </div>

     </div><!--row 6 small images-->

      <div class="row aboutbg">
        <div class="col-lg-4">
          <img src="css/images/dr2.png">
         </div> 

        <div class="col-lg-8">
 
            <h1 class="text-danger" style="text-align: center;">About Apple hospital indore</h1>
            <h4 style="text-align: justify; padding: 25px;">Apple Hospital is incorporated under the status of the company- "Friends Unity Hospital and Research centre Private Limited" which is one of the leading integrated healthcare delivery service provider in Indore. The healthcare verticals of the company primarily comprise of diagnostics and day care specialty facilities. The hospital has been working with the mission to have a combination of human values of trust, ethics and service and quality healthcare. They project clinical excellence, distinctive patient care, transparency in actions & high level of integrity and excellence in its working.of human values of trust, ethics and service and quality healthcare. They project clinical excellence, distinctive patient care, transparency in actions & high level of integrity and excellence in its working.of human values of trust, ethics and service and quality healthcare. They project clinical excellence, distinctive patient care, transparency in actions & high level of integrity and excellence in its working. 
            </h4>
        </div>
      </div><!--row 7-->

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