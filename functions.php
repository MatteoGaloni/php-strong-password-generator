<?php

function randomPsw($length, $numbers, $letters, $special)
{
    $Numbers = '0123456789';
    $Letters = 'abcdefghil';
    $Special = '@#$&?!*=%';
    $result = "";
    $singleChar = "";
    $finalPassword = "";
    $i = "1";

    if ($length > 0) {

        if ($letters || !$letters && !$numbers && !$special) {
            $result .= $Letters;
        }
        if ($numbers || !$letters && !$numbers && !$special) {
            $result .= $Numbers;
        }
        if ($special || !$letters && !$numbers && !$special) {
            $result .= $Special;
        }

        $passwordArray = str_split($result);
        // for ($i = 0; $i < $length; $i++) {
        //     $RandNumber = rand(0, count($passwordArray) - 1);
        //     $singleChar = $passwordArray[$RandNumber];
        //     if (!str_contains($finalPassword, $singleChar)) {
        //         $finalPassword .= $singleChar;
        //     }
        // }

        while ($i <= $length) {
            $RandNumber = rand(0, count($passwordArray) - 1);
            $singleChar = $passwordArray[$RandNumber];
            if (!str_contains($finalPassword, $singleChar)) {
                $finalPassword .= $singleChar;
                $i++;
            }
        }

        session_start();
        $_SESSION["password"] = $finalPassword;
        header("Location: result.php");
    }
}
