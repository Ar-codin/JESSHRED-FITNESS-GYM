<?php

session_start();
unset($_SESSION['UserLogin']); 
unset($_SESSION['UserRole']);
echo header("location: ../HOME/jfgweb.php");
?>