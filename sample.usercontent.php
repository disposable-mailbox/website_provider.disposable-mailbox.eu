<?php
//edit disposable-mailbox.eu to your Main Domain ;)
$usercontent['headline'] = "<h2 style=\"text-align:center;\">📧 <i style=\"font-family:'Calligraffitti',sans-serif;font-weight:300\"><a href=\"https://www.disposable-mailbox.eu/?$user->username@".$user->domain."\">disposable mailbox</a></i></h2><hr>"; 

// Translation assistance is requested. Standard is:
//$usercontent['footer'] = "";
if ($localeselected == 'nl') {
$usercontent['footer'] = "<hr><blockquote>Deze vertaling is gemaakt met behulp van programma's.  help alstublieft op <a href=\"https://github.com/pfeifferch/disposable-mailbox\">GitHub</a> om een ​​begrijpelijke vertaling voor te bereiden.</blockquote>"; 
} elseif ($localeselected == 'es') {
$usercontent['footer'] = "<hr><blockquote>Esta traducción se creó con la ayuda de programas.  ayuda en <a href=\"https://github.com/pfeifferch/disposable-mailbox\">GitHub</a> para preparar una traducción comprensible.</blockquote>"; 
} else    { 
$usercontent['footer'] = "<br>"; }

?>
