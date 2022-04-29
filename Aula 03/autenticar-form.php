<?php
session_start();
$usuario_autenticado = false;

$usuarios = array(
  array('email' => 'adm@teste.com', 'senha' => '123456'),
  array('email' => 'taty@teste.com', 'senha' => '654321'),
  array('email' => 'prof@teste.com', 'senha' => 'abcdef'),
);
foreach ($usuarios as $usuario) {
  if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
    $usuario_autenticado = true;
  }
}

if ($usuario_autenticado) {
  $_SESSION['autenticado'] = 'S';
  header('Location:home-sistema.php');
} else {
  $_SESSION['autenticado'] = 'N';
  header('Location:login.php?login=erro1');
}
