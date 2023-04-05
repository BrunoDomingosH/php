<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style>
        .verde
        {
            background-color:lightgreen;
        }

        .amarelo
        {
            background-color:yellow;
        }
    </style>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $valor = $_POST["valor"]; 
    for($x=1;$x<=10;$x++)
    {
        if($x%2 == 0)
        {
            echo("<div class='verde'>");
        }
        else
        {
            echo("<div class='amarelo'>");
        }
        
        echo($valor * $x);
        echo("</div> <BR>");
        echo($nome);
    }

        
    ?>

</body>
</html>