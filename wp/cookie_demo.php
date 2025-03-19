<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    setcookie('user_name', $name, time() + (86400 * 30), '/');
    $cookieMessage = "Cookie 'user_name' has been set!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Management Demo</title>
</head>
<body>
    <h2>Cookie Example: Remember Your Name</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($cookieMessage)) {
        echo "<p style='color: green;'><strong>" . htmlspecialchars($cookieMessage) . "</strong></p>";
    }
    if (isset($_COOKIE['user_name'])) {
        echo "<p>Hello, <strong>" . htmlspecialchars($_COOKIE['user_name']) . "</strong>! Welcome back.</p>";
    } else {
        echo "<p>Welcome! Please enter your name to set a cookie.</p>";
    }
    ?>
</body>
</html>
