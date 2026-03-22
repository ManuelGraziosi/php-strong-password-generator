<?php
function generatePassword($length)
{
    $numbers = '0123456789';
    $lower_letters = 'abcdefghijklmnopqrstuvwxyz';
    $capital_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = ',;.:-_ç@°#§[]{}!"£$%&/()=?';

    $tmp_password = '';
    $tmp_symbol = '';

    for ($i = 0; $i < $length; $i++) {
        $tmp = rand(0, 3);
        switch ($tmp) {
            case 0:
                //echo "Numbers: ";
                $tmp_symbol = substr($numbers, rand(0, strlen($numbers) - 1), 1);
                //echo $tmp_symbol . "<br>";
                break;
            case 1:
                //echo "Lower Letters:";
                $tmp_symbol = substr($lower_letters, rand(0, strlen($lower_letters) - 1), 1);
                //echo $tmp_symbol . "<br>";
                break;
            case 2:
                //echo "Capital Letters:";
                $tmp_symbol = substr($capital_letters, rand(0, strlen($capital_letters) - 1), 1);
                //echo $tmp_symbol . "<br>";
                break;
            case 3:
                //echo "Symbols:";
                $tmp_symbol = substr($symbols, rand(0, strlen($symbols) - 1), 1);
                //echo $tmp_symbol . "<br>";
                break;
        }
        $tmp_password .= $tmp_symbol;
    }

    return $tmp_password;

}


?>