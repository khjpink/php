<?php
    // 타임스탬프는 1970년1월1일 0시0분0초를 기준으로 일시를 초 단위로 표시하는 방식 
    $timestamp = time();
    echo "현재 시간 타임스탬프 : ".$timestamp."<br>"; // 현재 시간 1736907473 입니다.

    echo "현재 시간 : ".date("Y-m-d H:i:s", $timestamp);
?>