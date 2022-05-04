<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nome_aluno = $_POST['nome-aluno'];
$media = ($nota1 + $nota2) / 2;
$media = round($media, 2); //arrendonda o valor da média com duas casas decimais





//echo "<script> alert('Nota Cadastrada com Sucesso!');
//location='home-sistema.php'</script>";
