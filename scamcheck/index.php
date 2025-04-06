<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php include( "../scamcheck/commonfile.php");?>
</head>
<body>
<?php
session_start();
include ("../scamcheck/header.php");
if(isset($_GET['signup']) && !isset($_SESSION['user_id'])){
    include('../scamcheck/signup.php');
}
else if(isset($_GET['login']) && !isset($_SESSION['user_id'])){
    include('../scamcheck/login.php');
}
else if(isset($_GET['logout']) && isset($_SESSION['user_id'])){
    include('../scamcheck/logout.php');
}
else if(isset($_GET['postscam']) && isset($_SESSION['user_id'])){
    include('../scamcheck/postscam.php');
}
else if(isset($_GET['similarscam']) && isset($_SESSION['user_id'])){
    include('../scamcheck/similarscam.php');
}
else if(isset($_GET['c_id']) ){
    // $cid=$_GET['c_id'];
  include "../scamcheck/searchbar.php";
  include('../scamcheck/card.php');
}
else if(isset($_GET['p_id']))
{
  include("../scamcheck/repost.php");

}
else if(isset($_GET['p_id1']))
{
    include("../scamcheck/viewall.php");}

else{
    include "../scamcheck/searchbar.php";
    include "../scamcheck/card.php";
}

?>
</body>
</html>




















































