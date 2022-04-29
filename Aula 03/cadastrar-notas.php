<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<br/>";
echo "Média: " . $media;*/

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nome_aluno = $_POST['nome-aluno'];
$media = ($nota1 + $nota2) / 2;
$media = round($media, 2); //arrendonda o valor da média com duas casas decimais

//adicionar dados de notas, nome de aluno e média na variável $texto
$texto = $nome_aluno . '#' . $nota1 . '#' . $nota2 . '#' . $media . PHP_EOL;
//PHP_EOL - adiciona um quebra de linha

//abrindo, escrevendo e fechando arquivo
$arquivo = fopen('arquivo-cadastro-notas.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
echo "<script> alert('Nota Cadastrada com Sucesso!');
location='home-sistema.php'</script>";
