<?php
    session_start();
    if (!isset($_SESSION['counter'])) 
    {
        $_SESSION['counter'] = 1;
    } 
    else 
    {
        $_SESSION['counter']++;
    }
    if (!isset($_COOKIE['counter'])) 
    {
        setcookie('counter', 1, time() + 3600);
    } 
    else 
    {
        $_COOKIE['counter']++;
        setcookie('counter', $_COOKIE['counter'], time() + 3600);
    }
?>