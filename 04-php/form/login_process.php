<?php
// login_process.php
$username = $_POST['username'];
$password = $_POST['password'];

echo "Username: " . htmlspecialchars($username);
echo "<br>Password: " . htmlspecialchars($password);
?>