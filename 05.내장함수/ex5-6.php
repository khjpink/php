<?php
    $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    echo $str;

    $str2 = htmlspecialchars($str); // 태그가 문자열로 변환 
    echo $str2;
?>