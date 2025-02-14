<?php

/**
 * PHP 8.1 이상에서 사용 가능한 enum 선언.
 * 숫자 값을 부여해도 되고, 문자열 enum으로 사용해도 됩니다.
 */
enum TicketCategory: int {
    case NORMAL    = 1;   // 일반 입장권
    case FREE_PASS = 2;   // 자유 이용권
    case TWO_DAY   = 3;   // 2일 이용권
    case COMBO     = 4;   // 콤비권
}

/**
 * enum을 사람-readable 하게 표시하기 위한 함수
 */
function getTicketName(TicketCategory $category): string
{
    return match($category) {
        TicketCategory::NORMAL    => "일반 입장권",
        TicketCategory::FREE_PASS => "자유 이용권",
        TicketCategory::TWO_DAY   => "2일 이용권",
        TicketCategory::COMBO     => "콤비권",
    };
}

/**
 * 티켓 종류, 나이, 주간/야간 여부에 따라 요금 계산
 *  - NORMAL(일반 입장권)과 FREE_PASS(자유 이용권)는 주간/야간에 따라 요금이 다르므로 $day 파라미터 사용
 *  - TWO_DAY(2일 이용권)과 COMBO(콤비권)는 하루/주간/야간 구분 없이 동일 계산
 */
function getTicketPrice(TicketCategory $category, int $age, ?string $day = null): int
{
    switch ($category) {
        case TicketCategory::NORMAL:    // 일반 입장권
            if ($day === "주간") {
                if ($age > 12 && $age < 65) {
                    return 26000;
                } else {
                    return 19000;
                }
            } 
            // 야간
            else {
                if ($age > 12 && $age < 65) {
                    return 21000;
                } else {
                    return 16000;
                }
            }

        case TicketCategory::FREE_PASS: // 자유 이용권
            if ($day === "주간") {
                if ($age > 12 && $age < 65) {
                    return 33000;
                } else {
                    return 24000;
                }
            } 
            // 야간
            else {
                if ($age > 12 && $age < 65) {
                    return 28000;
                } else {
                    return 21000;
                }
            }

        case TicketCategory::TWO_DAY:   // 2일 이용권
            if ($age > 12 && $age < 65) {
                return 55000;
            } else {
                return 40000;
            }

        case TicketCategory::COMBO:     // 콤비권
            if ($age > 12 && $age < 65) {
                return 54000;
            } else {
                return 40000;
            }
    }
}

/** ----------------------------- 
 *  아래는 예시 실행부 코드
 *------------------------------ */

// 예시 입력값
$category = TicketCategory::FREE_PASS;  // 자유 이용권
$age      = 20;                        // 20세
$day      = "야간";                    // 주간 or 야간

// 티켓 요금 계산
$pay = getTicketPrice($category, $age, $day);

// 결과 출력
echo "구분 : " . getTicketName($category) . "<br>";

/**
 * 일반 입장권(NORMAL)과 자유 이용권(FREE_PASS)의 경우만
 * 주간/야간 정보를 보여주도록 예시 처리
 */
if ($category === TicketCategory::NORMAL || $category === TicketCategory::FREE_PASS) {
    echo "주간/야간 : " . $day . "<br>";
}

echo "나이 : " . $age . "<br>";
echo "입장료 : " . $pay . "<br>";

?>

