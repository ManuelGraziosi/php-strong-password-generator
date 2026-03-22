<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">

    <title>php-strong-password-generator</title>
</head>

<body>
    <div class="container">
        <!-- Form Section -->
        <section>
            <h1>Genera la tua password "strong"</h1>
            <form action=""
                  method="get">
                <div class="mb-3">
                    <label class="form-label"
                           for="password_lenght">Scegli la lunghezza della password</label>
                    <input class="form-control"
                           type="number"
                           id="password_lenght"
                           name="password_lenght"
                           min="0"
                           max="20"
                           value="10">
                </div>
                <button class="btn btn-primary"
                        type="submit">Genera</button>
            </form>
        </section>
        <?php

        $length = (isset($_GET["password_lenght"]) ? $_GET["password_lenght"] : null);

        echo "la password generata è: " . generatePassword($length);

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
    </div>

</body>

</html>