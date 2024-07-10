<?php
$username = isset($_POST["username"]) ? $_POST["username"] : "undefined";
$email = isset($_POST["email"]) ? $_POST["email"] : "undefined";

echo "Username: " . $username . "<br>";
echo "Email: " . $email;
?>
