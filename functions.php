<?php

/**
 * 
 */
function randomPsw($length, $letters, $numbers, $special)
{
    $NumbersArray = '0123456789';
    $LettersArray = 'abcdefghil';
    $SpecialArray = '@#$&?!*=%';
    $result = "";

    if ($length > 0) {

        if ($letters) {
            $result .= $LettersArray;
        }
        if ($numbers) {
            $result .= $NumbersArray;
        }
        if ($special) {
            $result .= $SpecialArray;
        }
        // $index = 0;

        for ($i = 0; $i < $length; $i++) {
            $RandNumber = rand(0, strlen($result) - 1);
            $result .= $NumbersArray[$RandNumber];
        }


        session_start();
        $_SESSION["password"] = $result;
        header("Location: result.php");
    }
}
// foreach ($NumericArray as $key => $value) {
//     $RandNumber = rand(0, count($NumericArray) - 1);
//     $result .= $NumericArray[$RandNumber]['number' && 'letter' && 'special'];
//     $index++;
//     if ($index >= $length) {
//         break;
//     }
// }
