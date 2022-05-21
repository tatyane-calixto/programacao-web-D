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
        <br /><br />
        <h3>Formulário de Cadastro</h3>
      </div>
    </section>
    <div class="center">
      <form action="cadastrar.php" method="POST">
        <!--- Formulário de Cadastro de Usuário -->
        <div>
          <label>Nome</label>
          <input type="text" name="nome" required>
        </div>

        <div>
          <label>E-mail</label>
          <input type="email" name="email" required>
        </div>
        <div>
          <label>Telefone (WhatsApp)</label>
          <input type="number" name="telefone" size="5" required>
        </div>
        <div>
          <label>Senha</label>
          <input type="password" name="senha" required>
        </div>
        <a href="login-usuario.php">Entre no sistema aqui.</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
</body>

</html>