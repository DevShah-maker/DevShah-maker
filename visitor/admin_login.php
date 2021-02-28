<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Login</title>
  </head>

<style>

.img{
      background-color:black;
  }

  .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
  }
 
  .btn{

      background-color:#FFD700;
      
  } 

</style>

  <body>


  <?php
    $login = false;
    $showAlert=false;
    $showError=false;
    // echo $_SERVER["REQUEST_METHOD"];
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'db.php';
    
    $username = $_POST["username"];  
    $password = $_POST["password"]; 
  
    // $exists = false;


      //  $sql="SELECT * from users where username='$username' and password='$password' ";
       $sql="SELECT * from admin_signup where username='$username' ";

       $result = $conn->query($sql);
       
       $num = mysqli_num_rows($result);
    // echo $num;

       if($num == 1)
       { 
         while($row=mysqli_fetch_assoc($result)){

           if(password_verify($password,$row['password'])){
          //  if(($password==$row['password'])){
            // $login = true;
            session_start();
            $_SESSION['admin_loggedin'] = "true";
            // $_SESSION['username'] = $username;
            // header("location: index.php");
           }
           else{
            $showError = "Invalid credential/s.";
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong>'.$showError.'
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            
           }
         }  
       }
    
    else
    {
      $showError = "Invalid credential/s.";
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> '.$showError.'
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
      
}

?>


    

  <h1 style="margin-left:655px" class="mt-3">Visitor Guidance</h1>
<div class="container mt-3" style="width:400px;height:430px; border:2px solid #E0E0E0;border-radius:5px;">

    <form action="admin_login.php" method="POST">
  <label class="mt-4 mb-3 ml-3"><h2>Admin Login</h2></label>
  <a href="logout.php"><span class="ml-5"><button type="button" class="btn btn-warning">Logout</button></span></a>
  <hr class="mt-2 mb-4">  

  <div class="form-group mt-4">
    <label for="exampleInputPassword1" style="margin-bottom:0px;" class="mr-4 ml-4">Username</label>
    <input type="text" class="form-control mr-4 ml-4" id="exampleInputPassword1" style="width:315px" name="username">
  </div>
  <div class="form-group mt-4">
    <label for="exampleInputPassword1" style="margin-bottom:0px;" class="mr-4 ml-4">Password</label>
    <input type="text" class="form-control mr-4 ml-4" id="exampleInputPassword1" style="width:315px" name="password">
  </div>
  
  <button type="submit" class="btn mr-4 ml-4" style="width:315px;">Continue</button>

  <div class="form-group form-check ml-2 mr-3 mt-5">
    <label class="form-check-label" for="exampleCheck1">By continuing,you agree to Visitor Guidance <a href="">Condition's of Use</a> and <a href="">Privacy Notice</a>.</label>
  </div>
</form>  
</div>

<?php

if($_SERVER['REQUEST_METHOD'] == "GET")
  session_start();
if(isset($_SESSION['admin_loggedin'])  && $_SESSION['admin_loggedin'] == "true")
{
echo'<div class="container">
<p></p>
<a href="admin_signup.php"><button type="submit" class="btn center" style="width:400px;">Create your new Visitor Guidance Account</button></a>
<a href="visiting_records.php"><button type="submit" class="btn center mt-2" style="width:400px;">Visiting records</button></a>

</div>';
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