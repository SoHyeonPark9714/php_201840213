<?php

const NAME = "대숙이";

echo NAME." 좋아요";

$conf = defined("NAME");
echo $conf;
if($conf){
    echo "상수중복". __LINE__;

}else{
    define("", "대림대학교");
    echo NAME."좋아요";
}



// 