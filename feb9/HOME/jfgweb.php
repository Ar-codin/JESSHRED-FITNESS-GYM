<?php


if (!isset($_SESSION)) {
    session_start();
    
}

if (isset($_SESSION['UserRole']) && $_SESSION['UserRole'] === 'admin') {
    header("location: ../ADMIN/admin.php"); // Redirect admin to the admin page
    exit();
}


include_once ("../CONNECTION/connection.php");
$con = connection();

$user_id = $_SESSION['UserID'];
$user_pic = $_SESSION['pic'];
$user_mark = $_SESSION['bookmark'];

$sql = "SELECT training_name, training_picture FROM trainings WHERE training_value = '$user_mark' LIMIT 1";
$result = $con->query($sql);

// Check if a row is returned
if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    $training_name = $row['training_name'];  // Store the training name
    $training_picture = $row['training_picture'];
} 
$training_value = isset($_POST['training_value']) ? $_POST['training_value'] : ''; // Get value from POST if exists
$check_sql = "SELECT * FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
$check_result = $con->query($check_sql);
$isBookmarked = ($check_result->num_rows > 0);

// Handle form submission
if (isset($_POST['bookmark'])) {
    if ($isBookmarked) {
        // Remove bookmark
        $delete_sql = "DELETE FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
        $con->query($delete_sql);
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('remove').style.display = 'flex';
            });
          </script>";;
    } else {
        // Add bookmark
        $insert_sql = "INSERT INTO user_bookmarks (user_id, training_value) VALUES ('$user_id', '$training_value')";
        $con->query($insert_sql);
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('add').style.display = 'flex';
            });
          </script>";;
    }

    
}
$sql = "select * FROM users WHERE id = '$user_id'";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

$sql = "SELECT * FROM trainings WHERE bodypart = 'middlebody'";
$result = $con->query($sql);

