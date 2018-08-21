<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $cidades=array('Canindé-', 'Fortaleza-', 'Juazeiro-', 'Caridade-', 'Choró-', 'Cascavel');

    for ($i=0; $i < sizeof($cidades) ; $i++) { 
        echo $cidades[$i];
    }
    echo "<br> <br>";
    ?>

    <?php
    $dados ['nome'] = 'Mayron';
    $dados ['rua'] = 'Perdida em Canindé';
    $dados ['bairro'] = 'Campinhas';
    $dados ['cidade'] = 'Canindé';
    
    $informações = array('nome', 'rua', 'bairro', 'cidade');

    for ($i=0; $i < sizeof($dados); $i++) { 
        echo $dados[$informações[$i]];
        echo "<br>";
    }
    ?>

    <?php
    $automovel ['gol']['cor'] = 'branco';
    $automovel ['gol']['potencia'] = '1.4';   
    $automovel ['gol']['opcionais'] = 'ar';

    $automovel ['fusca']['cor'] = 'branco';
    $automovel ['fusca']['potencia'] = '1.4';   
    $automovel ['fusca']['opcionais'] = 'ar';

    $automovel ['palio']['cor'] = 'branco';
    $automovel ['palio']['potencia'] = '1.4';   
    $automovel ['palio']['opcionais'] = 'ar';

    foreach($automovel as $modelo => $caracteristicas{
        echo "carat $modelo => $caracteristicas <br>\n";
        foreach ($automovel as $caracteristicas => $valor) {
            echo "carat $caracteristicas => $valor <br>\n";
        }

    })
    ?>

    
</body>
</html>