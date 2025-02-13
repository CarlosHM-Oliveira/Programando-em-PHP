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
$nm = $_POST["nome"];
$n = $_POST["n"];
if($n > 10){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro If e Else</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá ",$nm," o numero ",$n," é maior que 10</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else if ($n==10){
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro If e Else</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá ",$nm," o seu numero é",$n,"</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else{
    Echo"<fieldset>   ";
    Echo"<legend><b>Cadastro If e Else</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Olá ",$nm," o numero ",$n, " não supera o numero 10</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}
    ?>
    </div>
</body>
</html>