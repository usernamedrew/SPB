<?php
$SPB = file_get_contents("");
$file = fopen("SPB.py", "w");
fwrite($file, $SPB);
fclose($file); 
?>
