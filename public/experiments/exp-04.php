<?php
/**
 * Experiment 04 - Built-in Functions, Arrays and
 * Loops ...
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-09
 *
 */

$prices = [9, 54.3, 67.1, 1.35, 6.92];
$associative_array = [
    'key' => 'value',
    'given' => 'Eileen',
    'family' => 'Dover',
];
$total = array_sum($prices);

// --- for loop ---
echo "<pre>";
for ($count = 0; $count<count($prices); $count++){
    echo $prices[$count] . " ";
}
echo "</pre>";
echo "<p></p>";
// --- sort the array
sort($prices);

// --- foreach loop ---
echo "<pre>";
foreach ($prices as $price){
    echo $price." ";
}
echo "</pre>";
echo "<p></p>";

echo "<pre>";
foreach ($associative_array as $key=>$value){
    echo $key." => ". $value." ";
}
echo "</pre>";
echo "<p></p>";

foreach ($prices as $key=>$value){
    echo $key." => ". $value." ";
}


