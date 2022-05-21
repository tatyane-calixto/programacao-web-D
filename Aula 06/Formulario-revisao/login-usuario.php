<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula de Revisão </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/index.css">
</head>


<body>
  <div class="container">
    <section>
      <div class="center">
        <h3> Login </h3>
      </div>
    </section>
    <div class="center">
      <form action="autenticar-usuario.php" method="POST">
        <div>
          <label> E-mail </label>
          <input type="email" name="email" required>
        </div>
        <div>
          <label>Senha</label>
          <input type="password" name="senha" required>

        </div>
        <a href="index.php">Cadastre-se Aqui</a>
        <button type="submit" class="btn btn-primary">Entrar </button>

      </form>
      <div>
      </div>
</body>

</html>