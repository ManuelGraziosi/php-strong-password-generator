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
    <!-- Form Section -->
    <section>
        <div class="container">
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
                           max="20">
                </div>
                <button class="btn btn-primary"
                        type="submit">Genera</button>

            </form>

            <?php

            $length = (isset($_GET["password_lenght"]) ? $_GET["password_lenght"] : null);
            echo $length;
            ?>
        </div>
    </section>

</body>

</html>