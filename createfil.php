<?php
$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('locusapp.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);
echo "done";
?>