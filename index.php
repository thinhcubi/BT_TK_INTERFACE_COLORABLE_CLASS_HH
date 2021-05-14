<?php
include_once "Square.php";
include_once "Colorable.php";

$square = new Square(12);
$arr = [];
array_push($arr,$square);
foreach ($arr as $item){
   echo $item->calculateArea(12);
  echo  $item->howToColor();
}