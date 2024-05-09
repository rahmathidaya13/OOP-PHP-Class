<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Class PHP With GC-INS</title>
</head>
<body>
<?php 
require_once("animal.php");
require_once("Ape.php");
require_once("Frog.php");

echo "<h2>Class Animal Shaun</h2>";
$sheep = new Animal("Shaun");
echo "Name: ".$sheep->name;
echo "<br>";
echo "legs:".$sheep->legs;
echo "<br>";
echo "Cold Blooded: ".$sheep->cold_blooded;
echo "<br>";
echo "<br>";

echo "<h2>Class Animal Frog</h2>";
$kodok = new Frog("Buduk");
echo "Name: ".$kodok->name;
echo "<br>";
echo "legs : ".$kodok->legs = 4;
echo "<br>";
echo "Cold Blooded : ".$kodok->cold_blooded;
echo "<br>";
echo "Jump : ".$kodok->jump();

echo "<br>";
echo "<br>";

echo "<h2>Class Animal Ape</h2>";
$sungokong = new Ape("KeraSakti");
echo "Name: ".$sungokong->name;
echo "<br>";
echo "legs : ".$sungokong->legs = 2;
echo "<br>";
echo "Cold Blooded : ".$sungokong->cold_blooded;
echo "<br>";
echo "Yell : ".$sungokong->yell();
?>
</body>
</html>