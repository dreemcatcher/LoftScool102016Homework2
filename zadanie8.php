<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

function rxAnalize($text){         // Ищем  смайлик
    $smileRegexp = '/[:][)]/';
    //тут даже storm ругается на переменную наверное лучше так $smileResult
    $Smileresult = preg_match($smileRegexp, $text, $foundSmile);
    if ($Smileresult==1){
        echo "<pre>";
         echo "<br>                    OOOOOOOOOOO";
         echo "<br>                OOOOOOOOOOOOOOOOOOO";
         echo "<br>             OOOOOO  OOOOOOOOO  OOOOOO";
         echo "<br>           OOOOOO      OOOOO      OOOOOO";
         echo "<br>         OOOOOOOO  #   OOOOO  #   OOOOOOOO";
         echo "<br>        OOOOOOOOOO    OOOOOOO    OOOOOOOOOO";
         echo "<br>       OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
         echo "<br>       OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
         echo "<br>       OOOO  OOOOOOOOOOOOOOOOOOOOOOOOO  OOOO";
         echo "<br>        OOOO  OOOOOOOOOOOOOOOOOOOOOOO  OOOO";
         echo "<br>         OOOO   OOOOOOOOOOOOOOOOOOOO  OOOO";
         echo "<br>           OOOOO   OOOOOOOOOOOOOOO   OOOO";
         echo "<br>             OOOOOO   OOOOOOOOO   OOOOOO";
         echo "<br>                OOOOOO         OOOOOO";
         echo "<br>                    OOOOOOOOOOOO";
        echo "</pre>";
    }
    else
    {
        rxCheck($text);
    }
}

function rxCheck($text){
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

echo rxAnalize("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxAnalize("RX packets:100 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxAnalize("RX packets:999999 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxAnalize("RX packets:95031 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxAnalize("RX packets:0381 errors:0 dropped:0 overruns:0 frame:0.");
echo "<br>";
echo rxAnalize("RX packets:112 errors:0 dropped:0 overruns:0 frame:0.  :)");
echo "<br>";