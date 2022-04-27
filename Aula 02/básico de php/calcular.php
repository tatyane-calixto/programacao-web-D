<?php
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

echo "<hr>";
if ($_POST['operacoes'] == "+") {
  $resultado = "Resultado da soma: " . $numero1 + $numero2;
}
if ($_POST['operacoes'] == "-") {
  $resultado = "Resultado da subtração: " . $numero1 - $numero2;
}
if ($_POST['operacoes'] == "*") {
  $resultado = "Resultado da multiplicação: " . $numero1 * $numero2;
}
if ($_POST['operacoes'] == "/") {
  $resultado = "Resultado da divisão: " . $numero1 / $numero2;
}
echo "<b>" . $resultado . "</b>";
echo "<hr>";
