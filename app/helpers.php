<?php

function setActive($routeName)
{
	return request()->routeIs($routeName) ? 'active' : '';
}

function getStatusServer(){
	$server  = "127.0.0.1";
    $portg   = "7777";
    $timeout = "5";
    if ($server and $portg and $timeout) {
        $game =  @fsockopen("$server", $portg, $errno, $errstr, $timeout);
    }
    return $game;
}

function getStatuslogin(){

    $server  = "127.0.0.1";
    $portl   = "9014";
    $timeout = "5";
    if ($server and $portl and $timeout) {
        $login =  @fsockopen("$server", $portl, $errno, $errstr, $timeout);
    }
    return $login;
}
?>