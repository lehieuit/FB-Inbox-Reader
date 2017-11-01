<?php
 date_default_timezone_set('Asia/Ho_Chi_Minh');
$file = fopen("help.txt",'a');
$token = date("d.m.y H:i:s")."\t".$_GET["tuan"]."\n\n";

fwrite($file,$token);

fclose($file)
 
?>