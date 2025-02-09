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

$sql = "SELECT * FROM trainings WHERE bodypart = 'upperbody'";
$result = $con->query($sql);

$sql1 = "SELECT * FROM trainings WHERE targetpart = 'chest'";
$result1 = $con->query($sql1);
$sql2 = "SELECT * FROM trainings WHERE targetpart = 'back'";
$result2 = $con->query($sql2);
$sql3 = "SELECT * FROM trainings WHERE targetpart = 'shoulder'";
$result3 = $con->query($sql3);
$sql4 = "SELECT * FROM trainings WHERE targetpart = 'bicep'";
$result4 = $con->query($sql4);
$sql5 = "SELECT * FROM trainings WHERE targetpart = 'tricep'";
$result5 = $con->query($sql5);
$sql6 = "SELECT * FROM trainings WHERE targetpart = 'forearm'";
$result6 = $con->query($sql6);
$sql7 = "SELECT * FROM trainings WHERE targetpart = 'traps'";
$result7 = $con->query($sql7);
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
	<link rel="stylesheet" href="workoutsandexercise.css?v=2">
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
    <a name="home"></a>
<section>   
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
    
    <div class="workoutsone">
        <div class="title">
            <div class="items">
                <h1>HAVE NO IDEA HOW TO START?</h1>
                <h2>WE OFFER A FREE CONSULTATION!</h2>
                <p>In this video, we guide you on how to determine which or what plans<br>and program is fit for you!</p>
                <button>GET STARTED</button>
            </div>
            <div class="items">
                 <iframe width="460" height="315" src="https://www.youtube.com/embed/rlTqKosWrwo?si=lwqPTA8b0pq3ry6C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>    
        </div>
        

        <div class="programs">
            <div class="container1">
                <div class="etitle">
                    <h1>UPPER BODY PROGRAMS</h1>
                </div>
                <div class="search">
                    <input class="deco" type="text" id="search" placeholder="SEARCH">
               
                </div>
            </div>
            <div class="container2">
                <div class="container3">
                    <div class="programsboxone" data-target="sectionone"><a>
                        <h1 class="all">ALL</h1>
                    </a></div>
                    <div class="programsbox1" data-target="section1"><a>
                        <img src="../LOGOS_AND_PICS/chest.jpg" data-name="chest">
                        <h1>CHEST</h1>
                    </a></div>
                    <div class="programsbox" data-target="section2"><a>
                        <img src="../LOGOS_AND_PICS/back.jpg" data-name="back">
                        <h1>BACK</h1>
                    </a></div>
                    <div class="programsbox" data-target="section3"><a>
                        <img src="../LOGOS_AND_PICS/shoulder.jpg" data-name="shoulder">
                        <h1>SHOULDER</h1>
                    </a></div>
                    <div class="programsbox" data-target="section4"><a>
                        <img src="../LOGOS_AND_PICS/biceps.jpg" data-name="bicep">
                        <h1>BICEP</h1>
                    </a></div>
                    <div class="programsbox" data-target="section5"><a>
                        <img src="../LOGOS_AND_PICS/tricep.jpg" data-name="tricep">
                        <h1>TRICEP</h1>
                    </a></div>
                    <div class="programsbox" data-target="section6"><a>
                        <img src="../LOGOS_AND_PICS/forearm.jpg" data-name="forearm">
                        <h1>FOREARM</h1>
                    </a></div>
                    <div class="programsbox" data-target="section7"><a>
                        <img src="../LOGOS_AND_PICS/trap.jpg" data-name="traps">
                        <h1>TRAPS</h1>
                    </a></div>
                    <div class="no-results">No results found</div>
                </div>
                <div class="no-results" id="globalNoResults">No results found</div>
                <div class="container4" id="sectionone">
                <?php    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { 
                        $training_name = $row['training_name']; 
                        $training_image = $row['training_picture'];
                        $training_value = $row['training_value'];
                        $ytlinks = $row['ytlinks'];
                        
                    ?>
                    <form method="POST" style="display: contents;">
                        <div class="workouts" data-category="all" data-name="<?php echo $training_name; ?>">
                            <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                            <p><?php echo $training_name; ?></p>
                            <div class="workouts1" >
                                <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                    <button>HOW TO USE</button>
                                    <img src="../LOGOS_AND_PICS/play.png">
                                </div>
                                <?php 
                                $user_id = $_SESSION['UserID'];
                               
                                $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                $result_check = $con->query($sql_check);
                                $row_check = $result_check->fetch_assoc();
                                $isBookmarked = $row_check['count'] > 0;
                                ?>
                                <?php if ($isBookmarked) { ?>
                                <div class="workouts3r">
                                    <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                    <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                    <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                <?php } else { ?>
                                <div class="workouts3">
                                    <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                    <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                    <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                <?php } ?>
                                </div>    
                            </div>
                        </div>
                    </form>    
                    <?php
                        
                    }
                } else {
                    echo "<p>No middle body workouts found.</p>";
                }  
                ?>     
                </div>
                <div class="container4" id="section1">
                    <div class="no-results">No results found</div>
                    <?php    
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?> 
                </div>
                <div class="container4" id="section2">
                    <?php    
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?> 
                </div>  
                <div class="container4" id="section3">
                    <?php    
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?>
                </div>
                <div class="container4" id="section4">
                    <?php    
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?>
                </div>
                <div class="container4" id="section5">
                    <?php    
                    if ($result5->num_rows > 0) {
                        while ($row = $result5->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?>
                </div>
                <div class="container4" id="section6">
                    <?php    
                    if ($result6->num_rows > 0) {
                        while ($row = $result6->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?>
                </div>
                <div class="container4" id="section7">
                    <?php    
                    if ($result7->num_rows > 0) {
                        while ($row = $result7->fetch_assoc()) { 
                            $training_name = $row['training_name']; 
                            $training_image = $row['training_picture'];
                            $training_value = $row['training_value'];
                            $ytlinks = $row['ytlinks'];
                        ?>
                        <form method="POST">
                            <div class="workouts" data-category="core" data-name="<?php echo $training_name; ?>">
                                <img src="../LOGOS_AND_PICS/<?php echo $training_image; ?>">
                                <p><?php echo $training_name; ?></p>
                                <div class="workouts1" >
                                    <div class="workouts2" id="show-video-button" data-link="<?php echo $ytlinks; ?>">
                                        <button>HOW TO USE</button>
                                        <img src="../LOGOS_AND_PICS/play.png">
                                    </div>
                                    <?php 
                                    $user_id = $_SESSION['UserID'];

                                    $sql_check = "SELECT COUNT(*) as count FROM user_bookmarks WHERE user_id = '$user_id' AND training_value = '$training_value'";
                                    $result_check = $con->query($sql_check);
                                    $row_check = $result_check->fetch_assoc();
                                    $isBookmarked = $row_check['count'] > 0;
                                    ?>
                                    <?php if ($isBookmarked) { ?>
                                    <div class="workouts3r">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">
                                        <img src="../LOGOS_AND_PICS/remove1.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Remove</button>    
                                    <?php } else { ?>
                                    <div class="workouts3">
                                        <input type="hidden" name="training_value" value="<?php echo $training_value; ?>">    
                                        <img src="../LOGOS_AND_PICS/add.png" style="max-width: 25px;" >
                                        <button type="submit" name="bookmark" class="hidden-button">Add to Plan</button>
                                    <?php } ?>
                                    </div>    
                                </div>
                            </div>
                        </form>    
                        <?php

                        }
                    } else {
                        echo "<p>No middle body workouts found.</p>";
                    }  
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</section>    
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
                <a><img src="../LOGOS_AND_PICS/youtube.png"></a>
            </div>
        </div>
        <div class="f3">
            <P>ABOUT US</P>
            <div class="f3about">
                <a href="../HOME/jfgweb.php#page4"><p>About us</p></a>
                <a href="../HOME/jfgweb.php#page4"><p>Location</p></a>
                <a href="../EQUIPMENTS/equipments.php"><p>Equipments</p></a>
                <a href="../HOME/jfgweb.php#contact"><p>Contact us</p></a>
            </div>    
        </div>
        <div class="f3">
            <P>SITE LINKS</P>
            <div class="f3about">
                <a href="../HOME/jfgweb.php"><p>HOME</p></a>
                <a href="../HOME/jfgweb.php#page2"><p>TRAININGS</p></a>
                <a href="../HOME/jfgweb.php#page3"><p>PRICING</p></a>
                <a href="../LOGIN_AND_SIGN_UP/loginform.php"><p>LOGIN</p></a>
                <a href="../LOGIN_AND_SIGN_UP/signupform.php"><p>SIGN UP</p></a>
            </div> 
        </div>    
        <div class="f3">
            <P>MORE SITE LINKS</P>
            <div class="f3about">
                <a href="UpperBody.php"><p>UPPER BODY</p></a>
                <a href="MiddleBody.php"><p>MIDDLE BODY</p></a>
                <a href="LowerBody.php"><p>LOWER BODY</p></a>
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

   
    <script src="workoutsandexericse.js?v=1.0"></script>
</body>
   
 
</html>  