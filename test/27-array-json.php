<?php
$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];


// JSON 字串可以包含陣列 Array 資料或者是物件 Object 資料
// 陣列可以用 [ ] 來寫入資料
// 物件可以用 { } 來寫入資料
// name / value 是成對的，中間透過 (:) 來區隔
// 物件或陣列的 value 值可以如下
// 數字 (整數或浮點數)
// json字串 (請用 "" 括號)，不可以有註解
// 布林函數 (boolean) (true 或 false)
// 陣列 (請用 [ ] )
// 物件 (請用 { } )
// NULL
// json轉字串要用encode;字串轉json用decode
// 在Javascript要將json轉成字串使用JSON.stringify(變數)
// 將字串轉回物件使用JSON.parse(str)，需先定義str

// echo json_encode($persons, JSON_UNESCAPED_UNICODE);

echo json_encode([
    'get' => $_GET,
    'persons' => $persons
], JSON_UNESCAPED_UNICODE);
