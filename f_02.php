<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário 02</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1> Preferencias </h1>

    <?php
    $lista = $_POST['exemplo'];
    foreach ($lista as $value) {
        echo $value;
        echo "<br>";}
    ?>
</body>
</html>