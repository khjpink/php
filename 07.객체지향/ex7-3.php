<?php
//생성자
    class Triangle {
        public $width;
        public $height;
        public function __construct($width, $height) { // 생성자 함수(매개변수)
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea() { // 메소드
            $area = $this->width * $this->height * 0.5;
            return $area;
        } 
    }

    //객체가 생성할 때 자동으로 실행되는 메소드를 생성자(Constructor)라고 한다 
    // 객체 생성과 동시에 초기화를 강제한다 
    $tri1 = new Triangle(10, 5); // 클래스(인수)
    echo "삼각형의 넓이 : ".$tri1->getArea();
?>