<?php

$calendar_url = ""; //ENTER iCloud Public Share URL here

// create a new curl resource and set options
$ch = curl_init();

$url = preg_replace("/^webcal:/","http:",$calendar_url);

// Send the header based on the response from the server
header('Content-type: text/calendar; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate"); 

// HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
// Date in the past

function file_get_contents_utf8($fn) { 
    $content = file_get_contents($fn); 
    return mb_convert_encoding($content, 'UTF-8', mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true)); 
} 

echo file_get_contents_utf8($url);

?>