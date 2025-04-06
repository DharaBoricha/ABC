<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.head {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.fake {
    list-style-type: none;
    padding: 0;
}

.fakebody {
    margin-bottom: 20px;
}

.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.02);
}

.card-body {
    padding: 15px;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    color: #dc3545;
}

.card-text {
    font-size: 16px;
    color: #555;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.col-8 {
    width: 66.66%;
    padding: 10px;
}

.col-4 {
    width: 33.33%;
    padding: 10px;
}

@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }
    .col-8, .col-4 {
        width: 100%;
    }
}
</style>

<div class="container">
<div class="row">
<div class="col-8">
<h1 class='head'>ScamScroll:sA Never-Ending List of Fraud</h1>
<?php
include("../scamcheck/db.php");

if (isset($_GET["c_id"]))
{
    $cid = $_GET["c_id"]; 
    $query ="SELECT * FROM post WHERE category_id = $cid";
    $result = $conn->query($query);
 foreach ($result as $row) {
    $scammer = $row['scammer'];
    $message = $row['message'];
    $c_id=$row['id'];
   echo "<ul class='fake'><li class='fakebody'>
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>$scammer</h5>
                <p class='card-text'>$message</p>
     
     
            </div>
            </div>";
            
            
}
}
else {
    $query = "SELECT * FROM post"; 
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
                <h4><a href='?p_id=$post_id'>repost</a></h4>
                <h4><a href='?p_id1=$post_id'>viewall</a></h4>
     
     
            </div>
            </div>";
            
 }
}
   

?>
</div>


<div class="col-4">
  <?php
  include("../scamcheck/categorylist.php");
  ?>
</div>
</div>  



