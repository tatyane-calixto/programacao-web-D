<?php
//informações do servidor banco de dados

function conectar()
{

  $conn = mysqli_connect("127.0.0.1", "root", "", "bd_form_revisao");

  if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
    //encerra a execução do script e exibe uma mensagem.
  }
  return $conn;
}
