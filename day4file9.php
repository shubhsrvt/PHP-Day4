<?php
$handle = fopen('names.txt','w');
fwrite($handle,'Ares'."\n");
 fwrite($handle,'Billy');
 
fclose($handle);
echo 'Written.';
?>

