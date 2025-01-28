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
	<link rel="stylesheet" href="equipments.css?-1.1">
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
    
<Section>
    <div class="fsection">
        <div class="title">
            <div class="items">
                <h1>Explore Our State-of-the-Art Equipment</h1>
                <p>Discover the top-quality fitness equipment at Jesshred Fitness Center, designed to elevate your workout experience. From strength training machines to cardio gear, our facility is equipped with everything you need to achieve your fitness goals.</p>
                <button>GET STARTED</button>
            </div>
            <div class="items">
                 <iframe width="360" height="215" src="https://www.youtube.com/embed/rlTqKosWrwo?si=lwqPTA8b0pq3ry6C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>    
        </div>
    </div>
</Section>
<section>
    <div class="equipments">
        <div class="equipments1">
            <h1>Upper body</h1>
        </div>
        <div class="equipments2" id="section1">
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/arm.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/arm1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
        </div>
    </div>
    <div class="equipments">
        <div class="equipments1">
            <h1>Middle Body</h1>
        </div>
        <div class="equipments2" id="section1">
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
        </div>
    </div>
    <div class="equipments">
        <div class="equipments1">
            <h1>Lower Body</h1>
        </div>
        <div class="equipments2" id="section1">
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
            <div class="equipments3">
            <img src="../LOGOS_AND_PICS/lowerbody1.jpg">
            </div>
        </div>
    </div>
</section>  
     

    <!-- Modal for popup -->
    <div class="modal" id="imageModal">
        <span class="close">&times;</span>
        <img id="modalImage" src="" alt="Modal Image">
    </div>
    
    
    
    
    
    
    
    
    
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
                <a href="../HOME/jfgweb.html#page4"><p>About us</p></a>
                <a href="../HOME/jfgweb.html#page4"><p>Location</p></a>
                <a href="../EQUIPMENTS/equipments.html"><p>Equipments</p></a>
                <a href="../HOME/jfgweb.html#contact"><p>Contact us</p></a>
            </div>    
        </div>
        <div class="f3">
            <P>SITE LINKS</P>
            <div class="f3about">
                <a href="../HOME/jfgweb.html"><p>HOME</p></a>
                <a href="../HOME/jfgweb.html#page2"><p>TRAININGS</p></a>
                <a href="../HOME/jfgweb.html#page3"><p>PRICING</p></a>
                <a href="../LOGIN_AND_SIGN_UP/loginform.html"><p>LOGIN</p></a>
                <a href="../LOGIN_AND_SIGN_UP/signupform.html"><p>SIGN UP</p></a>
            </div> 
        </div>    
        <div class="f3">
            <P>MORE SITE LINKS</P>
            <div class="f3about">
                <a href="../WORKOUTS_AND_EXERCISES/UpperBody.html"><p>UPPER BODY</p></a>
                <a href="../WORKOUTS_AND_EXERCISES/MiddleBody.html"><p>MIDDLE BODY</p></a>
                <a href="../WORKOUTS_AND_EXERCISES/LowerBody.html"><p>LOWER BODY</p></a>
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
        const containers = document.querySelectorAll('#section1, #section2'); // Use querySelectorAll for multiple elements

        // Add 'wheel' event listeners to each container
        containers.forEach(container => {
            container.addEventListener('wheel', function(event) {
                // Scroll horizontally instead of vertically
                container.scrollLeft += event.deltaY;

                // Prevent default vertical scroll behavior to avoid page scroll
                event.preventDefault();
            });
        });
    </script>
    <Script>
    document.addEventListener('scroll', () => {
        const header = document.querySelector('header');
            if (window.scrollY > 0) { // Adjust scroll distance as needed
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

    </Script>
    
    <script>
        // JavaScript for modal functionality
        const images = document.querySelectorAll('.equipments2 img');
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
</body>          
</html>    