<?php
// private : 속성과 메소드가 해당 클래스 내에서만 접근 가능

    class Member {
	    private $name;

	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    // 접근 오류 발생 Cannot access private property Member
    // 클래스의 외부객체$mem에선 $name 속성에 접근 불가 
    $mem->name = "홍길동";  
    echo "이름 : ".$mem->getName();
?>