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
?>

</body>
</html>