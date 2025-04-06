 <?php

 include("../scamcheck/db.php");
 session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $message1 = $_POST['message1'];
     $user_id = $_SESSION['user_id'];
     if (isset($_GET["p_id"])) {
         $post_id =($_GET["p_id"]); 
        $query = "INSERT INTO repost (post_id, user_id, message) VALUES (?, ?, ?)";
         $sql = $conn->prepare($query);
         $sql->bind_param("iis", $post_id, $user_id, $message1);
         $sql->execute();
 
         header("location: index.php");
         //header("Location: viewall.php?p_id1=" . $post_id);
         exit();
     }
 }

?>













<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>add your similar scam</title>
     <?php include( "../scamcheck/commonfile.php");?>
     <style>
       .col-6 offset-sm-3{
        
         padding: 10px;
       }
     </style>
 </head>
 <body>


 <div class="container">
<h1 style="text-align: center;">similarscam</h1>
     <form action="" method="POST">

<div class="col-6 offset-sm-3">
   <label for="message1" class="form-label">message </label>
   <input type="text" name="message1" class="form-control" id="message1" placeholder="">
 </div>



 <div class="col-6 offset-sm-3 " >
 <button type="submit" class="btn" style="background:blue ;color:white;margin-top :10px ">Submit </button>
 </div>
 </form>
 </div>
 </body>
</html> 
