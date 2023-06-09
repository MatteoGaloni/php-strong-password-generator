<?php
include("./functions.php");

$pswLength = ($_GET["password"]);




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="container">
            <form method="GET" action="result.php">
                <div class="mb-3">
                    <label for="password" class="form-label">Password Generator</label>
                    <input name="password" value="<?php echo $pswLength ?>" min="5" max="15" type="number" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Inserisci un numero in base alla lunghezza della password desiderata">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>

            <h2>La lunghezza della password è: <?php echo $pswLength ?> </h2>
            <h2>La password è: <?php echo randomPsw($pswLength) ?> </h2>
        </div>
    </main>
</body>

</html>