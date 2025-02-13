<!DOCTYPE html>
<head>
    <title>Doc PHP</title>
</head>

<body>
    <font size="4">
    <?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
 $mult = $num1 * $num2;
 $exp = pow ($mult, 2);
  Echo "<br>";
  Echo "A multiplicação dos valores é: ", $mult;
  Echo "<br>";
  Echo "o valor elevado ao quadrrado é: ", $exp;
  Echo "<br>";
    ?>
    </font>
</body>
</html>