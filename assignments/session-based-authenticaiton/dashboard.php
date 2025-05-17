<?php
include 'auth.php'; // Checks session
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>This is a protected page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
