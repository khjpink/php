<?php
    // 24*60*60 = 1일, 30일 후 쿠키 만료 
    setcookie("userid", "hong123", time() + 24*60*60 * 30 );
    
    // js location 객체의 href속성은 현재 접속 중인 페이지 정보를 담고 있다 
    // 속성 값에 url 주소를 설정하면 해당 페이지로 이동시킬 수 있다
    echo "<script>
            location.href = 'cookie_page.php';
        </script>";
?>