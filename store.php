<?php

$myfile = fopen("location.txt", "w");
$txt = "lat:" . $-GET["lat"] . "\nlong: " . $-GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>
