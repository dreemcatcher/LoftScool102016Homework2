<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

$digitalArray = array(mt_rand(1,100), mt_rand(1,100));

echo '<pre>';
print_r($digitalArray);  // штуковина для тестирования массива.
echo '</pre>';

Function loftMath($digitalArray, $operator)
{
    $result = 0;
    if($operator == '+'){
        foreach ($digitalArray as $var){
            $result = array_sum($digitalArray);
        }
    }elseif($operator=='-'){  // Нельзя просто вычитать, надо взять первый элемент массива, и из него вычитать остальное.
        $result=$digitalArray[0];
        // $result = array_shift($digitalArray); альтернатива
        for ($i = 1; $i<count($digitalArray); $i++) {
            $result = $result - $digitalArray[$i];
        }
    }elseif($operator=='*'){
        $result=$digitalArray[0];
        for ($i = 1; $i<count($digitalArray); $i++) {
            $result = $result * $digitalArray[$i];
        }
    }elseif($operator=='/'){
        $result=$digitalArray[0];
        for ($i = 1; $i<count($digitalArray); $i++) {
            $result = $result / $digitalArray[$i];
        }
    }else{
        echo "Неизвестная операция";//эх двойные кавычик
        return $result='';
    }
    return $result;
}

//echo loftMath($digitalArray, '+');
//echo "<br>";
//echo loftMath($digitalArray, '-');
//echo "<br>";
//echo loftMath($digitalArray, '*');
//echo "<br>";
//echo loftMath($digitalArray, '/');
//echo "<br>";
//echo loftMath($digitalArray, '^');

$marks = ['+', '-', '*', '/', '^'];
foreach ($marks as $mark)
{
    //зарефакторил
    echo '<br>';
    echo loftMath($digitalArray,$mark);
}
/**
 * echo loftMath($digitalArray, true); работает???
 * ну и синтаксис конечно ж
 */