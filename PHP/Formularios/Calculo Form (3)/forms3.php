<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulario  data de necimento</title>
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
            background-image: linear-gradient(to right,rgb(0,92,197),rgb(90,20,220));
            width: 100%;
            padding: 15px;
            border: none;
            font-size: 15px;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0,80,172),rgb(80,19,195));
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form method="post" action="calc3.php">
            <fieldset>
            <legend><b>Formulario de Data de Nascimento</b></legend>
            <br/><br/>
            <div class="inputBox">
                <input type="text" name="dia" id="dia" class="inputUser" required>
                <label for="dia" class="labelinput">Dia de Nascimento</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="mes" id="mes" class="inputUser" required>
                <label for="mes" class="labelinput">Mês de nescimento</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="ano" id="ano" class="inputUser" required>
                <label for="ano" class="labelinput">Ano de nescimento</label>
            </div>
            <br/>
            <input type="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>      
</html>