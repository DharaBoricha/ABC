<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Heading Styling */
.head {
    font-size: 24px;
    color: #343a40;
    margin-bottom: 20px;
    text-transform: capitalize;
    border-bottom: 2px solid #007bff;
    padding-bottom: 5px;
}

/* Scam Card Styling */
.card {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 15px;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    color: #d9534f;
}

.card-text {
    font-size: 16px;
    color: #495057;
}

/* Fake List Styling */
.fake {
    list-style: none;
    padding: 0;
}

.fakebody {
    margin-bottom: 15px;
}

/* Repost Messages Section */
h3 {
    font-size: 20px;
    color: #007bff;
    margin-top: 15px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
   
} </style>
<div class="container">
<div class="row">
<div class="col-8">
<h1 class='head'>similar scams</h1>
<?php
include("../scamcheck/db.php");

if (isset($_GET["p_id1"])) {
    $post_id =$_GET["p_id1"]; 
    $query ="SELECT * FROM post WHERE id = $post_id";
          $result = $conn->query($query);
      foreach ($result as $row) {
      $scammer = $row['scammer'];
      $message = $row['message'];
          $post_id=$row['id'];
        echo "<ul class='fake'><li class='fakebody'>
              <div class='card'>
                <div class='card-body'>
                     <h5 class='card-title'>$scammer</h5>
                     <p class='card-text'>$message</p>
                </div>
                 </div>";
                
        $query = "SELECT * FROM repost WHERE post_id =$post_id";
        $stmt2 = $conn->prepare($query);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        echo "<h3>similar Messages:</h3>";
        foreach ($result2 as $row2) {
            $repostMessage = $row2['message'];
            echo "<ul class='fake'><li class='fakebody'>
                    <div class='card'>
                        <div class='card-body'>
                            <p class='card-text'>$repostMessage</p>
                        </div>
                    </div>";
        }
    }
}



