<?php

$arr = [
    ["ayyub@gmail.com", "tahir@mail.ru"],
    ["123", "321"]
];

if (isset($_POST['enter']) && isset($_SERVER['HTTP_REFERER'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    for ($i = 0; $i <= count($arr[0]); $i++) {
        if ($arr[0][$i] == $email && $arr[1][$i] == $password) {
            echo "Xoş Gəlmişsiniz!";
            return;
        }
    }
    header("Location:index.htm?status=nouser");
    exit;
} else {
    header("Location:index.htm?status=ncnc");
    exit;
}