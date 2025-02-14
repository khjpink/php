<?php
//객체지향 프로그래밍
    // 클래스는 객체를 생성하는 틀
    // 속성은 객체의 내부에서 사용되는 변수


    class Person { // 클래스

        public $name; // 속성=멤버변수
        public $age; 

        public function intro() { //메소드=멤버함수
            // this : 클래스의 내부 속성에 접근하기 위한 키워드, 클래스 자기 자신을 가리킴
            echo "이름 : ".$this->name.", 나이 : ".$this->age;
        }
    }

    // 객체 생성
    $hong = new Person();

    $hong->name = "홍길동"; // hong객체의 $name 속성을 의미 
    $hong->age = 20;

    $hong->intro(); 
?>