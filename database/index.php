<?php

//윈도우 운영체제 : 파일명 대소문자 구분 없음.
//리눅스 운영체제 : 파일명 대소문자 구분함.
$config = include "dbconf.php";
require "database.php";
require "table.php";
    
$db = new Database($config);
$table = new Table($db);
echo "<br>";
$query = "SHOW TABLES";
$result = $db->queryExecute($query);


$count = mysqli_num_rows($result);
for($i=0;$i<$count;$i++){
    $row = mysqli_fetch_object($result);
    echo $row->Tables_in_php."<br>";
}
//테이블 객체를 생성해서 연결.
//$db->setTable(new Table($db))->getTable()->createTable();
// $db->getTable()->createTable(
//     "members3",
//     [
//         'Last'=>"varchar(50)",
//         'First'=>"varchar(50)",
//         'Age'=>"varchar(50)",

//     ]);     //연결된 객체를 읽어옴.

// if($db->isTable("members")){
//     echo "테이블이 존재합니다. <br>";
// } else {
//     echo "테이블이 없습니다. <br>";
// }