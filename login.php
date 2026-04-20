<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// simpele check (later uit database halen)
if ($username == "admin" && $password == "1234") {
    $_SESSION['ingelogd'] = true;
    header("Location: dashboard.php");
} else {
    echo "Fout wachtwoord!";
}
?>