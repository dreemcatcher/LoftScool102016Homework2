<?php
error_reporting(-1);
mb_internal_encoding('utf-8');

$text   = 'Карл у Клары украл кораллы';
$regexp = '/К/u';
$result = preg_replace($regexp, ' ', $text);
echo $result;
echo "<br>";

$othertext = 'Две бутылки лимонада';
$regexp    = '/Две/u';
$result    = preg_replace($regexp, 'Три', $othertext);
echo $result;