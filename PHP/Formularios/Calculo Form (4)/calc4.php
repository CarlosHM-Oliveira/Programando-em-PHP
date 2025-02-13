<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Doc PHP</title>
    <meta charset="UTF-8">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 26%;
            color: white;
        }
        fieldset{
            border: 2px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 9px;
        }
        h3{
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
</head>
<body>    
<div class="box">     
    <?php
$bs = $_POST["bs"];
$h = $_POST["h"];
$a=($bs*$h)/2;
    Echo"<fieldset>   ";
    Echo"<legend><b>Formulario de Calculo de Área</b></legend>";
    Echo"<br><br>";
    Echo"<p><h3> A Área do Triangulo de base ",$bs," e altura ",$h," é de ",$a,"</p></h3>";
    Echo"<br><br>";
    Echo"</fieldset>";
    ?>
    </div>
</body>
</html>