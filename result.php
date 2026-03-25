<?php

// avvio della sessione
session_start();

$new_password = $_SESSION["password"];

var_dump($_SESSION)


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator-view</title>
</head>

<body>
    <h1>La tua nuova password è:</h1>
    <h3><?php echo $new_password ?></h3>
    <a class="btn btn-secondary"
       href="./">Torna al generatore</a>

</body>

</html>