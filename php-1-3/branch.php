<?php
    // 10 > 5 は正しいので、true と評価される。if (true) となるので { } の中が実行される
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }
    
    // 10 <= 5 は間違いなので、false と評価される。if (false) となるので { } の中は実行されない
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>

<?php
    if (10 == 5) {
        print '10 == 5 は false なのでここは表示されない' . PHP_EOL;
    }
    else {
        print 'if側が実行されないので、ここだけ実行される' . PHP_EOL;
    }
?>

<?php
    $number = mt_rand() % 10;
    
    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>

<?php
    $number = mt_rand() % 10;
    
    if ($number < 3) {
        print $number . 'は3より小さい数' . PHP_EOL;
    }
    elseif ($number < 6) {
        print $number . 'は3以上で6より小さい数' . PHP_EOL;
    }
    elseif ($number < 8) {
        print $number . 'は6以上で8より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は8か9しか来ません' . PHP_EOL;
    }
?>

<?php
    $num1 = 8;
    $num2 = 4;
    $opr = '*';
    
    if ($opr == '+') {
        print $num1 . '+' . $num2 . '=' . ($num1 + $num2) . PHP_EOL;
    }
    elseif ($opr == '-') {
        print $num1 . '-' . $num2 . '=' . ($num1 - $num2) . PHP_EOL;
    }
    elseif ($opr == '*') {
        print $num1 . '*' . $num2 . '=' . ($num1 * $num2) . PHP_EOL;
    }
    elseif ($opr == '/') {
        print $num1 . '/' . $num2 . '=' . ($num1 / $num2) . PHP_EOL;
    }
    else {
        print 'エラーです' . PHP_EOL;
    }
?>

<?php
    $num1 = 8;
    $num2 = 4;
    $opr = '*';
    
    switch($opr) {
        case '+':
            print $num1 . '+' . $num2 . '=' . ($num1 + $num2) . PHP_EOL;
            break;
        case '-':
            print $num1 . '-' . $num2 . '=' . ($num1 - $num2) . PHP_EOL;
            break;
        case '*':
            print $num1 . '*' . $num2 . '=' . ($num1 * $num2) . PHP_EOL;
            break;
        case '/':
            print $num1 . '/' . $num2 . '=' . ($num1 / $num2) . PHP_EOL;
            break;
        default:
            print 'エラーです' . PHP_EOL;
    }
?>