<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="container">
            <h1>
                La tua password è la seguente:
                <?php echo $_SESSION["password"] ?>
            </h1>

            <h1> Il valore della checkbox è: <?php echo $pswLength ?></h1>
        </div>
    </main>
</body>

</html>
<?php session_destroy(); ?>