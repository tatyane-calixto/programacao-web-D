<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$regisEmail = false;

function verificarEmail($emailUsuario, $regEmail)
{
  require("conexao.php");
  $query_ = "SELECT * FROM tb_usuario WHERE email='$emailUsuario'";
  $result = $conn->query($query_);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      header('Location:cadastro-usuario.php?login=igual');
    }
  } else {
    $regEmail = true;
  }
  return  $regEmail;
}


function inserirUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $regEmail)
{
  if ($regEmail) {
    require("conexao.php");
    $stmt = $conn->prepare("INSERT INTO tb_usuario (nome_usuario,email,senha) VALUES (?,?,?)");
    $stmt->bind_param("sss", $nomeUsuario, $emailUsuario, $senhaUsuario);
    $stmt->execute();
    $conn->close();
    echo ("<script>
    window.alert('Cadastro realizado com Sucesso!')
    window.location.href='login.php';
</script>");
  }
}

$regisEmail = verificarEmail($email, $regisEmail);
inserirUsuario($nome, $email, $senha, $regisEmail);
