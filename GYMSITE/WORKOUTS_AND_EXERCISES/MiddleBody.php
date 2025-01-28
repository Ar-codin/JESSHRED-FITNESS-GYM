<?php


if (!isset($_SESSION)) {
    session_start();
    
}


include_once ("../CONNECTION/connection.php");
$con = connection();

?>


<!DOCTYPE html >
<html lang="en">
<head>
    <title>UPPER BODY</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="MiddleBody.css?-1.1">
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
</head>
<body>
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
                    <a href="UpperBody.php">UPPER BODY</a>
                    <a href="MiddleBody.php">MIDDLE BODY</a>
                    <a href="LowerBody.php">LOWER BODY</a>
                </div>    
            </div>
            <div class="homehover">
                <a href="../HOME/jfgweb.php#page3" class="hover7">PRICING</a>
            </div>
            <div class="homehover">
                <a href="../HOME/jfgweb.php#page4" class="hover8">ABOUT US</a>
                <div class="dropdown">
                    <a href="../HOME/jfgweb.php#cont">CONTACT US</a>
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
                    <li><a href="UpperBody.php">UPPER BODY</a></li>
                    <li><a href="MiddleBody.php">MIDDLE BODY</a></li>
                    <li><a href="LowerBody.php">LOWER BODY</a></li>
                </ul>
            </li>
            <li><a href="../HOME/jfgweb.php#page3" class="hover3">PRICING</a></li>
            <li><a href="../HOME/jfgweb.php#page4" class="hover4">ABOUT US</a>
                <ul class="dropdown">
                    <a href="../HOME/jfgweb.php#cont">CONTACT US</a>
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
    <a name="home"></a>
