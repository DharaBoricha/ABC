<?php
include("../scamcheck/db.php");
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $scammer=$_POST['scammer'];
   $message=$_POST['message'];
   $user_id = $_SESSION['user_id'];
   $category = $_POST['category'];  

   $scam = $conn->prepare("INSERT INTO `post`(`user_id`, `category_id`, `scammer`, `message`)
   VALUES (?, ?, ?, ?)");
   $scam->bind_param("iiss", $user_id, $category, $scammer, $message);
   $result = $scam->execute();
   
 
   header("location:../scamcheck/index.php");
 }
 

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post your scam</title>
    <?php include( "../scamcheck/commonfile.php");?>

    <style>
      .col-6 offset-sm-3{
        
        padding: 10px;
      }
    </style>
</head>
<body>


  <div class="container">
    <h1 style="text-align: center;">Post your scam</h1>
    <form action="" method="POST">

    
<div class="col-6 offset-sm-3">
  <label for="scammer" class="form-label">scammer</label>
  <input type="text" name="scammer"  class="form-control" id="scammer" placeholder="">
</div>


<div class="col-6 offset-sm-3">
  <label for="message" class="form-label">message </label>
  <input type="text" name="message" class="form-control" id="message" placeholder="">
</div>

<div class="col-6 offset-sm-3">
  <label for="category" class="form-label">category </label>
  <?php
  include("category.php");
  ?>
</div>


<div class="col-6 offset-sm-3 " >
<button type="submit" class="btn" style="background:blue ;color:white;margin-top :10px ">Submit </button>
</div>
</form>
</div>
</body>
</html>
