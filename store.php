<?php

$myfile = fopen("location.txt", "w");
$txt = "lat:" . $-GET["lat"];
fwrite($myfile, $txt);
fclose($myfile);

?>
