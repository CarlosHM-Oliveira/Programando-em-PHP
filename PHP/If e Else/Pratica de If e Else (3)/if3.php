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
$q = $_POST["q"];
$m= 4.00;
if($q <= 50){
    Echo"<fieldset>   ";
    Echo"<legend><b>Obrigado pela Pesca</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Oi Sr/Sra. ",$nm," parabéns por sua pesca</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else{
    $mc=$q-50;
    $mm=$m*$mc;
    Echo"<fieldset>   ";
    Echo"<legend><b>Valor da Multa</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Infelizmente Sr/Sra.",$nm," você pagará R$ ",$mm," de multa por sobrecarga de quilo</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}
    ?>
    </div>
</body>
</html>