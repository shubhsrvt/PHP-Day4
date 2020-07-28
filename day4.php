<?php

$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name;
$redirect_page = 'https://www.google.com';
$redirect = true;

header('Location: '.$redirect_page);

?>