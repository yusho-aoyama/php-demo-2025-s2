<?php
/**
 * Session03 - Exercise7 : harmonic-series.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-12
 *
 */
// This problem requires you to add 1/1 + 1/2 +1/3 + 1/4 ...
// You are to write a function to perform the calculation.
// The function will be given an argument which indicates how many steps to use in the calculation.
const size = 10;
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX7</title>
</head>
<body>
<?php
    echo '<h1>Exercise 07</h1>';
    $total = 0.0;
    for ($i = 1; $i <= size; $i++) {
        $total += 1/$i;
    }
    echo "h(" . size . "): " . $total;
?>
</body>
</html>
