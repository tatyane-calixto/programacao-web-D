<?php
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

echo "<hr>";
function operacoes($n1, $n2)
{
  if ($_POST['operacoes'] == "+") {
    $resultado = "Resultado da soma: " . $n1 + $n2;
  }

  if ($_POST['operacoes'] == "-") {
    $resultado = "Resultado da subtração: " . $n1 - $n2;
  }
  if ($_POST['operacoes'] == "*") {
    $resultado = "Resultado da multiplicação: " . $n1 * $n2;
  }
  if ($_POST['operacoes'] == "/") {
    $resultado = "Resultado da divisão: " . $n1 / $n2;
  }
  return $resultado;
}
//chamar função
$res = operacoes($numero1, $numero2);
echo "<b>" . $res . "</b>";
echo "<hr>";
