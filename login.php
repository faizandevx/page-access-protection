<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Static credentials (practice purpose)
    if ($username === "admin" && $password === "123") {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        header("Location: admin.php");
        exit;
    } else {
        $message = "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <p style="color:red;"><?php echo $message; ?></p>

</body>

</html>