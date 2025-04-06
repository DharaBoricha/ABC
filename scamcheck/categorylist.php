<style>
.fake{
    list-style-type: none
  }
 .card {
   
    flex: 3; /* 60% width */
    max-width: 90%;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    background: #fff;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

   
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
}

.card-body {
    padding: 20px;
    background: linear-gradient(135deg, #f9f9f9, #ffffff);
    border-radius: 15px;

}

.card-title {
    font-size: 1.8rem;
    font-weight: bold;
    color: #333;
}

.card-text {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
}
.head{
  margin: 10vh 0 3vw 5vw;
 font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
</style>
<?php
include("../scamcheck/db.php");
echo "<h1 class='head'>category</h1>";
$sql="select * from category";
$result=$conn->query($sql);
foreach($result as $row)
{
    $title=$row['title'];
    $id=$row['id'];
  echo "<ul class='fake'><li class='fakebody'>
  <div class='card'>
    <div class='card-body'>
    <div class='row-category'>
           <h4><a href='?c_id=$id'>$title</a></h4>
          </div>
     
       
  
    </div>
  </div>
  </li></ul>";
}

?>