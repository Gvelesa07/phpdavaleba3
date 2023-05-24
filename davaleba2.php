<?php

echo ("func" .  ' - ');
function on(int $i){
    echo ($i*2) . '/';
}
$array2 = [
    "12",
    "32",
    "118",
    "15",
    "3",
];
foreach ($array2 as $int){
    on($int);
}