<?php
spl_autoload_register(function($className){
    // echo $className;
    $filename = $className.".php";
    // echo $filename;
    if(file_exists($filename)){
        include $filename;
    }
    
});
//에러가 뜨기전에 어떠한 클래스 파일을 사용하는지 알려준다. 
// 이것을 사용하기 위해서는 파일명을 맞춰 주는것이 중요하다. 
