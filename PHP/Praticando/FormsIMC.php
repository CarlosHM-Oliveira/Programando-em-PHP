<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulario IMC</title>
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
        .inputBox{
            position: relative;
        }
        .inputUser{
            background:none;
            border: none;
            border-bottom:1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            cursor: pointer;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0PX;
            pointer-events: none;
            transition: .5%;
        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(10,10,10),rgb(34,34,34));
            width: 100%;
            padding: 15px;
            border: none;
            font-size: 15px;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0,0,0),rgb(15,15,15));
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form method="post" action="IMCCalc.php">
            <fieldset>
            <legend><b>Calculo do IMC</b></legend>
            <br/><br/>
            <div class="inputBox">
                <input type="text" name="n" id="n" class="inputUser" required>
                <label for="n" class="labelinput">Digite seu Nome</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="peso" id="peso" class="inputUser" required>
                <label for="peso" class="labelinput">Digite seu Peso</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="h" id="h" class="inputUser" required>
                <label for="h" class="labelinput">Digite sua Altura (ex:1.69)</label>
            </div>
            <br/>
            <input type="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>      
</html>