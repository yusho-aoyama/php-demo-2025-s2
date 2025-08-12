<?php
/**
 * Session03 - Exercise9 : display-calendar.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-12
 *
 */
require __DIR__ . '/calendar.php';
// Calendar
// TODO: display a month starting on Sunday(6) and ending on the 31st
// TODO: display a month starting on Monday(1) and ending on the 31st
// TODO: display a month starting on Tuesday(2) and ending on the 30th
// TODO: display a month starting on Wednesday(3) and ending on the 29th
// TODO: display a month starting on Saturday(5) and ending on the 31st

?>

<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX9</title>
</head>
<body>
<?php
    echo "<h1>Exercise 9</h1>";
    echo calendar(6, 31);
    echo calendar(1, 31);
    echo calendar(2, 30);
    echo calendar(3, 29);
    echo calendar(5, 31);
?>
</body>
</html>
