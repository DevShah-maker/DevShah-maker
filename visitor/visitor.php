<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Visiting details</title>
  </head>

<style>

body
 {
    background-image: url("background.png");
    background-repeat: no-repeat;
    background-size:1600px ;
    /* background-color:white; */
  }

  .a{
    color:white;
  }

</style>

  <body>

  
  <!-- <span class="navbar-brand mb-0 h1">Navbar</span> -->

<?php
include 'db.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "true")
{
  $username = $_SESSION['username'];


  echo'<nav class="navbar navbar-dark bg-dark" style="margin-bottom:150px;">
  <h4 class="a">'.$username.',this is your visiting status.</h4>';
?>
  <form class="form-inline my-2 my-lg-0">
  <a button type="submit" class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Logout</button></a>
  </form>
  
</nav>
   

  <div class="container my-4" id="ques">

<div class="row my-3">

      <div class="card-body" style="border:2px solid black;margin-right:10px;">
        <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>Visiting schedule</b></h5>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scheduleModal"><img src="student.png" class="card-img-top" alt="..." width:50px; style="height:100px;width:100px;margin-left:21px;"></button>
        <div class="card-body">
          <a class="card-text"><small class="text-muted">See more</small></a>
      </div>
      </div>

      <div class="card-body" style="border:2px solid black;margin-left:30px;margin-right:30px">
      <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>New Visiting</b></h5>
        <a href="visitor_confirm.php"><img src="student.png" class="card-img-top" alt="..." width:50px; style="height:100px;width:100px;margin-left:21px;"></a>
        <div class="card-body">
         
          <a class="card-text"><small class="text-muted">See more</small></a>
      
      </div>
      </div>

      <div class="card-body ml-2" style="border:2px solid black">
      <h5 class="card-title mt-3 ml-4 mb-4 mr-5" style="font-size:23px;height:40px;" ><b>Visiting history</b></h5>
        <a href="visitor.php"><img src="student.png" class="card-img-top" alt="..." width:50px; style="height:100px;width:100px;margin-left:21px;"></a>
        <div class="card-body">
         
          <a class="card-text"><small class="text-muted">See more</small></a>
      
      </div>
      </div>
      </div>
      </div>

      <?php
include 'schedule_modal.php';


}


else{

  echo'<h1 class="center">Please login yourself to continue</h1>';

}
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>