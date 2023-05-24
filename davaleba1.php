<?php
// saxelebi da wlovaneba shevcvale imedia problema araa
$array = [
    "Erekle" => 17,
    "Giorgi" =>40,
    "Vaxo" => 30,
    "Misha" => 15,
    "Saba" => 48,
    "Mariami" => 31,
];

foreach ($array as $name => $age ){
    if( $age>=30 ){
      
      echo $name . ' / ';
      
    }
}
