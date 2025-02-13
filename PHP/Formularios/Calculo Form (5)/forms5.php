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
        <form method="post" action="calc5.php">
            <fieldset>
            <legend><b>Cadastto de Notas</b></legend>
            <br/><br/>
            <div class="inputBox">
                <input type="text" name="pn" id="pn" class="inputUser" required>
                <label for="pn" class="labelinput">Nome do Professor</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="n" id="n" class="inputUser" required>
                <label for="n" class="labelinput">Nome do Aluno</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="n1" id="n1" class="inputUser" required>
                <label for="n1" class="labelinput">1º Nota do Aluno</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="n2" id="n2" class="inputUser" required>
                <label for="n2" class="labelinput">2º Nota do Aluno</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="n3" id="n3" class="inputUser" required>
                <label for="n3" class="labelinput">3º Nota do Aluno</label>
            </div>
            <br/>
            <div class="inputBox">
                <input type="text" name="n4" id="n4" class="inputUser" required>
                <label for="n4" class="labelinput">4º Nota do Aluno</label>
            </div>
            <br/>
            <input type="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>      
</html>