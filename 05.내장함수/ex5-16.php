<?php
    $animal = array("사자", "호랑이", "사슴", "여우");

    array_push($animal, "팽귄"); // 배열의 맨 뒤에 요소 추가
    array_push($animal, "코뿔소"); 

    // 배열의 인덱스와 요소 값 출력
    // Array ( [0] => 사자 [1] => 호랑이 [2] => 사슴 [3] => 여우 [4] => 팽귄 [5] => 코뿔소 )
    print_r($animal); 
    
?>