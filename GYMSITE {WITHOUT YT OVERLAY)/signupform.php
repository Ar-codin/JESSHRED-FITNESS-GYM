<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db"; // Database name

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Insert the user into the database
    $sql = "INSERT INTO users (nickname, email, username, password, age, weight, height) 
            VALUES ('$nickname', '$email', '$username', '$password', '$age', '$weight', '$height')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>