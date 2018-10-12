<?php

$myfile = fopen("appleheader.txt", "w") or die("Unable to open file!");

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
    $txt= "$name: $value\n";
    fwrite($myfile, $txt);
}
foreach ($_POST as $key => $value) 
{
        echo $key;
         fwrite($myfile, $key);
        echo $value;
         fwrite($myfile, $value);
    }

fclose($myfile);
?>
