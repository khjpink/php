<?php
// private 접근 제어자로 선언된 속성에
// 값을 저장하기 위해서는 Setter, 값을 가져오는데 Getter 메소드를 사용한다 
// 클래스 속성 값이 클래스 외부에서 변경되면 안되는 경우 사용함
    class Member {
	    private $name;

        public function setName($name) { 
		    $this->name = $name;
	    }
	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->setName("김정호");
    echo "이름 : ".$mem->getName();
?>