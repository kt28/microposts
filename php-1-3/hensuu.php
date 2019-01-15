<?php
    // 1日の秒数 = 24時間 × 60分 × 60秒
    $seconds_per_day = 24 * 60 * 60;    // * は 掛け算を意味する記号
    
    print $seconds_per_day;
?>

<?php
    $hours_per_day = 24;
    $minutes_per_hour = 60;
    $seconds_per_minute = 60;
    
    $seconds_per_day = $hours_per_day * $minutes_per_hour * $seconds_per_minute;
    
    print $seconds_per_day;
?>

<?php
    $hensuu = "何らかのデータ";
    $hensuu = 86400;
    print $hensuu;
?>