<?php


if (!isset($_SESSION)) {
    session_start();
    
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
    <title>JESSHRED FITNESS GYM</title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <!-- FONT LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CSS LINK -->
	<link rel="stylesheet" href="payment.css?-1.1">
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
                    <a href="../WORKOUTS_AND_EXERCISES/UpperBody.html">UPPER BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.html">MIDDLE BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/LowerBody.Html">LOWER BODY</a>
                </div>    
            </div>
            <div class="homehover">
                <a href="#page3" class="hover7">PRICING</a>
            </div>
            <div class="homehover">
                <a href="#page4" class="hover8">ABOUT US</a>
                <div class="dropdown">
                    <a href="#contact">CONTACT US</a>
                    <a href="../EQUIPMENTS/equipments.html">EQUIPMENTS</a>
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
                    <a href="../WORKOUTS_AND_EXERCISES/UpperBody.html">UPPER BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.html">MIDDLE BODY</a>
                    <a href="../WORKOUTS_AND_EXERCISES/LowerBody.Html">LOWER BODY</a>
                </ul>
            </li>
            <li><a href="#page3" class="hover3">PRICING</a></li>
            <li><a href="#page4" class="hover4">ABOUT US</a>
                <ul class="dropdown">
                    <a href="#contact">CONTACT US</a>
                    <a href="../EQUIPMENTS/equipments.html">EQUIPMENTS</a>
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
                        <h6>Daily Rate</h6>
                        <div class="payment511">
                            <div class="payment6">
                                <img src="../LOGOS_AND_PICS/subscription.png">
                                <div class="payment611">
                                    <p>Plan</p>
                                    <select size="1">
                                        <option>Regular Rate</option>
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
                                    <h2>REGULAR RATE</h2>
                                    <p>To activate the regular rate, please wait for payment verification. Once your payment is verified, the count for the regular rate will be updated in your profile. Kindly present your proof of payment to the cashier to redeem it.</p>
                                    <button id="close-btn" onclick="closeOverlay('overlay2')">Close</button>
                                </div>
                            </div>
                        </div>
                        <h6>PERKS</h6>
                        <div class="perks">
                            <p>- NO TIME LIMIT</p>
                            <P>- Access to Gym</P>
                        </div>
                        <div class="total">
                            <h6>total</h6>
                            <div class="total1">
                                <h1>₱</h1>
                                <h1>35.00</h1>
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
    
    
    
    
    
</body>
    <script>
    document.getElementById('nextBtn1').addEventListener('click', function() {
      document.getElementById('step1').style.display = 'none'; // Hide step 1
      document.getElementById('step2').style.display = 'block'; // Show step 2
    });

    document.getElementById('prevBtn2').addEventListener('click', function() {
      document.getElementById('step2').style.display = 'none'; // Hide step 2
      document.getElementById('step1').style.display = 'block'; // Show step 1
    });

    document.getElementById('nextBtn2').addEventListener('click', function() {
      document.getElementById('step2').style.display = 'none'; // Hide step 2
      document.getElementById('step3').style.display = 'block'; // Show step 3
    });

    document.getElementById('prevBtn3').addEventListener('click', function() {
      document.getElementById('step3').style.display = 'none'; // Hide step 3
      document.getElementById('step2').style.display = 'block'; // Show step 2
    });
        
    document.getElementById('nextBtn3').addEventListener('click', function() {
      document.getElementById('step3').style.display = 'none'; // Hide step 3
      document.getElementById('step4').style.display = 'block'; // Show step 4
    });    
        
    document.getElementById('prevBtn4').addEventListener('click', function() {
      document.getElementById('step4').style.display = 'none'; // Hide step 4
      document.getElementById('step3').style.display = 'block'; // Show step 3
    });    
        


    </script>
    <script>
    // Function to show an overlay
    function showOverlay(overlayId) {
      document.getElementById(overlayId).style.display = 'flex'; // Use flex to center the content
    }

    // Function to close an overlay
    function closeOverlay(overlayId) {
      document.getElementById(overlayId).style.display = 'none';
    }
  </script>
    <script>
        // JavaScript for modal functionality
        const images = document.querySelectorAll('.overlay-content img');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.querySelector('.modal .close');

        // Show modal when image is clicked
        images.forEach(image => {
            image.addEventListener('click', () => {
                modal.style.display = 'flex';
                modalImage.src = image.src; // Set modal image to clicked image
            });
        });

        // Close modal when the close button is clicked
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>  
    <script>
        const profileImg = document.getElementById('profile-img');
        const profileOverlay = document.getElementById('profile-overlay');
        const dropdownMenu = document.getElementById('dropdown-menu');

        // Function to toggle dropdown visibility
        function toggleDropdown() {
            dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
        }

        // Attach event listeners to both the profile image and the overlay div
        profileImg.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent event from bubbling up
            toggleDropdown();
        });

        profileOverlay.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent event from bubbling up
            toggleDropdown();
        });

        // Hide dropdown when clicking anywhere outside the profile container
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.profile-container')) {
                dropdownMenu.style.display = 'none';
            }
        });
    </script>
    


    <script>
    function showSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar() {
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }
    function toggleCheckbox() {
        var checkbox = document.getElementById("submenu");
        checkbox.checked = !checkbox.checked;  // Toggle the checked property
     }
    </script>

    <script>
    document.querySelector('.homehover1').addEventListener('click', function () {
        const dropdown = document.querySelector('.homehover2 .dropdown');
        const arrow = document.querySelector('.homehover1 .down');

        // Toggle the dropdown visibility
        dropdown.classList.toggle('active');

        // Toggle the rotation of the arrow
        if (dropdown.classList.contains('active')) {
            arrow.classList.add('rotated'); // Rotate the arrow
        } else {
            arrow.classList.remove('rotated'); // Reset rotation
        }
    });
</script>
</html>