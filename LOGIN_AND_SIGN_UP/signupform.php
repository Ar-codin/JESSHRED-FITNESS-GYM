<?php
if (!isset($_SESSION)) {
    session_start();
    
}
if (isset($_SESSION['UserLogin'])) {
    header("Location: ../HOME/jfgweb.php"); // Redirect to the admin page
    exit(); // Make sure no further code is executed
}

include_once ("../CONNECTION/connection.php");
$con = connection();
$error = "";


$sql = "select * FROM users";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();
$total = $users->num_rows;
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $user_pic = $_POST['profile_pic'];
    if ($pass !== $cpass) {
        $error = "Passwords do not match.";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$uname' OR email = '$email'";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            $error = "Username or email already exists.";
        } else { // **Handle File Upload** (Keep your SQL logic the same)
            $uploadDir = __DIR__ . "/../PROFILES/"; // This ensures correct directory
            $fileName = basename($_FILES["profile_pic"]["name"]);
            $targetFilePath = $uploadDir . $fileName;

            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Allowed file types
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($fileType, $allowedTypes)) {
                $error = "Invalid file type. Only JPG, PNG, and GIF allowed.";
            } else {
                // Move file to the correct directory
                if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFilePath)) {
                    $user_pic = "" . $fileName;
                    $sql = "INSERT INTO users (email, username, password, picture) VALUES ('$email', '$uname', '$pass', '$user_pic')";
                    if ($con->query($sql) === TRUE) {
                        // Redirect to login page after successful signup
                        echo header("Location: loginform.php");
                    } else {
                        $error = "Error: " . $con->error;
                    }   
                } else {
                    $error = "File upload failed.";
                }
        }
    } 
   
    }
} 

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SIGN UP
    </title>
    <link rel="icon" href="../LOGOS_AND_PICS/icon.png" type="image/x-icon">
    
    <!-- CSS LINK -->
	<link rel="stylesheet" href="signupform.css?-1.0">
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="parent1">
                <p>SIGN UP</p>    
            </div>
            <?php if (!empty($error)): ?>
                    <div class="error" style="color: red; text-align: center; margin-bottom: 10px;">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
            <div class="parent2">
                <div class="logininfo">
                    <input name="uname" type="username" placeholder="ENTER USERNAME" class="nickname" autocomplete="off" required>
                </div>
                <div class="logininfo">
                    <input name="email" type="email" placeholder="ENTER EMAIL" class="email" autocomplete="off" required>
                    <input name="profile_pic" type="file" placeholder="ENTER pic" class="email" autocomplete="off" required>
                </div>
                <div class="logininfo">
                    <div class="showpass">
                        <input name="pass" id="password" type="password" placeholder="PASSWORD" class="password" autocomplete="off" required>
                        <button type="button" id="togglePassword" aria-label="Show Password"><svg xmlns="http://www.w3.org/2000/svg" id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
                        <circle cx="12" cy="12" r="3" />
                        </svg></button>
                    </div>
                </div>
                <div class="logininfo">
                    <div class="showpass">
                        <input name="cpass" id="confirmPassword" type="password" placeholder="CONFIRM PASSWORD" class="cpassword" autocomplete="off" required>
                        <button type="button" id="toggleConfirmPassword" aria-label="Show Password"><svg xmlns="http://www.w3.org/2000/svg" id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
                        <circle cx="12" cy="12" r="3" />
                        </svg></button>
                    </div>
                    
                </div> 
            
                <div class="submit">
                    <button name="signup">SIGN UP</button>
                </div>
                <div class="signup">
                    <p class="signup">ALREADY have AN account?</p>
                    <a href="loginform.php">SIGN IN</a>
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
    // Get the toggle button elements for both password and confirm password
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

    // Get the password and confirm password input elements
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');

    // Toggle password visibility for the main password field
    togglePassword.addEventListener('click', () => {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Change the button icon for the password field
        const eyeIcon = togglePassword.querySelector('svg');
        eyeIcon.innerHTML = type === 'password' 
            ? `<path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
               <circle cx="12" cy="12" r="3" />` 
            : `<path d="M17.94 17.94A10 10 0 0 1 12 20c-7 0-11-8-11-8a15.37 15.37 0 0 1 2.18-3.25M4.22 4.22A10 10 0 0 1 12 4c7 0 11 8 11 8a15.37 15.37 0 0 1-2.18 3.25M1 1l22 22" />`;
    });

    // Toggle password visibility for the confirm password field
    toggleConfirmPassword.addEventListener('click', () => {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);

        // Change the button icon for the confirm password field
        const eyeIcon = toggleConfirmPassword.querySelector('svg');
        eyeIcon.innerHTML = type === 'password' 
            ? `<path d="M1 12S5 5 12 5s11 7 11 7-4 7-11 7S1 12 1 12z" />
               <circle cx="12" cy="12" r="3" />` 
            : `<path d="M17.94 17.94A10 10 0 0 1 12 20c-7 0-11-8-11-8a15.37 15.37 0 0 1 2.18-3.25M4.22 4.22A10 10 0 0 1 12 4c7 0 11 8 11 8a15.37 15.37 0 0 1-2.18 3.25M1 1l22 22" />`;
    });

</script>

</html>