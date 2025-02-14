<?php   
    $member = array("id"=> "hong77", 
                    "pass"=>"12345", 
                    "name"=>"홍길동", 
                    "age"=>30); 

    //foreach는 배열에서만 사용됨 
    //배열요소의 키와 값을 반복해서 읽는다. 키를 $key에, 값을 $value에 넣는다 
    foreach($member as $key=>$value) {
        echo "키 : ".$key.", 값 : ".$value;
        echo "<br>";
    }



?> 