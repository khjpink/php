<?php
    $animal = array("사자", "호랑이", "사슴", "여우");

    sort($animal); // 배열의 요소를 오름차순 정렬
    print_r($animal); // Array ( [0] => 사슴 [1] => 사자 [2] => 여우 [3] => 호랑이 )


    rsort($animal); // 내림차순
    print_r($animal); // Array ( [0] => 호랑이 [1] => 여우 [2] => 사자 [3] => 사슴 )
?>