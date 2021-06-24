<?php
function isAccount($str){
    $regexp='/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp,$str)){
        echo $str;
    }else
        echo 'wrong format';
}

isAccount("abc123");
echo "<br>";
isAccount("123");