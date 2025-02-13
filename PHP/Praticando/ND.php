<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Doc PHP</title>
    <meta charset="UTF-8">
    <style>
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,black,rgb(42,42,42));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(83, 83, 81, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 26%;
            color: white;
        }
        fieldset{
            border: 2px solid whitesmoke;
        }
        legend{
            border: 1px solid whitesmoke;
            padding: 10px;
            text-align: center;
            background-color: whitesmoke;
            border-radius: 9px;
            color: rgb(83, 83, 81);
        }
        h4{
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
</head>
<body>    
<div class="box">     
    <?php
$n = $_POST["n"];
$na = $_POST["na"];
$i = $_POST["i"];
if($i == "1"){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro concluido</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá sr/sra ",$n,", seu filho ",$na,", foi classificado para o infantil A</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else if($i == "2"){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro concluido</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá sr/sra ",$n,", seu filho ",$na,", foi classificado para o infantil B</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else if($i == "3"){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro concluido</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá sr/sra ",$n,", seu filho ",$na,", foi classificado para o Juvenil A</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else if($i == "4"){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro concluido</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá sr/sra ",$n,", seu filho ",$na,", foi classificado para o Juvenil B</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else{
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro concluido</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá sr/sra, ",$n,", seu filho ",$na,", foi classificado para o Senior</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}
    ?>
    </div>
</body>
</html>