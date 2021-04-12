<?php
$p1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];

$p2 = $p1;
$p3 = &$p1;

$p1['name'] = '比爾';


// php的 "="並不是設定參照(reference)，而是做實體複製。使用"&"符號是告訴程式不要另外複製一個array，完全參照同一個參數
// 
echo '$p2: ';
echo json_encode($p2, JSON_UNESCAPED_UNICODE) . '<br>';
// $p2: {"name":"Bill","age":27,"gender":"male"}


echo '$p1: ';
echo json_encode($p1, JSON_UNESCAPED_UNICODE) . '<br>';
// $p1: {"name":"比爾","age":27,"gender":"male"}

echo '$p3: ';
echo json_encode($p3, JSON_UNESCAPED_UNICODE) . '<br>';
// $p3: {"name":"比爾","age":27,"gender":"male"}