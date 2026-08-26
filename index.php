<?php

// TRACCIA 1
$integer = 5;
$float = 4.5;
$string = "stringa";
$boolean = true;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

const INTEGER = 5;
const FLOAT = 4.5;
const STRING = "stringa";
const BOOLEAN = true;



// TRACCIA 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = "bevuto";
$text8 = "tutto";

echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " ". $text7 . " " . $text8; 

echo "\n";

// TRACCIA 3


$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
  [
    'cammin',
    'Nel',
    [
      'selva',
      'la',
      [
        'via',
        'una',
        true,
      ]
    ],
  ]
],
    'ritrovai',
    'per'
  ],
'diritta'
];


$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];





$result = $words1[6][3][1][1] . ' ' .          
    $words1[6][3][0] . ' di ' .          
    $words1[6][3][1][0] . ' di ' .       
    $words2['elemento2'] . ' ' .         
    $words1[2] . ' ' .                   
    $words1[4] . ' ' .                   
    $words1[6][4] . ' ' .                
    $words1[6][5] . ' ' .                
    $words1[6][3][1][2][2][1] . ' ' .    
    $words1[6][3][1][2][0] . ' ' .       
    $words1[6][0] . ', ' .               
    $words2['elemento3'][2] . ' ' .      
    $words1[6][3][1][2][1] . ' ' .       
    $words1[7] . ' ' .                   
    $words1[6][3][1][2][2][0] . ' ' .    
    $words1[6][1] . ' ' .                
    $words2['elemento3'][1];    

    echo $result;



    // TRACCIA 4


    $users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'Uomo'],
  ['name' => 'Francesca', 'surname' => 'Capaccio', 'gender' => 'Donna'],
  ['name' => 'Silvio', 'surname' => 'Adamo', 'gender' => 'Uomo'],
    ['name' => 'Federica', 'surname' => 'Gagliardi', 'gender' => 'Donna'],
];

foreach ($users as $user){

if($user["gender"] == "Uomo"){
    echo "Buongiono Sig. " . $user["name"] . ' ' . $user["surname"] . "\n";
}
elseif ($user["gender"] == "Donna") {
    echo "Buongiorno Sig.ra " .  $user["name"] . ' ' . $user["surname"] . "\n";
}
else{
        echo "Buongiorno " . $user["name"] . " " . $user["surname"] . "\n";
    }
}

// TRACCIA 5

$numbers = [ 1, 32, 43, 22, 12, 10, 5, 9, 85, 88, 83, 2 ];
$somma = 0 ;
$counter = 0;

foreach ($numbers as $number){
    if($number % 2 == 0){
$somma = $somma + $number;
$counter++;
    }
}

$media = $somma / $counter;

echo "La media dei numeri è uguale a " . " " . $media;


