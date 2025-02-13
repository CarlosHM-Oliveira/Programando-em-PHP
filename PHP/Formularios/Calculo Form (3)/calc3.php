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
        </style>
</head>
<body>    
<div class="box">     
    <?php
$d = $_POST["dia"];
$m = $_POST["mes"];
$a = $_POST["ano"];
$i=2023-$a;
$i2=2050-$a;
    Echo"<fieldset>   ";
    Echo"<legend><b>Formulario de Data de Nascimento</b></legend>";
    Echo"<br><br>";
    Echo"<p><h3> Sua idade é ",$i,", e em 2050 terá ",$i2,"</p></h3>";
    Echo"</fieldset>";
    Echo"";
    ?>
    </div>
</body>
</html>