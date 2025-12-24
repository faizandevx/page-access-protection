<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
</head>

<body>

    <h2>Admin Dashboard</h2>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>

    <a href="logout.php">Logout</a>

</body>

</html>