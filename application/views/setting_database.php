<?php

$path_to_file = "application\config\database.php";
$file_contents = file_get_contents($path_to_file);
$str1 = addslashes("games");
$str2 = addslashes("test");
$file_contents = str_replace($str1 , $str2, $file_contents);
file_put_contents($path_to_file,$file_contents);


?>
