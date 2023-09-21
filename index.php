<?php

echo 'Hello World';
//print 'Hello World';
//printf('Hello World');

// line comment

/**
 * 
 * multiline comment
 */

$hello = 'World'; // variables always start with $
$hello = 3;
$world = '\nHello $hello';
$world = "\nHello $hello";
echo $world;
$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array[] = 5;
print_r($array);
var_dump($world);
$array = ['name' => 'Karel', 'age' => 30];
print_r($array);
if($array){

} elseif (!$array){

} else {

}

$num = 1;
switch($num) {
    case 1:
        echo 'Hello';
        break;
    case 2:
        echo 'World';
        break;
    default:
        echo 'default';
}

for($i = 1; $i<10; $i++){
    var_dump($i);
}
$i=0;
while($i<10){
    var_dump($i);
    $i++;
}
do {
    var_dump($i);
    $i++;
} while($i<10);

foreach($array as $item){
    var_dump($item);
}
foreach($array as $key=>$item){
    var_dump($key, $item);
}
