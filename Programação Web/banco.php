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
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "aluno.etec";
$dbname = "teste";
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
  die("Connection failed: " . mysqli_connect_error());
}
$curso = "";
if (isset($_GET['curso'])) {
  $curso = mysqli_real_escape_string($conexao, $_GET['curso']);
}
if ($curso != "") {
  $sql = "SELECT id, firstname, lastname FROM usuarios 
          WHERE firstname LIKE '%$curso%' 
          OR lastname LIKE '%$curso%'";
} else {
  $sql = "SELECT id, firstname, lastname FROM usuarios";
}

$retorno = mysqli_query($conexao, $sql);
?>
<form method="GET" action="">
  <label for="curso">Buscar curso:</label>
  <input type="text" name="curso" id="curso" value="<?php echo $curso; ?>">
  <button type="submit">Enviar</button>
</form>
<hr>
<?php
if (mysqli_num_rows($retorno) > 0) {
  while($linha = mysqli_fetch_assoc($retorno)) {
    echo "id: " . $linha["id"]. " - Name: " . $linha["firstname"]. " " . $linha["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conexao);
?>
