<?php
include("19.html");

$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('request.php', 'a');
fwrite($fp, $req_dump);
fclose($fp);

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";

}
 
$op = fopen('../files/hackme191_logs.php','a+');
fwrite ($op,"GET: $name</br>POST: $value</br>---------</br>");
fclose($op);
 
echo "We logged your User Agent and IP for security reasons.";
?>