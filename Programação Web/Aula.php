<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
/*echo 'Hello World!';
$x = 5;
$y = "John";
$t = date("H");
//if e else
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
//while
$i = 1; // Initialize counter
while ($i < 6) { // Check condition
  echo $i; // Execute code
  $i++; // Increment counter
}
//for para lista
$cor=array("red","green","blue","yellow");
foreach($cor as $valor){
    echo "$valor <br>";
}
//faça um foreach e mostre somente os numeros pares
$numero=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
foreach($numero as $par){
    if($par%2==0){
        echo "$par é par";
    }else{
        echo"$par não é par";
    }
}*/

if(isset($_GET['aula'])==true){
  echo "A variavel A existe! E tem valor ". $_GET['aula'];
}else{
  echo "A variavel B nao existe";
}
//JEITO MELHOR DE USAR TABUADA USANDO GET E POST
<form method="post" action="">
    tabuada: <input type="number" name="numero">
    <input type="submit">
</form>
<?php
if(isset($_POST['numero'])){
    $numero=(int)$_POST['numero'];
    echo "<h2>Tabuada do $numero </h2>";
    for($i=1;$i<=12;$i++){
        $resultado=$numero*$i;
        echo "$numero x $i = $resultado <br>";
    }
   }   else{
        echo "Informe um número no form acima";
   }
?>

</body>
</html>
