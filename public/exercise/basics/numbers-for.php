<?php
/**
 * Session03 - Exercise4 : numbers-for.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-11
 *
 */
// This problem requires you to output the numbers 00 to 99 in a 10x10 square.
// You will use a SINGLE for loop.

// str_pad(string $string, int $length, string $pat_string , int $pad_style = STR_PAD_RIGHT): string
// $string -> Original string
// $length -> Target length
// $pad_string -> Padding string (default as a single space " ")
// pad_style -> Padding position
// * STR_PAD_RIGHT -> PAD on the right (default)
// * STR_PAD_LEFT -> PAD on the left
// * STR_PAD_BOTH -> PAD evenly on both side
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX4</title>
</head>
<body>
    <?php
        echo '<h1>Exercise 04</h1>';
        for ($i = 0; $i < 100; $i++) {
            echo str_pad($i, 2, '0', STR_PAD_LEFT) . " ";
            if (($i + 1) % 10 === 0) {
            echo "<br>";
            }
        }
    ?>
</body>
</html>
