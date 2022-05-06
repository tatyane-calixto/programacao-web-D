<?php
session_start();
require("conexao.php");
$emailPost = $_POST['email'];
$senhaPost = $_POST['senha'];

function consultarUsuario($email, $senha)
{
  $conn = conect();
  $query_ = "SELECT * FROM tb_usuario WHERE email='$email' AND senha='$senha'";
  $result = $conn->query($query_);
  return  $result;
}
function auntenticar($res)
{
  $conn = conect();
  if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
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

$resultado = consultarUsuario($emailPost, $senhaPost);
auntenticar($resultado);
