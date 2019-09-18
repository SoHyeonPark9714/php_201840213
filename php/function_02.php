<?php

//함수 선언
function hello($name = "**",$a,$b)
{
    $sum = $a +$b;
    echo "반가워요 ".$name."=".$sum;
    //반환값
    return $sum;
}
// 
$user = "대남이";
$s = hello($user,"1","2");

echo "합계는 =".$s;
