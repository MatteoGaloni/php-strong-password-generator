<?php
include("./functions.php");

$pswLength = ($_GET["password"]);
$isSpecial = ($_GET["special"]);
$isLetters = ($_GET["letters"]);
$isNumber = ($_GET["numbers"]);


if ($_GET["password"]) {
    randomPsw($pswLength, $isNumber, $isLetters, $isSpecial);
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.scss">
</head>

<body>
    <main>
        <div class="container mt-3">
            <form method="GET" action="index.php">
                <div class="mb-3">
                    <label for="password" class="form-label">Password Generator</label>
                    <input name="password" value="<?php echo $pswLength ?>" min="5" max="15" type="number" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Inserisci un numero in base alla lunghezza della password desiderata">
                </div>
                <div class="form-check">
                    <label for="special">Caratteri Speciali</label>
                    <input class="form-check-input" type="checkbox" name="special">
                </div>
                <div class="form-check">
                    <label for="letters">Lettere</label>
                    <input class="form-check-input" type="checkbox" name="letters">
                </div>
                <div class="form-check">
                    <label for="numbers">Numeri</label>
                    <input class="form-check-input" type="checkbox" name="numbers">numeri
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>
        <h1> <?php echo $isSpecial ?></h1>
    </main>
</body>

</html>