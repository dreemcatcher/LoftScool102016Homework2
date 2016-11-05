<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

function  calcEverything()
{
    $numbers=0;
    $char = func_get_arg(0);
//    echo '<pre>';
//    print_r($char);  // штуковина для тестирования массива.
//    echo '</pre>';

    echo "Получено действие $char .<br>";
    if($char=='+'){
        for ($i=1; $i<func_num_args(); $i++)  // Первый элемент это действие.
        {
            echo "Параметр номер $i: " . func_get_arg($i) . "<br>";
            $numbers=$numbers+func_get_arg($i);
        }
        return $numbers;
    }elseif($char=='-'){
        $numbers=func_get_arg(1);            // Из первого элемента мы вычитаем все остальные
        for ($i=2; $i<func_num_args(); $i++) // Поэтому тут отсчёт со второго
        {
            echo "Параметр номер $i: " . func_get_arg($i) . "<br>";
            $numbers=$numbers-func_get_arg(1);
        }
        return $numbers;
    }elseif($char=='/'){
        $numbers=func_get_arg(1);
        for ($i=2; $i<func_num_args(); $i++)
        {
            $x=func_get_arg($i);
            echo "Параметр номер $i: " . func_get_arg($i) . "<br>";
            //echo "Выполняем деление".$numbers." / " .$x;
            $numbers=$numbers/$x; // Делится на непосредственно взятую переменную из массива не хочет, присваиваем её переменной и делим.
            //echo " = ".$numbers."<br>";
        }
        return $numbers;
    }elseif($char=='*'){
        $numbers=func_get_arg(1);
        for ($i=2; $i<func_num_args(); $i++)
        {
            $x=func_get_arg($i);
            echo "Параметр номер $i: " . func_get_arg($i) . "<br>";
            $numbers=$numbers*$x;
        }
        return $numbers;
    }else{
        echo "Неизвестное действие.<br>";
    }
}

echo  calcEverything('+', 1, 2, 3, 5.2);
echo  calcEverything('-', 1, 2, 3, 5.2);
echo  calcEverything('/', 1, 2, 3, 5.2);
echo  calcEverything('*', 1, 2, 3, 5.2);

/**
 * стилистика кода выкали глаза XD
 * switch здесь мне кажется лучше подошел
 * можно вобще забить эти символы в массив и проверить key exist если есть выполнять если нет то нет
 * можно еще проверку на первый аргумент тиав если не валидный то Exception
 */