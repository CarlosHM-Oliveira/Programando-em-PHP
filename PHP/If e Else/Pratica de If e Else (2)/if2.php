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
$s = $_POST["s"];
if($s == "batatafrita"){
    Echo"<fieldset>   ";
    Echo"<legend><b>Bem-Vindo</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Bem-Vindo Sr/Sra. ",$nm," parabéns pelo acesso permitido</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else{
    Echo"<fieldset>   ";
    Echo"<legend><b>Saia Daqui</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Saia daqui ",$nm," ,o seu acesso foi negado</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}
    ?>
    </div>
</body>
</html>