<?php

session_start();
unset($_SESSION['UserLogin']);  
echo header("location: ../HOME/jfgweb.php");
?>