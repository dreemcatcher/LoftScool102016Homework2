<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

function myMultiplicationTable($x = 10, $y = 10)  // На тот случай если просто нужна таблица, тут есть параметры по дефолту
{
    if((intval($x) === $x && $x > 0) and (intval($y) === $y && $y > 0)) {  // нам вообще число передали?
        for ($i = 1; $i < $x; $i++) {
            for ($j = 1; $j < $y; $j++) {
                $proizv = $i * $j . " ";
                if (($i % 2) == 0) {
                    if (($j % 2) == 0) {
                        //если $i и $j - чётные
                        echo '' . $proizv . '';
                    } else {
                        //если $i чётное но $j - нет, выводим без скобок.
                        echo $proizv;
                    }
                } else {
                    //$i нечётное
                    if (($j % 2) == 0) {
                        //$j чётное, выводим без скобок
                        echo $proizv;
                    } else {
                        // $j нечётное выводим в круглых
                        echo "" . $proizv . "";
                    }
                }
            }
            echo "<br>";
            $j = 1;
        }
    }else{
        echo "Параметры неизвестны";
    }
}
echo myMultiplicationTable(4,4)."<br>";
echo myMultiplicationTable(5,5)."<br>";
echo myMultiplicationTable(6,6)."<br>";
echo myMultiplicationTable(7,7)."<br>";
echo myMultiplicationTable('Игорь', 'Коля')."<br>";

