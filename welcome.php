<?php include "header.inc"; ?>

<?php
session_start();

if (isset($_SESSION['user'])) {
    echo"Welcome," .$_SESSION['user'];
}else{
    header("Location: login.php");
}
?>

<h1>Login success, <?php echo $_SESSION['user']; ?>!</h1>

<?php include "footer.inc"; ?>
