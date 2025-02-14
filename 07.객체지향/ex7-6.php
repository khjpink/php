<?php
//접근 제어자 
// public :  속성과 메소드가 어느 곳에서든 접근 가능
    class Member {
	    public $name; 

	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->name = "홍길동";  // 외부에서도 접근 가능
    echo "이름 : ".$mem->getName();
?>