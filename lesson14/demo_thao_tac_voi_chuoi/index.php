<?php
//strlen($string): hàm trả về độ dài chuỗi
echo strlen("Hello world!").'<br>';
//str_word_count($string): hàm trả về số từ trong chuỗi
echo str_word_count("Hello world!").'<br>';
//strrev($string): hàm đảo ngược chuỗi
echo strrev("Hello world!").'<br>';
//strpos($string, $text): hàm tìm kiếm chuỗi $text trong chuỗi $string. Nếu tìm thấy, hàm trả về chỉ số ký tự đầu tiên tìm thấy của chuỗi. Nếu không tìm thấy, hàm trả về FALSE.
echo strpos("Hello world!", "world").'<br>';
//str_replace($find, $replace, $string): hàm tìm kiếm chuỗi $find, thay thế chuỗi đó bằng $replace trong chuỗi ban đầu $string
echo str_replace("world", "Dolly", "Hello world!").'<br>';
//substr($string, $start, $length): Hàm này có tác dụng cắt chuỗi $string, bắt đầu ở vị trí $strat và có giới hạn $length
