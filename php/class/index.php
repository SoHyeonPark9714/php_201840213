<?php
// include  "class_01.php";
// include  "class_02.php";
include"autoload.php";

// $obj1 = new left; //생성
// $obj1->greeting();
// $obj1->daelim();

// $obj1 ->name = "대림이";
// var_dump($obj1);
// echo "<br>";S
// $property = "name";
// echo $obj1->name . "입니다.<br>";
// echo "영어 코드는 = ".$obj1 ::ENGILSH ."<br>";

// $obj2 = new right;
// $obj2->name ="대숙이";
// $result = $obj2->greeting();
// var_dump($result);
// echo "<br>";

// $obj1 ->daelim();
// $result ->daelim();

// //메소드 제안
// echo "--<br>";
// $obj1->greeting()->daelim()->foo()->bar();

echo "--<br>";
echo foo::$aaa = "foo hahaha";
echo "--<br>";
foo::hello();