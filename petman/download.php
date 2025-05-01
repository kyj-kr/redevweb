<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// 구글 플레이 / 앱스토어 링크
$androidUrl = 'https://play.google.com/store/apps/details?id=com.redev.petman';
$iosUrl = 'https://apps.apple.com/app/id6744839378';

// User-Agent 기반 분기
if (stripos($userAgent, 'Android') !== false) {
    header("Location: $androidUrl");
    exit;
} elseif (stripos($userAgent, 'iPhone') !== false || stripos($userAgent, 'iPad') !== false || stripos($userAgent, 'iPod') !== false) {
    header("Location: $iosUrl");
    exit;
} else {
    // fallback: 플랫폼을 알 수 없을 경우 랜딩 페이지나 기본 사이트로 이동
    header("Location: https://play.google.com/store/apps/details?id=com.redev.petman");
    exit;
}
?>