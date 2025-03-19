<?php
$file = fopen("ex.txt", "r");
$contents = fread($file, filesize("ex.txt"));
fclose($file);
echo htmlspecialchars($contents);
?>
