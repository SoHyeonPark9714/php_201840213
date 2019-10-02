<?php
    session_start();
    $_SESSION["username"]="대남이 ";


setcookie("mynum","201840213",time()+(86400*30),"/"); //쿠키의 변수명 변수값, 저장 기간 (초단위 이다.)