<?php
function domain($apiPort){
    $split = explode(':',$_SERVER['HTTP_HOST']);
    $split[1] = $apiPort;
    $host = $split[0].':'.$split[1];
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $host;
  
    return $link;
}

?>