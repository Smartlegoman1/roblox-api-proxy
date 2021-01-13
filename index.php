<?php
$url = 'http://groups.roblox.com' . $_SERVER['REQUEST_URI'];
$page = file($url);

foreach($page as $part)
{
    $part = ereg_replace ('<img src="','<img src="'.$url,$part);
    $part = ereg_replace('action="', 'action="'.$url,$part);
    echo $part;
}
?>
