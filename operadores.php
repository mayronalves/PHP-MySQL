<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    echo "<STRONG> Exemplo 1 </STRONG>";

        $k = "Sou";
        $j = " burro";    
        $w = " demais";
        echo "<br>";
        $o = $k.$j.$w.= ", meu nome é Fernandes";
        echo $o;
        echo "<br>";
        echo "<STRONG> Exemplo 2 </STRONG>";
    echo "<br>";
     $x = 3;
     $y = 4;
     echo $x*$y+5-2*3;
     echo "<br>";
     echo $x*($y+5)-2*3;
     echo "<br>";
     echo "<STRONG> Exemplo 3 </STRONG>";
     echo "<br>";
     $a = 15;
     $b = 42;
     $c = 42.0;
     
     echo $b == $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $b === $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $b != $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $a <> $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $a < $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $a > $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $a <= $c ? "verdadeiro" : "falso";
     echo "<br>";
     echo $a >= $c ? "verdadeiro" : "falso";

     echo "<br> <br>";
    
    echo 4 % 2 == 1 ? "Impar" : "Par";
    ?>



</body>
</html>