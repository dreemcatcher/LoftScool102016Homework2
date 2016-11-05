<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

function palindromcheck($text){
//    $text="А роза упала на лапу Азора";
    //$result='';

    $withoutSpace = str_replace(' ', '', $text); // Удаляем пробелы
    $smallText    = mb_strtolower($withoutSpace);   // Переводим в нижний регистр
    $length       = mb_strlen($smallText);
    $halfLength   = floor($length/ 2);

    for ($i=0; $i<=$halfLength; $i++){

        $firstSymbol = mb_substr($smallText,$i,1);;
        $lastSymbol  = mb_substr($smallText,$length-1-$i,1);

        if ($firstSymbol == $lastSymbol) {
            $result = 'true';
        }else {
            $result = 'false';
            break;
        }
    }
    return sayAboutPalindromCheck($result);
}

function sayAboutPalindromCheck($palCheck){
    if($palCheck == 'true') {
        return 'Выражение является палиндромом';
    }else{
        return 'Выражение не является палиндромом';
    }
}

$pal = 'А роза упала на лапу азора';

echo palindromcheck($pal);