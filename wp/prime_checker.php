<html lang="en">
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="number">Enter a Number:</label>
        <input type="text" name="num" id="number">
        <input type="submit" value="Check" name="check_prime">
    </form>
    <?php
    if(isset($_POST['check_prime'])){
        $number_input = $_POST['num'];
        if (is_numeric($number_input) && intval($number_input) > 0) {
            $n = intval($number_input);
            $count = 0;
            if ($n == 1) {
                $isPrime = false;
            } else {
                for($i = 1; $i <= $n; $i++){
                    if($n % $i == 0){
                        $count++;
                    }
                }
                $isPrime = ($count == 2);
            }
            if($isPrime){
                echo "<p><strong>" . $n . "</strong> is a Prime number.</p>";
            } else {
                echo "<p><strong>" . $n . "</strong> is NOT a Prime number.</p>";
            }
        } else {
            echo "<p style='color: red;'>Please enter a valid positive integer.</p>";
        }
    }
    ?>
</body>
</html>
