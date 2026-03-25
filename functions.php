<?php


$password = '';

if (isset($_GET["password_lenght"])) {

    $length = $_GET["password_lenght"];

    $numbers = '0123456789';
    $lower_letters = 'abcdefghijklmnopqrstuvwxyz';
    $upper_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';

    $is_on_numbers = (isset($_GET["numbers"]) && $_GET["numbers"] == "on" ? true : false);
    $is_on_lower_letters = (isset($_GET["lower_letters"]) && $_GET["lower_letters"] == "on" ? true : false);
    $is_on_upper_letters = (isset($_GET["upper_letters"]) && $_GET["upper_letters"] == "on" ? true : false);
    $is_on_symbols = (isset($_GET["symbols"]) && $_GET["symbols"] == "on" ? true : false);

    $tmp_symbol = '';

    while (strlen($password) < $length && ($is_on_numbers || $is_on_lower_letters || $is_on_upper_letters || $is_on_symbols)) {
        $tmp = rand(0, 3);
        switch ($tmp) {
            case 0:
                //echo "Numbers: ";
                if ($is_on_numbers) {

                    $tmp_symbol = substr($numbers, rand(0, strlen($numbers) - 1), 1);
                }
                //echo $tmp_symbol . "<br>";
                break;
            case 1:
                //echo "Lower Letters:";
                if ($is_on_lower_letters) {
                    $tmp_symbol = substr($lower_letters, rand(0, strlen($lower_letters) - 1), 1);
                }
                //echo $tmp_symbol . "<br>";
                break;
            case 2:
                //echo "Capital Letters:";
                if ($is_on_upper_letters) {
                    $tmp_symbol = substr($upper_letters, rand(0, strlen($upper_letters) - 1), 1);
                }
                //echo $tmp_symbol . "<br>";
                break;
            case 3:
                //echo "Symbols:";
                if ($is_on_symbols) {
                    $tmp_symbol = substr($symbols, rand(0, strlen($symbols) - 1), 1);
                }
                //echo $tmp_symbol . "<br>";
                break;
        }
        $password .= $tmp_symbol;
    }

}


?>