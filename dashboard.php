<?php
session_start();

// if user not logged in → go back login page
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>🎉 Welcome, <?php echo $_SESSION['user']; ?>!</h1>

<p>You are successfully logged in.</p>

<a href="logout.php">Logout</a>

</body>
</html>