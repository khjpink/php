<?php
    // 날짜와 시간을 특정 포맷의 문자열로 만든다 
    $today = date("Y년 m월 d일"); 


    echo "오늘은 ".$today." 입니다.<br>";
    echo date("Y-m-d")."<br>";   // 네 자리 연도
    echo date("y.m.d")."<br><br>";   // 두 자리 연도 

    echo date("Y-m-d A:H:i:s")."<br>";  // H 시(24시 기준) : 00~23
    echo date("Y-m-d a:H:i:s")."<br><br>";

    echo date("Y-m-d A:h:i:s")."<br>";  // h 시(12시 기준) : 01~12
    echo date("Y-m-d a:h:i:s")."<br>";
    
    // 오늘은 2025년 01월 12일 입니다.
    // 2025-01-12
    // 25.01.12

    // 2025-01-12 AM:03:01:57
    // 2025-01-12 am:03:01:57

    // 2025-01-12 AM:03:01:57
    // 2025-01-12 am:03:01:57


?>