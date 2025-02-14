<?php
    session_start();
 
    // 세션 접속 끊기
    //isset () : 변수 값이 존재하는지 체크, bool반환
    if(isset($_SESSION["username"])){ 
        //unset 세션 해제 
        unset($_SESSION["username"]);
    }

    echo "세션 접속 해제!";
?>