<?php
/**
 * Session03 - Exercise8 : calendar.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-12
 *
 */

/** calendar
 * $beginWeek: 0..6 - 0(Mon), 1(Tue), 2(Wed), 3(Thu), 4(Fri), 5(Sat), 6(Sun)
 * $endDay: 28..31
 *
 *  implode -> convert the contents of an array to string
 *  &nbsp -> Non-breaking Space on the browser
 *
 */
function calendar($beginWeek, $endDay) {
//    $month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    $daysOfWeek = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
    echo "<pre>";

    //  Output days
    echo implode(" ", $daysOfWeek) . "\n";
    $currentDate = 1;

    // Output spaces for the starting day of the week
    for ($i = 1; $i <= $beginWeek; $i++) {
        echo "    "; // 4 spaces
    }

    // Output the date
    for ($i = $beginWeek; $currentDate <= $endDay; $i++) {
        echo str_pad($currentDate, 2, "0", STR_PAD_LEFT) . "  ";
        if ($i % 7 === 6){
            echo "\n";
        }
        $currentDate += 1;
    }
    echo "</pre>";
}
?>

<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S03-EX8</title>
</head>
<body>
<p>Please uncomment php codes in exercise8 if you want to output a calendar on this page</p>
<?php
//    echo "<h1>Exercise 08</h1>";
//    echo calendar(3,30);
?>
</body>
</html>
