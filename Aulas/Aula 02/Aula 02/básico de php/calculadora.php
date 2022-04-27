<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>

<body>
  <form action="calcular.php" method="POST">
    <h1>Calculadora Simples</h1>
    <label>Número 1 <input type="number" name="n1" size="5"></label>
    <select name="operacoes">
      <optgroup label="Operações">
        <option value="+">+ (somar)</option>
        <option value="-">+ (subtrair)</option>
        <option value="*">+ (multiplicar)</option>
        <option value="/">+ (dividir)</option>
      </optgroup>
    </select>
    <label>Número 2 <input type="number" name="n2" size="5"></label>
    <button type="submit">Calcular</button>

  </form>
</body>

</html>