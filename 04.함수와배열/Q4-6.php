<?php
    $data = array(3, 34, -3, -47, 9, 10, 12, 7, 8, -4, -13, 74);

    echo "데이터 : ";
    $i = 0;
    while ($i < count($data)) {
        echo $data[$i]." ";

        $i++;
    }


    echo "<br>렌덤 <br>";
    $array = [];
    $i=0;
    
    
    echo "데이터 : ";
    while($i<10){
        
        $r = rand(-100, 100); // 숫자 범위 
        array_push($array, $r);
        $random = array_rand($array);
        echo $array[$random]." ";
    
        $i++;
    }    
?>
