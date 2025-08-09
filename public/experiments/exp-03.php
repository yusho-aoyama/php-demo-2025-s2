<?php
/**
 * Experiment 03 - Strict types
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-08
 *
 */
// Enforces strict type for scalar types, trowing an
// error instead of converting them automatically.
declare(strict_types=1);

$count = 0;
$name = "Isaac";
$total = 0.0;

echo "Total: $total | Count: $count | Name: $name";

