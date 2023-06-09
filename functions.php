<?php
function randomPsw($number)
{
    $alphaNumericArray = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'A', 'b', 'B', 'c', 'C', 'd', 'D'];
    $result = "";
    for ($i = 0; $i < $number; $i++) {
        $RandNumber = rand(0, count($alphaNumericArray) - 1);
        $result .= $alphaNumericArray[$RandNumber];
    }
    session_start();
    $_SESSION["password"] = $result;
    return $result;
}
