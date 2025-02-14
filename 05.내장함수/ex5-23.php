<?php
    // r 읽기 
    // w 파일이 존재하지 않으면 파일 생성, 존재하면 덮어씀
    // a 기존 파일에 데이터 추가
    $file = fopen("hello.txt","r"); 
    

    while(! feof($file)) { // file End of File
        echo fgets($file)."<br>";
    }

    fclose($file);
?>