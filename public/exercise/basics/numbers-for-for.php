<?php
/**
 * Session03 - Exercise5 : numbers-for-for.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-11
 *
 */
// This problem requires you to output the numbers 00 to 99 in a 10x10 square.
// For this solution use nested For Loops.
//
// The outer loop:
// iterates from 0 to 90 in steps of 10, representing the starting number for each row.
// The inner loop:
// runs 10 items for each now, outputting the numbers in sequence starting from the current outer loop value.
// -> Each row contains 10 numbers
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX5</title>
</head>
<body>
<?php
    echo '<h1>Exercise 05</h1>';
    for ($row = 0; $row < 100; $row += 10) {
        for ($col = 0; $col < 10; $col++) {
            $num = $row + $col;
            echo str_pad($num, 2, '0', STR_PAD_LEFT) . " ";
        }
        echo '<br>';
    }
?>
</body>
</html>
