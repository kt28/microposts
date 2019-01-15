<?php
    $seconds_per_day = 24 * 60 * 60;
    $hensuu = "何らかのデータ";
    var_dump($seconds_per_day);
?>

<?php
    $num1 = 1 + 2;      // $num1 には 3 が入っている
    $num2 = 1 - 2;      // $num2 には -1 が入っている
    $num3 = 2 * 5;      // $num3 には 10 が入っている
    $num4 = 6 / 3;      // $num4 には 2 が入っている
    $num5 = 5 % 2;      // $num5 には 1 が入っている（割った後の余り）
    print $num5;
?>

<?php
    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . $str2;
    print $str;
?>

<?php
    $str = "文字列1";
    $str = " + 文字列2";
    $str = $str1 . PHP_EOL . $str2 . PHP_EOL;
    print $str;
?>

<?php
    var_dump(1 < 2);
    
    var_dump(1 == 2);
?>