<?php
require("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

function cadastrarUsuario($nome_, $email_, $telefone_, $senha_)
{
  $con = conectar();
  $insert = $con->prepare("INSERT INTO tb_usuario (nome,email,telefone,senha) VALUES  (?,?,?,?)");
  $insert->bind_param("sssi", $nome_, $email_, $telefone_, $senha_);
  $insert->execute();
  $con->close();
  echo ("<script> window.alert('Cadastro realizado com Sucesso!') 
  window.location.href='login-usuario.php'</script>");
}

cadastrarUsuario($nome, $email, $telefone, $senha);
