<?php
// PHP 7.x / 8.0 이하용 예시

class TicketCategory {
    const NORMAL    = 1; // 일반 입장권
    const FREE_PASS = 2; // 자유 이용권
    const TWO_DAY   = 3; // 2일 이용권
    const COMBO     = 4; // 콤비권
}

function getTicketName(int $category): string {
    return match ($category) {
        TicketCategory::NORMAL    => "일반 입장권",
        TicketCategory::FREE_PASS => "자유 이용권",
        TicketCategory::TWO_DAY   => "2일 이용권",
        TicketCategory::COMBO     => "콤비권",
        default                  => "알 수 없는 티켓",
    };
}

function getTicketPrice(int $category, int $age, ?string $day = null): int
{
    switch ($category) {
        case TicketCategory::NORMAL: 
            // ... 생략 (주간/야간, 나이 조건)
            break;
        
        case TicketCategory::FREE_PASS: 
            // ...
            break;

        case TicketCategory::TWO_DAY:
            // ...
            break;

        case TicketCategory::COMBO:
            // ...
            break;

        default:
            return 0; // 기타
    }
}

// 사용 예시
$category = TicketCategory::FREE_PASS;
$age      = 20;
$day      = "야간";
$pay      = getTicketPrice($category, $age, $day);

echo "구분 : " . getTicketName($category) . "<br>";
echo "주간/야간 : " . $day . "<br>";
echo "나이 : " . $age . "<br>";
echo "입장료 : " . $pay . "<br>";
?>

