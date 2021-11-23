<?php
//Строковы функции

//$str = 'Alexx is Alex cool';

//var_dump($str);

//$data = strlen($srt);

//$needle = 'Alexx';

//$data = strpos($str, $needle);
//$data = strrpos($str, $needle); - последние вхождение
//$data = stripos($str, $needle); - регистронезависимый поиск
//$data = strripos($str, $needle); - регистронезависимый поиск последнего вхождения

//$data = substr($str, strpos($str, $needle), strlen($needle)); - вырезает по заданым параметрам фунции

//$data = trim($str, '&! '); -обрезка пробелов или заданых елементов

//$data = str_replace($needle, 'Olga', $str ); - замена значения

//$data = explode(' ', $str); - разбивка строки на масив


//var_dump($data);

// Регуляные выражения

//$str = 'Alexx is Alexe ceooL';

//preg_match_all('/[x]/', $str, $matches); - поиск слова или символа

//$res = preg_match_all('/[\d]/', $str, $matches);

//$res = preg_match_all('/e(x|\s)/', $str, $matches);

//$res = preg_match_all('/e./', $str, $matches);

//$res = preg_match_all('/\s{2,}\w/', $str, $matches);

//$res = preg_match_all('/[^,\s]\s{2,}\w/', $str, $matches);

//$res = preg_match_all('/^[A-Z]/', $str, $matches); - поиск заглавных букв в начале строки

//$res = preg_match_all('/[A-Z]$/', $str, $matches); - поиск заглавных букв в конце строки

//$res = preg_match_all('/[A-Z]+/', $str, $matches); - поиск заглавных букв 1 и более раз


// Робота с файлами


/*$file = fopen("text.txt", "w");

fwrite($file, "\nHallo, Alex!\nWie gehts?");

fclose($file);

*/

//$filename = "text.txt";

//$file = fopen($filename, 'r' );
//fpassthru($file);

//$content = fread($file, filesize($filename));

//echo $content . '<br>';

//fclose($file);

/*$f = "a.txt";
file_put_contents($f, "Bye-Bye!\nAlex\nMaiko");

$ff = fopen($f, 'r');
fpassthru($ff); */


//echo file_get_contents("a.txt") . '<br>' ;

//echo file_exists("a.txt");
//rename("atxt", "a.txt");

//echo fileperms(__FILE__);













