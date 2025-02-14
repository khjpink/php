<?php
    $score = array(93, 85, 93, 77, 100);

    $sum = array_sum($score); // 배열의 요소 합계
    $avg = $sum/count($score);

    echo "합계 : ".$sum."<br>";
    echo "평균 : ".$avg;
?>