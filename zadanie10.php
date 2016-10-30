<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
function myFileCreate($fileName, $fileContent){
    file_put_contents($fileName, $fileContent);
    $result=file_get_contents($fileName);
    return $result;
}
echo myFileCreate('anothertest.txt', 'Hello again!');