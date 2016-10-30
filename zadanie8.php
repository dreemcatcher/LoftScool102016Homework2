<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

function rxCheck($text){
    // Ищем смайлик
    $smileRegexp = '/[:][)]/';
    $Smileresult = preg_match($smileRegexp, $text, $foundSmile);
    //print_r ($foundSmile);
    if ($Smileresult==1){
        echo ":)";
    }
    else
    {
        // вычисляем packets:950381 ибо просто по числу найти можно много чего
        $regexp = '/packets:[0-9]{1,9}/';
        $result = preg_match($regexp, $text, $found);
        //print_r ($found);
        //Ковыряем результат, выкидваем из него packets: чтобы получить число с которым можно сравнивать
        $regexp = '/[0-9]{1,9}/';
        $result = preg_match($regexp, $text, $foundPacks);
        //print_r ($foundPacks);
        $countPacks=$foundPacks[0];
        echo $countPacks;
        echo "<br>";
        if ($countPacks>1000){
            echo "Сеть есть<br>";
        }
        else{
            echo "Сети нет<br>";
        }
    }
}

echo rxCheck("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:100 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:999999 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:95031 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:0381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxCheck("RX packets:112 errors:0 dropped:0 overruns:0 frame:0.  :)");
echo "<br>";