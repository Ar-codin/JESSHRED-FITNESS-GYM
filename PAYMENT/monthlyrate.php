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
    <title>MEMBERSHIP</title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <!-- FONT LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CSS LINK -->
	<link rel="stylesheet" href="payment.css?v=1.0">
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
                <a href="../HOME/jfgweb.php" class="hover5">HOME</a>
            </div>
            <div class="homehover1">
                <a href="../HOME/jfgweb.php#page2" class="hover6">TRAININGS</a>
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
                <a href="../HOME/jfgweb.php#page4" class="hover8">ABOUT US</a>
                <div class="dropdown">
                    <a href="../HOME/jfgweb.php#contact">CONTACT US</a>
                    <a href="../EQUIPMENTS/equipments.php">EQUIPMENTS</a>
                </div>   
            </div>
            <div class="loginside">
                <a href="../LOGOS_AND_PICS/loginform.php" class="loginsidebar">LOGIN</a>
            </div>
        </div> 
        <ul class="hide1">
            <li><a href="../HOME/jfgweb.php" class="hover1">HOME</a></li>
            <li class="trainings">
                <a href="../HOME/jfgweb.php#page2" class="hover2">TRAININGS</a>
                <ul class="dropdown">
                    <a href="../WORKOUTS_AND_EXERCISES/UpperBody.php">UPPER BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.php">MIDDLE BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/LowerBody.php">LOWER BODY</a>
                </ul>
            </li>
            <li><a href="../HOME/jfgweb.php#page3" class="hover3">PRICING</a></li>
            <li><a href="../HOME/jfgweb.php#page4" class="hover4">ABOUT US</a>
                <ul class="dropdown">
                    <a href="../HOME/jfgweb.php#contact">CONTACT US</a>
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
    
    
<section class="payment">
    <div class="payment1">
        <div class="payment2">
            <form>
                <div class="payment21" id="step1">
                    <div class="payment3">
                        <div class="back">
                            <img src="../LOGOS_AND_PICS/left-arrow.png">
                            <button onclick="window.location.href='../HOME/jfgweb.php#page3';">Back to plans?</button>
                        </div>
                        <h1>Checkout</h1>
                    </div>
                    <div class="payment4">
                        <h6>Membership</h6>
                        <div class="payment511">
                            <div class="payment6">
                                <img src="../LOGOS_AND_PICS/subscription.png">
                                <div class="payment611">
                                    <p>Plan</p>
                                    <select size="1">
                                        <option>Membership</option>
                                    </select>
                                </div>    
                            </div>
                            <div class="instruction" onclick="showOverlay('overlay2')">
                                <img src="../LOGOS_AND_PICS/info.png">    
                                <div class="instruction1" >
                                    <h3>INSTRUCTION</h3>   
                                </div>
                            </div>
                            <div id="overlay2" class="overlay">
                                <div class="overlay-content">
                                    <h1>instruction:</h1> 
                                    <h2>Membership</h2>
                                    <p>Once activated, the membership will be availaible and will display on user's profile.</p>
                                    <button id="close-btn" onclick="closeOverlay('overlay2')">Close</button>
                                </div>
                            </div>
                        </div>
                        <h6>PERKS</h6>
                        <div class="perks">
                            <p>- any time/day</p>
                            <P>- LOW COST</P>
                        </div>
                        <div class="total">
                            <h6>total</h6>
                            <div class="total1">
                                <h1>₱</h1>
                                <h1>500.00</h1>
                            </div>
                        </div>
                       
                    </div>
                    <div class="payment3111">
                        <div class="back111" id="nextBtn1">
                            <button >Next</button>
                            <img src="../LOGOS_AND_PICS/right-arrow.png">
                        </div>
                    </div>
                </div>
                <div class="payment22" id="step2">
                    <div class="payment3">
                        <div class="back" id="prevBtn2">
                            <img src="../LOGOS_AND_PICS/left-arrow.png">
                            <button>Back to checkout?</button>
                        </div>
                        <h1>Payment</h1>
                    </div>
                    <div class="payment4">
                        <h6>GCASH PAYMENT <span>(Don't forget to screenshot for proof)</span></h6>
                        <div class="payment5">
                            <div class="payment6">
                                <img src="../LOGOS_AND_PICS/telephone.png">
                                <div class="payment61">
                                    <p>Recipient No.</p>  
                                    <h3>09623773289</h3>
                                </div>    
                            </div>
                            <div class="payment6">
                                <img src="../LOGOS_AND_PICS/paymentuser.png">    
                                <div class="payment61">
                                    <p>Name</p>
                                    <h3>Adrianne Boyles</h3>   
                                </div>    
                            </div>         
                        </div>
                        <div class="payment7">
                            <h6>OR SCAN THIS QR CODE:</h6>

                            <div class="payment8">
                                <button onclick="showOverlay('overlay1')">DETAILS</button>
                                <div id="overlay1" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <p class="text">Click for full screen.</p>
                                        <button id="close-btn" onclick="closeOverlay('overlay1')">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment31">
                        <div class="back1" id="nextBtn2">
                            <button >Next</button>
                            <img src="../LOGOS_AND_PICS/right-arrow.png">
                        </div>
                    </div>
                </div>
                <div class="payment23" id="step3">
                    <div class="payment3">
                        <div class="back" id="prevBtn3">
                            <img src="../LOGOS_AND_PICS/left-arrow.png">
                            <button >Back to payment?</button>
                        </div>
                        <h1>Fill out</h1>
                    </div>
                    <div class="payment41">
                        <h6>GCASH PAYMENT</h6>
                            <div class="payment51">
                                <div class="payment6">
                                    <img src="../LOGOS_AND_PICS/paymentuser.png">
                                    <div class="payment611">
                                        <p>Name</p>
                                        <input type="text" placeholder="NAME" name="name" required>
                                    </div>    
                                </div>
                                <div class="payment6">
                                    <img src="../LOGOS_AND_PICS/telephone.png">
                                    <div class="payment611">
                                        <p>Number</p>
                                        <input type="number" placeholder="number" name="number" required>           
                                    </div>    
                                </div>
                            </div>
                            <div class="payment51">
                                <div class="payment6">
                                    <img src="../LOGOS_AND_PICS/id.png">
                                    <div class="payment611">
                                        <p>Reference ID</p>
                                        <input type="text" placeholder="reference id" name="name" required>
                                    </div>    
                                </div>
                                <div class="payment6">
                                    <img src="../LOGOS_AND_PICS/document.png">
                                    <div class="payment71">
                                        <p>Screenshot of Payment</p>
                                        <input type="file" placeholder="proof" name="number" required >           
                                    </div>    
                                </div>
                            </div>
                    </div>
                    <div class="payment31">
                        <div class="back1" id="nextBtn3">
                            <button >Next</button>
                            <img src="../LOGOS_AND_PICS/right-arrow.png">
                        </div>
                    </div>
                </div> 
                <div class="payment24" id="step4">
                    <div class="payment3">
                        <div class="back" id="prevBtn4">
                            <img src="../LOGOS_AND_PICS/left-arrow.png">
                            <button >Back to fill out?</button>
                        </div>
                        <h1>Confirmation</h1>
                    </div>
                    <div class="payment4">
                        <div class="notice">
                            <img src="../LOGOS_AND_PICS/warning.png">
                            <h6>Please wait for admin verification to activate your payment. <span><br>Note:</span> By proceeding, you agree that this payment is<span>non-refundable</span>.</h6>
                        </div>
                        
                        <div class="notice">
                            <div class="noticebtn" id="nextBtn2">
                                <button>SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>    
        </div>
    </div>
    <div class="modal" id="imageModal">
        <span class="close">&times;</span>
        <img id="modalImage" src="" alt="Modal Image">
    </div>
</section>
    
    
    
    
    <script src="payment.js?v=1.0"></script>
</body>
   
</html>