<?php


if (!isset($_SESSION)) {
    session_start();
    
} 
if (!isset($_SESSION['UserLogin'])) {
    header("Location: ../HOME/jfgweb.php"); // Redirect to the admin page
    exit(); // Make sure no further code is executed
}




include_once ("../CONNECTION/connection.php");
$con = connection();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAILY RATE</title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <!-- FONT LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CSS LINK -->
	<link rel="stylesheet" href="useredit.css">
</head>
<body>
    
    
    <!-- HOME -->
            <!-- NAV -->
    <a name="home"></a>
<header class="headerpad">
    <div class="logotxt">
        <img src="../LOGOS_AND_PICS/icon.png" alt="image">
        <p class="jfg">JFG</p>
    </div>
    <nav>
        <div class="sidebar">
            <div>
                <img src="../LOGOS_AND_PICS/remove.png" class="remove" alt="image" onclick=hideSidebar()>
            </div>
            <div class="homehover">
                <a href="#home" class="hover5">HOME</a>
            </div>
            <div class="homehover1">
                <a href="#page2" class="hover6">TRAININGS</a>
                <img src="../LOGOS_AND_PICS/down.png" class="down">
            </div>
            <div class="homehover2">
                <div class="dropdown">
                    <a href="../WORKOUTS_AND_EXERCISES/UpperBody.php">UPPER BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.php">MIDDLE BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/LowerBody.php">LOWER BODY</a>
                </div>    
            </div>
            <div class="homehover">
                <a href="#page3" class="hover7">PRICING</a>
            </div>
            <div class="homehover">
                <a href="#page4" class="hover8">ABOUT US</a>
                <div class="dropdown">
                    <a href="#contact">CONTACT US</a>
                    <a href="../EQUIPMENTS/equipments.php">EQUIPMENTS</a>
                </div>   
            </div>
            <div class="loginside">
                <a href="../LOGOS_AND_PICS/loginform.php" class="loginsidebar">LOGIN</a>
            </div>
        </div> 
        <ul class="hide1">
            <li><a href="#home" class="hover1">HOME</a></li>
            <li class="trainings">
                <a href="#page2" class="hover2">TRAININGS</a>
                <ul class="dropdown">
                    <a href="../WORKOUTS_AND_EXERCISES/UpperBody.php">UPPER BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.php">MIDDLE BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/LowerBody.php">LOWER BODY</a>
                </ul>
            </li>
            <li><a href="#page3" class="hover3">PRICING</a></li>
            <li><a href="#page4" class="hover4">ABOUT US</a>
                <ul class="dropdown">
                    <a href="#contact">CONTACT US</a>
                    <a href="../EQUIPMENTS/equipments.php">EQUIPMENTS</a>
                </ul>
            </li>    
        </ul>
    </nav>
    <?php if (isset($_SESSION['UserLogin'])) {?>
    <div class="pndb" >

            <img class="profile1" src="../LOGOS_AND_PICS/dprof.png" id="profile-img">
            <div class="overlaydown" id="profile-overlay">
                <img id="profiledown" src="../LOGOS_AND_PICS/profiledown.png">
            </div>

            <div class="profiledropdown" id="dropdown-menu">
                <div class="profiletop">
                    <img src="../LOGOS_AND_PICS/dprof.png">
                    <div class="profiletop1">
                        <h1>Adrianne Boyles</h1>
                        <button>Edit Profile</button>
                    </div>
                </div>
                <div class="profilebot">
                    <a href="../LOGIN_AND_SIGN_UP/logout.php" class="logout">LOGOUT</a>
                </div>
            </div>
        </div>
    
    <?php } else { ?>
    <a href="../LOGIN_AND_SIGN_UP/loginform.php" class="login">LOGIN</a>
    <?php }?>
    <img src="../LOGOS_AND_PICS/menu.png" class="menu" onclick=showSidebar()>
</header>
    <script src="useredit.js"></script>
</body>    
</html>    