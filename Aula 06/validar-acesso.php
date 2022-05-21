<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S') {
  header('Location:login.php');
}
//isset: para saber se a varíavel foi definida