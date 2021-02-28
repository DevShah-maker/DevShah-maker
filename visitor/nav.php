<?php

echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h2>Visitors guide</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>';


   

include 'db.php' ;
// echo'<ul style="list-style:none">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "true")

      {
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "true")
  $username = $_SESSION['username'];
$sql = "SELECT * from signup where username='$username'";
$result = $conn->query($sql);

echo'<h3 style="color:white">Welcome '.$username.'</h3>';

        echo'<li>
      <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
      </li>

      <li>
      <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
      </li>';
      }



      else

      {
        echo'<li>
        <a href="signup.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Signup</button></a>
        </li>

        <li>
        <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
        </li>';
      }

?>
    
    </div>
</nav>
<?php

    include 'login_modal.php';
    include 'signup_modal.php';
?>