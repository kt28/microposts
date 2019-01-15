<?php
    $num = 2;
    var_dump($num);
?>

<?php
    $num = 1.2;
    var_dump($num);
?>

<?php
    $str1 = 'テキスト';
    $str2 = "テキスト";
    var_dump($str1);
    var_dump($str2);
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    print $fruits[0];           // リンゴが表示される
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    var_dump($fruits);
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ'];
    print_r($fruits);
?>

<?php
    $fruits = [
        'apple' => 'リンゴ',
        'banana' => 'バナナ',
        'orange' => 'オレンジ',
    ];
    var_dump($fruits);
    
    print $fruits['apple'];
?>

<?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?>

<?php
    $a;
    var_dump($a);
    $b = null;
    var_dump($b);
?>