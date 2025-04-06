<?php
session_start(); 
include("../scamcheck/db.php");
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $query = "SELECT * FROM user WHERE status=1 and email=? and password=?";
    $result = $conn->prepare($query);
    $result->bind_param("ss", $email, $password);
    $result->execute();
    $output = $result->get_result();

    if ($output->num_rows > 0) {
        $user = $output->fetch_assoc();
        $_SESSION["user_id"] = $user['id'];
        header("location:../scamcheck/adminpanel.php/main.php");
        exit();
    } 

    $query2 = "SELECT * FROM user WHERE email = ? AND password = ?";
    $result2 = $conn->prepare($query2);
    $result2->bind_param("ss", $email, $password);
    $result2->execute();
    $output2 = $result2->get_result();

    if ($output2->num_rows > 0) {
        $user = $output->fetch_assoc();
        $_SESSION["user_id"] = $user['id'];
        header("location:../scamcheck/index.php");
        exit();
    } else {
        $message = "Username or password is not correct";
    }
}


?>






























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include( "../scamcheck/commonfile.php");?>
    <style>
      .col-6 offset-sm-3{
        
        padding: 10px;
      }
    </style>
</head>
<body>


  <div class="container">
    <h1 style="text-align: center;">Login</h1>
    <form action="" method="POST">

    
<div class="col-6 offset-sm-3">
  <label for="email" class="form-label">email</label>
  <input type="text" name="email"  class="form-control" id="email" placeholder="">
</div>


<div class="col-6 offset-sm-3">
  <label for="password" class="form-label">password </label>
  <input type="password" name="password" class="form-control" id="password" placeholder="">
</div>

 <div class="col-6 offset-sm-3">
<span style="color: red;"><?php echo $message ?></span>
</div> -

<div class="col-6 offset-sm-3 " >
<button type="submit" class="btn" style="background:blue ;color:white;margin-top :10px ">Submit</button>
</div>
</form>
</div>


</body>
</html>
