<?php

abstract class greeting // 추상클래스
{
    //이거는 꼭 만들어야해 
    abstract public function hello();

    public function pages()
    {
        echo "페이지 출력";
    }
}

class daelim extends greeting{
    public function hello(){
        echo "그냥 해";
    }
}

$obj = new daelim;
$obj->hello();
$obj->pages();