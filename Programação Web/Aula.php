<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo 'Hello World!';
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
}
?>

</body>
</html>