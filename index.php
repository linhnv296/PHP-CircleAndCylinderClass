<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "Circle.php";
include_once "Cylinder.php";

$hinhtron = new Circle('Hinh tron 1', 30, 'yellow');
$hinhtru = new Cylinder('Hinhtru1', 30, 'Yellow', 30);
echo $hinhtron->toString();
echo "<br>";
echo $hinhtru->toString();

?>
</body>
</html>
