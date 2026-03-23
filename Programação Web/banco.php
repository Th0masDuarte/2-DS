<?php
$servidor = "localhost";
$usuario = "root";
$senha = "aluno.etec";
$dbname = "teste";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM usuarios";

$retorno = mysqli_query($conexao, $sql);

if (mysqli_num_rows($retorno) > 0) {
  while($linha = mysqli_fetch_assoc($retorno)) {
    echo "id: " . $linha["id"]. " - Name: " . $linha["firstname"]. " " . $linha["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conexao);
?> 
