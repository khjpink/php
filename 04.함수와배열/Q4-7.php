<?php
    $data = array(array(3, 34, -3, -47, 9, 10, 12, 7, 8, -4, -13, 74),
        array(32, 3, -34, 42, 19, 1, -12, 57, -8, -42, 13, -21),
        array(2, 9, -1, -12, 89, 0, 15, 7, -8, -33, 3, 7));

    for ($i=0; $i<count($data); $i++) { // 1,2,3 // 1부터 시작 
        $number = $i + 1;
        echo $number." : ";
        for ($j=0; $j<count($data[$i]); $j++)  // 1....12
            echo $data[$i][$j]." ";

        echo "<br>";
    }
?>
