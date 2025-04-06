<?php
session_start();
session_unset();
session_destroy();
header("location:../scamcheck/index.php");
exit();
?>