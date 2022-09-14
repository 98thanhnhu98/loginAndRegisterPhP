<?php
// session_start();
// $_SESSION = array();

// session_destroy();

// header("Location: login.php");
// exit;
?>

<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="login.php">Go back</a>';
?>