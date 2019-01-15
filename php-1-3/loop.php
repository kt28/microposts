<?php
    for ($i = 1; $i <= 10; $i++) {
        print $i . '回目' . PHP_EOL;
    }
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);        // 配列の中身の数を$countへ代入
    for ($i = 0; $i < $count; $i++) {
        print $i . '番目：' . $fruits[$i] . PHP_EOL;
    }
?>

<?php
    // 変数の初期化
    $count = 0;
    $number = 0;
    
    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }
    
    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>

<?php
    $count = 0;
    $number = 0;
    
    do {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    } while ($number != 9);
    
    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $key => $fruits) {
        print $key . '番目：' . $fruits . PHP_EOL;
    }
?>

<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    foreach ($fruits as $fruits) {
        print $fruits . PHP_EOL;
    }
?>

<?php
    $i = 0;
    while(true) {
        $i++;
        if ($i > 20) {      // $i が 20を超えていたら繰り返し終了
            break;
        }
        
        if ($i % 2 == 1) {      // $i が奇数なら以降の処理はスキップ
            continue;
        }
        
        print $i . PHP_EOL;
    }