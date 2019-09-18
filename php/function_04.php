<?php 
function english(){

    echo "hello";

}
function korean(){

    echo "안녕하세요";

}
 $lang = "ko";
 if($lang == "ko"){
     korean();
 }else{
   english();
}