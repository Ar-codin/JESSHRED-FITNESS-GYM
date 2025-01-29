<?php 

include_once ("../CONNECTION/connection.php");
$con = connection();




$sql = "select * FROM users";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();

if (isset($_POST['submit'])) {
    $nname = $_POST['nickname'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    if (empty($nname) || empty($email) || empty($uname) || empty($pass)) {
        echo "Please fill in all fields.";
    } else { 
        $sql = "INSERT INTO `users`(`nickname`, `email`, `username`, `password`) VALUES ('$nname', '$email', '$uname', '$pass')";
        $con->query($sql) or die ($con->error);
        echo header("location: index.php");
    }
} 


?>

<html>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="name" name="nickname">
            <input type="text" placeholder="email" name="email">
            <input type="text" placeholder="username" name="username">
            <input type="text" placeholder="password" name="password">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>