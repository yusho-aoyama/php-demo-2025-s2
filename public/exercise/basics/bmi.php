<?php
/**
 * Session03 - Exercise2 : bmi.php
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-11
 *
 */

// BMI = weight/height*2
$weight = 60.0;
$height = 1.65;
$bmi = $weight / ($height * $height);

function getBmi($bmi) {
    if ($bmi < 18.5) {
        return "Underweight";
    } elseif ($bmi > 18.5 && $bmi < 25) {
        return "Normal weight";
    } elseif ($bmi > 25 && $bmi < 30) {
        return "Over weight";
    } elseif ($bmi >= 30) {
        return "Obesity";
    }
}
?>
<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>S03-EX2</title>
</head>
<body>
    <?php
        echo "<h1>Exercise 02</h1>";
        echo "<p>{$bmi}</p>";
        echo "The person is " . getBmi($bmi);
    ?>
</body>
</html>

