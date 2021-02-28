<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
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
      session_start();
      $_SESSION['showError'] = "Username already exists";
    }
    else{

   
    if(($password == $cpassword)){

      $hash = password_hash($password,PASSWORD_DEFAULT);

       $sql="INSERT INTO `signup` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";

       $result = $conn->query($sql);
    
       if($result)
       {
          
          
           $_SESSION['showAlert'] = "true";
           header("Location: index.php");
           
       }
    }

    else{

        $_SESSION['showError'] = "Password do not match";
     
    }

}
}

?>


    

<form action="index.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <!-- <input type="email" class="form-control" id=" signupEmail"  name=" signupEmail" aria-describedby="emailHelp"> -->
    <input type="text" class="form-control" id=" signupEmail"  name=" username" aria-describedby="emailHelp">
   
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>

  <button type="submit" class="btn btn-primary">Signup</button>

</form>


</div>

    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>