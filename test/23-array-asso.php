<pre>
<?php


// 關聯式陣列

$ar1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];
$ar2 = [2, 4, 6, 9, 15];
//print_r($ar1);
foreach ($ar1 as $k => $v) {
    echo "$k : $v<br>";
}
echo "-----------------------<br>";

// 索引式陣列
foreach ($ar2 as $k => $v) {
    echo "$k : $v<br>";
}


?>
</pre>