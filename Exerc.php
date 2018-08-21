<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Atividade 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

  <Strong>
    Plano Cartesiano
    </Strong>
    <?php
        $xA = 15;
        $xB = 25;
        $yA = 30;
        $yB = 42.8;

        $passo1 = (($xB-$xA)**2) + (($yB-$yA)**2);
        $resultado = sqrt ( $passo1);

        echo "<br>";
        echo $resultado;
    ?>
    <Strong>
    <br>
    <br>
    Média Aritmética
    </Strong>

    <?php
    $nota1 = 4;
    $nota2 = 10;
    $media = ($nota1 + $nota2)/2;
    echo "<br>";
    echo $media >= 6 ? "Aprovado com a média ". $media : "Reprovado com a média " . $media;
    
    ?>
    <br>
    <br>
    <Strong>
    Frases
    <br>
    </Strong>

    <?php
    
    $a = "Geann Bosco";
    $b = " é o pio";
    $c = "r jungle no League Of Legends";

    echo $a.$b.$c;
    echo "<br>";
 
    ?>
   

</body>
</html>