<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <main>
        <div>
            <?php echo $_SESSION["password"] ?>
        </div>
    </main>
</body>

</html>
<?php session_destroy(); ?>