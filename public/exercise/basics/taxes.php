<?php
/**
 * Session03 - Exercise3 : taxes.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-11
 *
 */

// tax = salary * taxRate - deduction
const salary = 3500;

function calculateTax ($salary) {
    if ($salary < 1903.98) {
        $taxRate = 1;
        $deduction = 0;
    } elseif ($salary >= 1903.99 && $salary <= 2826.65) {
        $taxRate = 7.5;
        $deduction = 142.80;
    } elseif ($salary >= 2826.66 && $salary <= 3751.05) {
        $taxRate = 15.0;
        $deduction = 354.80;
    } elseif ($salary >= 3751.06 && $salary <= 4664.68) {
        $taxRate = 22.5;
        $deduction = 636.13;
    } else {
        $taxRate = 27.5;
        $deduction = 869.36;
    }
    $tax = ($salary * $taxRate)/100 - $deduction;
    return $tax;
}

//function calculateTax($salary) {
//    $data = [
//        [0, 1903.98, 0, 0],
//        [1903.99, 2826.65, 7.5, 142.80],
//        [2826.66, 3751.05, 15.0, 354.80],
//        [3751.06, 4664.68, 22.5, 636.13],
//        [4664.69, INF, 27.5, 869.36],
//    ];
//
//    foreach ($data as [$min, $max, $taxRate,
// $deduction]) {
//        if ($salary >= $min && $salary <= $max) {
//            return ($salary * $taxRate) / 100 - $deduction;
//        }
//    }
//
//    return 0;
//}

?>

<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>S03-EX3</title>
</head>
<body>
    <?php
        echo "<h1>Exercise3</h1>";
        echo "Payable Tax: " . calculateTax(salary);
    ?>
</body>
</html>
