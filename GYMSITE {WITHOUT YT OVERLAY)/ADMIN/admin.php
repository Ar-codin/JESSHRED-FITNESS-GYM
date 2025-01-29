<?php
if (!isset($_SESSION)) {
    session_start();
}

// Restrict access to admin page to only admin users
if (!isset($_SESSION['UserRole']) || $_SESSION['UserRole'] !== 'admin') {
    header("location: ../HOME/jfgweb.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
	<link rel="stylesheet" href="admin.css?-1.1">
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<Section class="header">
    <div class="header1">
        <div class="logo">
            <img src="../LOGOS_AND_PICS/icon.png">
            <h1>JESSHRED FITNESS GYM</h1>
        </div>
        
        <a href="../HOME/jfgweb.html">VIEW SITE</a>
        <div class="login">
        <a href="../LOGIN_AND_SIGN_UP/logout.php" class="login1" >LOGOUT</a>
        </div>    
    </div>
</Section>    
<section class="sidebutton">
    <div class="side">
        <div class="side1">
            <div class="panel" onclick="showContent('dashboardContent', this)">
                <a>DASHBOARD</a>
            </div>  
            <div class="panel" onclick="showContent('usersContent', this)">
                <a>USERS</a>
            </div>    
            <div class="panel" onclick="showContent('subsContent', this)">
                <a href="#">SUBSCRIPTION</a>
            </div>    
            <div class="panel" onclick="showContent('messContent', this)">
                <a href="#">MESSAGES</a>
            </div>    
        </div>
        <div class="side2">
            <div id="dashboardContent">
                <div class="top">
                    <div class="topsection">
                        <div class="topsectionlogo">
                            <img src="../LOGOS_AND_PICS/visits.png">
                        </div>
                        <div class="topsectiontitle">
                            <h1>VISITS</h1>
                            <p>0</p>
                        </div>
                    </div>
                    <div class="topsection1">
                        <div class="topsectionlogo1">
                            <img src="../LOGOS_AND_PICS/cart.png">
                        </div>
                        <div class="topsectiontitle" >
                            <h1>CUSTOMER</h1>
                            <p>0</p>
                            <button onclick="showContent('subsContent', this)">VIEW</button>
                        </div>
                    </div>
                    <div class="topsection2">
                        <div class="topsectionlogo2">
                            <img src="../LOGOS_AND_PICS/conversation.png">
                        </div>
                        <div class="topsectiontitle">
                            <h1>MESSAGES</h1>
                            <p>0</p>
                            <button onclick="showContent('messContent', this)">VIEW</button>
                        </div>
                    </div>
                    <div class="topsection3">
                        <div class="topsectionlogo3">
                            <img src="../LOGOS_AND_PICS/multiple-users-silhouette.png">
                        </div>
                        <div class="topsectiontitle">
                            <h1>MEMBERS</h1>
                            <p>0</p>
                            <button onclick="showContent('usersContent', this)">VIEW</button>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="latest">
                        <h1>LATEST ACTIVITIES</h1>
                    </div>

                    <div class="latest1">
                        <div class="logins">
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                            <div class="logins1">
                                <div class="logins2">
                                    <img src="../LOGOS_AND_PICS/user.png">
                                </div>   
                                <div class="logins3">
                                    <h1>adrianne <span>signed up succefully.</span></h1>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>    
            <div class="users" id="usersContent">
                <div class="userstop">
                    <div class="usersbar">
                        <div class="usersimg">
                            <img src="../LOGOS_AND_PICS/multiple-users-silhouette.png">
                        </div>
                        <div class="userstitle">
                            <h1>MEMBERS</h1>
                            <p>213</p>
                        </div>
                    </div>
                </div>
                <div class="usersbar2">
                    <div class="usersbar2title">
                        <h1>USERS</h1>
                    </div>
                    <div class="usersdata">     
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay16')">DETAILS</button>
                            <div id="overlay16" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay16')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay16')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay17')">DETAILS</button>
                            <div id="overlay17" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay17')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay17')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay18')">DETAILS</button>
                            <div id="overlay18" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay18')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay18')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay19')">DETAILS</button>
                            <div id="overlay19" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay19')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay19')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay20')">DETAILS</button>
                            <div id="overlay20" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay20')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay20')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>signed up succefully.</span></h1>
                            <button onclick="showOverlay('overlay21')">DETAILS</button>
                            <div id="overlay21" class="overlay">
                                <div class="overlay-content1">
                                    <div class="oc1">
                                        <img src="../LOGOS_AND_PICS/avatar.jpg"> 
                                        <h2>Remove this image?</h2>
                                        <button id="check" onclick="closeOverlay('overlay21')">✓</button>
                                    </div>
                                    <div class="oc2">
                                        <form action="submit.php" method="POST">
                                            <h2>User Information</h2>

                                            <label for="nickname">Nickname:</label>
                                            <input type="text" id="nickname" name="nickname" required><br>

                                            <label for="username">Username:</label>
                                            <input type="text" id="username" name="username" required><br>

                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" required><br>

                                            <label for="gender">Gender:</label><br>
                                            <select id="gender" name="gender" required><br>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select><br>

                                            <label for="age">Age:</label><br>
                                            <input type="number" id="age" name="age" min="0" required><br>

                                            <label for="weight">Weight (kg):</label>
                                            <input type="number" id="weight" name="weight" step="0.1" required><br>

                                            <label for="height">Height (cm):</label>
                                            <input type="number" id="height" name="height" step="0.1" required><br>

                                            <button type="submit">Save</button>
                                        </form>
                                        <button id="close-btn" onclick="closeOverlay('overlay21')">Close</button>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="customers" id="subsContent">
                <div class="customertop">
                    <div class="customerbar">
                        <div class="customerimg">
                            <img src="../LOGOS_AND_PICS/cart.png">
                        </div>
                        <div class="customertitle">
                            <h1>SUBSCRIPTIONS</h1>
                            <p>233</p>
                        </div>
                    </div>
                    <div class="customerbar1">
                        <div class="customerimg1">
                            <img src="../LOGOS_AND_PICS/money.png">
                        </div>
                        <div class="customertitle">
                            <h1>SALES</h1>
                            <p>213,213</p>
                        </div>
                    </div>
                </div>
                <div class="customerbot">
                    <div class="customerbar2">
                        <div class="cutomerbar2title">
                            <h1>HISTORY</h1>
                        </div>
                        <div class="customersubs">     
                            <div class="csname">
                                <h1>Adrianne <span>subsribes to yearly plan.</span></h1>
                                <button onclick="showOverlay('overlay1')">DETAILS</button>
                                <div id="overlay1" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay1')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay1')">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="csname">
                                <h1>Erick <span>subsribes to month plan.</span></h1>
                                <div id="overlay2" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay2')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay2')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay2')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay3" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay3')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay3')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay3')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Adrianne <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay4" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay4')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay4')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay4')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Erick <span>subsribes to month plan.</span></h1>
                                <div id="overlay5" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay5')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay5')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay5')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay6" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay6')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay6')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay6')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay7" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay7')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay7')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay7')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay8" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Waren Dabudlo</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="close-btn" onclick="closeOverlay('overlay8')">Close</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay8')">Delete</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay8')">DETAILS</button>
                            </div>
                        </div>
                    </div>
                    <div class="customerbar2">
                        <div class="cutomerbar2title">
                            <h1>PENDING</h1>
                        </div>
                        <div class="customersubs">     
                            <div class="csname">
                                <h1>Adrianne <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay9" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay9')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay9')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay9')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay9')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Erick <span>subsribes to month plan.</span></h1>
                                <div id="overlay10" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay10')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay10')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay10')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay10')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <button>DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Adrianne <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay11" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay11')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay11')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay11')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay11')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Erick <span>subsribes to month plan.</span></h1>
                                <div id="overlay12" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay12')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay12')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay12')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay12')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay13" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay13')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay13')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay13')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay13')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay14" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay14')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay14')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay14')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay14')">DETAILS</button>
                            </div>
                            <div class="csname">
                                <h1>Waren <span>subsribes to yearly plan.</span></h1>
                                <div id="overlay15" class="overlay">
                                    <div class="overlay-content">
                                        <img src="../LOGOS_AND_PICS/kashg.jpg"> 
                                        <h1>PAYMENT: <span>GCASH</span></h1>
                                        <p class="num">NO. 09213123314214</p>
                                        <p class="name">Adrianne Boyles</p>
                                        <h4>DATE: <span>DEC 25, 2089</span><br> TIME: <span>23:23:00</span></h4>
                                        <button id="check" onclick="closeOverlay('overlay15')">✓</button>
                                        <button id="ex" onclick="closeOverlay('overlay15')">X</button>
                                        <button id="close-btn" onclick="closeOverlay('overlay15')">Close</button>
                                    </div>
                                </div>
                                <button onclick="showOverlay('overlay15')">DETAILS</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>    
            <div class="message" id="messContent">
                <div class="messagestop">
                    <div class="messagesbar">
                        <div class="messagesimg">
                            <img src="../LOGOS_AND_PICS/conversation.png">
                        </div>
                        <div class="messagestitle">
                            <h1>MESSAGES</h1>
                            <p>234</p>
                        </div>
                    </div>
                </div>
                <div class="customerbar2">
                    <div class="cutomerbar2title">
                        <h1>MESSAGES</h1>
                    </div>
                    <div class="customersubs">     
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="csname">
                            <h1>Adrianne <span>sent a messages.</span></h1>
                            <button onclick="showOverlay('overlay22')">DETAILS</button>
                            <div id="overlay22" class="overlay">
                                <div class="overlay-content">
                                    <h1>MESSAGES:</h1>
                                    <p>I wanna know (ooh)
                                        I wanna know (what is love?)
                                        (I wanna know) I wanna know, know, know, know
                                        What is love? (I wanna know, I wanna know)
                                        (What is love?) I wanna know
                                        I wanna know
                                        I wanna know, know, know, know
                                        What is love?
                                        I wanna know</p>
                                    <p class="num">Email: <span>waren@gmail.com</span></p>
                                    <p class="name">NAME: <span>Waren</span></p>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Close</button>
                                    <button id="close-btn" onclick="closeOverlay('overlay22')">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="imageModal">
        <span class="close">&times;</span>
        <img id="modalImage" src="" alt="Modal Image">
    </div>
</section>    
    
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
       
     // Function to handle click and show the content
    function showContent(contentId, element) {
        // Hide all content sections
        const allContentSections = document.querySelectorAll('.side2 > div');
        allContentSections.forEach(section => section.style.display = 'none');

        // Show the selected content
        const contentToShow = document.getElementById(contentId);
        if (contentToShow) {
            contentToShow.style.display = 'block';
        }

        // Remove active class from all panels
        const allPanels = document.querySelectorAll('.side1 .panel');
        allPanels.forEach(panel => {
            panel.classList.remove('active');
        });

        // Add active class to the clicked panel
        element.classList.add('active');
    }

    // Set the default view when the page loads
    window.onload = () => {
        // Select the first panel (dashboard) and the corresponding content
        const dashboardPanel = document.querySelector('.side1 .panel');
        const dashboardContent = document.getElementById('dashboardContent');

        if (dashboardPanel && dashboardContent) {
            showContent('dashboardContent', dashboardPanel);
        }

        // Ensure hover effect stays on the first panel
        if (dashboardPanel) {
            dashboardPanel.classList.add('active');
        }
    }; 



</script>
 
</body>    
</html>