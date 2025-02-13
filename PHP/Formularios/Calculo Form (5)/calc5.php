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
        h4{
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
</head>
<body>    
<div class="box">     
    <?php
$p = $_POST["pn"];
$n = $_POST["n"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$calc=($n1+$n2+$n3+$n4)/4;
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro de Notas</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá prezado Professor ",$p," o Aluno ",$n," neste bimestre teve a media de nota igual a ",$calc,"</p></h4>";
    Echo"<br>";
    Echo"</fieldset>";
    ?>
    </div>
</body>
</html>