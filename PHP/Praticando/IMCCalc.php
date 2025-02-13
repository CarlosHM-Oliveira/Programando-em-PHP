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
$p = $_POST["peso"];
$h = $_POST["h"];
$hc = $h*$h;
$calc =$p/$hc;
if($calc >= 18.5 && $calc <=25){
    Echo"<fieldset>   ";
    Echo"<legend><b>IMC</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Parabéns ",$n,", seu IMC indica que você está o peso ideal</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else if($calc < 18.5){
    Echo"<fieldset>   ";
    Echo"<legend><b>IMC</b></legend>";
    Echo"<br>";
    Echo"<p><h4> Infelizmente ",$n,",  você terá que rever sua alimentação, pois, você está abaixo do peso ideal. </p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}else {
    Echo"<fieldset>   ";
    Echo"<legend><b>IMC</b></legend>";
    Echo"<br>";
    Echo"<p><h4> infelizmente ",$n,", você terá que comer menos, pois está acima do peso ideal</p></h4>"; 
    Echo"<br>";
    Echo"</fieldset>";
}
    ?>
    </div>
</body>
</html>