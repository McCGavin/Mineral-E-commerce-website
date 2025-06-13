<?php
session_start();

// Pretend login is always successful
$_SESSION['logged_in'] = true;
$_SESSION['username'] = isset($_POST['username']) ? $_POST['username'] : 'Guest';
header("Location: index.php");
exit;
?>
