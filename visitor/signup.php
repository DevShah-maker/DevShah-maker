<?php
    $showAlert=false;
    $showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'db.php';
    
    $username = $_POST["username"];  
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"]; 
    // $exists = false;

    // check whether this username exists
    $existSql="SELECT * from `signup` where username = '$username' ";
    $result = $conn->query($existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0)
    {
      $showError = "Username already exists";
    }
    else{

   
    if(($password == $cpassword)){

      $hash = password_hash($password,PASSWORD_DEFAULT);

       $sql="INSERT INTO `signup` ( `username`, `password`) VALUES ('$username', '$hash')";

       $result = $conn->query($sql);
    
       if($result)
       {
           $showAlert = true;
           session_start();
        //    header("Location: index.php");
           
       }
    }

    else{

        $showError = "Please match your password.";
     
    }

}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Signup on VISITOR GUIDANCE</title>
  </head>

  <style>
  
  
  body{
    background-image: url("background2.png");
    background-repeat: no-repeat;
    background-size:1600px ;
  }
  
  
  </style>
  <body>

<?php
    if($showAlert == true)
    {echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has now created and you can <a href="login.php">login</a>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}
?>
    <?php
    if($showError)
    {echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!  </strong>'.$showError. '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';}
?>
    <div class="container my-5">
    
    <h2 class="text-center">Signup to our website</h2>

    <form action ="signup.php" method= "POST">
  <div class="form-group" >
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


