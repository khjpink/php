<?php
    // 쿠키 삭제
    //쿠키의 값을 널""로 설정
    setcookie("username", "", time()-3600); // 현재시간 1시간 전

    echo "쿠키 삭제 완료!";
?>