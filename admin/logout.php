<?php 


# Start session:
session_start();

unset($_SESSION['username']); // Delete the session key


// session_destroy(); //This would delete all of the session key

header('Location: login.php'); //redirect to login page

?>