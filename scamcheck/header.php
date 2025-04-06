<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scam check</title>
    <link rel="stylesheet" href="scam.css">
</head>
<body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SCAMCHECK</a>
<!--     
  <div class="collapse navbar-collapse" id="navbarNav">  -->
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
      </li>


      <?php
      if(!isset($_SESSION['user_id'])){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">signup</a>
      </li>
      <?php 
        }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>



      <?php
       if(isset($_SESSION['user_id'])){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
      <?php  }  ?>
      <li class="nav-item">
        <a class="nav-link" href="postscam.php">Post your scam</a>
      </li>
    
      

    
      


       </ul>
    </div>
  </div>
</nav>


    
</body>
</html>