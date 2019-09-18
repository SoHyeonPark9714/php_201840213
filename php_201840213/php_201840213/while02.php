<?php
// $body = file_get_contents("for01.php");

$filename = "for01.php";
$fp = fopen($filename,"r");

$count =0;

while(!feof($fp)){
    $dollar = fgetc($fp);
    if($dollar == "$") $count++;
   
}
fclose($fp);
echo "소스에 $ 기호가".$count."있습니다";
