<?php   
    //연관 배열은 인덱스 대신 키를 사용 
    $member = array("id"=> "hong77", "pass"=>"12345", "name"=>"홍길동", "age"=>30); 
   
    echo "아이디 : ".$member["id"]."<br>";
    echo "비밀번호 : ".$member["pass"]."<br>";
    echo "이름 : ".$member["name"]."<br>";
    echo "나이 : ".$member["age"];
?> 