<html lang="en">
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Check if a Number is Odd or Even</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="number">Enter a Number:</label>
        <input type="text" name="num" id="number"><br><br>
        <input type="submit" value="Check" name="check">
    </form>
    <?php
    if(isset($_POST['check'])){
        $number_input = $_POST['num'];
        if (is_numeric($number_input)) {
            $number = intval($number_input); // Convert to integer to ensure proper modulo operation
            if($number % 2 == 0){
                echo "<p><strong>" . $number . "</strong> is EVEN</p>";
            } else {
                echo "<p><strong>" . $number . "</strong> is ODD</p>";
            }
        } else {
            echo "<p style='color: red;'>Please enter a valid numeric value.</p>";
        }
    }
    ?>
</body>
</html>
