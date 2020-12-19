<?php
$data = file_get_contents('php://input');

$file = fopen("debug.txt","w+");
echo fwrite($file,$data);
fclose($file);
?>