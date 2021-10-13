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
    <input type="text"name="edge1"placeholder="enter 1">
    <input type="text"name="edge2"placeholder="enter 2">
    <input type="text"name="edge3"placeholder="enter 3">
    <input type="submit"value="click">
    <p>ketqua
</form>

</body>
</html>


<?php

include_once "Shape1.php";
include_once "Triangle.php";
if($_REQUEST["REQUEST_METHOD"]=="POST"){
    $edge1 = $_POST["edge1"];
    $edge2 = $_POST["edge2"];
    $edge3 = $_POST["edge3"];

}
$triangle = new Triangle(triangle,"Red",$edge1,$edge2,$edge3);
echo $triangle->toString();
