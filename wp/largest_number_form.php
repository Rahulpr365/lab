<html>
<head>
<title>Find the Largest Number</title>
</head>
<body>
    <h2>Find the Largest of Three Numbers</h2>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" placeholder="Number 1" id="num1"><br><br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" placeholder="Number 2" id="num2"><br><br>
        <label for="num3">Number 3:</label>
        <input type="text" name="num3" placeholder="Number 3" id="num3"><br><br>
        <input type="submit" value="Find Largest">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            $largest = max($num1, $num2, $num3);
            echo "<p>The largest number is: <strong>" . $largest . "</strong></p>";
        } else {
            echo "<p style='color: red;'>Please enter valid numbers in all fields.</p>";
        }
    }
    ?>
</body>
</html>
