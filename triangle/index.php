<?php

include_once "Shape1.php";
include_once "Triangle.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $color = $_POST["color"];
//    $edge1 = $_POST["edge1"];
//    $edge2 = $_POST["edge2"];
//    $edge3 = $_POST["edge3"];
    $triangle = new Triangle($name, $color);
    $triangle->setSide1($_POST["edge1"]);
    $triangle->setSide2($_POST["edge2"]);
    $triangle->setSide3($_POST["edge3"]);

    if ($_POST["edge1"] === 0 || $_POST["edge2"] === 0 || $_POST["edge3"] === 0){
        die("day khong phai la 1 tam giac");
    }
    echo $triangle->toString();
}
?>

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
<form method="post">
    <input type="text" name="name" placeholder="enter name"><br>
    <input type="text" name="color" placeholder="enter color"><br>
    <input type="text" name="edge1" placeholder="enter 1"><br>
    <input type="text" name="edge2" placeholder="enter 2"><br>
    <input type=" text" name="edge3" placeholder="enter 3">
    <input type="submit" value="click me">
    <input type="reset">
</form>


</body>
</html>


