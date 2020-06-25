<?php
$to="9787205540@vtext.com";
$from="www.library.com";
$message="This is a text message";
$headers="From:$from/n";
mail($to,'',$message,$headers);
?>