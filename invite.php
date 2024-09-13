<?php
// 사용자 에이전트를 감지하여 디바이스를 판별합니다.
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// URL에서 inviteCode를 가져옵니다.
$inviteCode = isset($_GET['inviteCode']) ? $_GET['inviteCode'] : null;

// Android 기기인 경우 Google Play로 리디렉션
if (preg_match('/android/i', $userAgent)) {
    header('Location: https://play.google.com/store/apps/details?id=com.dopamine2');
    exit;
}

// iOS 기기인 경우 App Store로 리디렉션
elseif (preg_match('/iPhone|iPad|iPod/i', $userAgent)) {
    header('Location: https://apps.apple.com/app/id6480446217');
    exit;
}

// 그 외의 경우에는 기본 웹 페이지를 출력하거나 사용자에게 적절한 안내를 제공
else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Invite</title>
    </head>
    <body>
        <h1>Welcome to Our App</h1>
        <p>It seems that you don't have the app installed. You can download it from the respective app store.</p>
        <p>Invite Code: $inviteCode</p>
        <p><a href='https://play.google.com/store/apps/details?id=com.dopamine2'>Download on Google Play</a></p>
        <p><a href='https://apps.apple.com/app/id6480446217'>Download on the App Store</a></p>
    </body>
    </html>";
}
?>
