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
      <h3>Cadastro</h3>
    </section>
    <form class="contato-form" action="cadastrar-usuario.php" method="POST">
      <div>
        <label>Nome</label>
        <input type="text" name="nome" required>
      </div>
      <div>
        <label>E-mail</label>
        <input type="email" name="email" required>
      </div>
      <div>
        <label>Senha</label>
        <input type="password" name="senha" required>
      </div>
      <?php if (isset($_GET['login']) && $_GET['login'] == 'igual') { ?>
        <div class="alert alert-warning" role="alert">
          Existe um usuário com esse e-mail cadastrado.
        </div>
      <?php } ?>
      <a href="login.php">Já tem login? Entre no sitema aqui!</a>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

  </div>
</body>

</html>