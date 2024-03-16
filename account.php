<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        $_SESSION["session_id"] = session_id();
    } else {
        echo "Неправильний логін або пароль.";
        exit;
    }
}

if (isset($_SESSION["session_id"])) {
    echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Welcome Page</title>
        </head>
        <body>
            <h2>Welcome</h2>
            <p>You are logged in. Welcome to our website!</p>
            <p>Your session ID is: " . $_SESSION["session_id"] . "</p>
        </body>
        </html>";
} else {
    header("Location: login.php");
    exit;
}
?>