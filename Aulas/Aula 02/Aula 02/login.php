<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema para adicionar notas </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="login.php">Login</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="center">
        <img src="./img/usuario.jpg" />
      </div>
    </header>
    <section>
      <h3>Login</h3>
    </section>
    <form class="contato-form" action="autenticar-form.php" method="POST">
      <div>
        <label>E-mail</label>
        <input type="email" name="email" required>
      </div>
      <div>
        <label>Senha</label>
        <input type="password" name="senha" required>
      </div>
      <a href="cadastro-usuario.php">Não tem cadastro? Faça o seu aqui!</a>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

  </div>
</body>

</html>