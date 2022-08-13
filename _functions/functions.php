<?php

/**
 * Sécurise une chaîne de caractères
 * @param $string
 * @return string 
 */

function str_secure($string)
{
    return trim(htmlspecialchars($string));
}


/** 
 * DEBUG plus lisible des différentes variables
 * @param $var 
 */

function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
