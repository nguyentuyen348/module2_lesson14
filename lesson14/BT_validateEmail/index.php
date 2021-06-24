<?php
function isEmail($str)
{
    $regexp= '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp,$str)){
        echo $str;
    }else{
        echo 'wrong format';
    }
}

isEmail("Nguyen384@gmail.com");
echo'<br>';
isEmail("@Nguyen384@gmail.com");