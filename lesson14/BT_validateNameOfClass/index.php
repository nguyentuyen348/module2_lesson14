<?php
function isNameOfClass($str){
    $regexp='/^[CAP]+[0-9]{4}+[GHIKLM]$/';
    if(preg_match($regexp,$str)){
        echo $str;
    }else
        echo 'wrong format';
}

isNameOfClass('A2104G');
echo '<br>';
isNameOfClass('a2004G');
