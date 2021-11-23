<?php

//Фуккции

function walk($a){
echo "Підняти $a ногу" . '<br>';
echo 'Опустити ногу' . '<br>';

}

walk('ліву');

function myFunktion($a , $b){
    $sum = $a + $b . '<br>';
    return $sum;
}
 echo myFunktion(5, 3);


//function cook($igridients, $meal){

    //echo 'Беру ' . $igridients . '<br>';
    //echo 'Готую' . '<br>';
  //  return 'Блюдо ' . $meal . 'готовo' . '<br>'; }

//cook('кетчуп, тісто, сир', 'Пица ');

//$meal = cook('мясо, картошка' , 'Суп ');
//var_dump($meal);

// Цикли

$array = ['1' , '2' , '3', '4','5'];
for($i = 0; $i<count($array); $i++ ){
    echo "$array[$i] <br>";
}

$arr = [
    'auto'=> 'Dodge',
    'plane'=> 'Il 2',
    'ship'=> 'Black Pearl'
];
foreach($arr as $key => $value){
    echo "$key : $value <br>";
}

$transport = [
    'Auto' => ['Lada', 'BMW', 'Dodge'],
    'Plane' => ['Il 2', 'I 16'],
    'Ship' => ['Fregat', 'Esminets', 'Avianosec']
];

foreach ($transport as $key => $array){
    echo "$key <br>";
    foreach ($array as $value){
        echo "<li> $value </li>";
    }
}
$a = 'html';
if($a == 'php'){
    echo "Istina1";
} elseif($a == 'c+') {
    echo "Lozh";
} else{
    echo " Nichego";
}
echo '<br>';

//SWITCH

$ss = 'HTML';
switch ($ss){
    case 'c++':
        echo 'Sprache - c++';
        break;
    case 'js' :
        echo ' Sprache JS';
        break;
    case 'HTML' :
        echo ' Sprache HTM';
        break;
    default: echo 'Niegs';
}


// Cookie

echo '<br>';

if($_COOKIE) {
    var_dump($_COOKIE);
}
else setcookie('name', 'Masha', 0, '/');

// Session

session_start();

var_dump($_SESSION);

$_SESSION['res'] = [ 1, 2,3];
unset($_SESSION['res']);

// Server












