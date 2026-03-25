<?php


$password = '';

if (isset($_GET["password_lenght"])) {

    $length = $_GET["password_lenght"];

    $numbers = '0123456789';
    $lower_letters = 'abcdefghijklmnopqrstuvwxyz';
    $capital_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';


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
        $password .= $tmp_symbol;
    }

}


?>