$sql1 = "SELECT * FROM trainings WHERE targetpart = 'core'";
$result1 = $con->query($sql1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JESSHRED FITNESS GYM</title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <!-- FONT LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CSS LINK -->
	<link rel="stylesheet" href="jfgweb.css?v=1.1">
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
            <?php if($user_pic == null) { ?>
            <img class="profile1" id="profile-img" src="../PROFILES/dprof.png">
            <?php } else { ?>
            <img class="profile1" id="profile-img" src="../PROFILES/<?php echo $row['picture']; ?>">
            <?php } ?>
            
            <div class="overlaydown" id="profile-overlay">
                <img id="profiledown" src="../LOGOS_AND_PICS/profiledown.png">
            </div>

            <div class="profiledropdown" id="dropdown-menu">
                <div class="profiletop" >     
                    <?php if($user_pic == null) { ?>
                    <img src="../PROFILES/dprof.png">
                    <?php } else { ?>
                    <img src="../PROFILES/<?php echo $row['picture']; ?>">
                    <?php } ?>
                    <div class="profiletop1">
                        <h1><?php echo $row['username']; ?></h1>
                        <div class="copy">
                            <p id="copyText" style="text-transform: lowercase;"><?php echo $row['email']; ?></p>
                            <p onclick="copyToClipboard()" style="color: black; cursor: pointer; ">copy</p>
                        </div>
                        <h1 style="background: #8ef78e; max-width: 80px; margin-top: 5px; padding: 1px 10px; border-radius: 25px;">MEMBER</h1>
                    </div>
                </div>
                <div class="profilebot">
                    <div class="profilebot1" onclick="location.href='../USEREDIT/useredit.php';">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/avatar.png">
                            <button>VIEW Profile</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                    <div class="profilebot1" id="purchaseid">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/pricing.png">
                            <button>purchase</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                    <div class="profilebot1" id="bookmarkid">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/book-mark.png">
                            <button>Bookmark</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                </div>
                <div class="profilebot">
                    <div class="profilebot1" onclick="location.href='../USEREDIT/useredit.php';">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/info.png">
                            <button>help center</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                    <div class="profilebot1" onclick="location.href='../USEREDIT/useredit.php';">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/customer-service-headset.png">
                            <button>submit a ticket</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                </div>
                <div class="profilebot">
                    <div class="profilebot1" onclick="location.href='../LOGIN_AND_SIGN_UP/logout.php';">
                        <div class="profilebot2">
                            <img src="../LOGOS_AND_PICS/logout.png">
                            <button>logout</button>
                        </div>
                        <img src="../LOGOS_AND_PICS/rightarrow.png">
                    </div>
                </div>
            </div>
        </div>
    
    <?php } else { ?>
    <a href="../LOGIN_AND_SIGN_UP/loginform.php" class="login">LOGIN</a>
    <?php }?>
    <img src="../LOGOS_AND_PICS/menu.png" class="menu" onclick=showSidebar()>
    <div id="purchaseoverlay" class="purchase">
        <div class="purchase1">
           <div class="purchasetop">
                <h1>PURCHASE</h1>
                <img id="closeOverlay" src="../LOGOS_AND_PICS/remove.png">
            </div> 
            <div class="purchasebot">
                <div class="purchasel">
                    <div id="pl1" class="purchasel1">
                        <h1>ACTIVE PLANS</h1>
                    </div>
                    <div id="pl2" class="purchasel1">
                        <h1>HISTORY</h1>
                    </div>
                </div>
                <div class="purchaser">
                    <div id="pr1" class="purchaser1">
                        <div class="nofound">
                            <img src="../LOGOS_AND_PICS/page-not-found.png">
                            <p>CURRENTLY NO SUBSCRIPTION</p>
                        </div>
                        
                    </div>
                    <div id="pr2" class="purchaser1">
                       <div class="nofound">
                            <img src="../LOGOS_AND_PICS/page-not-found.png">
                            <p>CURRENTLY NO history</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bookmarkoverlay" class="bookmark">
        <div class="bookmark1">
           <div class="bookmarktop">
                <h1>bookmark</h1>
                <img id="closeOverlay1" src="../LOGOS_AND_PICS/remove.png">
            </div> 
            <div class="bookmarkbot">
                <div class="bookmarkr">
                    <?php
                    // Get the user_id from the session
                    $user_id = $_SESSION['UserID'];

                    // Query to get all training_value bookmarks for the user
                    $sql_bookmarks = "SELECT training_value FROM user_bookmarks WHERE user_id = '$user_id'";
                    $result_bookmarks = $con->query($sql_bookmarks);

                    // Check if the user has bookmarks
                    if ($result_bookmarks->num_rows > 0) {
                        while ($row_bookmark = $result_bookmarks->fetch_assoc()) {
                            $user_mark = $row_bookmark['training_value'];

                            // Query to get the training name
                            $sql_training_name = "SELECT training_name, training_picture, ytlinks FROM trainings WHERE training_value = '$user_mark'";
                            $result_training_name = $con->query($sql_training_name);

                            if ($result_training_name->num_rows > 0) {
                                $row_training_name = $result_training_name->fetch_assoc();
                                $training_name = $row_training_name['training_name'];
                                $training_picture = $row_training_name['training_picture'];
                                $ytlinks = $row_training_name['ytlinks'];
                                ?>

                                <!-- Each training name inside its own div -->
                                <div class="bookmark-item" >
                                    <img  src="../LOGOS_AND_PICS/<?php echo $training_picture; ?>">
                                    <div class="bookmark2" >
                                        <p><?php echo $training_name; ?></p>
                                        <div class="bookmarkremove">
                                            <form method="post">
                                                <button id="myButton" data-link="<?php echo $ytlinks; ?>">HOW TO USE</button>
                                                <input type="hidden" name="training_value" value="<?php echo $user_mark; ?>">
                                                <button type="submit" name="bookmark" class="hidden-button" style="width: 100px;">remove</button>
                                            </form>
                                        </div>
                                    </div>        
                                </div>

                                <?php
                            }
                        }
                    } else {
                        // If no bookmarks exist, show this
                        ?>
                        <div id="br1" class="bookmarkr1" style="margin-top: 70px;" >
                            <div class="nofound">
                                <img src="../LOGOS_AND_PICS/page-not-found.png">
                                <p>CURRENTLY NO BOOKMARK</p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</header>
    <div class="alertoverlay" id="add">
        <div class="alert" id="alertoverlay">
            <div class="alert1">
                <h1>Saved to bookmark</h1>
                <a id="showbm">See lists</a>
            </div>
            <button id="closealert">OKAY</button>
        </div>
    </div>
    <div class="alertoverlay" id="remove">
        <div class="alert" id="alertoverlay">
            <div class="alert1">
                <h1>Removed to bookmark</h1>
                <a id="showbm1">See lists</a>
            </div>
            <button id="closealert1">OKAY</button>
        </div>
    </div>
            <!--END OF NAV -->
    
        
    
    
    
    
<section class="homepage">
    <img src="../LOGOS_AND_PICS/Bodyicon.png" class="logoicon">
    <div class="tagline">	
        <p>LIFT.GRIND.<span class="conquer">CONQUER</span></p>
        <p class="tagline2">do something today that your future<br> self will thank you for.</p>
        <button class="getfit" onclick="location.href='../LOGIN_AND_SIGN_UP/loginform.php';" >GET FIT NOW!</button>
    </div>
</section>
    <!--END OF HOME -->
    
   

    
    
    
    <!--SECOND PAGE OR TRAINING SECTION-->
<a name="page2"></a>    
<section class="trainingsection">
    <h1 class="title1">TRAININGS OFFERS</h1>
    <br>
    <div class="training_divparent1">
        <div class="training_divoffspring1">
            <img src="../LOGOS_AND_PICS/page2.jpg" class="imgpage2">
        </div>
        <div class="training_divoffspring2">
            <div class="label">
                <p>WORKOUTS/EXERCISES</p>
            </div>
            <div class="container"><a href="../WORKOUTS_AND_EXERCISES/UpperBody.php">
                 <img src="../LOGOS_AND_PICS/upperbody1.jpg">
                 <h4>upper body</h4>
            </a></div> 
            <div class="container"><a href="../WORKOUTS_AND_EXERCISES/MiddleBody.php">
                <img src="../LOGOS_AND_PICS/arm.jpg">
                <h4>middle body</h4>
            </a></div> 
            <div class="container"><a href="../WORKOUTS_AND_EXERCISES/LowerBody.php">
                <img src="../LOGOS_AND_PICS/lowerbody.jpg">
                <h4>lower body</h4>
            </a></div> 
        </div>    
        <div class="text_trainingsection">
            <p>Welcome to Jesshred Fitness Center, where you'll find a wide variety of<br> top-notch equipment to suit every workout need. From cardio machines<br> to strength training gear, we've got everything you need to achieve<br> your fitness goals!</p>
            
        </div>
       <button  onclick="location.href='../EQUIPMENTS/equipments.php';" >LEARN MORE</button>
    </div>

</section>  
    
    <!--END OF SECOND PAGE OR TRAINING SECTION-->
    
    
    
    
    
    
    
    
    <!--DIVIDER -->
<section class="divider">
    <div class="custom-shape-divider-top-1731654248">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
    </div>
</section>
    <!--END OF DIVIDER -->
    
    
    
    
    <!--THIRD PAGE -->
    <a name="page3"></a>
<section class="pricingpage">
    <h1 class="title">PRICING</h1>
    <div class="page3">
        <div class="page31">
            <h1><b>DAILY RATE</b></h1>
            <p><span>₱</span> 35.00</p>
            <p class="perks">no time limit</p>
            <hr style="border: 1px solid black; width: 80%; margin-top: 15px;">
            <p class="perks">Access to Gym</p>
            <hr style="border: 1px solid black; width: 80%; margin-top: 15px;">
            <?php if (isset($_SESSION['UserLogin'])) {?>
            <a href="../PAYMENT/dailyrate.php">Choose plan</a>
            <?php } else { ?>
            <a href="../LOGIN_AND_SIGN_UP/loginform.php">Choose pLAN</a>
            <?php }?>
        </div>
        <div class="page311">
            <h1><b>MONTHLY RATE</b></h1>
            <p><span>₱</span> 500.00</p>
            <p class="perks">any time/day</p>
            <hr style="border: 1px solid black; width: 80%; margin-top: 15px;">
            <p class="perks">LOW COST</p>
            <hr style="border: 1px solid black; width: 80%; margin-top: 15px;">
            <?php if (isset($_SESSION['UserLogin'])) {?>
            <a href="../PAYMENT/monthlyrate.php">Choose plan</a>
            <?php } else { ?>
            <a href="../LOGIN_AND_SIGN_UP/loginform.php">Choose pLAN</a>
            <?php }?>
        </div>
    </div>
</section>
    <!--END OF THIRD PAGE -->
    
    
    
    
    
    
    <!--DIVIDER -->
<section class="connect">
    <br>
        <h2>Strive for Progress, Not Perfection.</h2>
    <br>
</section>
    <!--END OF DIVIDER -->
    
    
    
    
    
    <!--FOURTH PAGE -->
    <a name="page4"></a>
<section class="aboutuspage">
    
    <div class="page4">
        <div class="page41">
            <h1 class="title4">ABOUT US</h1>
            <p>WE ARE LOCATED AT BLK 3 LOT 6 POBLACIION 4 (SECOND FLOOR) IN FRONT OF EARIST CAVITE CAMPUS</p>
        </div>
        <div class="child2">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d789.6293939002355!2d121.00995263137463!3d14.30012293545164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d714d719974b%3A0x9dd9959cc7cf8cc2!2sJesshred%20Fitness%20Gym!5e0!3m2!1sen!2sph!4v1731678192369!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="aboutusinfo">
                
                <p>At Jesshred Fitness Gym, we’re all about empowering you to reach your fitness goals. With top-notch equipment, expert trainers, and a supportive community, we provide the perfect space to shred limits and build strength. Whether you're a beginner or a seasoned athlete, Jesshred is your partner in fitness and wellness.</p>
                <div class="page42">
                    <div class="page421">
                        <img src="../LOGOS_AND_PICS/telephone.png">
                        <h1 class="phone">phone</h1>
                        <p>+639104986364</p>
                    </div>
                    <div class="page421">
                        <img src="../LOGOS_AND_PICS/clock.png">
                        <h1 class="operatinghours">operating hours</h1>
                        <p>mon-sun</p>

                        <p>8:30 am to 10:pm</p>
                    </div>
                </div>
                
            </div>
            
        </div>
         <a name="contact" id="cont" ></a>
       
    </div>
</section>
    
<section class="contact" >
    <div class="contact1">
        <div class="contact2">
            <h1>CONTACT US!</h1>
            <p>Or reach manually to <a class="aemail">jfitnessgym2023@gmail.com</a></p>
            <img src="../LOGOS_AND_PICS/contactuslogo.jpg" height="300px">
        </div>
        <div class="contact3">
            <div class="contact4">    
                <form>
                    <input type="text" placeholder="Email"> 
                    <input type="text" placeholder="Name"> 
                    <textarea placeholder="message"></textarea>
                    <?php if (isset($_SESSION['UserLogin'])) {?>
                    <input type="submit" value="submit" class="submit">
                    <?php } else { ?>
                    <a class="submitbtn" onclick="window.location.href='../LOGIN_AND_SIGN_UP/loginform.php';">SUBMIT</a>
                    <?php }?>
                </form>
            </div>
        </div>
        
    </div>
</section>    
    
    <!--END OF FOURTH PAGE -->
<section class="footer">
    <div class="f1">
        <div class="f2">
            <img src="../LOGOS_AND_PICS/logobaw.jpg">
            <h1>JFG</h1>
        </div>
        <div class="f3">
            <p>FIND US IN SOCIAL MEDIA</p>
            <div class="f3img">
                <a href="https://www.facebook.com/profile.php?id=100092370410055"><img src="../LOGOS_AND_PICS/facebook1.png"></a>
                <a href="https://youtube.com/@jfitnessgym2023?si=laaUqIyNMMl6muda"><img src="../LOGOS_AND_PICS/youtube.png"></a>
            </div>
        </div>
        <div class="f3">
            <P>ABOUT US</P>
            <div class="f3about">
                <a href="#page4"><p>About us</p></a>
                <a href="#page4"><p>Location</p></a>
                <a href="../EQUIPMENTS/equipments.php"><p>Equipments</p></a>
                <a href="#contact"><p>Contact us</p></a>
            </div>    
        </div>
        <div class="f3">
            <P>SITE LINKS</P>
            <div class="f3about">
                <a href="#home"><p>HOME</p></a>
                <a href="#page2"><p>TRAININGS</p></a>
                <a href="#page3"><p>PRICING</p></a>
                <a href="../LOGIN_AND_SIGN_UP/loginform.php"><p>LOGIN</p></a>
                <a href="../LOGIN_AND_SIGN_UP/signupform.php"><p>SIGN UP</p></a>
            </div> 
        </div>    
        <div class="f3">
            <P>MORE SITE LINKS</P>
            <div class="f3about">
                <a href="../WORKOUTS_AND_EXERCISES/UpperBody.php"><p>UPPER BODY</p></a>
                <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.php"><p>MIDDLE BODY</p></a>
                <a href="../WORKOUTS_AND_EXERCISES/LowerBody.php"><p>LOWER BODY</p></a>
            </div>     
        </div>
    </div>
    <hr color="#303030" width="100%" size="1">
    <div class="btop">
        <div class="btop1">
            <p>@2024 JFG</p>
        </div>
        <div class="btop2"><a href="#home">
            <p>BACK TO TOP</p>
            <img src="../LOGOS_AND_PICS/down.png">
        </a></div>
    </div>
    <hr color="#303030" width="100%" size="1">
    <p class="outro">This site is for only for our one of our subjects and it follows the rules of survival</p>
</section>     
      
    
    
    <?php if (isset($_SESSION['UserLogin'])) {?>
    <script src="jfgweb.js?v=1.1"></script>
    <?php } else { ?>
    <script src="jfgweblogout.js"></script>
    <?php }?>
</body>
    
  
    

</html>


