<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- <style>
      .container my-4{
        /* margin-top: 500px; */
      }
    </style> -->
    <title>Welcome to Visitor's guide</title>
  </head>
  <body>
 
  
<?php  
session_start();
include 'nav.php' ;

?>



<!-- Category container starts here -->
<div class="container my-4" id="ques">
<h2 class="text-center my-5">Visitor's Guide-Insight</h2>
<div class="row my-3">

<!-- fetch all the categories -->

<!-- for loop to iterate through categories -->

<!-- <div class="card" style="margin-left:80px;"> -->
<!-- <div class="card-deck" style="width: 1500px;height:450px;"> -->

<div class="card-body mr-2" style="border:2px solid black">
      <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>Admin</b></h5>
        <a href="admin_login.php"><img src="admin.png" class="card-img-top" alt="..." width:50px; style="height:300px;width:300px;margin-left:21px;"></a>
        <div class="card-body">
         
          <a class="card-text"><small class="text-muted">See more</small></a>
      
      </div>
      </div>
<div class="card-body" style="border:2px solid black">
      <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>Visitors</b></h5>
        <a href="visitor.php"><img src="student.png" class="card-img-top" alt="..." width:50px; style="height:300px;width:300px;margin-left:21px;"></a>
        <div class="card-body">
         
          <a class="card-text"><small class="text-muted">See more</small></a>
      
      </div>
      </div>
<div class="card-body ml-2" style="border:2px solid black">
      <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>RFID Verification</b></h5>
        <img src="rfid.png" class="card-img-top" alt="..." width:50px; style="height:300px;width:300px;margin-left:21px;">
        <div class="card-body">
         
          <a class="card-text"><small class="text-muted">See more</small></a>
      
      </div>
      </div>

      
    
      <!-- </div> -->
      <!-- </div> -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>





