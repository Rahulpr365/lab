<!DOCTYPE html>
<html>
<head>
    <title>Student Progress Report</title>
</head>
<body>
    <h2>Student Progress Report Generator</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="name">Enter Name:</label>
        <input type="text" name="na" id="name" required><br><br>
        <label for="regno">Enter Reg No:</label>
        <input type="text" name="n" id="regno" required><br><br>
        <label for="mark1">Enter Mark 1:</label>
        <input type="text" name="m1" id="mark1" required><br><br>
        <label for="mark2">Enter Mark 2:</label>
        <input type="text" name="m2" id="mark2" required><br><br>
        <label for="mark3">Enter Mark 3:</label>
        <input type="text" name="m3" id="mark3" required><br><br>
        <input type="submit" value="Generate Report" name="generate_report">
    </form>

    <?php
    if (isset($_GET['generate_report'])) {
        $name = $_GET['na'];
        $regno = $_GET['n'];
        $mark1_input = $_GET['m1'];
        $mark2_input = $_GET['m2'];
        $mark3_input = $_GET['m3'];

        // Validate marks are numeric
        if (is_numeric($mark1_input) && is_numeric($mark2_input) && is_numeric($mark3_input)) {
            $mark1 = floatval($mark1_input);
            $mark2 = floatval($mark2_input);
            $mark3 = floatval($mark3_input);

            $total_marks = $mark1 + $mark2 + $mark3;
            $percentage = ($total_marks / 300) * 100;

            if ($percentage >= 90) {
                $grade = 'S';
            } elseif ($percentage >= 75) {
                $grade = 'A';
            } elseif ($percentage >= 60) {
                $grade = 'B';
            } elseif ($percentage >= 45) {
                $grade = 'C';
            } else {
                $grade = 'F';
            }
            echo "<h3>Student Progress Report</h3>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
            echo "<p><strong>Reg No:</strong> " . htmlspecialchars($regno) . "</p>";
            echo "<p><strong>Total Marks:</strong> " . htmlspecialchars(number_format($total_marks, 2)) . " / 300</p>";
            echo "<p><strong>Percentage:</strong> " . htmlspecialchars(number_format($percentage, 2)) . "%</p>";
            echo "<p><strong>Grade:</strong> " . htmlspecialchars($grade) . "</p>";
        } else {
            echo "<p style='color: red;'>Please enter valid numeric marks for all subjects.</p>";
        }
    }
    ?>
</body>
</html>
