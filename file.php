<?php 
    echo "파일 목록을 출력합니다.";
    $path = "./";    //글로벌 변수(전역변수)
    files($path);   //글로벌 변수(전역변수)
   
function files($path)
    { //지역변수
        $files = scandir($path); //지역변수
        //현재 입력한 폴더에 있는 파일을 배열로 받아서 보여준다. 
        // print_r($files);
        for($i =0;$i<count($files);$i++){
            if($files[$i] == ".."||$files[$i] == ".git"){
                continue;
            }
            if(is_dir($files[$i])){
                echo "<br>".$path.$files[$i]."<br><br>";
                files($path.DIRECTORY_SEPARATOR.$files[$i]);
            }else{
                echo "".$files[$i]."<br>";
            }
            echo $files[$i]."<br>";
           
        }
    
    }