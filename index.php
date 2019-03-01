<?php

$header1 = file_get_contents("html/header1.html");
$header2 = file_get_contents("html/header2.html");
$footer = file_get_contents("html/footer.html");

echo $header1;

echo '<title>Welcome to my web site</title>';

echo $header2;

echo '<span style="color:red;font-weight:bold;">This is my home page.</span>';

echo $footer;

?>
