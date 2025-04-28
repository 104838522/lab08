<?php include "header.inc"; ?>

<form method="post" action="process.php">
    <label for="username">Username:</label><br>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="abc123"><!-- hidden token -->
    <input type="submit" value="Login">
</form>

<?php include "footer.inc"; ?>
