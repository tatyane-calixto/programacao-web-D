<?php
session_start();

$emailPost = $_POST['email'];
$senhaPost = $_POST['senha'];

function autenticar($email, $senha)
{
  require("conexao.php");
  $query_ = "SELECT * FROM tb_usuario WHERE email='$email' AND senha='$senha'";
  $result = $conn->query($query_);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $_SESSION['idusuario'] = $row['id_usuario'];
      $_SESSION['autenticado'] = 'S';
      header('Location:home-sistema.php');
    }
  } else {
    $_SESSION['autenticado'] = 'N';
    header('Location:login.php?login=erro1');
  }
  $conn->close();
}

autenticar($emailPost, $senhaPost);
