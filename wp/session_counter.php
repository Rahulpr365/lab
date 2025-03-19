<?php
session_start();
if (!isset($_SESSION['page_visit_counter'])) {
    $_SESSION['page_visit_counter'] = 1;
} else {
    $_SESSION['page_visit_counter']++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Based Counter</title>
</head>
<body>
    <h2>Page Visit Counter using Sessions</h2>
    <p>You have visited this page <?php echo $_SESSION['page_visit_counter']; ?> time(s) in this session.</p>
    <?php
    echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Refresh Page</a></p>';
    if (isset($_GET['reset_counter']) && $_GET['reset_counter'] == 'true') {
        $_SESSION['page_visit_counter'] = 0;
        echo "<p style='color: green;'>Session counter has been reset. Refresh the page to start counting again.</p>";
    }
    ?>
</body>
</html>
