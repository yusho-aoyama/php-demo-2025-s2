<?php
/**
 * Database Connection File
 *
 * Author:          Yusho Aoyama <https://github.com/yusho-aoyama>
 * Date created:    2025-08-13
 */
require_once __DIR__ . "/settings.php";

$dbType = $_ENV['DB_TYPE'];
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASS'];

$dsn = "$dbType:host=$dbHost;dbname=$dbName;charset=UTF8";

global $pdo;

try {
    $pdo = new PDO($dsn, $dbUser, $dbPassword);

} catch (PDOException $e) {
    echo "<p><strong>Error:</strong> " . (int)$e->getCode() . " | ";
    echo "Failed to Connect to $dbName database</p>";
    echo "<p>" . $e->getMessage() . "</p>";
    exit(1);
}
