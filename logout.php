<?php
session_start();

// destroy all session data (logout user)
session_destroy();

// go back to login page
header("Location: index.php");
exit();
?>