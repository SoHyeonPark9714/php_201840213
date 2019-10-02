<?php
    session_start();


    echo $_SESSION["username"]."로그인 입니다.";
    echo "학번은 ".$_COOKIE["mynum"]."입니다.";