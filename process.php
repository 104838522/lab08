<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Kim' && $password == '1234') {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    echo "Invaild login. <a href='login.php'>Try again</a>.";
}
?>
