<?php


if (!isset($_SESSION)) {
    session_start();
    
}
if (isset($_SESSION['UserLogin'])) {
    $_SESSION['UserLogin'];
} 
include_once ("../CONNECTION/connection.php");
$con = connection();
$error = "";


if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
    $users = $con->query($sql) or die ($con->error);
    $row = $users->fetch_assoc();   
    $total = $users->num_rows;
    
    if ($total > 0) {
        $_SESSION['UserLogin'] = $row['username'];
        echo header("location: ../HOME/jfgweb.php"); 
        
    } else {
        $error = "No user found. Please check your username or password.";
    }
}



?>




<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SIGN IN
    </title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    
    <!-- CSS LINK -->
	<link rel="stylesheet" href="loginform.css?-1.1">
    <!-- FONT LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>
<body>
<a href="../HOME/jfgweb.php"><header>
    <img src="../LOGOS_AND_PICS/icon.png" alt="image">
    <p>JFG</p>
</header></a>
    <div class="loginbox">
        <form action="" method="post">
            <div class="parent1">
                <p>LOGIN</p>    
            </div>
            <div class="parent2">
                <?php if (!empty($error)): ?>
                    <div class="error" style="color: red; text-align: center; margin-bottom: 10px; font-size: 13px;">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <div class="logininfo">
                    <input type="username" name="uname" placeholder="USERNAME" class="username" autocomplete="off" required>
                </div>
                <div class="logininfo">
                    <div class="showpass">
                        <input type="password" id="password" name="pass" placeholder="PASSWORD" class="password" autocomplete="off" required>
                        <button type="button" id="togglePassword" aria-label="Show Password"><svg xmlns="http://www.w3.org/2000/svg" id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
                        <circle cx="12" cy="12" r="3" />
                        </svg></button>
                    </div>
                    
                </div> 
                <div class="forgot">
                    <div>
                        <input type="checkbox" name="remember me" id="check">
                        <label for="check">REMEMBER ME</label>
                    </div>
                    <div class="forgot">
                        <a href="#">FORGOT PASSWORD</a>
                    </div>
                </div>
                <div class="submit">
                    <button name="login">LOGIN</button>
                </div>
                <div class="signup">
                    <p class="signup">Don't have account?</p>
                    <a href="signupform.php">SIGN UP</a>
                </div>
                <div class="continuewith">
                    <div class="fb">
                        <a href=""><img src="../LOGOS_AND_PICS/facebook1.png"></a>
                    </div>
                    <div class="google">
                        <a href=""><img src="../LOGOS_AND_PICS/google.png"></a>
                    </div>
                </div>
            </div>
        </form>    
    </div>




</body>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            // Toggle password visibility
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Optional: Change the button text/icon
            eyeIcon.innerHTML =
            type === 'password'
              ? `<path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
                 <circle cx="12" cy="12" r="3" />`
              : `<path d="M17.94 17.94A10 10 0 0 1 12 20c-7 0-11-8-11-8a15.37 15.37 0 0 1 2.18-3.25M4.22 4.22A10 10 0 0 1 12 4c7 0 11 8 11 8a15.37 15.37 0 0 1-2.18 3.25M1 1l22 22" />`;
        });

    </script>
</html>