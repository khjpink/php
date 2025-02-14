<?php
//소멸자(Destructor): 객체가 소멸될 때 자동호출되는 특수 메서드
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function __destruct() { //소멸자 함수
            echo "이름은 ".$this->name."입니다.";
        }
    }
    $person1 = new Person("홍길동");
    //__construct 사용자함수 종료되면 php는 메모리를 정리함
    //$person1 객체가 더이상 사용되지 않으므로 소멸됨
    //__destruct 소멸자함수가 자동 호출됨
    
    
?>