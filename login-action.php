<?php
include ('connection.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = $mysqli->connect("localhost", "voltaescrow_user", "VoltaescroW123.");

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

// Selecting Database
$db = $mysqli->select_db("voltaescrow_cold_wallet");

// SQL query to fetch information of registerd users and finds user match.
$query = $mysqli->query("SELECT * FROM `users` where `username` ='$username' AND `password`='$password'", $connection);


$rows = $query->num_rows;

if ($rows == 1) {
    
    
$_SESSION['username']=$username; // Initializing Session
header("Location: index.php"); // Redirecting To Other Page

/*while ($user_data = $query->fetch_assoc()) {
    
$email = $user_data['email'];
$otp = random_int(100000, 999999);
$from = 'support@coinfada.com';

$updateOTP = $mysqli->query("UPDATE users SET otp = '$otp' WHERE username = '$username'; ");


    if($updateOTP){
        
        include ('otp-mail.php');
        
        $_SESSION['username']=$username; // Initializing Session
        header("Location: login-validate.php"); // Redirecting To Other Page
     
     }else{
    echo   $mysqli->error;
         
     }*/
    
} 
else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}


?>