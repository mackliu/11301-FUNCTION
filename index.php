<h1>自訂函式</h1>
<?php


$a = ['A', 'B', 'C', 'D', 'E'];
$b = [
    '姓名' => '劉勤永',
    '學號' => '103001',
    '數學' => '90',
    '國文' => 67,
    '英文' => 56
];

dd($a);
dd($b);

/**
 * 在頁面上快速顯示陣列內容
 * direct dump
 * @param $array 輸入的參數需為陣列
 */
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>