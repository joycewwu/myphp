<?php
/*
php 上傳檔案有指定變數 $_FILES
上傳多個檔案要加中括號 []，例: key = avatar[]
*/


if (isset($_FILES['avatar'])) {
    echo json_encode($_FILES['avatar']);
}

/*
{
    "name": "1.png",
    "type": "image/png",
    "tmp_name": "C:\\xampp\\tmp\\php542D.tmp",
    "error": 0,
    "size": 49648
}
$_FILES['avatar']['name'];

// 上傳多個檔案
{
    "name": [
        "1.png",
        "2.png",
        "3.png"
    ],
    "type": [
        "image/png",
        "image/png",
        "image/png"
    ],
    "tmp_name": [
        "C:\\xampp\\tmp\\phpB4F9.tmp",
        "C:\\xampp\\tmp\\phpB4FA.tmp",
        "C:\\xampp\\tmp\\phpB4FB.tmp"
    ],
    "error": [
        0,
        0,
        0
    ],
    "size": [
        49648,
        41099,
        39472
    ]
}

 */
