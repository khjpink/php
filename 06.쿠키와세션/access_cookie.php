<?php
//isset () : 변수 값이 존재하는지 체크, bool반환
    if(isset($_COOKIE["username"])){ // $_COOKIE 쿠키에 사용되는 전역변수
        echo $_COOKIE["username"]."님 환영합니다.";
    } 
    else {
        echo "username 쿠키가 존재하지 않습니다.";
    }
?>