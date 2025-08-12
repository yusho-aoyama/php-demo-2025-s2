<?php
/**
 * Session03 - Exercise6 : numbers-revers-odd-for.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-11
 *
 */
// This problem requires you to output the ODD numbers 99 to 00.
// Output:
// 99 97 95 93 91
// 89 87 85 83 81
// 79 77 75 73 71
// 69 67 65 63 61
// 59 57 55 53 51
// 49 47 45 43 41
// 39 37 35 33 31
// 29 27 25 23 21
// 19 17 15 13 11
// 09 07 05 03 01
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX6</title>
</head>
<body>
<?php
    echo '<h1>Exercise 06</h1>';
    $count = 0;
    for ($i = 99; $i >= 1; $i -= 2) {
        echo str_pad($i, 2, 0, STR_PAD_LEFT) . " ";
        $count++;
        if ($count % 5 === 0 ) {
            echo '<br>';
        }
    }
?>
</body>
</html>
