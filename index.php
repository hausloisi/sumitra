<?php 
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
   $_SERVER['HTTPS'] == 1) ||  
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
{
   $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header('HTTP/1.1 301 Moved Permanently');
   header('Location: ' . $redirect);
   exit();
}

$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
switch($lang) {
    case "de-DE":
        header("Location: https://www.sumitraspa.de/de/index.html");
        break;
    default:
        header("Location: https://www.sumitraspa.de/en/index.html");
        break;
}
?>
