<?php
    $str = "&lt;h3&gt;MySQL은 PHP와 같이 많이 사용된다.&lt;/h3&gt;";
    echo $str."<br>";

    $str2 = htmlspecialchars_decode($str); // 특수기호를 태그로 변환 
    echo $str2;    
?>