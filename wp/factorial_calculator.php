<html lang="en">
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Calculate Factorial</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="number">Enter a non-negative integer:</label>
        <input type="text" name="n" id="number"><br><br>
        <input type="submit" value="Calculate Factorial" name="fact">
    </form>
    <?php
    if(isset($_POST['fact'])){
        $number_input = $_POST['n'];
        if (is_numeric($number_input) && intval($number_input) >= 0) {
            $num = intval($number_input);
            $factorial = 1;
            if ($num == 0) {
                $factorial = 1; // Factorial of 0 is 1
            } else {
                for($i = $num; $i >= 1; $i--){
                    $factorial *= $i;
                }
            }
            echo "<p>The factorial of <strong>" . $num . "</strong> is: <strong>" . $factorial . "</strong></p>";

        } else {
            echo "<p style='color: red;'>Please enter a valid non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
