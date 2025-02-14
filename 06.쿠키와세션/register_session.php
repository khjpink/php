<?php
// 세션을 사용하려면 
// 세션을 필요로 하는 모든 페이지에서 session_start()을 사용하여 세션을 시작해야함
    session_start();
    $_SESSION["username"] = "홍길동";

    echo "세션 등록!";
?>