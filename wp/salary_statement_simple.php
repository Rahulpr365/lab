<!DOCTYPE html>
<html>
<body>
<form method="post">
<h2>Employee Statement</h2>
<input type="text" placeholder="Name" name="n"><br>
<input type="text" placeholder="Designation" name="d"><br>
<input type="text" placeholder="Organisation" name="o"><br>
<input type="text" placeholder="Basic Salary" name="b"><br>
<input type="submit" value="Submit" name="s"><br>
</form>
<?php
if (isset($_POST['s'])) {
$na = $_POST['n'];
$de = $_POST['d'];
$org = $_POST['o'];
$ba = $_POST['b'];
$da = 0.3 * $ba;
$hra = 0.1 * $ba;
$gs = $ba + $da + $hra;
$it = 0.05 * $gs;
$ns = $gs - $it;
echo "<h3>Employee Details</h3>";
echo "<p>Name: $na</p>";
echo "<p>Designation: $de</p>";
echo "<p>Organisation: $org</p>";
echo "<p>Basic Salary: $" . $ba . "</p>";
echo "<p>DA: $" . $da . "</p>";
echo "<p>HRA: $" . $hra . "</p>";
echo "<p>Gross Salary: $" . $gs . "</p>";
echo "<p>Income Tax Deduction: $" . $it . "</p>";
echo "<p>Net Salary: $" . $ns . "</p>";
$file = fopen("qn11.txt", "a");
fwrite($file, "$na\n$de\n$org\n$" . $ba . "\n$" . $da . "\n$" . $hra . "\n$" . $gs . "\n$" . $it . "\n$" . $ns . "\n");
fclose($file);
echo nl2br("Salary saved to file");
}
?></body></html>
