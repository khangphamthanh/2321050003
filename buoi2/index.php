<?php 
    //cookie: lưu ở phía người dùng, dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "Khang";

    setcookie($cookieName, $cookieValue, time() + (86400), "/");

    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }else{
        echo "cookie chưa tồn tại";
    }
    echo "<br>";

    //session: thông tin đăng nhập, giỏ hàng
    session_start();
    $_SESSION["name"] = "Khang 123";
    echo $_SESSION["name"];

?>