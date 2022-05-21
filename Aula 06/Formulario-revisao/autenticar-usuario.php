<?php
require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];

function  autenticarUsuario($email_, $senha_)
{
  $con = conectar();
  $query_ = "SELECT * FROM tb_usuario WHERE email='$email_' AND senha =$senha_";
  $resultado = $con->query($query_);
  if ($resultado->num_rows > 0) {
    header('Location:autenticado.php');
  } else {
    echo ("<script> window.alert('Usuário e/ou senha incorretos!') 
    window.location.href='login-usuario.php'</script>");
  }
  $con->close();
}
autenticarUsuario($email, $senha);