<section>   
    
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
        <div class="youtubepopup" id="overlay">
            <div class="youtubepopup1">
                <iframe 
                    id="youtube-video" 
                    src="" 
                    title="YouTube video player" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <button class="close-button" id="close-overlay">X</button>
        </div>
        <div class="programs">
            <div class="container1">
                <div class="etitle">
                    <h1>MIDDLE BODY PROGRAMS</h1>
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
                    <div class="programsbox" data-target="section1"><a>
                        <img src="../LOGOS_AND_PICS/chest.jpg" data-name="core">
                        <h1>CORE</h1>
                    </a></div>
                    <div class="no-results">No results found</div>
                </div>
                <div class="no-results" id="globalNoResults">No results found</div>
                <div class="container4" id="sectionone">
                    <div class="workouts" data-category="all" data-name="Incline sit up">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Incline sit up</p>
                        <div class="workouts1" >
                            <div class="workouts2" id="show-video-button" data-video-url="https://www.youtube.com/embed/rlTqKosWrwo?si=lwqPTA8b0pq3ry6C">
                                <button>HOW TO USE</button>
                                
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
                    <div class="workouts" data-category="all" data-name="Knee lift">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Knee lift</p>
                        <div class="workouts1" >
                            <div class="workouts2" id="show-video-button" data-video-url="https://www.youtube.com/embed/I-AoHRj6yVc?si=LoGGx935wRec5vJ7">
                                <button>HOW TO USE</button>
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
                    <div class="workouts" data-category="all" data-name="Side bend">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Side bend</p>
                        <div class="workouts1" >
                            <div class="workouts2">
                                <button>HOW TO USE</button>
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
                </div>    
                <div class="container4" id="section1">
                    <div class="no-results">No results found</div>
                    <div class="workouts" data-category="core" data-name="Incline sit up">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Incline sit up</p>
                        <div class="workouts1" >
                            <div class="workouts2" id="show-video-button" data-video-url="https://www.youtube.com/embed/rlTqKosWrwo?si=lwqPTA8b0pq3ry6C">
                                <button>HOW TO USE</button>
                                
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
                    <div class="workouts" data-category="core" data-name="Knee lift">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Knee lift</p>
                        <div class="workouts1" >
                            <div class="workouts2" id="show-video-button" data-video-url="https://www.youtube.com/embed/I-AoHRj6yVc?si=LoGGx935wRec5vJ7">
                                <button>HOW TO USE</button>
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
                    <div class="workouts" data-category="core" data-name="Side bend">
                        <img src="../LOGOS_AND_PICS/arm.jpg">
                        <p>Side bend</p>
                        <div class="workouts1" >
                            <div class="workouts2">
                                <button>HOW TO USE</button>
                                <img src="../LOGOS_AND_PICS/play.png">
                            </div>
                            <div class="workouts3">
                                <img src="../LOGOS_AND_PICS/add.png">
                                <button>Add to plan</button>
                            </div>    
                        </div>
                    </div>
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
                <a href="UpperBody.html"><p>UPPER BODY</p></a>
                <a href="MiddleBody.html"><p>MIDDLE BODY</p></a>
                <a href="LowerBody.html"><p>LOWER BODY</p></a>
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
        const containers = document.querySelectorAll('#sectionone, #section1'); // Use querySelectorAll for multiple elements

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
            document.addEventListener("DOMContentLoaded", function () {
            // Select all navigation items (divs representing each section)
            const navItems = document.querySelectorAll(".programsbox, .programsboxone, .programsbox1"); // Include both classes
            // Select all content sections (divs with class "container4")
            const sections = document.querySelectorAll(".container4");

            // Hide all sections initially
            function hideSections() {
                sections.forEach(function (section) {
                    section.style.display = "none"; // Hide all sections
                });
            }

            // Show the section corresponding to the target ID
            function showSection(targetId) {
                hideSections(); // Hide all sections before showing the target
                const targetSection = document.getElementById(targetId); // Get the section by ID
                if (targetSection) {
                    targetSection.style.display = "flex"; // Show the section
                }
            }

            // Function to set active state on the clicked navigation item
            function setActiveNavItem(targetNavItem) {
                navItems.forEach(function (navItem) {
                    navItem.classList.remove("active"); // Remove active class from all items
                });
                targetNavItem.classList.add("active"); // Add active class to the clicked item
            }

            // Add click event listener to each navigation item
            navItems.forEach(function (navItem) {
                navItem.addEventListener("click", function () {
                    // Get the target section from the data-target attribute
                    const targetSectionId = navItem.getAttribute("data-target");
                    showSection(targetSectionId); // Show the corresponding section
                    setActiveNavItem(navItem); // Set the clicked nav item as active
                });
            });

            // Show the first section (Chest) by default when the page loads
            showSection("sectionone"); // Show the section with ID 'section1' initially
            setActiveNavItem(navItems[0]); // Set the first item as active initially
        });




    </script>
    <script>
        document.getElementById('search').addEventListener('input', function () {
            const searchValue = this.value.trim().toLowerCase(); // Input text
            const categories = document.querySelectorAll('.programsbox, .programsboxone'); // Categories on the left

            categories.forEach(category => {
                const targetSectionId = category.getAttribute('data-target'); // Section ID
                const section = document.getElementById(targetSectionId); // Get section element
                const items = section.querySelectorAll('[data-name]'); // All items in the section
                let sectionHasMatch = false;

                items.forEach(item => {
                    const itemName = item.getAttribute('data-name').toLowerCase(); // Item name
                    if (itemName.includes(searchValue)) {
                        item.style.display = 'flex'; // Show matching item
                        sectionHasMatch = true; // Section has matches
                    } else {
                        item.style.display = 'none'; // Hide non-matching items
                    }
                });

                // Display or hide the "No results found" message for the category
                let noResultsMessage = section.querySelector('.no-results');
                if (!noResultsMessage) {
                    noResultsMessage = document.createElement('div');
                    noResultsMessage.className = 'no-results';
                    noResultsMessage.style.display = 'none';
                    section.appendChild(noResultsMessage);
                }

                // Add the category name to the "No results found" message
                const categoryName = category.textContent.trim(); // Get category name
                noResultsMessage.textContent = `No results found in ${categoryName}`;

                if (sectionHasMatch) {
                    noResultsMessage.style.display = 'none'; // Hide "No results found"
                } else {
                    noResultsMessage.style.display = 'block'; // Show "No results found"
                }
            });
        });
    </script>
    <script>
        // Get elements
        const overlay = document.getElementById('overlay');
        const closeOverlay = document.getElementById('close-overlay');
        const videoIframe = document.getElementById('youtube-video');

        // Event listener for all video buttons
        document.querySelectorAll('.workouts2').forEach(button => {
            button.addEventListener('click', function () {
                const videoUrl = this.getAttribute('data-video-url'); // Get the YouTube URL from the button's data attribute
                
                // Set the video iframe source
                videoIframe.src = videoUrl;

                // Show the overlay
                overlay.style.display = 'flex';
            });
        });

        // Close the overlay and stop the video
        closeOverlay.addEventListener('click', function () {
            overlay.style.display = 'none';
            videoIframe.src = ''; // Stop the video by clearing the iframe source
        });
    </script>
</body>
</html>  