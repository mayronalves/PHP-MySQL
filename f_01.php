<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <form name="f_1" method="POST" action="f_02.php">
    <?php
        $exemplo[1] = "Chocolate";
        $exemplo[2] = "Morango";
        $exemplo[3] = "Creme";
        $exemplo[4] = "Baunilha";
        $exemplo[5] = "Flocos";
    ?>

    <h1> Marque o sabor preferido </h1>

    <?php
    foreach ($exemplo as $value) {
        ?>

        <input type="checkbox" name="exemplo[]" value=" <?php echo $value ?>"/>

        <label> <?php echo $value; ?> </label>
        <?php
    }
    
    ?>
    <br>
    <input type="submit" name="enviar" value="enviar"/>
    

   
</body>
</html>